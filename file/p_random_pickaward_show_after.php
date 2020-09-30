<?PHP
	include("func.php");
	$dataBuff = new Cl_award();
	   
	$unit_select = $_POST['unit_select'];

				$ReadTable = $dataBuff->SQL_Select("	
														           select 
																 person.name as p_name,
																 person.id,
																 person.pictype,
																 person.unit_show,
																 gift_pick_award.name as g_name,
																 gift_pick_award.type,
																 pic_pickaward.pic_code
															 from person
															 inner join gift_pick_award
															 on person.id = gift_pick_award.person_id
															 left join pic_pickaward
															 on gift_pick_award.name = pic_pickaward.name
															 where gift_pick_award.r_show = '$unit_select'
															 
    
                               
													");	
				/*while ($row = $ReadTable->fetch_assoc()) 
					{
							
					}*/
?>
		<div style="position:absolute;">
			<img src="imageuse/back1.gif" id="p_random_little_start_bg" onerror="this.src='imageuse/random/0.gif';"/>
		</div>
	<marquee behavior="scroll" direction="up" scrollamount="8" id="p_random_little_show_panel" >
<?php while ($row = $ReadTable->fetch_assoc()) { ?>
	
	
	<div style="border-style: solid; background-color:#FFFFFF;">
		<div class="row" style="margin-left:5px; margin-right:5px;">
			<div class="col-md-2 ">
				<img src="imageuse/person/<?php  echo $row['id'].".".$row['pictype'];?>" onerror="this.src='imageuse/person/def.jpg';" width="200px;" height="250px;" style="margin-top: 25px;"/>
			</div>
			<div class="col-md-7">
				<label style="margin-top:60px;color:#8A2BE2; font-size: 100px;"><?php  echo $row['p_name'].' '.$row['unit_show'];?></label></br>
				<label style="margin-top:60px;color:#8A2BE2; font-size: 100px;"><?php echo $row['g_name'];?></label>
			</div>
			<div class="col-md-3 text-right" style="margin-top:0px;">
				<img src="img_pickaward/<?php  echo $row['pic_code']."."."jpg"?>" class="p_random_little_gift_bg"  onerror="this.src='imageuse/gift.png';"/>
			</div>
		</div>
	</div>
	
	
	
	</br>
	
<?php } ?>
	</marquee>

<script type="text/javascript">     

	var Vh		= $(window).height();
	var Vw		= $(window).width();	
	
	$("#p_random_little_start_bg").attr("height",Vh*0.9+" px;");
	$("#p_random_little_start_bg").attr("width",Vw*0.99+" px;");
	$("#p_random_little_start_bg").attr("src","imageuse\\random\\ld1.gif"); 
	
	$("#p_random_little_show_panel").attr("height",Vh*0.9+" px;");
	
	$(".p_random_little_gift_bg").attr("height",Vh*0.3+" px;");
	$(".p_random_little_gift_bg").attr("width",Vw*0.2+" px;");
</script>