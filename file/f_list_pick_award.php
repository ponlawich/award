<?	
	//session_start();	
	include("func.php");
	$dataBuff = new Cl_award();
	
	$mode 		= $_POST["Vmode"];

	if($mode === "readUnitShow")
	{
		

		$ReadTable = $dataBuff->SQL_Select("	
											select 		distinct(trim(unit_show)) as unit_show
											from   		person_main
											order by 	unit_show
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

	if($mode === "readUnitCase")
	{
		

		$ReadTable = $dataBuff->SQL_Select("	
											select 		distinct(trim(unit_case)) as unit_case
											from   		person_main
											order by 	unit_case
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
	
	if($mode === "readUnitCaseSuper")
	{
		

		$ReadTable = $dataBuff->SQL_Select("	
											select 		distinct(trim(unit_case_super)) as unit_case
											from   		person_main
											order by 	unit_case
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

	if($mode === "readRank")
	{
		

		$ReadTable = $dataBuff->SQL_Select("	
											select 		distinct(rank) as rank
											from   		person_main
											order by 	rank
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
	
	if($mode === "readdata_kla")
	{
		

		$ReadTable = $dataBuff->SQL_Select("	
											select * from award_pick_number
											where status = 0
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

?>

