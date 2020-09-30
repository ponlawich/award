<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="css/jquery-1.8.2.min.js"></script>
    <link rel="stylesheet" href="css\timeline.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Game Bingo</title>
    <link rel="shortcut icon" href="css\images\rtarf.gif" />
 
    <script src="file/scrip.js" type="text/javascript"></script>
   
      <!--  Datatable -->  
	   <script type="text/javascript" src="css\dataTables.js"></script> 
       <script type="text/javascript" src="css\tableTools.js"></script> 
       <script type="text/javascript" src="css\dataTables.bootstrap.js"></script> 
       <script src="js/bootstrap.min.js"></script>
       <link rel="stylesheet" href="css\dataTables.bootstrap.css"> 
      <!--  Datatable -->  

</head>

<body id="BG_body" class="fullscreen" background-image:url("004.gif");>

	<!--<video id="myVideo" width="350" height="250" controls="controls" autoplay>
  			<source src="images/video_bingo.mp4" type="video/mp4">
	</video>-->

	 <div style="font-size: 50px;
		font-size: :50px;
		text-align: center;
	    width: 30%;
	    margin: 20px;
	    border: 2px;
	    padding: 20px;">Game Bingo

	</div>
			
<div class="row">	
	<div class="col-md-5" align="middle" style="border: solid 0px #0000FF;">
		<label id="show_num" style="font-size: 450px; border: solid 0px #AA00FF;"></label>
	</div>
	<div class="col-md-5" style="border: solid 0px #8800FF;">


<?php
	
	echo"<table width='800' height ='400' border='3' border background='images/011.png'>";
	
	for ($y=0; $y<10;$y++)
	{
		
		echo"<tr>";
		for ($x=1; $x<=10; $x++)
		{
			echo"<td id='sq_".($x+($y*10))."' align='center' width='50' height ='50' ><strong><h2>".($x+($y*10))."</h2></strong></td>";
		}


		echo"</tr>";
	}

	 
	echo"</table>";

?>
	
	</div>
</div>




	<div class="row" style="font-size: 450px; border: solid 0px #ffffff;">
		<div class="col-md-4" align="center" style="font-size: 450px; border: solid 1px #AA55FF;">
			<div align="center" > 		         
		      <button  class="btn btn-default col-md-3" onclick="window.location.reload()">Refresh</button>
		      <button type="button" class="btn btn-default col-md-3" onclick="set_number()"><span class="glyphicon-glyphicon-gift"></span>Random</button>

		   	</div>
	   	</div>
	   	<div id="test_area" style="font-size: 50px;">
	   	
	   	</div>
	</div>
  

<!----------------------------------------------------------->      
    
	<script type="text/javascript"> 

	var arr = [];

	function set_number()
	{
		var n = Math.floor(Math.random() * 100)+1;

		
		if(arr.length >= 100)	
		{
			alert("Full");
		}
		else if(arr.indexOf(n) >= 0 && arr.length <= 100)	
		{
			/*alert(n+"--"+arr.indexOf(n));*/
			set_number();
		}
		else 
		{
			arr.push(n);
			$("#show_num").html('  '+n);
			$("#sq_"+n).css('background-color','#ffffff');
			$("#sq_"+n).css('color','#ffffff');
			/*alert(arr.length);
			showArray();*/
		}
	}

	function showArray()
	{
		var txt ='';
		for(var i =0; i<arr.length; i++)	txt+=arr[i]+',';
		$("#test_area").html(txt);
	
	}

	</script>
     
   </body>
</html>