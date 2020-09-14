<?php
require_once '../dbc.php';
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
<title>Receipts</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<div class="right">
   <table>
   <?php
   $gtec=date('Y');
   
	  $tot_stu="
	 SELECT COUNT(pof) as total from customers 	";
	$run=mysql_query($tot_stu) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 $all=$row['total'];
	}
	$totmale="
	 SELECT COUNT(category) as total from customers where category='male'";
	$run=mysql_query($totmale) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 $males=$row['total'];
	}
	$totfemale="
	 SELECT COUNT(category) as total from customers where category='female'";
	$run=mysql_query($totfemale) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		$fmales=$row['total'];
	}
	
	$tot_male="
	 SELECT COUNT(pof) as total from customers where gtec='$gtec' and pof='cameroonian' or pof='cameroon'	";
	$run=mysql_query($tot_male) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 $male=$row['total'];
	}
	$tot_female="
	 SELECT COUNT(pof) as total from customers where gtec='$gtec'  and pof!='cameroonian'	";
	$run=mysql_query($tot_female) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		$female=$row['total'];
		
		

	$i=1;
   ?>
   <h1><?php echo date('Y'); ?> five(5) Best Customers Stats</h1>
   <table>
  
   <tr style="background:#1188aa; color:#fff"><td>S/N</td><TD>Client's NAMES</td>
   <td>Total Number of Visits</td><td>Percentage</td><td>View detail</td></tr>
   
    <?php
	$year=date('Y');
	
   $tot="
	 SELECT COUNT(name),name,id from finances where year='$year' and yourid>0 GROUP BY name order by COUNT(name) desc LIMIT 5	";
	$run=mysql_query($tot) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		
		
   ?>
  <tr>
  
   <?PHP
	if($i%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#FFF; height:30px'>";
	}
	?>
  <td><?php echo $i++; ?></td>
  <td><?php echo $row['name']; ?></td>
<td><?php echo $row['COUNT(name)']; ?> Times</td>
<td><?php  $tota=($row['COUNT(name)']/$all)*100;
echo number_format((float)($tota),2,'.','') ?> %</td>
<td>      <a href=javascript:popcontact('myvisits.php?see=<?php echo $row['id'] ?>') style="#1188AA">Detail!</a></td>
</td>
<?php }?>
</table>
   <h1>Demographic statistics for the <?php echo $gtec; ?> <a href="adminpage.php?2" style="color:#Fff;background:#1188aa; border-right:1px solid#fff;  padding:10px 10px">See Digrams 1 </a> <a href="adminpage.php?3" style="background:#1188aa; color:#ff0; padding:10px 10px">See Digrams 2 </a></h1><br />
   <table>
   
   <tr style="color:#FFF; height:50px; padding:10px 0px; background:#1188aa"><td>S/N</td><td>Description</td><td>Number</td><td>Percentage</td></tr>

<tr ><td><?php echo $i++; ?></td><td> Total Number of Registered customers</td><td><?php echo $all; ?></td><td>100%</td></tr>

<tr style="background:#eee"><td><?php echo $i++; ?></td><td> Total Number of Cameroonians</td><td><?php echo $male; ?></td><td><?php echo round(($male/$all)*100);  ?> %  </td></tr>

<tr><td><?php echo $i++; ?></td><td> Total Number of Foreigners</td><td><?php echo $female; ?></td><td><?php echo round(($female/$all)*100); ?> % </td></tr>

<?php }?>

<tr style="background:#eee"><td><?php echo $i++; ?></td><td> Total Number of Male</td><td><?php echo $males; ?></td><td><?php echo round(($males/$all)*100);  ?> %  </td></tr>

<tr><td><?php echo $i++; ?></td><td> Total Number of Female</td><td><?php echo $fmales; ?></td><td><?php echo round(($fmales/$all)*100); ?> % </td></tr>

<?php 
$tot_female="
	 SELECT  * from customers 	";
	$run=mysql_query($tot_female) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 $female=$row['total'];
	}
	
?>

<tr style="background:#333; color:#FFF"><td> NATIONALITY STATS</td></tr>


<?php


$ind="
	 SELECT COUNT(pof),pof  from customers GROUP by pof	";
	$runs=mysql_query($ind) or die (mysql_error());
	
	?>
<tr ><td></td><td>Country</td><td>Number OF visitors</td><td>Percentage </td></tr>
<?php

	
	while($row=mysql_fetch_assoc($runs)){
		 
	
	
	?>

<tr style="background:#eee"><td><?php echo $i++; ?></td><td> <?php echo $row['pof']; ?>
 </td><td ><?php echo $row['COUNT(pof)']; ?></td><td style="color:#f00">
 <?php echo round(($row['COUNT(pof)']/$all)*100) ?>% </td></tr>

<?php } ?>
</table>
<table>
</table>
</div>

  
</body>
</html>
<?php } ?>


