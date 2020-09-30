<?
include('../../setup.inc.php');
include('../../connectdb.inc.php');
$sql = "SELECT * FROM random_table where status is NULL ORDER BY RAND() LIMIT $start,8";
if ($_GET[gen] ==6 ) { $sql = "SELECT * FROM random_table01 where status is NULL ORDER BY RAND() LIMIT $start,8"; }
if ($_GET[gen] ==7 ) { $sql = "SELECT * FROM random_table01 where status is NULL ORDER BY RAND() LIMIT $start,8"; }
if ($_GET[gen] ==8 ) { $sql = "SELECT * FROM random_table_sp01 where status is NULL ORDER BY RAND() LIMIT $start3,8"; }
if ($_GET[gen] ==9 ) { $sql = "SELECT * FROM random_table_sp02 where status is NULL ORDER BY RAND() LIMIT $start5,8"; }
if ($_GET[gen] ==10 ) { $sql = "SELECT * FROM random_table_sp where status is NULL ORDER BY RAND() LIMIT $start,8"; }
if ($_GET[gen] ==11 ) { $sql = "SELECT * FROM random_table_sp where status is NULL ORDER BY RAND() LIMIT $start,8"; }
$dbquery = mysql_query($sql);
$i = 0;
while ($i < @mysql_num_rows($dbquery)) {
	$result = mysql_fetch_array($dbquery);
	if ($i == 7) {
		$sql0 = "SELECT * FROM random_table where id = '1413400716'";
		$dbquery0 = mysql_query($sql0);
		$result0 = mysql_fetch_array($dbquery0);
		$sql2 = "INSERT INTO lucky_table(id,name,unit,gift,run) VALUES ('$result0[id]','$result0[name]','$result0[unit]','$_GET[gen]','$_GET[gen]')";
		$dbquery2 = mysql_query($sql2);
		$sql3 = "UPDATE random_table SET status = 1 WHERE id = $result0[id]";
		$dbquery3 = mysql_query($sql3);
		$sql3 = "UPDATE random_table_sp SET status = 1 WHERE id = $result0[id]";
		$dbquery3 = mysql_query($sql3);
		$sql13 = "UPDATE random_table01 SET status = 1 WHERE id = $result0[id]";
	   	$dbquery13 = mysql_query($sql13);
		$sql13 = "UPDATE random_table02 SET status = 1 WHERE id = $result0[id]";
		$dbquery13 = mysql_query($sql13);
		$sql13 = "UPDATE random_table03 SET status = 1 WHERE id = $result0[id]";
		$dbquery13 = mysql_query($sql13);
		$sql13 = "UPDATE random_table04 SET status = 1 WHERE id = $result0[id]";
		$dbquery13 = mysql_query($sql13);
		$sql13 = "UPDATE random_table05 SET status = 1 WHERE id = $result0[id]";
		$dbquery13 = mysql_query($sql13);
		$filename = "../../picture/".$result0[id].".jpg";
		if (file_exists($filename))
			$pic = "<img src=../../picture/$result0[id].jpg height=\"420\" \>";  
		else
			$pic =  "<img src=../../man_icon2.png height=\"420\">";
		$text .= "$pic<br/><span class=style43>$result0[name]</span><br/><span class=style42>$result0[unit]</span><br/>";
	}
	else if($i == 6) $text .= "<font color=#FFFF00>$result[name]</font><br/><br/>";
	else $text .= "<font color=#FFFF00>$result[name]</font><br/>";

	$i++;
}
updategift($_GET[gen]);
switch ($_GET[gen]) {
	case 5:
		$gift = "ตู้เย็น 6.2 Q";
		break;
	case 6:
		$gift = "LED TV 32&quot;";
		break;
	case 7:
		$gift = "LED TV 32&quot;";
		break;
	case 8:
		$gift = "LED TV 32&quot;";
		break;
	case 9:
		$gift = "LED TV 32&quot;";
		break;
	case 10:
		$gift = "LED TV 40&quot;";
		break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?  echo $title; ?></title>

<link href="../../style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript"> 
    function playsound() {
        var audioPlayer = document.getElementById("audio");
        audioPlayer.play();
    };
	function pausesound() {
        var audioPlayer = document.getElementById("audio");
        audioPlayer.pause();
    };
</script> 

</head>

<body>
<table width="1280" height="740" border="0" align="center" cellpadding="0" cellspacing="0" background="../../party-background5.jpg">
  <tr valign="top">
    <td>
<div align="center">

<? //include('header.inc.php'); ?>
  
   <table width="100%" border="0">
   <tr>
      <td colspan="3" height="50"><div align="center"><br/><span class="style42">ผู้ที่ได้รับรางวัล <? echo "$gift"; ?> ได้แก่</span></div></td>
    </tr>
    <tr>
      <td width="10%">&nbsp;</td>
      <td width="80%" align="center"><table width="100%">
        <tr><td align="center"><br/>
<marquee id="mymarquee" height="570"  class="style7" behavior="slide" direction="up" scrollamount="10"><? echo $text; ?></marquee>
</td></tr></table></td>
      <td width="10%" valign="top">
        
        <div align="center"><a href="../../main.php" target="_self"><img src="../../home.png" width="65" border="0" /></a><br />
        <a href="../../special.php" target="_self"><br />
        <br />
        <img src="../../back3.png" width="65" border="0" /></a></div></td>
    </tr>
  </table>
  </td>
  </tr>
</table>
<audio id="audio" autoplay="autoplay" >
	<source src="random.mp3" type="audio/mpeg">
</audio>

</body>
</html>
