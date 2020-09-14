<?php
include  '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipt</title>
<link href="../style.css" type="text/css" rel="stylesheet" />
</head>

<body onload="window.print();">

<?php 


$cus1="SELECT * from client ";
$run1=mysql_query($cus1) or die (mysql_error());
 while ($rows=mysql_fetch_assoc($run1)){
	 $clients=$rows['name'];
	 $AD=$rows['address'];
	 $TEL=$rows['as1'];
	$vil=$rows['as2'];
 }


?>

<div class="receipt">

<div class="eachrec" style="border-bottom:none;"  >
	<div class="rechead">
    <img src="../img/logo.jpg" />
    <div class="oth">
    <h1><?php echo $clients; ?> Daily Records</h1>
    <h2><?php echo $AD ?></h2>
    <h2>Tel: <?php echo $TEL ?></h2>
    <h2>Month/Mois: <?php echo date('F'); ?></h2>
    </div></div>
    
    <div class="rechbod" style="border-bottom:none;">
    
    
 <?php
	
	 $today=date('d-m-Y');
	
	
	$cust="SELECT * from daily where date='$today' and  area='0' and rec>0   ";
	$run=mysql_query($cust) or die (mysql_error());
	
	$num=1;
	
	
	?>
    <h1>Total Income from Hotel Lodging</h1>
    <table>
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>Room Taken</td>
    <td>Amount Paid </td>
    <td>Date</td>
  
    
    <?php while($row=mysql_fetch_assoc($run)){
		
		
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#ccc; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td>Room <?php echo $row['room'];;
	 ?></td>
        <td><?php echo number_format($row['rec']); ?> Frs</td>
    <td> <?php echo $row['date']; ?> </td>
 
   
    
    </tr>
    <?php } ?>
    
   
    </table>
    <hr>
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Income From Hotel Lodging</td>
        <td style="color:#fff"></td>

    <td style="color:#fff; background:#666;text-align:center"><?php
    
	 $today=date('d-m-Y');
	
	$cust="SELECT SUM(rec) as total from daily where date='$today' and  area='0'  ";
	$run=mysql_query($cust) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 echo $totalhotel=number_format($row['total'])."&nbsp; Frs";;
	}
	?></td>

    <td></td>

    </tr>
    
    </table>
    
