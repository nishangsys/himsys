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
  table{
	  border-collapse:collapse;
  }
  tr,td{
	  border:1px solid#000;
  }
  }
</style>



</head>

<!---
<input type="button" value="Print Ticket"
onClick="window.print()"/>
------>
<body onload="window.print();">



<?php include 'header.php'; ?>
<h1>SALARY VOUCHER FOR  20<?PHP $y=date('y')-1;  echo $y;?> - <?php
 $y=date('y')-1;
 echo date('Y'); ?>  SCHOOL YEAR</h1>

  <div style="width:90%; margin:auto; padding:10px 10px; font-weight:bold; font-weight:bold; text-align:center;" ><span style="float:left">Month:<?php echo $_GET['this']; ?>  <?php echo $_GET['year']; ?></span>
 <span style="float:right">Department: <?php echo $_GET['dept']; ?></span>
 
  </div> 
    

    <?php
	$today=date('Y');
	$month=$_GET['month'];
	$dept=$_GET['dept'];
	$cust="SELECT * from payslips where month='$month' and year='$today' order by name ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
    <table style="width:100%; Line-height:1.4">
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td >Name</td>
    <td>Salary</td>
    <td>Allowances</td>
    <td>Leave</td>
    <td>Others</td>
    <TD>Gross</TD>
    <td>CNPS</td>
    <td>TAX</td>
    <td>Others</td>
    <td>NET TO PAY</td>
    </tr>
   
    <?php while($row=mysql_fetch_assoc($run)){
	
		
		 ?>
    <tr style="text-align:left">
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
        <td><?php echo $num++; ?></td>
    
    <td style="text-align:left; padding:0px 10px;"><?php echo $row['name']; ?></td>
    <td><?php  $salary=$row['salary'];
	echo number_format($salary); ?></td>
    <td><?php $allowances=$row['resp']+$row['rents']+$row['senior']+$row['trans']+$row['overtime']+$row['research'];
	echo number_format($allowances);
	?></td>
    
     <td><?php $leave=$row['leaves'];
	echo ($leave);
	?></td>
        <td><?php  $others=$row['others'];
		echo ($others);
		 ?></td>

    <!----------------GROSS SALARY----------------->
    <td><?php   $gross=$salary+$allowances+$others+$leave;
	echo number_format($gross);
	?></td>
    
        <!----------------CNPS----------------->

   <td><?php  $cnps=$row['cnps'];
   echo number_format($cnps);
   
   ?></td>
   
       <!----------------TAXES----------------->

   <td><?php  $taxes=$row['irpp']+$row['ccf']+$row['crtv']+$row['nhlf'];
   echo  number_format($taxes);
   ?></td>
   
       <!----------------OTHERS----------------->

   <td><?php 
   $others_taxes=$row['others_exp']+$row['pre_paid'];
   
   echo  number_format($others_taxes);
   $alltaxes=$others_taxes+$taxes+$cnps;?></td>
   <td><?php echo  number_format($gross-$alltaxes);?></td>
    
   

    </tr>
    
    
    <?php } ?>
    
      <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#; text-align:center; font-weight:bold">
    <td></td>
    <td>TOTAL</td>
    <td><?PHP
    $S="SELECT SUM(salary) as totsal from payslips where month='$month' and year='$today'  ";
	$run=mysql_query($S) or die (mysql_error());
	while($r=mysql_fetch_assoc($run)){
		 $totsal=$r['totsal'];
		echo number_format($totsal);
	}
	?></td>
    <td><?PHP

    $S="SELECT SUM(resp),SUM(rents),SUM(senior),SUM(trans),SUM(overtime)  from payslips where month='$month' and year='$today'  ";
	$run=mysql_query($S) or die (mysql_error());
	while($r=mysql_fetch_assoc($run)){
		 $totallow=$r['SUM(resp)']+$r['SUM(rents)']+$r['SUM(senior)']+$r['SUM(trans)']+$r['SUM(overtime)'];
		echo number_format($totallow);
	}
	?></td>
    
     <td><?PHP

    $S="SELECT SUM(leaves)  from payslips where month='$month' and year='$today' ";
	$run=mysql_query($S) or die (mysql_error());
	while($r=mysql_fetch_assoc($run)){
		 $totalleave=$r['SUM(leaves)'];
		echo number_format($totalleave);
	}
	?></td>
    
    <td><?PHP
    $S="SELECT SUM(others) as totothers from payslips where month='$month' and year='$today' ";
	$run=mysql_query($S) or die (mysql_error());
	while($r=mysql_fetch_assoc($run)){
		 $totothers=$r['totothers'];
		echo number_format($totothers);
	}
	?></td>
    
        <!----------------TOTAL GROSS SALARY----------------->

    <td><?php $gross=($totallow+$totothers+$totsal+$totalleave);
	echo number_format($gross); ?></td>
     <!----------------TOTAL CNPS----------------->
    <td><?PHP
	
	
    $S="SELECT SUM(cnps) as totcnps from payslips where month='$month' and year='$today' ";
	$run=mysql_query($S) or die (mysql_error());
	while($r=mysql_fetch_assoc($run)){
		 $totcnps=$r['totcnps'];
		echo number_format($totcnps);
	}
	?></td>
    
        <!--------------------TOTAL taxes------------------->

    <td><?PHP
	
    $S="SELECT SUM(irpp),SUM(ccf),SUM(crtv),SUM(nhlf)  from payslips where month='$month' and year='$today'  ";
	$run=mysql_query($S) or die (mysql_error());
	while($r=mysql_fetch_assoc($run)){
		 $tottaxes=$r['SUM(irpp)']+$r['SUM(ccf)']+$r['SUM(crtv)']+$r['SUM(nhlf)'];
		echo number_format($tottaxes);
	
	}
	?></td>
    
    <!--------------------TOTAL others(prepaid and other_exp------------------->
     <td><?PHP
	
    $S="SELECT SUM(others_exp),SUM(pre_paid)  from payslips where month='$month' and year='$today'  ";
	$run=mysql_query($S) or die (mysql_error());
	while($r=mysql_fetch_assoc($run)){
		 $tottotherexp=$r['SUM(others_exp)']+$r['SUM(pre_paid)'];
		echo number_format($tottotherexp);
	
	}
	?></td>
    <td><?php $totnet=($totallow+$totothers+$totsal+$totalleave)-($totcnps+$tottaxes+$tottotherexp);
	echo number_format($totnet); ?></td>
    </tr>
    







</page>

   <?php }?>
</body>
</html>




