<?php
require_once 'dbc.php';
require_once 'functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
		
	if(($_SESSION['banned'])!='20'){
		echo "<script>alert('Sorry.Cannot View Page')</script>";
		
		
			
	}
	else {
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipts</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>


   <div class="right">
   <table>
   <?php
    $cure="SELECT * from current where id='1'  ";
	$runs=mysql_query($cure) or die (mysql_error());
	while($rows=mysql_fetch_assoc($runs)){
		 $ac_year=$rows['name'];
	}
	  $tot_stu="
	 SELECT COUNT(name) as total from students where year_id='$ac_year'  	";
	$run=mysql_query($tot_stu) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 $all=$row['total'];
	}
	
	$tot_male="
	 SELECT COUNT(name) as total from students where year_id='$ac_year' and name='male'	";
	$run=mysql_query($tot_male) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 $male=$row['total'];
	}
	$tot_female="
	 SELECT COUNT(name) as total from students where year_id='$ac_year'  and name='female'	";
	$run=mysql_query($tot_female) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 $female=$row['total'];
	}
	
	$ind="
	 SELECT COUNT(name),class as total from students where year_id='$ac_year'  GROUP BY class	";
	$run=mysql_query($ind) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 $how=$row['total'];  echo $classes=$row['class'];
	}
	
	$allfin="
	 SELECT SUM(expected) as total from installment where year_id='$ac_year' 	";
	$run=mysql_query($allfin) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 $money=$row['total'];  
	}
	$allowes="
	 SELECT SUM(expected) as total from finance where year_id='$ac_year' 	";
	$run=mysql_query($allowes) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 $allthem=$row['total'];
	}
	
	$i=1;
   ?>
   <h1>Demographic statistics for the <?php echo $ac_year; ?> School Year</h1><br />
   <table>
   
   <tr style="color:#FFF; height:50px; padding:10px 0px; background:#1188aa"><td>S/N</td><td>Description</td><td>Number</td><td>Percentage</td></tr>

<tr ><td><?php echo $i++; ?></td><td> Total Number of Registered Students</td><td><?php echo $all; ?></td><td>100%</td></tr>

<tr style="background:#eee"><td><?php echo $i++; ?></td><td> Total Number of Male Students</td><td><?php echo $male; ?></td><td><?php echo round(($male/$all)*100);  ?> %  </td></tr>

<tr><td><?php echo $i++; ?></td><td> Total Number of Female Students</td><td><?php echo $female; ?></td><td><?php echo round(($female/$all)*100); ?> % </td></tr>


<tr style="background:#333; color:#FFF"><td> DEMOGRAPHIC STATS PER CLASS</td></tr>



<tr ><td></td><td>Number in Class</td><td>Number</td><td>--- </td></tr>
<?php

$ind="
	 SELECT COUNT(name),class  from students where year_id='$ac_year'  GROUP BY class order by class ASC	";
	$run=mysql_query($ind) or die (mysql_error());
	$i=1;
	while($row=mysql_fetch_assoc($run)){
		 $how=$row['COUNT(name)'];   $classes=$row['class'];
	
	
	?>

<tr style="background:#eee"><td><?php echo $i++; ?></td><td> <?php echo $classes; ?> </td><td ><?php echo $how; ?></td><td style="color:#f00"><?php echo round(($how/$all)*100) ?>% </td></tr>

<?php } ?>
</table>

  <h1>Finance statistics for the <?php echo $ac_year; ?> School Year</h1><br />

<table>

<tr style="color:#FFF; height:50px; padding:10px 0px; background:#1188aa"><td>S/N</td><td>Description</td><td>Amount</td><td>Percentage</td></tr>

<tr ><td><?php echo $i++; ?></td><td> Projected Income from Fees</td><td><?php echo $money; ?></td><td>100%</td></tr>

<?php

$ind="
	 SELECT SUM(newin),date  from finance where year_id='$ac_year'  GROUP BY newin order by newin ASC	";
	$run=mysql_query($ind) or die (mysql_error());
	$i=1;
	while($row=mysql_fetch_assoc($run)){
		 $sum=$row['SUM(newin)'];   $classes=$row['date'];
	
	
	?>

<tr style="background:#eee"><td><?php echo $i++; ?></td><td> Projected Income from <?php echo $classes; ?></td><td><?php echo $sum; ?></td><td><?php echo round(($sum/$money)*100); ?> % </td></tr>




<?php } ?>

</table>

<h1>Amount Owed Per Class/Department  for the <?php echo $ac_year; ?> School Year</h1>

<table>

<tr style="color:#FFF; height:50px; padding:10px 0px; background:#1188aa"><td>S/N</td><td>Description</td><td>Amount</td><td>Percentage</td></tr>

<tr ><td><?php echo $i++; ?></td><td> Projected Income from Fees</td><td style="color:#f00"><?php echo $allthem; ?></td><td>100%</td></tr>

<?php

$allowe="
	 SELECT SUM(expected),date from finance where year_id='$ac_year' GROUP BY date 	";
	$run=mysql_query($allowe) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 $owe=$row['SUM(expected)'];
		$classe=$row['date']; 
		
	
	
	
	?>

<tr style="background:#eee; color:#F00"><td><?php echo $i++; ?></td><td> Projected Income from <?php echo $classe; ?></td><td><?php echo $owe; ?></td><td><?php echo round(($owe/$allthem)*100); ?> % </td></tr>




<?php } ?>

</table>






<table>

<?php
$today=date('d');
	 $cure="SELECT * from current where id='1'  ";
	$runs=mysql_query($cure) or die (mysql_error());
	while($rows=mysql_fetch_assoc($runs)){
		 $ac_year=$rows['name'];
	}

$all="SELECT SUM(expected),SUM(paid) from finance where year_id='$ac_year' ";
		$run=mysql_query($all) or die(mysql_error());
		while($row=mysql_fetch_assoc($run)){
			 $paid=$row['SUM(paid)'];
			$owed=$row['SUM(expected)'];
			$total=$paid+$owed;
		}

?>
    <h1>Finance Stats for <?php echo $ac_year; ?> School Year</h1><br />
    
     

<tr style="color:#FFF; height:50px; padding:10px 0px; background:#1188aa"><td>S/N</td><td>Description</td><td>Total(FCFA)</td><td>Percentage</td></tr>


<tr ><td><?php echo $i++; ?></td><td> Projected Income</td><td><?php echo $total; ?></td><td> 100 %</td></tr>


<tr style="background:#eee" ><td><?php echo $i++; ?></td><td> Total Fees Received</td><td><?php echo $paid; ?></td><td><?php echo round(($paid/$total)*100); ?> %</td></tr>

<tr  ><td><?php echo $i++; ?></td><td> Total Fees Owed</td><td><?php echo $owed; ?></td><td><?php echo round(($owed/$total)*100); ?> %</td></tr>






</table><br />
Our Results shows that <P style="color:#F00; text-decoration:blink"><?php if ($owed>$paid) echo "Our Clients are owing us more than the income we have recived so far so were are required to introduce rapid cash recovery campaign like fee drive for students who are owing using for a periond of time".'</p>';
else {
	
	echo "<p style='color:#000'>Our financial situation is healthy for the amount being owed by our clients is less than the amount they have paid so far so we can still take an action depending on the time of the year ";
}


  ?></P>
<h1>  Digrammatical Representation of Our Financial Situation</h1>

<iframe src="libchart/demo/PieChartColorTest.php" style="height:630px; width:950px; border:1px solid#FFF"></iframe>

</body>
</html>
<?php } }?>


