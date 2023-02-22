<?php
include 'db.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Runtime Filter</title>
	<meta name="viewport" content="width-device-width, initial-sacale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudfare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		font-family: "Helvetic",sans-serif;
	}
	#filters {
		margin-left: 10%;
		margin-top: 2%;
		margin-bottom: 2%;
	}
</style>
</head>
<body>
	<div id="filters">
		<span>Fetch results by &nbsp;</span>
			<select name="supplier" id="supplier">
			<option value="" disabled="" selected="">Select Supplier</option>
			<option value="Supplier">Supplier</option>
			<option value="Whole Seller">Whole Seller</option>
			<option value="Steering type">Steering type</option>
		</select>
	</div>

	<!-- <div>
		<button id="filter-button">Filter Results</button>
	</div>
	<div>
		<label for="car-model">Car Model:</label>
		<select id="car-model">
		
		</select>
	</div>
	<div>
		<label for="car-sfx">Car SFX:</label>
		<select id="car-sfx">
			
		</select>
	</div>
	<div>
		<label for="car-variant">Car Variant:</label>
		<select id="car-variant">
			
		</select>
	</div>
	<div>
		<label for="color">Color:</label>
		<select id="color">
		</select>
	</div> -->


<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>Sr.no</th>
				<th>Name</th>
				<th>brand</th>
				<th>color</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$query = "SELECT * FROM post";
			$sum = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($sum)) {
				// code...
			}
			?>
			<tr>
				<td><?php echo $row['car_no']?></td>
				<td><?php echo $row['car_model']?></td>
				<td><?php echo $row['car_sfx']?></td>
				<td><?php echo $row['car_var']?></td>
				<td><img src="img/<?php echo $row['car_img']?>" class="img-responsive img-thumbnail" width="150"></td>
			</tr>
		</tbody>
	</table>
	<script>
		$(document).ready(function(){
			$("#supplier").on("change", function(){
				var value = $(this).val();

				$.ajax({
					url:"fetch.php",
					type: "POST",
					data: 'request=' + value,
					beforeSend:function(){
						$(".container").html("<span>Working...</span>");
					},
					success:function(data){
						$(".container").html(data);
					},
				});
			});
		});
	</script>
	
</div>
</body>
</html>
