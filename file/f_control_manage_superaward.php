<?	
	//session_start();	
	
	
	include("func.php");
	$dataBuff = new Cl_award();


	$mode = $_POST['Vmode'];
	$gift_id 	= $_POST['Gfid'];
	$person_id 	= $_POST['Vpid'];
	$Qname		= $_POST['Qname'];
	$Qid		= $_POST['Qid'];
	
	

					

	////////////////////////////////////	Monitor 2
	////////////////////////////////////	Monitor 2
	////////////////////////////////////	Monitor 2
	
	if($mode === "read_table")
	{
			$ReadTable = $dataBuff->SQL_Select("	
												select a.number,a.name,a.sid,a.unit,a.status,b.name as person_name,b.unit_case,a.seq,b.id
												from   superaward_status a
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
	
	if($mode === "waiver")
	{
		if(!$dataBuff->SQL_Query("
        						CALL  P_waiver( $gift_id)
								 ")) 	$stat = 0;
		echo	$stat;	
	}

	if($mode === "read_quatar")
	{
			$ReadTable = $dataBuff->SQL_Select("	
												select a.unit_id,a.name,a.status,
                               							( select count(*) from person where status_super = 0 and unit_case_super = a.name ) as free
												from   superaward_unit a
												order by 	a.unit_id
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
	
	if($mode === "addQouta")
	{	
		if(!$dataBuff->SQL_Query("
									insert into superaward_unit(unit_id,name,status,type)
									select max(IFNULL(unit_id,0))+1,'$Qname',0,1 from superaward_unit
								 ")) 	$stat = 0;
		echo	$stat;		
	}
	
	if($mode === "delQouta")
	{	
		if(!$dataBuff->SQL_Query("
									delete 	from superaward_unit
									where 	unit_id = $Qid
									 and	status = 0;
									
								 ")) 	$stat = 0;
		echo	$stat;		
	}
	
		
	/*
	if($mode === "gift_set_nextGift")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query("
									CALL p_giftnext($gift_id)
								 ")) 	$stat = 0;
		echo	$stat;
	}	
	*/
	////////////////////////////////////	Monitor 2
	////////////////////////////////////	Monitor 2
	////////////////////////////////////	Monitor 2



?>