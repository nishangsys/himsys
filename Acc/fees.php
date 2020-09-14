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
		 $yl=$rows['levels'];
	
		 //////////Fees from classes12 tabl in university db//////////////
$d=$conn->query("SELECT * FROM classes12 where class='".$rows['departmet']."' ") or die(mysqli_error($conn));
while($bu=$d->fetch_assoc()){
	
	 //$regs=$bu[''];
	 $id=$bu['ids'];
	
	 $hl=$bu['conn'];
	 $ll=$bu['depf'];
	
}




		 //////////Fees, bank ,regsitrating from settings tbl in school_db//////////////
$d=$con->query("SELECT * FROM settings where prog='".$rows['departmet']."' and levels='$yl' ") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $fees=$bu['fees'];
	 //$regs=$bu[''];
	
	 $bank=$bu['bank'];
	 $regs=$bu['reg'];
	
	
}








////////////////check from the historique if name exits, then return error else run script			 
	$a=mysql_query("SELECT * FROM historic where matricule='$matrics' and year_id='$year_id' AND amount_paid>0 ") or die(mysql_error());

if(mysql_num_rows($a)>0){
	echo "<script>alert('Sorry ".$rows['fname']." has paid his or her first installment before go and instead update the amount')</script>";
	echo "<img src='../img/nb.png'>";
	exit;
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
		 

  form.balance.value = ((parseInt(form.feeamt.value)-parseInt(form.disc.value)+parseInt(form.reg.value)-parseInt(form.part.value)));

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

  
  <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="" method="post" name="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
      
  <input name="username" type="text" value="<?php echo $rows['fname'];; ?>" id="username" class="demoInputBox" onBlur="checkAvailability()" style="width:65%; border:2px solid#f00" required="required"><span id="user-availability-status" ></span>    

     
      </div>
    </div>
    
       <div class="form-group">
      <label class="control-label col-sm-2" for="email">Matricule:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="class" value="<?php echo $rows['matricule'];; ?>" required="required">
      </div>
    </div>
         <div class="form-group">
      <label class="control-label col-sm-2" for="email">Bank:</label>
      <div class="col-sm-10">
       <select required class="form-control"  name="bank" required >
       <option value="<?php echo $bank; ?>"><?php echo $bank; ?></option>
       
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
       
        
         <select required class="form-control"  name="class" required >
       <option value="<?php echo $rows['departmet'];; ?>"><?php echo $rows['departmet'];; ?></option>
       
        <?php
							
								$result = $con->query("SELECT * FROM settings group by prog") or die(mysqli_error($con));
				while($bu=$result->fetch_assoc()){
								?>
                              
        <option value="<?php echo $bu['prog']; ?>"  ><?php echo $bu['prog']; ?> </option>
    <?php } ?> 
        
      </select>
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
      
       <input type="text" class="form-control" id="email"  name="lev" value="<?php echo $current; ?><?php if($hl==1){
			echo "200";
		}
		else if($ll=='PG'){
		echo "500";

		}
		else if($AY==$year_id){
			echo $rows['levels']; 
		}?>" required="required">
        
      </div>
    </div>
      
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">A.Y:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="year_id" value="<?php echo $current; ?><?php echo $year_id; ?>" readonly>
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fees:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="feeamt" value="<?php
				 
	 	 //////////select academic year//////////////
$d=$conn->query("SELECT * FROM classes12 where class='".$rows['departmet']."' ") or die(mysqli_error($conn));
while($bu=$d->fetch_assoc()){
	echo $fees1=$bu['fees'];
	
}			 
		
						 
				  ?>" onBlur="doCalc(this.form)" required="required" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Registration</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="reg"  required="required" value="<?php echo $regs; ?>"   >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> Amount Paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="part" value="0" onBlur="doCalc(this.form)" >
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> Discount:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="disc" value="0" onBlur="doCalc(this.form)" >
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
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=1;$day<=31;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select>
      </td><td>Month Paid</td><td><select class="form-control" id="sel1" name="month" onBlur="doCalc(this.form)" required>
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
    
      <input type="hidden" name="ass" value="<?php echo $ass ?>" />
    
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
$sex=$_POST['sex'];

