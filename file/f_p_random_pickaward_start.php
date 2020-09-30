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
				$dataBuff->SQL_Query(" call P_chk_pick_award('$unit')");
				echo $stat;
			}
	if($mode === "random_unit_little")
			{	
				
				$dataBuff->SQL_Query(" call P_chk_after_pickaward('$unit_select')");
				
			}

?>
