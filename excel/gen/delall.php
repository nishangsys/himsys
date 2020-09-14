
<?php
include '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){

header ("location: stocks.php");
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

 

  $hist=$_GET['hist_id'];			
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
		   $selec="select * from ".$db_basket." where id='$hist' ";
				$run=mysql_query ($selec) or die ('could not select:'.mysql_error());
				while ($row=mysql_fetch_array($run)){
					 $qty=$row['qty'];
					  $backed=$row['closing stocks'];
					 
					$product=$row['product'];					
					$salesman=$row['agent'];
					$price=$row['price'];
					$category=$row['category'];
										
					$hist_tot=$row['total'];
				 $cust=$row['ids'];	
				 $date=date('d-m-Y');
				 $time=date('h:i:s');	
				 $y=date('Y');
				 $user=$_SESSION['user_name'];	
				 $cff=mysql_query("SELECT * FROM products where product='$product'  and serial='".$serial."'") or die(mysql_error());
				 while($roww=mysql_fetch_assoc($cff)){
					$oldqty=$roww['quatity'];
					   $newqty=$roww['quatity']+1;
					 
				 }
				
				  $totqty=$oldqty+$qty;
				
					
	
			$back="INSERT into records set income='".$_SESSION['user_name']."', expense='$product',yr='$y', date='$date',month='$time',year='$qty',reason='deleted goods' ";			 
			 $runn=mysql_query ($back) or die (mysql_error());
			 //return to stocks
			 
			 $updatef=mysql_query ("UPDATE products set quatity='$newqty' where product='$product' and serial='".$serial."'") ;
			 //then remove from basket
			 
			$delete="delete from ".$db_basket." where id='$hist'"; 
$run=mysql_query ($delete) or die ('could not updated:'.mysql_error());

 echo "<script>alert('$product($category) has been successfully Removed. Thank You ')</script>";
 
 
 
 echo '<meta http-equiv="Refresh" content="0; url= allsales.php?area='.$section.'">';

		 }
			
		 
				
				?>
    
</div>


</body>
</html>

       <?php } ?>