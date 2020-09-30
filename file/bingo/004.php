
<style>
.bg {
   background-image: url("file/bingo/back_03.jpg");
  height: 90%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
   
}


h3{

	font-size: 50px;
	color: 
}

label{
	font-size:240px; 
	margin-top:25px; 	
   	color: #00FF00;
   	border-width:5px;  
   	border-style:dashed;
}

img {

	background-color: #ffffff;
    font-family: Impact; 	
    border: 5px solid #ffffff;
	border-shadow: 3px 4px 8px #ffffff;
	-webkit-box-shadow: 0px 11px 20px 31px rgba(12,35,255,0.33); 
	box-shadow: 0px 11px 20px 31px rgba(12,35,255,0.33);

	display: block;

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
	
	


</style>


<div class="bg">

	<div class="fadeInLeftBig" class="col-xs-12" align="center" style="font-size: 100px; margin-top:0px;
	font-family:Book Antiqua; color: #ff7c00; text-shadow: 3px 4px 8px #f2e2a2;">1834</div>
	<div class="fadeInLeftBig" align="center"><img src="file/bingo/images/G001.jpg" style="width:1200px; height:900px;"><!--style= "width:1200px; height:900px;"--></div>

	 </div>
	</div>
</div>


<!--
	<div class="row" class="col-xs-12">		
			<div  class="col-xs-2" style=" margin-top:10px; margin-left:500px;"> 	
			   <button type="submit" style="border-radius: 8px;" class="btn btn-success btn-lg "  onclick="window.location.href='file/bingo//bingo/005.php'">
			  <span class="glyphicon glyphicon-play"></span>     PLAY</button>
			 
			  
	   	</div>
	   	
	</div>
-->  
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

	</script>
     