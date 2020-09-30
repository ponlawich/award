            <!---------------------------	Main control				--------------------------------------------->
            <!---------------------------	Main control				--------------------------------------------->
            <!---------------------------	Main control				--------------------------------------------->
            
	<div style="margin-top: 20px; font-size: 1.2em; 
    		  padding: 10px;
              border-width: 2px;
              border-style: solid;
              border-color: #03F;"
              class="col-md-10 col-md-offset-1">
                <h3 style="color:#03F;" align="center">Awards Upload & setting...</h3>
                <div class="row" align="right"> 
                		<!--- refresh button controll panel ----->
                    <button type="button" class="btn btn-info col-md-1 col-md-offset-1" onclick="set_control_upaward();">
                      <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                    </button>
                		<!--- toggle button control panel ----->
                    <button type="button" class="btn btn-warning col-md-1 col-md-offset-1"  data-toggle="collapse" data-target="#TgControl">
                      <span class="glyphicon glyphicon-eye-open"></span>
                    </button>
                </div>
                <div id="control_upaward_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>
                
              <div id="TgControl" class="collapse"><!---------	stoggle control	----------------->
              
                 <br />
                 
                 	<div class="row">
                        <div class="col-md-6 col-md-offset-5" style="height:250px; width:340px;">
                            <img src="" id="picShowPre" class="img-thumbnail"/>
                        </div>
                    </div>
                 	<div class="row">
                        <h3 align="center">ภาพที่กำลังแสดง</h3>
					</div>
                    
                 <br />   
                 <hr />     
                          
                          
            	<div> <!---------  panel control button  --------------->
                	<table class="table table-condensed table-hover" id="Taward">
                        <thead>
                        	<tr>
                                <td width="20%">&nbsp;</td>
                                <td width="60%">Name</td>
                                <td width="20%">pic</td>
                          	</tr>
                        </thead>
                        <tbody>
                        </tbody>
                	</table>
                    
                </div>
                <br />  
                 
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
                    	<button type="button" class="btn btn-success" onclick="control_upaward_add();">
                        	<span class="glyphicon glyphicon-plus-sign"></span> เพิ่ม
                      	</button>
                    </div>
				</div>
                <br />
                
                <div id="control_upaward_sub" name="control_upaward_sub" class="col-md-8 col-md-offset-2">
                        <div class = "panel panel-info">
                           <div class = "panel-heading">
                              <h3 class = "panel-title">
                               	ปรับปรุงข้อมูลรางวัล
                              </h3>
                           </div>
                           <div class = "panel-body">
                           		<!--
                              <div class="row">
                              		<div class="col-md-2"><label style="font-size:30px;">ID</label></div>
                                    <div class="col-md-4">123</div>
                              </div>
                              	-->
                              
                              <div class="row">
                              		<div class="col-md-2"><label style="font-size:30px;">Name</label></div>
                                    <div class="col-md-4"><input type="text" id="upaward_name"/></div>
                              </div>
                              <div class="row">
                              		<div class="col-md-2"><label style="font-size:30px;">Img</label></div>
                                    <div class="col-md-4"><input type="file" id="upaward_filename" name="upaward_filename" multiple='multiple' /></div>
                              </div>
                              
                              <div class="row">
                                    <div class="col-md-4 col-md-offset-4" id="bUpload">
										<button type="button" class="btn btn-primary" onclick="upAword();">
                      						<span class="glyphicon glyphicon-upload"></span> Upload
                    					</button>
                                    </div>
                                    <div class="col-md-4 col-md-offset-4" id="bDelete">
										<button type="button" class="btn btn-danger" onclick="set_control_upaward_delete();">
                      						<span class="glyphicon glyphicon-upload"></span> Delete
                    					</button>
                                    </div>
                              </div>
                           </div>
                        </div>     
                </div>
                
                
                
  			</div><!---------	stoggle control	----------------->
                
	</div>    
    
