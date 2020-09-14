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
    
<?php

	$month=date('m');
	
	$year=date('Y');
  $sele="SELECT SUM(used),date,name,matric,permit FROM staff_reg where month='$month' and year='$year'  GROUP BY matric order by name";
	$runs=mysql_query($sele) or die (mysql_error());
	
$num=1;

?>
<h1>Staff Attendance Records for <?php echo date('F'); ?> <?php echo date('Y'); ?></h1>

<table>

 <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>NAMES</td>
    <td>MATRICULE</td>    
    <td>HRS SPEND</td>
    <td>PRESENCE</td>
        <td>PERMISSION DAYS </td>

    
   
        
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
    
    <td><?php echo $rows['name']; ?></td>
    <td><?php echo ($rows['matric']); ?></td>
    
    <td><?php echo (($rows['SUM(used)'])); ?> Hrs </td>
    
       <td><?php $R=mysql_query("SELECT COUNT(checkin) as tota from staff_reg where matric='".$rows['matric']."' and month='$month' and year='$year'") or die(mysql_error());
   
   while($ty=mysql_fetch_assoc($R)){
	   echo $tots=$ty['tota'];
   }
    ?> Days </td>
    <td><?php echo ($rows['permit']); ?> Days</td>
    
    </tr>
    
    
	<?php } ?>
    
    <tr style=" border-bottom:1px solid#000; background:#fff" bgcolor="#FF0000">
    <td>.</td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
  
    </table>
    

			
   

    



</div>
   <?php } ?>
</body>
</html>




