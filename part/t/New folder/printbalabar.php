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
<title>Reception Balancesheet</title>
        <link href="../reception/style.css" rel="stylesheet" type="text/css" />
        <style>
		.box1{
			width:100px;
			height:30px;
			float:left;
			margin-left:40px;
			border:1px solid#000;
			text-align:center;
			font-weight:bold;
			font-size:16px;
		}
		.box2{
			width:250px;
			height:30px;
			float:left;
			font-size:16px;
			border:1px solid#000;
			text-align:center;
			
		}
		
		.box3{
			width:250px;
			height:30px;
			float:left;
			font-size:16px;
			border:1px solid#000;
			text-align:center;
			
		}
		.box4{
			width:100px;
			height:30px;
			float:left;
			
			border:1px solid#000;
			text-align:center;
			font-weight:bold;
		}
		
		</style>
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
    <h1><?php echo $clients; ?> Reception Balancesheet</h1>
    <h2><?php echo $AD ?></h2>
    <h2>Tel: <?php echo $TEL ?></h2>
    <h2>Month/Mois: <?php echo date('F'); ?></h2>
    </div></div>
    
    <div class="rechbod" style="border-bottom:none;">
    
    
   <?php
 if(isset($_POST['print'])){
	$month=$_POST['month'];
	$year=$_POST['finy'];
 $sele="SELECT SUM(rec),date,id FROM daily where month='$month' and year='$year' and area='0' GROUP BY date";
	$runs=mysql_query($sele) or die (mysql_error());
	
$num=1;

?>
<table>

 <tr style="background:#eee; padding:10PX 0PX; height:30px; color:#333; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>DATE</td>
    <td>INCOME</td>
    <TD>EXPENDITURE</TD>
    <td>BALANCE</td>
    
   
        
     <?php while($rows=mysql_fetch_assoc($runs)){
		 
	
		
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
    <td><?php echo $rows['date']; ?></td>
    <td><?php 
	$totin=$rows['SUM(rec)']+$rows['SUM(amt)'];
	echo number_format($totin);
	
	 ?> Frs</td>
    
    <td><?php echo number_format($rows['SUM(exp)']); ?> Frs</td>
    <td><?php echo number_format(($totin-$rows['SUM(exp)'])); ?> Frs</td>
   
    
    </tr>
    
    
	<?php } ?>
    
    <tr style=" border-bottom:1px solid#000; background:#fff" bgcolor="#FF0000">
    <td>.</td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
   <tr>
   <td>Total</td>
   <td></td>
   <td><?php  $sele="SELECT SUM(rec) FROM daily where month='$month' and year='$year'  and area='0' GROUP BY month";
	$runs=mysql_query($sele) or die (mysql_error());
	 while($rows=mysql_fetch_assoc($runs)){
		 
		 $ROW=$rows['SUM(rec)'];
		echo  number_format( $ROW);
	 }?> Frs</td>
     
     
   <td><?php  $sele="SELECT SUM(exp) FROM daily where month='$month' and year='$year'  and area='0' GROUP BY month";
	$runs=mysql_query($sele) or die (mysql_error());
	 while($rows=mysql_fetch_assoc($runs)){
		echo  number_format($seen=$rows['SUM(exp)']);
	 }?> Frs</td>
   <td style="border-bottom:1px double#000"><?php echo number_format($ROW-$seen); ?> Frs</td>
   
   </tr>
    </table>
    
<h1>Summary of other services </h1>
<?php
 $sele="SELECT SUM(total),reason,date,id,reason FROM daily where month='$month' and year='$year' and idds='15' GROUP BY reason";
	$runs=mysql_query($sele) or die (mysql_error());
	$num=1;

?>

<div class="box1">S/N</div><div class="box2">Item</div><div class="box3">Total Income</div>

<?php  while($rows=mysql_fetch_assoc($runs)){ ?>

 <div class="box1"><?php echo $num++; ?></div>
 <div class="box2"><?php echo $rows['reason']; ?></div>
 <div class="box3"><?php echo number_format($rows['SUM(total)']); ?></div>
 

<?php } ?>  
    </div>
    
</div>

</div>
   <br />
   
</body>
</html>
<?php }} ?>


