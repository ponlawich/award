<?PHP
	include("func.php");
	$dataBuff = new Cl_award();
	   
		$unit_select = $_POST['unit_select'];

				/*$ReadTable = $dataBuff->SQL_Select("	
													 select person.id,person.pictype,
														 person.name as p_name,
														 person.unit_show,
														 gift_little.name as g_name,
														 gift_little.type,
														 gift_little.name_show,
														 pic_little.pic_code
													 from person
													 inner join gift_little
													 on person.id = gift_little.person_id
													 left join pic_little
													 on gift_little.name = pic_little.name
													 where person.unit_case like'%$unit_select%' 
													 UNION
													 select person.id,person.pictype,
														 person.name as p_name,
														 person.unit_show,
														 gift_little.name as g_name,
														 gift_little.type,
														 gift_little.name_show,
														 pic_little.pic_code
													 from person
													 inner join gift_little
													 on person.id = gift_little.person_id
													 left join pic_little
													 on gift_little.name = pic_little.name
													 where unit_case_super like'%$unit_select%' 
													");	*/
					$ReadTable = $dataBuff->SQL_Select("	
													 select person.id,person.pictype,
														 person.name as p_name,
														 person.unit_show,
														 gift_little.name as g_name,
														 gift_little.type,
														 gift_little.name_show,
														 pic_little.pic_code
													 from person
													 inner join gift_little
													 on person.id = gift_little.person_id
													 left join pic_little
													 on gift_little.pic_code = pic_little.pic_code
													 where person.unit_case like'%$unit_select%' 
													");
				/*while ($row = $ReadTable->fetch_assoc()) 
					{
							
					}*/
?>
	<style>
		.row
		{
			margin-bottom:20px;
		}
	</style>
		<!--<div style="position:relative;">
			<img src="imageuse/person/107.png" id="p_random_superaward_p" onerror="this.src='imageuse/person/def.jpg';" style="border-radius: 8px; border: 4px solid #ddd;"/>
		</div>-->
		<div style="position:absolute;">
			<img src="imageuse/back1.gif" id="p_random_little_start_bg" onerror="this.src='imageuse/random/0.gif';"/>
		</div>
	<!--<marquee behavior="scroll" direction="up" scrollamount="19" id="p_random_little_show_panel" style=" border-style: solid; border-color: rgb(201, 76, 76);">
<?php //while ($row = $ReadTable->fetch_assoc()) { ?>
	
	<div class="row">

		<div class="col-md-2 ">
			<img src="imageuse/person/<?php  //echo $row['id'].".".$row['pictype'];?>" onerror="this.src='imageuse/person/def.jpg';" width="230px;" height="300px;" />
		</div>
		<div class="col-md-5 text-left">
			<B><font size = "8" style="margin-top:60px;color:#FF8C00"><?php  //echo $row['p_name'].'</font></br><font size = "8" style="margin-top:60px;color:#00FFFF">'.$row['unit_show'];?></font></B>
		</div>
		<div class="col-md-2 text-right">
			<B><font size = "7" style="margin-top:60px;color:#FF1493"><?php //echo $row['name_show'];?></font></B>
		</div>
		<div class="col-md-3 text-right">
			<img src="image_little/<?php  //echo $row['pic_code']."."."jpg"?>" class="p_random_little_gift_bg"  onerror="this.src='imageuse/person/gift.png';"/>
		</div>
	</div>
	
	
<?php //} ?>
	</marquee>-->
	
	
	<marquee behavior="scroll" direction="up" scrollamount="8" id="p_random_little_show_panel" >
<?php while ($row = $ReadTable->fetch_assoc()) { ?>
	
	
	<div style="border-style: solid; background-color:#FFFFFF;">
		<div class="row" style="margin-left:5px; margin-right:5px;">
			<div class="col-md-2 ">
				<img src="imageuse/person/<?php  echo $row['id'].".".$row['pictype'];?>" onerror="this.src='imageuse/person/def.jpg';" width="300px;" height="400px;" style="margin-top: 25px;"/>
			</div>
			<div class="col-md-5">
				<B><font size = "8" style="margin-top:60px;color:#FF8C00"><?php  echo $row['p_name'].'</font></br><font size = "8" style="margin-top:60px;color:#00FFFF">'.$row['unit_show'];?></font></B>
			</div>
			<div class="col-md-2 text-right">
				<B><font size = "7" style="margin-top:60px;color:#FF1493"><?php echo $row['name_show'];?></font></B>
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
	$("#p_random_little_start_bg").attr("width",Vw*1+" px;");
	//$("#p_random_little_start_bg").attr("src","imageuse\\random\\v"+Vranbg+".gif"); 
	
	$("#p_random_little_show_panel").attr("height",Vh*0.9+" px;");
	
	$(".p_random_little_gift_bg").attr("height",Vh*0.3+" px;");
	$(".p_random_little_gift_bg").attr("width",Vw*0.2+" px;");
</script>