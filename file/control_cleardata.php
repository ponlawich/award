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


					<div class="row">
						<button type="button" class="btn btn-info btn-lg col-md-3 col-md-offset-3" onclick="control_cleardata_cleardata();">
                          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> ClearData
                        </button>
                    </div>
					<div class="row">
						<button type="button" class="btn btn-info btn-lg col-md-3 col-md-offset-3" onclick="control_cleardata_clearlog();">
                          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Clear Log
                        </button>
                    </div>                
	</div>    
    
    
<script type="text/javascript">     
	
	var Cdata	= 0;
	var Clog	= 0;
	
	function control_cleardata_cleardata()
	{
		if(Cdata == 0)
		{
			Set_modal_text(1,"หากต้องการลบข้อมูลทั้งหมด กรุณายืนยันอีกครั้ง !");
			Cdata++;
		}
		else
		{
			$.post("file/f_control_cleardata.php",
				{				
					Vmode		: 'clear_data'
				},
				function(result)
				{
					Set_modal_text(2,"ทำรายการเรียบร้อย");
				}
			);				
			Cdata	= 0;
		}
	}
	
	function control_cleardata_clearlog()
	{
		if(Clog == 0)
		{
			Set_modal_text(1,"หากต้องการลบ Log กรุณายืนยันอีกครั้ง !");
			Clog++;
		}
		else
		{
			$.post("file/f_control_cleardata.php",
				{				
					Vmode		: 'clear_log'
				},
				function(result)
				{
					Set_modal_text(2,"ทำรายการเรียบร้อย");
				}
			);	
			Clog	= 0;
		}
	}
	
</script>