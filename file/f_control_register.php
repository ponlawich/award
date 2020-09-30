<?	
	//session_start();	
	
	
	include("func.php");
	$dataBuff = new Cl_award();


	$mode = $_POST['Vmode'];
	$pid = $_POST['Vpid'];


	///////////////////////////////////////		MAIN PERSON	//////////////////////////////////
	///////////////////////////////////////		MAIN PERSON	//////////////////////////////////
	///////////////////////////////////////		MAIN PERSON	//////////////////////////////////
	///////////////////////////////////////		MAIN PERSON	//////////////////////////////////

	if($mode==="read_mainperson")
	{
		$ReadTable = $dataBuff->SQL_Select("	
												select	pk,id,rank,name,mil_force,gender,unit_show,
														unit_case,gid,status_super,status_little,pictype
												from	person_main
												where	id not in
												(
													select id
													from person
												)
												order by id*1
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

 	if($mode === "person_add")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query("
									insert into  person(pk,id,rank,name,mil_force,gender,unit_show,unit_case,gid,status_super,status_little,pictype)
									select	pk,id,rank,name,mil_force,gender,unit_show,unit_case,gid,0,0,pictype
									from	person_main
									where	id = $pid
								 ")) 	$stat = 0;
		echo	$stat;
	}





	///////////////////////////////////////		PERSON	//////////////////////////////////
	///////////////////////////////////////		PERSON	//////////////////////////////////
	///////////////////////////////////////		PERSON	//////////////////////////////////
	///////////////////////////////////////		PERSON	//////////////////////////////////
	
	if($mode==="read_person")
	{
		$ReadTable = $dataBuff->SQL_Select("	
												select	pk,id,rank,name,mil_force,gender,unit_show,unit_case,gid,status_super,status_little,pictype
												from	person
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

 	if($mode === "person_del")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query("
									delete
									from person
									where id = $pid
									and status_super = 0
									and status_little = 0
								 ")) 	$stat = 0;
		echo	$stat;
	}


?>