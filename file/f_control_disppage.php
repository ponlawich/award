<?	
	//session_start();	
	
	
	include("func.php");
	$dataBuff = new Cl_award();

	//$dataBuff->testconnect();
	if( isset( $_POST['Vmode'] )){
		$mode = $_POST['Vmode'];
	}

	//Control page
	$Vval 	= $_POST['Vval'];
	
	//pageshow
	if( isset( $_POST['Vpage'] )){
		$page_number 	= $_POST['Vpage'];
	}
	
	//side_margin
	if( isset( $_POST['Vside'] )){
		$margin_side 	= $_POST['Vside'];
	}
	
	if( isset( $_POST['Vval'] )){
		$margin_val 	= $_POST['Vval'];
	}
	if( isset( $_POST['Vpid'] )){
		$pid 	= $_POST['Vpid'];
	}
	//$mode = 'showbutton';
	$vip 		= $_POST['Vip'];
	$gift_id 	= $_POST['Gfid'];
	
	
	$HrID 	= $_POST['VHorseid'];
	$HrDr 	= $_POST['VHorDr'];
	$HrDsp 	= $_POST['Vdisp'];
	
	
	
	
	
	
	
	
	if($mode === "log_start")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query(" 	
									insert into log_gift(DT_set,mode,desc_gift,from_pos)
        							values(now(), 'control_page', 'เรียกหน้าควบคุม control.php ที่ $vip', 'ฝังในไฟล์ control.php')		
								 ")) 	$stat = 0;
		echo	$stat;
	}	
	//////////////////////////////	Control
	//////////////////////////////	Control
	//////////////////////////////	Control
	if($mode === "showbutton")
	{
		$ReadTable = $dataBuff->SQL_Select("	
											select 		page_id,page_set,page_read,page_name,page_link,page_desc,page_enable
											from   		control_page
											order by 	page_id
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
	}	
	
	if($mode === "pageshow")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query("CALL p_showpage($page_number)")) 	$stat = 0;
		echo	$stat;
	}
	
	if($mode === "side_margin")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query("CALL p_set_screen('$margin_side','$margin_val')")) 	$stat = 0;
		
		//Read value
		$ReadTable = $dataBuff->SQL_Select("	
											select 		marg_name,marg_val
											from   		control_page_state
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
	}
	
	if($mode === "set_frame")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query("
									update control_page_state
									set
										marg_val 	= (marg_val + 1)%2,
										status		= 1
									where marg_name = 'FRAME'
								 ")) 	$stat = 0;
		echo	$stat;
	}
	
	if($mode === "set_light")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query("
									update control_page_state
									set
										marg_val 	= (marg_val + 1)%2,
										status		= 1
									where marg_name = 'LIGHT'
								 ")) 	$stat = 0;
		echo	$stat;
	}
	
	if($mode === "set_background")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query("
									update control_page_state
									set
										marg_val 	= (marg_val + 1)%2,
										status		= 1
									where marg_name = 'BACK_GROUND'
								 ")) 	$stat = 0;
		echo	$stat;
	}
	
	if($mode === "set_refresh")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query("
									update control_page_state
									set
										marg_val 	= 1,
										status		= 1
									where marg_name = 'REFRESH'
								 ")) 	$stat = 0;
		echo	$stat;
	}

	if($mode === "set_syncScreen")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query("
									CALL p_init()
								 ")) 	$stat = 0;
		echo	$stat;
	}	
	
	if($mode === "set_num_of_subGift")
	{
		//$Vval
		$stat = 1;
		if(!$dataBuff->SQL_Query("
									update control_page_state
									set
										marg_val 	= $Vval
									where marg_name = 'num_of_ran'
								 ")) 	$stat = 0;
		echo	$stat;
	}	
	
	////////////////////////////////////	Monitor 2
	////////////////////////////////////	Monitor 2
	////////////////////////////////////	Monitor 2
	
	if($mode === "read_table_monitor2")
	{
			$ReadTable = $dataBuff->SQL_Select("	
												select a.number,a.name,a.sid,a.unit,a.status,b.name as person_name,b.unit_case
												from   gift_spacial a
												left join person b
												on     a.sid = b.id
												order by 	a.number*1
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
	}
	
	if($mode === "gift_clear")
	{
		if(!$dataBuff->SQL_Query("
        						insert into log_gift(DT_set,mode,desc_gift,from_pos)
        						values(now(), 'delete', 'Gift status ลบสถานะของรางวัลและส่งผลถึงคนที่ได้จะหายไป รหัสรางวัล $gift_id', 'f_pagecon.php')       
								 ")) 	$stat = 0;
		echo	$stat;	
		
		if(!$dataBuff->SQL_Query("
									update gift_spacial
									set
											sid 	= null,
											unit	= null,
											status	= 0
									where number = $gift_id
								 ")) 	$stat = 0;
		echo	$stat;	
	}
	
	if($mode === "gift_set_nextGift")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query("
									CALL p_giftnext($gift_id)
								 ")) 	$stat = 0;
		echo	$stat;
	}	
	
	////////////////////////////////////	Monitor 2
	////////////////////////////////////	Monitor 2
	////////////////////////////////////	Monitor 2
	
	
	////////////////////////////////////	Monitor 3
	////////////////////////////////////	Monitor 3
	////////////////////////////////////	Monitor 3
	
	if($mode === "read_table_monitor3")
	{
			$ReadTable = $dataBuff->SQL_Select("	
												select     ifnull(b.number,0) as gift_id,ifnull(b.name,'remove') as gift_name,
														   a.id as person_id,a.name as person_name,a.unit_case,a.status
												from       person a
												left join  gift_spacial b
													 on    a.id = b.sid     
												where      a.status = 1
												order by gift_id
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
	}
	
	if($mode === "cancel_person")
	{	
		$stat = 1;
		if(!$dataBuff->SQL_Query("
									CALL p_cancel_person($pid)
								 ")) 	$stat = 0;
		echo	$stat;	
	}
	
	if($mode === "gift_set_perGift")
	{	
		
		$stat = 1;
		
		if(!$dataBuff->SQL_Query("
        						insert into log_gift(DT_set,mode,desc_gift,from_pos)
        						values(now(), 'log_gift', 'กำหนดรางวัลรหสั $gift_id ให้กับ บุคคลรหัส $pid', 'f_pagecon.php')       
								 ")) 	$stat = 0;
		echo	$stat;	
		
		if(!$dataBuff->SQL_Query("
									update gift_spacial
									set
											sid 	= $pid,
											status 	= 1,
											unit 	= (
														select max(no)
														from unit_spacial
														where status = 0 and name in (select unit_case from person where id = $pid )
													)
									where number = $gift_id
								 ")) 	$stat = 0;
								 
		if(!$dataBuff->SQL_Query("
									update person
									set
											status = 1
									where id = $pid
								 ")) 	$stat = 0;
		echo	$stat;	
		
	}
	
	if($mode === "read_log1")
	{
			$ReadTable = $dataBuff->SQL_Select("	
												select dt_set,mode,desc_gift
												from log_gift
												order by DT_set
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
	}
	////////////////////////////////////	Monitor 3
	////////////////////////////////////	Monitor 3
	////////////////////////////////////	Monitor 3
	
	
	////////////////////////////////////	Monitor 4
	////////////////////////////////////	Monitor 4
	////////////////////////////////////	Monitor 4
	
	if($mode === "read_table_monitor4")
	{
			$ReadTable = $dataBuff->SQL_Select("	
											select 	a.number as gif_code,a.name as gift_name ,
													b.no as unit_code,b.name as unit_name,
													c.id as person_code,c.name as person_name,c.unit_case
											from gift_20 a
											left join unit_specail_sub b
											on  a.number = b.no
											left join person c
											on a.sid = c.id
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
	}
	
	if($mode === "cancel_gift20")
	{	
		$stat = 1;
		if(!$dataBuff->SQL_Query("
									CALL p_clear_gift20($pid)
								 ")) 	$stat = 0;
		echo	$stat;	
	}
	////////////////////////////////////	Monitor 4
	////////////////////////////////////	Monitor 4
	////////////////////////////////////	Monitor 4
	


	////////////////////////////////////	horse
	////////////////////////////////////	horse
	////////////////////////////////////	horse	
	
	if($mode === "set_horse")
	{	
		$stat = 1;
		if(!$dataBuff->SQL_Query("
									CALL p_set_horse($HrID,'$HrDr')
								 ")) 	$stat = 0;
		echo	$stat;	
	}	
	
	if($mode === "set_display")
	{	
		if(!$dataBuff->SQL_Query("
									update control_page_state
									set
											marg_val = $HrDsp,
											status = 1
									where marg_name = 'DSP_HORSE'
								 ")) 	$stat = 0;
		echo	$stat;	
	}

	
	////////////////////////////////////	horse
	////////////////////////////////////	horse
	////////////////////////////////////	horse	
?>