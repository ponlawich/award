<?php
	include 'func.php';
	session_start();
	
	$_SESSION['PID'] = '3260100345177';
	$_SESSION['SYEAR'] = 2558;
	//if($_SESSION['PAGE'] != "SEARCH4" && $_SESSION['PAGE'] != "REPORT_SEARCH") header("location: Login.php");
	require_once('report/tcpdf/config/lang/eng.php');
	require_once('report/tcpdf/tcpdf.php');
   
		   			$stid = oci_parse(connect(),"SELECT QUES_IDCARD,QUES_YEAR,QUES_UNIT,DADMUM_DM,DADMUM_HT,DADMUM_GOUT,DADMUM_CRF,DADMUM_MI,
									 DADMUM_STROKE,DADMUM_COPD,DADMUM_NO,DADMUM_DONKNOW,DADMUM_OTHER,DADMUM_OTHER_NOTE,
									 BROTHER_DM,BROTHER_HT,BROTHER_GOUT,BROTHER_CRF,BROTHER_MI,BROTHER_STROKE,BROTHER_COPD,
									 BROTHER_DONKNOW,BROTHER_NO,BROTHER_OTHER,BROTHER_OTHER_NOTE,HIS_DM,DRUG_DM,HIS_HT,
									 DRUG_HT,HIS_TRIVER,DRUG_TRIVER,PALSY,DRUG_PALSY,HIS_HRART,DRUG_HRART,HIS_FAT,DRUG_FAT,
									 BLISTER,BORN,DRINKOVER,URINE,EAT,LOWWEIGHT,HEPPES,SKINITCH,EYE,ASLEEP,GALLSTONE,SWELL,
									 COUGH,CHEST,TIRED,CHUNK,LIQUID,FEVER,STOMACH,YELLOW_EYE,HAND_LEG,JOINT,STROKE,
									 nvl(THEATDIESEASE,'6')as THEATDIESEASE,
									 EXERCISE,SUGAR,SALT,FAT,DISLIKE,SMOKE,SMOKEDAY,SMOKEYEAR,TYPECIGARETTE,SMOKE_LONG,TYPECIGARETTE2,
									 LONGYEAR,DRINK,DRINKNO,MONEY,DEBT,DEBT_CASE,DRINK_ACCIDENT,PROTECT,DRIVE,INTERCOURSE,CONDOM,
									 SERIOUS,SERIOUS_NEXT,SERIOUS_OTHER,ENVIRONMENT,ENV_NEXT,ENV_OTHER,CLEAN,DIRTY,BRIGHT,DARK,
									 NARROW,WORK_OTHER,ENVWORK_OTHER,STATUS_CHK,DATE_CHK,DATE_WORK,PASSWD,UDATE,DADMUM_HEART,
									 DADMUM_LIVE,SPC_ELECTRIC,SPC_WATER,SPC_AIR,SPC_GARDEN,SPC_COMPUTER,SPC_FOOD,
									 SPC_OTHER,SPC_DETAIL,COCLUB,CLUBAMOUNT,VOLUNTEER,VOLUNTEERAMOUNT,UNIT_HELP,HOSPITAL_CODE
							FROM med_ques_tab
							WHERE ques_idcard = '".$_SESSION['PID']."'
							AND ques_year = ".$_SESSION['SYEAR']);
					
					oci_execute($stid);
					OCIFetch($stid);
			$ptd = oci_parse(connect(), "SELECT PID,ARMY,RANK,NAME,LASTNAME,TYPE,
												to_char(DOB,'dd-mm-yyyy') as DOB,SEX,EDUCATION,
												ADDRESS,HOME,ROAD,AREA,DISTRICT,PROVINCE,POST,TEL,MOBILE,CRAK_NAME_ACM1,
												UNIT_SNAME
										FROM person,MED_CRAK_TAB,MED_UNIT_TAB
										WHERE pid = '".$_SESSION['PID']."' 
										AND to_number(person.rank) = to_number(MED_CRAK_TAB.CRAK_CODE)
										AND person.UNIT = MED_UNIT_TAB.UNIT_CODE");
			oci_execute($ptd);
			OCIFetch($ptd);
							/*
							WHERE ques_idcard = '".$_SESSION['PID']."'
							AND ques_year = ".$_SESSION['SYEAR']);
							*/
							/////////////////////////////////////////////////////////////////////////////////
							$pv = oci_parse(connect(), "SELECT HEALTY_AMPHUR_TAB.AMPHUR_NAME as AMPHUR_NAME,
															   HEALTY_PROV_TAB.PROV_NAME as PROV_NAME
														FROM   HEALTY_AMPHUR_TAB
														INNER JOIN HEALTY_PROV_TAB
														ON    HEALTY_PROV_TAB.PROV_CODE = HEALTY_AMPHUR_TAB.PROV_CODE
														WHERE AMPHUR_CODE = '".Conv(OCIResult($ptd,"DISTRICT"))."'");
								oci_execute($pv);
								OCIFetch($pv);
								$Prov = Conv(OCIResult($pv,"PROV_NAME"));
								$Dis  = Conv(OCIResult($pv,"AMPHUR_NAME"));
							/////////////////////////////////////////////////////////////////////////////////	
							$ph = oci_parse(connect(), "SELECT  SUPPORT_NAME,SUPPORT_BPPCS
														FROM    HEALTY_SUPPORT_TAB
														WHERE   SUPPORT_CODE = '".Conv(OCIResult($stid,"HOSPITAL_CODE"))."'");
								oci_execute($ph);
								OCIFetch($ph);
								$HServ = Conv(OCIResult($ph,"SUPPORT_NAME"));
								$Hcode = Conv(OCIResult($ph,"SUPPORT_BPPCS"));
							/////////////////////////////////////////////////////////////////////////////////	
					if(OCIResult($ptd,"SEX")=='2') $Se = 'หญิง';
					else $Se = '';
 	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
   // set font
   //$pdf->SetFont('thsarabun', '', 14.5);
   $pdf->setPrintHeader(false);
   $pdf->SetFont('freeserif', '', 11);
  
   // add a page
   //$pdf->AddPage();
   $pdf->AddPage('P', 'A4');
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	$image = "barcode.php?barcode=1320100123304&width=300&height=40";
///Start Page 1
	   $html = '
		<p align="center"><b>ระบบสำรวจและคัดกรองความเสี่ยงต่อสุขภาพประจำปี '.(date("Y")+543).'</b></p>
		|||<br/>1<img src=\report\tcpdf\images\barcode.php?barcode=1320100123304&width=300&height=40>|||
		<br/><img src="report/tcpdf/images/rec_check.gif" width="10" height="10" /> 
		|||<br/>2<img src=report/tcpdf/images/barcode.php?barcode=1320100123304&width=300&height=40>|||
		|||<br/>3<img src="'.$image.'">|||
		
																							<table width="500" border="0">
																							<tr><td width="300"></td><td width="300">
																								<table width="200" border="1" align="right">
																								<tr><td width="190">
																						สังกัด '.Conv(OCIResult($ptd,"UNIT_SNAME")).' &nbsp;&nbsp; 
																										<br>(หน่วยรับเงินเดือน) &nbsp;&nbsp;
																										<br>ที่ทำงาน/ชรก. '
																										 .Conv(OCIResult($stid,"UNIT_HELP")).' &nbsp;&nbsp;
																								</td></tr>
																								</table>
																							</td></tr>
																							</table>
																								
																											  <p align="right">เลขที่ 1234</p>
													<p align="right">หน่วยบริการที่ให้บริการตรวจคัดกรอง '.$HServ.'       เลขที่สถานพยาบาล '.$Hcode.'</p>
											<p align="right">วันที่สำรวจ '.date("d").'  เดือน  '.show_month(date("m")).'  พ.ศ. '.(date("Y")+543).'</p>
		<font size="+1"><b>ข้อมูลทั่วไป</b></font><br>
		หมายเลขบัตรประจำตัวประชาชน '.substr(OCIResult($stid,"QUES_IDCARD"),0,1).'-'.substr(OCIResult($stid,"QUES_IDCARD"),1,4).'-'.
								 substr(OCIResult($stid,"QUES_IDCARD"),5,5).'-'.substr(OCIResult($stid,"QUES_IDCARD"),10,2).'-'.
								 substr(OCIResult($stid,"QUES_IDCARD"),12,1).'<br>
		<table width="527" border="0" >
	  <tr>
		<td width="80">ยศชื่อ </td>
		<td width="87">
			'.Conv(OCIResult($ptd,"CRAK_NAME_ACM1")).$Se.' '.Conv(OCIResult($ptd,"NAME")).'
		</td>
		<td width="50" align="right" >นามสกุล </td>
		<td width="84">
			 '.Conv(OCIResult($ptd,"LASTNAME")).'
		</td>
		<td colspan="4">
			'.cir(OCIResult($ptd,"TYPE"),1).'ข้าราชการ
			'.cir(OCIResult($ptd,"TYPE"),2).'ลูกจ้างประจำ
			'.cir(OCIResult($ptd,"TYPE"),3).'พนักงานราชการ
		</td>
		</tr>
	  <tr>
		<td>วันเดือนปีเกิด วันที่</td>
		<td colspan="2">
			'.substr(Conv(OCIResult($ptd,"DOB")),0,2).' '.show_month(substr(Conv(OCIResult($ptd,"DOB")),3,2)).' '.
			(substr(Conv(OCIResult($ptd,"DOB")),6,4)+543).'
		</td>
		<td></td>
		<td width="55" align="right" >อายุ </td>
		<td width="85">
			 '.((date("Y")+543)-(substr(Conv(OCIResult($ptd,"DOB")),6,4)+543)).' ปี
		</td>
		<td width="60"></td>
		<td width="63"></td>
	  </tr>
	  <tr>
		<td>ที่อยู่ปัจจุบัน</td>
		<td>
			'.Conv(OCIResult($ptd,"ADDRESS")).'
		</td>
		<td align="right" >หมู่ </td>
		<td>
			 '.Conv(OCIResult($ptd,"HOME")).'
		</td>
		<td align="right" >ถนน </td>
		<td> 
			'.Conv(OCIResult($ptd,"ROAD")).'
		</td>
		<td align="right" >แขวง/ตำบล </td>
		<td> 
			'.Conv(OCIResult($ptd,"AREA")).'
		</td>
	  </tr>
	  <tr>
		<td>เขต/อำเภอ</td>
		<td>
			'.$Dis.'
		</td>
		<td align="right" >จังหวัด </td>
		<td>
			 '.$Prov.'
		</td>
		<td align="right" >รหัสไปรษณีย์ </td>
		<td> 
			'.Conv(OCIResult($ptd,"POST")).'
		</td>
		<td></td>
		<td></td>
	  </tr>
	  <tr>
		<td>โทรศัพท์(ที่ทำงาน)</td>
		<td>
			'.Conv(OCIResult($ptd,"TEL")).'
		</td>
		<td align="right" >โทรมือถือ </td> 
		<td>
			'.' '.Conv(OCIResult($ptd,"MOBILE")).'
		</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	  </tr>
	</table>
	<table width="525" border="0">
	<tr><td>
		
		
		<table width="520" border="0">
		  <tr>
			<td colspan="2" width="90"><b>1. ประวัติส่วนบุคคล</b></td>
			<td width="210"></td>
			<td width="230"></td>
		  </tr>
		  <tr>
			<td width="15">&nbsp;</td>
			<td width="60">เพศ</td>
			<td>
				'.cir(OCIResult($ptd,"SEX"),1).'ชาย
			</td>
			<td>
				'.cir(OCIResult($ptd,"SEX"),2).'หญิง
			</td>
		  </tr>
		  <tr>
			<td></td>
			<td>การศึกษา</td>
			<td>'.cir(OCIResult($ptd,"EDUCATION"),1).'ประถมศึกษา</td>
			<td>'.cir(OCIResult($ptd,"EDUCATION"),2).'มัธยมศึกษา</td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td>'.cir(OCIResult($ptd,"EDUCATION"),3).'อนุปริญญา</td>
			<td>'.cir(OCIResult($ptd,"EDUCATION"),4).'ปริญญาตรี/สูงกว่า</td>
		  </tr>
		  <tr>
			<td colspan="3"><b>2. ประวัติครอบครัว</b></td>
			<td></td>
		  </tr>
		  <tr>
			<td></td>
			<td colspan="3">บิดา หรือ มารดา ของท่านมีประวัติการเจ็บป่วยด้วยโรค</td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td>
				'.cir(OCIResult($stid,"DADMUM_DM"),1).'เบาหวาน (DM)
			</td>
			<td>
				'.cir(OCIResult($stid,"DADMUM_CRF"),1).'ไตวายเรื้อรัง (CRF)
			</td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td>
				'.cir(OCIResult($stid,"DADMUM_HT"),1).'ความดันโลหิตสูง (HT)
			</td>
			<td>
				'.cir(OCIResult($stid,"DADMUM_COPD"),1).'ถุงลมโป่งพอง (COPD)
			</td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td>
				'.cir(OCIResult($stid,"DADMUM_MI"),1).'กล้ามเนื้อหัวใจตาย (MI)
			</td>
			<td>
				'.cir(OCIResult($stid,"DADMUM_STROKE"),1).'เส้นเลือดสมองแตก/ตีบ อัมพาต อัมพฤกษ์ (Stroke)
			</td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td>
				'.cir(OCIResult($stid,"DADMUM_GOUT"),1).'โรคเกาต์ (Gout)
			</td>
			<td>
				'.cir(OCIResult($stid,"DADMUM_DONKNOW"),1).'ไม่ทราบ
			</td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td>
				'.cir(OCIResult($stid,"DADMUM_OTHER"),1).'อื่นๆ '.Conv(OCIResult($stid,"DADMUM_OTHER_NOTE")).'
			</td>
			<td>
				'.cir(OCIResult($stid,"DADMUM_NO"),1).'ไม่มี
			</td>
		  </tr>
		  <tr>
			<td></td>
			<td colspan="2">บิดาหรือมารดาเสียชีวิตด้วยโรคหัวใจหรือไม่</td>
			<td>
				'.cir(OCIResult($stid,"DADMUM_HEART"),1).'ใช่
				'.cir(OCIResult($stid,"DADMUM_HEART"),0).'ไม่ใช่
			</td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td>
				'.cir(OCIResult($stid,"DADMUM_LIVE"),1).'บิดาและมารดายังมีชีวิตอยู่
			</td>
			<td>
				'.cir(OCIResult($stid,"DADMUM_LIVE"),2).'บิดาเสียชีวิตด้วยโรคหัวใจ
			</td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td>
				'.cir(OCIResult($stid,"DADMUM_LIVE"),3).'มารดาเสียชีวิตด้วยโรคหัวใจ
			</td>
			<td>
				'.cir(OCIResult($stid,"DADMUM_LIVE"),4).'ทั้งบิดาและมารดาเสียชีวิตด้วยโรคหัวใจ
			</td>
		  </tr>
		  <tr>
			<td></td>
			<td colspan="2">พี่น้อง (สายตรง) ของท่านมีประวัติการเจ็บป่วยด้วยโรค
			</td>
			<td></td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td>
				'.cir(OCIResult($stid,"BROTHER_DM"),1).'เบาหวาน (DM)
			</td>
			<td>
				'.cir(OCIResult($stid,"BROTHER_CRF"),1).'ไตวายเรื้อรัง (CRF)
			</td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td>
				'.cir(OCIResult($stid,"BROTHER_HT"),1).'ความดันโลหิตสูง (HT)
			</td>
			<td>
				'.cir(OCIResult($stid,"BROTHER_COPD"),1).'ถุงลมโป่งพอง (COPD)
			</td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td>
				'.cir(OCIResult($stid,"BROTHER_MI"),1).'กล้ามเนื้อหัวใจตาย (MI)
			</td>
			<td>
				'.cir(OCIResult($stid,"BROTHER_STROKE"),1).'เส้นเลือดสมองแตก/ตีบ อัมพาต อัมพฤกษ์ (Stroke)
			</td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td>
				'.cir(OCIResult($stid,"BROTHER_GOUT"),1).'โรคเกาต์ (Gout)
			</td>
			<td>
				'.cir(OCIResult($stid,"BROTHER_DONKNOW"),1).'ไม่ทราบ
			</td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td>
				'.cir(OCIResult($stid,"BROTHER_OTHER"),1).'อื่นๆ '.Conv(OCIResult($stid,"BROTHER_OTHER_NOTE")).'
			</td>
			<td>
				'.cir(OCIResult($stid,"BROTHER_NO"),1).'ไม่มี
			</td>
		  </tr>
		</table>
		
	</td></tr>
	</table>
		';
		
///Finish Page 1
   $pdf->writeHTML($html, true, false, true, false, '');
   //$pdf->Output('Local Expedition', 'I');
///Start Page2
///<img src="/report/tcpdf/images/o1.png" width="10" height="10" /><br>
   $pdf->AddPage();
   $html = '
	   <table width="540" border="0">
	  <tr>
		<td colspan="5" width="450"><b>3. ท่านเคยมีประวัติการเจ็บป่วย หรือต้องพบแพทย์ ด้วยโรค</b></td>
	  </tr>
	  <tr>
		<td width="15"></td>
		<td width="160">- เบาหวาน (DM)
		</td>
		<td width="90">
			'.cir(OCIResult($stid,"HIS_DM"),2).'มี
		</td>
		<td width="90">
			( '.cir(OCIResult($stid,"DRUG_DM"),1).'รับประทานยา
		</td>
		<td width="90">
			'.cir(OCIResult($stid,"DRUG_DM"),0).'ไม่รับประทานยา )
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td></td>
		<td>
			'.cir(OCIResult($stid,"HIS_DM"),1).'ไม่มี
		</td>
		<td>
			&nbsp;&nbsp;'.cir(OCIResult($stid,"HIS_DM"),0).' ไม่เคยตรวจ
		</td>
		<td></td>
	  </tr>
	  <tr>
		<td></td>
		<td>- ความดันโลหิตสูง (HT)</td>
		<td>
			'.cir(OCIResult($stid,"HIS_HT"),2).'มี
		</td>
		<td>
			( '.cir(OCIResult($stid,"DRUG_HT"),1).'รับประทานยา
		</td>
		<td>
			'.cir(OCIResult($stid,"DRUG_HT"),0).'ไม่รับประทานยา )
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td></td>
		<td>
			'.cir(OCIResult($stid,"HIS_HT"),1).'ไม่มี
		</td>
		<td>
			&nbsp;&nbsp;'.cir(OCIResult($stid,"HIS_HT"),0).' ไม่เคยตรวจ
		</td>
		<td></td>
	  </tr>
	  <tr>
		<td></td>
		<td>- โรคตับ</td>
		<td>
			'.cir(OCIResult($stid,"HIS_TRIVER"),2).'มี
		</td>
		<td>
			( '.cir(OCIResult($stid,"DRUG_TRIVER"),1).'รับประทานยา 
		</td>
		<td>
			'.cir(OCIResult($stid,"DRUG_TRIVER"),0).'ไม่รับประทานยา )
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td></td>
		<td>
			'.cir(OCIResult($stid,"HIS_TRIVER"),1).'ไม่มี
		</td>
		<td>
			&nbsp;&nbsp;'.cir(OCIResult($stid,"HIS_TRIVER"),0).' ไม่เคยตรวจ
		</td>
		<td></td>
	  </tr>
	  <tr>
		<td></td>
		<td>- โรคอัมพาต</td>
		<td>
			'.cir(OCIResult($stid,"PALSY"),2).'มี
		</td>
		<td>
			( '.cir(OCIResult($stid,"DRUG_PALSY"),1).'รับประทานยา
		</td>
		<td>
			'.cir(OCIResult($stid,"DRUG_PALSY"),0).'ไม่รับประทานยา )
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td></td>
		<td>
			'.cir(OCIResult($stid,"PALSY"),1).'ไม่มี
		</td>
		<td>
			&nbsp;&nbsp;'.cir(OCIResult($stid,"PALSY"),0).' ไม่เคยตรวจ
		</td>
		<td></td>
	  </tr>
	  <tr>
		<td></td>
		<td>- โรคหัวใจ</td>
		<td>
			'.cir(OCIResult($stid,"HIS_HRART"),2).'มี
		</td>
		<td>
			( '.cir(OCIResult($stid,"DRUG_HRART"),1).'รับประทานยา
		</td>
		<td>
			'.cir(OCIResult($stid,"DRUG_HRART"),0).'ไม่รับประทานยา )
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td></td>
		<td>
			'.cir(OCIResult($stid,"HIS_HRART"),1).'ไม่มี
		</td>
		<td>
			&nbsp;&nbsp;'.cir(OCIResult($stid,"HIS_HRART"),0).' ไม่เคยตรวจ
		</td>
		<td></td>
	  </tr>
	  <tr>
		<td></td>
		<td>- ไขมันในเลือดผิดปกติ</td>
		<td>
			'.cir(OCIResult($stid,"HIS_FAT"),2).'มี
		</td>
		<td>
			( '.cir(OCIResult($stid,"DRUG_FAT"),1).'รับประทานยา
		</td>
		<td>
			'.cir(OCIResult($stid,"DRUG_FAT"),0).'ไม่รับประทานยา )
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td></td>
		<td>
			'.cir(OCIResult($stid,"HIS_FAT"),1).'ไม่มี
		</td>
		<td>
			&nbsp;&nbsp;'.cir(OCIResult($stid,"HIS_FAT"),0).' ไม่เคยตรวจ
		</td>
		<td></td>
	  </tr>
	  <tr>
		<td></td>
		<td>- แผลที่เท้า/ตัดขา(จากเบาหวาน)</td>
		<td>
			'.cir(OCIResult($stid,"BLISTER"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"BLISTER"),1).'ไม่มี
		</td>
		<td></td>
	  </tr>
	  <tr>
		<td></td>
		<td>- คลอดบุตรน้ำหนักเกิน 4 กิโลกรัม</td>
		<td>
			'.cir(OCIResult($stid,"BORN"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"BORN"),1).'ไม่มี
		</td>
		<td></td>
	  </tr>
	  <tr>
		<td colspan="4">ในรอบปีที่ผ่านมา หรือในขณะนี้ท่านมีอาการผิดปกติหรือมีพฤติกรรมต่อไปนี้หรือไม่</td>
		<td></td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- ดื่มน้ำบ่อยมาก</td>
		<td>
			'.cir(OCIResult($stid,"DRINKOVER"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"DRINKOVER"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- ปัสสาวะกลางคืน 3 ครั้งขึ้นไป</td>
		<td>
			'.cir(OCIResult($stid,"URINE"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"URINE"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- กินจุแต่ผอมลง</td>
		<td>
			'.cir(OCIResult($stid,"EAT"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"EAT"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- น้ำหนักลด/อ่อนเพลีย</td>
		<td>
			'.cir(OCIResult($stid,"LOWWEIGHT"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"LOWWEIGHT"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- เป็นแผลที่ริมฝีปากบ่อย และหายยาก</td>
		<td>
			'.cir(OCIResult($stid,"HEPPES"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"HEPPES"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- คันตามผิวหนัง และอวัยวะสืบพันธุ์</td>
		<td>
			'.cir(OCIResult($stid,"SKINITCH"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"SKINITCH"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- ตาพร่ามัว ต้องเปลี่ยนแว่นบ่อย</td>
		<td>
			'.cir(OCIResult($stid,"EYE"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"EYE"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- ชาปลายมือ ปลายเท้า โดยไม่ทราบสาเหตุ</td>
		<td>
			'.cir(OCIResult($stid,"ASLEEP"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"ASLEEP"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- มีก้อนนิ่วหรือเลือดปนออกมาในปัสสาวะ</td>
		<td>
			'.cir(OCIResult($stid,"GALLSTONE"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"GALLSTONE"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- ขาบวม เท้าบวมทั้ง 2 ข้าง หรือหนังตาบวม</td>
		<td>
			'.cir(OCIResult($stid,"SWELL"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"SWELL"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- ไอเรื้อรัง</td>
		<td>
			'.cir(OCIResult($stid,"COUGH"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"COUGH"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- แน่นหน้าอกตรงกลางมากกว่า 5 นาที</td>
		<td>
			'.cir(OCIResult($stid,"CHEST"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"CHEST"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td> เหมือนใจจะขาดร่วมกับเหงื่อออก</td>
		<td>
		</td>
		<td>
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- ขึ้นบันไดไปชั้น 2 หรือขึ้นสะพานลอย ต้องนั่งหอบหรือหยุดพัก</td>
		<td>
			'.cir(OCIResult($stid,"TIRED"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"TIRED"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- คลำได้ก้อนผิดปกติ</td>
		<td>
			'.cir(OCIResult($stid,"CHUNK"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"CHUNK"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- มีเลือด หรือน้ำออกผิดปกติที่จมูก/หู/หัวนม</td>
		<td>
			'.cir(OCIResult($stid,"LIQUID"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"LIQUID"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- เป็นไข้ติดต่อกันนานมากกว่า 2 สัปดาห์</td>
		<td>
			'.cir(OCIResult($stid,"FEVER"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"FEVER"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- ท้องเสียมากกว่า 3 ครั้งต่อวัน เกิน 2 สัปดาห์</td>
		<td>
			'.cir(OCIResult($stid,"STOMACH"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"STOMACH"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- มีอาการตาเหลืองหรือตัวเหลือง</td>
		<td>
			'.cir(OCIResult($stid,"YELLOW_EYE"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"YELLOW_EYE"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- มีอาการแขน หรือขาอ่อนแรง ข้างใดข้างหนึ่งหรือทั้งสองข้าง</td>
		<td>
			'.cir(OCIResult($stid,"HAND_LEG"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"HAND_LEG"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- ปวด,บวม,แดง ร้อนโคนนิ้วหัวแม่เท้า ข้อเท้า ข้อเข่า เดินไม่ถนัด(หลังกินเนื้อสัตว์ สัตว์ปีก เครื่องในสัตว์ เหล้า เบียร์)</td>
		<td>
			'.cir(OCIResult($stid,"JOINT"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"JOINT"),1).'ไม่มี
		</td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">- เป็นลมไม่รู้สึกตัว</td>
		<td>
			'.cir(OCIResult($stid,"STROKE"),2).'มี
		</td>
		<td>
			'.cir(OCIResult($stid,"STROKE"),1).'ไม่มี
		</td>
	  </tr>
	</table>
	   
   ';
///Finish Page 2
   $pdf->writeHTML($html, true, false, true, false, '');
   //$pdf->Output('Local Expedition', 'I');
///Start Page3
///<img src="/report/tcpdf/images/o1.png" width="10" height="10" /><br>
   $pdf->AddPage();
   $html = '
  	<table width="540" border="0">
   	  <tr>
		<td colspan="3">กรณีมีโรค/อาการดังกล่าวท่านปฏิบัติตนอย่างไร</td>
		<td></td>
		<td></td>
	  </tr>
	  <tr>
		<td></td>
		<td colspan="2">
			'.cir(OCIResult($stid,"THEATDIESEASE"),1).'รับการรักษาอยู่/ปฏิบัติตามที่แพทย์แนะนำ
		</td>
		<td colspan="2">
			'.cir(OCIResult($stid,"THEATDIESEASE"),2).'รักษาแต่ไม่สม่ำเสมอ
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td colspan="2">
			'.cir(OCIResult($stid,"THEATDIESEASE"),3).'เคยรักษา แต่ขณะนี้ไม่รักษา/หายาทานเอง
		</td>
		<td colspan="2">
			'.cir(OCIResult($stid,"THEATDIESEASE"),0).'ไม่รักษา
		</td>
		</tr>
	</table>
   <table width="540" border="0">
  <tr>
    <td colspan="3" width="300"><b>4. นิยามการเคลื่อนไหวออกแรง/ออกกำลังกาย</b></td>
    <td width="100"></td>
    <td width="100"></td>
  </tr>
  <tr>
    <td width="24"></td>
    <td colspan="2">4.1 ออกกำลังกายเพื่อสุขภาพ/เล่นกีฬา หรือ</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="5">4.2 มีการออกแรงในระดับปานกลางขึ้นไป เช่น ล้างรถ ถูบ้าน เช็ดหน้าต่าง ทำสวน ขุดดิน เต้นรำในจังหวะเร็วขึ้นบันได เดินเร็ว ขี่จักรยาน ฯลฯ </td>
  </tr>
   <tr>
    <td></td>
    <td colspan="5"> (ถ้าท่านปฏิบัติตามข้อ 4.1 หรือ 4.2 ครั้งละ 30 นาทีขึ้นไป หรือช่วงละ 10 นาที เวลารวมกันตั้งแต่ 30 นาทีต่อวันเทียบเท่ากับการได้ออกกำลังกายในวันนั้น)</td>
  </tr> 
  <tr>
    <td></td>
    <td colspan="3">การเคลื่อนไหวออกแรง/การออกกำลังกาย ของท่านเข้าเกณฑ์ข้อใด</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2">
    	'.cir(OCIResult($stid,"EXERCISE"),1).'ออกกำลังกายทุกวัน
    </td>
    <td width="80"></td>
    <td width="80"></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2">
    	'.cir(OCIResult($stid,"EXERCISE"),2).'ออกกำลังกายสัปดาห์ละมากกว่า 3 ครั้ง
    </td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2">
    	'.cir(OCIResult($stid,"EXERCISE"),3).'ออกกำลังกายสัปดาห์ละ 3 ครั้ง
    </td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2">
    	'.cir(OCIResult($stid,"EXERCISE"),4).'ออกกำลังกายน้อยกว่้าสัปดาห์ละ 3 ครั้ง
    </td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2">
    	'.cir(OCIResult($stid,"EXERCISE"),5).'ไม่ออกกำลังกายเลย
    </td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3"><b>5. ท่านชอบอาหารรสใด (ตอบมากกว่า 1 ข้อ)</b></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td width="100">
    	'.rec(OCIResult($stid,"SUGAR"),1).'หวาน
    </td>
    <td width="100">
    	'.rec(OCIResult($stid,"SALT"),1).'เค็ม
    </td>
    <td width="100">
    	'.rec(OCIResult($stid,"FAT"),1).'มัน
    </td>
    <td width="100">
    	'.rec(OCIResult($stid,"DISLIKE"),1).'ไม่ชอบทุกข้อ
    </td>
  </tr>
  <tr>
    <td colspan="2"><b>6. สารเสพติด</b></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>สูบบุหรี่</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"SMOKE"),2).'ไม่สูบ
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"SMOKE"),1).'สูบ
    </td>
    <td>สูบ จำนวน '.OCIResult($stid,"SMOKEDAY").' มวน/วัน
	</td>
    <td>จำนวน '.OCIResult($stid,"SMOKEYEAR").' Pack/year
	</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>ชนิดของบุหรี่</td>
    <td>
    	'.cir(OCIResult($stid,"TYPECIGARETTE"),1).'มีก้นกรอง
    </td>
    <td>
    	'.cir(OCIResult($stid,"TYPECIGARETTE"),2).'ไม่มีก้นกรอง
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>ระยะเวลา '.OCIResult($stid,"SMOKE_LONG").' ปี
	</td>
    <td colspan="2">(ตั้งแต่เริ่มสูบบุหรี่จนถึงปัจจุบัน)</td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"SMOKE"),3).'เคยสูบ แต่เลิกแล้ว
    </td>
    <td>ชนิดของบุหรี่
	</td>
    <td>
    	'.cir(OCIResult($stid,"TYPECIGARETTE2"),1).'มีก้นกรอง
    </td>
    <td>
    	'.cir(OCIResult($stid,"TYPECIGARETTE2"),2).'ไม่มีก้นกรอง
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>ระยะเวลา '.OCIResult($stid,"LONGYEAR").' ปี
	</td>
    <td colspan="2">(ตั้งแต่เริ่มสูบบุหรี่จนถึงปัจจุบัน)
	</td>
  </tr>
  <tr>
    <td></td>
    <td>ดื่มสุรา</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"DRINK"),2).'ไม่ดื่ม
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"DRINK"),3).'เคยดื่มแต่เลิกแล้ว
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="4">
    	'.cir(OCIResult($stid,"DRINK"),1).'ดื่ม '.OCIResult($stid,"DRINKNO").' 
    	ครั้ง/สัปดาห์ (ดื่มเหล้า &gt; 1 เป็กต่อวัน / ดื่มเบียร์ &gt; 1 กระป๋องต่อวัน / ดื่มไวน์ &gt; 1 แก้วต่อวัน)</td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"DRINK"),4).'ดื่มนานๆครั้ง
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3"><b>7. สภาพการเงินของท่้านเป็นอย่างไร</b></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2">
    	'.cir(OCIResult($stid,"MONEY"),1).'มีเงินพอใช้จ่าย และเหลือเก็บออม
    </td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="3">
    	'.cir(OCIResult($stid,"MONEY"),2).'มีเงินพอใช้จ่ายแต่ละเดือนไม่ต้องกู้ยืม แต่ไม่เหลือเก็บ
    </td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2">
    	'.cir(OCIResult($stid,"MONEY"),3).'ไม่พอใช้จ่ายและต้องกู้ยืม
    </td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>ท่านมีหนี้หรือไม่</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"DEBT"),1).'มี
    </td>
    <td> 
    	'.cir(OCIResult($stid,"DEBT_CASE"),1).'&lt; 50,000 บาท
    </td>
    <td>
		'.cir(OCIResult($stid,"DEBT_CASE"),2).'&gt; 50,000 บาท
	</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"DEBT_CASE"),3).'&gt; 100,000 บาท
    </td>
    <td>
		'.cir(OCIResult($stid,"DEBT_CASE"),4).'&gt; 1 ล้านบาท
	</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"DEBT"),0).'ไม่มี
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
   
   ';
