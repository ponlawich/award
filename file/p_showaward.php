<?PHP
	include("func.php");
	$dataBuff = new Cl_award();
	
	
	
			$ReadTable = $dataBuff->SQL_Select("	
											select 		fname,ftype,pname
											from   		picture
											where		status = 1
											and 		ptype = 'award'
											");	
			$row 		= $ReadTable->fetch_assoc();
			$VFimg		= $row['fname'].".".$row['ftype'];
			$VawName	= $row['pname'];
?>

	<div>
    	<div>
    		<img src="imageuse/award/<?PHP echo $VFimg; ?>" id="p_showaward_img"/>
       	</div>
        <div class="row" style="padding: 10px;">
        	<p align="center"><font size="72pt" color="#00FFFF" style="text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;"><?PHP echo $VawName; ?></font></p>
        </div>
    </div>
    <p id="AreaTxt"></p>
     
    
<script type="text/javascript">     
	   
    var Vh	= $(window).height();
	var Vw	= $(window).width();
	/*
	$("#p_showaward_img").attr("height",((Vh*0.6)*2));
	$("#p_showaward_img").attr("width",((Vw*0.4)*2));
	*/
	//$("#p_showaward_img").attr("height","620 px;");
	$('#p_showaward_img').attr("height",Vh*0.7+" px;");
	
	
	//$('#p_showmain_img').height((Vh*0.6)*2);
	//$('#p_showmain_img').width((Vw*0.4)*2);
	
</script>