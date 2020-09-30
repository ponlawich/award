<?	
	//session_start();	
	
	
	include("func.php");
	$dataBuff = new Cl_award();
	
	//$dataBuff->testconnect();
	
	$mode 			= $_POST['Vmode'];
	$page_number 	= $_POST['Vpage'];
	$vip 			= $_POST['Vip'];
	//$mode = 'showbutton';
	
	if($mode === "read")
	{
		$ReadTable = $dataBuff->SQL_Select("	
												select 		'PAGE' as mode,page_link as type,page_link as val
												from   		control_page
												where 		page_set = 1
													and		page_read = 1
												union                
												select 		'MARGIN' as MODE,marg_name as type,marg_val as val 
												from   		control_page_state
												where       gr = 'main'
													and		status = 1
												
											");	
			if($ReadTable)
			{
				$ans = array(array("result" => "true", "msg" => "success"));
					while ($row = $ReadTable->fetch_assoc()) 
					{
						array_push($ans, $row);
					}
				header('Content-Type: application/json');
				echo json_encode($ans);		
			}
			else
			{
				$ans = array(array("result" => "false", "msg" => "error"));
				header('Content-Type: application/json');
				echo json_encode($ans);		
			}		
			
			$dataBuff->SQL_Query(" 	update control_page    
									set page_read = 0 ");
			$dataBuff->SQL_Query(" 	update control_page_state    
									set status = 0 ");
	}
	
	if($mode === "sync")
	{
		
		$Tsql = "
				select 		now() as dt	
									  ";
									  
		$var1 = $dataBuff->SQL_Select($Tsql);
		$row = mysqli_fetch_array($var1);
		if($row)
			{
				echo $row['dt'];
			}
	}	
	
	if($mode === "set_init")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query("CALL p_init()")) 	$stat = 0;
		echo	$stat;
	}
	
	if($mode === "log_start")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query(" 	
									insert into log_gift(DT_set,mode,desc_gift,from_pos)
        							values(now(), 'award_page', 'เรียกหน้าแสดงโปรแกรม award.php ที่ $vip', 'ฝังในไฟล์ award.php')		
								 ")) 	$stat = 0;
		echo	$stat;
	}
	
?>