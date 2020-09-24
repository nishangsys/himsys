<?php 
$countryId = intval($_GET['country']);
$stateId   = intval($_GET['state']);

include '../includes/dbc.php';
$query  = "SELECT * FROM subjects WHERE prog_id = '$countryId' AND level_id = '$stateId'";
$result = mysqli_query($conn, $query);

?>
<select name="city">
	<option>Select City</option>
	<?php while($row = mysqli_fetch_array($result)) { ?>
	<option value=<?php echo $row['id']?>><?php echo $row['title']?></option>
	<?php } ?>
</select>
