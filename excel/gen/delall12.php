
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

 

 echo $hist=$_GET['hist_id'];			
	  $company=$_GET['comp'];	
	    $tables=$_GET['table'];	 
		   $selec="select * from basket where id='$hist' ";
		   
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
				 $cf=mysql_query("SELECT * FROM products where product='$product' and category='$category' and serial='Bar'");
				 while($row=mysql_fetch_assoc($cf)){
					  $oldqty=$row['quatity'];
					   $newqty=$row['quatity']+1;
					 
				 }
				
				  $totqty=$oldqty+$qty;
				
					
	
			$back="INSERT into records set income='".$_SESSION['user_name']."', expense='$product',yr='$y', date='$date',month='$time',year='$qty',reason='deleted goods' ";			 
			 $runn=mysql_query ($back) or die (mysql_error());
			 //return to stocks
			 $return=mysql_query("UPDATE products set quatity='$totqty' where product='$product' AND category='$category' and serial='Bar'") or die(mysql_error());
			 
			
			$deletes=mysql_query ("delete from basket where id='$hist'") or die ('could not updated:'.mysql_error());; 


 
 echo '<meta http-equiv="Refresh" content="0; url= allcomsales.php?go='.$company.'&table='.$tables.'">';

		 }
			
		 
				
				?>
    
</div>


</body>
</html>

       <?php } ?>