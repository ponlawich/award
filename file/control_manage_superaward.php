            <!---------------------------	Main control				--------------------------------------------->
            <!---------------------------	Main control				--------------------------------------------->
            <!---------------------------	Main control				--------------------------------------------->
            
	<div id="" style="margin-top: 20px; font-size: 1.2em; 
    		  padding: 10px;
              border-width: 2px;
              border-style: solid;
              border-color: #03F;"
              class="col-md-12 col-md-offset-0">
                <h3 style="color:#03F;" align="center">Person Total...</h3>
                <div class="row" align="right"> 
                		<!--- toggle button control panel ----->
                    <button type="button" class="btn btn-warning col-md-2 col-md-offset-1"  data-toggle="collapse" data-target="#control_manage_superaward_toggle">
                      <span class="glyphicon glyphicon-eye-open"></span> แสดงข้อมูล
                    </button>
                </div>
                <br />
                <div id="control_manage_superaward_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>
                
			<div id="control_manage_superaward_toggle" class="collapse"><!---------	stoggle control	----------------->






            <!---------------------------	Monitor 2				--------------------------------------------->   
            <!---------------------------	Monitor 2				--------------------------------------------->   
            <!---------------------------	Monitor 2				--------------------------------------------->        
            <div id="" style="margin:auto; margin-top: 20px; font-size: 1.2em;
              padding: 10px;
              border-width: 2px;
              border-style: solid;
              border-color: #609;" align="center"
              class="col-md-6">
                <h3 style="color:#03F;">Monitor 1...</h3>
                <div class="row">
                	<div class="col-md-2" style="color:#F00">ใช้งาน ==></div>
                    <div id="control_manage_superaward_gUse" class="col-md-2" style="color:#F00"></div>
                	<div class="col-md-2 col-md-offset-1" style="color:#0F0">เหลือ ==></div>
                    <div id="control_manage_superaward_gFree" class="col-md-2" style="color:#0F0"></div>
                </div>
                <div class="row" align="right"> 
                		<!--- refresh button monitor 2 panel ----->
                    <button type="button" class="btn btn-info col-md-1 col-md-offset-1" onclick="set_control_manage_superaward_table();">
                      <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                    </button>
                		<!--- toggle button monitor 2 panel ----->
                    <button type="button" class="btn btn-warning col-md-1 col-md-offset-1"  data-toggle="collapse" data-target="#set_control_manage_superaward_monitor2">
                      <span class="glyphicon glyphicon-eye-open"></span>
                    </button>
                </div>
                <div id="control_manage_superaward_pressing_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>
                
                <div id="set_control_manage_superaward_monitor2" class="collapse"><!--- toggle monitor 2 panel ----->
                <table class="table table-striped table-dark" id="control_manage_superaward_table">
                	<thead class="thead-light">
                	<tr>
                    	<td align="center">ID</td>
                    	<td align="center">Name</td>
                    	<td align="center" width="300px;">Person</td>
						<td align="center">PID</td>
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
                        	<div class="col-md-3">
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
                        </div>
                    	<div class="row">
                        	<div class="col-md-2 col-md-offset-4">
                            	<button type="button" id="button_gift_setper" class="btn btn-warning" style=" font-size:20px;" onclick="edit_gift_setVal('set_perGift');">
                                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Lock
                                </button>
                            </div>
                        </div>
                        <br />
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
                            	<button type="button" class="btn btn-danger" aria-label="Left Align" style=" font-size:20px;" onclick="cancel_person();" id="btt_purg">
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
            <!---------------------------	Monitor 2	FINISH			--------------------------------------------->   
            <!---------------------------	Monitor 2	FINISH			--------------------------------------------->  
            <!---------------------------	Monitor 2	FINISH			--------------------------------------------->      
            
 
 <!--#################################################################################################################################-->
           
                  
			 </div><!---------	stoggle control	----------------->
             </div>
 <!--#################################################################################################################################-->               
	  </div>    
    
    
