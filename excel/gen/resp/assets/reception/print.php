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
body{
	font-size:16px;
}
.ff{
	width:50px;
	 height:auto;
	 padding:10px 10px;
	  border:1px solid#000;
	  text-align:center;
	  margin-left:5px;
	  float:left;
	 
}
.s{
	width:100px;
	 height:auto;
	 padding:10px 10px;
	  border:1px solid#000;
	  text-align:center;
	   float:left;
}
.t{
	width:160px;
	 height:auto;
	 padding:10px 10px;
	  border:1px solid#000;
	  text-align:center;
	   float:left;
}
.f{
	width:190px;
	height:auto;
	 padding:10px 10px;
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

<?php include 'header.php'; ?>
    
    

   
    <?PHP
if(isset($_GET['id'])){
	$who=$_GET['id'];
	  $select="SELECT * from finances,daily where finances.yourid='$who' and finances.yourid=daily.cust_id ";
	$run=mysql_query($select) or die(mysql_error());
	while ($row=mysql_fetch_assoc($run)){
		
		
	  $select="SELECT SUM(rec) from daily where daily.cust_id='$who' ";
	$run=mysql_query($select) or die(mysql_error());
	while ($rows=mysql_fetch_assoc($run)){
		$totpa=number_format($rows['SUM(rec)']);
	
	
	?>
    
    <div style=" float:left; width:800px; margin-top:-10px;TEXT-ALIGN:CENTER; background:#eee url(bl.png); border-bottom:1px solid#000;  height:50px; 
font-size:28px; ">
<div style=" float:left; width:550px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:24px; ">
GUEST BILL

</div>

<div style=" float:left; width:140px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:18px; ">
N<SUP>0</SUP> 00<?PHP echo $who; ;?>


</div>




<div style=" float:left; width:800px; margin-top:20px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">

<div style=" float:left; width:20%; height:25px;font-size:17px; border:1px dashed#000; padding:10px 0px;"> Client's Names :</div>


<div style=" float:left; width:78%;border:1px dashed#000; padding:10px 0px;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px; ">
<?php echo $row['name'];?>.
</div>
</div>




<div style=" float:left; width:20%; height:25px;font-size:17px; border:1px dashed#000; padding:10px 0px;"> Room Choosen :</div>


<div style=" float:left; width:78%;border:1px dashed#000; padding:10px 0px; font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px; ">
Room <?php echo $row['room'];?>.
</div>
<div style=" float:left; width:230px; height:25px;font-size:17px;  margin-left:30px"><span>Date:</span> <span style="border-bottom:1px solid#000;"><i><?php echo $row['date'];?></i></span> </i></div>
</div>


<div style="height:30px; width:100%; clear:both"></div>
<div style="background:#eee; height:auto; overflow:hidden; color:#333; width:98%">


<div class="ff">S/N</div>
<div class="f">Item</div>
<div class="ff" style="margin-left:0px; width:90px">Qty/ Days</div>
 <div class="s">Trans. Date</div>
 
  <div class="s" style="width:100px">Unit Cost</div>
 <div class="s">Total Cost</div>
 
 </div>
 
 
 <?php
 //check if therer is overtime
  		//SELECT DATEDIFF(CURDATE(),STR_TO_DATE(mysql field, 'date-format-------%d-%m-%Y'))
		$rusn=mysql_query("SELECT DATEDIFF(CURDATE(),STR_TO_DATE(duedate, '%m/%d/%Y')) AS DAYS,duedate,cost
FROM finances where  yourid='$who' ");
while($rows=mysql_fetch_assoc($rusn)){
	 $duedates=$rows['duedate'];
	  $today=date('m/d/Y');
	if($today<=$duedates){
	 $not=0;
		  $update_situation=mysql_query("UPDATE finances set newadd='$not' where yourid='$who' ") or die(mysql_error());

	}
	else{
	  $not=abs($rows['DAYS']);
	 	  $update_situation=mysql_query("UPDATE finances set newadd='$not' where yourid='$who' ") or die(mysql_error());

	}
	  //$tc=$not*
	 // $update_situation=mysql_query("UPDATE finances set newadd='$not' where yourid='$who' ") or die(mysql_error());
	
	 
}

/////////////////////////////////////////
  $sel="SELECT * FROM finances where yourid='$who'";
 $ones=mysql_query($sel) or die(mysql_error());

while($rows=mysql_fetch_assoc($ones)){	
 
 ?>
<div class="ff">1</div>
<div class="f">Loging </div>
<div class="ff" style="margin-left:0px; width:90px">
<?php echo $days=($rows['howlong'])+($rows['newadd']) ?> Days</div>
 <div class="s"><?php echo $rows['date']; ?> <?php $owed=($rows['bal']); ?> </div>
 
  <div class="s" style="width:100px"><?php echo number_format($rows['cost']); ?> Frs</div>
 <div class="s"><?php
 $loging=($rows['cost']*$days);
  echo number_format($loging); ?> Frs</div>
 <?php } ?>
 

 
<?php
  $sel="SELECT * FROM daily where cust_id='$who' and reason!='lodging' and qty>0";
 $ones=mysql_query($sel) or die(mysql_error());
 $i=2;
while($row=mysql_fetch_assoc($ones)){	
 
 ?>
 









<div class="ff"><?php echo $i++; ?></div>
<div class="f"><?php echo $row['reason']; ?></div>
<div class="ff" style="margin-left:0px; width:90px"><?php echo $row['qty']; ?></div>
 <div class="s"><?php echo $row['date']; ?></div>
 
  <div class="s" style="width:100px"><?php echo number_format($row['price']); ?> Frs</div>
 <div class="s"><?php 
 $other_cost=($row['price']*$row['qty']);
 echo number_format($other_cost); ?> Frs</div>

<?php } ?>

<div style="background:#fff; height:30px; overflow:hidden; border-bottom:1px dashed#000; color:#333; width:98%">

</div>


<!-----box 3 for grand total------------>

<div style="background:#eee; height:auto; overflow:hidden; border-bottom:1px dashed#000; color:#333; width:98%">


<div class="ff" style="margin-left:10px; width:90px">Grand Total</div>
 <div class="s" style="float:right; margin-right:16px; background:#000; color:#fff">
 <?php
  $sel=mysql_query("SELECT SUM(total) from daily where cust_id='$who' and reason!='lodging'");

while($row=mysql_fetch_assoc($sel)){	
$grand=$row['SUM(total)']+$loging;
echo number_format($grand). "&nbsp;Frs";
}
 ?>
 
 
 </div>
 
 </div>






<!-----box 4 for Amount Paid------------>

<div style="background:#eee; height:auto; overflow:hidden; border-bottom:1px dashed#000; color:#333; width:98%">


<div class="ff" style="margin-left:10px; width:90px">Amount Paid</div>
 <div class="s" style="float:right; margin-right:140px; font-weight:bold ">
 <?php
 $paids=$grand-$owed;
 echo number_format($paids) ."Frs";
 ?>
 
 
 </div>
 
 </div>
 
 
 
 
 
<!-----box 4 for Amount owed------------>

<div style="background:#eee; height:auto; overflow:hidden; border-bottom:1px dashed#000; color:#333; width:98%">


<div class="ff" style="margin-left:10px; width:90px">Balance </div>
 <div class="s" style="float:right; margin-right:16px; color:#f00; font-weight:bold ">
 <?php
echo number_format($owed) ."Frs";  
 ?>
 
 
 </div>
 
 </div>



<div style=" height:auto; font-size:16px; font-style:italic; margin-top:30px; overflow:hidden;  color:#333; width:98%">
Thanks for patronage. Please Call again
</div>


<div style=" height:auto; font-size:16px; text-align:left;overflow:hidden;  color:#333; width:90%; margin:auto;  margin-top:30px; ">
Amounts in Words: <div style="margin-top:10px; text-align:center; border-bottom:1px dashed#000">
<i><b><?php echo convert_number_to_words($paids) .'&nbsp; FCFA'; ?></i></b></div>
</div>







<div style=" font-size:16px; line-height:1.5; height:auto; margin-top:25px; overflow:hidden;  color:#333; width:98%">

   <div class="clear"></div>
 <div class="lefo">
     <p>Cashier's Signature<br />
     <b>....................</b>
     
     </p>
     
     </div>
     <div class="righto">
     <p>Guest Signature<br />
     <b>......................</b>
     </div>
    
</div>
<div style=" font-size:16px; line-height:1.5; height:auto; position:absolute; bottom:0px; margin-top:25px; overflow:hidden;  color:#333; width:98%">


Software Designed by Nishang. Receipt Printed Today <?php echo date('d-m-Y'); ?> at <?php echo date('h:i'); ?> 
</div>


</div>
</div>
</div></div>



<?php } } } ?>









</div>
   <?php }?>
</body>
</html>




