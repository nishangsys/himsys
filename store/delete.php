<?php
include '../dbc.php';
require_once '../functions/functions.php';
session_start();
$_SESSION['table']=$_GET['id'];;
$today=date('d-m-Y');

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';;
}


	else {
		$roll=$_GET['id'];
		
		
?>
    


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pay Now</title>

        <link href="../style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>
<script type="text/javascript">
function doCalc(form) {
  
}
</script>

<script type="text/javascript">
function doCalc(form) {
		    form.bal.value = (((parseInt(form.stock.value)- parseInt(form.returnss.value))));

	    

}
</script>

<body>
<div class="right">
<div style="width:90%; background:#eee; margin:auto; border:1px outset#00F; overflow:hidden; ">
    

 <?PHP
 $ID=$_GET['id'];

	
  $query=mysql_query("select * from fixed_products where id='$ID'")or die(mysql_error());
while($row=mysql_fetch_array($query)){
	
 ?>
    
    <div class="clear"></div>
    
    <br />
    <h1 class="he" style="margin-top:-10px; text-align:center"> <?php echo $comp; ?>   <span style="color:#Ff0"></span></h1>
    <form method="post" action="">
    
   
    
    <table>
   
    <table>
      <tr><td>Product</td><td>
    <input type="text" name="product" value="<?php echo $row['product'];  ?>"  onBlur="doCalc(this.form)" readonly="readonly" /></td></tr>
     <tr><td>Discription</td><td>
    <input type="text" name="model" value="<?php echo $row['model'];  ?>" /></td></tr>
 
     <tr><td>Current Stock</td><td>
    <input type="text" name="stock" value="<?php echo $row['qty'];  ?>"  onBlur="doCalc(this.form)" readonly="readonly" /></td></tr>
    
  <tr><td>Quantity Removed</td><td><select name="returnss" onBlur="doCalc(this.form)" required>
					<option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($day=01;$day<=230;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
				</select></td></tr> 

    <tr><td>Reason for Return</td><td>
    <input type="text" name="reason" onBlur="doCalc(this.form)" /></td></tr>



<tr><td>New stock</td><td>
    <input type="text" name="bal"   style="background:#C30; color:#fff" required readonly   /></td></tr>
<tr><td></td><td>
    <button type="submit" name="date">SAVE AND LEAVE</button></td></tr>
    </table>
   </form>

</table>

<?php

if(isset($_POST['date'])){
	
									$product_save= $_POST['product'];
									$sector=$_POST['sector'];
								
									$model= $_POST['model'];
			
			$returns= $_POST['returnss'];
			$reason= $_POST['reason'];
			$stock= $_POST['stock'];
			$newstock=$stock-$returns;						
								
								$date=date('d-m-Y');
		$time=date('h:i:s');
		$month=date('m');
		$year=date('Y');
$one=mysql_query("UPDATE fixed_products SET
 qty ='$newstock' WHERE id = '".$_GET['id']."' ") or die(mysql_error()) ;
$sql =mysql_query( "INSERT INTO disburse set stock='$newstock',  item='$product_save',taken='$returns',current='$stock',discribe='$reason',status='3',date='$date',month='$month',year='$year',sentto='$sector'")or die(mysql_error())    ; 
   
   
	echo "<script>alert('Thank for your Patience . ')</script>";
echo '<meta http-equiv="Refresh" content="0; url=stockpage.php?remove_stocks">';
}
}

 }
?>
</div>