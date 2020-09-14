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
<style>
.f{
	width:50px;
	 height:25px;
	 padding:10px 0xp;
	  border:1px solid#000;
	  text-align:center;
	  margin-left:30px;
	  float:left;
	 
}
.s{
	width:160px;
	 height:25px;
	 padding:10px 10xp;
	  border:1px solid#000;
	  text-align:center;
	   float:left;
}
.t{
	width:160px;
	 height:25px;
	 padding:10px 0xp;
	  border:1px solid#000;
	  text-align:center;
	   float:left;
}
.f{
	width:190px;
	 height:25px;
	 padding:10px 0xp;
	  border:1px solid#000;
	  text-align:center;
	   float:left;
}
</style>
</head>

<!---
<input type="button" value="Print Ticket"
onClick="window.print()"/>
------>
<body onload="window.print();">

<div class="receipt"> 
<div class="mainbox">

<?php include 'header.php'; ?>
    
    

   
    <?PHP
if(isset($_GET['id'])){
	$who=$_GET['id'];
	$today=date('d-m-Y');
	  $select="SELECT * from finances,daily where finances.yourid='$who' and finances.yourid=daily.cust_id and daily.date='$today'";
	$run=mysql_query($select) or die(mysql_error());
	$nu=mysql_num_rows($run);
	if($nu<=0){
		echo "<script>alert('ERROR. This client have no receipt for today')</script>";
			echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?occupied">';
			
	}
	else {
	while ($row=mysql_fetch_assoc($run)){
		
		
	  $select="SELECT SUM(rec) from daily where daily.cust_id='$who' and daily.date='$today' ";
	$run=mysql_query($select) or die(mysql_error());
	while ($rows=mysql_fetch_assoc($run)){
		$totpa=number_format($rows['SUM(rec)']);
	
	
	?>
    
    <div style=" float:left; width:700px; margin-top:-10px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:28px; ">
<div style=" float:left; width:550px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:24px; ">
GUEST BILL

</div>

<div style=" float:left; width:140px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:18px; ">
N<SUP>0</SUP> 00<?PHP echo $who; ;?>


</div>




<div style=" float:left; width:720px; margin-top:0px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Client's Names :</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $row['name'];?>.
</div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>



<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> Amount in Figure</div>


<div style=" float:left; width:500px height:25px;font-size:17px;"> 


<div style=" float:left; width:200px;border:1px solid #000;margin-top:3px;">
<?php echo number_format($rows['SUM(rec)']) ;?> <i>frs C. F. A</i>
</div>
<div style=" float:left; width:100px;margin-top:3px;">
Printed on:
</div>
<div style=" float:left; width:200px;border-bottom:1px solid #000;margin-top:3px;">
<?php echo date('d-m-Y');?>
</div>



</div>


<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; BORDER-BOTTOM:none; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Amount in Words</i></div>


<div style=" float:left; width:500px; height:25px; border-bottom:none; font-size:16px; font-family:Chaparral Pro Light; border-bottom:1PX dashed#000"><i><?php echo convert_number_to_words($rows['SUM(rec)']) .'&nbsp; FCFA'; ?></i></div>
    
  </div>  
    
  <div style=" float:left; margin-top:0px;margin-left:10px;width:660px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; 
font-size:13px; ">
DETAILS
</div>

 
<?php
  $sel="SELECT * FROM daily where cust_id='$who'";
 $ones=mysql_query($sel) or die(mysql_error());
 $i=1;
	
 
 ?>
 
 <div class="f">S/N</div>
 <div class="s">Reason</div>
 <div class="t">Amount Paid</div>
 <?php while($row=mysql_fetch_assoc($ones)){?>
 <div class="f"><?php echo $i++; ?></div>
 <div class="s"><?php
 $resaon=$row['reason'];
  if(empty($resaon)){
	 echo "Lodging Fee";
 }
 else {
	 echo $resaon;
 }; ?></div>
 <div class="t"><?php echo number_format($row['rec']); ?></div>
  <?php } ?>
 <div class="f">

Total Amount Paid So far</div>
<div class="s"></div>
<div class="t">
<?php
$sel="SELECT SUM(rec) as total FROM daily where cust_id='$who'";
 $ones=mysql_query($sel) or die(mysql_error()); 
 while($row=mysql_fetch_assoc($ones)){
	$ans= $row['total'];
 }
  echo number_format($ans); ?> Frs.</td></tr>
</div>

 
 
    

   <div class="clear"></div>
 <div class="lefo">
     <p>Cashier's Signature<br />
     <b>...............</b>
     
     </p>
     
     </div>
     <div class="righto">
     <p>Guest Signature<br />
     <b>...............</b>
     </div>
    
</div>


</div>
</div>
</div></div>



<?php } } } ?>






<div class="mainbox">

<?php include 'header.php'; ?>
    
    

   
    <?PHP
if(isset($_GET['id'])){
	$who=$_GET['id'];
	$today=date('d-m-Y');
	  $select="SELECT * from finances,daily where finances.yourid='$who' and finances.yourid=daily.cust_id and daily.date='$today'";
	$run=mysql_query($select) or die(mysql_error());
	$nu=mysql_num_rows($run);
	if($nu<=0){
		echo "<script>alert('ERROR. This client have no receipt for today')</script>";
			echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?occupied">';
			
	}
	else {
	while ($row=mysql_fetch_assoc($run)){
		
		
	  $select="SELECT SUM(rec) from daily where daily.cust_id='$who' and daily.date='$today' ";
	$run=mysql_query($select) or die(mysql_error());
	while ($rows=mysql_fetch_assoc($run)){
		$totpa=number_format($rows['SUM(rec)']);
	
	
	?>
    
    <div style=" float:left; width:700px; margin-top:-10px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:28px; ">
<div style=" float:left; width:550px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:24px; ">
GUEST BILL

</div>

<div style=" float:left; width:140px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:18px; ">
N<SUP>0</SUP> 00<?PHP echo $who; ;?>


</div>




<div style=" float:left; width:720px; margin-top:0px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Client's Names :</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $row['name'];?>.
</div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>



<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> Amount in Figure</div>


<div style=" float:left; width:500px height:25px;font-size:17px;"> 


<div style=" float:left; width:200px;border:1px solid #000;margin-top:3px;">
<?php echo number_format($rows['SUM(rec)']) ;?> <i>frs C. F. A</i>
</div>
<div style=" float:left; width:100px;margin-top:3px;">
Printed on:
</div>
<div style=" float:left; width:200px;border-bottom:1px solid #000;margin-top:3px;">
<?php echo date('d-m-Y');?>
</div>



</div>


<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; BORDER-BOTTOM:none; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Amount in Words</i></div>


<div style=" float:left; width:500px; height:25px; border-bottom:none; font-size:16px; font-family:Chaparral Pro Light; border-bottom:1PX dashed#000"><i><?php echo convert_number_to_words($rows['SUM(rec)']) .'&nbsp; FCFA'; ?></i></div>
    
  </div>  
    
  <div style=" float:left; margin-top:0px;margin-left:10px;width:660px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; 
font-size:13px; ">
DETAILS
</div>

 
<?php
  $sel="SELECT * FROM daily where cust_id='$who'";
 $ones=mysql_query($sel) or die(mysql_error());
 $i=1;
	
 
 ?>
 
 <div class="f">S/N</div>
 <div class="s">Reason</div>
 <div class="t">Amount Paid</div>
 <?php while($row=mysql_fetch_assoc($ones)){?>
 <div class="f"><?php echo $i++; ?></div>
 <div class="s"><?php
 $resaon=$row['reason'];
  if(empty($resaon)){
	 echo "Lodging Fee";
 }
 else {
	 echo $resaon;
 }; ?></div>
 <div class="t"><?php echo number_format($row['rec']); ?></div>
  <?php } ?>
 <div class="f">

Total Amount Paid So far</div>
<div class="s"></div>
<div class="t">
<?php
$sel="SELECT SUM(rec) as total FROM daily where cust_id='$who'";
 $ones=mysql_query($sel) or die(mysql_error()); 
 while($row=mysql_fetch_assoc($ones)){
	$ans= $row['total'];
 }
  echo number_format($ans); ?> Frs.</td></tr>
</div>

 
 
    

   <div class="clear"></div>
 <div class="lefo">
     <p>Cashier's Signature<br />
     <b>...............</b>
     
     </p>
     
     </div>
     <div class="righto">
     <p>Guest Signature<br />
     <b>...............</b>
     </div>
    
</div>


</div>
</div>
</div></div>








</div>
   <?php }} }}}}?>
</body>
</html>




