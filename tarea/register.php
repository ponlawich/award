<?php
	include('connect.php');
	 
	$sql = "select * from person";
	$stmt = $conn_mysql->prepare($sql);		
	$stmt->execute();
	$result = $stmt->fetchAll();
	
	
	$sql1 = "select * from person_main";
	$stmt = $conn_mysql->prepare($sql1);		
	$stmt->execute();
	$result1 = $stmt->fetchAll();
	
?>
<html>
<head>
	<title>หน้าลงทะเบียน</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	 <!--  Datatable -->  
	   <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script> 
	   <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> 
	   <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script> 
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css"> 
       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"> 
      <!--  Datatable --> 
	
	<style>
		h1 {
			text-align: center;
		}
	</style>
	

	
</head>
<body>
	<div class="container">
		<h1>ลงทะเบียนเข้างาน</h1>
	</div>
<body style="padding: 20px;">
	<div class="row"> 
			<div id="" style="margin:auto; margin-top: 20px; font-size: 1.2em;padding: 10px;border-width: 2px; border-style: solid; border-color: #609;" align="center"class="col-md-6">
				<h3 style="color:#03F; margin-bottom:30px;">รายชื่อผู้มีสิทธิ์เข้าร่วมงาน</h3>
				<table class="table table-striped table-dark" id="Tmonitor2">
					<thead class="thead-light">
					<tr>
						<td style="display:none">ลำดับ</td>
						<td align="center">Name</td>
						<td align="center">Unit</td>
						<td align="center">Edit</td>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($result as $row) { ?>
						<tr align="center">
							<td style="display:none"></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['unit_show']; ?></td>
							<td>
								<button type="button" name="btnSend" class="btnSend btn btn-success">ลงทะเบียน</button>
								<input type="hidden" name="pk" value="<?= $row['pk']?>">
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>  
			</div>
		
		<div id="" style="margin:auto; margin-top: 20px; font-size: 1.2em;padding: 10px;border-width: 2px;border-style: solid; border-color: #609;" align="center"class="col-md-6">
			<h3 style="color:#03F; margin-bottom:30px;">รายชื่อผู้มาลงทะเบียน</h3>
			<table class="table table-striped table-dark" id="Tmonitor3">
				<thead class="thead-light">
				<tr>
					<td style="display:none">ลำดับ</td>
					<td align="center">Name</td>
					<td align="center">Unit</td>
					<td align="center">Edit</td>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($result1 as $row1) { ?>
					<tr align="center">
						<td style="display:none"</td>
						<td><?php echo $row1['name']; ?></td>
						<td><?php echo $row1['unit_show']; ?></td>
						<td>
							<button type="button" name="btnDelete" class="btnDelete btn btn-danger">ลบ</button>
							<input type="hidden" name="delete_pk" value="<?= $row1['pk']?>">
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	
	<script type="text/javascript">
		$(document).ready(function() {
			
			$(".btnSend").click(function() {
				var pk = $(this).siblings("input[name='pk']").val();
					//console.log(pk);
					$.ajax({
					   type: "POST",
					   url: "insert.php",
					   data: {pk},
					   success: function(json) {
							console.log(json);
						   
							result = JSON.parse(json);
							if(result.status == 1) // Success
							{
								alert(result.message); 
							}
							else // Err
							{
								alert(result.message);
							}
					   },
					   error: function(jhx, stat, error) {
						   console.log(jhx +":"+ stat +":"+ error);
					   }
					 });

			});
	
		});
		
		$(document).ready(function() {
			
			$(".btnDelete").click(function() {
				var delete_pk = $(this).siblings("input[name='delete_pk']").val();
					//console.log(pk);
					$.ajax({
					   type: "POST",
					   url: "delete.php",
					   data: {delete_pk},
					   success: function(json) {
							console.log(json);
						   
							result = JSON.parse(json);
							if(result.status == 1) // Success
							{
								alert(result.message); 
							}
							else // Err
							{
								alert(result.message);
							}
					   },
					   error: function(jhx, stat, error) {
						   console.log(jhx +":"+ stat +":"+ error);
					   }
					 });

			});
	
		});
		
		$(document).ready( function () {
			$('#Tmonitor2').DataTable();
			$('#Tmonitor3').DataTable();
		} );
	</script>
	
</body>
</html>