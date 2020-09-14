<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <link href="../assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
<!---

<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>

<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>

<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>

<i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>---->




<div style="width:98%; height:auto; background:#eee; border:1px solid#000; margin:auto">
<h1 style="color:#f00; font-size:18px">Before Generate Vouchers Note the Following:</h1>
<p style="padding:10px 10px; font-size:18px; line-height:1.7">
1. Empty ALL bonuses<br />
2.  Empty ALL Deductions<br />
1. Suspend all Staffs that are under suspension<br />
2. Grant all leaves<br />
3. Unsuspend all Staffs that have been unsuspened<br />
4. Cancel all leaves<br />
<h1 style=" font-size:18px">The suspended staff are:</h1>
<?php
$fg=mysql_query("SELECT * FROM staffs where banned='2'") or die(mysql_error());
$i=1;
while($t=mysql_fetch_assoc($fg)){
	echo "<ol>";
	echo "<li style='color:#f00'>  ".$i++."&nbsp;.".$t['name'].""."<a href='?unsuspend_staff'>&nbsp;&nbsp;Unsuspend</a>."."</li>";
	
	echo "</ol>";
}

?>

<h1 style=" font-size:18px">The staff on leave are:</h1>
<?php
$r=mysql_query("SELECT * FROM staffs_leaves  order by id DESC  ") or die(mysql_error());
?>
<table style="width:100%">
<tr>
<td>S/N</td><td>Name</td><td>Reason</td><TD>Statring From</TD><td>Ends on</td><td>Cancel Leave</td></tr>
<?php while($row=mysql_fetch_assoc($r)){ ?>
<tr>
<td><?php echo $i++; ?></td><td><?php echo $row['name']; ?></td><td><?php echo $row['reason']; ?></td><TD><?php echo $row['froms']; ?></TD>
<TD><?php echo $row['toos']; ?></TD>
<td><a href='?all_onleave'> Cancel Leave</a></td>

</tr>
 <?php } ?> 



</table>



<h1 style=" font-size:18px">The staff with Loans are:</h1>

<table style="width:100%; background:#F9C">
<tr style="background:#0CF">

  <?php
   $df=mysql_query("SELECT * FROM loans where reason='' AND loan_cost>1 order  by id DESC") or die(mysql_error());
   $i=1;
   ?>

   <td>S/N</td><td>Name</td><td>Loan Amount</td><td>Paid in<br>howmany months</td><td>Amt per Month<td>Loan Cost</td><td>Start Month<br>Of Paymt</td><td>End Month<br>of Payment</td><td>Paidsofar</td><td>Permit <br />This Month</td></tr>
   <?php while($fg=mysql_fetch_assoc($df)){ ?>
   
   
     <tr>
   <td><?php echo $i++; ?></td><td><?php echo $fg['name']; ?></td><td><?php echo $fg['loan']; ?></td><td><?php echo $fg['monthin']; ?></td><td><?php echo $fg['amt_paidin']; ?></td><td><?php echo $fg['loan_cost']; ?></td><td><?php echo $fg['startmonth']; ?>/<?php echo $fg['syear']; ?></td><td><?php echo $fg['endmonth']; ?>/<?php echo $fg['endyear']; ?></td><td><?php   echo $fg['loan']+$fg['pertc_amt']-$fg['loan_cost']; ?></td><td>
   <a href="?note&permit=<?php echo $fg['id']; ?>" style="color:#Fff" onclick="return confirm('Are you sure you wish to suspend loan repayment by <?php echo $fg['name']; ?> for <?php echo date('F'); ?>')">Permit</a>
   <?php } ?>
   
</tr>
 


</table>












<table>

<tr>
<TD>
<a href="?month" style="color:#fff; text-decoration:none; font-weight:bold; font-size:18px">
<button name="submit" type="submit">I am done Go and Generate <?php echo date('F'); ?> Payslip</button></a></TD>



</table>
</p>
</div>
<?php
if(isset($_GET['permit'])){
	$di=$_GET['permit'];
	$month=date('m');
	$year=date('Y');
	$fgg=mysql_query("UPDATE loans set permit='2', pmonth='$month/$year' where id='$di'") or die(mysql_error());
	echo "<script>alert('Operation Successfull'
	)</script>";
	
	echo '<meta http-equiv="Refresh" content="1; url=staffpage.php?note">';

}
?>

</body>
</html>