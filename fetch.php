
<?php
include 'db.php';

if(isset($_POST['request'])){

    $request = $_POST['request'];
	$sql = "SELECT * FROM post WHERE car_no = '$request'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
?>

<table class="table">

	<?php
	if($count){
?>
<thead>
	<tr>
		<th>Sr.no</th>
		<th>Name</th>
		<th>brand</th>
		<th>color</th>
	</tr>
	<?php
} else 
{
	echo 'Sorry! no record found';
  }
?>
</thead>
<tbody>
	<?php
	while($row = mysqli_fetch_assoc($result)){

	?>
		<tr>
				<td><?php echo $row['car_no']; ?></td>
				<td><?php echo $row['car_model']; ?></td>
				<td><?php echo $row['car_sfx']; ?></td>
				<td><?php echo $row['car_var']; ?></td>
				<td><img src="img/<?php echo $row['car_img']; ?>" class="img-responsive img-thumbnail" width="150"></td>
			</tr>
			<?php
		}
			?>
</tbody>
</table>
<?php
}
?>

<script>
	$('#submit-filter').on('click', function() {
  // Get selected values from major and minor selections
  var supplier = $('#supplier-select').val();
  var wholeSeller = $('#whole-seller-select').val();
  var steeringType = $('#steering-type-select').val();
  var carModel = $('#car-model-select').val();
  var carSFX = $('#car-sfx-select').val();
  var carVariant = $('#car-variant-select').val();
  var color = $('#color-select').val();
</script>