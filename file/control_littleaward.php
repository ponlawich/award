            <!---------------------------	Main control				--------------------------------------------->
            <!---------------------------	Main control				--------------------------------------------->
            <!---------------------------	Main control				--------------------------------------------->
<style style="text/css">
  	
</style>

	<div id="" style="margin:auto; margin-top: 20px; font-size: 1.2em; margin:
              padding: 10px;
              border-width: 2px;
              border-style: solid;
              border-color: #03F;" align="center"
              class="col-md-12">
                <h3 style="color:#03F;">ตารางแบ่งกลุ่มรางวัลย่อย</h3>
                <div class="row" align="right"> 
                		<!--- refresh button controll panel ----->
                    <button type="button" class="btn btn-info col-md-1 col-md-offset-1" onclick="set_control_superaward();">
                      <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                    </button>
                		<!--- toggle button control panel ----->
                    <button type="button" class="btn btn-warning col-md-1 col-md-offset-1"  data-toggle="collapse" data-target="#TgControl">
                      <span class="glyphicon glyphicon-eye-open"></span>
                    </button>
                </div>
                <div id="control_pressing_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>
                
            <div id="TgControl" class="collapse"><!---------	stoggle control	----------------->
			  </br>
				<div class="container">
					<table class="table table-hover table-condensed" id="myTable">
                        <thead>
                        	<tr>
								
                                <th>ชื่อหน่วย</th>
                                <th>พ.อ.(พ)-พ.ท.A</th>
                                <th>พ.อ.(พ)-พ.ท.B</th>
                                <th>พ.อ.(พ)-พ.ท.C</th>
                                <th>พ.ต.-ร.ต.A</th>
                                <th>พ.ต.-ร.ต.B</th>
                                <th>พ.ต.-ร.ต.C</th>
								<th>ประทวนA</th>
                                <th>ประทวนB</th>
                                <th>ประทวนC</th>
                                <th>ลบ/แก้ไข</th>
                                
                          	</tr>
                        </thead>
                        <tbody>
							<tr>
								
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
                        </tbody>
                	</table>
				</div>
                   
            	<div name="panel_controll" id="panel_controll"> <!---------  panel control button  --------------->
                </div>
                <br />   
               
          <div class="row">
				<div id="control_person_sub" name="control_person_sub" class="col-md-6 col-md-offset-3">
                        <div class = "panel panel-info">
                           <div class = "panel-heading">
                              <h2 class = "panel-title">
                               	จัดการหน่วยรับรางวัล
                              </h2>
                           </div>
							<div class = "panel-body">
								<form name="Fname_award">
									<div class="row">
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">ชื่อหน่วย</label>
										</div>
										<div class="col-md-3">
											 
											<select class="form-control" id="unit_name" name="unit_name">
												 
											</select>
										</div>
										<div class="col-md-2 col-md-offset-4">
											<button type="button" class="btn btn-warning" id="C_clear_unit" onclick="clear_unit();">ยกเลิก</button>
										</div>
									</div>
									<hr>
									<div>
										<h4>เพิ่มของรางวัลตามกลุ่ม</h4>
									</div>
									</br>
									<div class="row">
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">พ.อ.(พ)-พ.ท.A</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c1a" name="c1a">
										</div>
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">พ.อ.(พ)-พ.ท.B</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c1b" name="c1b">
										</div>
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">พ.อ.(พ)-พ.ท.C</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c1c" name="c1c">
										</div>
									</div>
									</br>
									<div class="row">
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">พ.ต.-ร.ต.A</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c2a" name="c2a">
										</div>
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">พ.ต.-ร.ต.B</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c2b" name="c2b">
										</div>
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">พ.ต.-ร.ต.C</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c2c" name="c2c">
										</div>
									</div>
									</br>
									<div class="row">
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">ประทวนA</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c3a" name="c3a">
										</div>
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">ประทวนB</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c3b" name="c3b">
										</div>
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">ประทวนC</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c3c" name="c3c">
											 <input type="hidden" class="form-control" id="id" name="id">
										</div>
									</div>
									<hr>
								</form>
								<div class="row">
									<div class="col-md-2 col-md-offset-4">
										<button type="button" class="btn btn-success" id="C_submit" onclick="C_submit();">บันทึก</button>
									</div>
									<div class="col-md-2">
										<button type="button" class="btn btn-info" id="Update_submit" onclick="Update_submit();">อัพเดต</button>
									</div>
									
								</div>
							</div>
                        </div>
							
                </div> 
				
                </div>  
				<hr>
			<div class="row">
				 <h3 style="color:#03F;">ตารางรายชื่อรางวัลย่อย</h3>
			</div>
				<div class="container">
					<table class="table table-hover table-condensed" id="myTable_last">
                        <thead>
                        	<tr>
                                <th width="5%">ลำดับ</th>
                                <th width="50%">ชื่อ</th>
								<th width="5%">กลุ่ม</th>
                                <th width="10%">สถานะ</th>
                                <th width="10%">ลบ/แก้ไข</th>
                          	</tr>
                        </thead>
                        <tbody>
							<tr id="color">
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
                        </tbody>
                	</table>
				</div>
					</br>
					
					</br>
				<div id="control_person_sub" name="control_person_sub" class="col-md-6 col-md-offset-3">
                        <div class = "panel panel-info">
                           <div class = "panel-heading">
                              <h2 class = "panel-title">
                               	จัดการรางวัลย่อย
                              </h2>
                           </div>
							<div class = "panel-body">
								<form name="Fname_award_little">
									<div class="row">
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">ชื่อรางวัล</label>
										</div>
										<div class="col-md-4">
											 <input type="text" class="form-control" id="name_gift" name="name_gift">
										</div>
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">กลุ่มรางวัล</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="type_gift" name="type_gift">
											 <input type="hidden" class="form-control" id="id_gift" name="id_gift">
										</div>
										<div class="col-md-2">
											<button type="button" class="btn btn-warning" id="C_clear_gift" onclick="clear_gift();">ยกเลิก</button>
										</div>
									</div>
									<hr>
								</form>
									<div class="row">
										<div class="col-md-2 col-md-offset-4">
											<button type="button" class="btn btn-success" id="C_submit_gift" onclick="C_submit_gift();">บันทึก</button>
										</div>
										<div class="col-md-2">
											<button type="button" class="btn btn-info" id="Update_submit_gift" onclick="Update_submit_gift();">อัพเดต</button>
										</div>
									</div>
							</div>
                        </div>
							
                </div>             
				
  			</div><!---------	stoggle control	----------------->
                
	</div>    
    
    
