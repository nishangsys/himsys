 <link href="../assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">


<?php
include  'dbc.php';
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


$dats=date('d-m-Y');
		$HOUR=date('h');
		$sec=date('i');
			$mminsec=date('s');
		 
		

	$l=mysql_query("INSERT INTO tracker set name='$name', date='$date',time='$time',action='login',ref2='$ref2',agent='$agent',ip='$ip'") or die(mysql_error());
	

 ?>
 <script language="JavaScript" src="../js/pop-up.js"></script>
<div class="heads">


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

<div class="fh_left" >

<DIV style="width:105px; height:200px; z-index:3; float:left; ">
<IMG src="../img/logo.png" style="border-radius:50px 50px 50px 50px; border:1px solid#000; height:100px; width:100px;" />

</DIV>

<DIV style="width:300px; height:200px; z-index:3;  float:left;">
 <h2 style="font-size:20px"><?PHP echo $PRO; ?> FOR <?PHP echo $clients; ?>  </h2>

</DIV>

</div>





<div class="fh_right">
<p><i class="fa fa-user "></i> <?php echo $_SESSION['user_name']; ?> |

<a href="frontpage.php"> <i class="fa fa-cog "></i> Settings</a> | 
<a href="backup.php" style="color:#FC0; text-shadow:1px 1px #000"><i class="fa fa-database "></i> Back Up </a> |
<a href="../logout.php"><i class="fa fa-power-off "></i> Log out</a> |
<a href="../newkey.php" style="color:#1188aa">
<i class="fa fa-key "></i>  </a> |

<br />
 <marquee behavior="alternate" dir="rtl" scrollamount="2">
 <span class="error">Expiry Date:
	<?php
		
		 $checksoft="SELECT * from roll where roll_id='1' and status='2' ";
	$run=mysql_query($checksoft) or die (mysql_error()); 
	
		while($row=mysql_fetch_assoc($run)){
	echo $new=$row['new'];
	
		}
		

		
		?> <span style="color:#000; font-weight:normal; font-size:14px">/Y-mm-dd</span></span></marquee>
 </p>

</div>

</div>

<DIV class="Ohead">
<div class="subpost">
         
         
         
        
</div>


</DIV>

<?php } ?>