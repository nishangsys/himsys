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
        <link href="../reception/style.css" rel="stylesheet" type="text/css" />
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
    <h1><?php echo $clients; ?> General Balancesheet</h1>
    <h2><?php echo $AD ?></h2>
    <h2>Tel: <?php echo $TEL ?></h2>
    <h2>Month/Mois: <?php echo date('F'); ?></h2>
    </div></div>
    
    <div class="rechbod" style="border-bottom:none;">
    
    
   <?php
 if(isset($_POST['print'])){
	$month=$_POST['month'];
	$year=$_POST['finy'];
 $sele="SELECT SUM(rec),SUM(exp),date,id FROM daily where month='$month' and year='$year' GROUP BY date";
	$runs=mysql_query($sele) or die (mysql_error());
	
$num=1;

?>
<table>

 <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>DATE</td>
    <td>INCOME</td>
    <TD>EXPENSE</TD>
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
	
	 $BOTH=$rows['SUM(rec)'];
	echo number_format($BOTH); ?> Frs</td>
    
    <td><?php echo number_format($totalexp=$rows['SUM(exp)']); ?> Frs</td>
    <td><?php echo number_format(($BOTH-$totalexp)); ?> Frs</td>
   
    
    </tr>
    
    
	<?php } ?>
    
    <tr style=" border-bottom:1px solid#000; background:#fff" bgcolor="#FF0000">
    <td>.</td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
   <tr>
   <td>.</td>
   <td></td>
   <td style="color:#f00">Lodging Payout</td>
     
     
   <td style="color:#f00"><?php    $sql="select SUM(howmuch) as total from reports where reason='payback' and month='$month'  and year='$year'  ";
		$rres=mysql_query($sql) or die(mysql_error());
	 while($rows=mysql_fetch_assoc($rres)){
		 $howmuch=$rows['total'];
		echo  number_format($howmuch);
	 }?> Frs</td>
   <td style="background:#000; color:#fff"><?php echo  number_format($howmuch); ?> Frs</td>
   
   </tr>
   
   
   <tr>
   <td>Total</td>
   <td></td>
   <td><?php 
   
	 
   
    $sele="SELECT SUM(rec),SUM(amt) FROM daily where month='$month' and year='$year' GROUP BY month";
	$runs=mysql_query($sele) or die (mysql_error());
	 while($rows=mysql_fetch_assoc($runs)){
		echo  number_format($ROW=$rows['SUM(rec)']);
	 }
	 
	
	 
	 ?> Frs</td>
     
     
   <td><?php  $sele="SELECT SUM(exp) FROM daily where month='$month' and year='$year' GROUP BY month";
	$runs=mysql_query($sele) or die (mysql_error());
	 while($rows=mysql_fetch_assoc($runs)){
		 $exp=$rows['SUM(exp)'];
		 number_format($exp);
	 }
	 
	 
	$two="SELECT SUM(exp) FROM daily where month='$month' and year='$year' GROUP BY month ";
	$r=mysql_query($two) or die (mysql_error());
	 while($ros=mysql_fetch_assoc($r)){
		 $pur=$ros['SUM(exp)'];
		 $tote=$pur;
		  echo number_format($pur);
	 }
	 
	 ?> Frs</td>
   <td style="border-bottom:1px double#000"><?php echo number_format($balf=$ROW-$tote); ?> Frs</td>
   
   </tr>
   
   
   
   
   
   
   
   
   
    
   <tr>
   <td>. </td>
   <td></td>
   <td style="background:#eee; border:1px solid#000">Balance Total</td>
     
     
   <td>
  .</td>
   <td style="border-bottom:1px double#000"><?php echo number_format($balf-$howmuch);
  ?> Frs</td>
   
   </tr>
   
   
   
   
   
   
   
   
   
   
   
    </table>   
    </div>
    
</div>

</div>
   <br />
   
</body>
</html>
<?php }} ?>