<script type="text/javascript">     


set_control_littleaward();
control_person_listUnitCase();	
Chk_Littlegift();
	
	function set_control_littleaward()
	{
		//alert("****");
		 $("#Update_submit").attr('disabled', true);
		 $("#C_clear_unit").attr('disabled', true);
		 $("#C_clear_gift").attr('disabled', true);
			var table = $('#myTable').DataTable();
			$("#control_pressing_animate").show();
				$.ajax({
					url: "file/f_control_littleaward.php",
					type: "post",
					data: "Vmode=readData" ,
					beforSend:function(){},
					success: function (data) {
							if (data[0].result === "true") 
							{
								var table_source = [];
								$("#myTable > tbody").empty();
								for (var i = 1; i < data.length; i++) 
								{
									var col = {};
									
									col[0] = data[i]["unit"];
									col[1] = data[i]["c1a"];
									col[2] = data[i]["c1b"];
									col[3] = data[i]["c1c"];
									col[4] = data[i]["c2a"];
									col[5] = data[i]["c2b"];
									col[6] = data[i]["c2c"];
									col[7] = data[i]["c3a"];
									col[8] = data[i]["c3b"];
									col[9] = data[i]["c3c"];
									col[10] = '<button class="btn btn-info" onclick="Read_update_little_award('+data[i]["id"]+');" ><span class="glyphicon glyphicon-pencil">แก้ไข</span></button>'
											  +'<button class="btn btn-danger" onclick="delete_little_award('+data[i]["id"]+');" ><span class="glyphicon glyphicon-trash">ลบ</span></button>';
									//if(data[i]["status"] === '1')	$("#picShowPre").attr("src","imageuse\\award\\"+data[i]["fname"]+"."+data[i]["ftype"]);
									 var arr = [col[0],col[1],col[2],col[3],col[4],col[5],col[6],col[7],col[8],col[9],col[10]];
									 table_source.push(arr);
								}
								table.clear();
								table.rows.add(table_source).draw();
								$("#control_pressing_animate").hide();
								//$('#frmchkper_person').show();
							} 
							//$("#control_pressing_animate").hide();
					},
					error: function (xhr, status, error) {
						Set_modal_text(1,"Error : Get control_upaward desc!");
						$("#control_pressing_animate").hide();
					}
				});
	}

	function control_person_listUnitCase()
	{
		$("#control_pressing_animate").show();
		$('#unit_name').html('');
			$.ajax({
				url: "file/f_list.php",
				type: "post",
				data: "Vmode=readUnitCase",
				beforSend:function(){},
				success: function (data) {
					if (data[0].result === "true") 
					{
						for (var i = 1; i < data.length; i++) 
						{
							$('#unit_name').append($('<option/>', { 
								value: data[i]["unit_case"],
								text : data[i]["unit_case"] 
							}));
						}
					} 
					$("#control_pressing_animate").hide();
				},
				error: function (xhr, status, error) {
					Set_modal(1,"Error : List Unit");
				}
			});		
	}
	
	function C_submit()
		{
			
			var form = $("form[name='Fname_award']").serialize();
			//alert(form);
			$.ajax({
				url:"file/f_control_littleaward.php",
				type:"post",
				data:form+"&Vmode=addData",
				success:function(data){
						//console.log(data);
					set_control_littleaward();
					$("#unit_name").val('');
					$("#c1a").val('');
					$("#c1b").val('');
					$("#c1c").val('');
					$("#c2a").val('');
					$("#c2b").val('');
					$("#c2c").val('');
					$("#c3a").val('');
					$("#c3b").val('');
					$("#c3c").val('');
					
				},
			});
		}
	
	function delete_little_award(id)
		{
			var form = $("form[name='Fname_award']").serialize();
			form += '&id='+id;
			//alert(id);
			$.ajax({
				url:"file/f_control_littleaward.php",
				type:"post",
				data:form+"&Vmode=deleteData",
				success:function(data){
						//console.log(data);
					set_control_littleaward();
					
				},
			});
		}
		
	function clear_unit()
		{
			//alert('clear');
		$("#C_submit").attr('disabled', false);
		$("#Update_submit").attr('disabled', true);
		$("#C_clear_unit").attr('disabled', true);
			$("#unit_name").val('');
			$("#c1a").val('');
			$("#c1b").val('');
			$("#c1c").val('');
			$("#c2a").val('');
			$("#c2b").val('');
			$("#c2c").val('');
			$("#c3a").val('');
			$("#c3b").val('');
			$("#c3c").val('');
			$("#id").val('');
		}
		
	function clear_gift()
		{
			//alert('clear');
			$("#C_submit_gift").attr('disabled', false);
			$("#Update_submit_gift").attr('disabled', true);
			$("#C_clear_gift").attr('disabled', true);
			$("#name_gift").val('');
			$("#type_gift").val('');
			$("#id_gift").val('');
		}
		
	function Read_update_little_award(id)
		{
			$("#C_clear_unit").attr('disabled', false);
			var form = $("form[name='Fname_award']").serialize();
			form += '&id='+id;
			//alert(id);
			
			$.ajax({
				url:"file/f_control_littleaward.php",
				type:"post",
				data:form+"&Vmode=ReadUpdateData",
				success:function(data){
						console.log(data);
					//set_control_littleaward();
				 $("#Update_submit").attr('disabled', false);
				 $("#C_submit").attr('disabled', true);
					$("#unit_name").val(data[1]["unit"]);
					$("#c1a").val(data[1]["c1a"]);
					$("#c1b").val(data[1]["c1b"]);
					$("#c1c").val(data[1]["c1c"]);
					$("#c2a").val(data[1]["c2a"]);
					$("#c2b").val(data[1]["c2b"]);
					$("#c2c").val(data[1]["c2c"]);
					$("#c3a").val(data[1]["c3a"]);
					$("#c3b").val(data[1]["c3b"]);
					$("#c3c").val(data[1]["c3c"]);
					$("#id").val(data[1]["id"]);
				},
			});
		}
	
	function Update_submit()
		{
			var form = $("form[name='Fname_award']").serialize();
			
			//alert(form);
			$.ajax({
				url:"file/f_control_littleaward.php",
				type:"post",
				data:form+"&Vmode=UpdateData",
				success:function(data){
						//console.log(data);
					set_control_littleaward();
					$("#C_submit").attr('disabled', false);
					$("#unit_name").val('');
					$("#c1a").val('');
					$("#c1b").val('');
					$("#c1c").val('');
					$("#c2a").val('');
					$("#c2b").val('');
					$("#c2c").val('');
					$("#c3a").val('');
					$("#c3b").val('');
					$("#c3c").val('');
					$("#id").val('');
				},
			});
		}
	
	set_control_littleaward_last();	
	
	function set_control_littleaward_last()
	{
		$("#Update_submit_gift").attr('disabled', true);
			var table = $('#myTable_last').DataTable();
			$("#control_pressing_animate").show();
				$.ajax({
					url: "file/f_control_littleaward.php",
					type: "post",
					data: "Vmode=readData_gift" ,
					beforSend:function(){},
					success: function (data) {
							if (data[0].result === "true") 
							{
								var table_source = [];
								$("#myTable_last > tbody").empty();
								for (var i = 1; i < data.length; i++) 
								{
									var col = {};
									
									col[0] = i;
									col[1] = data[i]["name"];
									col[2] = data[i]["type"];
									col[3] = data[i]["status"];
									col[4] = '<button class="btn btn-info col-md-3" onclick="Gift_update_little_award('+data[i]["id"]+');" ><span class="glyphicon glyphicon-pencil">แก้ไข</span></button>'
											  +'<button class="btn btn-danger col-md-3" onclick="Gift_delete_little_award('+data[i]["id"]+');" ><span class="glyphicon glyphicon-trash">ลบ</span></button>';
									
									//if(data[i]["status"] === '1')	$("#picShowPre").attr("src","imageuse\\award\\"+data[i]["fname"]+"."+data[i]["ftype"]);
									 var arr = [col[0],col[1],col[2],col[3],col[4]];
									 table_source.push(arr);
								}
								table.clear();
								table.rows.add(table_source).draw();
								$("#control_pressing_animate").hide();
								//$('#frmchkper_person').show();
							} 
							//$("#control_pressing_animate").hide();
					},
					error: function (xhr, status, error) {
						Set_modal_text(1,"Error : Get control_upaward desc!");
						$("#control_pressing_animate").hide();
					}
				});
	}
	
	
	function C_submit_gift()
		{
			var form = $("form[name='Fname_award_little']").serialize();
			
			//alert(form);
			$.ajax({
				url:"file/f_control_littleaward.php",
				type:"post",
				data:form+"&Vmode=AddData_gift",
				success:function(data){
						console.log(data);
					set_control_littleaward_last();
					$("#name_gift").val('');
					$("#type_gift").val('');					
				},
			});
		}
	
	function Gift_delete_little_award(id)
		{
			var form = $("form[name='Fname_award_little']").serialize();
			form += '&id='+id;
			//alert(id);
			$.ajax({
				url:"file/f_control_littleaward.php",
				type:"post",
				data:form+"&Vmode=Gift_deleteData",
				success:function(data){
						//console.log(data);
					set_control_littleaward_last();
					
				},
			});
		}
		
	function Gift_update_little_award(id)
		{
			var form = $("form[name='Fname_award_little']").serialize();
			form += '&id='+id;
			//alert(id);
			$.ajax({
				url:"file/f_control_littleaward.php",
				type:"post",
				data:form+"&Vmode=Gift_ReadUpdateData",
				success:function(data){
						console.log(data);
				$("#Update_submit_gift").attr('disabled', false);
				$("#C_submit_gift").attr('disabled', true);				
				$("#C_clear_gift").attr('disabled', false);				
					$("#name_gift").val(data[1]['name']);
					$("#type_gift").val(data[1]['type']);
					$("#id_gift").val(data[1]['id']);
				
					
				},
			});
		}
	
	function Update_submit_gift()
		{
			var form = $("form[name='Fname_award_little']").serialize();
			
			//alert(form);
			$.ajax({
				url:"file/f_control_littleaward.php",
				type:"post",
				data:form+"&Vmode=Gift_UpdateData",
				success:function(data){
						//console.log(data);
						set_control_littleaward_last();
				$("#Update_submit_gift").attr('disabled', true);
				$("#C_submit_gift").attr('disabled', false);				
					$("#name_gift").val('');
					$("#type_gift").val('');
					$("#id_gift").val('');
				},
			});
		}
		
		
	function Chk_Littlegift()
		{
			
			//alert('form');
			$.ajax({
				url:"file/f_control_littleaward.php",
				type:"post",
				data:"&Vmode=Chk_Gift_Data",
				success:function(data){
					console.log(data);
					var chk = data;
					var res = chk.split(":");
					
					//alert(res[2]);
					var A = res[1];
					var B = res[2];
					var C = res[3];
					
					if(A == 0 && B == 0 && C == 0)
					{
						Set_modal_text(2,"กลุ่มรางวัลถูกต้อง");
					}
					else
					{
						Set_modal_text(1,"กลุ่มรางวัลไม่ถูกต้อง กรุณาตรวจสอบ");
					}
					//Set_modal_text(1,A+" "+B+" "+C);
					
				},
			});
		}
</script>