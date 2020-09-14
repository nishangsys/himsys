<?php
include  '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
	 $tale=$_GET['id'];
  

 $section=$_GET['area'];
 
//bar area
if($section=='15'){

	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	
}
//restau area

else if($section=='10'){
		 $dashbd;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
	$serial='Restau';
	$db_basket='restau_basket';
	
}
//bouaccarou area
else if($section=='2'){

	$a_area='2';
	$page='../bauca/baucapage.php';	
	$db_table='bauca_tables';
	$serial='Bouccarau';
	$db_basket='bauca_basket';

	
}
//VIP Bar or Night Club
else if($section=='18'){
		 $dashbd;

	$a_area='18';
	$page='../restau/restaupage.php';
	
	$db_table='other_tables';
	$serial='Bouccarau';
	$db_basket='other_basket';
	
}
    $first=mysql_query("UPDATE ".$db_basket." set printed='2' where tab='".$tale."' and status='3' ") or die(mysql_error());

   $result=mysql_query("SELECT product,category,SUM(qty),price,SUM(total),ids from ".$db_basket." where tab='".$tale."' and status='3' group by product    ");
$num=1;

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipt</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<style>
.pageso{
	width:800px; 
	height:400px;
	border:1px solid#000;
	margin:auto;
}
.ug{
	
	width:100%;
	height:20px;
	margin:auto;	
	margin-top:10px;
	
}
.g{
	float:left;
	width:40px;
	padding:5PX 0PX;
	
	border:1px solid#000;
	margin-left:0px;
	
}
.f{
	float:left;
	width:460px;
	padding:5PX 0PX;
	
	border:1px solid#000;
	text-align:left;
	
}
.fi{
	float:left;
	width:100px;
	padding:5PX 0PX;
	
	border:1px solid#000;
	text-align:center;
	
}
</style>
</head>

<!---
<input type="button" value="Print Ticket"
onClick="window.print()"/>
------>
<body onload="window.print();">

<div class="receipt"> 
<div class="mainbox" style="width:98%">

<?php include '../reception/header.php'; ?>
   
    <div style=" float:left; width:100%; margin-top:-10px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:28px; ">
<div style=" float:left; width:550px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:24px; ">
<?php echo $serial; ?> RECEIPT

</div>

<div style=" float:left; width:140px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:18px; ">
 <?php echo date('d/m/Y'); ?>


</div>



<div style=" float:left; width:100%; margin-top:0px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:14px; ">

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Payment Mode:</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:500px;margin-top:3px;">
TRANSFER PAYMENTS at <?php
			 $a=$con->query("SELECT sub from ".$db_basket." where tab='".$tale."' and status='3' and sub>0 GROUP BY tab") or die(mysqli_error($con));
			 while($b=$a->fetch_assoc()){
				 if(empty($b['sub'])){
					 echo 0;
				 }
				 else {
				 echo $discc=$b['sub'];
				 }
			 
			 }
			 ?>Frs Discount
</div>
</div>
<div class="clear"></div>

  
   <div class="ug">
   <div class="g"><B>S/N</div>
   <div class="f">Product</div>
 
 <div class="g" style="">Qty</div>
 <div class="fi">U.Price</div>
 <div class="fi">TC</B></div>
 <?php   while ($getres=mysql_fetch_assoc($result)){ ?>
 
 <div class="g"><?PHP echo $num++; ?></div>
   <div class="f" ><?PHP
   $ids=$getres['ids'];
   
 
	   echo $getres['product']; 
  
   ?></div>
 
 <div class="g" style=" text-align:center"><?PHP echo $getres['SUM(qty)']; ?></div>
 <div class="fi" style=" text-align:center"><?PHP echo $getres['price']; ?></div>
 <div class="fi" style=" text-align:center"><?PHP echo $getres['SUM(total)']; ?></div>
 
 <?PHP } ?>
 
  
</div>
<div class="clear">
</div>
<div style="width:545px; height:auto; padding:5PX 10PX; margin-left:10PX; float:left; text-align:center; border:1px solid#999">Grand Total</div>
 <div style="width:125px; height:auto;padding:5PX 0PX; background:#666; float:left; text-align:center; color:#fff; border:1px solid#999">
