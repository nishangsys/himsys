 <link href="../assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
   <script language="JavaScript" src="../js/pop-up.js"></script>

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
 }
   $cure="SELECT * from current where id='1'  ";
	$runs=mysql_query($cure) or die (mysql_error());
	while($rows=mysql_fetch_assoc($runs)){
		 $ac_year=$rows['name'];
	}
 ?>
<div class="fh_left" >
<h2> V2515 SOFTWARE FOR </h2>
<h3><?PHP echo $clients; ?></h3>
<h4><?PHP echo $TEL; ?></h4>

</div>






<div class="fh_right">
<p><i class="fa fa-user "></i> <?php echo $_SESSION['user_name']; ?> |

<a href="dashboard.php"> <i class="fa fa-cog "></i> Settings</a> | 
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
         
         
         
        
        
              <div class="inside" style="width:120px">
        <a href="adminpage.php?debtors" >Debtors </a><br />
                <img src="../img/MONY.png" />
        </div>
        
            <div class="inside" style="width:150px">
        <a href="adminpage.php?ban" >Ban a User</a><br />
        <img src="../img/sh.png" />
        </div>
       
        <div class="inside" style="background:#000; color:#fff">
        <a href="adminpage.php?accounts" style="color:#ff0">Access Accounts </a><br />
        <i class="fa fa-file-text fa-2x"></i>
        </div>
        
        <div class="inside" style="width:180px" >
        <a href="adminpage.php?customers" >All Customers (<?php allnationas(); ?>) </a><br />
         <i class="fa fa-users fa-2x"></i>
        
        </div>
        
        <div class="inside">
        
        <a href="adminpage.php?stats"> Statistics </a><br />
        <i class="fa fa-pie-chart fa-2x"></i>
        </div>
        
         <div class="inside" style="width:100px">
        
        <a href="adminpage.php?pay_back" style="color:#f00; text-decoration:blink"> Pay Backs </a><br />
        <img src="../img/pb.png" />
        </div>
        
         <div class="inside" style="width:100px">
        
        <a href="adminpage.php?chat" > Chat </a><br />
        <img src="../img/comment.png" />
        </div>
        
          
        
</div>


</DIV>

<?php } ?>