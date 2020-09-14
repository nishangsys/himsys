
<?php
//include 'dbc.php';
require_once 'functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){

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

   
    <?php include 'head.php';
	 ?>
 <div class="right"> 

 <?php

 $roll=$_GET['id'];
$youi=$_GET['idd'];

  $hist=$_GET['hist_id'];			
		 
		   $selec="select * from historique where hist_id='$hist' ";
				$run=mysql_query ($selec) or die ('could not select:'.mysql_error());
				while ($row=mysql_fetch_array($run)){
					$hist_qty=$row['price'];
					$item=$row['item'];
					$client=$row['name'];
					$salesman=$row['agent'];
					$qty=$row['price'];
					$category=$row['cate'];
					//echo $client;
					$hist_tot=$row['total'];
					$cust=$row['client_id'];
					
					$selec="select * from creditsales where client_id='$cust' order by creditsale_id  LIMIT 1  ";
				$run=mysql_query ($selec) or die ('could not select:'.mysql_error());
				while ($row=mysql_fetch_array($run)){
					 $TOTA=$row['total'];
					$QTY=$row['quantity'];
					
				}
				
					
					
					  $select="SELECT * from products where product='$item' AND category='$category' ";
					
					 
		 $runs=mysql_query ($select ) or die ('could not select:'.mysql_error());
		
		 
		   while ($row=mysql_fetch_array($runs)){
					$pro_qty=$row['quatity'];
					$pro_total=$row['total'];
					 $all=$pro_qty+$hist_qty;
					 $updated_total=$pro_total+$hist_tot;
					 
					
		 }
		 $all=$pro_qty+$hist_qty;	
//check credentials if this user have the right to delete that if the agent===username name	
			//echo $salesman;
			$user=$_SESSION['user_name'];
			$date=date("d/m/Y");
			$time=date("h:i:s");
			$user;
			if($user!=$salesman){
				 echo "<script>alert('You are not permitted to delete this item. Make sure you are the one that sold it')</script>";
			}
			
			else {
				
      	
 $DIF=$TOTA-$hist_tot;
  $diqty=$QTY-$qty;

  


		 
				   $select="update products set quatity='$all',total=' $updated_total' WHERE  product='$item' and category='$category' "; 
		 $runs=mysql_query ($select)  or die ('could not updated:'.mysql_error()); 
		 //if product table is updated then delete from the hist table



				
			$back="INSERT into records set income='$user', expense='$item', date='$date',month='$time',year='$qty',reason='deleted goods' ";
			
			 
			 $runn=mysql_query ($back) or die (mysql_error());
			 
			$delete="delete from historique where hist_id='$hist'"; 
$run=mysql_query ($delete) or die ('could not updated:'.mysql_error());

 $updatesales="UPDATE creditsales set total='$DIF', quantity='$diqty' where client_id='$cust'  AND date='$date' order by creditsale_id ASC ";
			
			 	$resu=mysql_query($updatesales) or die(mysql_error());
 
 $dele="delete from creditsales where client_id='$cust'  AND item='$item' AND cate='$category' AND quantity='$qty' LIMIT 1";
 $okl=mysql_query ($dele) or die ('could not updated:'.mysql_error());
 


 echo "<script>alert(STOCKS has been successfully Updated. Thank You ')</script>";
 		echo '<meta http-equiv="Refresh" content="0; url=sell.php?roll='.$youi.'>';

 
	 }
			}
}
		 
				
				?>
               
</div>

</body>
</html>
