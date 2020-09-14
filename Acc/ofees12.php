<?php
include '../includes/dbc.php';
@session_start();
$bb =$con->query("SELECT * FROM users WHERE id=".$_SESSION['id']) or die(mysqli_error($con));

 while($userRow=$bb->fetch_array()){
 
$active=$userRow['full_name'];
 $level=$userRow['banned'];
 
 }
 $y=date('Y');
if(isset($_GET['cust'])){
	
	$who=$_GET['cust'];
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $year_id=$bu['year'];
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
}



	  $select=$conn->query("SELECT * from students  where roll='".$who."' ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
		$AY=$rows['year_id'];
		$matrics=$rows['matricule'];
		$id=$rows['c110'];
		$POB=$rows['cxx1'];
		$DOB=$rows['cxx2'];
		 $l=$rows['levels'];
         $deptss=$rows['departmet'];
		 $sessionss=$rows['cxx6'];
	
		
	 //////////Fees, bank ,regsitrating from settings tbl in school_db//////////////
	
$dop=$con->query("SELECT * FROM `settings` where prog LIKE '%".$deptss."%' and levels LIKE '%".$rows['levels']."%'  ") or die(mysqli_error($con));

 $countss=$dop->num_rows;
while($bus=$dop->fetch_assoc()){
	 $fees=$bus['fees'];	
	 $bank=$bus['bank'];
	 /*
	  $adminp=$bus['adminp'];
	  $sunion=$bus['sunion'];
	  $tshirt=$bus['tshirt'];
	  $session=$bus['cxx6'];
	  $regfee=$bus['reg'];
	  $regs=$bus['reg']+$sunion+$adminp+$tshirt;
	  */
	
	
}


 //////////Setting Fees from classes12 tbl//////////////
$a=$conn->query("SELECT * FROM historic where matricule='".$matrics."' ") or die(mysqli_error($conn));
while($b=$a->fetch_assoc()){
	$ak=$b['cxx6'];
	
	
}


////////////////check from the historique if name exits, then return error else run script			 
	$a=mysql_query("SELECT * FROM historic where matricule='$matrics' and year_id='$year_id' AND amount_paid>0 ") or die(mysql_error());

if(mysql_num_rows($a)>0){
	echo "<script>alert('Sorry ".$rows['fname']." has paid his or her first installment/Registration before so go and instead update the amount')</script>";
	echo "<img src='../img/nb.png'>";
}
else {
	 
	
	?>
 
  <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="../assets/css/layout2.css" rel="stylesheet" />
       <link href="../assets/plugins/flot/examples/examples.css" rel="stylesheet" />

<style>
body{ font-family:Arial, Helvetica, sans-serif;
font-size:16px;
font-weight:bold}
.demoInputBox{padding:7px; border:#F0F0F0 1px solid; border-radius:4px;}
.status-available{color:#000; background:#FF0; padding:10px 10px}
.status-not-available{color:#ff0;background:#F00; padding:10px 10px}
</style>
<script type="text/javascript">
function doCalc(form) {

  form.balance.value = (((parseInt(form.feeamt.value)-parseInt(form.part.value))));

}
</script>

<script src="../Fees/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function checkAvailability() {
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "check_availability.php",
	data:'username='+$("#username").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status").html(data);
		$("#loaderIcon").hide();
	},
	error:function (){}
	});
}
</script>


<?php
$am=$con->query("SELECT * FROM modes") or die(mysqli_error($con));

 while($us=$am->fetch_array()){ 

 ?>
 <a href="?cust=<?php echo $_GET['cust']; ?>&mo=<?php echo $us['name']; ?>" style="color:#000; border:1px solid#00; padding:5px 50px; width:400px; color:#F00; font-weight:bold; font-family:'Arial Black', Gadget, sans-serif">
   <?php echo $us['name']; ?> TRANSACTION
         
    </a>
 
 <?php } ?>
  
  
  <div style="clear:both"></div>
  <div class="col-sm-12">
  <?PHP
 /////check if transaction type is checked and open the form
 if(isset($_GET['mo'])){ 
  ?>
  
  
  
  
      <div class="well">
 <form class="form-horizontal" action="" method="post" name="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
      
  <input name="username" type="text" value="<?php echo $rows['fname'];; ?>" id="username" class="demoInputBox" onBlur="checkAvailability()" style="width:65%; border:2px solid#f00" required="required"><span id="user-availability-status" style="color:#f00" > <?php
  
  $d=$conn->query("SELECT * FROM historic where matricule='$matrics' and year_id!='$year_id' AND balance>0  ") or die(mysqli_error($conn));
  $counts=$d->num_rows;
while($bu=$d->fetch_assoc()){
	 $bal=$bu['balance'];
	 $b=number_format($bal);
}	
	if($counts>0){
		echo "Is a Debtor with $b";
		
	}
	else {
		//echo "Is not a Debtor";
	}
	
  ?></span>    

     
      </div>
    </div>
    
       <div class="form-group">
      <label class="control-label col-sm-2" for="email">Matricule:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="class" value="<?php echo $rows['matricule'];; ?>"  readonly="readonly">
      </div>
    </div>
         <div class="form-group">
      <label class="control-label col-sm-2" for="email">Bank/Method:</label>
      <div class="col-sm-10">
       <select  class="form-control" required id="sel1" name="bank" >
   
       
        <option value="<?php echo $_GET['mo']; ?>"  ><?php echo $_GET['mo']; ?> </option>  
       
        <option value="<?php echo $bank; ?>"  ><?php echo $bank; ?> </option>  
        <?php
							
								$result = $con->query("SELECT * FROM our_accounts") or die(mysqli_error($con));
				while($bu=$result->fetch_assoc()){
								?>
                              
        <option value="<?php echo $bu['name']; ?>"  ><?php echo $bu['name']; ?> </option>
    <?php } ?> 
        
      </select>
      </div>
    </div>
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Dept:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="class" value="<?php echo $rows['departmet'];; ?>" readonly>
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
      
       <input type="text" class="form-control" id="email"  name="levs" value="Level <?php echo ($rows['levels']); ?> Fees paid at <?php echo $_GET['mo']; ?>" style="color:#f00; font-weight:bold" />
        
      </div>
    </div>
      
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">A.Y:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="year_id" value="<?php echo $current; ?><?php echo $year_id; ?>" readonly>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Debts:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="debts" value="<?php
		  if(empty($bal)){
			  echo 0;
		 }
		 else {
			 echo $bal;
		 }
			 
		
						 
				  ?>" style="color:#f00; font-weight:bold"onBlur="doCalc(this.form)" readonly="readonly" >
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fees:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="feeamt" value="<?php
		 echo $fees+$bal;
			 
		
						 
				  ?>" onBlur="doCalc(this.form)" required="required" readonly="readonly" >
      </div>
    </div>
    
 
    <!--
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> Waiver:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="waver" value="0" onBlur="doCalc(this.form)" >
      </div>
    </div>-->
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> Fee Paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="part" value="0" onBlur="doCalc(this.form)" >
      </div>
    </div>
    
   
     
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Balance:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="balance" readonly="readonly" required="required" style="background:#FFC; color:#000; font-family:'Arial Black', Gadget, sans-serif">
      </div>
    </div>
    <table style="margin-left:120px">
   <tr><td>Day Paid</td><td> 
        <select class="form-control" id="sel1" name="day" onBlur="doCalc(this.form)" required>
         <option value="<?php echo date('d'); ?>"  onBlur="doCalc(this.form)"><?php echo date('d'); ?></option>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=1;$day<=31;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select>
      </td><td>Month Paid</td><td><select class="form-control" id="sel1" name="month" onBlur="doCalc(this.form)" required>
        <option value="<?php echo date('m'); ?>"  onBlur="doCalc(this.form)"><?php echo date('F'); ?></option>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
      <option value="01">January</option>
              <option value="02">Febuary</option>
              <option value="03">March</option>
              <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
              <option value="07">July</option>
              <option value="08">August</option>
              <option value="09">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
				
  </select></td><td>Year Paid</td><td><select class="form-control" id="sel1" name="year" onBlur="doCalc(this.form)" required>
    <option value="<?php echo date('Y'); ?>"  onBlur="doCalc(this.form)"><?php echo date('Y'); ?></option>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=2016;$day<=2020;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select></td></tr>
    </table>
    
   
    
    <input type="hidden" name="matric" value="<?php echo $rows['matricule'];
	 ?>" />
    
      <input type="hidden" name="disc" value="0" />
    
     <input type="hidden" name="levels" value="<?php echo $l ?>" />
    
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="save" class="btn btn-danger">Save</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php }}?>