<script type="text/javascript">     
	var Vconf 	= 0;
	var Vdel	= 0;
	
	var giftUse		= 0;
	var giftFree	= 0;
	var qouUse		= 0;
	var qouFree		= 0;
	
//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// 	Monitor 2 Area	//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////	
	set_control_manage_superaward_table();
	set_control_manage_superaward_quatar();
	control_person_listRank();
	
	function set_control_manage_superaward_table()
	{
		
		/*
							if(data[i]["status"] === '1') col[0] = "<label style='color:red; font-size : 30px;'><input type='checkbox' id='b_gift' class='b_gift largerCheckbox' onclick='set_gift_stat("+data[i]["number"]+");'> "+data[i]["number"]+" "+data[i]["name"]+" ( "+data[i]["unit_case"]+" )</lable>";
							else						  col[0] = "<label style='color:green; font-size : 30px;'><input type='checkbox' id='b_gift' class='b_gift largerCheckbox' onclick='set_gift_stat("+data[i]["number"]+");'> "+data[i]["number"]+" "+data[i]["name"]+" ( "+data[i]["unit_case"]+" )</lable>";
							col[1] = " "+data[i]["person_name"];
							col[2] = " "+data[i]["unit_case"];
							col[3] = '<button class="btn btn-default" onclick="edit_gift(\''+data[i]["number"]+'\',\''+data[i]["name"]+'\',\''+data[i]["status"]+'\',\''+data[i]["person_name"]+'\',\''+data[i]["sid"]+'\');" ><span class="glyphicon glyphicon-pencil"></span></button>';
		*/
		var table = $('#control_manage_superaward_table').DataTable();
		
		giftUse		= 0;
		giftFree	= 0;
		
		$('#p_monitor2_edit').hide();
		$("#control_manage_superaward_pressing_animate").show();
		table.clear().draw();
			$.ajax({
				url: "file/f_control_manage_superaward.php",
				type: "post",
				data: "Vmode=read_table",
				beforSend:function(){},
				success: function (data) {
					if (data[0].result === "true") 
					{
						var table_source = [];
						$("#control_manage_superaward_table > tbody").empty();
						for (var i = 1; i < data.length; i++) 
						{
							var col = {};
							if(data[i]["status"] === '1') 
							{
								col[0] = "<label style='color:red; font-size : 30px;'> "+data[i]["seq"]+"</lable>";
								col[1] = "<label style='color:red; font-size : 30px;'> "+data[i]["name"]+" ( "+data[i]["unit_case"]+" )</lable>";
								giftUse++;
							}
							else						  
							{
								col[0] = "<label style='color:green; font-size : 30px;'>"+data[i]["seq"]+"</lable>";
								col[1] = "<label style='color:green; font-size : 30px;'>"+data[i]["name"]+" ( "+data[i]["unit_case"]+" )</lable>";
								giftFree++;
							}
							
							
							col[2] = " "+data[i]["person_name"];
							col[3] = " "+data[i]["id"];
							col[4] = " "+data[i]["unit_case"];
							col[5] = '<button class="btn btn-default" onclick="edit_gift(\''+data[i]["number"]+'\',\''+data[i]["name"]+'\',\''+data[i]["status"]+'\',\''+data[i]["person_name"]+'\',\''+data[i]["sid"]+'\');" ><span class="glyphicon glyphicon-pencil"></span></button>';
							 var arr = [col[0],col[1],col[2],col[3],col[4],col[5]];
							 table_source.push(arr);
						}			
						table.rows.add(table_source).draw();
						$("#control_manage_superaward_pressing_animate").hide();
						
						$("#control_manage_superaward_gUse").html(giftUse);
						$("#control_manage_superaward_gFree").html(giftFree);
					} 
				},
				error: function (xhr, status, error) {
					Set_modal_text(1,"Error : Monitor1 table!");
					$("#control_manage_superaward_pressing_animate").hide();
				}
			});
	}
	
	function c_total_gift()
	{
		if($("#b_total_check").is(':checked'))
		{    
			$("#control_manage_superaward_table input[type=checkbox]").each(function () {
					$(this).attr("checked", true);
			});	
		}
		else
		{
			$("#control_manage_superaward_table input[type=checkbox]").each(function () {
					$(this).attr("checked", false);
			});	
		}
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
		$.post("file/f_control_manage_superaward.php",
			{				
				Vmode	: "gift_"+Vmode,
				Vpid	: $("#V_giftPersonEdit").val(),
				Gfid	: $("#V_giftIdEdit").val()				
			},
			function(result)
			{
				$("#p_monitor2_edit").hide();
				set_control_manage_superaward_table();
			}
		);
	}
	
	function cancel_person()
	{
		if(Vconf == 0)
		{
			Set_modal_text(1,"กรุณาทำการยืนยันรายการอีกครั้ง");
			Vconf++;
		}
		else
		{
			$.post("file/f_control_manage_superaward.php",
				{				
					Vmode	: "waiver",
					Vpid	: $("#V_giftPersonEdit").val(),
					Gfid	: $("#V_giftIdEdit").val()				
				},
				function(result)
				{
					$("#p_monitor2_edit").hide();
					set_control_manage_superaward_table();
					Vconf = 0;
				}
			);	
		}
	}
