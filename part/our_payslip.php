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
<link href="style.css" type="text/css" rel="stylesheet" />

<style type="text/css" media="print">
  @page { size: landscape; }
</style>



</head>

<!---
<input type="button" value="Print Ticket"
onClick="window.print()"/>
------>
<body onload="window.print();">



<?php include 'header.php'; ?>
<h1>Cash Book for <?php echo date('F Y'); ?></h1>

    
    

    <?php
	$today=date('Y');
	$month=date('m');
	$cust="SELECT * from daily where daily.month='$month' and daily.year='$today'  ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
    <table style="width:100%">
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#; text-align:center; font-weight:bold">
    <td></td>
    <td>DATE</td>
    <td>Job No</td>
    <td>Job Description</td>
    
    <td>Job Owner</td>
    
    <td>Invoice No</td>
   
    <td>Income</td>
   <td>Expenditure</td>
     <td>Balance Due</td>
     <td>Remark</td>
    <?php while($row=mysql_fetch_assoc($run)){
	
		
		 ?>
    <tr>
      <?php
		if($num%2==0)
 {
     echo '<tr bgcolor="white">';
 }
 else
 {
    echo '<tr bgcolor="AliceBlue">';
 }
		
		?>
        <td><?php $num++; ?></td>
    
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['jobno']; ?></td>
    <td><?php echo $row['job']; ?></td>
        <td><?php echo $row['cust_id']; ?></td>

    
    <td><?php echo  $row['id'];?></td>
    
 
   <td><?php echo  number_format($row['rec']);?></td>
   <td><?php echo  number_format($row['exp']);?></td>
    
    <td><?php echo  abs($row['rec']-$row['exp']);?></td>
    
   

    </tr>
    
    
    <?php } ?>
    







</page>

   <?php }?>
</body>
</html>




