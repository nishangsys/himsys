<?php
include  '../dbc.php';
require_once 'functions/functions.php';

	
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
table,tr,td{
	border:1px solid#000;
	border-collapse:collapse;
	line-height:1.8;
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
	  
	  $d=$con->query("select  staffname,cust_id,SUM(rec+bank) as paid ,year from daily where id='".$who."' GROUP BY staffname") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	$n=$bu['staffname'];
	$m=$bu['cust_id'];
	$paids=$bu['paid'];
	$ay=$bu['year'];
}
	
	
	////get total paid soafr
	$d=$con->query("select SUM(rec+bank) as sofar from daily where  staffname='$n' and cust_id='$m' and year='$ay' and reason='waiver'") or die(mysqli_error($con));
$a=1;
while($bu=$d->fetch_assoc()){
	$tp=$bu['sofar'];
}
		
	  $select="SELECT * from daily where id='$who' and exp='' ";
	$run=mysql_query($select) or die(mysql_error());
	while ($row=mysql_fetch_assoc($run)){
		
	
	?>
    
    <div style=" float:left; width:800px; margin-top:-10px;TEXT-ALIGN:CENTER; background:#fff url(../img/vertical_logo%20(1).png) no-repeat center; border-bottom:1px ;  height:50px; 
font-size:28px; ">
<div style=" float:left; width:550px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:24px; ">
 CASH RECEIPT


</div>

<div style=" float:left; width:140px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:18px; ">
N<SUP>0</SUP> 00<?PHP echo $who; ;?>


</div>




<div style=" float:left; width:720px; margin-top:0px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Received From :</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $n;?>.
</div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>




<div style="clear:both; margin-top:30px; height:10px"></div>

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Purpose :</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:500px;margin-top:3px;">
waiver for  <?php echo $ay;?> School Year</div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>



<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> Amount in Figure</div>


<div style=" float:left; width:500px height:25px;font-size:17px;"> 


<div style=" float:left; width:200px;border:1px solid #000;margin-top:3px;">
<?php   echo number_format($tp); ?> <i>frs C. F. A</i>
</div>



</div>


<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; BORDER-BOTTOM:none; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Amount in Words</i></div>


<div style=" float:left; width:500px; height:25px; border-bottom:none; font-size:16px; font-family:Chaparral Pro Light; border-bottom:1PX dashed#000"><i><?php echo convert_number_to_words($tp) .'&nbsp; FCFA'; ?></i></div>
    
  </div>  





<table>
<td>#</td>
<td>Date</td>
<td>Cash</td><td>Bank Pmt</td><td>Bank</td><td>Date </td></tr>
<?php
$d=$con->query("select  * from daily where  staffname='$n' and cust_id='$m' and year='$ay' and reason='waiver'") or die(mysqli_error($con));
$a=1;
while($bu=$d->fetch_assoc()){
?>
<tr>
<td><?php echo $a++; ?></td>
<td><?php echo $bu['date']; ?></td>
<td><?php echo number_format($bu['rec']); ?></td><td><?php echo number_format($bu['bank']); ?></td><td><?php echo $bu['company']; ?></td><td><?php echo $bu['time']; ?></td></tr>
<?php } ?>
</table>



<div style=" font-size:16px; line-height:1.5; height:auto; margin-top:-10px; overflow:hidden;  color:#333; width:98%">

   <div class="clear"></div>
 <div class="lefo">
     <p>Cashier's Signature<br />
     <b>....................</b>
     
     </p>
     
     </div>
     <div class="righto">
     <p>student Signature<br />
     <b>......................</b>
     </div>
    
</div>

</div>
</div>
</div></div>
</div>



<?php } }  ?>



<div class="mainbox">

<?php include 'header.php'; ?>
    
    

   
    <?PHP
if(isset($_GET['id'])){
	  $who=$_GET['id'];
	  
	  $d=$con->query("select  staffname,cust_id,SUM(rec+bank) as paid ,year from daily where id='".$who."' GROUP BY staffname") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	$n=$bu['staffname'];
	$m=$bu['cust_id'];
	$paids=$bu['paid'];
	$ay=$bu['year'];
}
	
	
	////get total paid soafr
	$d=$con->query("select SUM(rec+bank) as sofar from daily where  staffname='$n' and cust_id='$m' and year='$ay' and reason='waiver'") or die(mysqli_error($con));
$a=1;
while($bu=$d->fetch_assoc()){
	$tp=$bu['sofar'];
}
		
	  $select="SELECT * from daily where id='$who' and exp='' ";
	$run=mysql_query($select) or die(mysql_error());
	while ($row=mysql_fetch_assoc($run)){
		
	
	?>
    
    <div style=" float:left; width:800px; margin-top:-10px;TEXT-ALIGN:CENTER; background:#fff url(../img/vertical_logo%20(1).png) no-repeat center; border-bottom:1px ;  height:50px; 
font-size:28px; ">
<div style=" float:left; width:550px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:24px; ">
 CASH RECEIPT


</div>

<div style=" float:left; width:140px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:18px; ">
N<SUP>0</SUP> 00<?PHP echo $who; ;?>


</div>




<div style=" float:left; width:720px; margin-top:0px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Received From :</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:300px;margin-top:3px;">
<?php echo $n;?>.
</div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>




<div style="clear:both; margin-top:30px; height:10px"></div>

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Purpose :</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:500px;margin-top:3px;">
waiver for  <?php echo $ay;?> School Year</div>

<div style=" float:left; width:200px;  height:25px;margin-top:3px;"></div></div>



<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> Amount in Figure</div>


<div style=" float:left; width:500px height:25px;font-size:17px;"> 


<div style=" float:left; width:200px;border:1px solid #000;margin-top:3px;">
<?php   echo number_format($tp); ?> <i>frs C. F. A</i>
</div>



</div>


<div style=" float:left; width:700px;margin-top:3px;TEXT-ALIGN:CENTER; font-family:arial; height:30px; BORDER-BOTTOM:none; 
font-size:13px; ">
<div style=" float:left; width:170px; height:25px;font-size:17px;"> <i>Amount in Words</i></div>


<div style=" float:left; width:500px; height:25px; border-bottom:none; font-size:16px; font-family:Chaparral Pro Light; border-bottom:1PX dashed#000"><i><?php echo convert_number_to_words($tp) .'&nbsp; FCFA'; ?></i></div>
    
  </div>  





<table>
<td>#</td>
<td>Date</td>
<td>Cash</td><td>Bank Pmt</td><td>Bank</td><td>Date </td></tr>
<?php
$d=$con->query("select  * from daily where  staffname='$n' and cust_id='$m' and year='$ay' and reason='waiver'") or die(mysqli_error($con));
$a=1;
while($bu=$d->fetch_assoc()){
?>
<tr>
<td><?php echo $a++; ?></td>
<td><?php echo $bu['date']; ?></td>
<td><?php echo number_format($bu['rec']); ?></td><td><?php echo number_format($bu['bank']); ?></td><td><?php echo $bu['company']; ?></td><td><?php echo $bu['time']; ?></td></tr>
<?php } ?>
</table>



<div style=" font-size:16px; line-height:1.5; height:auto; margin-top:-10px; overflow:hidden;  color:#333; width:98%">

   <div class="clear"></div>
 <div class="lefo">
     <p>Cashier's Signature<br />
     <b>....................</b>
     
     </p>
     
     </div>
     <div class="righto">
     <p>student Signature<br />
     <b>......................</b>
     </div>
</div>

</div>
</div>
</div></div>



<?php } }  ?>


















</div>
</div>
   <?php ?>
</body>
</html>




