<?PHP


session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
    ?>
<!DOCTYPE html>
<html>
	
<head>
	<title>New Client</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
        	<META HTTP-EQUIV="REFRESH" CONTENT="10">

		
        <link href="../style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
        <style>
		 tr,td{
			 line-height:1.5;
        }
		</style>
       
</head>




<body>

<div class="right" style=" width:900px">
<h1>Combine Daily Income from All Departments</h1>
<div class="BOXC">

<i class="fa fa-print fa-2x "></i>

<a href="../admin/dailyprint.php" target="_blank" >Click here To print Today's Report</a> 

</div>

    
 <?php
	
	 $today=date('d-m-Y');
	
	
	$cust="SELECT * from daily where date='$today' and  area='0' and rec>0    ";
	$run=mysql_query($cust) or die (mysql_error());
	
	$num=1;
	
	
	?>
    <h1>Total Income from Hotel Lodging</h1>
    <table style="width:100%">
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>Room Taken</td>
    <td>Amount Paid </td>
     <td>Paid to</td>
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
         <td> 
		 
		 <a href=javascript:popcontact('aboutu.php?roll=<?php echo $row['paidto'] ?>&area=<?php echo $row['area'] ?>') style="color:#1188AA"><?php echo $row['paidto']; ?></a> </td>
    <td> <?php echo $row['date']; ?> </td>
 
   
    
    </tr>
    <?php } ?>
    
   
    </table>
    <hr>
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Income From Hotel Lodging</td>
        <td style="color:#fff"></td>

    <td style="color:#000; text-align:center"><?php
    
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
    <td>Table <?php echo $row['room'];;
	 ?></td>
        <td><?php echo number_format($row['rec']); ?> Frs</td>
    <td> <?php echo $row['time']; ?> </td>
    
    <td> <a href=javascript:popcontact('aboutu.php?roll=<?php echo $row['paidto'] ?>&area=<?php echo $row['area'] ?>') style="color:#1188AA"><?php echo $row['paidto']; ?></a> </td>
 
   
    
    </tr>
    <?php } ?>
    
   
    </table>
  
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Income From Bar</td>
        <td style="color:#fff"></td>

    <td style="color:#000; text-align:center"><?php
    
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
    
    
    
    
    
    
    
    <!-----------------------------------Bar supplies to Room------------------------------------------------>

   
    
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
    <td> <a href=javascript:popcontact('tou.php?roll=<?php echo $row['paidto'] ?>&area=<?php echo $row['area'] ?>') style="color:#1188AA"><?php echo $row['paidto']; ?></a> </td>
    
 
   
    
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
    <td> <a href=javascript:popcontact('tou.php?roll=<?php echo $row['paidto'] ?>&area=<?php echo $row['area'] ?>') style="color:#1188AA"><?php echo $row['paidto']; ?></a> </td>
    
 
   
    
    </tr>
    <?php } ?>
    
   
    </table>
  
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Bar Supplies to Rooms</td>
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
    
    
    
    
    
    
    
    
    
    
    
   
 <!-------------------------------restau income where araea is 3------------------>
 
     
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
    <td>Table <?php echo $row['room'];;
	 ?></td>
        <td><?php echo number_format($row['rec']); ?> Frs</td>
    <td> <?php echo $row['time']; ?> </td>
 
    <td><a href=javascript:popcontact('aboutu.php?roll=<?php echo $row['paidto'] ?>&area=<?php echo $row['area'] ?>') style="color:#1188AA"> <?php echo $row['paidto']; ?> </a></td>
 
    
    </tr>
    <?php } ?>
    
   
    </table>
  
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Income From Restaurant</td>
        <td style="color:#fff"></td>

    <td style="color:#000; text-align:center"><?php
    
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
    <td>Category </td>
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
    <td>Members contribn 
	 </td>
        <td><?php echo number_format($row['rec']); ?> Frs</td>
    <td> <?php echo $row['room']; ?> </td>
  <td><a href=javascript:popcontact('aboutu.php?roll=<?php echo $row['paidto'] ?>&area=<?php echo $row['area'] ?>') style="color:#1188AA"> <?php echo $row['paidto']; ?></a> </td>
 
   
    
    </tr>
    <?php } ?>
    
   
    </table>
  
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Income from Members </td>
        <td style="color:#fff"></td>

    <td style="color:#000; text-align:center"><?php
    
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
    <td>Payments By</td>
  
    
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
    <td>Purchases in Bar
	 </td>
        <td><?php echo number_format($row['total']); ?> Frs</td>
    <td> <?php echo $row['product']; ?> </td>
 
    <td><a href=javascript:popcontact('barspend.php?roll=<?php echo $row['paidto'] ?>&area=<?php echo $row['area'] ?>') style="color:#1188AA"> <?php echo $row['paidto']; ?></a> </td>
 
    
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
    <td>Item bought</td>
    <td>Payments By</td>
  
    
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
 
    <td><a href=javascript:popcontact('barspend.php?roll=<?php echo $row['paidto'] ?>&area=<?php echo $row['area'] ?>') style="color:#1188AA"> <?php echo $row['paidto']; ?></a> </td>
 
    
    </tr>
    <?php } ?>
    
   
    </table>
  
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Expense on Bar restaupen</td>
        <td style="color:#fff"></td>

    <td style="color:#000; text-align:center"><?php
    
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
    <td>Item bought</td>
    <td>Payments By</td>
  
    
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
 
    <td><a href=javascript:popcontact('restaupen.php?roll=<?php echo $row['paidto'] ?>&area=<?php echo $row['area'] ?>') style="color:#1188AA"> <?php echo $row['paidto']; ?></a> </td>

    
    </tr>
    <?php } ?>
    
   
    </table>
  
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Spending on Restaurant</td>
        <td style="color:#fff"></td>

    <td style="color:#000; text-align:center"><?php
    
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
    <td>Item </td>
  
    
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

    <td style="color:#000; text-align:center"><?php
    
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
    
			
		 		
</body>
</html>
<?php } ?>