///Finish Page 3
   $pdf->writeHTML($html, true, false, true, false, '');
   //$pdf->Output('Local Expedition', 'I');
///Start Page4
///<img src="/report/tcpdf/images/o1.png" width="10" height="10" /><br>
   $pdf->AddPage();
   $html = '
   
   <table width="540" border="0" >
  <tr>
    <td colspan="2"><b>8. อุบัติเหตุ</b></td>
    <td width="100"></td>
    <td width="100"></td>
    <td width="100"></td>
  </tr>
  <tr>
    <td width="16"></td>
    <td colspan="3">8.1 หลังการดื่มสุรา,เบียร์,ไวน์ ฯลฯ ท่านเคยขับรถหรือไม่</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td width="100">
    	'.cir(OCIResult($stid,"DRINK_ACCIDENT"),0).'ไม่ขับรถหลังดื่ม
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"DRINK_ACCIDENT"),1).'ขับบางครั้ง
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"DRINK_ACCIDENT"),2).'ขับทุกครั้งหลังดื่ม
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="4">8.2 การป้องกันอุบัติเหตุ สำหรับผู้ขับขี่ หรือโดยสารรถจักรยานยนต์ ท่้านใส่หมวกกันน็อคหรือไม่้</td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"PROTECT"),4).'ใส่ทุกครั้ง
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"PROTECT"),5).'ใส่บางครั้ง
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"PROTECT"),3).'ไม่เคยใส่
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="4">8.3 ท่านที่ขับรถยนต์หรือเป็นผู้โดยสารนั่งข้างหน้า ท่านคาดเข็มขัดนิรภัยทุกครั้งหรือไม่</td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"DRIVE"),7).'คาดทุกครั้ง
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"DRIVE"),8).'คาดบางครั้ง
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"DRIVE"),6).'ไม่คาด
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="3">8.4 ท่านเคยมีเพศสัมพันธ์กับ หญิง/ชาย ที่ไม่ใช่คู่สมรส หรือไม่</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"INTERCOURSE"),0).'ไม่เคย
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="3">
    	'.cir(OCIResult($stid,"INTERCOURSE"),1).'เคย
    ถ้าเคยท่านและคู่นอนใช้ถุงยางอนามัยหรือไม่
	</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"CONDOM"),1).'ไม่เคยใช้
    </td>
    <td>
    	'.cir(OCIResult($stid,"CONDOM"),2).'ใช้บางครั้ง
    </td>
    <td>
    	'.cir(OCIResult($stid,"CONDOM"),3).'ใช้ทุกครั้ง
    </td>
  </tr>
  <tr>
    <td colspan="2"><b>9. ความเครียด</b></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>ปัญหาที่ทำให้ท่านเครียด</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"SERIOUS"),1).'งานในหน้าที่
    </td>
    <td>
    	'.cir(OCIResult($stid,"SERIOUS"),2).'ปัญหาครอบครัว
    </td>
    <td>
    	'.cir(OCIResult($stid,"SERIOUS"),3).'ปัญหาการเงิน
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"SERIOUS"),4).'ปัญหาการเมืิอง
    </td>
    <td>
    	'.cir(OCIResult($stid,"SERIOUS"),5).'อื่นๆ '.Conv(OCIResult($stid,"SERIOUS_OTHER")).'
     </td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2"><b>10. สภาพแวดล้อม</b></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td colspan="3">สภาพแวดล้อมบริเวณที่พักอาศัยของท่านมีลักษณะอย่างไร</td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td colspan="2">
    	'.cir(OCIResult($stid,"ENVIRONMENT"),1).'สะอาดดี มีการเก็บขยะสม่ำเสมอเป็นประจำ
    </td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td colspan="2">
    	'.cir(OCIResult($stid,"ENVIRONMENT"),2).'ค่อนข้างสกปรก มีการเก็บขยะเป็นครั้งคราว
    </td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td colspan="2">
    	'.cir(OCIResult($stid,"ENVIRONMENT"),3).'สกปรกมาก มีการทิ้งขยะเกลื่อนกลาด
    </td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td colspan="2">
    	'.cir(OCIResult($stid,"ENVIRONMENT"),4).'อื่นๆ '.Conv(OCIResult($stid,"ENVWORK_OTHER")).'
     </td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td colspan="3">สภาพแวดล้อมในที่ทำงานของท่านมีลักษณะอย่างไร (ตอบได้มากกว่า 1 ข้อ)
	</td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td>
    	'.rec(OCIResult($stid,"CLEAN"),1).'สะอาด
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td>
    	'.rec(OCIResult($stid,"DIRTY"),1).'ค่อนข้างสกปรก
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td>
    	'.rec(OCIResult($stid,"BRIGHT"),1).'มีแสงสว่างเพียงพอ
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td>
    	'.rec(OCIResult($stid,"DARK"),1).'ค่อนข้างมืด
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td>
    	'.rec(OCIResult($stid,"NARROW"),1).'คับแคบ
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
<tr>
    <td></td>
    <td>
    	'.rec(OCIResult($stid,"WORK_OTHER"),1).'อื่นๆ '.Conv(OCIResult($stid,"ENVWORK_OTHER")).'
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td colspan="4"><b>11. ท่านมีความสามารถพิเศษ หรือความชำนาญในด้าน</b></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td>
    	'.rec(OCIResult($stid,"SPC_ELECTRIC"),1).'ช่างไฟฟ้า
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td>
    	'.rec(OCIResult($stid,"SPC_WATER"),1).'ช่างประปา
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td>
    	'.rec(OCIResult($stid,"SPC_AIR"),1).'ช่างแอร์
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td>
    	'.rec(OCIResult($stid,"SPC_GARDEN"),1).'ทำสวน
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td>
    	'.rec(OCIResult($stid,"SPC_COMPUTER"),1).'คอมพิวเตอร์
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td>
    	'.rec(OCIResult($stid,"SPC_FOOD"),1).'ทำอาหาร
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td></td>
    <td>
    	'.rec(OCIResult($stid,"SPC_OTHER"),1).'อิ่นๆ '.Conv(OCIResult($stid,"SPC_DETAIL")).'
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    
    <td colspan="7"><b>12.ในปีที่ผ่านมา&nbsp;ท่านเข้าร่วมกิจกรรมในชมรม/กลุ่มต่างๆในหน่วย&nbsp;บ้างหรือไม่</b></td>
    <td></td>
	 
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"COCLUB"),0).'ไม่ได้เข้าร่วม
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="3">
    	'.cir(OCIResult($stid,"COCLUB"),1).'เข้าร่วม ประมาณ&nbsp;'.OCIResult($stid,"CLUBAMOUNT").'&nbsp;ครั้ง/ปี
	</td>
    <td></td>
  </tr>
  <tr>
   
    <td colspan="7"><b>13.ในปีที่ผ่านมา&nbsp;ท่านเข้าร่วมกิจกรรมที่ทำประโยชน์ให้สังคม&nbsp;(จิตอาสา)&nbsp;บ้างหรือไม่</b></td>
    <td></td>
	 
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>
    	'.cir(OCIResult($stid,"VOLUNTEER"),0).'ไม่ได้เข้าร่วม
    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="3">
    	'.cir(OCIResult($stid,"VOLUNTEER"),1).'เข้าร่วม ประมาณ&nbsp;'.OCIResult($stid,"VOLUNTEERAMOUNT").'&nbsp;ครั้ง/ปี
    
	</td>
    <td></td>
  </tr>
  
