<?PHP
	include("func.php");
	$dataBuff = new Cl_award();
	   
	

				$ReadTable = $dataBuff->SQL_Select("	
														     select person.id,person.pictype,
																 person.name as p_name,
																 person.unit_show,
																 gift_little.name as g_name,
																 gift_little.type,
																 pic_little.pic_code
															 from person
															 inner join gift_little
															 on person.id = gift_little.person_id
															 inner join unit_class
															 on person.unit_case = unit_class.unit
															 inner join pic_little
															 on gift_little.name = pic_little.name
															 where unit_class.show_status = 1
    
                               
													");	
				/*while ($row = $ReadTable->fetch_assoc()) 
					{
							
					}*/
?>
		<!--<div style="position:relative;">
			<img src="imageuse/person/107.png" id="p_random_superaward_p" onerror="this.src='imageuse/person/def.jpg';" style="border-radius: 8px; border: 4px solid #ddd;"/>
		</div>-->
		<div style="position:absolute;">
			<img src="imageuse/giphy.gif" id="p_random_little_start_bg" onerror="this.src='imageuse/random/0.gif';"/>
		</div>
	<marquee behavior="scroll" direction="up" scrollamount="20" id="p_random_little_show_panel" style=" border-style: solid; border-color: rgb(201, 76, 76);">
<?php while ($row = $ReadTable->fetch_assoc()) { ?>
	<hr>
	<div class="row">

		<div class="col-md-2 ">
			<img src="imageuse/person/<?php  echo $row['id'].".".$row['pictype'];?>" onerror="this.src='imageuse/person/def.jpg';"/>
		</div>
		<div class="col-md-4 text-right">
			<B><h2 style="margin-top:60px;color:#8A2BE2"><?php  echo $row['p_name'];?></h2></B>
		</div>
		<div class="col-md-3 text-right">
			<B><h2 style="margin-top:60px;color:#8A2BE2"><?php echo $row['g_name'];?></h2></B>
		</div>
		<div class="col-md-3">
			<img src="image_little/<?php  echo $row['pic_code']."."."jpg"?>" class="p_random_little_gift_bg"  onerror="this.src='imageuse/person/def.jpg';"/>
		</div>
	</div>
	<hr>
<?php } ?>
	</marquee>

<script type="text/javascript">     

	var Vh		= $(window).height();
	var Vw		= $(window).width();	
	
	$("#p_random_little_start_bg").attr("height",Vh*0.9+" px;");
	$("#p_random_little_start_bg").attr("width",Vw*0.98+" px;");
	//$("#p_random_little_start_bg").attr("src","imageuse\\random\\v"+Vranbg+".gif"); 
	
	$("#p_random_little_show_panel").attr("height",Vh*0.9+" px;");
	
	$(".p_random_little_gift_bg").attr("height",Vh*0.3+" px;");
	$(".p_random_little_gift_bg").attr("width",Vw*0.2+" px;");
</script>