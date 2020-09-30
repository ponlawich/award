<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="css/jquery-1.8.2.min.js"></script>
    <link rel="stylesheet" href="css\timeline.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Little beaR</title>
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
<!-- overflow:hidden; -->
	<body id="BG_body" class="fullscreen" style=" background-color:#000; overflow:hidden;">
<?php

    $ipaddress = '';
	if ($_SERVER['HTTP_CLIENT_IP'])
		$ipaddress = $_SERVER['HTTP_CLIENT_IP']."| HTTP_CLIENT_IP";
	else if($_SERVER['HTTP_X_FORWARDED_FOR'])
		$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."| HTTP_X_FORWARDED_FOR";
	else if($_SERVER['HTTP_X_FORWARDED'])
		$ipaddress = $_SERVER['HTTP_X_FORWARDED']."| HTTP_X_FORWARDED";
	else if($_SERVER['HTTP_FORWARDED_FOR'])
		$ipaddress = $_SERVER['HTTP_FORWARDED_FOR']."| HTTP_FORWARDED_FOR";
	else if($_SERVER['HTTP_FORWARDED'])
		$ipaddress = $_SERVER['HTTP_FORWARDED']."| HTTP_FORWARDED";
	else if($_SERVER['REMOTE_ADDR'])
		$ipaddress = $_SERVER['REMOTE_ADDR']."| REMOTE_ADDR";
	else
        $ipaddress = 'UNKNOWN';	
?>
    <!--
        <div id="main_page" style="margin:auto; margin-top: 20px; font-size: 1.2em;
  padding: 10px;
  borde-widthr: 0px;
  border-color: FFF;
  border-style: solid;" align="center">    
    -->
        <div id="main_page" style="
  padding: 10px;
  borde-widthr: 0px;
  border-color: FFF;
  border-style: solid;" align="center">
            Index page showing...
        </div>
        
        
<div id="Dlight" class="row">
	<svg height="33" width="33">
      <circle id="led_state" name="led_state" cx="20" cy="20" r="10" stroke="black" stroke-width="3"/>
    </svg>
</div>  

<!--
<a href="#" class="fullscreen">เปิดใช้งาน</a>
<a href="#" class="fullscreenExit">ปิดใช้งาน</a>
-->
  
  <!--
    	<div id="test_area" name="test_area">
        </div>
        
	<div class="row">  
        <div style="margin:auto;" align="center">
            <marquee behavior="alternate" direction="left">จับสลากรางวัล...</marquee>
        </div>
	</div>   
  -->
    
    
    <!----------------------------------------------------------->
<div id="myModal" class="modal fade col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="modal-header">
                <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
                <h2 class="modal-title" id="modal_title" style="color:#FFF;">คำเตือน</h2>
            </div>
            <div class="modal-body">
                <h4 id="modal_desc"> ข่าวสาร</h4>
            </div>
            <div class="modal-footer">
            	
                <button type="button" class="btn btn-default btn-md col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-4 col-md-3 col-md-offset-4" 
                	data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>
<!----------------------------------------------------------->      
    
	<script type="text/javascript"> 
		var stat = 0;
		window.onload = set_page();

		function set_page()
		{
			//set_fullScreen();
			set_page_show();
			StartInterval();
			set_init();
			log_start();
		}
		
		function set_fullScreen()
		{
			alert("set full screen");
		}

		function set_init()
		{
				$.post("file/f_award.php",
					{				
						Vmode	: 'set_init'
					},
					function(result)
					{
					}
				);			
		}
		
		function log_start()
		{
				$.post("file/f_award.php",
					{				
						Vmode	: 'log_start',
						Vip		: '<?php echo $ipaddress; ?>'
					},
					function(result)
					{
					}
				);			
		}
	