<?php

$err = array();
if(isset($_POST['save'])){
	$_POST = array_map("ucwords", $_POST);
	

	
$usr_email = $data['usr_email'];
$user_name = $data['user_name'];
$level=$_POST['level'];

 $first_name=$_POST['username'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];

$fname="$first_name $middle_name $last_name";

$month=$_POST['month'];
$part=$_POST['part'];
$day=$_POST['day'];

$year=$_POST['year'];
$year_id=$_POST['year_id'];
$dbirth=$_POST['month'];

$place=$_POST['place'];
$matric=$_POST['matric'];

$nation=$_POST['nation'];


$religion=$_POST['religion'];
$qualification=$_POST['qualification'];

$address=$_POST['address'];
$city=$_POST['city'];

$feeamt=$_POST['feeamt'];
$part=$_POST['part'];

$guide=$_POST['guide'];
$reg=$_POST['reg'];

echo $all=$feeamt+$reg;
// $bbm=($_POST['feeamt']-($_POST['part']+$_POST['reg']+$_POST['disc']));
 $bbm=$all-($_POST['part']+$_POST['disc']);




$cateory=$_POST['category'];

$levels=$_POST['levs'];


$contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];

$yb=$_POST['bank'];
$guardian1=$_POST['gaurdain1'];
$guardian2=$_POST['guardian2'];

