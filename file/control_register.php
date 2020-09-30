
	<div style="margin-top: 20px; font-size: 1.2em; 
    		  padding: 10px;
              border-width: 2px;
              border-style: solid;
              border-color: #03F;"
              class="col-md-10 col-md-offset-1">
              
                <h3 style="color:#03F;" align="center">Control Register...</h3>
                <div class="row" align="right"> 
                		<!--- toggle button control panel ----->
                    <button type="button" class="btn btn-warning col-md-1 col-md-offset-1"  data-toggle="collapse" data-target="#control_register_TgControl">
                      <span class="glyphicon glyphicon-eye-open"></span>
                    </button>
                </div>
                
                <div id="control_register_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>
                
				
                
		<div id="control_register_TgControl" class="collapse"><!---------	stoggle control	----------------->
		<!--==============================================================================-->
		<!--==============================================================================-->
		<!--==============================================================================-->
                            <div id="" style="margin:auto; margin-top: 20px; font-size: 1.2em; margin:
                              padding: 10px;
                              border-width: 2px;
                              border-style: solid;
                              border-color: #03F;" align="center"
                              class="col-md-6">
                                <h3 style="color:#03F;">Person Main...</h3>
                                <div class="row" align="right"> <!--- refresh button controll panel ----->
                                    <button type="button" class="btn btn-info col-md-1 col-md-offset-1" onclick="set_main_person();">
                                      <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div id="control_register_animate1" class="spinner" style="display: none; width:50px; height:50px;"></div>
                                
                                <!--	Area  -->
                                    <h3 style="color:#03F; margin-bottom:30px;">รายชื่อทั้งหมด</h3>
                                    <table class="table table-striped table-dark" id="control_register_Table1">
                                        <thead class="thead-light">
                                            <tr>
                                                <td align="left" width="100px;">ลำดับ</td>
                                                <td align="left">Name</td>
                                                <td align="left">Unit</td>
                                                <td align="left">Edit</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                <!--	Area  -->
                
                
                
                                
                            </div>    
                            
                
                            <!---------------------------	Main PERSON				--------------------------------------------->
                            <!---------------------------	Main PERSON				--------------------------------------------->
                            <!---------------------------	Main PERSON				--------------------------------------------->
                            
                
                     
                            <!---------------------------	PERSON				--------------------------------------------->   
                            <!---------------------------	PERSON				--------------------------------------------->   
                            <!---------------------------	PERSON				--------------------------------------------->          
                            <div id="" style="margin:auto; margin-top: 20px; font-size: 1.2em;
                              padding: 10px;
                              border-width: 2px;
                              border-style: solid;
                              border-color: #609;" align="center"
                              class="col-md-6">
                                <h3 style="color:#03F;">Person ...</h3>
                                <div class="row" align="right"> <!--- refresh button monitor 2 panel ----->
                                    <button type="button" class="btn btn-info col-md-1 col-md-offset-1" onclick="set_person();">
                                      <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div id="monitor2_pressing_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>
                                
                                <!--	Area  -->
                
                                    <h3 style="color:#03F; margin-bottom:30px;">รายชื่อผู้มาลงทะเบียนแล้ว</h3>
                                    <h3><span class="glyphicon glyphicon-gift" style="color:#F00;"></span> คือผู้ได้รับรางวัลแล้วจะไม่สามารถลบได้</h3>
                                    <table class="table table-striped table-dark" id="control_register_Table2">
                                        <thead class="thead-light">
                                        <tr>
                                                <td align="left" width="100px;">ลำดับ</td>
                                                <td align="left">Name</td>
                                                <td align="left">Unit</td>
                                                <td align="left">Edit</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                
                                <!--	Area  -->
                                
                            </div>  
                            
                            <!---------------------------	PERSON				--------------------------------------------->   
                            <!---------------------------	PERSON				--------------------------------------------->   
                            <!---------------------------	PERSON				--------------------------------------------->   
                </div>
                
                
                
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" id="modal-header">
                                <h2 class="modal-title" id="modal_title" style="color:#FFF;">เพิ่มข้อมูลผู้มีสิทธิ์</h2>
                            </div>
                            <div class="modal-body">
                                <!--src="file/pic_person/1.jpg"-->
                                <div height="720px;" width="560px;" align="center">
                                	<img id="person_pic" class="img-thumbnail" onerror="this.src='imageuse/person/def.jpg';"/>
                                </div>
                                <!--<div id="person_pic" style="background: url(pic_person/person.png); background-repeat: no-repeat;  background-size: 180px 230px;"></div>-->
                                <h3>ID : <p id="person_id"></p></h3>
                                <h3>Name : <p id="person_name"></p></h3>
                                <h3>Group : <p id="person_group"></p></h3>
                                
                                <button type="button" class="btn btn-success btn-lg col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-4 col-md-3 col-md-offset-4" 
                                    data-dismiss="modal" onclick="pmain_add();"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> เพิ่ม</button>
                            </div>
                            <div class="modal-footer">
                                
                                <button type="button" class="btn btn-warning btn-md col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-4 col-md-3 col-md-offset-4" 
                                    data-dismiss="modal"><h3>ปิด</h3></button>
                            </div>
                        </div>
                    </div>
                </div>
                
		<!--==============================================================================-->
		<!--==============================================================================-->
		<!--==============================================================================-->                
		</div><!---------	stoggle control	----------------->
                
	</div>    
    
