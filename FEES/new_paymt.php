 
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

<?php
include '../includes/dbc.php';
@session_start();
$bb =$con->query("SELECT * FROM users WHERE id=".$_SESSION['id']) or die(mysqli_error($con));

 while($userRow=$bb->fetch_array()){
 
$active=$userRow['full_name'];
 $level=$userRow['banned'];
 
 }
 
 	 //////////select academic year//////////////
$d=$con->query("SELECT * FROM years where status='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $ayear_name=$bu['year_name'];
	 $ayear=$bu['id'];
	
}
$am=$con->query("SELECT * FROM modes") or die(mysqli_error($con));

 while($us=$am->fetch_array()){ 

 ?>
 <a href="?new_paymt=<?php echo $_GET['new_paymt']; ?>&id=<?php echo $_GET['id']; ?>&year_id=<?php echo $_GET['ayear']; ?>&mo=<?php echo $us['name']; ?>" style="color:#000; border:1px solid#00; padding:5px 50px; width:400px; color:#F00; font-weight:bold; font-family:'Arial Black', Gadget, sans-serif">
   <?php echo $us['name']; ?> TRANSACTION
         
    </a>
 
 <?php } ?>
 
 
 
  <?PHP
 /////check if transaction type is checked and open the form
 if(isset($_GET['mo'])){ 
  ?>

<script type="text/javascript">
function doCalc(form) {
		 

  form.balance.value = ((parseInt(form.feeamt.value)-parseInt(form.part.value)));

}
</script>
  <?php
  if(isset($_GET['new_paymt'])){
	 $name=$_GET['new_paymt'];
	  $id=$_GET['id'];
	  $year_id=$_GET['ayear'];
	  
	  $bb =$con->query("SELECT * FROM users WHERE id=".$_SESSION['id']) or die(mysqli_error($con));

 while($userRow=$bb->fetch_array()){
 
$active=$userRow['full_name'];
 $level=$userRow['banned'];
 
 }
 
 


	   $a=$dbcon->query("SELECT * from fee_paymts  WHERE student_id='$id'   ") or die(mysqli_error($dbcon));
	 while($ad=$a->fetch_assoc()){
		 
		 
		 		 //////////Fees, bank ,regsitrating from settings tbl in school_db//////////////
$d=$con->query("SELECT * FROM settings where prog_id='".$ad['program_id']."' and level_id='".$ad['level_id']."' ") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $fees=$bu['fees'];
	 //$regs=$bu[''];
	
	  $bank=$bu['bank'];
	 $regs=$bu['reg'];
	
	
}

		 	 //////////select academic year//////////////
$d=$conn->query("SELECT * FROM levels,special,years,students where students.id='".$ad['student_id']."' AND
 levels.id=students.level_id AND special.id=students.dept_id AND years.id=students.year_id ") or die(mysqli_error($conn));
while($bus=$d->fetch_assoc()){
	
  
  ?>
  
  <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="" method="post" name="form" > 
 
  <input type="hidden" class="form-control" id="email" placeholder="Enter Full Names" name="active" value="<?php echo $active; ?>" required="required">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="first_name" value="<?php echo $bus['fname']; ?>" required="required">
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Bank:</label>
      <div class="col-sm-10">
       <select required class="form-control" id="sel1" name="bank" >
       <option></option>
       
        <option value="CASH"  >CASH </option>  
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
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
  <select class="form-control" name="level" style="width:300px" required>
    <option value="<?php echo $ad['level_id']; ?>"><?php echo $bus['levels']; ?></option>
   
  </select>
</div>
</div>
      
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Dept:</label>
      <div class="col-sm-10">
      
       <select class="form-control" name="dept_id" style="width:300px" required>
    <option value="<?php echo $bus['dept_id']; ?>"><?php echo $bus['prog_name']; ?></option>
   
  </select>
       
      </div>
    </div>
    
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Academic Year:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="ayear" value="<?php echo $bus['year_name']; ?>" readonly>
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fees Amount Owed:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="feeamt" value="<?php echo $ad['balance']; ?>" onBlur="doCalc(this.form)"  readonly >
      </div>
    </div>
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fee Amount Paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="part" onBlur="doCalc(this.form)" required="required" >
      </div>
    </div>
    
	   <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> Paid at :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" name="pads" value="<?php echo $_GET['mo']; ?>" onBlur="doCalc(this.form)" readonly="readonly" style="color:#f00; font-weight:bold" >
      </div>
    </div>
 
   
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Balance Due:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="balance" readonly="readonly" required="required" style="background:#FFC; color:#000; font-family:'Arial Black', Gadget, sans-serif">
      </div>
    </div>
    
    
     <input type="hidden"  name="paidsofar"  value="<?php echo $ad['fee_amt']; ?>" >
    <input type="hidden" name="student_id" value="<?php echo $bus['id'] ?>" />
    
      <input type="hidden" name="mats" value="<?php echo $bus['matricule'] ?>" />
    
     <input type="hidden" name="levels" value="<?php echo $l ?>" />
    
    
    
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
              <option value="12">December</option>tion>
				
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
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="do" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
  
  
    
</div></div>
<?php } } ?>

<?php } } ?>

