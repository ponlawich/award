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
                <h3 style="color:#03F;">ตารางแบ่งกลุ่มรางวัลตามที่เลือก</h3>
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
								
                                <th>ครั้งที่</th>
                                <th>A</th>
                                <th>B</th>
                                <th>C</th>
                                <th>D</th>
                                <th>E</th>
                                <th>F</th>
								<th>G</th>
                                <th>H</th>
                                <th>I</th>
                                <th>J</th>
                                <th>K</th>
                                <th>L</th>
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
                               	จัดการโควต้ารางวัลที่เลือกเอง
                              </h2>
                           </div>
							<div class = "panel-body">
								<form name="Fname_award">
									<div class="row">
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">ชื่อ</label>
										</div>
										<div class="col-md-3">
											<input type="text" class="form-control" id="unit_name" name="unit_name">
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
											<label style="font-size:20px;">A</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c1a" name="c1a" value="0">
										</div>
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">B</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c1b" name="c1b" value="0">
										</div>
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">C</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c1c" name="c1c" value="0">
										</div>
									</div>
									</br>
									<div class="row">
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">D</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c2a" name="c2a" value="0">
										</div>
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">E</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c2b" name="c2b" value="0">
										</div>
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">F</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c2c" name="c2c" value="0">
										</div>
									</div>
									</br>
									<div class="row">
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">G</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c3a" name="c3a" value="0">
										</div>
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">H</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c3b" name="c3b" value="0">
										</div>
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">I</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c3c" name="c3c" value="0">
											 <input type="text" class="form-control" id="id" name="id" value="0">
										</div>
									</div>
									</br>
									<div class="row">
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">J</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c4a" name="c4a" value="0">
										</div>
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">K</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c4b" name="c4b" value="0">
										</div>
										<div class="col-md-2 text-right">
											<label style="font-size:20px;">L</label>
										</div>
										<div class="col-md-2">
											 <input type="text" class="form-control" id="c4c" name="c4c" value="0">
										</div>
									</div>
									</br>
									
									<hr>
								</form>
								<div class="row">
									<div class="col-md-2 col-md-offset-4">
										<button type="button" class="btn btn-success" id="C_submit" onclick="pick_submit();">บันทึก</button>
									</div>
									<div class="col-md-2">
										<button type="button" class="btn btn-info" id="Update_submit" onclick="Update_pick();">อัพเดต</button>
									</div>
									
								</div>
							</div>
                        </div>
							
                </div> 
				
                </div>  
				<hr>
			<div class="row">
				 <h3 style="color:#03F;">ตารางรายชื่อผู้ที่ได้รับรางวัล</h3>
			</div>
				<div class="container">
					<table class="table table-hover table-condensed" id="myTable_last">
                        <thead>
                        	<tr>
                                <th>ลำดับ</th>
                                <th>ชื่อรางวัล</th>
								<th>กลุ่ม</th>
                                <th>สถานะ</th>
                                <th>ผู้ได้รับรางวัล</th>
                                <th>ลบ/แก้ไข</th>
                          	</tr>
                        </thead>
                        <tbody>
							<tr id="color">
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
											<button type="button" class="btn btn-warning" id="C_clear_gift" onclick="clear_pickunit();">ยกเลิก</button>
										</div>
									</div>
									<hr>
								</form>
									<div class="row">
										<div class="col-md-2 col-md-offset-4">
											<button type="button" class="btn btn-success" id="C_submit_gift" onclick="C_submit_gift();">บันทึก</button>
										</div>
										<div class="col-md-2">
											<button type="button" class="btn btn-info" id="Update_submit_gift" onclick="Update_pick_gift();">อัพเดต</button>
										</div>
									</div>
							</div>
                        </div>
							
                </div>             
				
  			</div><!---------	stoggle control	----------------->
                
	</div>    
    
    
<script type="text/javascript">     


