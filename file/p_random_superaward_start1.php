<?PHP
	include("func.php");
	$dataBuff = new Cl_award();
	
			$ReadTable = $dataBuff->SQL_Select("	
											select 		number,name,type
											from   		superaward_status
											where		(status = 0 or status = null)
												and		enable = 1
											order by 	seq
											limit 1
											");	
			if( $row = $ReadTable->fetch_assoc() )
			{
				$AvNumber	= $row['number'];
				$AvName		= $row['name'];	
				$button 	= 1;
			}
			else 
			{
				$AvNumber	= 0;
				$AvName		= "สิ้นสุดการออกรางวัล";	
				$button 	= 0;
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
    	<font style="position:relative; color:#ff7a00; text-shadow: 0 0 50px white;" size="13" id="p_random_superaward_start_name"><?PHP //echo $AvNumber." ".$AvName;?><?PHP echo $AvName;?></font>
   	</div>    
    
    <div style="position:relative; display:<?PHP echo ($button==1?" inline":"none")?>;">
    	<img src="imageuse/accessory/b_green.png" id="p_random_superaward_start_bStart" style="position:relative;" onclick="p_random_superaward_start_ImgChange();" />
   	</div>


<script type="text/javascript">     
	   
    var Vh		= $(window).height();
	var Vw		= $(window).width();
	var Vranbg	= Math.floor(Math.random() * (6 - 0)) + 0;

	$("#p_random_superaward_start_bg").attr("height",Vh*0.98+" px;");
	$("#p_random_superaward_start_bg").attr("width",Vw*0.98+" px;");
	$("#p_random_superaward_start_bg").attr("src","imageuse/random/ld1.gif"); 
		
	$("#p_random_superaward_start_bStart").attr("height",Vh*0.2+" px;");
	$("#p_random_superaward_start_bStart").offset({ top: Vh*0.4});
	$("#p_random_superaward_start_name").offset({ top: Vh*0.2});
	

	function  p_random_superaward_start_ImgChange()
	{
		$("#p_random_superaward_start_bStart").attr("src","imageuse\\accessory\\b_red.png"); 

			$.post("file/f_p_random_superaward_start.php",
				{				
					Vmode		: 'random',
					VawardID	: <?PHP echo $AvNumber;?>
				},
				function(result)
				{
						$.post("file/p_random_superaward_show1.php",
						{				
							VawardID	: <?PHP echo $AvNumber;?>
						},
						function(data)
						{
							$("#main_page").html(data);
						});
				}
			);	
	}

</script>