/////////////////////////////////////////////////////////////////
		
		$("a.fullscreen").on('click', function() {
			var docElement, request;
		
			docElement = document.documentElement;
			request = docElement.requestFullScreen || docElement.webkitRequestFullScreen || docElement.mozRequestFullScreen || docElement.msRequestFullScreen;
		
			if(typeof request!="undefined" && request){
				request.call(docElement);
			}
		});
		
		$("a.fullscreenExit").on('click', function() {
			var docElement, request;
		
			docElement = document;
			request = docElement.cancelFullScreen|| docElement.webkitCancelFullScreen || docElement.mozCancelFullScreen || docElement.msCancelFullScreen || docElement.exitFullscreen;
			if(typeof request!="undefined" && request){
				request.call(docElement);
			}
		});
		
		
		 /*
	    $.get( "file/show.php", function( data ) {
		  $( "#main_page" ).html( data );
		});
		*/
		function StartInterval() {
			setInterval(function(){ set_page_show(); }, 2000);
		}
		
		function set_page_show()
		{	
				$.ajax({
					url: "file/f_award.php",
					type: "post",
					data: "Vmode=read&Vpage=call_sync",
					beforSend:function(){},
					success: function (data) {
						sync();
						if (data[0].result === "true") 
						{
							for (var i = 1; i < data.length; i++) 
							{
								//$("#Dmarg_"+data[i]["marg_name"]).html(data[i]["marg_val"]);
								//alert();
								if(data[i]["mode"] === "PAGE")
								{
									$("#main_page").html('');
									$("#test_area").html(data[i]["val"]);
									$.get( "file/"+data[i]["val"], function( data ) {
									  $("#main_page").html(data);
									});		
								}
								
								if(data[i]["type"].substr(0, 5) === "HORSE")
								{
									HorseMove(data[i]["type"].substr(-1),data[i]["val"]);	
								}
								
								if(data[i]["type"] === "DSP_HORSE")
								{
									if(data[i]["val"]==='1')
									{
										$("#container_bc_horse").show();
										$("#horse_victory_panel").hide();
									}
									if(data[i]["val"]==='2')
									{
										$("#container_bc_horse").hide();
										$("#horse_victory_panel").show();
									}
								}
								
								if(data[i]["mode"] === "MARGIN")
								{
									//$("#test_area").html(data[i]["val"]+" px");
									if(data[i]["type"] === "REFRESH" & data[i]["val"]==='1')	location.reload();
									if(data[i]["type"] === "TOP")		$("#main_page").css("margin-top",data[i]["val"]+"px");
									if(data[i]["type"] === "BOTTOM")	$("#main_page").css("height",data[i]["val"]+"px");
									if(data[i]["type"] === "LEFT")		$("#main_page").css("margin-left",data[i]["val"]+"px");
									if(data[i]["type"] === "RIGHT")		$("#main_page").css("margin-right",data[i]["val"]+"px");
								
									//$("#test_area").html(data[i]["val"]+" px");
									if(data[i]["type"] === "FRAME")		
									{
										if(data[i]["val"]==='1') 	$("#main_page").css("border-color","#FFF");
										if(data[i]["val"]==='0') 	$("#main_page").css("border-color","#000");
									}
									if(data[i]["type"] === "LIGHT")		
									{
										if(data[i]["val"]==='1') 	$("#Dlight").show();
										if(data[i]["val"]==='0') 	$("#Dlight").hide();
									}
									if(data[i]["type"] === "BACK_GROUND")		
									{
										if(data[i]["val"]==='1') 	$("#BG_body").css("background-color","#FFF");
										if(data[i]["val"]==='0') 	$("#BG_body").css("background-color","#000");
									}
									
									
								}
								
							}
						} 
					},
					error: function (xhr, status, error) {
						Set_modal_text(1,"Error : Get controll page!");
					}
				});			
			
			
			
		}
		
		function sync()
		{
			stat = (stat + 1) % 2;
			if(stat)	$( "#led_state" ).attr( "fill", "Lime" );
			else		$( "#led_state" ).attr( "fill", "red" );	
		}

//////////////////////////////////////////////////////////////////////////////////////	
//////////////////////////////////////////////////////////////////////////////////////	
//////////////////////////////////////////////////////////////////////////////////////	
//////////////////////////////////////////////////////////////////////////////////////		
		function Set_modal(Vmode,Vdesc)
		{
			if(Vmode === 1) 
			{
				$('#modal_title').html('คำเตือน');
				$('#modal-header').css("background-color", "#FF4457");
			}
			if(Vmode === 2) 
			{
				$('#modal_title').html('ข้อความ');
				$('#modal-header').css("background-color", "#28EE4D");
			}
			if(Vmode === 3) 
			{
				$('#modal_title').html('ข้อควรระวัง');
				$('#modal-header').css("background-color", "#F4FF8A");
			}
			$('#modal_desc').html(Vdesc);
			$('#myModal').modal('show');
		}
	</script>
    
    
    
   </body>
</html>