$religion=$_POST['religion'];
$qualification=$_POST['qualification'];

$address=$_POST['address'];
$city=$_POST['city'];

$feeamt=$_POST['feeamt'];
$part=$_POST['part'];
$POB=$_POST['POB'];
$DOB=$_POST['DOB'];
$accepted=$feeamt/2;
$guide=$_POST['guide'];
$reg=$_POST['reg'];

 $all=$feeamt+$reg;
// $bbm=($_POST['feeamt']-($_POST['part']+$_POST['reg']+$_POST['disc']));
 $bbm=$all-($_POST['part']+$_POST['disc']);





$cateory=$_POST['category'];

$levels=$_POST['lev'];


$contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];


$guardian1=$_POST['gaurdain1'];
$guardian2=$_POST['guardian2'];

$hschool=$_POST['hschool'];
$disc=$_POST['disc'];

$oschool=$_POST['oschool'];
$ograde=$_POST['ograde'];
$pass=$_POST['pass'];
$partd=$_POST['motive'];

$as=$_POST['as'];
$ass=$_POST['ass'];
$class1=$_POST['class'];
$matriculex=$_POST['matric'];

$matricule=$_POST['matricule'];
$cc=$_POST['department'];
$month=$_POST['month'];;
$year=$_POST['year'];;
$day=$_POST['day'];;
$bank=$_POST['bank'];;
$bal=$_POST['balance'];;
	$date=$day."-".$month."-".$year;
	$dd=date('d-m-Y');
/************************ SERVER SIDE VALIDATION **************************************/
/********** This validation is useful if javascript is disabled in the browswer ***/



if ($bbm<0) {
echo "<script>alert('Negative Balance please')</script>";
//header("Location: register.php?msg=$err");
exit();
} 

if ($part<1) {
echo "<script>alert('Nothing has been inputed')</script>";
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
	
$query2="insert into admission  set  
first_name='$first_name',
middle_name='$middle_name',
last_name='$last_name',

fname='$fname',

month='$month',

day='$day',

year='$year',

dbirth='$dbirth',
place='$place',
nation='$nation',
sex='$sex',

religion='$religion',
qualification='$qualification',

address='$address',
city='$city',
codes='$codes',
farm='$farm',
category='$category',


department='$cc',

contact1='$contact1',
contact2='$contact2',


extra='$levels',
idcard='$city',

father='$father',
mother='$mother',

oschool='$oschool',
ograde='$ograde',

hschool='$hschool',
hgrade='$hgrade',

guardian1='$guardian1',
guardian2='$guardian2',

hnd='$hndschool',
hndqualification='$hndqualification',

status='$year_id',

country='$country',
matricule='$myy1',
barcode='$myyy1'";


$dates=date('d-m-Y');

$dee=$conn->query("DELETE FROM students where matricule='$matric' and  year_id='$year_id' " ) or die(mysqli_error($conn));


 $query55=$conn->query("insert into historic  set  
matricule='$matriculex',student_name='$fname',
class='$class1',amountpaid='$disc',amount_paid='$part',expected_amount='$feeamt',balance='$bal',ids='16',date='$date' ,year_id='$year_id',photo='$matric' ,time='$levels',olddebt='$reg' " ) or die(mysqli_error($conn));



 $ats=$conn->query("insert into  students  set  
matricule='$matric',fname='$fname',
levels='$levels',departmet='$class1',sex='$sex',year_id='$year_id',c110='$ids',c101='$year',c102='$year2',cxx1='$POB',cxx2='$DOB'") or die(mysqli_error($conn)) ;






 $daily=$con->query("INSERT INTO daily set cust_id='$matriculex',room='$room',day='$day',staffname='$fname',discount='$reg',amt='$part',date='$date',month='$month',year='$year_id',reason='fees',qty='1',area='1',price='$paid',total='$part',owed='$bal',company='$bank',paidto='$active',
			purpose='fees'") or die(mysqli_error($con));


echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	
}
}
 ?>

