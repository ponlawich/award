<?PHP
	include("func.php");
	$dataBuff = new Cl_award();
	
	
	
			$ReadTable = $dataBuff->SQL_Select("	
											select 		fname,ftype,pname
											from   		picture
											where		status = 1
											and 		ptype = 'main'
											");	
			$row 		= $ReadTable->fetch_assoc();
			$VFimg		= $row['fname'].".".$row['ftype'];
			$VawName	= $row['pname'];
?>


	<div>
    		<img src="imageuse/them/<?PHP echo $VFimg; ?>" id="p_showmain_img"/>
    </div>
    <!--<p id="AreaTxt"></p>-->
     
    
<script type="text/javascript">     
	   
    var Vh	= $(window).height();
	var Vw	= $(window).width();
	
	//$("#AreaTxt").html("Size H:"+Vh+" W:"+Vw);
	$("#p_showmain_img").attr("height",Vh*0.97+" px;");
	//$("#p_showmain_img").attr("width",Vw*0.9+" px;");
	
	
	
	//$("#p_showmain_img").attr("height",Vh*1+" px;");
	//$("#p_showmain_img").attr("width",Vw*0.9+" px;");
	
</script>