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
                <h3 style="color:#03F;">จัดการการกดรางวัลย่อย</h3>
                <div class="row" align="right"> 
                		<!--- refresh button controll panel ----->
                    <button type="button" class="btn btn-info col-md-1 col-md-offset-1" onclick="control_person_listUnitCase();">
                      <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                    </button>
                		<!--- toggle button control panel ----->
                    <button type="button" class="btn btn-warning col-md-1 col-md-offset-1"  data-toggle="collapse" data-target="#TgControl">
                      <span class="glyphicon glyphicon-eye-open"></span>
                    </button>
                </div>
				</br>
					<div class="row">
						<div class="col-md-2 text-right">
							<h3>หน่วยที่เลือก :</h3>
						</div>
						<div class="col-md-8 text-left">
							<h3 id="select_unit"></h3>
						</div>
					</div>
                <div id="control_pressing_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>
                
            <div id="TgControl" class="collapse"><!---------	stoggle control	----------------->
			  </br>
				<div class="container">
					<table class="table table-hover table-condensed" id="myTable">
                        <thead>
                        	<tr>
								
                                <th>ลำดับ</th>
                                <th>นามหน่วย</th>
                                <th>ส่ง</th>
                               
                          	</tr>
                        </thead>
                        <tbody>
							<tr>
								
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
               
          
                
	</div>    
    
    
<script type="text/javascript">  
	control_person_listUnitCase();
	function control_person_listUnitCase()
	{
		var table = $('#myTable').DataTable();
		$("#control_pressing_animate").show();
		$('#unit_name').html('');
			$.ajax({
				url: "file/f_list.php",
				type: "post",
				data: "Vmode=readdata_kla",
				beforSend:function(){},
				success: function (data) {
					
					if (data[0].result === "true") 
							{
								var table_source = [];
								$("#myTable > tbody").empty();
								for (var i = 1; i < data.length; i++) 
								{
									var col = {};
									
									col[0] = i;
									col[1] = data[i]["unit"];
									col[2] = '<button class="btn btn-info" onclick="select_random(\''+data[i]["unit"]+'\');" ><span class="glyphicon glyphicon-hand-left"></span></button>';
									 var arr = [col[0],col[1],col[2]];
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
					Set_modal(1,"Error : List Unit");
				}
			});		
	}
	
	function select_random(unit)
	{
		//alert(unit);
		$("#select_unit").html(unit);
		$.ajax({
				url:"file/f_p_random_littleaward_start.php",
				type:"post",
				data:'unit='+unit+"&Vmode=Calldata",
				success:function(data){
					console.log(data);
					control_person_listUnitCase();
				},
			});
	}
</script>