<?php
$result=mysql_query("SELECT SUM(total) as total,tab from ".$db_basket." where tab='".$tale."' and status='3' GROUP BY tab  ");
while ($row=mysql_fetch_assoc($result)){ 
echo number_format($row['total']) ."&nbsp;&nbsp;Frs";

}
?> 

 </div>  
 <div class="clear"></div>
   <div style="position:relative; font-size:14px; text-align:center; bottom:0px; height:30px">Done today <?php echo date('l d-F-Y'); ?> @ <?php echo date('h:i'); ?> </div>

</div></div>

</div>


 
    </div>





<?php
$result=mysql_query("SELECT product,category,SUM(qty),price,SUM(total),ids from ".$db_basket." where tab='".$tale."' and status='3' group by product    ");
$num=1;

?>

<div class="mainbox" style="width:98%">

<?php include '../reception/header.php'; ?>
   
    <div style=" float:left; width:100%; margin-top:-10px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:28px; ">
<div style=" float:left; width:550px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:24px; ">
<?php echo $serial; ?> RECEIPT

</div>

<div style=" float:left; width:140px; margin-top:17px;TEXT-ALIGN:CENTER;  height:34px; 
font-size:18px; ">
 <?php echo date('d/m/Y'); ?>


</div>



<div style=" float:left; width:100%; margin-top:0px;TEXT-ALIGN:CENTER; font-family:arial; height:300px; 
font-size:14px; ">

<div style=" float:left; width:170px; height:25px;font-size:17px;"> Payment Mode:</div>


<div style=" float:left; width:500px;border-bottom:1px solid #000;font-weight:normal; height:25px;font-size:17px;"> 


<div style=" float:left; width:500px;margin-top:3px;">
TRANSFER PAYMENTS at <?php
			 $a=$con->query("SELECT sub from ".$db_basket." where tab='".$tale."' and status='3' and sub>0 GROUP BY tab") or die(mysqli_error($con));
			 while($b=$a->fetch_assoc()){
				 if(empty($b['sub'])){
					 echo 0;
				 }
				 else {
				 echo $discc=$b['sub'];
				 }
			 
			 }
			 ?>Frs Discount
</div>
</div>
<div class="clear"></div>

  
   <div class="ug">
   <div class="g"><B>S/N</div>
   <div class="f">Product</div>
 
 <div class="g" style="">Qty</div>
 <div class="fi">U.Price</div>
 <div class="fi">TC</B></div>
 <?php   while ($getres=mysql_fetch_assoc($result)){ ?>
 
 <div class="g"><?PHP echo $num++; ?></div>
   <div class="f" ><?PHP
   $ids=$getres['ids'];
   
 
	   echo $getres['product']; 
  
   ?></div>
 
 <div class="g" style=" text-align:center"><?PHP echo $getres['SUM(qty)']; ?></div>
 <div class="fi" style=" text-align:center"><?PHP echo $getres['price']; ?></div>
 <div class="fi" style=" text-align:center"><?PHP echo $getres['SUM(total)']; ?></div>
 
 <?PHP } ?>
 
  
</div>
<div class="clear">
</div>
<div style="width:545px; height:auto; padding:5PX 10PX; margin-left:10PX; float:left; text-align:center; border:1px solid#999">Grand Total</div>
 <div style="width:125px; height:auto;padding:5PX 0PX; background:#666; float:left; text-align:center; color:#fff; border:1px solid#999">
<?php
$result=mysql_query("SELECT SUM(total) as total,tab from ".$db_basket." where tab='".$tale."' and status='3' GROUP BY tab  ");
while ($row=mysql_fetch_assoc($result)){ 
echo number_format($row['total']) ."&nbsp;&nbsp;Frs";

}
?> 

 </div>  
 <div class="clear"></div>
   <div style="position:relative; font-size:14px; text-align:center; bottom:0px; height:30px">Done today <?php echo date('l d-F-Y'); ?> @ <?php echo date('h:i'); ?> </div>

</div></div>

</div>


 
    </div>



<?php } ?>
</body>
</html>




