<?	
	//session_start();	
	
	
	include("func.php");
	$dataBuff = new Cl_award();


	$mode = $_POST['Vmode'];

	if($mode === "clear_data")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query("
									CALL p_init_data()
								 ")) 	$stat = 0;
		echo	$stat;
	}

	if($mode === "clear_log")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query("
									delete from log_gift;
								 ")) 	$stat = 0;
		echo	$stat;
	}

?>