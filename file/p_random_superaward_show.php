<?PHP
	include("func.php");
	$dataBuff = new Cl_award();
	
	$Gid	=	$_POST['VawardID'];
			$ReadTable = $dataBuff->SQL_Select("	
												   select b.id,b.val,a.name,a.unit_show,a.pictype,a.gender
												   from person a
												   inner join   
														 (                
															  (                      
															  select	sid as id,1 as val
															  from		superaward_status
															  where     number = $Gid
															  order by  seq desc
															  limit 1
															  )
																	union all
															  (
															  select    id as id,0 as val
															  from      person
															  where status_super = 0
															  order by RAND() limit 44
															  ) 
														 ) b
												   on a.id = b.id
												   ORDER by b.val desc
											");	

			while ($row = $ReadTable->fetch_assoc()) 
			{
				$V.= "\"".$row['id'].".".$row['pictype']."\",";
				if($row['val']==='1')
				{
					$vname  = $row['name'];
					$vushow = $row['unit_show'];
					$gender = $row['gender'];
					
				}
			}
			
				$V = substr($V,0,(strlen($V)-1));
			
?>
<style>
	font{
		font-size: 120px;
		font-family: 'TH Mali';
  		font-weight: bold;
	}
</style>
	<div style=" position:absolute;">
    
    		<img src="imageuse/random/1.gif" id="p_random_superaward_bg" onerror="this.src='imageuse/random/0.gif';"/>
    </div>
    
    
    <div style="position:relative;">
    	<img src="imageuse/person/107.png" id="p_random_superaward_p" onerror="this.src='imageuse/person/def.jpg';" style="border-radius: 8px; border: 4px solid #ddd;"/>
   	</div>
    <p><font size="8" style="position:relative; color:#FFD700; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;" id="p_random_superaward_name"></font></p>
    <p><font size="8" style="position:relative; color:#FF1493; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;" id="p_random_superaward_unit"></font></p>
    <p><font size="8" style="position:relative; color:#FF1493; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;" id="p_random_superaward_id"></font></p>

	
<script type="text/javascript">     
	   

	
	var Vrandom	= '7';
	/*var Vrandom	= parseInt((Math.random()*100).toString().substring(2,1));*/
    var Vh		= $(window).height();
	var Vw		= $(window).width();
	var Vranpic	= Math.floor(Math.random() * (6 - 3)) + 3;
	var Vdelay	= 0;
	var i;
	var Vpic = [<?PHP echo $V; ?>];
	<?PHP
		//echo 'var Vpic = ["1.jpg", "3.png", "100.jpg", "101.jpg", "102.jpg"];';	
	?>
	
	$("#p_random_superaward_bg").attr("src","imageuse\\random\\ld1.gif");
	$("#p_random_superaward_bg").attr("height",Vh*0.98+" px;");
	$("#p_random_superaward_bg").attr("width",Vw*0.98+" px;");
	
	$("#p_random_superaward_p").attr("height",Vh*0.5+" px;");
	$("#p_random_superaward_p").offset({ top: Vh*0.15});
	$("#p_random_superaward_name").offset({ top: Vh*0.65});
	$("#p_random_superaward_unit").offset({ top: Vh*0.63});
	
	
	//$("#p_random_superaward_name").html(Vdelay+"="+Vpic.length+"="+Vranpic);

	p_random_superaward_set();
	
	function p_random_superaward_set()
	{
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[1]); 
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[15]); 
					}, 100);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[20]); 
					}, 200);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[25]); 
					}, 300);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[30]); 
					}, 400);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[35]); 
					}, 500);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[40]); 
					}, 600);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[44]); 
					}, 700);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(3000);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[2]); 
					}, 800);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(4500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[1]); 
					}, 900);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[12]); 
					}, 1000);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[22]); 
					}, 1100);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[32]); 
					}, 1200);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[42]); 
					}, 1300);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[3]); 
					}, 1400);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[13]); 
					}, 1500);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[23]); 
					}, 1600);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(3000);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[33]); 
					}, 1700);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(4500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[43]); 
					}, 1800);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[4]); 
					}, 1900);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[24]); 
					}, 2000);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[34]); 
					}, 2100);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[6]); 
					}, 2200);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[26]); 
					}, 2300);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[36]); 
					}, 2400);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[7]); 
					}, 2500);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(3000);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[27]); 
					}, 2600);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(4500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[37]); 
					}, 2700);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[5]); 
					}, 2800);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[8]); 
					}, 3100);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[9]); 
					}, 3400);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[10]); 
					}, 3700);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[11]); 
					}, 4000);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(3000);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[16]); 
					}, 4300);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(4500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[17]); 
					}, 4600);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[18]); 
					}, 4900);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[19]); 
					}, 5200);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[21]); 
					}, 5500);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(3000);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[31]); 
					}, 5800);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(4500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[41]); 
					}, 6200);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[28]); 
					}, 7200);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(1500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[29]); 
					}, 8200);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(3000);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[38]); 
					}, 9200);
		setTimeout(
					function()
					{
						//$("#p_random_superaward_name").fadeIn(4500);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[39]); 
					}, 10200);
		
		setTimeout(
					function()
					{
						$("#p_random_superaward_bg").attr("src","imageuse\\random\\f3.gif");
						$("#p_random_superaward_name").html("<?PHP echo $vname; ?>");
						$("#p_random_superaward_unit").html("<?PHP echo $vushow; ?>");
						$("#p_random_superaward_name").fadeIn(1600);
						$("#p_random_superaward_unit").fadeIn(1600);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[0]); 
						//$("#p_random_superaward_name").show();
					}, 11200);
	}
/*
	function p_random_superaward_set()
	{	
		$("#p_random_superaward_name").html("Start");
		for(i = 0; i < Vranpic; i++) 
		{ 
				setTimeout(
									function()
									{
											$("#p_random_superaward_name").html(i+"="+Vranpic);
										$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[VArray]); 
									}, 500);	
		}
	}
	*/
/*	
	function p_random_superaward_set()
	{	
		$("#p_random_superaward_name").html("Start");
		for(i = 0; i < Vranpic; i++) 
		{ 
			$("#p_random_superaward_name").html(i);
			$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[i]);
			setDelay();
	  		//swapPic(Vranpic-i);
		}
	}
	
function setDelay() {
  setTimeout(function(){
    console.log();
  }, 1000);
}	
	
/*		
	function swapPic(VArray)
	{
		var Vcount = 0;
		setTimeout(
					function()
					{
						Vcount++;
						Vdelay = Vdelay+500;
							$("#p_random_superaward_name").html(Vcount+":"+Vdelay+"="+VArray+"="+Vranpic);
						//$("#p_random_superaward_name").fadeIn(Vdelay);
						Vdelay = Vdelay+1000;
							$("#p_random_superaward_name").html(Vcount+":"+Vdelay+"="+VArray+"="+Vranpic);
						$("#p_random_superaward_p").attr("src","imageuse\\person\\"+Vpic[VArray]); 
					}, Vdelay);		
	}
	
	
	
	
	
	
*/



    //$("#p_random_superaward_name").fadeOut(1);
    //$("#p_random_superaward_p1").slideUp( 300 ).delay( 800 ).fadeIn( 400 );
    //$("#p_random_superaward_p2").slideUp( 300 ).delay( 800 ).fadeIn( 400 );

    //$("#p_random_superaward_p1").fadeOut(1000);
    //$("#p_random_superaward_p2").fadeIn(4000);
	
    //$("#p_random_superaward_name").fadeIn(100);
	
</script>