set_control_littleaward();
//control_person_listUnitCase();	
//Chk_Littlegift();
	
	function set_control_littleaward()
	{
		//alert("****");
		 $("#Update_submit").attr('disabled', true);
		 $("#C_clear_unit").attr('disabled', true);
		 $("#C_clear_gift").attr('disabled', true);
			var table = $('#myTable').DataTable();
			$("#control_pressing_animate").show();
				$.ajax({
					url: "file/f_control_pick_award.php",
					type: "post",
					data: "Vmode=readData" ,
					beforSend:function(){},
					success: function (data) {
						console.log(data);
							if (data[0].result === "true") 
							{
								var table_source = [];
								$("#myTable > tbody").empty();
								for (var i = 1; i < data.length; i++) 
								{
									var col = {};
									
									col[0] = data[i]["unit"];
									col[1] = data[i]["a"];
									col[2] = data[i]["b"];
									col[3] = data[i]["c"];
									col[4] = data[i]["d"];
									col[5] = data[i]["e"];
									col[6] = data[i]["f"];
									col[7] = data[i]["g"];
									col[8] = data[i]["h"];
									col[9] = data[i]["i"];
									col[10] = data[i]["j"];
									col[11] = data[i]["k"];
									col[12] = data[i]["l"];
									col[13] = '<button class="btn btn-info" onclick="Read_update_pick_award('+data[i]["Id"]+');" ><span class="glyphicon glyphicon-pencil">แก้ไข</span></button>'
											  +'<button class="btn btn-danger" onclick="delete_pick_award('+data[i]["Id"]+');" ><span class="glyphicon glyphicon-trash">ลบ</span></button>';
									//if(data[i]["status"] === '1')	$("#picShowPre").attr("src","imageuse\\award\\"+data[i]["fname"]+"."+data[i]["ftype"]);
									 var arr = [col[0],col[1],col[2],col[3],col[4],col[5],col[6],col[7],col[8],col[9],col[10],col[11],col[12],col[13]];
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
/*
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
	*/
	function pick_submit()
		{
			
			var form = $("form[name='Fname_award']").serialize();
			//alert(form);
			$.ajax({
				url:"file/f_control_pickaward.php",
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
					$("#c4a").val('');
					$("#c4b").val('');
					$("#c4c").val('');
				},
			});
		}
	
	function delete_pick_award(id)
		{
			var form = $("form[name='Fname_award']").serialize();
			form += '&id='+id;
			//alert(id);
			$.ajax({
				url:"file/f_control_pickaward.php",
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
			$("#c4a").val('');
			$("#c4b").val('');
			$("#c4c").val('');
			$("#id").val('');
		}
	/*	
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
	*/	
	function Read_update_pick_award(id)
		{
			$("#C_clear_unit").attr('disabled', false);
			var form = $("form[name='Fname_award']").serialize();
			form += '&id='+id;
			//alert(id);
			
			$.ajax({
				url:"file/f_control_pickaward.php",
				type:"post",
				data:form+"&Vmode=ReadUpdateData",
				success:function(data){
						console.log(data);
					//set_control_littleaward();
				 $("#Update_submit").attr('disabled', false);
				 $("#C_submit").attr('disabled', true);
					$("#unit_name").val(data[1]["unit"]);
					$("#c1a").val(data[1]["a"]);
					$("#c1b").val(data[1]["b"]);
					$("#c1c").val(data[1]["c"]);
					$("#c2a").val(data[1]["d"]);
					$("#c2b").val(data[1]["e"]);
					$("#c2c").val(data[1]["f"]);
					$("#c3a").val(data[1]["g"]);
					$("#c3b").val(data[1]["h"]);
					$("#c3c").val(data[1]["i"]);
					$("#c4a").val(data[1]["j"]);
					$("#c4b").val(data[1]["k"]);
					$("#c4c").val(data[1]["l"]);
					$("#id").val(data[1]["Id"]);
				},
			});
		}
	
	function Update_pick()
		{
			var form = $("form[name='Fname_award']").serialize();
			
			//alert(form);
			$.ajax({
				url:"file/f_control_pickaward.php",
				type:"post",
				data:form+"&Vmode=UpdateData",
				success:function(data){
						console.log(data);
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
					$("#c4a").val('');
					$("#c4b").val('');
					$("#c4c").val('');
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
					url: "file/f_control_pickaward.php",
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
									col[4] = data[i]["pname"];
									col[5] = '<button class="btn btn-info col-md-3" onclick="Gift_update_pick_award('+data[i]["Id"]+');" ><span class="glyphicon glyphicon-pencil">แก้ไข</span></button>'
											  +'<button class="btn btn-danger col-md-3" onclick="C_Gift_delete_pick_award('+data[i]["Id"]+');" ><span class="glyphicon glyphicon-trash">ลบ</span></button>'
											  +'<button class="btn btn-warning col-md-3" onclick="Gift_cancle_pick_award('+data[i]["Id"]+');" ><span class="glyphicon glyphicon-trash">ยกเลิก</span></button>';
									
									//if(data[i]["status"] === '1')	$("#picShowPre").attr("src","imageuse\\award\\"+data[i]["fname"]+"."+data[i]["ftype"]);
									 var arr = [col[0],col[1],col[2],col[3],col[4],col[5]];
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
				url:"file/f_control_pickaward.php",
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
	
	function C_Gift_delete_pick_award(id)
		{
			var form = $("form[name='Fname_award_little']").serialize();
			form += '&id='+id;
			//alert(id);
			$.ajax({
				url:"file/f_control_pickaward.php",
				type:"post",
				data:form+"&Vmode=Gift_deleteData",
				success:function(data){
						//console.log(data);
					set_control_littleaward_last();
					
				},
			});
		}
		
	function Gift_cancle_pick_award(id)
		{
			var form = $("form[name='Fname_award_little']").serialize();
			form += '&id='+id;
			alert(id);
			$.ajax({
				url:"file/f_control_pickaward.php",
				type:"post",
				data:form+"&Vmode=cancle_pick_award",
				success:function(data){
						//console.log(data);
					set_control_littleaward_last();
					
				},
			});
		}
		
	function Gift_update_pick_award(id)
		{
			var form = $("form[name='Fname_award_little']").serialize();
			form += '&id='+id;
			//alert(id);
			$.ajax({
				url:"file/f_control_pickaward.php",
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
	
	function Update_pick_gift()
		{
			var form = $("form[name='Fname_award_little']").serialize();
			
			//alert(form);
			$.ajax({
				url:"file/f_control_pickaward.php",
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
		
	/*	
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
		}*/
</script>