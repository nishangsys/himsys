<?php 

include('../dbc.php');

 $get_sector=$_GET['sector'];
 $get_id=$_GET['id'];

mysql_query("delete from disburse where id= '$get_id' and sentto='$get_sector' ")or die(mysql_error());
	echo "<script>alert('Product Successfully Delete. Thank You')</script>";
	
	echo '<meta http-equiv="Refresh" content="0; url=validatethis.php?roll='.$get_sector.' ">';?>