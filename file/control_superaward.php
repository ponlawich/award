            <!---------------------------	Main control				--------------------------------------------->
            <!---------------------------	Main control				--------------------------------------------->
            <!---------------------------	Main control				--------------------------------------------->
<style style="text/css">
  	.hoverTable{
		/*width:100%; 
		border-collapse:collapse; */
	}
	.hoverTable td{ 
		/*padding:7px; border:#4e95f4 1px solid;*/
	}
	/* Define the default color for all the table rows */
	.hoverTable tr{
		/*background: #b8d1f3;*/
	}
	/* Define the hover highlight color for the table row */
    .hoverTable tr:hover {
          background-color: #ffff99;
    }
    .hoverTable tr:clickable {
          background-color: #AA4499;
    }
</style>

	<div id="re" style="margin:auto; margin-top: 20px; font-size: 1.2em; margin:
              padding: 10px;
              border-width: 2px;
              border-style: solid;
              border-color: #03F;" align="center"
              class="col-md-12">
                <h3 style="color:#03F;">ลำดับการจับรางวัล</h3>
				<form>	
					 <input type="text" class="form-control" id="numbersuper" name="numbersuper">
					 <button type="button" class="btn btn-success" id="C_sendnumber_super" onclick="S_number();">ส่ง</button>
					 
				</form>
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
                                <th width="20%">&nbsp;</th>
								<th width="5%">ลำดับ</th>
                                <th width="75%">ชื่อรางวัล</th>
                                <th width="75%">แก้ไข/ลบ</th>
                          	</tr>
                        </thead>
                        <tbody>
							<tr id="color">
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
                        </tbody>
                	</table>
				</div>
                    </br>  
						<div class="row">
							<div class="col-md-2 col-md-offset-4">	
								<button type="button" id="b_swap1" class="btn btn-success" onClick="SendChk()">สลับ</button>   
							</div>
							<div class="col-md-2 col-md-offset-0">	
								<button type="button" id="b_swap2" class="btn btn-success" onClick="insert()">แทรก</button>   
							</div>
						</div>
					</br>
					</br>
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
							<form name="Fname_award_Super">
								<div class="row">
									<div class="col-md-2 text-right">
										<label style="font-size:20px;">ชื่อรางวัล</label>
									</div>
									<div class="col-md-4">
										 <input type="text" class="form-control" id="name_gift_super" name="name_gift_super">
									</div>
									<div class="col-md-1 text-right">
										<label style="font-size:20px;">ลำดับ</label>
									</div>
									<div class="col-md-2">
										 <input type="text" class="form-control" id="seq_gift_super" name="seq_gift_super">
										 <input type="hidden" class="form-control" id="number_gift_super" name="number_gift_super">
									</div>
									<div class="col-md-2">
										<button type="button" class="btn btn-warning" id="C_clear_super1" onclick="C_clear_super();">ยกเลิก</button>
									</div>
								</div>
								<!--<div class="row">
									<div class="col-md-2 text-right">
										<label style="font-size:20px;">เพิ่มโควต้าหน่วย</label>
									</div>
									<div class="col-md-3">
										 
										<select class="form-control" id="Quota_unit_name" name="Quota_unit_name">
											 
										</select>
									</div>
								</div>-->
								<hr>
							</form>
								<div class="row">
									<div class="col-md-2 col-md-offset-4">
										<button type="button" class="btn btn-success" id="C_submit_super" onclick="C_submit_super();">บันทึก</button>
									</div>
									<div class="col-md-2">
										<button type="button" class="btn btn-info" id="Update_submit_super" onclick="Update_submit_gift();">อัพเดต</button>
									</div>
								</div>
						</div>
					</div>
                </div>    	
					
            	<div name="panel_controll" id="panel_controll"> <!---------  panel control button  --------------->
                </div>
                <br />   
                
                
         
                
  			</div><!---------	stoggle control	----------------->
                
	</div>    
    
    
<script type="text/javascript">     
		
		var V1 = 0;
		var	V2 = 0;
		
