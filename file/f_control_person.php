<?	
	//session_start();	
	include("func.php");
	$dataBuff = new Cl_award();

	$mode 		= $_POST["Vmode"];
	
	$AwordID 	= $_POST["Vaword"];
	$AwordName 	= $_POST["VawordName"];
	
	$Ppk		=	$_POST["VpersonPk"];
	$Pid		=	$_POST["VpersonId"];
	$Prank		=	$_POST["VpersonRank"];
	$Pname		=	$_POST["VpersonName"];
	$PunitCase	=	$_POST["VpersonUnitCase"];
	$PunitCaseSuper	=	$_POST["VpersonUnitCaseSuper"];
	$PunitShow	=	$_POST["VpersonUnit_show"];
	$PImgName	=	$_POST["VpersonImg"];
	
	
	
	
	
	if($mode === "readData")
	{
		

		$ReadTable = $dataBuff->SQL_Select("	
											select 		pk,id,rank,name,unit_show,unit_case,unit_case_super,pictype
											from   		person_main
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
	

	if($mode === "upLoadPersonCSV")
	{
			//echo "In upLoadPersonCSV";
		
			$fileSize 		= $_FILES['file']['size'];
			$fileTmpName  	= $_FILES['file']['tmp_name'];
			$fileType 		= $_FILES['file']['type'];
		
		
			//ทำการเปิดไฟล์ CSV เพื่อนำข้อมูลไปใส่ใน MySQL  
			
			$objCSV = fopen($fileTmpName, "r");  
			
			while (($BuffArr = fgetcsv($objCSV, 1000, ",")) !== FALSE) {  
			
					if(iconv( 'TIS-620', 'UTF-8', $BuffArr[2]) === 'name') continue;
					
					$Vid 			= trim(iconv( 'TIS-620', 'UTF-8', $BuffArr[0]));
					$Vrank			= trim(iconv( 'TIS-620', 'UTF-8', $BuffArr[1]));
					$Vname			= trim(iconv( 'TIS-620', 'UTF-8', $BuffArr[2]));
					$Vunit_show		= trim(iconv( 'TIS-620', 'UTF-8', $BuffArr[3]));
					$Vunit_case		= trim(iconv( 'TIS-620', 'UTF-8', $BuffArr[4]));
					$Vunit_caseSuper= trim(iconv( 'TIS-620', 'UTF-8', $BuffArr[5]));
					
					$SQLstr = "
								insert into person_main(id,rank,name,unit_show,unit_case,unit_case,gid,status)
								values('$Vid',$Vrank,'$Vname','$Vunit_show','$Vunit_case','$Vunit_caseSuper','1','0')
								";
					$dataBuff->SQL_Query($SQLstr);
			}  
			fclose($objCSV);  
			echo "Import Done.";  
	}
	
	
	if($mode === "clearTable")
	{
		
		$SQLstr = "
					TRUNCATE TABLE person_main
					";
		$dataBuff->SQL_Query($SQLstr);	
		$SQLstr = "
					delete from person_main
					";
		$dataBuff->SQL_Query($SQLstr);			
	}	
	
	
	if($mode === "updateData")
	{
		$SQLstr = "
					update person_main
					set
							rank			= $Prank,
							name			= '$Pname',
							unit_show		= '$PunitShow',
							unit_case		= '$PunitCase',
							unit_case_super	= '$PunitCaseSuper'
					where 	pk = $Ppk
					";
		$dataBuff->SQL_Query($SQLstr);	
		

			
		if($_FILES['file']['name'] !== "")
		{
			UpImg(1,$Pid);
		}
	}

	if($mode === "insertData")
	{
				$ReadTable = $dataBuff->SQL_Select("	
											select 		max(IFNULL(id, 0)*1)+1 as id
											from   		person_main
											");	
				$row 	= $ReadTable->fetch_assoc();
				$VNid 	= $row['id'];
				
				
				$SQLstr = "
								insert into person_main(id,rank,name,unit_show,unit_case,unit_case_super,gid,status)
								values('$VNid',$Prank,'$Pname','$PunitShow','$PunitCase','$PunitCaseSuper','1','0')
								";
				$dataBuff->SQL_Query($SQLstr);	
				
				if($_FILES['file']['name'] !== "")
				{
					UpImg(2,$VNid);
				}	
	}

	if($mode === "deleteData")
	{
				$SQLstr = "
								delete from  person_main
								where id = '$Pid'
								";
				$dataBuff->SQL_Query($SQLstr);	
				unlink("..\\imageuse\\person\\".$PImgName);	
				echo $PImgName;
	}
	
	
	
	
	
	
	function UpImg($md,$Vkey) 
	{
		$Buff = new Cl_award();
		
			$fileSize 		= $_FILES['file']['size'];
			$fileTmpName  	= $_FILES['file']['name'];
			$fileTmpName  	= $_FILES['file']['tmp_name'];
			$fileType 		= $_FILES['file']['type'];	
			
			
			
			/////////////////////////////////////////////////////////
			$uploadDirectory = "imageuse/person/";
		
			$Verrors = []; 
			$fileExtensions = ['jpeg','jpg','png']; 
			$fileName 		= $_FILES['file']['name'];
			///
			$buff	=	explode(".",$fileName);
			$Ftype	=	$buff[1];
			//
			
			$fileSize 		= $_FILES['file']['size'];
			$fileTmpName  	= $_FILES['file']['tmp_name'];
			$fileType 		= $_FILES['file']['type'];
			$fileExtension 	= strtolower(end(explode('.',$fileName)));
		
			$uploadPath = "../" . $uploadDirectory . $Vkey . "." . $Ftype; 
			
				if (! in_array($fileExtension,$fileExtensions)) {
					//$errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
					$errors[] = "ชนิดไฟล์ไม่ตรงกับที่อนุญาติ jpeg','jpg','png";
				}
		
				if ($fileSize > 2000000) {
					//$errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
					$errors[] = "file มีขนาดใหญ่กว่าที่กำหนด 2MB.";
				}
		
				if (empty($errors)) {
					$didUpload = move_uploaded_file($fileTmpName, $uploadPath);
		
					if ($didUpload) {
						//echo "The file " . basename($fileName) . " has been uploaded";
						echo "file " . $NameofFile . " upload เรียบร้อย";	
						
							//if($md==1) $vCas = " where 	pk = $Vkey ";
							//if($md==2) $vCas = " where 	id = '$Vkey'";
							
								$SQLstr = "
											update person_main
											set
													pictype		= '$Ftype'
											where 	id 			= '$Vkey'
											";
											echo $SQLstr;
								$Buff->SQL_Query($SQLstr);	
						
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
?>

