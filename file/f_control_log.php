<?	
	//session_start();	
	
	
	include("func.php");
	$dataBuff = new Cl_award();


	$mode = $_POST['Vmode'];
	
	

					

	////////////////////////////////////	Monitor 2
	////////////////////////////////////	Monitor 2
	////////////////////////////////////	Monitor 2
	
	if($mode === "read_table")
	{
			$ReadTable = $dataBuff->SQL_Select("	
												select 		dt_set,mode,desc_gift,from_pos
												from   		log_gift
												order by 	dt_set
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