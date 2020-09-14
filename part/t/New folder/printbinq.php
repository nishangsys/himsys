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
<title>Printing Visitors</title>
<link href="style.css" type="text/css" rel="stylesheet" />
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

<div class="receipt" style=" border:none">
<div class="eachrec" style="border-bottom:none;"  >
	<div class="rechead">
    <img src="images/bg (1).jpg" />
    <div class="oth">
    <h1><?php echo $clients; ?></h1>
    <h2><?php echo $AD ?></h2>
    <h2>Tel: <?php echo $TEL ?></h2>
   
    </div></div>
    
    <div class="rechbod" style="border-bottom:none;">
    
    
   <?php
    
	$from=$_POST['from'];
	$to=$_POST['to'];
	$m=$_POST['month'];
	$y=$_POST['year'];
	
 $query="select * from visitors where day>='$from' and day<='$to' and   
  month like '%$m%' and year='2015' order by day";
	$runs=mysql_query($query) or die (mysql_error());
	
$num=1;

?>
<table style="line-height:1.5; width:100%">
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td> NAME</td>
    <td> DATE OF VISIT</td>
    <td> TIME OF VISIT</td>
   
    <TD>CONTACTS</TD>
    <td>TOPIC</td>
    <?php while($row=mysql_fetch_assoc($runs)){
	
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#fff; border:1px solid#000; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td><?php echo $row['name']; ?></td> 
            <td><?php echo $row['date']; ?></td>    

        <td><?php echo $row['today']; ?></td>    
   
    
   <td><?php echo  $row['tel'];?></td>
   <td><?php echo  $row['why'];?></td></td>
    </tr>
    
    <?php } ?>
    </table>
   
   
    </div>
    
</div>

</div>
   <br />
   
</body>
</html>
<?php } ?>


