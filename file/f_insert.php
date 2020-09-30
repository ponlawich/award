<?php
	//var_dump($_POST);
	$V1 = $_POST["V1"];
	$V2 = $_POST["V2"];
	
	//echo $Vmode;
	/*$swap = $v1;
	$v1 = $v2;
	$v2 = $swap;
	
	

	
	$explode = explode(":", $v1);
	$seqV1 = $explode[0];
	$idV1 = $explode[1];
	
	echo 'seqV1 ของตัวที่สลับใหม่ = '.$seqV1;
	echo 'idV1 ของตัวที่สลับใหม่ = '.$idV1;
	
	$explode = explode(":", $v2);
	$seqV2 = $explode[0];
	$idV2 = $explode[1];
	
	echo 'seqV2 ของตัวที่สลับเก่า = '.$seqV2;
	echo 'idV2 ของตัวที่สลับเก่า = '.$idV2;
	
	
	
	include("func.php");
	$dataBuff = new Cl_award();
	
	
	$dataBuff->SQL_Query(" 	update superaward_status    
							set seq = $seqV1
							where number = $idV2");
	$dataBuff->SQL_Query(" 	update superaward_status    
							set seq = $seqV2
							where number = $idV1");
						
	
	
	
			
	}	
	*/
	include("func.php");
	$dataBuff = new Cl_award();
	
	$Vmode = $_POST["Vmode"];
	
		
	if($Vmode === "insert")
	{	
		
		if(!$dataBuff->SQL_Query("
									CALL p_insert($V1,$V2)
								 "));
								 
		
	}	
	
	if($Vmode === "swap")
	{	
		
		if(!$dataBuff->SQL_Query("
									CALL p_swap($V1,$V2)
								 "));
								 
		
	}
	
	
?>
