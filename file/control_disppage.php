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
                    <button type="button" class="btn btn-info col-md-1 col-md-offset-1" onclick="control_disppage();">
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
    
    
<script type="text/javascript">     
//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// 	Controll Area	//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////	

	control_disppage();	
	
	function control_disppage()
	{
			$("#control_pressing_animate").show();
			$("#panel_controll").html('');
				$.ajax({
					url: "file/f_control_disppage.php",
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
			$.post("file/f_control_disppage.php",
				{				
					Vmode	: 'pageshow',
					Vpage	: Vpage
				},
				function(result)
				{
					control_disppage();
					$("#control_pressing_animate").hide();
					if(result === '0')		Set_modal_text(1,'รายการไม่สมบูรณ์');
				}
			);
	}
			
	function set_margin(Vside,Vval)
	{			
				$.ajax({
					url: "file/f_control_disppage.php",
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
			$.post("file/f_control_disppage.php",
				{				
					Vmode	: 'set_frame'
				},
				function(result)
				{
					control_disppage();
					$("#control_pressing_animate").hide();
					if(result === 0)		Set_modal_text(1,'รายการไม่สมบูรณ์');
				}
			);			
	}
		
	function set_light()
	{
			$("#control_pressing_animate").show();
			$.post("file/f_control_disppage.php",
				{				
					Vmode	: 'set_light'
				},
				function(result)
				{
					control_disppage();
					$("#control_pressing_animate").hide();
					if(result === 0)		Set_modal_text(1,'รายการไม่สมบูรณ์');
				}
			);			
	}
		
	function set_background()
	{
			$("#control_pressing_animate").show();
			$.post("file/f_control_disppage.php",
				{				
					Vmode	: 'set_background'
				},
				function(result)
				{
					control_disppage();
					$("#control_pressing_animate").hide();
					if(result === 0)  Set_modal_text(1,'รายการไม่สมบูรณ์');
				}
			);			
	}
		
	function set_refresh()
	{
			$("#control_pressing_animate").show();
			$.post("file/f_control_disppage.php",
				{				
					Vmode	: 'set_refresh'
				},
				function(result)
				{
					control_disppage();
					$("#control_pressing_animate").hide();
					if(result === 0)  Set_modal_text(1,'รายการไม่สมบูรณ์');
				}
			);			
	}
		
	function set_syncScreen()
	{
			$("#control_pressing_animate").show();
			$.post("file/f_control_disppage.php",
				{				
					Vmode	: 'set_syncScreen'
				},
				function(result)
				{
					control_disppage();
					$("#control_pressing_animate").hide();
					if(result === 0)  Set_modal_text(1,'รายการไม่สมบูรณ์');
				}
			);			
	}

//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// 	Controll Area	//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////	

</script>