<?php
if(isset($_POST['do'])){


$err = array();

	$_POST = array_map("ucwords", $_POST);
	

	 $student_id=$_POST['student_id'];

$level=$_POST['level'];

 $first_name=$_POST['first_name'];


$fname="$first_name $middle_name $last_name";

$month=$_POST['month'];
$part=$_POST['part'];
$day=$_POST['day'];

$year=$_POST['year'];
$year_id=$_POST['ayear'];
$matric=$_POST['mats'];


$feeamt=$_POST['feeamt'];
$part=$_POST['part'];

$accepted=$feeamt/2;

$bbm=$_POST['feeamt']-$_POST['part'];
$all=$part+$reg;

echo $mmm=$_GET['mo'];
	if($mmm=='CASH'){
		$r='CASH';
		$cash=$part;
		$bankk=0;
	}
	else {
		echo $r=$bank;
		$cash=0;
		$bankk=$part;
	}
	

$levels=$_POST['levels'];

$matriculex=$_POST['matriculex'];
 $paidsofar=$_POST['paidsofar'];
$dept_id=$_POST['dept_id'];
$cc=$_POST['department'];
 $totapiad=$paidsofar+$part;
$month=date('m');
$year=date('Y');
$balance=$_POST['balance'];

	
/************************ SERVER SIDE VALIDATION **************************************/
/********** This validation is useful if javascript is disabled in the browswer ***/



if ($bbm<0) {
echo "<script>alert('Negative Balance please')</script>";
//header("Location: register.php?msg=$err");
exit();
} 


if ($reg>200000) {
echo "<script>alert('Wrong Resitration Fee')</script>";
//header("Location: register.php?msg=$err");
exit();
} 
$user_ip = $_SERVER['REMOTE_ADDR'];

// stores sha1 of password
 $sha1pass = PwdHash($data['pass']);

// Automatically collects the hostname or domain  like example.com) 
$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
$path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

// Generates activation code simple 4 digit number
$activ_code = rand(1000,9999);

$month=$_POST['month'];;
$year=$_POST['year'];;
$day=$_POST['day'];;
$dates=$date=$day."-".$month."-".$year;;
$bank=$_POST['bank'];
$active=$_POST['active'];
$time=date('d-m-Y G:i:s');


$mmm=$_GET['mo'];
	if($mmm=='CASH'){
		$r='CASH';
		$cash=$part;
		$bankk=0;
	}
	else {
		echo $r=$bank;
		$cash=0;
		$bankk=$part;
	}
	echo $dates;
$query55556=$con->query("UPDATE daily  set  
company='$bank' where cust_id='".$matric."'  and year='$ayear'" ) or die(mysqli_error($con));



$coo=$dbcon->query("SELECT * FROM daily where date='$dates' and cust_id='".$matric."'") or die(mysqli_error($dbcon));
  echo $count=$coo->mum_rows;
	if($count>0){
		
echo "<script>alert('Error Recording have be done for that receipt on $dates!'); </script>";
echo '<meta http-equiv="Refresh" content="0; url=first.php?pay_again">';	

	}
	else {

 $daily=$con->query("INSERT INTO daily set cust_id='$matric',room='$room',paidtou='$dates',paidto='$active',day='$day',staffname='$fname',discount='$reg',amt='$part',levels='$level',
			rec='$cash',date='$dates',month='$month',year='$ayear',reason='fees',qty='1',area='1',price='$part',total='$part',owed='$balance',
			purpose='$mmm',company='$bank',time='$time',bank='$bankk',session='$s'") or die(mysqli_error($con));


 $query55=$conn->query("UPDATE fee_paymts  set  
balance='$balance',fee_amt='$totapiad'  where student_id='$student_id'  " ) or die(mysqli_error($conn));



echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
 	
 exit;
	
}
}


?>