$hschool=$_POST['hschool'];
$hgrade=$_POST['hgrade'];

$oschool=$_POST['oschool'];
$ograde=$_POST['ograde'];
$pass=$_POST['pass'];
$partd=$_POST['motive'];

$as=$_POST['as'];
$paid=$_POST['part'];
$class1=$_POST['class'];
$matriculex=$_POST['matric'];

$matricule=$_POST['matricule'];
$cc=$_POST['department'];
$month=$_POST['month'];;
$year=$_POST['year'];;
$day=$_POST['day'];;
$bank=$_POST['bank'];;
$debts=$_POST['debts'];
$mmm=$_GET['mo'];
	if($mmm=='CASH'){
		$r='CASH';
		$cash=$paid;
		$bankk=0;
	}
	else {
		echo $r=$yb;
		$cash=0;
		$bankk=$paid;
	}
	
$bal=$_POST['balance'];;
$waver=$_POST['waver'];;
	$date=$day."-".$month."-".$year;
	$dd=date('d-m-Y');
/************************ SERVER SIDE VALIDATION **************************************/
/********** This validation is useful if javascript is disabled in the browswer ***/



if ($bbm<0) {
echo "<script>alert('Negative Balance please of $bbm')</script>";
//header("Location: register.php?msg=$err");
exit();
} 

if ($part<1) {
echo "<script>alert('Nothing has been inputed')</script>";
//header("Location: register.php?msg=$err");
exit();
} 

if ($feeamt<100000) {
echo "<script>alert('Please Tell the Account to Input Fees Amount for this Program')</script>";
//header("Location: register.php?msg=$err");
exit();
} 

$dates=date('d-m-Y');
$time=date('d-m-Y G:i:s');

/////if debts exist update old debt to zero

	if($debts>0){
		
		 $query551=$conn->query("UPDATE historic  set  
balance='0' WHERE matricule='$matriculex' " ) or die(mysqli_error($conn));
		
		

 $query55=$conn->query("insert into historic  set  
matricule='$matriculex',student_name='$fname',
class='$l',amountpaid='$class1',amount_paid='$part',expected_amount='$feeamt',balance='$bal',id='16',date='$date' ,year_id='$year_id',photo='$matric' ,time='$l',olddebt='$reg',xxx='$debts',c111='$waver' " ) or die(mysqli_error($conn));






 $daily=$con->query("INSERT INTO daily set cust_id='$matriculex',room='$room',day='$day',staffname='$fname',discount=' $regfee',amt='$part',date='$date',month='$month',year='$year_id',reason='fees',qty='1',area='1',price='$paid',total='$part',owed='$bal',company='$r',paidto='$active',time='$time',
			purpose='".$_GET['mo']."',rec='$cash',bank='$bankk',sunion='$sunion',adminp='$adminp',tshirt='$tshirt',levels='$l',session='$session',waver='$waver' ") or die(mysqli_error($con));


echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	}
	
	////if debts do not exixt just insert
	else {
 

 $query55=$conn->query("insert into historic  set  
matricule='$matriculex',student_name='$fname',
class='$l',amountpaid='$class1',amount_paid='$part',expected_amount='$feeamt',balance='$bal',id='16',date='$date' ,year_id='$year_id',photo='$matric' ,time='$l',olddebt='$reg',c111='$waver'" ) or die(mysqli_error($conn));






 $daily=$con->query("INSERT INTO daily set cust_id='$matriculex',room='$room',day='$day',staffname='$fname',discount=' $regfee',amt='$part',date='$date',month='$month',year='$year_id',reason='fees',qty='1',area='1',price='$paid',total='$part',owed='$bal',company='$r',paidto='$active',time='$time',
			purpose='".$_GET['mo']."',rec='$cash',bank='$bankk',sunion='$sunion',adminp='$adminp',tshirt='$tshirt' ,levels='$l',session='$sessionss',waver='$waver'") or die(mysqli_error($con));


echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	
}
}
	}
 ?>



<?php } ?>