control_person_listUnitCase();	
set_control_superaward();	

	
	function set_control_superaward()
	{
		//alert("****");
	 $("#Update_submit_super").attr('disabled', true);
	 $("#C_clear_super1").attr('disabled', true);
	 
		 $("#b_swap").attr('disabled', true);
		 
			var table = $('#myTable').DataTable();
			$("#control_pressing_animate").show();
				$.ajax({
					url: "file/f_control_superaward.php",
					type: "post",
					data: "Vmode=readData" ,
					beforSend:function(){},
					success: function (data) {
						//console.log(data);
							if (data[0].result === "true") 
							{
								var table_source = [];
								$("#myTable > tbody").empty();
								for (var i = 1; i < data.length; i++) 
								{
									
									var col = {};
									col[0] = "<input type='checkbox' name='seq[]' onclick='CkPress("+data[i]["seq"]+");' class='seq' value='"+data[i]["seq"]+"' >"
									if(data[i]["status"] === '1')
									{
										col[1] = "<font color='red'>"+data[i]["seq"]+"</font>";
										col[2] = "<font color='red'>"+data[i]["name"]+"</font>";
									}
									else
									{
										col[1] = "<font color='green'>"+data[i]["seq"]+"</font>";
										col[2] = "<font color='green'>"+data[i]["name"]+"</font>";
									}
									col[3] = '<button class="btn btn-info col-md-3" onclick="Read_update_super_award('+data[i]["number"]+');" ><span class="glyphicon glyphicon-pencil">แก้ไข</span></button>'
											  +'<button class="btn btn-danger col-md-2" onclick="delete_super_award('+data[i]["number"]+');" ><span class="glyphicon glyphicon-trash">ลบ</span></button>';
									//if(data[i]["status"] === '1')	$("#picShowPre").attr("src","imageuse\\award\\"+data[i]["fname"]+"."+data[i]["ftype"]);
									
									 var arr = [col[0],col[1],col[2],col[3]];
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

	function insert()
	{
		//var gar = $('.seq:checkbox').serialize();
			//alert(V1);
			
			$.ajax({
				url:"file/f_insert.php",
				type:"post",
				data: 'V1='+V1+'&V2='+V2+"&Vmode=insert",
				success:function(data){
					//console.log(data);
					set_control_superaward();	
					
					V1 = 0;
					V2 = 0;
				}
			});
	}
	
	function S_number()
	{
		var numbersuper = document.getElementById("numbersuper").value;
			alert(numbersuper);
			
			/*$.ajax({
				url:"file/f_insert.php",
				type:"post",
				data: 'V1='+V1+'&V2='+V2+"&Vmode=insert",
				success:function(data){
					console.log(data);
				}
			});*/
	}
	
	
	function SendChk()
	{
		//var gar = $('.seq:checkbox').serialize();
			//alert(gar);
			$.ajax({
				url:"file/f_insert.php",
				type:"post",
				data: 'V1='+V1+'&V2='+V2+"&Vmode=swap",
				success:function(data){
					console.log(data);
					
					set_control_superaward();	
				}
			});
	}
	
	function CkPress(Vin)
	{
		// $("#b_swap").attr('disabled', true);
		//alert($('[name="seq[]"]:checked').length);
		if($('[name="seq[]"]:checked').length == 3)
		{
			V1 = 0;
			V2 = 0;
			$('[name="seq[]"]:checked').prop('checked',false);
			return false;
		}
		if (V1 === 0)		V1 = Vin;
		else if(V1 != 0)	V2 = Vin;
		
		//alert('V1 = '+V1+'||V2 = '+V2);
	
		if($('[name="seq[]"]:checked').length == 3)
		{
			$('[name="seq[]"]:checked').prop('checked',false);
		}
		
		if($('[name="seq[]"]:checked').length == 2)
		{
			$("#b_swap1").attr('disabled', false);
			$("#b_swap2").attr('disabled', false);
		}else{
			$("#b_swap1").attr('disabled', true);
			$("#b_swap2").attr('disabled', true);
		}
	
	}
	
	function C_submit_super()
		{
			var form = $("form[name='Fname_award_Super']").serialize();
			
			alert(form);
			$.ajax({
				url:"file/f_control_superaward.php",
				type:"post",
				data:form+"&Vmode=AddData_super",
				success:function(data){
						console.log(data);
					set_control_superaward();
					$("#name_gift_super").val('');
					$("#seq_gift_super").val('');					
				},
			});
		}
	
	function control_person_listUnitCase()
	{
		$("#control_pressing_animate").show();
		$('#Quota_unit_name').html('');
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
							$('#Quota_unit_name').append($('<option/>', { 
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
	
	function Read_update_super_award(number)
		{
			$("#Update_submit_super").attr('disabled', false);
			$("#C_clear_super1").attr('disabled', false);
			$("#C_submit_super").attr('disabled', true);
			var form = $("form[name='Fname_award_Super']").serialize();
			form += '&number='+number;
			//alert(number);
			
			$.ajax({
				url:"file/f_control_superaward.php",
				type:"post",
				data:form+"&Vmode=ReadUpdateDataSuper",
				success:function(data){
						console.log(data);
					//set_control_littleaward();
				$("#name_gift_super").val(data[1]["name"]);
				$("#seq_gift_super").val(data[1]["seq"]);
				$("#number_gift_super").val(data[1]["number"]);
				},
			});
		}
		
	function Update_submit_gift()
		{
			var form = $("form[name='Fname_award_Super']").serialize();
			
			//alert(form);
			$.ajax({
				url:"file/f_control_superaward.php",
				type:"post",
				data:form+"&Vmode=Gift_UpdateDataSuper",
				success:function(data){
						//console.log(data);
					$("#Update_submit_super").attr('disabled', true);
					$("#C_clear_super1").attr('disabled', true);
					$("#C_submit_super").attr('disabled', false);
						set_control_superaward();
					$("#name_gift_super").val('');
					$("#seq_gift_super").val('');
					$("#number_gift_super").val('');
				},
			});
		}
		
	function delete_super_award(number)
		{
			var form = $("form[name='Fname_award_Super']").serialize();
			form += '&number='+number;
			alert(number);
			$.ajax({
				url:"file/f_control_superaward.php",
				type:"post",
				data:form+"&Vmode=Super_deleteData",
				success:function(data){
						//console.log(data);
					set_control_superaward();
					
				},
			});
		}
		
	function C_clear_super()
		{
			//alert('clear');
			$("#C_submit_super").attr('disabled', false);
			$("#Update_submit_super").attr('disabled', true);
			$("#C_clear_super1").attr('disabled', true);
					$("#name_gift_super").val('');
					$("#seq_gift_super").val('');
					$("#number_gift_super").val('');
		}
</script>