<script type="text/javascript">     
	var AWid	= 0;
	var AWname	= '';
	var AWFname	= '';
	
	
	set_control_upaward();	
	
	function set_control_upaward()
	{
			var table = $('#Taward').DataTable();
			
			$("#control_upaward_sub").hide();
			$("#bUpload").hide();
			$("#bDelete").hide();
			$("#control_upaward_animate").show();
			
			table.clear();
				$.ajax({
					url: "file/f_control_upaward.php",
					type: "post",
					data: "Vmode=readData" ,
					beforSend:function(){},
					success: function (data) {
							if (data[0].result === "true") 
							{
								var table_source = [];
								$("#Taward > tbody").empty();
								for (var i = 1; i < data.length; i++) 
								{
									var col = {};
									col[0] = '<button class="btn btn-default" onclick="set_control_upaward_edit('+data[i]["id"]+',\''+data[i]["pname"]+'\',\''+data[i]["fname"]+"."+data[i]["ftype"]+'\');" ><span class="glyphicon glyphicon-pencil"></span> แก้ไข</button><br>'+
											 '<button class="btn btn-default" onclick="set_control_upaward_display('+data[i]["id"]+',\''+data[i]["fname"]+"."+data[i]["ftype"]+'\');" ><span class="glyphicon glyphicon-film"></span> แสดง</button>';
									col[1] = data[i]["pname"];
									col[2] = "<img src='imageuse\\award\\"+data[i]["fname"]+"."+data[i]["ftype"]+"' style='width:150px; height:100px;'>";
									
									if(data[i]["status"] == 1)	$("#picShowPre").attr("src","imageuse\\award\\"+data[i]["fname"]+"."+data[i]["ftype"]);
									
									 var arr = [col[0],col[1],col[2]];
									 table_source.push(arr);
								}
								table.rows.add(table_source).draw();
								$("#control_upaward_animate").hide();
								//$('#frmchkper_person').show();
							} 
							$("#control_upaward_animate").hide();
					},
					error: function (xhr, status, error) {
						Set_modal_text(1,"Error : Get control_upaward desc!");
						$("#control_upaward_animate").hide();
					}
				});
	}
	
	function set_control_upaward_display(Vid,Vfile)
	{
		$("#control_upaward_animate").show();
		$.post("file/f_control_upaward.php",
			{				
				Vmode	: 'setAword',
				Vaword	: Vid
			},
			function(result)
			{
				$("#control_upaward_animate").hide();
				if(result == 1)		
					$("#picShowPre").attr("src","imageuse\\award\\"+Vfile);
				if(result == 0)		
					Set_modal_text(1,'รายการไม่สมบูรณ์');
			}
		);
	}

	function Chk_file()
	{
		if($('#upaward_name').val() === '')
		{
			Set_modal_text(1,"กรุณาระบุชื่อไฟล์");
			return false;	
		}
		if($('#upaward_filename').val() === '')
		{
			Set_modal_text(1,"กรุณาเลือกไฟล์");
			return false;	
		}
		
		return true;
	}
	
	function upAword()
	{
		var file_data = $('#upaward_filename').prop('files')[0];   
		var form_data = new FormData(); 
		
		if(!Chk_file()) 	return false;
				   
		//alert($('#upaward_filename').prop('files')[0]);             
		form_data.append('file', file_data);         
		form_data.append('Vmode', 'upLoadAword');  
		form_data.append('VawordName', $("#upaward_name").val());
		//alert(form_data);     
		                        
		$.ajax({
			url: 'file/f_control_upaward.php',
			dataType: 'text',  
			cache: false,
			contentType: false,
			processData: false,
			data: form_data,                         
			type: 'post',
			success: function(Rdata){
				Set_modal_text(2,"ทำรายการเรียบร้อย");
				set_control_upaward();
			}
		 });
	
	}
	
	function control_upaward_add()
	{	   
		set_control_upaward();
		$("#control_upaward_sub").show();
		$("#bUpload").show();
		
		$("#upaward_name").val('');
		$("#upaward_filename").val('');
		
	}
	
	function set_control_upaward_edit(Vid,Vname,Vfname)
	{
		AWid	= Vid;
		AWFname	= Vfname;
		
		set_control_upaward();
		$("#upaward_name").val(Vname);
		//$("#upaward_filename").val(Vfname);
		$("#control_upaward_sub").show();
		$("#bDelete").show();
	}
	
	function set_control_upaward_delete()
	{
		$("#control_upaward_sub").show();
		$.ajax({
			url: 'file/f_control_upaward.php',
			data: "Vmode=deleAward&Vaword=" + AWid + "&VawordFName=" + AWFname,                         
			type: 'post',
			success: function(data){
				Set_modal_text(2,"ทำรายการเรียบร้อย ");
				set_control_upaward();
			}
		 });
	}
	
</script>