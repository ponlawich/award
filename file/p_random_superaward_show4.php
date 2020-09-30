<?PHP
	include("func.php");
	$dataBuff = new Cl_award();
	
	$Gid	=	$_POST['VawardID'];
			$ReadTable = $dataBuff->SQL_Select("	
												   select b.id,b.val,a.name,a.unit_show,a.pictype   
												   from person a
												   inner join   
														 (                
															                      
															  select	sid as id,1 as val
															  from		superaward_status
															  where     number = $Gid
															  order by  seq desc
															  limit 1
															  
														 ) b
												   on a.id = b.id
												   ORDER by b.val desc
											");	

			$row = $ReadTable->fetch_assoc(); 
					$vname  = $row['name'];
					$vushow = $row['unit_show'];
					$vpic 	= $row['id'].".".$row['pictype'];
			
	
?>
<style>
	font{
		font-size: 120px;
		font-family: 'TH Mali';
  		font-weight: bold;
	}
</style>
	<div style=" position:absolute;">
    		<img src="imageuse/random/ld1.gif" id="p_random_superaward_bg" onerror="this.src='imageuse/random/ld0.gif';"/>
    </div>
    
    
    <div style="position:relative;">
    	<img src="imageuse/person/107.png" id="p_random_superaward_p" onerror="this.src='imageuse/person/def.jpg';" style="border-radius: 8px; border: 4px solid #ddd; display: none;"/>
   	</div>
    <p>
    	<font id="p_random_superaward_name" style="font-size:200px; position:relative; color:#00FF00; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;"></font>
   	</p>
   <p>
    	<font id="p_random_superaward_unit" style="position:relative; color:#FF1493; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;" ></font>
  	</p>


<script type="text/javascript">     
	   

	
	var Vrandom	= parseInt((Math.random()*100).toString().substring(2,1));
    var Vh		= $(window).height();
	var Vw		= $(window).width();
	var Vranpic	= Math.floor(Math.random() * (6 - 0)) + 0;
	var Vslot	= 'it';
	var Vdelay	= 0;
	var i;
	
	$("#p_random_superaward_bg").attr("src","imageuse\\random\\"+Vslot+".gif");
	$("#p_random_superaward_bg").attr("height",Vh*0.98+" px;");
	$("#p_random_superaward_bg").attr("width",Vw*0.98+" px;");
	
	$("#p_random_superaward_p").attr("height",Vh*0.5+" px;");
	$("#p_random_superaward_p").offset({ top: Vh*0.1});
	$("#p_random_superaward_name").offset({ top: Vh*0.15});
	$("#p_random_superaward_unit").offset({ top: Vh*0.08});
	
	p_random_superaward_set();
	
	function p_random_superaward_set()
	{
		setTimeout(
					function()
					{
						$("#p_random_superaward_bg").attr("src","imageuse\\random\\ld"+Vranpic+".gif");
						$("#p_random_superaward_name").html("<?PHP echo $vname; ?>");
						$("#p_random_superaward_unit").html("<?PHP echo $vushow; ?>");
						$("#p_random_superaward_name").show();
						$("#p_random_superaward_unit").show();
						$("#p_random_superaward_p").attr("src","imageuse\\person\\<?PHP echo $vpic; ?>"); 
						$("#p_random_superaward_p").show();
					}, 6800);
	}

	
</script>