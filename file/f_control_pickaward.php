<?	
	//session_start();	
	$unit_name =  $_POST['unit_name'];
	$c1a =  $_POST['c1a'];
	$c1b =  $_POST['c1b'];
	$c1c =  $_POST['c1c'];
	$c2a =  $_POST['c2a'];
	$c2b =  $_POST['c2b'];
	$c2c =  $_POST['c2c'];
	$c3a =  $_POST['c3a'];
	$c3b =  $_POST['c3b'];
	$c3c =  $_POST['c3c'];
	$c4a =  $_POST['c4a'];
	$c4b =  $_POST['c4b'];
	$c4c =  $_POST['c4c'];
	$id	 =	$_POST['id'];
	$name_gift = $_POST['name_gift'];
	$type_gift = $_POST['type_gift'];
	$id_gift = $_POST['id_gift'];
	
	include("func.php");
	$dataBuff = new Cl_award();
	
		$mode 		= $_POST["Vmode"];
		
		if($mode === "readData")
			{
				

				$ReadTable = $dataBuff->SQL_Select("select * from unit_class");	
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
		
		if($mode === "Chk_Gift_Data")
			{
				

				$ReadTable = $dataBuff->SQL_Select("select hello() as val");	
				$row = $ReadTable->fetch_assoc();
				echo $row['val'];
					/*
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
					*/
			}	
		
		
		if($mode === "addData")
			{			
				$dataBuff->SQL_Query(" INSERT INTO award_pick_number (unit, a, b, c, d, e, f, g, h, i, j, k, l )
										VALUES ('$unit_name', $c1a, $c1b, $c1c, $c2a, $c2b, $c2c, $c3a, $c3b, $c3c, $c4a, $c4b, $c4c )
									");
			}
	
		if($mode === "deleteData")
			{			
				
				$dataBuff->SQL_Query(" DELETE FROM award_pick_number WHERE id = $id");
	
			}
			
		if($mode === "ReadUpdateData")
			{			
				$ReadInput = $dataBuff->SQL_Select("select * from award_pick_number where id = $id");
				if($ReadInput)
					{
						$ans = array(array("result" => "true", "msg" => "success"));
							while ($row = $ReadInput->fetch_assoc()) 
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
	
		if($mode === "UpdateData")
			{			
				$dataBuff->SQL_Query(" 	UPDATE award_pick_number
										SET unit = '$unit_name', a = $c1a, b = $c1b, c = $c1c, d = $c2a, e = $c2b, f = $c2c, g = $c3a, h = $c3b, i = $c3c, j = $c4a, k = $c4b, l = $c4c    
										WHERE Id = $id;
									");
									
				
	
			}
			
			
		if($mode === "readData_gift")
			{
				

				$ReadTable = $dataBuff->SQL_Select("select gift_pick_award.* , person.name as pname
													from gift_pick_award
													left join person
													on gift_pick_award.person_id = person.id");	
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
			
		if($mode === "AddData_gift")
			{
				
					$dataBuff->SQL_Query(" INSERT INTO gift_pick_award (name, type, status )
											VALUES ( '$name_gift','$type_gift',0)
										");

				
			}	
		
		if($mode === "Gift_deleteData")
			{			
				
				$dataBuff->SQL_Query(" DELETE FROM gift_pick_award WHERE id = $id");
	
			}
		
		if($mode === "cancle_pick_award")
			{			
				
				$dataBuff->SQL_Query(" update gift_pick_award
									   set status = 0 , person_id = 0, r_show = 0
									   where Id = $id
									   ");
	
			}
		
		if($mode === "Gift_ReadUpdateData")
			{			
				$ReadInput = $dataBuff->SQL_Select("select * from gift_pick_award where id = $id");
				if($ReadInput)
					{
						$ans = array(array("result" => "true", "msg" => "success"));
							while ($row = $ReadInput->fetch_assoc()) 
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
			
		if($mode === "Gift_UpdateData")
			{		
				
				$dataBuff->SQL_Query(" 	UPDATE gift_pick_award
										SET name = '$name_gift', type = '$type_gift'
										WHERE id = $id_gift;
									");
				
	
			}
			
		if($mode === "CalldataRandom")
			{		
				$unit_show = $_POST['unit_show'];
				echo $unit_show;
				$dataBuff->SQL_Query(" 	UPDATE unit_class
										SET show_status = 0
										
									");
				$dataBuff->SQL_Query(" 	UPDATE unit_class
										SET show_status = 1
										WHERE unit = '$unit_show';
									");
	
			}
	/////////
	/*
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
	*/
?>