   <link href="../reception/style.css" rel="stylesheet" type="text/css" />
 <link href="../assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
          <style>
.com1{
	width:30px;

	background:url(../img/com.png);
	
	float:left;
	
}
.com{
	
	background:#f00;
	height:25px;
	padding:0px 5px;
	font-size:12px;
	border-radius:15px 15px 15px 15px;
	color:#fff;
	float:left;
	position:absolute;
	top:0px;
	margin-left:20px;	
}

</style>

<?php
$level=$_SESSION['banned'];
$area;
 $section=$_GET['area'];
if( $section=='15'){
 $section;
	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	 $serial='Bar';
	$db_basket='basket';
	$namess='Bar';
	$folder="bar";
	
}
else if( $section==10){
		 $dashbd;
		$section;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
 $serial='Restau';
	$db_basket='restau_basket';
	$namess='Restaurant';
	$folder="restau";
	
}

else if($section=='2'){
		 $dashbd;

	$a_area='2';
	$page='../bauca/baucapage.php';
	$db_table='bauca_tables';
	 $serial='Bouccarau';
	$db_basket='bauca_basket';
	$namess='Bouccarou/ Restau Bar';
	$folder="bauca";
	
}
else if($section=='18'){
		  $dashbd;

	$a_area='18';
	$page='../VIP/clubpage.php';
	$db_table='other_tables';
	 $serial='VIP';
	$db_basket='other_basket';
	$folder='VIP Bar';
	
	
	
}


$time=date('Gi');
if($time==240){
	echo "<script>alert('PLEASE CLOSE ALL COUNTS FOR TODAY BEFORE ITS TOO LATE')</script>";
}
else {
}
include  '../dbc.php';

		 $today=date('d-m-Y');
$cvv=mysql_query("SELECT * from to_boss where date='$today'  and dept='$folder'  ") or die(mysql_error());
if(mysql_num_rows($cvv)>0){
		echo "<div style='background:#f00; color:#ff0; width:400px; text-align:center; padding:10px 10px; margin:auto; margin-top:120px'>Sorry Today has been closed. Carry foward Tommorow</div>";
		exit;
	}
	else {
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



$level=$_SESSION['banned'];
 
 $section=$_GET['area'];
if($section=='20' or $section=='15'){
 $section;
	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serials='Bar';
	$db_basket='basket';
	$namess='Bar';
	$folder="bar";
	
}
if($section=='20' or $section=='10'){
		 $dashbd;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
	$serials='Restau';
	$db_basket='restau_basket';
	$namess='Restaurant';
	$folder="restau";
	
}

if($section=='20' or $section=='2'){
		 $dashbd;

	$a_area='2';
	$page='../bauca/baucapage.php';
	$db_table='bauca_tables';
	//$serial='Bouccarau';
	$serials='bauca';
	$db_basket='bauca_basket';
	$namess='Bouccarou/ Restau Bar';
	$folder="bauca";
	
}
if($section=='20' or $section=='18'){
		 $dashbd;

	$a_area='18';
	$page='../VIP/clubpage.php';
	$db_table='other_tables';
	$serials='VIP';
	$db_basket='other_basket';
	$namess='VIP Bar';
	$folder="VIP";
	
	
}



 ?>
<script language="JavaScript" src="../js/pop-up.js"></script>
<div class="heads" style="background:#033" >


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

<?php } } ?>