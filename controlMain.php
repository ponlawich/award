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
 
    <!--<script src="file/scrip.js" type="text/javascript"></script>-->
   
      <!--  Datatable -->  
	   <script type="text/javascript" src="css\dataTables.js"></script> 
       <script type="text/javascript" src="css\tableTools.js"></script> 
       <script type="text/javascript" src="css\dataTables.bootstrap.js"></script> 
       <script src="js/bootstrap.min.js"></script>
       <!--<script src="js/jquery.form.js"></script>-->
       <link rel="stylesheet" href="css\dataTables.bootstrap.css"> 
      <!--  Datatable --> 
      
 		<style type="text/css">
		<!--
			input.largerCheckbox
			{
				width: 30px;
				height: 30px;
			}
			.vcenter 
			{
				display: inline-block;
				vertical-align: middle;
				float: none;
			}
		//-->
		</style>
<?php     
/* 
	<script type="text/javascript">
		$(document).ready(function() {
			var table = $('#list_table').DataTable();
			var tt = new $.fn.dataTable.TableTools( table );
			$( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
		} );
		
    </script> 
*/
?>    
</head>

	<body style="padding: 20px;">
    
	<div class="row">  
        <div style="margin:auto;" align="center">
            <marquee behavior="alternate" direction="left" style="color: #F00;">Control panel...<img src="images/bear1.jpg" style="width: 100px; height: 100px;" />
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
             
                echo $ipaddress;
            ?>
            </marquee>
        </div>
	</div>  

<!-------------------------------------------------------->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Award</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> จัดการคิวแสดง <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" onclick="setStaffForm('control_disppage.php');"> แสดงผลหน้าจอ</a></li>
          </ul>
        </li>
        
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> จัดการแสดงของรางวัล <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!--<li><a href="#" onclick="setStaffForm('control_showaward.php');"> เลือกแสดงภาพรางวัล</a></li>-->
            <li><a href="#" onclick="setStaffForm('control_upaward.php');"> จัดการภาพรางวัล</a></li>
			<li><a href="#" onclick="setStaffForm('control_manage_superaward.php');"> จัดการสถานะรางวัลใหญ่</a></li>
			<li><a href="#" onclick="setStaffForm('control_Edit_pick_award.php');"> จัดการคิวสุ่มหลายรางวัล</a></li>
			<li><a href="#" onclick="setStaffForm('control_report.php');"> รายงาน</a></li>
			
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> ของรางวัล <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" onclick="setStaffForm('control_superaward.php');"> รางวัลใหญ่</a></li>
            <li><a href="#" onclick="setStaffForm('control_pick_award.php');">รางวัลที่เลือกเอง</a></li>
           
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> ผู้ร่วมงาน <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" onclick="setStaffForm('control_person.php');"> จัดการข้อมูลกำลังพล</a></li>
            <li><a href="#" style="color:#F00;" onclick="setStaffForm('control_register.php');"> จัดการรายชื่อผู้เข้าร่วมงาน (มีสิทธิ์จับสลาก)</a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Manage <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" onclick="setStaffForm('control_cleardata.php');"> ClearData </a></li>
            <li><a href="#" onclick="setStaffForm('control_log.php');"> Log </a></li>
          </ul>
        </li>
        
        <!------------------------>
       
        <!------------------------>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-------------------------------------------------------->
     
<div class="container-fluid" id="mainArea">

</div>

<!----------------------------------------------------------->      
<!----------------------------------------------------------->
<div id="myModal" class="modal fade">
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

	function setStaffForm(Vform)
	{
		var Valpage = Vform;
		Valpage = Valpage.replace(".php", "");
		Valpage = Valpage.replace("file/", "");
		$.post("file/"+Vform,
			{	
			PageName		: Valpage
			},
			function(result)
			{
			$( "#mainArea" ).html(result);
			}
		);
	}
	
	function Set_modal_text(Vmode,Vdesc)
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