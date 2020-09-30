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
    
<div class="container-fluid">
    
            <!---------------------------	Main control				--------------------------------------------->
            <!---------------------------	Main control				--------------------------------------------->
            <!---------------------------	Main control				--------------------------------------------->
            <div id="" style="margin:auto; margin-top: 20px; font-size: 1.2em; margin:
              padding: 10px;
              border-width: 2px;
              border-style: solid;
              border-color: #03F;" align="center"
              class="col-md-6">
                <h3 style="color:#03F;">Controll ...</h3>
                <div class="row" align="right"> 
                		<!--- refresh button controll panel ----->
                    <button type="button" class="btn btn-info col-md-1 col-md-offset-1" onclick="set_control_panel();">
                      <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                    </button>
                		<!--- toggle button control panel ----->
                    <button type="button" class="btn btn-warning col-md-1 col-md-offset-1"  data-toggle="collapse" data-target="#TgControl">
                      <span class="glyphicon glyphicon-eye-open"></span>
                    </button>
                </div>
                <div id="control_pressing_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>
                
              <div id="TgControl" class="collapse"><!---------	stoggle control	----------------->
                 
                                
                <div name="panel_controll" id="panel_controll"> <!---------  panel control button  --------------->
                </div>
                
                
                
                
                <div><!---------	set Screen option	----------------->
                	
                    <div class='row'><!---------	set show / hide  frame	----------------->
                    	<button type="button" style="font-size: 20px;" class="btn btn-warning btn-lg col-md-4 col-md-offset-1" 					
                        		onclick='set_frame();'>
                        	<span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> Frame S/H
                            </button>
                   	</div>
                    <div class='row'><!---------	set show / hide  light status	----------------->
                    	<button type="button" style="font-size: 20px;" class="btn btn-warning btn-lg col-md-4 col-md-offset-1" 					
                        		onclick='set_light();'>
                        	<span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> Light 
                            </button>
                   	</div>
                    <div class='row'><!---------	set back ground color	----------------->
                    	<button type="button" style="font-size: 20px;" class="btn btn-warning btn-lg col-md-4 col-md-offset-1" 					
                        		onclick='set_background();'>
                        	<span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> Background 
                            </button>
                   	</div>
                    <div class='row'><!---------	set back ground color	----------------->
                    	<button type="button" style="font-size: 20px;" class="btn btn-danger btn-lg col-md-4 col-md-offset-1" 					
                        		onclick='set_refresh();'>
                        	<span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> Refresh 
                            </button>
                   	</div>
                    <div class='row'><!---------	set back ground color	----------------->
                    	<button type="button" style="font-size: 20px;" class="btn btn-danger btn-lg col-md-4 col-md-offset-1" 					
                        		onclick='set_syncScreen();'>
                        	<span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> Sync Screen 
                            </button>
                   	</div>
                    
                    
                    
                    <div class='row'><!---------	set back ground color	----------------->
                    	<button type="button" style="font-size: 20px;" class="btn btn-success btn-lg col-md-4 col-md-offset-1" 					
                        		onclick='openWin();'>
                        	<span class="glyphicon glyphicon-print"></span> Report 
                            </button>
                   	</div>
                    <div class='row'><!---------	set back ground color	----------------->
                    	<button type="button" style="font-size: 20px;" class="btn btn-success btn-lg col-md-4 col-md-offset-1" 					
                        		onclick='openReg();'>
                        	<span class="glyphicon glyphicon-user"></span> ลงทะเบียน 
                            </button>
                   	</div>
                    
                    
                    
                </div>
                
                
                
                
                <div class="row" style="margin-top: 50px;"> <!---------  panel set size monitor  --------------->
                
                    <div><!--- set size screen ----->
                        <div class="row" align="right"> 
                            <button type="button" class="btn btn-info col-md-1 col-md-offset-3" onclick="set_margin('TOP','dec');">
                              	<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> TOP
                            </button>
                            <button type="button" class="btn btn-info col-md-1 col-md-offset-3" onclick="set_margin('BOTTOM','dec');">
                              	<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> BOTTOM
                            </button>
                        </div>
                        <div class="row" align="right"> 
                            <button type="button" class="btn btn-info col-md-1 col-md-offset-3" onclick="set_margin('TOP','inc');">
                              	<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> TOP
                            </button>
                            <button type="button" class="btn btn-info col-md-1 col-md-offset-3" onclick="set_margin('BOTTOM','inc');">
                              	<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> BOTTOM
                            </button>
                        </div>
                    </div>
                    <br />
                	<div class="row">
						<svg width="400" height="110">
                          <rect width="300" height="100" style="fill:rgb(230,230,230);stroke-width:5;stroke:rgb(0,0,0)" />
                        </svg>
                    </div>
                    <br />
                    <div>
                        <div class="row" align="right"> 
                            <button type="button" class="btn btn-info col-md-1 col-md-offset-3" onclick="set_margin('LEFT','dec');">
                              	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> LEFT
                            </button>
                            <button type="button" class="btn btn-info col-md-1 col-md-offset-3" onclick="set_margin('RIGHT','inc');">
                              	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> RIGHT
                            </button>
                        </div>
                        <div class="row" align="right"> 
                            <button type="button" class="btn btn-info col-md-1 col-md-offset-3" onclick="set_margin('LEFT','inc');">
                              	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> LEFT
                            </button>
                            <button type="button" class="btn btn-info col-md-1 col-md-offset-3" onclick="set_margin('RIGHT','dec');">
                              	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> RIGHT
                            </button>
                        </div>
                    </div>
                    
                    <!-----	display margin  ----->
                    <table border="1">
                    	<tr>
                        	<td width="100px;">&nbsp;TOP</td>
                        	<td width="150px;" align="right"><div id="Dmarg_TOP"></div></td>
                        </tr>
                    	<tr>
                        	<td>&nbsp;BOTTOM</td>
                        	<td align="right"><div id="Dmarg_BOTTOM"></div></td>
                        </tr>
                    	<tr>
                        	<td>&nbsp;LEFT</td>
                        	<td align="right"><div id="Dmarg_LEFT"></div></td>
                        </tr>
                    	<tr>
                        	<td>&nbsp;RIGHT</td>
                        	<td align="right"><div id="Dmarg_RIGHT"></div></td>
                        </tr>
                    </table>
					<br />
                             
									
					<div>
						<br><h3 style="color: blue;"><b>Distinct Random Block from left side</b></h3>
                        <div class="row" align="right"> 
                            <button type="button" class="btn btn-info col-md-1 col-md-offset-3" onclick="set_margin('MRG_BR','dec');">
                              	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> LEFT
                            </button>
								<input type="text" class="form-control col-md-2" value="" style="width: 150px; margin-left: 10px;" id="Dmarg_MRG_LEFT_BLOCKRN" />
                            <button type="button" class="btn btn-info col-md-1 col-md-offset-3" onclick="set_margin('MRG_BR','inc');" style="margin-left: 10px;">
                              	RIGHT <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            </button>
                        </div>
					</div>
					<br>
				
                
                	<div>
                    	<h3 style="color: blue;"><b>Set number of gift sub</b></h3>
                        <div class="row">
                        	<input type="number" class="form-control col-md-offset-4 col-md-2" value="1" style="width: 150px;" id="num_of_subGift" onchange="set_num_gift();" onclick="set_num_gift();" onfocus="set_num_gift();" />
                        </div>
                        <div class="row">
                        	<button type="button" id="b_num_subGift" class="btn btn-info col-md-1 col-md-offset-4" onclick="">
                              	SET<span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>



                </div>
                
  			</div><!---------	stoggle control	----------------->
                
            </div>    
            
 
     
            <!---------------------------	Monitor 2				--------------------------------------------->   
            <!---------------------------	Monitor 2				--------------------------------------------->   
            <!---------------------------	Monitor 2				--------------------------------------------->        
            <div id="" style="margin:auto; margin-top: 20px; font-size: 1.2em;
              padding: 10px;
              border-width: 2px;
              border-style: solid;
              border-color: #609;" align="center"
              class="col-md-6">
                <h3 style="color:#03F;">Monitor 2...</h3>
                <div class="row" align="right"> 
                		<!--- refresh button monitor 2 panel ----->
                    <button type="button" class="btn btn-info col-md-1 col-md-offset-1" onclick="set_monitor2_table();">
                      <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                    </button>
                		<!--- toggle button monitor 2 panel ----->
                    <button type="button" class="btn btn-warning col-md-1 col-md-offset-1"  data-toggle="collapse" data-target="#TgTmonitor2">
                      <span class="glyphicon glyphicon-eye-open"></span>
                    </button>
                </div>
                <div id="monitor2_pressing_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>
                
                <div id="TgTmonitor2" class="collapse"><!--- toggle monitor 2 panel ----->
                <table class="table table-striped table-dark" id="Tmonitor2">
                	<thead class="thead-light">
                	<tr>
                    	<td align="center"><input type='checkbox' id="b_total_check" class='largerCheckbox' onclick="c_total_gift();">Name</td>
                    	<td align="center" width="300px;">Person</td>
                    	<td align="center" width="150px;">Unit</td>
                    	<td align="center">Edit</td>
                    </tr>
                	</thead>
                	<tbody>
                    </tbody>
                </table>
                </div><!--- toggle monitor 2 panel ----->
            
                <div class="row col-md-10 col-md-offset-1" id="p_monitor2_edit" style="display: none;">
                <br />
                <br />
                  <div class="panel panel-default">
                    <div class="panel-heading">
                    		<div class="row">
								<button type="button" class="btn btn-danger col-md-1" aria-label="Left Align" onclick="$('#p_monitor2_edit').hide();set_monitor2_table();">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								</button>
                    			<label style=" font-size:36px;">Edit Price special</label>
							</div>
                    </div>
                    <div class="panel-body">
                    	<div class="row">
                        	<div class="col-md-3 col-md-offset-1" align="left">
                            	<label style=" font-size:36px;">Gift ID</label>
                            </div>
                        	<div class="col-md-2">
                            	<input type="text" id="V_giftIdEdit" class="form-control" disabled="disabled" style=" font-size:20px;"/>
                            </div>
                        	<div class="col-md-2">
                            	<button type="button" id="button_gift_setper" class="btn btn-info" style=" font-size:20px;" onclick="edit_gift_setVal('set_nextGift');">
                                  <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> รางวัลถัดไป
                                </button>
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="col-md-3 col-md-offset-1" align="left">
                            	<label style=" font-size:36px;">Person ID</label>
                            </div>
                        	<div class="col-md-2">
                            	<input type="text" id="V_giftIdPerson" class="form-control" disabled="disabled" style=" font-size:20px;"/>
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="col-md-3 col-md-offset-1" align="left">
                            	<label style=" font-size:36px;">Price name</label>
                            </div>
                        	<div class="col-md-6">
                            	<input type="text" id="V_giftNameEdit" class="form-control" style=" font-size:20px;"/>
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="col-md-3 col-md-offset-1" align="left">
                            	<label style=" font-size:36px;">Person</label>
                            </div>
                        	<div class="col-md-4">
                            	<input type="text" id="V_giftPersonEdit" class="form-control" style=" font-size:20px;" placeholder="ถ้าจะล็อคคนให้ใส่ ID คนนั้นๆ"/>
                            </div>
                        	<div class="col-md-2">
                            	<button type="button" id="button_gift_setper" class="btn btn-warning" style=" font-size:20px;" onclick="edit_gift_setVal('set_perGift');">
                                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Lock
                                </button>
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="col-md-3 col-md-offset-1" align="left">
                            	<label style=" font-size:36px;">Status</label>
                            </div>
                        	<div class="col-md-4" align="left" style="font-size:30px;">
                            	<!---<span class="glyphicon glyphicon-ok"  id="V_statusEdit"  aria-hidden="true" style="color:#0C0;"></span>---->
                            	<select id="V_giftStatusEdit">
                                    <option value="0">ว่าง</option>
                                    <option value="1">ไม่ว่าง</option>
                                </select>
                            </div>
                        </div>
                        
                        
                    	<div class="row">
                        	<div class="col-md-4 col-md-offset-3">
                            	<button type="button" class="btn btn-danger" aria-label="Left Align" style=" font-size:20px;" onclick="cancel_person('gift');" id="btt_purg">
                                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> สละสิทธิ์
                                </button>
                            </div>
                        </div> 
                        
                    	<div class="row">
                        	<div class="col-md-4 col-md-offset-3">
                            	<button type="button" class="btn btn-success" aria-label="Left Align" style=" font-size:20px;" onclick="edit_gift_setVal('add');">
                                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> เพิ่ม
                                </button>
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="col-md-4 col-md-offset-3">
                            	<button type="button" id="button_gift_pause" class="btn btn-warning" aria-label="Left Align" style=" font-size:20px;" onclick="edit_gift_setVal('pause');">
                                  <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> ยกเลิก
                                </button>
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="col-md-4 col-md-offset-3">
                            	<button type="button" id="button_gift_delete" class="btn btn-warning" aria-label="Left Align" style=" font-size:20px;" onclick="edit_gift_setVal('clear');">
                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> CLEAR
                                </button>
                            </div>
                        </div>
                    
                    
                    
                    </div>
                  </div>
                </div>
            </div>  
            
