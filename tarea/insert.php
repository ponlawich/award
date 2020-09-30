<?php
	include('connect.php');
	
	$sqlCheck= "SELECT * FROM person_main WHERE pk = :pk ";
	$stm = $conn_mysql->prepare( $sqlCheck );
	$stm->bindParam(':pk', $_POST["pk"], PDO::PARAM_INT);
	$stm->execute();
    $count = $stm->rowCount();
	//echo $count;
	
	if($count == 0){
		$stmt = $conn_mysql->prepare("INSERT INTO person_main SELECT * FROM person WHERE pk =:a");
		$stmt->bindParam(':a', $_POST["pk"]);
		$result = $stmt->execute();
		if( $result ) {
			echo json_encode(array('status' => '1','message'=> 'ลงทะเบียนสำเร็จ'));
		}
	} 
	else
	{
		echo json_encode(array('status' => '0','message'=> 'ลงทะเบียนแล้ว'));
	}
	
?>