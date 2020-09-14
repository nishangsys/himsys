<?php 

include('../dbc.php');

$get_id=$_GET['id'];

mysql_query("delete from fixed_products where id = '$get_id' ")or die(mysql_error());
	echo "<script>alert('Product Successfully Delete. Thank You')</script>";
	
	echo '<meta http-equiv="Refresh" content="0; url=dashboard.php?all_fixedstocks">';
