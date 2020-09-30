            <!---------------------------	Main control				--------------------------------------------->
            <!---------------------------	Main control				--------------------------------------------->
            <!---------------------------	Main control				--------------------------------------------->
            
	<div id="" style="margin-top: 20px; font-size: 1.2em; 
    		  padding: 10px;
              border-width: 2px;
              border-style: solid;
              border-color: #03F;"
              class="col-md-10 col-md-offset-1">
                <h3 style="color:#03F;" align="center">Person Total...</h3>
                <div class="row" align="right"> 
                		<!--- refresh button controll panel ----->
                    <button type="button" class="btn btn-info col-md-2 col-md-offset-1" onclick="set_control_person();">
                      <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Refresh
                    </button>
                		<!--- toggle button control panel ----->
                    <button type="button" class="btn btn-warning col-md-2 col-md-offset-1"  data-toggle="collapse" data-target="#control_person_toggle">
                      <span class="glyphicon glyphicon-eye-open"></span> แสดงข้อมูล
                    </button>
                    <button type="button" class="btn btn-warning col-md-2 col-md-offset-1"  data-toggle="collapse" data-target="#control_person_fix">
                      <span class="glyphicon glyphicon-cog"></span> ตั้งค่า
                    </button>
                </div>
                <br />
                <div id="control_person_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>
                


                        <!------------------------------------->
                        <div class="row">
						<div id="control_person_fix" name="control_person_fix" class="col-md-8 col-md-offset-2 collapse">
                        <div class = "panel panel-info">
                           <div class = "panel-heading">
                              <h3 class = "panel-title" align="center">
                               	จัดการข้อมูลกำลังพล<span class="glyphicon glyphicon-cog"></span>
                              </h3>
                           </div>
                           <div class = "panel-body">
                              
                              <div class="row">
                              		<div class="col-md-4"><label style="font-size:30px;">ล้างข้อมูลทั้งหมด</label></div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-danger" id="control_person_bclear" onclick="control_person_clearTable();">
                                            <span class="glyphicon glyphicon-trash"></span> Clear Data
                                        </button>
                                    </div>
                              </div>
                              <hr />
                              <div class="row">
                              		<div class="col-md-4"><label style="font-size:30px;">Upload CSV</label></div>
                                    <div class="col-md-4"><input type="file" id="person_csvfile" name="person_csvfile" /></div>
                              </div>
                              <div class="row">
                                    <div class="col-md-4 col-md-offset-4">
                                    	<button type="button" class="btn btn-info" id="control_person_bclear" onclick="LoadCSV();">
                                            <span class="glyphicon glyphicon-file"></span> เอกสารตัวอย่าง
                                        </button>
                                   	</div>
                              </div>
                              <br />
                              <div class="row">
                                    <div class="col-md-4 col-md-offset-3">
										<button type="button" class="btn btn-primary" onclick="UpCSVperson();" id="control_person_bupload">
                      						<span class="glyphicon glyphicon-upload"></span> Upload
                    					</button>
                                    </div>
                              </div>
                              <hr />
                           </div>
                        </div>
                        </div>
                        </div>
                        <!------------------------------------->

				<!--class="collapse"-->
              <div id="control_person_toggle" class="collapse"><!---------	stoggle control	----------------->

                
                	<table class="table table-condensed table-hover" id="Tperson_total">
                        <thead>
                        	<tr>
                                <td>&nbsp;</td>
                                <td>ID</td>
                                <td>RANK</td>
                                <td>Name</td>
                                <td>LITTLE</td>
                                <td>SUPER</td>
                                <td>SHOW</td>
                                <td>IMAGE</td>
                          	</tr>
                        </thead>
                        <tbody>
                        </tbody>
                	</table>
					<br />     
							<button type="button" class="btn btn-success col-md-2 col-md-offset-4" onclick="control_person_add();">
                      			<span class="glyphicon glyphicon-plus-sign"></span> เพิ่ม
                    		</button>
                    <br /> 
                    <br />          


						<div id="control_person_sub" name="control_person_sub" class="col-md-8 col-md-offset-2" style="display: inline;">
                        <div class = "panel panel-info">
                           <div class = "panel-heading">
                               <div class="row">       
                              		<button type="button" class="btn btn-info col-md-1 col-md-offset-8" onclick="set_control_person();">
                                  		<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                                	</button>  
                               </div>
                              <h3 class = "panel-title" align="center">
                               	ปรับปรุงข้อมูลบุคคล 
                              </h3>          
                           </div>
                           <div class = "panel-body">
                              
                              <div class="row">
                              		<div class="col-md-3">
                                    	<label style="font-size:30px;">ID</label>
                                    </div>
                                    <div class="col-md-2">
                                    	<input type="text" id="control_person_id" class="form-control" disabled="disabled"/>
                                   	</div>
                              </div>
                              <hr />
                              <div class="row">
                              		<div class="col-md-3">
                                    	<label style="font-size:30px;">RANK</label>
                                    </div>
                                    <div class="col-md-2">
                                    	<select class="form-control" id="control_person_rank">
                                        </select>
                                   	</div>
                              </div>
                              <hr />
                              <div class="row">
                              		<div class="col-md-3">
                                    	<label style="font-size:30px;">NAME</label>
                                    </div>
                                    <div class="col-md-6">
                                    	<input type="text" id="control_person_name" class="form-control"/>
                                   	</div>
                              </div>
                              <hr />
                              <div class="row">
                              		<div class="col-md-3">
                                    	<label style="font-size:30px;">UNIT_LITTLE</label>
                                    </div>
                                    <div class="col-md-3">
                                    	<select class="form-control" id="control_person_unitCase">
                                        </select>
                                   	</div>
                              </div>
                              <hr />
                              <div class="row">
                              		<div class="col-md-3">
                                    	<label style="font-size:30px;">UNIT_SUPER</label>
                                    </div>
                                    <div class="col-md-3">
                                    	<select class="form-control" id="control_person_unitCaseSuper">
                                        </select>
                                   	</div>
                              </div>
                              <hr />
                              <div class="row">
                              		<div class="col-md-3">
                                    	<label style="font-size:30px;">UNIT_SHOW</label>
                                    </div>
                                    <div class="col-md-3">
                                    	<select class="form-control" id="control_person_unitShow">
                                        </select>
                                   	</div>
                              </div>
                              <hr />
                              
                              <div class="row">
                              		<div class="col-md-3">
                                    	<label style="font-size:30px;">IMAGE</label>
                                    </div>
                                    <div class="col-md-4">
                                    	<input type="file" id="control_person_image" name="control_person_image"/>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-4 col-md-offset-3">
										<button type="button" class="btn btn-primary" id="control_person_bSave" onclick="control_person_bSave('save');" id="control_person_bupload">
                      						<span class="glyphicon glyphicon-floppy-disk"></span> Save
                    					</button>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-4 col-md-offset-3">
										<button type="button" class="btn btn-danger" id="control_person_bdelete" onclick="control_person_bSave('del');" id="control_person_bupload">
                      						<span class="glyphicon glyphicon-floppy-trash"></span> Delete
                    					</button>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-4 col-md-offset-3">
										<button type="button" class="btn btn-primary" id="control_person_bAdd" onclick="control_person_bSave('add');" id="control_person_bupload">
                      						<span class="glyphicon glyphicon-plus"></span> Add
                    					</button>
                                    </div>
                              </div>
                              <hr />
                           </div>
                        </div>
                        </div>
                               
                               
                               
                                     
  			</div><!---------	stoggle control	----------------->
                
	</div>    
    
    
