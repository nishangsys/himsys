<?php
include  '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
	$day=$_POST['date'];
	$sec=$_POST['sector'];
	
	
	if($day<10){
	$date="0".$day;
	}
	else {
		$date=$day;
	}
	
	
	if($sec==0){
	$n='RECEPTION';
	}
	else if ($sec==10){
		$n='RESTAURANT';
	}
	else if ($sec==15){
		$n='BAR';
	}
	else if ($sec==2){
		$n='BOUCCAROU';
	}
	else if ($sec==17){
		$n='RENTALS';
	}
	else if ($sec==18){
		$n='VIP BAR/ NIGHT CLUB';
	}
	else if ($sec==90){
		$n='RESTAURANT IN THE BAR';
	}
	$month=$_POST['month'];
	$year=$_POST['year'];
	$rdate=$date."-".$month."-".$year;
	 $today=$rdate;
	 
	
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
    <h1><?php echo $clients; ?> </h1>
    <h2><?php echo $AD ?></h2>
    <h2>Tel: <?php echo $TEL ?></h2>
    
    </div></div>
    
    <div class="rechbod" style="border-bottom:none;">
    
    <h1><?PHP echo $n; ?> Dialy Reports for <?php echo $today; ?></h1>
  
    <?php
	
	if($sec==90){
	
		$cust="SELECT room,time,SUM(rec),reason,paidto from daily where idds='10'  and date='$today' GROUP BY room,paidto,reason    order by id DESC ";
	$run=mysql_query($cust) or die (mysql_error());
	}
	else {	
	$cust="SELECT room,time,SUM(rec),reason,paidto from daily where rec!=0  and date='$today' and area='$sec'  GROUP BY room,paidto,reason   order by id DESC ";
	$run=mysql_query($cust) or die (mysql_error());
	}
	
	$num=1;
	
	
	?>
    <table>
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>Facility</td>
    <td>Amount Received</td>
    
     <TD>Reason</TD>
     <TD>Paidto</TD>
    
    
    <?php while($row=mysql_fetch_assoc($run)){
		$agen=$row['agent'];
		
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
    <td><?php echo $row['room']; ?></td>
        <td><?php echo number_format($row['SUM(rec)']); ?> Frs</td>
    <td> <?php echo $row['reason']; ?> </td>
	
     
      <td> <?php echo $row['paidto']; ?> </td>
 
   
    
    </tr>
    <?php } ?>
    
   
    </table>
    <hr>
    <table>
    <tr style=" margin-left:-70px">
    <td >Total Income at <?PHP echo $n; ?> </td>
        <td style="color:#fff"></td>

    <td style="color:#000; text-align:center"><?php
	
	
	if($sec==90){
		
		///////////discount\
		
		
		$d="SELECT SUM(discount) from daily where date='$today' and idds='10' GROUP BY date";
	$m=mysql_query($d) or die (mysql_error());	
	while($rb=mysql_fetch_assoc($m)){
		 number_format($discount=$rb['SUM(discount)']);
	}
	
		$cust1="SELECT SUM(rec) from daily where date='$today' and idds='10' GROUP BY date";
	$run=mysql_query($cust) or die (mysql_error());	
	while($row2=mysql_fetch_assoc($run)){
		echo number_format($ans=($row2['SUM(rec)']-$discount));
		
	}
	}
	else {	
		$d="SELECT SUM(discount) from daily where date='$today' and area='$sec'  GROUP BY date";
	$m=mysql_query($d) or die (mysql_error());	
	while($rb=mysql_fetch_assoc($m)){
		number_format($discount=$rb['SUM(discount)']);
	}
	$cust1="SELECT SUM(rec) from daily where date='$today' and area='$sec'  GROUP BY date ";
	$run=mysql_query($cust1) or die (mysql_error());	
	while($row2=mysql_fetch_assoc($run)){
		echo number_format(($ans=$row2['SUM(rec)'])-$discount);
		
	}
	}
    
	
	?></td>

    <td></td>

    </tr>
    
    </table>  
    
    
    
    
    
    
    
    
    
    
     </div>
    
</div>

</div>
   <br />
   
</body>
</html>
<?php }  ?>