<script type="text/javascript">     

	var buff_id;

		set_main_person();
		set_person();
	
	function set_main_person()
	{
		var table = $('#control_register_Table1').DataTable();
		
		$("control_register_animate1").show();
		table.clear();
			$.ajax({
				url: "file/f_control_register.php",
				type: "post",
				data: "Vmode=read_mainperson",
				beforSend:function(){},
				success: function (data) {
					if (data[0].result === "true") 
					{
						var table_source = [];
						$("Tmain_person > tbody").empty();
						for (var i = 1; i < data.length; i++) 
						{
							var col = {};
							col[0] = "<h4>"+data[i]["id"]+"</h4>";
							col[1] = "<h4>"+data[i]["name"]+"</h4>";
							col[2] = "<h4>"+data[i]["unit_show"]+"</h4>";
							col[3] = '<button class="btn btn-success btn-lg" onclick="modal_desc(\''+data[i]["id"]+'\',\''+data[i]["name"]+'\',\''+data[i]["unit_show"]+'\',\''+data[i]["id"]+"."+data[i]["pictype"]+'\');" ><span class="glyphicon glyphicon-plus"></span></button>';
							var arr = [col[0],col[1],col[2],col[3]];
							 table_source.push(arr);
						}			
						table.rows.add(table_source).draw();
						$("control_register_animate1").hide();
					} 
				},
				error: function (xhr, status, error) {
					$("control_register_animate1").hide();
				}
			});

	}	
		
	function modal_desc(Vid,Vname,Vunit,Vpic)
	{
			buff_id = Vid;
			$("#person_id").html(Vid);
			$("#person_name").html(Vname);
			$("#person_group").html(Vunit);
			$("#person_pic").attr('src',"imageuse\\person\\"+Vpic);
			
			$('#myModal').modal('show');
	}

	function pmain_add()
	{
			$("control_register_animate1").show();
			$.post("file/f_control_register.php",
				{				
					Vmode	: 'person_add',
					Vpid	: buff_id
				},
				function(result)
				{
					$("control_register_animate1").hide();
					set_main_person();
					set_person();
				}
			);	
			
	}

	function set_person()
	{
		var table = $('#control_register_Table2').DataTable();
		
		$("control_register_animate1").show();
		table.clear().draw();
			$.ajax({
				url: "file/f_control_register.php",
				type: "post",
				data: "Vmode=read_person",
				beforSend:function(){},
				success: function (data) {
					if (data[0].result === "true") 
					{
						var table_source = [];
						$("control_register_Table2 > tbody").empty();
						for (var i = 1; i < data.length; i++) 
						{
							var col = {};
							var Gif = '';
							
							if(data[i]["status_super"] != 0 || data[i]["status_little"] != 0 )	Gif = ' <span class="glyphicon glyphicon-gift" style="color:#F00;"></span> ';
							
							col[0] = "<h4>"+data[i]["id"]+"</h4>";
							col[1] = "<h4>"+Gif+data[i]["name"]+"</h4>";
							col[2] = "<h4>"+data[i]["unit_show"]+"</h4>";
							col[3] = '<button class="btn btn-danger btn-lg" onclick="p_del(\''+data[i]["id"]+'\');" ><span class="glyphicon glyphicon-trash"></span></button>';
							var arr = [col[0],col[1],col[2],col[3]];
							 table_source.push(arr);
						}			
						table.rows.add(table_source).draw();
						$("control_register_animate1").hide();
					} 
				},
				error: function (xhr, status, error) {
					//Set_modal_text(1,"Error : Monitor1 table!");
					$("control_register_animate1").hide();
				}
			});

	}
		
	function p_del(Vid)
	{
			$("control_register_animate1").show();
			$.post("file/f_control_register.php",
				{				
					Vmode	: 'person_del',
					Vpid	: Vid
				},
				function(result)
				{
					$("control_register_animate1").hide();
					set_main_person();
					set_person();
				}
			);			
	}
			
</script>