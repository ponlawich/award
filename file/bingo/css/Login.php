<?
	include 'func.php';
	session_destroy();
	session_start();
	$_SESSION['PAGE'] = "LOGIN";
	$alert = 0;
	if(strcmp($_POST['Login'],"เข้าระบบ")== 0)  //ตวรจสอบว่ามีการกดปุ่ม
	{
		if(connect())
		{
			$stid = oci_parse(connect(), 	"SELECT pid,name,lastname FROM person WHERE pid = '".$_POST['user']."'");
			oci_execute($stid);
			OCIFetch($stid);
			$_SESSION['PID'] = $_POST['user'];
			$_SESSION['SYEAR'] = date("Y")+543;   //กำหนดปีงบประมาณที่สำรวจ
				if(Conv(OCIResult($stid,"PID"))!==$_POST['user'])     // ถ้าไม่มีข้อมูบส่วนตัวจะไปยัง Pre.php
				{
					oci_close();
					$_SESSION['PAGE'] = "PRE";
					header("location: Pre.php");
				}
				else
				{		//ถ้าหากมีข้อมูลส่วนบุคคลแล้วจมาตรวจสอบข้อมูลสำรวจในรายปี
					oci_close();
					$stid = oci_parse(connect(), 	"SELECT ques_idcard,ques_year,passwd FROM med_ques_tab WHERE ques_idcard = '".
													$_POST['user']."' and ques_year = ".(date("Y")+543));
					oci_execute($stid);
					OCIFetch($stid);
					if(OCIResult($stid,"QUES_IDCARD")) //ตวรจสอบว่ามีข้อมูลในปีนั้นๆอยู่แล้ว
					{
						if(Conv(OCIResult($stid,"PASSWD"))!==$_POST['pass']) //ถ้าหากมีข้อมูลในปีนั้นแล้วและใส่ข้อมุลรหัสผ่านผิด
						{
							$alert = 1;
						}
						else //ถ้าหากมีข้อมูลในปีนั้นแล้วและใส่ข้อมุลรหัสผ่านถูก
						{
							oci_close();
							$_SESSION['PAGE'] = "SEARCH1";
							header("location: search1.php");
						}
					}
					else //กรณีไม่มีประวัติ ต้องทำการเพิ่มประวัติก่อน
					{
						oci_close();
						$_SESSION['PAGE'] = "FIRST";
						header("location: first.php");
					}
					oci_close();
				}
		}
	}
	else if(strcmp($_POST['Newuser'],"ผู้ใช้งานใหม่")== 0)
	{
		$_SESSION['PID'] = $_POST['user'];
		$_SESSION['SYEAR'] = date("Y")+543;
		$_SESSION['PAGE'] = "PRE";
		header("location: Pre.php");
	}
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
    <link rel="stylesheet" type="text/css" href="css/style.css1">
    <script type="text/javascript" src="css/jquery-1.8.2.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ระบบสำรวจและคัดกรองความเสี่ยงต่อสุขภาพประจำปี <? echo date("Y")+543; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body style="width: 1100px; height:800px; background-repeat: no-repeat; margin-top:80px; margin-left:auto; margin-right:auto; background-position:center" bgcolor="#FFFFFF" background="css/images/log_on.png" >
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form action='<? echo $_SERVER[’PHP_SELF’]; ?> ' class="form-inline" method="post" >
  <table width="459" border="0" align="center" background="css/images/021.gif" class="success" >
  <tr>
    <td height="26" colspan="3" align="center" ><font color="#0033FF"><b>ประจำปีงบประมาณ <? echo date("Y")+543; ?></b></font></td>
  </tr>
  <tr>
    <td width="190" align="right"><font color="#0033FF">เลขประจำตัวประชาชน</font></td>
    <td width="14">&nbsp;</td>
    <td width="241">
    	<input name="user"  class="span2" type="text" size="25" maxlength="13" required="required" onkeypress="checknumber()"/>
    </td>
  </tr>
  <tr>
    <td align="right"><font color="#0033FF">รหัสผ่าน</font></td>
    <td>&nbsp;</td>
    <td>
    	<input name="pass"  class="span2" type="password" size="25" maxlength="20" />
    </td>
  </tr>
  <tr>
    <td colspan="3" align="center">
    <?
	if($alert)
	{
		echo "<script type=\"text/javascript\"> alert(\"การยืนยันรหัสผ่านไม่ถูกต้อง\") </script>";
		echo "<p align=\"center\"><font color=\"red\">การยืนยันรหัสผ่านไม่ถูกต้อง</font></p>";
	}
	?> 
      <input type="submit" name="Newuser" id="Newuser" value="ผู้ใช้งานใหม่" />
      <input type="submit" name="Login" id="Login" value="เข้าระบบ" />
      </td>
    </tr>
</table>
</form>
<p><a href="https://healty.rtarf.mi.th/Conn.php">Perth</a> </p>
<p><a href="Mental.php">Mental1</a></p>
<p><a href="Mental2.php">Mental2</a></p>
<script language="javascript">  
$(function(){  
    $("input[name^='Idp_']").keyup(function(event){  
        if(event.keyCode==8){  
            if($(this).val().length==0){ 
                $(this).prev("input").focus();    
            }  
            return false;  
        }      
        if($(this).val().length==$(this).attr("maxLength")){ 
			$(this).next(); 
        }  
    });   
});  

function checknumber() 
	{
	  key=event.keyCode
	  if (key<48 || key>57) 
		{
		event.returnValue = false;
		number.focus();
		}
	};
  </script>
  
  <script src="http://code.jquery.com/jquery-latest.js"></script>
 <script src="js/bootstrap.min.js"></script>
  
</body>
</html>