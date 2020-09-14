
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

 $section=$_GET['area'];

if($section=='20' or $section=='15'){
 $section;
	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	$namess='Bar';
	
}

if($section=='20' or $section=='9'){
 $section;
	$a_area='9';
	$page='../sales/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	$namess='Bar';
	
}
if($section=='20' or $section=='10'){
		 $dashbd;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
	$serial='Restau';
	$db_basket='restau_basket';
	$namess='Restaurant';
	
}

if($section=='20' or $section=='2'){
		 $dashbd;

	$a_area='2';
	$page='../bauca/baucapage.php';
	$db_table='bauca_tables';
	$serial='Bouccarau';
	$db_basket='bauca_basket';
	$namess='Bouccarou/ Restau Bar';
	
}
if($section=='20' or $section=='18'){
		 $dashbd;

	$a_area='18';
	$page='../VIP/clubpage.php';
	$db_table='other_tables';
	$serial='VIP';
	$db_basket='other_basket';
	$namess='VIP Bar';
	
	
}

  $ol=mysql_query("SELECT * from ".$tables." where num='$hist' and status='2'") or die(mysql_error());	
  if(mysql_num_rows($ol)>0){
	  
	  $ol=mysql_query("UPDATE ".$tables." SET status='1' where num='$hist' and status='2'") or die(mysql_error());
	  
	  	//check if table order is complete ---status=1;
	 $check_order=mysql_query("SELECT * from aorders where tab='$hist' and status='1' ") or die(mysql_error());
		if(mysql_num_rows($check_order)<1){
		   $insert_order=mysql_query("INSERT INTO aorders set tab='$hist',status='1' ")or die(mysql_error());
	   echo '<meta http-equiv="Refresh" content="0; url=bar_sales.php?tables='.$hist.'&area='.$a_area.'&basket='.$baskets.'&dbtables='.$tables.'">';
		}
	 
	     echo '<meta http-equiv="Refresh" content="0; url=bar_sales.php?tables='.$hist.'&area='.$a_area.'&basket='.$baskets.'&dbtables='.$tables.'">';
  }
  else {
	  $ol=mysql_query("UPDATE ".$tables." SET status='2' where num='$hist' and status='1'") or die(mysql_error());
	    $ol1=mysql_query("DELETE FROM aorders where tab='$hist' and status='1'") or die(mysql_error());
	  
	  echo '<meta http-equiv="Refresh" content="0; url='.$page.'">';
  }
		 
		

		 
				
				?>
    
</div>

</body>
</html>

       <?php } ?>