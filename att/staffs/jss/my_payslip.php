<?php
include  '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
	$mat=$_GET['yourown'];
	$month=$_GET['month'];;
	$thismonth=$_GET['thismonth'];;
	$year=$_GET['year'];;
	$d=mysql_query("SELECT * FROM payslips where payslips.month='$month' and payslips.year='$year' and payslips.matric='$mat'  and payslips.year='$year'") or die(mysql_error());
	while($row=mysql_fetch_assoc($d)){
	
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

<div style="width:1150px;  height:850px;  border:1px solid#000; ">

<!----HEAD BOX----->
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

<div style="  height:160px; border:1px solid#000;  ">

<div style="  height:160px; width:15%; float:left; border:1px solid#000;  ">
<IMG src="../logo.png" style="margin:AUTO ; width:150PX; height:150PX"  />
</div>



<div style="  height:160px; width:84%; float:left;  border:1px solid#000;  ">

<div style="  height:35px; width:100%; float:left; text-align:center; background:#333; color:#FFF; text-transform:uppercase;
  border:1px DASHED#000; font-size:24px; font-weight:bold  "> salary voucher FOR <?php echo $clients; ?> </div>

<div style="   width:100%; float:left; text-align:center;  text-transform:uppercase;
  border:1px DASHED#000; font-size:25px; font-weight:bold  "> <?php echo $clients; ?></div>

<div style="   width:100%; float:left; text-align:center;  text-transform:uppercase;
  border:1px DASHED#000; font-size:16px;   "> <?php echo $AD; ?></div>
  
  <div style="   width:100%; float:left; text-align:center;  text-transform:uppercase;
  border:1px DASHED#000; font-size:16px;  "> <?php echo $TEL; ?></div>
  
 
</div>




<div style="  height:35px; width:100%; float:left; text-align:center; text-transform:uppercase;
  border:1px DASHED#000; font-size:24px; font-weight:bold  "> 
  
   <div style="   width:10%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px DASHED#000; font-size:16px;  "> <B>PERIOD</B> : 
  
  </div> <div style="   width:15%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px DASHED#000; font-size:16px;  "> <i>  <?PHP echo $thismonth;  ?> <?PHP echo $year;  ?> </i> </div>
  

  
  
   <div style="   width:20%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px DASHED#000; font-size:16px; margin-left:50px; border-left:none "> <B>CNPS MATRICULATION </B> : 
  
  </div> <div style="   width:15%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px DASHED#000; font-size:16px;  "> <i> . </i> </div>
  
  
 
  
  
  <div style="   width:20%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px DASHED#000; font-size:16px; margin-left:30px; border-left:none "> <B>CATEGORY</B> : 
  
  </div> <div style="   width:10%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px DASHED#000; font-size:16px;  "> <i> A </i> </div>
  
  
  </div>
  
  
  
<div style="  height:35px; width:100%; float:left; text-align:center; text-transform:uppercase;
  border:1px DASHED#000; font-size:24px; font-weight:bold  "> 
  
 
   <div style="   width:10%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px DASHED#000; font-size:16px;  "> <B>NAME</B> : 
  
  </div> <div style="   width:30%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px DASHED#000; font-size:16px;  "> <i>  <?PHP echo $row['name'];  ?>  </i> </div>
  

  
  
   <div style="   width:13%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px DASHED#000; font-size:16px ;  margin-left:265px; "> <B>FUNCTION</B> : 
  
  </div> <div style="   width:23%; float:left;border-right:none; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px DASHED#000; font-size:16px;  "> <i><?PHP echo $row['position'];  ?>  </i> </div> 
  
  
  
  
  </div>

<!-----------------head ----------------->

 </div> <div style="   width:5%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">s/n </div> 
 
   
    <div style="   width:57%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">elements of salary </div> 
  
     <div style="   width:18%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">earnings </div> 
  
     <div style="   width:19%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">deductions </div> 
  
  <!-----------------------------end head----------------->
  
  <!------------------------first item------------------>
  
  <div style="   width:5%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">1 </div> 
 
   
    <div style="   width:57%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">basic salary</span> </div> 
  
     <div style="   width:18%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><?php echo $salary=$row['salary']; ?></span> </div> 
  
     <div style="   width:19%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><?php echo 0; ?></span>  </div> 
  
  
   <!------------------------SIX item------------------>
  
  <div style="   width:5%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">6 </div> 
 
   
    <div style="   width:57%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">RESPOSNIBLITY ALLOWANCES</span> </div> 
  
     <div style="   width:18%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><?php echo $resp=$row['resp']; ?></span> </div> 
  
     <div style="   width:19%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><?php echo 0; ?></span>  </div> 
  
  
  <!----------------End second----------------------->
  
  
   <!------------------------SEVENTH item------------------>
  
  <div style="   width:5%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">7 </div> 
 
   
    <div style="   width:57%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">OVERTIme</span> </div> 
  
     <div style="   width:18%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><?php echo $overtime=($row['overtime']); ?></span> </div> 
  
     <div style="   width:19%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><?php echo 0; ?></span>  </div> 
  
  
  <!----------------End second----------------------->
  
  
  
  
  
   <!------------------------eigth item------------------>
  
  <div style="   width:5%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">8 </div> 
 
   
    <div style="   width:57%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">rENTS ALLOWANCE</span> </div> 
  
     <div style="   width:18%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><?php echo $rents=($row['rents']); ?></span> </div> 
  
     <div style="   width:19%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><?php echo 0; ?></span>  </div> 
  
  
  <!----------------End first----------------------->
     
   <!------------------------firth item------------------>
  
  <div style="   width:5%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">10 </div> 
 
   
    <div style="   width:57%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">others</span> </div> 
  
     <div style="   width:18%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><?php echo $others=$row['others']; ?></span> </div> 
  
     <div style="   width:19%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><?php echo 0; ?></span>  </div> 
  
  
  <!----------------End second----------------------->
  
  
  
  
  
   
  <!------------------------deductions------------------>
  
  <div style="height:auto; overflow:hidden; width:100%;"><!------------------------------>
  
  <div style="   width:5%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">11 </div> 
 
   
    <div style="   width:57%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:70px">personal income tax (pit)</span> </div> 
  
     <div style="   width:18%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">.</span> </div> 
  
     <div style="   width:19%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><?php echo $pit=$row['pit']; ?></span>  </div> 
  
  
  <!----------------End second----------------------->
  
  
    
  <!------------------------third item------------------>
  
  <div style="   width:5%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">12 </div> 
 
   
    <div style="   width:57%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:70px">council tax (ccf)</span> </div> 
  
     <div style="   width:18%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">.</span> </div> 
  
     <div style="   width:19%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><?php echo $council=$row['ccf']; ?></span>  </div> 
  
  
  <!----------------End third----------------------->
  
  
    
  <!------------------------fourth item------------------>
  
  <div style="   width:5%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">8 </div> 
 
   
    <div style="   width:57%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:70px">audio visual tax (crtv)</span> </div> 
  
     <div style="   width:18%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">.</span> </div> 
  
     <div style="   width:19%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><?php echo $crtv=$row['crtv']; ?></span>  </div> 
  
  
  <!----------------End second----------------------->
  
  
    
  <!------------------------firth item------------------>
  
  <div style="   width:5%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">9 </div> 
 
   
    <div style="   width:57%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:70px">social insurance contribution (cnps)</span> </div> 
  
     <div style="   width:18%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">.</span> </div> 
  
     <div style="   width:19%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><?php echo $cnps=($row['cnps']); ?></span>  </div> 
  
  
  
  <div style="   width:5%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">10 </div> 
 
   
    <div style="   width:57%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:70px">HOUSING LOANS FUND</span> </div> 
  
     <div style="   width:18%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">.</span> </div> 
  
     <div style="   width:19%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">.<?php echo $lona=$row['loans']; ?></span>  </div> 
  
  <div style="   width:5%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">8 </div> 
 
   
    <div style="   width:57%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:70px">ADVANCE SALARY</span> </div> 
  
     <div style="   width:18%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">.</span> </div> 
  
     <div style="   width:19%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">.<?php echo $advance=($row['pre_paid']); ?></span>  </div> 
  
  
    <div style="   width:5%; float:left; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">9 </div> 
 
   
    <div style="   width:57%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:70px">others</span> </div> 
  
     <div style="   width:18%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">.</span> </div> 
  
     <div style="   width:19%; float:left; padding:5PX 0PX; text-align:left;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">.<?php echo $other_exp=$row['others_exp']+$row['taxes']; ?></span>  </div> 
  
  </div>
  
  <!----------------End deductions----------------------->
  
  
  
  
  <!----------------End second----------------------->
  
  
  
  


  <div style="   width:100%; float:left; position:relative; height:178px; margin-top:0px; bottom:0px; padding:5PX 0PX; text-align:center;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  ">
  
    
  
    <div style="   width:62%; float:left; margin-top:-10px; padding:5PX 0PX; text-align:CENTER;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><b><i>GROSS TOTAL</i></b></span> </div> 
  
  <div style="   width:18%; float:left; margin-top:-10px; padding:5PX 0PX; text-align:CENTER;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><?php
  $deducts=$row['cnps']+$row['crtv']+$row['ccf']+$row['dcf']+$row['taxes']+$row['pit']+$advance+$lona+$other_exp;
  $salary=$row['salary'];
  $allin=$salary+$overtime+$others+$rents+$resp;
echo number_format($salary+$overtime+$others+$rents+$resp); ?></span></div>
  
   <div style="   width:18%; float:left; margin-top:-10px; padding:5PX 0PX; text-align:CENTER;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><?php
$all=$pit+$council+$other_exp+$advance+$lona+$cnps+$crtv;
   echo number_format($deducts); ?></span> </div>
  
 
  
   
    <div style="   width:62%; float:left; margin-top:0px; padding:5PX 0PX; text-align:CENTER;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px"><b>MODE OF PAYEMET :<I>P & T CREDIT UNION, MOLYKO </I></b></span> </div> 
  
  
    <div style="   width:62%; float:left; margin-top:0px; padding:5PX 0PX; text-align:CENTER;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">,</span> </div> 
  
   
    <div style="   width:62%; float:left; margin-top:0px; padding:5PX 0PX; text-align:CENTER;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px">.</span> </div> 
  
  
  
  
  
  
  
  
  
  <!----NET SALARY BOX---->
  
     <div style="   width:18%; float:left; margin-top:-64px; height:78PX; background:#333; color:#fff; padding:5PX 0PX; text-align:CENTER;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px; font-size:22px"><b><i>net salary</i><br />
 <span style="font-size:24px"> <?php echo number_format($allin-$deducts); ?></span></b></span> </div> 
  
   <div style="   width:18%; float:left; margin-top:-64px; height:78PX; padding:5PX 0PX; text-align:CENTER;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px; font-size:18px"><b>EMPLOYEE SIGN</b></span> </div> 
  
  
  
  
  
  
     <div style="   width:50%; clear:both; float:left; margin-top:0px; height:55PX; padding:5PX 0PX; text-align:CENTER;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px; font-size:16px"><BR />Please communicate to casheir/hro incase of any incorrect information on your slip</span> </div> 
  
   <div style="   width:49%; float:left; margin-top:0px; height:55PX; padding:5PX 0PX; text-align:CENTER;  text-transform:uppercase;
  border:1px SOLID#000; font-size:16px;  "><span style="margin-left:30px; font-size:18px"><br />visa of Hro</span> </div> 
  
  
  
  
  
  
  
  
  
  
  </div> 






</div>



</page>

   <?php } }?>
</body>
</html>




