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
	 //////////select academic year//////////////
$d=$con->query("SELECT * FROM years where status='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $ayear_name=$bu['year_name'];
	 $ayear=$bu['id'];
	
}


	  $select=$conn->query("SELECT * from levels,special,years,students  where students.id='".$who."' AND year_id='$ayear' AND students.level_id=levels.id and students.dept_id=special.id  AND students.year_id=years.id ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
			$dept_id=$rows['dept_id'];
			$level_id=$rows['level_id'];
			$matrics=$rows['matricule'];
	

	

////////////////check from the historique if name exits, then return error else run script			 
	$a=$con->query("SELECT * FROM daily where cust_id='$matrics' and year='$ayear' AND reason='registration' ") or die(mysqli_error($con));
$coun=$a->num_rows;
if($coun>0){
	echo "<script>alert('Sorry ".$rows['fname']." has paid his or her Registration,T shirts and others')</script>";
	echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';
}
else {
	 
	 
	 		
$dops=$con->query("SELECT * FROM `settings` where prog_id='$dept_id'  AND level_id='$level_id' ") or die(mysqli_error($con));

$countss=$dops->num_rows;
while($buss=$dops->fetch_assoc()){
	 $fees=$buss['fees'];	
	 $bank=$buss['bank'];
	   $adminp=$buss['adminp'];
	  $sunion=$buss['sunion'];
	  $tshirt=$buss['tshirt'];
	 
	  $regfee=$buss['reg'];
	  $regs=$buss['reg']+$sunion+$adminp+$tshirt;
	  
}
	
	
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

  form.balance.value = (((parseInt(form.feeamt.value)+(parseInt(form.debts.value)))+parseInt(form.reg.value)-parseInt(form.part.value)));

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


  
  <div style="clear:both"></div>
  <div class="col-sm-12">

  
  
      <div class="well">
 <form class="form-horizontal" action="" method="post" name="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
      
  <input name="username" type="text" value="<?php echo $rows['fname'];; ?>" id="username" class="demoInputBox" onBlur="checkAvailability()" style="width:65%; border:2px solid#f00" required="required"><span id="user-availability-status" style="color:#f00" > <?php
 
  $d=$conn->query("SELECT * FROM fee_paymts where matric='".$rows['matricule']."' and yearid!='$year_id' AND balance>0  ") or die(mysqli_error($conn));
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
       <select  class="form-control" required id="sel1" name="method" >

        <?php
							
								$result = $con->query("SELECT * FROM our_accounts") or die(mysqli_error($con));
				while($bu=$result->fetch_assoc()){
								?>
                              
        <option value="<?php echo $bu['id']; ?>"  ><?php echo $bu['name']; ?> </option>
    <?php } ?> 
        
      </select>
      </div>
    </div>
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Dept:</label>
      <div class="col-sm-10">
        <select class="form-control" id="sel1" name="dept_id" required>
    <option value="<?php echo $rows['dept_id'];; ?>"><?php echo $rows['prog_name'];; ?></option>
   
  </select>
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
      
       <input type="text" class="form-control" id="email"  name="levs" value="Level <?php echo ($rows['levels']); ?> Registration Package paid at <?php echo $_GET['mo']; ?>" style="color:#f00; font-weight:bold" />
        
      </div>
    </div>
      <input type="hidden" class="form-control" id="email"  name="year_id" value="<?php echo $current; ?><?php echo $year_id; ?>" readonly>
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Admission Package</label>
      <div class="col-sm-10">
        
           <input type="text" class="form-control" id="email"  name="adminp" value="<?php echo $adminp; ?>" required>
    
      </div>
    </div>
   
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">T-Shirt:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="tshirt" value="<?php
		 echo $tshirt;
			 
		
						 
				  ?>" onBlur="doCalc(this.form)" required="required"  >
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Student Uniom:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="sunion" value="<?php	 echo $sunion;	  ?>" onBlur="doCalc(this.form)" required="required"  >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Registration</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="reg" value="<?php  if(empty($regfee)){
			echo 0;
		}
		else {
			echo $regfee;
		}; ?>"  required="required"  >
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
      <label class="control-label col-sm-2" for="pwd"> Amont Paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="part" value="<?PHP echo $regs; ?>" onBlur="doCalc(this.form)" required="required" style="border:1px solid#f00" >
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
     <input type="hidden" name="level_id" value="<?php echo $rows['level_id']; ?>" />
       <input type="hidden" name="ayear" value="<?php echo $ayear; ?>" />
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="save" class="btn btn-danger">Save</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php } ?>

<?php

$err = array();
if(isset($_POST['save'])){
	$_POST = array_map("ucwords", $_POST);
	

	$adminpp=$_POST['adminp'];
 $tshirt = $_POST['tshirt'];
 $sunion=$_POST['sunion'];
 $regist =$_POST['reg'];
 $total_reg_amount=$adminpp+$tshirt+$sunion+$regfee;
$user_name = $data['user_name'];
$level=$_POST['level'];

 $first_name=$_POST['username'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];

$fname="$first_name $middle_name $last_name";

$month=$_POST['month'];
$part=$_POST['part'];
$day=$_POST['day'];
$ayear=$_POST['ayear'];

$year=$_POST['year'];
$year_id=$_POST['year_id'];
$dbirth=$_POST['month'];

$place=$_POST['place'];
$matric=$_POST['matric'];

$part=$_POST['part'];

$reg=$_POST['reg'];
echo $totreg=$sunion+$adminpp+$tshirt+$reg;
 $all=$feeamt+$reg;
// $bbm=($_POST['feeamt']-($_POST['part']+$_POST['reg']+$_POST['disc']));
 $bbm=$all-($_POST['part']+$_POST['disc']);

$level_id=$_POST['level_id'];
$dept_id=$_POST['dept_id'];

$matriculex=$_POST['matric'];

$matricule=$_POST['matricule'];

$month=$_POST['month'];;
$year=$_POST['year'];;
$day=$_POST['day'];;
$method=$_POST['method'];;


	$date=$day."-".$month."-".$year;
	$dd=date('d-m-Y');
/************************ SERVER SIDE VALIDATION **************************************/
/********** This validation is useful if javascript is disabled in the browswer ***/


$dates=date('d-m-Y');
$time=date('d-m-Y G:i:s');


 
if($regfee<1){
	echo "<script>alert('ERROR. Please set the registration packages for $class1 to continue'); </script>";
}
else if($total_reg_amount!=$part){
	echo "<script>alert('ERROR.  Total registration is ".$total_reg_amount." but amount paid is ".$part." '); </script>";
}
else {




 $daily=$con->query("INSERT INTO daily set cust_id='$matriculex',prog_id='$dept_id', level_id='$level_id', day='$day',staffname='$fname',discount=' $regfee',amt='',rec='$part',date='$date',month='$month',year='$ayear',reason='registration',qty='1',area='1',price='$paid',total='$part',owed='$bal',company='$r',paidto='$active',time='$time',fyear='$year',
			purpose='$class1',method='$method',sunion='$sunion',adminp='$adminpp',tshirt='$tshirt' ,levels='$l',waver='$waver'") or die(mysqli_error($con));


echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	
}
}
	}
 ?>



<?php }  ?>