<link rel="stylesheet" type="text/css" href="file/bingo/ab1.css">
<style>

body {
   background-image: url("file/bingo/009.gif");
    height: 90%; 
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
	-webkit-box-shadow: 0px 11px 20px 31px rgba(12,35,255,0.33); 
	box-shadow: 0px 11px 20px 31px rgba(12,35,255,0.33);


}

td, th {
    border: 2px solid #0066ff;
    text-align: center;
    font-size: 50px;
}

tr:nth-child(even) {
    background-color: #FFFFE0;
    text-align: center;
    font-size: 50px;
}

label{
	background-image: url(file/bingo/b01.gif);
	background-position: center;
	background-size: cover;
	font-size:400px; 
	margin-top:25px; 	
	border: 15px solid transparent;
	color: #00FF00;
    padding: 15px;	
    border-image:url(file/bingo/5.gif) 30 round;
	
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
  
  .animated {
            background-image: url(file/bingo/css/images/logo.png);
            background-repeat: no-repeat;
            background-position: left top;
            padding-top:95px;
            margin-bottom:60px;
            -webkit-animation-duration: 10s;
            animation-duration: 10s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
         }
         
         @-webkit-keyframes fadeInDownBig {
            0% {
               opacity: 0;
               -webkit-transform: translateY(-2000px);
            }
            100% {
               opacity: 1;
               -webkit-transform: translateY(0);
            }
         }
         
         @keyframes fadeInDownBig {
            0% {
               opacity: 0;
               transform: translateY(-2000px);
            }
            100% {
               opacity: 1;
               transform: translateY(0);
            }
         }
         
         .fadeInDownBig {
            -webkit-animation-name: fadeInDownBig;
            animation-name: fadeInDownBig;
         }
		 
.show {
    width: 100px;
    height: 100px;
    background-color: red;
    position: relative;
    -webkit-animation-name: example; /* Chrome, Safari, Opera */
    -webkit-animation-duration: 4s; /* Chrome, Safari, Opera */
    animation-name: example;
    animation-duration: 4s;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes example {
    0%   {background-color:red; left:0px; top:0px;}
    25%  {background-color:yellow; left:200px; top:0px;}
    50%  {background-color:blue; left:200px; top:200px;}
    75%  {background-color:green; left:0px; top:200px;}
    100% {background-color:red; left:0px; top:0px;}
}

/* Standard syntax */
@keyframes example {
    0%   {background-color:red; left:0px; top:0px;}
    25%  {background-color:yellow; left:200px; top:0px;}
    50%  {background-color:blue; left:200px; top:200px;}
    75%  {background-color:green; left:0px; top:200px;}
    100% {background-color:red; left:0px; top:0px;}
}

.toggler { width: 500px; height: 200px; position: relative; }
    #button { padding: .5em 1em; text-decoration: none; }
    #effect { width: 240px; height: 170px; padding: 0.4em; position: relative; }
    #effect h3 { margin: 0; padding: 0.4em; text-align: center; }
    .ui-effects-transfer { border: 2px dotted gray; }

   lable {
    width: 100px;
    height: 100px;
    background: red;
    -webkit-transition: width 2s, height 2s, -webkit-transform 2s; /* Safari */
    transition: width 2s, height 2s, transform 2s;
}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button4 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}
.element {
  height: 250px;
  width: 250px;
  margin: 0 auto;
  background-color: red;
  animation-name: stretch;
  animation-duration: 1.5s; 
  animation-timing-function: ease-out; 
  animation-delay: 0;
  animation-direction: alternate;
  animation-iteration-count: infinite;
  animation-fill-mode: none;
  animation-play-state: running;
}

@keyframes stretch {
  0% {
    transform: scale(.3);
    background-color: red;
    border-radius: 100%;
  }
  50% {
    background-color: orange;
  }
  100% {
    transform: scale(1.5);
    background-color: yellow;
  }
}



</style>


<div id="BG_body" class="fullscreen">

	<!--<video id="myVideo" width="350" height="250" controls="controls" autoplay>
  			<source src="images/video_bingo.mp4" type="video/mp4">
	</video>-->	
	
<div class="row" style="margin-top:5px" align="center">
	
	<div class="fadeInLeftBig" class="col-xs-12" align="center" style="font-size: 120px; margin-top:10px;
	font-family:Book Antiqua; color: #ff7c00; text-shadow: 3px 4px 8px #f2e2a2;">1834</div>


												
	<div class="col-md-12" align="center" style="border: solid 0px #0000FF;">
	
		<label id="show_num" style="display: none; width: 500px; margin-left: 10px;"></label>
				
		<div class="col-md-6" style="border: solid 0px #8800FF; font-size:30px;">

<?php
		
	echo "<table width='900px;' height ='700px;' border='3'>";
	
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
	
		<div>
			<!--									         
		    <button class="btn-lg col-md-1" align="center" 
			onclick="window.location.reload()">Refresh</button>
		    -->
			<div class="col-md-8 btn-lg"></div>					 
			 <button type="button"  class="btn-success btn-lg col-md-2" style="height: 100px;"
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
      $("#show_num").show();
			arr.push(n);
			$("#show_num").html('  '+n);
      
      $("#show_num").addClass("effect");
      

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
	
	$( function() {

  setInterval(function(){ $("#show_num").removeClass("effect");}, 1000);
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

