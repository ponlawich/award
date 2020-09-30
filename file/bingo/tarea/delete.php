<?php
	include('connect.php');
	
	$stmt = $conn_mysql->prepare("DELETE FROM person_main WHERE pk = :a");
	$stmt->bindParam(':a', $_POST["delete_pk"]);
	$result = $stmt->execute();
	
	if( $result ) {
			echo json_encode(array('status' => '1','message'=> 'ลบข้อมูลสำเร็จ'));
	}else{
		echo json_encode(array('status' => '0','message'=> 'Error delete data!'));
	}


?>