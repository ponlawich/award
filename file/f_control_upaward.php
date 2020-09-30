<?	
	//session_start();	
	include("func.php");
	$dataBuff = new Cl_award();

	$mode 		= $_POST["Vmode"];
	
	$AwordID 	= $_POST["Vaword"];
	$AwordName 	= $_POST["VawordName"];
	$AwordFName 	= $_POST["VawordFName"];
	
	
	
	

	
	
	/*echo "File type ".$_FILES["file"]["type"]."||";
	echo "upaward_filename ".$_POST["upaward_filename"]."||";
	
	echo "=".$sourcePath = $_FILES['files']['tmp_name']."=";       // Storing source path of the file in a variable
	echo $targetPath = "upload/".$_FILES['files']['name']; 
	*/


	
	if($mode === "readData")
	{
		

		$ReadTable = $dataBuff->SQL_Select("	
											select 		id,ptype,ftype,fname,pname,status
											from   		picture
                      						where     	ptype = 'award'
											order by 	id
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
	

	if($mode === "setAword")
	{
		$stat = 1;
		if(!$dataBuff->SQL_Query(" 	
									update picture
									set
										status = 0
									where 	upper(ptype) = 'award'
								 ")) 	$stat = 0;
		
		if($stat = 1)
		{
			if(!$dataBuff->SQL_Query(" 	
										update picture
										set
											status = 1
										where 	id = $AwordID
									 ")) 	$stat = 0;			
		}
		echo	$stat;
	}
	
	
	if($mode === "upLoadAword")
	{
		
		/*
				echo "|Vmode ".$_FILES['Vmode']['variable_name'];
		
		echo  "|file_name ".$_FILES['file']['name'];
		echo  "|file_size ".$_FILES['file']['size'];
		echo  "|file_type ".$_FILES['file']['type'];
		echo  "|file_error ".$_FILES['file']['error'];
		echo  "|tmp_name ".$_FILES['file']['tmp_name']."| DUMP =";
		var_dump($_FILES['file']);
		echo  "| DUMP2 =";
		var_dump($_FILES['data2']);
		echo "|Vmode ".$_POST['Vmode'];
		echo "|VawordName ".$_POST['VawordName'];
		*/

			$NameofFile = time();
		
			$currentDir = getcwd();
			$uploadDirectory = "imageuse/award/";
		
			$Verrors = []; // Store all foreseen and unforseen errors here
		
			$fileExtensions = ['jpeg','jpg','png','gif','mp4']; // file extensions
		
			$fileName 		= $_FILES['file']['name'];
			
			///
			$buff	=	explode(".",$fileName);
			$Fname	=	$buff[0];
			$Ftype	=	$buff[1];
			//
			
			$fileSize 		= $_FILES['file']['size'];
			$fileTmpName  	= $_FILES['file']['tmp_name'];
			$fileType 		= $_FILES['file']['type'];
			$fileExtension 	= strtolower(end(explode('.',$fileName)));
		
			//echo "+----+".$fileName."+----+".$fileType."+----+";
		

			$uploadPath = "../" . $uploadDirectory . $NameofFile . "." . $Ftype; 
			
				if (! in_array($fileExtension,$fileExtensions)) {
					//$errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
					$errors[] = "ชนิดไฟล์ไม่ตรงกับที่อนุญาติ jpeg','jpg','png";
				}
		
				if ($fileSize > 200000000) {
					//$errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
					$errors[] = "file มีขนาดใหญ่กว่าที่กำหนด 2MB.";
				}
		
				if (empty($errors)) {
					$didUpload = move_uploaded_file($fileTmpName, $uploadPath);
		
					if ($didUpload) {
						//echo "The file " . basename($fileName) . " has been uploaded";
						echo "file " . $NameofFile . " upload เรียบร้อย";
							$stat = 1;
							if(!$dataBuff->SQL_Query(" 	
														insert into picture(ptype,ftype,fname,pname,status)
														values('award','$Ftype','$NameofFile','$AwordName',0)
													 ")) 	$stat = 0;
							echo "Insert data base Complete.";
						
						
					} else {
						//echo "An error occurred somewhere. Try again or contact the admin";
						echo "มีข้อผิดพลาด";
					}
				} else {
					foreach ($errors as $error) {
						//echo $error . "These are the errors" . "\n";
						echo "มีข้อผิดพลาด";
					}
				}
			
	}	
	
	
	if($mode === "deleAward")
	{
		$AwordID 	= $_POST["Vaword"];
	
		unlink("..\\imageuse\\award\\".$AwordFName);
		//echo "\\imageuse\\award\\".$AwordName;
		$stat = 1;
		
		if(!$dataBuff->SQL_Query(" 	
									delete from picture
									where 		id = $AwordID
								")) 	$stat = 0;
		echo $stat;
		
	}

?>

