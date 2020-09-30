<?PHP
	header("Content-Type: application/vnd.ms-excel");
	header('Content-Disposition: attachment; filename="Export_data.xls"');//#ชื่อไฟล์	
?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">
<HTML>
    <HEAD>
    	<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
    </HEAD>
<BODY>
<TABLE  x:str BORDER="1">
    <tr align="center">
    	<td style=" background-color:#999;">ID</td>
        <td style=" background-color:#999;">RANK</td>
        <td style=" background-color:#999;">NAME</td>
        <td style=" background-color:#999;">UNIT_SHOW</td>
        <td style=" background-color:#999;">UNIT_CASE</td>
        <td style=" background-color:#999;">UNIT_CASE_SUPER</td>
    </tr>   
    <tr>
    	<td>1</td><td>5</td><td>พ.อ. ทดสอบ ระบบ</td><td>กองบัญชาการกองทัพไทย</td><td>ศทส.</td><td>สส.ทหาร</td> 
    </tr>   
    <tr>
    	<td>2</td><td>5</td><td>พ.อ. ทดสอบ ระบบ</td><td>กองบัญชาการกองทัพไทย</td><td>ศทท.</td><td>สส.ทหาร</td>
    </tr>   
</TABLE>
</TABLE>

</BODY>
</HTML>