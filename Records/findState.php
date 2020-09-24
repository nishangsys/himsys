<?php 
$country = intval($_GET['country']);

include '../includes/dbc.php';

// Check connection
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}

$query  = "SELECT  *  FROM subjects,levels WHERE subjects.prog_id='$country' AND subjects.level_id=levels.id GROUP BY subjects.level_id";
$result = mysqli_query($conn, $query);
?>
<select name="state" onchange="getCity(<?php echo $country?>,this.value)">
	<option>Select State</option>
	<?php while ($row = mysqli_fetch_array($result)) { ?>
	<option value=<?php echo $row['id']?>><?php echo $row['levels']?></option>
	<?php } ?>
</select>
