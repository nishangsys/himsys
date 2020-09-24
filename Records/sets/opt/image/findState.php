<?php 
$country = intval($_GET['country']);
$conn    = new mysqli("localhost","root","","aa");

// Check connection
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}

$query  = "SELECT id,statename FROM state WHERE countryid='$country'";
$result = mysqli_query($conn, $query);
?>
<select name="state" onchange="getCity(<?php echo $country?>,this.value)">
	<option>Select State</option>
	<?php while ($row = mysqli_fetch_array($result)) { ?>
	<option value=<?php echo $row['id']?>><?php echo $row['statename']?></option>
	<?php } ?>
</select>
