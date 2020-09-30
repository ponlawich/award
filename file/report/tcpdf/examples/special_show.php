<?
include('../../setup.inc.php');
include('../../connectdb.inc.php');
$sql = "SELECT name,unit FROM random_table ORDER BY RAND()";
$dbquery = mysql_query($sql);
$i = 0;
while ($i < mysql_num_rows($dbquery)) {
	$result = mysql_fetch_array($dbquery);
	$j = mysql_num_rows($dbquery)-1;
	if ($i == $j) $text .= "$result[name]"; else $text .= "$result[name]<br/> ";
	$i++;
}
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
	case 11:
		$gift = "LED TV 40&quot;";
		break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="apple-mobile-web-app-capable" content="yes">
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
		var audioPlayer2 = document.getElementById("audio2");
        audioPlayer2.pause();
    };
	 function playsound2() {
        var audioPlayer2 = document.getElementById("audio2");
        audioPlayer2.play();
    };
	function randompage() {
        window.location = "random_special.php?gen=<? echo "$_GET[gen]"; ?>";
    };
	function speedup() {
        document.getElementById('mymarquee').setAttribute('scrollamount', 300, 0);
		document.getElementById('mymarquee').setAttribute('class', 'style7');
		playsound2();
		window.setTimeout('speeddown1()', 6000, true);
    };
	function speeddown1() {
        document.getElementById('mymarquee').setAttribute('scrollamount', 15, 0);
		document.getElementById('mymarquee').setAttribute('class', 'style7');
		playsound2();
		window.setTimeout('speeddown2()', 2000, true);
    };
	function speeddown2() {
        document.getElementById('mymarquee').setAttribute('scrollamount', 10, 0);
		document.getElementById('mymarquee').setAttribute('class', 'style7');
		playsound2();
		window.setTimeout('randompage()', 1000, true);
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
      <td colspan="3" height="50"><div align="center"><span class="style4"> <? echo "$gift"; ?></span></div></td>
    </tr>
    <tr>
      <td width="10%">&nbsp;</td>
      <td width="80%" align="center"><table width="100%">
        <tr><td align="center"><br/>
<marquee id="mymarquee" height="<?  echo $height; ?>" class="style6" behavior="scroll" direction="up" scrollamount="10"><? echo $text; ?></marquee>
</td></tr></table>
<br />

<input style="background-color: #660099;" name="button" type="button" class="style41" id="button" value="สุ่มจับรางวัล" onmousedown="speedup()"/>

</td>
      <td width="10%" valign="top">
        
        <div align="center"><a href="../../main.php" target="_self"><img src="../../home.png" width="65" border="0" /></a><br/>
        <a href="../../special.php" target="_self"><br />
        <br />
        <img src="../../back3.png" width="65" border="0" /></a></div></td>
    </tr>
  </table>
  
</div>
</td>
  </tr>
</table>
<audio id="audio" autoplay="autoplay" loop="loop">
	<source src="mi.mp3" type="audio/mpeg">
</audio>
<audio id="audio2" loop="loop">
	<source src="random.mp3" type="audio/mpeg">
</audio>

</body>
</html>