<script type="text/javascript">     
	
	var CouAlert = 0;
	var Vpk		 = 0;
	var IMGname  = '';
	
	set_control_person();	
	control_person_listRank();
	control_person_listUnitShow();
	control_person_listUnitCase();
	control_person_listUnitCaseSuper();

	function control_person_listUnitCase()
	{
		$("#control_person_animate").show();
		$('#control_person_unitCase').html('');
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
							$('#control_person_unitCase').append($('<option/>', { 
								value: data[i]["unit_case"],
								text : data[i]["unit_case"] 
							}));
						}
					} 
					$("#control_person_animate").hide();
				},
				error: function (xhr, status, error) {
					Set_modal(1,"Error : List Unit");
				}
			});		
	}

	function control_person_listUnitCaseSuper()
	{
		$("#control_person_animate").show();
		$('#control_person_unitCaseSuper').html('');
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
							$('#control_person_unitCaseSuper').append($('<option/>', { 
								value: data[i]["unit_case"],
								text : data[i]["unit_case"] 
							}));
						}
					} 
					$("#control_person_animate").hide();
				},
				error: function (xhr, status, error) {
					Set_modal(1,"Error : List Unit");
				}
			});		
	}

	function control_person_listUnitShow()
	{
		$("#control_person_animate").show();
		$('#control_person_unitShow').html('');
			$.ajax({
				url: "file/f_list.php",
				type: "post",
				data: "Vmode=readUnitShow",
				beforSend:function(){},
				success: function (data) {
					if (data[0].result === "true") 
					{
						for (var i = 1; i < data.length; i++) 
						{
							$('#control_person_unitShow').append($('<option/>', { 
								value: data[i]["unit_show"],
								text : data[i]["unit_show"] 
							}));
						}
					} 
					$("#control_person_animate").hide();
				},
				error: function (xhr, status, error) {
					Set_modal(1,"Error : List Unit");
				}
			});		
	}

	function control_person_listRank()
	{
		$("#control_person_animate").show();
		$('#control_person_rank').html('');
			$.ajax({
				url: "file/f_list.php",
				type: "post",
				data: "Vmode=readRank",
				beforSend:function(){},
				success: function (data) {
					if (data[0].result === "true") 
					{
						for (var i = 1; i < data.length; i++) 
						{
							$('#control_person_rank').append($('<option/>', { 
								value: data[i]["rank"],
								text : data[i]["rank"] 
							}));
						}
					} 
					$("#control_person_animate").hide();
				},
				error: function (xhr, status, error) {
					Set_modal(1,"Error : List Unit");
				}
			});		
	}
	
	function set_control_person()
	{
			var table = $('#Tperson_total').DataTable();
			
			CouAlert = 0;
			$("#control_person_animate").show();
			$("#control_person_sub").hide();
			
			$("#control_person_bSave").hide();
			$("#control_person_bAdd").hide();
			$("#control_person_bdelete").hide();
			
			
			table.clear();
				$.ajax({
					url: "file/f_control_person.php",
					type: "post",
					data: "Vmode=readData" ,
					beforSend:function(){},
					success: function (data) {
							if (data[0].result === "true") 
							{
								var table_source = [];
								$("#Tperson_total > tbody").empty();
								for (var i = 1; i < data.length; i++) 
								{
									var col = {};
									col[0] = '<button class="btn btn-secondary" onclick="set_control_person_edit('+data[i]["pk"]+','+data[i]["id"]+','+data[i]["rank"]+',\''+data[i]["name"]+'\',\''+data[i]["unit_case"]+'\',\''+data[i]["unit_case_super"]+'\',\''+data[i]["unit_show"]+'\',\''+data[i]["id"] + "."+data[i]["pictype"]+'\');" ><span class="glyphicon glyphicon-pencil"></span></button>';
									col[1] = data[i]["id"];
									col[2] = data[i]["rank"];
									col[3] = data[i]["name"];
									col[4] = data[i]["unit_case"];
									col[5] = data[i]["unit_case_super"];
									col[6] = data[i]["unit_show"];
									col[7] = "<img class='img-thumbnail' src='imageuse/person/" + data[i]["id"] + "."+data[i]["pictype"]+"' onerror=\"this.src='imageuse/person/def.jpg';\"  style='width:130px; height:150px;' />";
									
									 var arr = [col[0],col[1],col[2],col[3],col[4],col[5],col[6],col[7]];
									 table_source.push(arr);
								}
								table.rows.add(table_source).draw();
								$("#control_person_animate").hide();
								//$('#frmchkper_person').show();
							} 
							$("#control_upaward_animate").hide();
					},
					error: function (xhr, status, error) {
						Set_modal_text(1,"Error : Get control_upaward desc!");
						$("#control_person_animate").hide();
					}
				});
	}

	
	function control_person_clearTable()
	{
		CouAlert++;
		if(CouAlert == 1)
		{
			Set_modal_text(3,"คุณกำลังดำเนินการลบข้อมูลกำลังพลทั้งหมด หากคุณแน่ใจที่จะดำเนินการต่อกรุณา clear Data อีกครั้ง");
			return false;	
		}
		CouAlert = 0;
		
		$("#control_person_animate").show();
		$.ajax({
			url: 'file/f_control_person.php',
			data: "Vmode=clearTable",                         
			type: 'post',
			success: function(data){
				set_control_person();
				Set_modal_text(2,"ทำรายการเรียบร้อย");
			}
		 });
	}
	
	function UpCSVperson()
	{
		var file_dataCSV = $('#person_csvfile').prop('files')[0];   
		var form_dataCSV = new FormData(); 
		   
		CouAlert = 0;   
		if($('#person_csvfile').val() === '')
		{
			Set_modal_text(1,"กรุณาเลือกไฟล์");
			return false;	
		}
		               
		form_dataCSV.append('file', file_dataCSV);     
		form_dataCSV.append('Vmode', 'upLoadPersonCSV');  

		$("#control_person_animate").show();		              
		$.ajax({
			url: 'file/f_control_person.php',
			dataType: 'text',  
			cache: false,
			contentType: false,
			processData: false,
			data: form_dataCSV,                         
			type: 'post',
			success: function(Rdata){
				Set_modal_text(2,"ทำรายการเรียบร้อย");
				set_control_person();
			}
		 });	
	}

	function set_control_person_edit(V_pk,Vid,Vrank,Vname,VunitCase,VunitCaseSuper,VunitShow,VimgName)
	{
		Vpk 	= V_pk;
		IMGname	= VimgName;
		$("#control_person_id").val(Vid);
		$("#control_person_rank").val(Vrank);
		$("#control_person_name").val(Vname);
		$("#control_person_unitCase").val(VunitCase);
		$("#control_person_unitCaseSuper").val(VunitCaseSuper);
		$("#control_person_unitShow").val(VunitShow);
		$("#control_person_image").val('');
		$("#control_person_bSave").show();
		$("#control_person_bdelete").show();
		$("#control_person_bAdd").hide();
		
		$("#control_person_sub").show();
		$("#control_person_rank").focus();
		
	}
	
	function control_person_add()
	{		
		$("#control_person_id").val('');
		$("#control_person_rank").val('');
		$("#control_person_name").val('');
		$("#control_person_unitCase").val('');
		$("#control_person_unitCaseSuper").val('');
		$("#control_person_unitShow").val('');
		$("#control_person_image").val('');
		$("#control_person_bAdd").show();
		$("#control_person_sub").show();
		$("#control_person_bdelete").hide();
		$("#control_person_bSave").hide();
	}

	function control_person_bSave(Vrm)
	{
		var file_dataImg = $('#control_person_image').prop('files')[0];   
		var form_dataImg = new FormData(); 	

		form_dataImg.append('file', file_dataImg);     
		if(Vrm=="save")	form_dataImg.append('Vmode', 			'updateData');  
		if(Vrm=="add")	form_dataImg.append('Vmode', 			'insertData'); 
		if(Vrm=="del")	form_dataImg.append('Vmode', 			'deleteData');  
		  
		form_dataImg.append('VpersonPk', 		Vpk);   
		form_dataImg.append('VpersonImg', IMGname);  
		form_dataImg.append('VpersonId', 		$("#control_person_id").val());    
		form_dataImg.append('VpersonRank', 		$("#control_person_rank").val());    
		form_dataImg.append('VpersonName', 		$("#control_person_name").val());    
		form_dataImg.append('VpersonUnitCase', 	$("#control_person_unitCase").val()); 
		form_dataImg.append('VpersonUnitCaseSuper', 	$("#control_person_unitCaseSuper").val());    
		form_dataImg.append('VpersonUnit_show', $("#control_person_unitShow").val());  
		
		$("#control_person_animate").show();		              
		$.ajax({
			url: 'file/f_control_person.php',
			dataType: 'text',  
			cache: false,
			contentType: false,
			processData: false,
			data: form_dataImg,                         
			type: 'post',
			success: function(Rdata){
				Set_modal_text(2,"ทำรายการเรียบร้อย ");
				set_control_person();
			}
		 });	
	}
	
	function LoadCSV()
	{
		window.open("file/excel_person.php");
	}

</script>