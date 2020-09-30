<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="/resources/demos/style.css">
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

      <style>

body {
   background-image: url("009.gif");
    height: 80%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}


table {

	background-color: #ffffff;
    font-family: Impact; 	
    border-collapse: collapse;
    border: 5px solid #0000cc;
	border-shadow: 3px 4px 8px #f2e2a2;


}

td, th {
    border: 2px solid #0066ff;
    text-align: center;


}

tr:nth-child(even) {
    background-color: #FFFFE0;
    text-align: center;

}

label{
	font-size:240px; 
	margin-top:25px; 	
	border: 15px solid transparent;
	color: #00FF00;
    padding: 15px;
    border-image:url(5.gif) 30 round;
	
	
}

.fadeInLeftBig {
  -webkit-animation-name: fadeInLeftBig;
  animation-name: fadeInLeftBig;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes fadeInLeftBig {
  0% {
  opacity: 0;
  -webkit-transform: translate3d(-2000px, 0, 0);
  transform: translate3d(-2000px, 0, 0);
  }
  100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
  }
  }
  @keyframes fadeInLeftBig {
  0% {
  opacity: 0;
  -webkit-transform: translate3d(-2000px, 0, 0);
  transform: translate3d(-2000px, 0, 0);
  }
  100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
  }
  
  
  
  /*base code*/
.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}
.animated.hinge {
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
}
/*the animation definition*/
@-webkit-keyframes zoomInDown {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, .055, .675, .19);
    animation-timing-function: cubic-bezier(0.55, .055, .675, .19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, .885, .32, 1);
    animation-timing-function: cubic-bezier(0.175, .885, .32, 1)
  }
}
@keyframes zoomInDown {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    -ms-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, .055, .675, .19);
    animation-timing-function: cubic-bezier(0.55, .055, .675, .19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -ms-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, .885, .32, 1);
    animation-timing-function: cubic-bezier(0.175, .885, .32, 1)
  }
}
.zoomInDown {
  -webkit-animation-name: zoomInDown;
  animation-name: zoomInDown
}

 
   

</style>

</head>

<body id="BG_body" class="fullscreen">

	<!--<video id="myVideo" width="350" height="250" controls="controls" autoplay>
  			<source src="images/video_bingo.mp4" type="video/mp4">
	</video>-->	
	
<div class="row" style="margin-top:5px" align="center">
	
	<div class="fadeInLeftBig" class="col-xs-12" align="center" style="font-size: 60px; font-family:Book Antiqua; 
	            color: #ff7c00; text-shadow: 3px 4px 8px #f2e2a2;">Game Bingo</div>
				
	<div class="col-md-12" align="center" style="border: solid 0px #0000FF;">
	
		<label id="show_num"></label>
				
		<div class="col-md-6" align="middle" style="border: solid 0px #8800FF; 
		       font-size:20px;">
<?php
		
	echo "<table width='500' height ='400' border='3'>";
	
	for ($y=0; $y<10;$y++)
	{
		
		echo"<tr>";
		for ($x=1; $x<=10; $x++)
		{
			echo"<td id='sq_".($x+($y*10))."'><strong>".($x+($y*10))."</strong></td>";
		}


		echo"</tr>";
	}
?>
		</table>
		
	 </div>
	</div>
	</div>


	<div class="row" style="font-size: 24px; border: solid 0px #ffffff;">
	
		<div align="center" border: solid 0px #AA55FF;">
					         
		      <button  type="button" class="btn btn-secondary btn-sm btn-sm col-md-2" 
			  class="ui-state-default ui-corner-all" align="center"
			           onclick="window.location.reload()">Refresh</button>
					   
			<div class="col-md-6"></div>
			  		         
		      <button type="button" class="btn btn-primary btn-sm col-md-2" 
			           onclick="set_number()">Random</button>
				
		   	</div>
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
			$("#sq_"+n).css('background-color','#ff0000');
			$("#sq_"+n).css('color','#1ff91f');
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
	
	function myFunction() {
    document.getElementById("myDIV").style.WebkitAnimationTimingFunction = "linear";  // Safari 4.0 - 8.0
    document.getElementById("myDIV").style.animationTimingFunction = "linear";
}

 $( function() {
    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = $( "#effectTypes" ).val();
 
      // Most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 50 };
      } else if ( selectedEffect === "transfer" ) {
        options = { to: "#button", className: "ui-effects-transfer" };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 200, height: 60 } };
      }
 
      // Run the effect
      $( "#effect" ).effect( selectedEffect, options, 500, callback );
    };
 
    // Callback function to bring a hidden box back
    function callback() {
      setTimeout(function() {
        $( "#effect" ).removeAttr( "style" ).hide().fadeIn();
      }, 1000 );
    };
 
    // Set effect from select menu value
    $( "#button" ).on( "click", function() {
      runEffect();
      return false;
    });
  } );

	</script>
     
   </body>
</html>