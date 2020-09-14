

<?php
include  '../dbc.php';
require_once '../functions/functions.php';
session_start();
/*select * from table where `date` between $date - interval 7 day and $date*/
if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
	@session_start();
	$name=$_SESSION['user_name'];
	$date=date('d-m-Y');
	$time=date('G:i');
	$ref2=($_SERVER['PHP_SELF']);
$agent=($_SERVER['HTTP_USER_AGENT']);
$ip=@$_SERVER['REMOTE_ADDR'];


	$l=mysql_query("INSERT INTO tracker set name='$name', date='$date',time='$time',action='login',ref2='$ref2',agent='$agent',ip='$ip'") or die(mysql_error());
	

 ?>
 <script language="JavaScript" src="../js/pop-up.js"></script>
<div class="heads" >


<div class="fhead">

<?PHP
$cus1="SELECT * from client ";
$run1=mysql_query($cus1) or die (mysql_error());
 while ($rows=mysql_fetch_assoc($run1)){
	 $clients=$rows['name'];
	 $AD=$rows['address'];
	 $TEL=$rows['as1'];
	 $vil=$rows['as2'];
	  $PRO=$rows['as3'];
 }
 
 
 
 

 ?>

<div class="fh_left"  >

<DIV style="width:105px; height:100px; z-index:3; float:left; ">


</DIV>

<DIV style="width:300px; height:50px; z-index:3;  float:left; margin-top:">
 <h2 style="font-size:20px; color:#fff; font-family:Arial, Helvetica, sans-serif; text-shadow:none"><?PHP echo $PRO; ?> For<span style="color:#FF0; text-shadow:2px 2px #000; text-transform:uppercase"> <?php echo $clients; ?></span>
 
 </h2>


</DIV>

</div>





<div class="fh_right">
<p style="color:#fff; margin-top:0px"><i class="fa fa-user "></i> <?php echo $_SESSION['user_name']; ?>| 
<a href="backup.php" style="color:#FC0; text-shadow:1px 1px #000"><i class="fa fa-database "></i> BackUp </a> |
<a href="../logout.php" style="color:#F00; text-shadow:2px 2px #000"><i class="fa fa-power-off " ></i> Log out</a> |
Help? 679 135 426
<br />

 </p>

</div>

</div>



<?php } ?>