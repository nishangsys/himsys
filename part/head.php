 <link href="../assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">


<?php
include  'dbc.php';
@session_start();
/*select * from table where `date` between $date - interval 7 day and $date*/
if(!isset($_SESSION['user_name'])){
echo "<script>window.open('../login.php','_self')</script>";
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
		 
		 $om=("SELECT * from chat where name='".$_SESSION['user_name']."'  and date2='$dats' and hour='$HOUR' and sec='$sec'  order by id DESC  ") ;
		 $r=mysql_query($om) or die(mysql_error());
		if(mysql_num_rows($r)>0){
			
						 echo "<embed loop='false' src='../img/notify.ogg' hidden='true' autoplay='true' ";

		}
		else {
			echo "";
		}
		

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
<a href="../../logout.php"><i class="fa fa-power-off "></i> Log out</a> |
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
         
         
         
        
        
            <div class="inside" style="width:150px">
        <a href='<?PHP echo $_SERVER['_SELF']; ?>?add_cate'>Categories<br />
         <img src="../img/TICK.png" />
        </a>
        </div>
        
        
        <div class="inside" style="width:140px">
    <a href='<?PHP echo $_SERVER['_SELF']; ?>?add_depts'>  Departments<br />
                  <i class="fa fa-home fa-2x"></i>
     
</a>
        </div>
        
         <div class="inside" style="width:120px">
        
        <a href="../admin/update" target="new" > Edit Staff </a><br />
        <img src="../img/pb.png" />
        </div>
        
        <div class="inside">
        <a href="<?PHP echo $_SERVER['_SELF']; ?>?our_staff">All Staffs (<?php
		$Y = mysql_query("SELECT count(name) FROM staffs ") or die(mysql_error());
	  while($r=mysql_fetch_assoc($Y)){
		  echo $r['count(name)'];
	  }
		?> )<br />
               <i class="fa fa-users fa-2x"></i>
</a>
        </div>
        
          
        <div class="inside" style="width:120px">
        <a href="<?PHP echo $_SERVER['_SELF']; ?>?add_bonus" style="font-size:16px" >Add Bonus<br />
                <img src="../img/MONY.png" />
                 </a>
        </div>
        
           
        <div class="inside">
        
       
  <a href="<?PHP echo $_SERVER['_SELF']; ?>?chat"><span> <img src="../img/com.png" /><div class="com1"></div><div class="com">
       
       <?php
	  
$todaye=date('d-m-Y');
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");
	   $today=date('d-m-Y');
	   $cu=mysql_query("SELECT COUNT(message) as totcount from chat where name='".$_SESSION['user_name']."'and date2='$today' ")  or die(mysql_error());
	   while($tt=mysql_fetch_assoc($cu)){
		   echo $tt['totcount'];
	   }
	   
	   
	   ?>
       
       
       
       </div> Chat&nbsp;&nbsp; </span></a>
        </div>
          
              
        <div class="inside" style="width:130px">
        <a href="<?PHP echo $_SERVER['_SELF']; ?>?our_salaries">All Payslips<br />
                <img src="../img/pg.png" />
                </a>
        </div>
        
</div>


</DIV>

<?php } ?>