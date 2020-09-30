            <!---------------------------	Main control				--------------------------------------------->
            <!---------------------------	Main control				--------------------------------------------->
            <!---------------------------	Main control				--------------------------------------------->
            
	<div id="" style="margin-top: 20px; font-size: 1.2em; 
    		  padding: 10px;
              border-width: 2px;
              border-style: solid;
              border-color: #03F;"
              class="col-md-12 col-md-offset-0">
                <h3 style="color:#03F;" align="center">Log ...</h3>
                <div class="row" align="right"> 
                		<!--- toggle button control panel ----->
                    <button type="button" class="btn btn-warning col-md-2 col-md-offset-1"  data-toggle="collapse" data-target="#control_log_toggle">
                      <span class="glyphicon glyphicon-eye-open"></span> แสดงข้อมูล
                    </button>
                </div>
                <br />
                <div id="control_log_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>
                
			<div id="control_log_toggle" class="collapse"><!---------	stoggle control	----------------->

            <!---------------------------	Monitor 2				--------------------------------------------->   
            <!---------------------------	Monitor 2				--------------------------------------------->   
            <!---------------------------	Monitor 2				--------------------------------------------->        
            <div id="" style="margin:auto; margin-top: 20px; font-size: 1.2em;
              padding: 10px;
              border-width: 2px;
              border-style: solid;
              border-color: #609;" align="center"
              class="col-md-12">
                <div class="row" align="right"> 
                		<!--- refresh button monitor 2 panel ----->
                    <button type="button" class="btn btn-info col-md-1 col-md-offset-1" onclick="set_control_log_table();">
                      <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                    </button>
                		<!--- toggle button monitor 2 panel ----->
                    <button type="button" class="btn btn-warning col-md-1 col-md-offset-1"  data-toggle="collapse" data-target="#set_control_log_monitor2">
                      <span class="glyphicon glyphicon-eye-open"></span>
                    </button>
                </div>
                <br />
                <div id="control_log_pressing_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>
                
                <div id="set_control_log_monitor2" class="collapse"><!--- toggle monitor 2 panel ----->
                <table class="table table-striped table-dark" id="control_log_table">
                	<thead class="thead-light">
                	<tr>
                    	<td align="center">Time</td>
                    	<td align="center">Mode</td>
                    	<td align="center">Desc</td>
                    	<td align="center">From</td>
                    </tr>
                	</thead>
                	<tbody>
                    </tbody>
                </table>
                </div><!--- toggle monitor 2 panel ----->
            
                  
                  
                </div>
            </div>
            <!---------------------------	Monitor 2	FINISH			--------------------------------------------->   
            <!---------------------------	Monitor 2	FINISH			--------------------------------------------->  
            <!---------------------------	Monitor 2	FINISH			--------------------------------------------->                  
	</div>    
    
    
<script type="text/javascript">     
	
	set_control_log_table();
	
	function set_control_log_table()
	{


		var table = $('#control_log_table').DataTable();
		
		$('#p_monitor2_edit').hide();
		$("#control_log_animate").show();
		table.clear().draw();
			$.ajax({
				url: "file/f_control_log.php",
				type: "post",
				data: "Vmode=read_table",
				beforSend:function(){},
				success: function (data) {
					if (data[0].result === "true") 
					{
						var table_source = [];
						$("#control_log_table > tbody").empty();
						for (var i = 1; i < data.length; i++) 
						{
							var col = {};
							col[0] = " "+data[i]["dt_set"];
							col[1] = " "+data[i]["mode"];
							col[2] = " "+data[i]["desc_gift"];
							col[3] = " "+data[i]["from_pos"];
							 var arr = [col[0],col[1],col[2],col[3]];
							 table_source.push(arr);
						}			
						table.rows.add(table_source).draw();
						$("#control_log_animate").hide();
					} 
				},
				error: function (xhr, status, error) {
					Set_modal_text(1,"Error : Monitor1 table!");
					$("#control_log_animate").hide();
				}
			});
		
	}
</script>