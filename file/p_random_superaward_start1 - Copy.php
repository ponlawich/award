<?PHP
	include("func.php");
	$dataBuff = new Cl_award();
	
			$ReadTable = $dataBuff->SQL_Select("	
											select 		unit,random
											from   		award_pick_number
											where		random = 1
											");	
			if( $row = $ReadTable->fetch_assoc() )
			{
				$unit	= $row['unit'];
			}

			
?>
<style>
	font{
		font-size: 150px;
		font-family: 'TH Mali';
  		font-weight: bold;
	}
</style>
	<div style="position:absolute;">
    		<img src="imageuse/random/v1.gif" id="p_random_superaward_start_bg" onerror="this.src='imageuse/random/0.gif';"/>
    </div>
    
    
    <div style="position:relative;">
    	<font style="position:relative; color:#0FF; text-shadow: 1px 1px 2px black, 0 0 25px white, 0 0 5px blue;" size="13" id="p_random_superaward_start_name"><?PHP echo $unit;?></font>
   	</div>    
    
    <div style="position:relative;">
    	<img src="imageuse/accessory/b_green.png" id="p_random_little_start_bStart" style="position:relative; margin-top:30px;" onclick="p_random_little_start('<?PHP echo $unit ;?>');"/>
   	</div>


<script type="text/javascript">     
	   
    var Vh		= $(window).height();
	var Vw		= $(window).width();
	var Vranbg	= Math.floor(Math.random() * (6 - 0)) + 0;

	$("#p_random_superaward_start_bg").attr("height",Vh*0.98+" px;");
	$("#p_random_superaward_start_bg").attr("width",Vw*0.98+" px;");
	$("#p_random_superaward_start_bg").attr("src","imageuse\\random\\v"+Vranbg+".gif"); 
		
	$("#p_random_superaward_start_bStart").attr("height",Vh*0.2+" px;");
	$("#p_random_superaward_start_bStart").offset({ top: Vh*0.4});
	$("#p_random_superaward_start_name").offset({ top: Vh*0.2});
	

	function  p_random_little_start(unit_select)
	{
		$("#p_random_superaward_start_bStart").attr("src","imageuse\\accessory\\b_red.png"); 

				$.post("file/f_p_random_pickaward_start.php",
					{				
						Vmode		: 'random_unit_little',
						unit_select	: unit_select
					},
					function(result)
					{
							$.post("file/p_random_pickaward_show_after.php",
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