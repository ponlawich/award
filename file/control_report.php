            <!---------------------------	Main control				--------------------------------------------->
            <!---------------------------	Main control				--------------------------------------------->
            <!---------------------------	Main control				--------------------------------------------->
            
	<div id="" style="margin-top: 20px; font-size: 1.2em; 
    		  padding: 10px;
              border-width: 2px;
              border-style: solid;
              border-color: #03F;"
              class="col-md-12 col-md-offset-0">
                <h3 style="color:#03F;" align="center">Report ...</h3>
                <div class="row" align="right"> 
                		<!--- toggle button control panel ----->
                    <button type="button" class="btn btn-warning col-md-2 col-md-offset-1"  data-toggle="collapse" data-target="#control_log_toggle">
                      <span class="glyphicon glyphicon-eye-open"></span> แสดงข้อมูล
                    </button>
                </div>
                <br />
                <div id="control_log_animate" class="spinner" style="display: none; width:50px; height:50px;"></div>
                
            <!---------------------------	Monitor 2	FINISH			--------------------------------------------->   
            <!---------------------------	Monitor 2	FINISH			--------------------------------------------->  
            <!---------------------------	Monitor 2	FINISH			--------------------------------------------->     
			<div id="control_log_toggle" class="collapse"><!---------	stoggle control	----------------->

            
                  <?PHP   
				  	//echo getcwd()."\\r_award.php<br>";
				  	//echo "localhost\\".substr(getcwd(),  strpos(getcwd(),"award"))               ."\\r_award.php";
				  ?>
            	<div class="row">
                	<div class="col-md-3 col-md-offset-1">
                  		<button type="button" class="btn btn-info" onclick="PrintSuper();">Super Award</button>
					</div>
                	<div class="col-md-3">
                  		<button type="button" class="btn btn-info" onclick="PrintSuperAll();">Super All Award</button>
					</div>
					<div class="col-md-3">
                  		<button type="button" class="btn btn-info" onclick="PrintLittle();">Little Award</button>
					</div>
               	</div>                  
            </div>
            <!---------------------------	Monitor 2	FINISH			--------------------------------------------->   
            <!---------------------------	Monitor 2	FINISH			--------------------------------------------->  
            <!---------------------------	Monitor 2	FINISH			--------------------------------------------->                  
	</div>    
    
<script type="text/javascript"> 

		function PrintSuper()
		{
			window.open("file/r_super_award.php");			
		}
		function PrintSuperAll()
		{
			window.open("file/r_super_all_award.php");			
		}
		function PrintLittle()
		{
			window.open("file/r_little_award.php");			
		}
		    
    
</script>