<!-----------------------------------second table------------------------------------------------>

   
    
 <?php
	
	 $today=date('d-m-Y');
	
	
	$cust="SELECT * from daily where date='$today' and  area='2' and rec>0    ";
	$run=mysql_query($cust) or die (mysql_error());
	
	$num=1;
	
	
	?>
    <h1>Total Income from Bar/ Snack</h1>
    <table>
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>Table Taken</td>
    <td>Amount Paid </td>
    <td>Time</td>
  
    
    <?php while($row=mysql_fetch_assoc($run)){
		
		
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#ccc; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td>Table <?php echo $row['room'];;
	 ?></td>
        <td><?php echo number_format($row['rec']); ?> Frs</td>
    <td> <?php echo $row['time']; ?> </td>
 
   
    
    </tr>
    <?php } ?>
    
   
    </table>
  
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Income From Bar</td>
        <td style="color:#fff"></td>

    <td style="color:#fff; background:#666;text-align:center"><?php
    
	 $today=date('d-m-Y');
	
	$cust="SELECT SUM(rec) as total from daily where date='$today' and  area='2' and rec>0  ";
	$run=mysql_query($cust) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 echo $totalbar=number_format($row['total'])."&nbsp; Frs";;
	}
	?></td>

    <td></td>

    </tr>
    
    </table>
    <hr />
   
 <!-------------------------------restau income where araea is 3------------------>
 
   
    
 <?php
	
	 $today=date('d-m-Y');
	
	
	$cust="SELECT * from daily where date='$today' and  area='2' and  paidtou='room services' and owed>0    ";
	$run=mysql_query($cust) or die (mysql_error());
	
	$num=1;
	
	
	?>
    <h1>Bar Supplies to Rooms/ Room services</h1>
    <table>
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>Room Supplied</td>
    <td>Cost of Drinks</td>
    <td>Supplier</td>
    
  
    
    <?php while($row=mysql_fetch_assoc($run)){
		
		
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#ccc; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td>Room <?php echo $row['room'];;
	 ?></td>
        <td><?php echo number_format($row['owed']); ?> Frs</td>
    <td> <?php echo $row['paidto']; ?> </td>
    
    
    
    </tr>
    <?php } ?>
    
   
    </table>
  
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Bar Supplies to Rooms</td>
        <td style="color:#fff"></td>

    <td style="color:#f00; text-align:center"><?php
    
	 $today=date('d-m-Y');
	
	$cust="SELECT SUM(owed) as total from daily where  date='$today' and  area='2' and  paidtou='room services'   ";
	$run=mysql_query($cust) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 echo $totalbar=number_format($row['total'])."&nbsp; Frs";;
	}
	?></td>

    <td></td>

    </tr>
    
    </table>
    <hr />
    
       
    <!-----------------------------------Restauarant supplies to room ------------------------------------------------>

   
    
 <?php
	
	 $today=date('d-m-Y');
	
	
	$cust="SELECT * from daily where date='$today' and  area='3' and  paidtou='room services' and owed>0    ";
	$run=mysql_query($cust) or die (mysql_error());
	
	$num=1;
	
	
	?>
    <h1>Restaurant Supplies to Rooms/ Room services</h1>
    <table>
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>Room Supplied</td>
    <td>Cost of Drinks</td>
    <td>Supplier</td>
    
  
    
    <?php while($row=mysql_fetch_assoc($run)){
		
		
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#ccc; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td>Room <?php echo $row['room'];;
	 ?></td>
        <td><?php echo number_format($row['owed']); ?> Frs</td>
    <td> <?php echo $row['paidto']; ?> </td>
    
 
   
    
    </tr>
    <?php } ?>
    
   
    </table>
  
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Restaurant Supplies to Rooms</td>
        <td style="color:#fff"></td>

    <td style="color:#f00; text-align:center"><?php
    
	 $today=date('d-m-Y');
	
	$cust="SELECT SUM(owed) as total from daily where  date='$today' and  area='3' and  paidtou='room services'   ";
	$run=mysql_query($cust) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 echo $totalbar=number_format($row['total'])."&nbsp; Frs";;
	}
	?></td>

    <td></td>

    </tr>
    
    </table>
    <hr />
    
    
    
    
    
    
    
    
    
    
 
     
 <?php
	
	 $today=date('d-m-Y');
	
	
	$cust="SELECT * from daily where date='$today' and  area='3' and rec>0    ";
	$run=mysql_query($cust) or die (mysql_error());
	
	$num=1;
	
	
	?>
    <h1>Total Income from Restaurant</h1>
    <table>
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>Table Taken</td>
    <td>Amount Paid </td>
    <td>Time</td>
  
    
    <?php while($row=mysql_fetch_assoc($run)){
		
		
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#ccc; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td>Table <?php echo $row['room'];;
	 ?></td>
        <td><?php echo number_format($row['rec']); ?> Frs</td>
    <td> <?php echo $row['time']; ?> </td>
 
   
    
    </tr>
    <?php } ?>
    
   
    </table>
  
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Income From Restaurant</td>
        <td style="color:#fff"></td>

    <td style="color:#fff; background:#666;text-align:center"><?php
    
	 $today=date('d-m-Y');
	
	$cust="SELECT SUM(rec) as total from daily where date='$today' and  area='3' and rec>0  ";
	$run=mysql_query($cust) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 echo $totalresto=number_format($row['total'])."&nbsp; Frs";;
	}
	?></td>

    <td></td>

    </tr>
    
    </table>
    <hr />
    
    
 
  <!-----------------------INCOME FROM SWIMMING POOL----------------------------->
    
        
 <?php
	
	 $today=date('d-m-Y');
	
	
	$cust="SELECT * from daily where date='$today' and  area='4'    ";
	$run=mysql_query($cust) or die (mysql_error());
	
	$num=1;
	
	
	?>
    <h1>Total Income from swimming pool</h1>
    <table>
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>Item</td>
    <td>Members Contribution </td>
    <td>Package </td>
  
    
    <?php while($row=mysql_fetch_assoc($run)){
		
		
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#ccc; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td>Members contribution 
	 </td>
        <td><?php echo number_format($row['rec']); ?> Frs</td>
    <td> <?php echo $row['room']; ?> </td>
 
   
    
    </tr>
    <?php } ?>
    
   
    </table>
  
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Income from Members </td>
        <td style="color:#fff"></td>

    <td style="color:#fff; background:#666;text-align:center"><?php
    
	 $today=date('d-m-Y');
	
	$cust="SELECT SUM(rec) from daily where date='$today' and  area='4'    ";
	$run=mysql_query($cust) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 echo $totalbarexp=number_format($row['SUM(rec)'])."&nbsp; Frs";;
	}
	?></td>

    <td></td>

    </tr>
    
    </table>
    <hr />  
    
    
     <!-----------------------INCOME FROM ADDED SERVICES----------------------------->
    
        
 <?php
	
	 $today=date('d-m-Y');
	
	
	$cust="SELECT * from daily where date='$today' and  idds='15'    ";
	$run=mysql_query($cust) or die (mysql_error());
	
	$num=1;
	
	
	?>
    <h1>Total Added Room Services</h1>
    <table>
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>Item</td>
    
    <td>Amount Received </td>
   <td>Paid to</td>
  
    
    <?php while($row=mysql_fetch_assoc($run)){
		
		
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#ccc; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td> <?php echo $row['reason']; ?>  </td>
	 </td>
        <td><?php echo number_format($row['rec']); ?> Frs</td>
    
  <td> <?php echo $row['paidto']; ?></td>
 
   
    
    </tr>
    <?php } ?>
    
   
    </table>
  
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Income from Members </td>
        <td style="color:#fff"></td>

    <td style="color:#000; text-align:center"><?php
    
	 $today=date('d-m-Y');
	
	$cust="SELECT SUM(rec) from daily where date='$today' and  idds='15'    ";
	$run=mysql_query($cust) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 echo $totalbarexp=number_format($row['SUM(rec)'])."&nbsp; Frs";;
	}
	?></td>

    <td></td>

    </tr>
    
    </table>
    <hr />
    
      <!-----------------------Purchase for the snack bar----------------------------->
    
        
 <?php
	
	 $today=date('d-m-Y');
	
	
	$cust="SELECT * from expense where date='$today'     ";
	$run=mysql_query($cust) or die (mysql_error());
	
	$num=1;
	
	
	?>
    <h1>Total Purchases for the Bar</h1>
    <table>
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>Spending on Bar</td>
    <td>Amount Spent </td>
    <td>Item bought</td>
    
    
    <?php while($row=mysql_fetch_assoc($run)){
		
		
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#ccc; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td>Purchases of Drinks
	 </td>
        <td><?php echo number_format($row['total']); ?> Frs</td>
    <td> <?php echo $row['product']; ?> </td>
 
   
    
    </tr>
    <?php } ?>
    
   
    </table>
  
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Purchase of Drinks</td>
        <td style="color:#fff"></td>

    <td style="color:#000; text-align:center"><?php
    
	 $today=date('d-m-Y');
	
	$cust="SELECT SUM(total) from expense where date='$today'   ";
	$run=mysql_query($cust) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 echo $totalbarexp=number_format($row['SUM(total)'])."&nbsp; Frs";;
	}
	?></td>

    <td></td>

    </tr>
    
    </table>
    
    
    
    
    
    <hr />
    
    
    
     
    
    
    
    
    
    
    
    
    <!-----------------------Expense on snack bar----------------------------->
    
        
 <?php
	
	 $today=date('d-m-Y');
	
	
	$cust="SELECT * from daily where date='$today' and  area='2' and cust_id='bar'    ";
	$run=mysql_query($cust) or die (mysql_error());
	
	$num=1;
	
	
	?>
    <h1>Total Expense on the Bar</h1>
    <table>
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>Spending on Bar</td>
    <td>Amount Spent </td>
    <td>Area of Spending</td>
  
    
    <?php while($row=mysql_fetch_assoc($run)){
		
		
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#ccc; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td>Spending on Bar
	 </td>
        <td><?php echo number_format($row['exp']); ?> Frs</td>
    <td> <?php echo $row['time']; ?> </td>
 
   
    
    </tr>
    <?php } ?>
    
   
    </table>
  
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Expense on Bar</td>
        <td style="color:#fff"></td>

    <td style="color:#fff; background:#666;text-align:center"><?php
    
	 $today=date('d-m-Y');
	
	$cust="SELECT SUM(exp) from daily where date='$today' and  area='2' and cust_id='bar'  ";
	$run=mysql_query($cust) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 echo $totalbarexp=number_format($row['SUM(exp)'])."&nbsp; Frs";;
	}
	?></td>

    <td></td>

    </tr>
    
    </table>
    
    
    
    
    
    <hr />
    <!-----------------------Expense on Restaurant----------------------------->
    
        
 <?php
	
	 $today=date('d-m-Y');
	
	
	$cust="SELECT * from daily where date='$today' and  area='3' and cust_id='restau' and room=''    ";
	$run=mysql_query($cust) or die (mysql_error());
	
	$num=1;
	
	
	?>
    <h1>Total Expense on the Restaurant</h1>
    <table>
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>Item</td>
    <td>Amount Spent </td>
    <td>Area of Spending</td>
  
    
    <?php while($row=mysql_fetch_assoc($run)){
		
		
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#ccc; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td>Spending on Restaurant
	 </td>
        <td><?php echo number_format($row['exp']); ?> Frs</td>
    <td> <?php echo $row['time']; ?> </td>
 
   
    
    </tr>
    <?php } ?>
    
   
    </table>
  
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Expense Restaurant</td>
        <td style="color:#fff"></td>

    <td style="color:#fff; background:#666; text-align:center"><?php
    
	 $today=date('d-m-Y');
	
	$cust="SELECT SUM(exp) from daily where date='$today' and  area='3' and cust_id='restau' and room=''   ";
	$run=mysql_query($cust) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 echo $totalbarexp=number_format($row['SUM(exp)'])."&nbsp; Frs";;
	}
	?></td>

    <td></td>

    </tr>
    
    </table>
    
    
    
    
     <hr />
    <!-----------------------Other Spendingd----------------------------->
    
        
 <?php
	
	 $today=date('d-m-Y');
	
	
	$cust="SELECT * from daily where date='$today' and  area='123'    ";
	$run=mysql_query($cust) or die (mysql_error());
	
	$num=1;
	
	
	?>
    <h1>Total Expense on Other Expenses</h1>
    <table>
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>Item</td>
    <td>Amount Spent </td>
    <td>Area of Spending</td>
  
    
    <?php while($row=mysql_fetch_assoc($run)){
		
		
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#ccc; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td>Spending 
	 </td>
        <td><?php echo number_format($row['exp']); ?> Frs</td>
    <td> <?php echo $row['time']; ?> </td>
 
   
    
    </tr>
    <?php } ?>
    
   
    </table>
  
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Other Expense </td>
        <td style="color:#fff"></td>

    <td style="color:#fff; background:#666; text-align:center"><?php
    
	 $today=date('d-m-Y');
	
	$cust="SELECT SUM(exp) from daily where date='$today' and  area='123'    ";
	$run=mysql_query($cust) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 echo $totalbarexp=number_format($row['SUM(exp)'])."&nbsp; Frs";;
	}
	?></td>

    <td></td>

    </tr>
    
    </table>
    <hr />
    
    
    
  </div>
  </tr>
  </tr>
     </div>
    
</div>

</div>
   <br />
   
</body>
</html>
<?php } ?>