</table>
<br><br><br><hr>
   ';
   oci_close($conn);
   $pdf->writeHTML($html, true, false, true, false, '');
   
      //////////////Start Page5 <หน้าเจ้าหน้าที่>///////////////////////////////////////////////
   $pdf->AddPage();
   $html = '
   
<table width="129" border="1" cellpadding="1" cellspacing="0" bordercolor="#000000">
      <tr>
        <td><div align="center"><strong>สำหรับเจ้าหน้าที่</strong></div></td>
      </tr>
    </table>
       <table  border="1" cellpadding="1" cellspacing="0" bordercolor="#000000">
        <tr>
          <td  colspan="2"><p><strong>&nbsp;&nbsp;14.  การตรวจร่างกาย</strong><br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;น้ำหนัก......................................กก.  :  ส่วนสูง......................................ซม.   BM......................................กก./ม2  </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เส้นรอบเอว (วัดผ่านสะดือ...................................นิ้ว (..............ซม.)  (ชายไม่เกิน   90  ซม. , หญิงไม่เกิน  80  ซม.)</p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระดับน้ำตาลในเลือด (FBS)..............................มก.%  หรือเจาะหลังรับประทานอาหาร.................................มก.%
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(หลังรับประทานอาหาร............................ชม.)
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชีพจร..................ครั้ง/นาที ,     ความดันโลหิต  (ครั้งที่ 1)............................................................................มม.ปรอท , 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ความดันโลหิต  (ครั้งที่ 2)............................................................................มม.ปรอท 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ความดันโลหิตเฉลี่ย............................................................................มม.ปรอท </td>
        </tr>
        <tr>
          <td >
		  <table>
            <tr>
              <td ><div align="center"><u>การตรวจร่างกายตามระบบ</u></div></td>
            </tr>
            <tr>
              <td><p>.........................................................................................</p>
                <p>.........................................................................................</p>
                <p>.........................................................................................</p>
                <p>.........................................................................................</p>
                <p>....................................................................แพทย์ผู้ตรวจ</p></td>
            </tr>
          </table></td>
          <td>
		  <table border="0">
            <tr>
              <td ><div align="left"><u>ทันตแพทย์ </u>: สุขภาพช่องปาก </div></td>
            </tr>
            <tr>
              <td><p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				'.cir(OCIResult($ptd,"1"),2).'
                ปกติ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                '.cir(OCIResult($ptd,"1"),2).'
ไม่ปกติ</p>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>โรคฟัน</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>โรคเหงือก</u> </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  '.cir(OCIResult($ptd,"1"),2).'
ฟันผุ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
'.cir(OCIResult($ptd,"1"),2).'
โรคเหงือกอักเสบ</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
'.cir(OCIResult($ptd,"1"),2).'
ฟันสึก&nbsp;&nbsp;&nbsp;&nbsp;
'.cir(OCIResult($ptd,"1"),2).' 
โรคปริทันต์อักเสบ</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
'.cir(OCIResult($ptd,"1"),2).'
ฟันคุด............................แพทย์ผู้ตรวจ</p></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td colspan="2"><p>&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>สรุปเบื้องต้น</u></strong></p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            '.cir(OCIResult($ptd,"1"),2).'
            ไม่พบความเสี่ยง          </p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            '.cir(OCIResult($ptd,"1"),2).'
พบความเสี่ยงเบื้องต้นต่อโรค &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
'.rec(OCIResult($stid,"1"),2).'
          DM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          '.rec(OCIResult($stid,"1"),2).'
HT 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
'.rec(OCIResult($stid,"1"),2).'
Stroke&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
'.rec(OCIResult($stid,"1"),2).' 
Obesity</p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            '.cir(OCIResult($ptd,"1"),2).'
            ป่วยด้วยโรคเรื้อรัง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            '.rec(OCIResult($stid,"1"),2).'
DM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
'.rec(OCIResult($stid,"1"),2).'
HT 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
'.rec(OCIResult($stid,"1"),2).'
Stroke&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
'.rec(OCIResult($stid,"1"),2).'
Obesity 
          </p>          </td>
        </tr>
        <tr>
          <td colspan="2"><p><strong>            15.  กรณีอายุ&nbsp; 35&nbsp;ปีขึ้นไป</strong>&nbsp;&nbsp;มีประวัติเสี่ยง และค่า BMI &gt; 25 กก./ม2 ดำเนินการตรวจ Total Cholesterol</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               '.cir(OCIResult($ptd,"1"),2).'
ไม่ตรวจ</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               '.cir(OCIResult($ptd,"1"),2).'
              ตรวจ
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
'.rec(OCIResult($stid,"1"),2).'
ปกติ
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
'.rec(OCIResult($stid,"1"),2).'
ผิดปกติ 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
'.rec(OCIResult($stid,"1"),2).'
ค่าที่ตรวจได้.....................................................mg/dl

            </p>          </td>
        </tr>
        <tr>
          <td colspan="2"><p>&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>การดำเนินงาน</strong></p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             '.cir(OCIResult($ptd,"1"),2).' 
            ให้คำแนะนำการดูแลตนเอง และตรวจคัดกรองซ้ำทุก 1 ปี </p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             '.cir(OCIResult($ptd,"1"),2).' 
            ลงทะเบียนกลุ่มเสี่ยงต่อกลุ่มโรค  Metabolic  และแนะนำเข้าโครงการปรับเปลี่ยนพฤติกรรม</p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             '.cir(OCIResult($ptd,"1"),2).' 
            ส่งต่อเพื่อรักษา
          </p>          </td>
        </tr>
        <tr>
          <td colspan="2"><p>&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>สรุปผลการตรวจสุขภาพประจำปี</u></strong></p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            '.cir(OCIResult($ptd,"1"),2).'
            ปกติ
</p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            '.cir(OCIResult($ptd,"1"),2).'
            มีปัจจัยเสี่ยงที่่จะเกิดโรค (ผิดปกติเล็กน้อย)</p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1) Overweight    (2) Hyperuricemia    (3) Anemia    (4) HLD     (5) Impaired FG    (6)  Renal insufficiency
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(7) Mild hepatitis    (8)  Other...................................................................................................................................</p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			'.cir(OCIResult($ptd,"1"),2).'เป็นโรค
                    ............................................................................................................
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ลงชื่อ.....................................................แพทย์ผู้ตรวจ 
          
        
          </td>
        </tr>
</table>          
   ';
    oci_close($conn);
    $pdf->writeHTML($html, true, false, true, false, '');
   $pdf->Output('Local Expedition', 'I');
///Finish Page 5//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>

