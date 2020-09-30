<?	
	//session_start();	
	
	
	include("func.php");
	$dataBuff = new Cl_award();


	$mode = $_POST['Vmode'];
	$AVid = $_POST['VawardID'];                  
                    
                    
 	if($mode === "random")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query("
									CALL P_Random_Super($AVid)
								 ")) 	$stat = 0;
		echo	$stat;
	}


?>
