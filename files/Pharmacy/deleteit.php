<?php 

include('includes/dbc.php');

 $get_sector=$_GET['sector'];
 $get_id=$_GET['id'];

mysql_query("delete from disburse where id= '$get_id'  ")or die(mysql_error());
	echo "<script>alert('Product Successfully Delete. Thank You')</script>";
	
	echo '<meta http-equiv="Refresh" content="0; url=validatethis.php?roll&supp='.$get_sector.' ">';?>