//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////// 	Monitor 2 Area	//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////	

	function set_control_manage_superaward_quatar()
	{
		var table = $('#control_manage_superaward_tquatar').DataTable();
		
		qouUse		= 0;
		qouFree		= 0;
		
		$("#control_manage_superaward_pressing_animate2").show();
		table.clear().draw();
			$.ajax({
				url: "file/f_control_manage_superaward.php",
				type: "post",
				data: "Vmode=read_quatar",
				beforSend:function(){},
				success: function (data) {
					if (data[0].result === "true") 
					{
						var table_source = [];
						$("#control_manage_superaward_tquatar > tbody").empty();
						for (var i = 1; i < data.length; i++) 
						{
							var col = {};
							col[0] = " "+data[i]["unit_id"];
							
							if(data[i]["status"] === '1') 
							{
								col[1] = "<label style='color:red; font-size : 30px;'>"+data[i]["name"]+"</lable>";
								col[2] = "<label style='color:red; font-size : 30px;'>Busy "+data[i]["status"]+"</lable>";
								qouUse++;
							}
							else						  
							{
								col[1] = "<label style='color:green; font-size : 30px;'>"+data[i]["name"]+"</lable>";
								col[2] = "<label style='color:green; font-size : 30px;'>Ready "+data[i]["status"]+"</lable>";
								qouFree++;
							}
							
							col[3] = " "+data[i]["free"];
							col[4] = '<button class="btn btn-default" onclick="edit_quota(\''+data[i]["unit_id"]+'\',\''+data[i]["name"]+'\',\''+data[i]["status"]+'\');" ><span class="glyphicon glyphicon-pencil"></span></button>';
							 var arr = [col[0],col[1],col[2],col[3],col[4]];
							 table_source.push(arr);
						}			
						table.rows.add(table_source).draw();
						$("#control_manage_superaward_pressing_animate2").hide();
						
						$("#control_manage_superaward_qUse").html(qouUse);
						$("#control_manage_superaward_qFree").html(qouFree);
					} 
				},
				error: function (xhr, status, error) {
					Set_modal_text(1,"Error : Monitor1 table!");
					$("#control_manage_superaward_pressing_animate2").hide();
				}
			});
	}
	
	function edit_quota(Vqid,Vqname,Vqstat)
	{
		clear_subButton();
		$("#control_manage_superaward_pressing_animate2").show();
		$("#set_control_manage_superaward_Qid").val(Vqid);
		$("#set_control_manage_superaward_Qname").val(Vqname);
		if(Vqstat==1) 	$("#manage_superaward_Qstat").val('Busy');
		if(Vqstat==0) 	$("#manage_superaward_Qstat").val('Ready');
		
		$("#set_control_manage_superaward_editQuota").show();
		$('#set_control_manage_superaward_Qname').prop('disabled', true);
		$('#manage_superaward_Qstat').prop('disabled', false);
		
		$("#control_manage_superaward_pressing_animate2").hide();
		$("#set_control_manage_superaward_Qsave").show();
		$("#set_control_manage_superaward_Qdel").show();	
	}

	function clear_subButton()
	{
		$("#set_control_manage_superaward_Qadd").hide();
		$("#set_control_manage_superaward_Qsave").hide();
		$("#set_control_manage_superaward_Qdel").hide();		
	}

	function manage_superaward_DeleteQouta()
	{
		if( $("#manage_superaward_Qstat").val()==='Busy')
		{
			Set_modal_text(1,'ไม่สามารถลบได้ เนื่องจากถูกใช้งานอยู่');
		}
		else
		{
			if( Vdel < 1)
			{
				Set_modal_text(1,'กรุณายืนยันการทำรายการอีกครั้ง');
			}
			if(Vdel > 0)
			{
				///////////////////////////////////
				$("#control_manage_superaward_pressing_animate2").show();
					$.post("file/f_control_manage_superaward.php",
						{				
							Vmode	: "delQouta",
							Qid		: $("#set_control_manage_superaward_Qid").val()		
						},
						function(result)
						{
							set_control_manage_superaward_quatar();
							$("#set_control_manage_superaward_editQuota").hide();
							Set_modal_text(2,'ลบ Qouta เรียบร้อย');
							$("#control_manage_superaward_pressing_animate2").hide();
						}
					);
				///////////////////////////////////
				Vdel = 0;
			}
			Vdel++;
		}
	}
	
	function manage_superaward_faddQouta()
	{
		////////////////////////////////////////////////////////////////////////////////////
		////////////////////////////////////////////////////////////////////////////////////
		////////////////////////////////////////////////////////////////////////////////////
		$("#control_manage_superaward_pressing_animate2").show();
			$.post("file/f_control_manage_superaward.php",
				{				
					Vmode	: "addQouta",
					Qname	: $("#set_control_manage_superaward_Qname").val()		
				},
				function(result)
				{
					set_control_manage_superaward_quatar();
					$("#set_control_manage_superaward_editQuota").hide();
					Set_modal_text(2,'เพิ่ม Qouta เรียบร้อย');
					$("#control_manage_superaward_pressing_animate2").hide();
				}
			);
	}

	function manage_superaward_AddQouta()
	{
		$("#control_manage_superaward_pressing_animate2").show();
		clear_subButton();
		$("#set_control_manage_superaward_editQuota").show();		
		
		$("#set_control_manage_superaward_Qid").val('');
		$("#set_control_manage_superaward_Qname").val('');
		$('#manage_superaward_Qstat').prop('disabled', true);
		$("#manage_superaward_Qstat").val('Ready');
		$('#set_control_manage_superaward_Qname').prop('disabled', false);
		$("#set_control_manage_superaward_Qadd").show();
		
		$("#control_manage_superaward_pressing_animate2").hide();
	}
	
	
	function control_person_listRank()
	{
		$("#control_manage_superaward_pressing_animate2").show();
		$('#set_control_manage_superaward_Qname').html('');
			$.ajax({
				url: "file/f_list.php",
				type: "post",
				data: "Vmode=readUnitCaseSuper",
				beforSend:function(){},
				success: function (data) {
					if (data[0].result === "true") 
					{
						for (var i = 1; i < data.length; i++) 
						{
							$('#set_control_manage_superaward_Qname').append($('<option/>', { 
								value: data[i]["unit_case"],
								text : data[i]["unit_case"] 
							}));
						}
					} 
					$("#control_manage_superaward_pressing_animate2").hide();
				},
				error: function (xhr, status, error) {
					Set_modal(1,"Error : List Unit");
					$("#control_manage_superaward_pressing_animate2").hide();
				}
			});		
	}

</script>