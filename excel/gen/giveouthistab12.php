
<?php
include '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){

header ("location: ../login.php");
echo "Error";
}
else {
   	
		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<script type="text/javascript">
function doCalc(form) {
  form.total.value = parseInt(form.newquantity.value) * parseInt(form.paid.value);
}
</script>
<body>

 
 <div class="right"> 

 <?php

 $tables=$_GET['db_table'];	
  $baskets=$_GET['db_basket'];

  $hist=$_GET['id'];	
  $area=$_GET['area'];	

  $ol=mysql_query("SELECT * from ".$tables." where num='$hist' and status='2'") or die(mysql_error());	
  if(mysql_num_rows($ol)>0){
	  
	  $ol=mysql_query("UPDATE ".$tables." SET status='1' where num='$hist' and status='2'") or die(mysql_error());
	  
	  	//check if table order is complete ---status=1;
	 $check_order=mysql_query("SELECT * from aorders where tab='$hist' and status='1' ") or die(mysql_error());
		if(mysql_num_rows($check_order)<1){
		   $insert_order=mysql_query("INSERT INTO aorders set tab='$hist',status='1' ")or die(mysql_error());
	   echo '<meta http-equiv="Refresh" content="0; url=bar_sales.php?table='.$hist.'&area='.$area.'&basket='.$baskets.'&dbtables='.$tables.'">';
		}
	   echo "<script>alert('SUCCESS. TABLE $hist has now being given out')</script>";
	     echo '<meta http-equiv="Refresh" content="0; url=bar_sales.php?table='.$hist.'&area='.$area.'&basket='.$baskets.'&dbtables='.$tables.'">';
  }
  else {
	  $ol=mysql_query("UPDATE ".$tables." SET status='2' where num='$hist' and status='1'") or die(mysql_error());
	    $ol1=mysql_query("DELETE FROM aorders where tab='$hist' and status='1'") or die(mysql_error());
	   echo "<script>alert('SUCCESS. TABLE $hist has now being checked out')</script>";
	  echo '<meta http-equiv="Refresh" content="0; url=bar_sales.php?table='.$hist.'&area='.$area.'&basket='.$baskets.'&dbtables='.$tables.'">';
  }
		 
		

		 
				
				?>
    
</div>

</body>
</html>

       <?php } ?>