<?PHP
	include("func.php");
	$dataBuff = new Cl_award();
	
			$ReadTable = $dataBuff->SQL_Select("	
											select 		unit,random
											from   		unit_class
											where		random = 1
											");	
			if( $row = $ReadTable->fetch_assoc() )
			{
				$unit	= $row['unit'];
			}

			
?>
<style>
	font{
		font-size: 100px;
	}
</style>	
	<div style="position:absolute;">
    	<img src="imageuse/random/back002.gif" id="p_random_little_start_bg" onerror="this.src='imageuse/random/0.gif';"/>
    </div>	
	<div style="position:absolute;">
    	<img id="p_random_little_start_bg1" onerror="this.src='imageuse/random/0.gif';"/>
    </div>
	<div style="position:relative;">
    	<font style="position:relative; color:#ff7a00; text-shadow: 0 0 50px white;"  id="p_random_little_start_name" ><?PHP echo $unit ;?></font>
   	</div>  

	<div style="position:relative;">
    	<img src="imageuse/accessory/B1.png" id="p_random_little_start_bStart" style="position:relative; margin-top:30px;" onclick="p_random_little_start('<?PHP echo $unit ;?>');"/>
   	</div>
	
<script type="text/javascript">  
	var Vh		= $(window).height();
	var Vw		= $(window).width();
	var Vranbg	= 8;
	var Vranload	= Math.floor(Math.random() * (7 - 0)) + 0;
	//alert(Vh);
	
	
	$("#p_random_little_start_bg").attr("height",Vh*0.9+" px;");
	$("#p_random_little_start_bg").attr("width",Vw*1+" px;");
	//$("#p_random_little_start_bg").attr("src","imageuse/random/back002.gif"); 
	
	$("#p_random_little_start_bg1").attr("height",Vh*0.9+" px;");
	$("#p_random_little_start_bg1").attr("width",Vw*0.95+" px;");
		
	$("#p_random_little_start_bStart").attr("height",Vh*0.2+" px;");
	$("#p_random_little_start_bStart").offset({ top: Vh*0.35});
	$("#p_random_little_start_name").offset({ top: Vh*0.2});
	
	function p_random_little_start(unit_select)
		{
			//alert('สุ่มรางวัล'+unit_select);
			
			/*$.ajax({
					url:"file/f_p_random_littleaward_start.php",
					type:"post",
					data:'unit_select='+unit_select+"&Vmode=random_unit_little",
					success:function(data){
					
						console.log(data);
					
					},
				});*/
				
			$("#p_random_little_start_name").hide();
			$("#p_random_little_start_bStart").hide();
			
			
			
			$("#p_random_little_start_bg").attr("src","imageuse\\random\\RD.gif");
			$("#p_random_little_start_bg1").attr("src","imageuse\\random\\slot_0.gif");
				
				

					$.post("file/f_p_random_littleaward_start.php",
					{				
						Vmode		: 'random_unit_little',
						unit_select	: unit_select
					},
					function(result)
					{
							$.post("file/p_random_little_show.php",
							{				
								unit_select	: unit_select
							},
							function(data)
							{
								$("#main_page").html(data);
							});
					}
					);	
					
				
		}

</script>