<!--
</div>



<div class="row">  
-->
    
            <!---------------------------	Monitor 1				--------------------------------------------->
            <!---------------------------	Monitor 1				--------------------------------------------->
            <!---------------------------	Monitor 1				--------------------------------------------->       
            <div id="" style="margin:auto; margin-top: 20px; font-size: 1.2em;
              padding: 10px;
              border-width: 2px;
              border-style: solid;
              border-color: #96C;" align="center"
              class="col-md-6">
                <h3 style="color:#03F;">Monitor 1...</h3>  
                <div class="row" align="right"> <!--- refresh button controll panel ----->
                    <button type="button" class="btn btn-info col-md-1 col-md-offset-1" onclick="read_log();">
                      <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                    </button>
                		<!--- toggle button monitor 1 panel ----->
                    <button type="button" class="btn btn-warning col-md-1 col-md-offset-1"  data-toggle="collapse" data-target="#TgTmonitor1">
                      <span class="glyphicon glyphicon-eye-open"></span>
                    </button>
                </div>     
                <div id="monitor1_pressing_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>
       
                <div id="TgTmonitor1" class="collapse"><!--- toggle monitor 1 panel ----->   
                <table class="table table-striped table-dark" id="read_log">
                	<thead class="thead-light">
                	<tr>
                    	<td align="center" width="250px;">Time</td>
                    	<td align="center" width="150px;">mode</td>
                    	<td align="center">Desc...</td>
                    </tr>
                	</thead>
                	<tbody>
                    </tbody>
                </table>
                </div><!--- toggle monitor 1 panel ----->   
                
            </div>  
            
            <!---------------------------	Monitor 1				--------------------------------------------->
            <!---------------------------	Monitor 1				--------------------------------------------->
            <!---------------------------	Monitor 1				--------------------------------------------->       
            
            
            
                 
            <!---------------------------	Monitor 3				--------------------------------------------->   
            <!---------------------------	Monitor 3				--------------------------------------------->   
            <!---------------------------	Monitor 3				--------------------------------------------->        
            <div id="" style="margin:auto; margin-top: 20px; font-size: 1.2em;
              padding: 10px;
              border-width: 2px;
              border-style: solid;
              border-color: #609;" align="center"
              class="col-md-6">
                <h3 style="color:#03F;">Monitor 3...</h3>
                <div class="row" align="right"> <!--- refresh button monitor 3 panel ----->
                    <button type="button" class="btn btn-info col-md-1 col-md-offset-1" onclick="set_monitor3_table();">
                      <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                    </button>
                		<!--- toggle button monitor 3 panel ----->
                    <button type="button" class="btn btn-warning col-md-1 col-md-offset-1"  data-toggle="collapse" data-target="#TgTmonitor3">
                      <span class="glyphicon glyphicon-eye-open"></span>
                    </button>
                </div>
                <div id="monitor3_pressing_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>
                
                <div id="TgTmonitor3" class="collapse"><!--- toggle monitor 3 panel ----->                
				<table class="table table-striped table-dark" id="Tmonitor3">
                	<thead class="thead-light">
                	<tr>
                    	<td align="center">Name</td>
                    	<td align="center">Gift</td>
                    	<td align="center">Status</td>
                    	<td align="center">Edit</td>
                    </tr>
                	</thead>
                	<tbody>
                    </tbody>
                </table>
                
                </div><!--- toggle monitor 3 panel -----> 
                
                
                <div class="row col-md-10 col-md-offset-1" id="p_monitor3_edit" style="display: none;">
                <br />
                <br />
                
                  <div class="panel panel-default">
                    <div class="panel-heading">
                    		<div class="row">
								<button type="button" class="btn btn-danger col-md-1" aria-label="Left Align" onclick="$('#p_monitor3_edit').hide();set_monitor3_table();">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								</button>
                    			<label style=" font-size:36px;">Edit Person</label>
							</div>
                    </div>
                    <div class="panel-body">
                    	<div class="row">
                        	<div class="col-md-3 col-md-offset-1" align="left">
                            	<label style=" font-size:36px;">PID</label>
                            </div>
                        	<div class="col-md-2">
                            	<input type="text" id="V_personIdEdit" class="form-control" disabled="disabled" style=" font-size:20px;"/>
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="col-md-3 col-md-offset-1" align="left">
                            	<label style=" font-size:36px;">Person name</label>
                            </div>
                        	<div class="col-md-6">
                            	<input type="text" id="V_personNameEdit" class="form-control" style=" font-size:20px;"/>
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="col-md-3 col-md-offset-1" align="left">
                            	<label style=" font-size:36px;">Group</label>
                            </div>
                        	<div class="col-md-6">
                            	<input type="text" id="V_personGroupGift" class="form-control" style=" font-size:20px;"/>
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="col-md-3 col-md-offset-1" align="left">
                            	<label style=" font-size:36px;">Gift</label>
                            </div>
                        	<div class="col-md-6">
                            	<input type="text" id="V_personEditGift" class="form-control" style=" font-size:20px;"/>
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="col-md-3 col-md-offset-1" align="left">
                            	<label style=" font-size:36px;">Status</label>
                            </div>
                        	<div class="col-md-4" align="left" style="font-size:30px;">
                                <input type="text" id="V_personStatusEdit" class="form-control" disabled="disabled" style=" font-size:20px;"/>
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="col-md-4 col-md-offset-3">
                            	<button type="button" class="btn btn-danger" aria-label="Left Align" style=" font-size:20px;" onclick="cancel_person('person');">
                                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> สละสิทธิ์
                                </button>
                            </div>
                        </div>                
                	</div>
                 </div>
                
                
            </div>
        
