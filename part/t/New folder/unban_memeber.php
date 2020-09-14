<?php
include '../dbc.php';
if(isset($_GET['id'])){
	$id=$_GET['id'];
		 $ok=mysql_query("UPDATE members_times set level='1' where matricule='".$id."'") or die(mysql_error());
		 echo "<script>alert('".$id." Has been UNBANNED. Thank You')</script>";
		echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?mem_block">';
		 
	 }
?>