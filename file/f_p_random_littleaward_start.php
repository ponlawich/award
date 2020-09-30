<?	
	//session_start();	
	
	
	include("func.php");
	$dataBuff = new Cl_award();


	$mode = $_POST['Vmode'];
	$unit = $_POST['unit'];                  
	$unit_select = $_POST['unit_select'];                  
               
  
	if($mode === "Calldata")
			{	
				$stat = 1;
				$dataBuff->SQL_Query(" call P_chk_little_status2('$unit')");
				echo $stat;
			}
	if($mode === "random_unit_little")
			{	
				
				$dataBuff->SQL_Query(" call P_chk_after_little('$unit_select')");
				
			}

?>