</div>
     
        
    
            <!---------------------------	Monitor 4				--------------------------------------------->
            <!---------------------------	Monitor 4				--------------------------------------------->
            <!---------------------------	Monitor 4				--------------------------------------------->       
            <div id="" style="margin:auto; margin-top: 20px; font-size: 1.2em;
              padding: 10px;
              border-width: 2px;
              border-style: solid;
              border-color: #96C;" align="center"
              class="col-md-6">
                <h3 style="color:#03F;">Monitor 4...</h3>  
                <div class="row" align="right"> <!--- refresh button controll panel ----->
                
                    <button type="button" class="btn btn-info col-md-1 col-md-offset-1" onclick="read_table_monitor4();">
                      <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                    </button>
                		<!--- toggle button monitor 4 panel ----->
                    <button type="button" class="btn btn-warning col-md-1 col-md-offset-1"  data-toggle="collapse" data-target="#TgTmonitor4">
                      <span class="glyphicon glyphicon-eye-open"></span>
                    </button>
                 
                </div>     
                <div id="monitor4_pressing_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>     
                
                           
                <div id="TgTmonitor4" class="collapse"><!--- toggle monitor 4 panel ----->    
                <table class="table table-striped table-dark" id="monitor4">
                	<thead class="thead-light">
                	<tr>
                    	<td align="center">รางวัล</td>
                    	<td align="center">หน่วย</td>
                    	<td align="center">ผู้ได้รับ</td>
                    	<td align="center">Edit</td>
                    </tr>
                	</thead>
                	<tbody>
                    </tbody>
                </table>
                </div><!--- toggle monitor 4 panel ----->  
                
            </div>  
            
            <!---------------------------	Monitor 4				--------------------------------------------->
            <!---------------------------	Monitor 4				--------------------------------------------->
            <!---------------------------	Monitor 4				--------------------------------------------->         




            <!---------------------------	Monitor horse run				--------------------------------------------->
            <!---------------------------	Monitor horse run				--------------------------------------------->
            <!---------------------------	Monitor horse run				--------------------------------------------->       
            <div id="" style="margin:auto; margin-top: 20px; font-size: 1.2em;
              padding: 10px;
              border-width: 2px;
              border-style: solid;
              border-color: #96C;" align="center"
              class="col-md-6">
                <h3 style="color:#03F;">Monitor horse run...</h3>  
                <div class="row" align="right"> 
                		<!--- toggle button monitor horse run panel ----->
                    <button type="button" class="btn btn-warning col-md-1 col-md-offset-1"  data-toggle="collapse" data-target="#TgTmonitorHouse">
                      <span class="glyphicon glyphicon-eye-open"></span>
                    </button>
                 
                </div>     
                <div id="monitor4_pressing_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>     
                
                           
                <div id="TgTmonitorHouse" class="collapse" style="background-color:#FCF;"><!--- toggle monitor horse run panel ----->    

				<!--  Control animal run  -->
				<!--  Control animal run  -->
				<!--  Control animal run  -->
				<div class="row" align="center">	<!--  Animal  1  -->
                	<div class="col-md-2 vcenter">
                    	<button type="button" class="btn btn-info" onclick="set_horse(1,'B');">
                    		<span class="glyphicon glyphicon-backward"></span>
                    	</button>
                   	</div>
                	<div class="col-md-2 vcenter">
                    	<img src="images/anim_1.gif" style="height: 80px; width: 80px;" alt="Number 1">
                    </div>
                	<div class="col-md-2 vcenter">
                    	<button type="button" class="btn btn-info" onclick="set_horse(1,'F');">
                    		<span class="glyphicon glyphicon-forward"></span>
                    	</button>
                   	</div>
                </div>
                
				<div class="row" align="center">	<!--  Animal  2  -->
                	<div class="col-md-2 vcenter">
                    	<button type="button" class="btn btn-info" onclick="set_horse(2,'B');">
                    		<span class="glyphicon glyphicon-backward"></span>
                    	</button>
                   	</div>
                	<div class="col-md-2 vcenter">
                    	<img src="images/anim_2.gif" style="height: 80px; width: 80px;" alt="Number 1">
                    </div>
                	<div class="col-md-2 vcenter">
                    	<button type="button" class="btn btn-info" onclick="set_horse(2,'F');">
                    		<span class="glyphicon glyphicon-forward"></span>
                    	</button>
                   	</div>
                </div>
                
				<div class="row" align="center">	<!--  Animal  3  -->
                	<div class="col-md-2 vcenter">
                    	<button type="button" class="btn btn-info" onclick="set_horse(3,'B');">
                    		<span class="glyphicon glyphicon-backward"></span>
                    	</button>
                   	</div>
                	<div class="col-md-2 vcenter">
                    	<img src="images/anim_3.gif" style="height: 80px; width: 80px;" alt="Number 1">
                    </div>
                	<div class="col-md-2 vcenter">
                    	<button type="button" class="btn btn-info" onclick="set_horse(3,'F');">
                    		<span class="glyphicon glyphicon-forward"></span>
                    	</button>
                   	</div>
                </div>
                
				<div class="row" align="center">	<!--  Animal  4  -->
                	<div class="col-md-2 vcenter">
                    	<button type="button" class="btn btn-info" onclick="set_horse(4,'B');">
                    		<span class="glyphicon glyphicon-backward"></span>
                    	</button>
                   	</div>
                	<div class="col-md-2 vcenter">
                    	<img src="images/anim_4.gif" style="height: 80px; width: 80px;" alt="Number 1">
                    </div>
                	<div class="col-md-2 vcenter">
                    	<button type="button" class="btn btn-info" onclick="set_horse(4,'F');">
                    		<span class="glyphicon glyphicon-forward"></span>
                    	</button>
                   	</div>
                </div>
                
				<div class="row" align="center">	<!--  Animal  5  -->
                	<div class="col-md-2 vcenter">
                    	<button type="button" class="btn btn-info" onclick="set_horse(5,'B');">
                    		<span class="glyphicon glyphicon-backward"></span>
                    	</button>
                   	</div>
                	<div class="col-md-2 vcenter">
                    	<img src="images/anim_5.gif" style="height: 80px; width: 80px;" alt="Number 1">
                    </div>
                	<div class="col-md-2 vcenter">
                    	<button type="button" class="btn btn-info" onclick="set_horse(5,'F');">
                    		<span class="glyphicon glyphicon-forward"></span>
                    	</button>
                   	</div>
                </div>
                
				<div class="row" align="center">	<!--  Animal  6  -->
                	<div class="col-md-2 vcenter">
                    	<button type="button" class="btn btn-info" onclick="set_horse(6,'B');">
                    		<span class="glyphicon glyphicon-backward"></span>
                    	</button>
                   	</div>
                	<div class="col-md-2 vcenter">
                    	<img src="images/anim_6.gif" style="height: 80px; width: 80px;" alt="Number 1">
                    </div>
                	<div class="col-md-2 vcenter">
                    	<button type="button" class="btn btn-info" onclick="set_horse(6,'F');">
                    		<span class="glyphicon glyphicon-forward"></span>
                    	</button>
                   	</div>
                </div>
				
				<div class="row" align="center">
                	<div class="col-md-2 vcenter">
                    	<button type="button" class="btn btn-info" onclick="horse_display(1);">
                    		<span class="glyphicon glyphicon-cog"></span> แข่ง
                    	</button>
                   	</div>                	
					<div class="col-md-2 vcenter">
                    	<button type="button" class="btn btn-info" onclick="horse_display(2);">
                    		<span class="glyphicon glyphicon-film"></span> ชนะ
                    	</button>
                   	</div>				
					<br>
				
				</div>
			
                </div><!--- toggle monitor horse run panel ----->  
                <!--- toggle monitor horse run panel ----->  
                <!--- toggle monitor horse run panel ----->  
                
            </div>  
            
            <!---------------------------	Monitor horse run				--------------------------------------------->
            <!---------------------------	Monitor horse run				--------------------------------------------->
            <!---------------------------	Monitor horse run				---------------------------------------------> 
            
            
                       
	<div class="row">  
        <div style="margin:auto;" align="center">
            <marquee behavior="alternate" direction="left" style="color: #00F;">Control panel...</marquee>
        </div>
	</div>   

    
    
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
	
	window.onload = set_page();
	function set_page()
	{
			Set_modal_text(2,"ระบบจับสลาก")
			set_control_panel();
			set_margin('read',1);
			set_monitor2_table();
			set_monitor3_table();
			read_log();
			log_control_start();
	}
	
	function log_control_start()
	{
		$.post("file/f_pagecon.php",
		{				
			Vmode	: 'log_start',
			Vip		: '<?php echo $ipaddress; ?>'
			},
			function(result)
			{
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
//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// 	Controll Area	//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////		
	
	function set_control_panel()
	{
			$("#control_pressing_animate").show();
			$("#panel_controll").html('');
				$.ajax({
					url: "file/f_pagecon.php",
					type: "post",
					data: "Vmode=showbutton" ,
					beforSend:function(){},
					success: function (data) {
						if (data[0].result === "true") 
						{
							for (var i = 1; i < data.length; i++) 
							{
								var B_enable = '';
								if(data[i]["page_enable"]==='0') B_enable = ' disabled="disabled" ';
								var hl = (data[i]["page_set"] === '1') ? 'warning' :'default';
								$("#panel_controll").append("<div class='row'><button type='button' style='font-size : 20px;' "+B_enable+"class='btn btn-" + hl + " btn-lg col-md-5 col-md-offset-2' onclick='set_showpage(" + data[i]["page_id"] + ");'><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span> " + data[i]["page_name"] + "</button></div>");
							}
						} 
						$("#control_pressing_animate").hide();
					},
					error: function (xhr, status, error) {
						Set_modal_text(1,"Error : Get controll page!");
						$("#control_pressing_animate").hide();
					}
				});
	}
			
	function set_showpage(Vpage)
	{	
			$("#control_pressing_animate").show();
			$.post("file/f_pagecon.php",
				{				
					Vmode	: 'pageshow',
					Vpage	: Vpage
				},
				function(result)
				{
					set_control_panel();
					$("#control_pressing_animate").hide();
					if(result === '0')		Set_modal_text(1,'รายการไม่สมบูรณ์');
				}
			);
	}
			
	function set_margin(Vside,Vval)
	{			
				$.ajax({
					url: "file/f_pagecon.php",
					type: "post",
					data: "Vmode=side_margin&Vside=" + Vside + "&Vval=" + Vval,
					beforSend:function(){},
					success: function (data) {
						if (data[0].result === "true") 
						{
							for (var i = 1; i < data.length; i++) 
							{
								if(data[i]["marg_name"]==="MRG_LEFT_BLOCKRN") $("#Dmarg_"+data[i]["marg_name"]).val(data[i]["marg_val"]);
								else $("#Dmarg_"+data[i]["marg_name"]).html(data[i]["marg_val"]+"&nbsp;px&nbsp;");
							}
						} 
					},
					error: function (xhr, status, error) {
						Set_modal_text(1,"Error : Get controll page!");
					}
				});
	}	
		
	function set_frame()
	{
			$("#control_pressing_animate").show();
			$.post("file/f_pagecon.php",
				{				
					Vmode	: 'set_frame'
				},
				function(result)
				{
					set_control_panel();
					$("#control_pressing_animate").hide();
					if(result === 0)		Set_modal_text(1,'รายการไม่สมบูรณ์');
				}
			);			
	}
		
	function set_light()
	{
			$("#control_pressing_animate").show();
			$.post("file/f_pagecon.php",
				{				
					Vmode	: 'set_light'
				},
				function(result)
				{
					set_control_panel();
					$("#control_pressing_animate").hide();
					if(result === 0)		Set_modal_text(1,'รายการไม่สมบูรณ์');
				}
			);			
	}
		
	function set_background()
	{
			$("#control_pressing_animate").show();
			$.post("file/f_pagecon.php",
				{				
					Vmode	: 'set_background'
				},
				function(result)
				{
					set_control_panel();
					$("#control_pressing_animate").hide();
					if(result === 0)  Set_modal_text(1,'รายการไม่สมบูรณ์');
				}
			);			
	}
		
	function set_refresh()
	{
			$("#control_pressing_animate").show();
			$.post("file/f_pagecon.php",
				{				
					Vmode	: 'set_refresh'
				},
				function(result)
				{
					set_control_panel();
					$("#control_pressing_animate").hide();
					if(result === 0)  Set_modal_text(1,'รายการไม่สมบูรณ์');
				}
			);			
	}
		
	function set_syncScreen()
	{
			$("#control_pressing_animate").show();
			$.post("file/f_pagecon.php",
				{				
					Vmode	: 'set_syncScreen'
				},
				function(result)
				{
					set_control_panel();
					$("#control_pressing_animate").hide();
					if(result === 0)  Set_modal_text(1,'รายการไม่สมบูรณ์');
				}
			);			
	}
	
	function set_num_gift()
	{
		$("#num_of_subGift").css("color","red");
		$("#b_num_subGift").css("color","red");
		
		$.post("file/f_pagecon.php",
			{				
				Vmode	: 'set_num_of_subGift',
				Vval	: $("#num_of_subGift").val()
			},
			function(result)
			{
				if(result==='1')
				{
					$("#num_of_subGift").css("color","green");
					$("#b_num_subGift").css("color","green");
				}
			}
		);			
	}
//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// 	Controll Area	//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////	
		
		

//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// 	Monitor 2 Area	//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////	
	function set_monitor2_table()
	{
		var table = $('#Tmonitor2').DataTable();
		
		$('#p_monitor2_edit').hide();
		$("#monitor2_pressing_animate").show();
		table.clear().draw();
			$.ajax({
				url: "file/f_pagecon.php",
				type: "post",
				data: "Vmode=read_table_monitor2",
				beforSend:function(){},
				success: function (data) {
					if (data[0].result === "true") 
					{
						var table_source = [];
						$("#Tmonitor2 > tbody").empty();
						for (var i = 1; i < data.length; i++) 
						{
							var col = {};
							if(data[i]["status"] === '1') col[0] = "<label style='color:red; font-size : 30px;'><input type='checkbox' id='b_gift' class='b_gift largerCheckbox' onclick='set_gift_stat("+data[i]["number"]+");'> "+data[i]["number"]+" "+data[i]["name"]+" ( "+data[i]["unit_case"]+" )</lable>";
							else						  col[0] = "<label style='color:green; font-size : 30px;'><input type='checkbox' id='b_gift' class='b_gift largerCheckbox' onclick='set_gift_stat("+data[i]["number"]+");'> "+data[i]["number"]+" "+data[i]["name"]+" ( "+data[i]["unit_case"]+" )</lable>";
							col[1] = " "+data[i]["person_name"];
							col[2] = " "+data[i]["unit_case"];
							col[3] = '<button class="btn btn-default" onclick="edit_gift(\''+data[i]["number"]+'\',\''+data[i]["name"]+'\',\''+data[i]["status"]+'\',\''+data[i]["person_name"]+'\',\''+data[i]["sid"]+'\');" ><span class="glyphicon glyphicon-pencil"></span></button>';
							 var arr = [col[0],col[1],col[2],col[3]];
							 table_source.push(arr);
						}			
						table.rows.add(table_source).draw();
						$("#monitor2_pressing_animate").hide();
					} 
				},
				error: function (xhr, status, error) {
					Set_modal_text(1,"Error : Monitor1 table!");
					$("#monitor2_pressing_animate").hide();
				}
			});
	}
	
	function c_total_gift()
	{
		
		if($("#b_total_check").is(':checked'))
		{    
			$("#Tmonitor2 input[type=checkbox]").each(function () {
					$(this).attr("checked", true);
			});	
		}
		else
		{
			$("#Tmonitor2 input[type=checkbox]").each(function () {
					$(this).attr("checked", false);
			});	
		}
		

		
		/*
		
		if ($("#Set_allChkbox").is(':checked'))
		{         
			$("#opbil_list input[type=checkbox]").each(function () {
                $(this).attr("checked", true);
            });	
			SVal = 1;
		}
		else
		{        
			$("#opbil_list input[type=checkbox]").each(function () {
                $(this).attr("checked", false);
            });	
			SVal = 0;
		}
		
		*/
	}
	
	function set_gift_stat(Gid)
	{
		alert(Gid);
	}
	
	function edit_gift(Vnum,Vname,Vstatus,VpersonName,Vsid)
	{
		$("#p_monitor2_edit").show();
		$("#V_giftIdEdit").val(Vnum);
		$("#V_giftNameEdit").val(Vname);
		$("#V_giftPersonEdit").val(VpersonName);
		$("#V_giftStatusEdit").val(Vstatus);
		$("#V_giftIdPerson").val(Vsid);
		if(Vstatus==='1') 	
		{
			$("#btt_purg").show();
			$("#button_gift_delete").hide();
			$("#button_gift_pause").show();
		}
		else				
		{
			$("#btt_purg").hide();
			$("#button_gift_delete").show();
			$("#button_gift_pause").hide();
		}
		
		
	}
	
	function edit_gift_setVal(Vmode)
	{
		$.post("file/f_pagecon.php",
			{				
				Vmode	: "gift_"+Vmode,
				Vpid	: $("#V_giftPersonEdit").val(),
				Gfid	: $("#V_giftIdEdit").val()				
			},
			function(result)
			{
				$("#p_monitor2_edit").hide();
				set_monitor2_table();
			}
		);
	}
//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// 	Monitor 2 Area	//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////	





//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// 	Monitor 3 Area	//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////	
	function set_monitor3_table()
	{
		var table = $('#Tmonitor3').DataTable();
		
		$("#p_monitor3_edit").hide();
		$("#monitor3_pressing_animate").show();
		table.clear().draw();
			$.ajax({
				url: "file/f_pagecon.php",
				type: "post",
				data: "Vmode=read_table_monitor3",
				beforSend:function(){},
				success: function (data) {
					if (data[0].result === "true") 
					{
						var table_source = [];
						$("#Tmonitor3 > tbody").empty();
						for (var i = 1; i < data.length; i++) 
						{
							var col = {};
							if(data[i]["gift_id"]==='0') col[0] = "<label style='color:red; font-size : 30px;'>"+data[i]["person_id"]+" "+data[i]["person_name"]+" | "+data[i]["unit_case"]+"</lable>";
							else				         col[0] = "<label style='color:green; font-size : 30px;'>"+data[i]["person_id"]+" "+data[i]["person_name"]+" | "+data[i]["unit_case"]+"</lable>";
							if(data[i]["gift_id"]==='0') col[1] = "<label style='color:red; font-size : 30px;'>"+data[i]["gift_id"]+" "+data[i]["gift_name"]+"</lable>";
							else				         col[1] = "<label style='color:green; font-size : 30px;'>"+data[i]["gift_id"]+" "+data[i]["gift_name"]+"</lable>";
							col[2] = " "+data[i]["unit_case"];
							col[3] = '<button class="btn btn-default" onclick="edit_personGift(\''+data[i]["person_id"]+'\',\''+data[i]["person_name"]+'\',\''+data[i]["gift_id"]+' '+data[i]["gift_name"]+'\',\''+data[i]["gift_id"]+'\',\''+data[i]["unit_case"]+'\');" ><span class="glyphicon glyphicon-pencil"></span></button>';
							 var arr = [col[0],col[1],col[2],col[3]];
							 table_source.push(arr);
						}			
						table.rows.add(table_source).draw();
						$("#monitor3_pressing_animate").hide();
					} 
				},
				error: function (xhr, status, error) {
					Set_modal_text(1,"Error : Monitor1 table!");
					$("#monitor3_pressing_animate").hide();
				}
			});
	}
	
	function edit_personGift(VpId,VpName,Vgift,Vstatus,Vunit)
	{
		$("#V_personIdEdit").val(VpId);
		$("#V_personNameEdit").val(VpName);
		$("#V_personGroupGift").val(Vunit);
		$("#V_personEditGift").val(Vgift);
		if(Vstatus==='0')	$("#V_personStatusEdit").val("สละสิทธิ์");
		else				$("#V_personStatusEdit").val("ใช้สิทธิ์");
		$("#p_monitor3_edit").show();
			
	}
	
	function cancel_person(Vmode)
	{
		
		if(Vmode==='gift')		var buff_id = $("#V_giftIdPerson").val();
		if(Vmode==='person')	var buff_id = $("#V_personIdEdit").val();
		
		
		$.post("file/f_pagecon.php",
			{				
				Vmode	: 'cancel_person',
				Vpid	: buff_id
			},
			function(result)
			{
				set_monitor3_table();
				set_monitor2_table();
				$("#p_monitor3_edit").hide();
			}
		);		
	}

//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// 	Monitor 3 Area	//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////	



//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// 	Monitor 1 Area	//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////	

	function read_log()
	{
		var table = $('#read_log').DataTable();
		
		$("#monitor1_pressing_animate").show();
		table.clear().draw();
			$.ajax({
				url: "file/f_pagecon.php",
				type: "post",
				data: "Vmode=read_log1",
				beforSend:function(){},
				success: function (data) {
					if (data[0].result === "true") 
					{
						var table_source = [];
						$("#read_log > tbody").empty();
						for (var i = 1; i < data.length; i++) 
						{
							var col = {};
							col[0] = " "+data[i]["dt_set"];
							if(data[i]["mode"]==='cancel_person')	col[1] = "<label style='font-size: 30px; color: #FF0000;'>"+data[i]["mode"]+"</label>";
							else if(data[i]["mode"]==='radom')		col[1] = "<label style='font-size: 30px; color: #006633;'>"+data[i]["mode"]+"</label>";
							else									col[1] = "<label style='font-size: 30px; color: #FF8000;'>"+data[i]["mode"]+"</label>";
							col[2] = " "+data[i]["desc_gift"];
							var arr = [col[0],col[1],col[2]];
							 table_source.push(arr);
						}			
						table.rows.add(table_source).draw();
						$("#monitor1_pressing_animate").hide();
					} 
				},
				error: function (xhr, status, error) {
					Set_modal_text(1,"Error : Monitor1 table!");
					$("#monitor1_pressing_animate").hide();
				}
			});
	}


//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// 	Monitor 1 Area	//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////	


//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// 	Monitor 4 Area	//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////	

	function read_table_monitor4()
	{
		var table = $('#monitor4').DataTable();
		
		$("#monitor4_pressing_animate").show();
		table.clear().draw();
			$.ajax({
				url: "file/f_pagecon.php",
				type: "post",
				data: "Vmode=read_table_monitor4",
				beforSend:function(){},
				success: function (data) {
					if (data[0].result === "true") 
					{
						var table_source = [];
						$("#monitor4 > tbody").empty();
						for (var i = 1; i < data.length; i++) 
						{
							var col = {};
							
							if((data[i]["person_code"]*1)==0)
							{
								col[0] = "<label style='font-size: 30px; color: #00FF00;'>"+data[i]["gif_code"]+" "+data[i]["gift_name"]+" ("+data[i]["gif_code"]+")</label>";
								col[1] = "<label style='font-size: 30px; color: #00FF00;'>"+data[i]["unit_name"]+" ("+data[i]["unit_code"]+") </label>";
								col[2] = "<label style='font-size: 30px; color: #00FF00;'>"+data[i]["person_name"]+" ("+data[i]["person_code"]+") "+data[i]["unit_case"]+"</label>";
							}
							else
							{
								col[0] = "<label style='font-size: 30px; color: #FF0000;'>"+data[i]["gif_code"]+" "+data[i]["gift_name"]+" ("+data[i]["gif_code"]+")</label>";
								col[1] = "<label style='font-size: 30px; color: #FF0000;'>"+data[i]["unit_name"]+" ("+data[i]["unit_code"]+") </label>";
								col[2] = "<label style='font-size: 30px; color: #FF0000;'>"+data[i]["person_name"]+" ("+data[i]["person_code"]+") "+data[i]["unit_case"]+"</label>";
							}
							/*if((data[i]["person_code"]*1)==0) */
							col[3] = '<button class="btn btn-danger" onclick="clear_gift20(\''+data[i]["gif_code"]+'\');" ><span class="glyphicon glyphicon-trash"></span></button>';
							
							
																														   
																														   
							var arr = [col[0],col[1],col[2],col[3]];
							 table_source.push(arr);
						}			
						table.rows.add(table_source).draw();
						$("#monitor4_pressing_animate").hide();
					} 
				},
				error: function (xhr, status, error) {
					Set_modal_text(1,"Error : Monitor1 table!");
					$("#monitor4_pressing_animate").hide();
				}
			});
	}

	function clear_gift20(Vnum)
	{
		$.post("file/f_pagecon.php",
			{				
				Vmode	: 'cancel_gift20',
				Vpid	: Vnum
			},
			function(result)
			{
				read_table_monitor4();
			}
		);			
	}

//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// 	Monitor 4 Area	//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////	




//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// 	House run Area	//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////	
	function set_horse(VhorseId,VhorseDirec)
	{
		//alert(VhorseId+"--"+VhorseDirec);
		
		$.post("file/f_pagecon.php",
			{				
				Vmode		: 'set_horse',
				VHorseid	: VhorseId,
				VHorDr		: VhorseDirec
			},
			function(result)
			{
				
			}
		);	
				
	}
	
	function horse_display(Vin)
	{
		$.post("file/f_pagecon.php",
			{				
				Vmode		: 'set_display',
				Vdisp		: Vin
			},
			function(result)
			{
				
			}
		);		
	}
	
	function openWin() {
    	window.open("file/tcpdf1");
	}
	
	function openReg() {
    	window.open("register.php");
	}
//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// 	House run Area	//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////	

		
</script>
    
    
    
   </body>
</html>