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
if(isset($_GET['cust'])){
	
	$who=$_GET['cust'];
	
	  $select=$conn->query("SELECT * from students  where students.id='".$who."'  ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
		$MATRIC=$rows['matricule'];
	}



	  $select=$conn->query("SELECT * from levels,special,years,students  where students.matricule='".$MATRIC."' AND year_id='$ayear' AND students.level_id=levels.id and students.dept_id=special.id  AND students.year_id=years.id ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
		$year_id=$rows['year_id'];
		$matrics=$rows['matricule'];	
		$level_id=$rows['level_id'];
        $dept_id=$rows['dept_id'];
		$ayear=$rows['year_id'];
		$ayear_name=$rows['year_name'];
		
		
		
	 //////////Fees, bank ,regsitrating from settings tbl in school_db//////////////
	
$dop=$con->query("SELECT * FROM `settings` where prog_id='$dept_id'  AND level_id='$level_id' ") or die(mysqli_error($con));

$countss=$dop->num_rows;
while($bus=$dop->fetch_assoc()){
	 $fees=$bus['fees'];	
	 $bank=$bus['bank'];
	
	
}

 	 //////////select academic year//////////////
$d=$con->query("SELECT * FROM years where status='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $ayear_name=$bu['year_name'];
	 $year_id=$bu['id'];
	
}

$a=$dbcon->query("SELECT * FROM fee_paymts where matric='$matrics' and yearid='$year_id' ") or die(mysqli_error($dbcon));
	if($d->num_rows<1){
		$scolarship_amt=0;
	}
	else {
	while($rs=$a->fetch_assoc()){
		$scolarship_amt=$rs['scholar'];
	}
	}

////////////////check from the historique if name exits, then return error else run script			 
	$a=$dbcon->query("SELECT * FROM fee_paymts where matric='$matrics' and yearid='$year_id' AND fee_amt>0 ") or die(mysqli_error($dbcon));
	while($rs=$a->fetch_assoc()){
		$scolarship_amt=$rs['scholar'];
	}
if($a->num_rows>0){
	
	echo "<script>alert('Sorry ".$rows['fname']." has paid his or her first installment/Registration before so go and instead update the amount')</script>";
	echo '<meta http-equiv="Refresh" content="0; url=../Fees/new_paymt.php?id='.$who.' ">';	}
else {
	 $d=$conn->query("SELECT * FROM fee_paymts where matric='".$rows['matricule']."' and yearid!='$year_id' AND balance>0  ") or die(mysqli_error($conn));
  $counts=$d->num_rows;
while($bu=$d->fetch_assoc()){
$bal=$bu['balance'];
 $debt_id=$bu['id'];
	
	 $b=number_format($bal);
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

  form.balance.value = (((parseInt(form.feeamt.value)+(parseInt(form.debts.value)+(parseInt(form.student_union.value)))-parseInt(form.part.value)-parseInt(form.scholar.value))));

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
  
  <?php
  if($bal>0){
		
		echo '  <a href="../Fees/receive_debts.php?cust='.$debt_id.'">
    <div class="col-sm-12">
          <div class="well">
       Receive Debts  of '.$bal.' for this Student First Please
          </div>
        </div>
     </a>';
	}
	else {
	
	?>

   <div class="form-row">

    
  
  
  
      <div class="well">
 <form class="form-horizontal" action="" method="post" name="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
      
  <input name="username" type="text" value="<?php echo $rows['fname'];; ?>" id="username" class="demoInputBox" onBlur="checkAvailability()" style="width:65%; border:2px solid#f00" required="required"><span id="user-availability-status" style="color:#f00" > <?php
 
  
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
      
       <input type="text" class="form-control" id="email"  name="levs" value="Level <?php echo ($rows['levels']); ?> Fees paid at <?php echo $_GET['mo']; ?>" style="color:#f00; font-weight:bold" />
        
      </div>
    </div>
      
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">A.Y:</label>
      <div class="col-sm-10">
          <select class="form-control" id="sel1" name="year_id">
                <option value="<?php echo $ayear; ?>"><?php echo $ayear_name; ?></option>
              
              </select>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Debts:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="debts" value="<?php
		   if($counts<1){
		echo 0;
	 }
	 else {
		echo $bal;
	 }
		
						 
				  ?>" style="color:#f00; font-weight:bold"onBlur="doCalc(this.form)"  required="required" >
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fees:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="feeamt" value="<?php
	
		 echo $fees;
			 
		
						 
				  ?>" onBlur="doCalc(this.form)" required="required" r>
      </div>
    </div>
    
        <input type="hidden" class="form-control" id="pwd" name="student_union" value="0" onBlur="doCalc(this.form)" >
     
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> Fee Paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="part" value="0" onBlur="doCalc(this.form)" >
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Scholarship: :</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="scholar" value="<?php  echo $scolarship_amt;  ?>" onBlur="doCalc(this.form)" readonly="readonly" >
      </div>
    </div>
    
   
    
   
     
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Balance:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="balance" style="background:#FFC; color:#000; font-family:'Arial Black', Gadget, sans-serif">
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
    
     <input type="hidden" name="student_id" value="<?php echo $rows['id']; ?>" />
     <input type="hidden" name="level_id" value="<?php echo $rows['level_id']; ?>" />
    
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="save" class="btn btn-danger">Save</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php } } ?>

<?php

$err = array();
if(isset($_POST['save'])){
	$_POST = array_map("ucwords", $_POST);
	

	
$levels=$_POST['level_id'];



$fname=$_POST['username'];

$month=$_POST['month'];
$part=$_POST['part'];
$year=$_POST['year'];
$scholar=$_POST['scholar'];
$year_id=$_POST['year_id'];
$feeamt=$_POST['feeamt']+$_POST['debts'];
$part=$_POST['part'];

$all=$feeamt+$reg;
// $bbm=($_POST['feeamt']-($_POST['part']+$_POST['reg']+$_POST['disc']));
 $bbm=$all-($_POST['part']+$_POST['disc']);




$cateory=$_POST['category'];



$yb=$_POST['bank'];


$as=$_POST['as'];
$paid=$_POST['part'];

$matriculex=$_POST['matric'];
$dept_id=$_POST['dept_id'];
$month=$_POST['month'];;
$year=$_POST['year'];;
$day=$_POST['day'];;
$bank=$_POST['bank'];
$sunion=$_POST['student_union'];
$debts=$_POST['debts'];

$fees_paid=$part-$sunion;	
$bal=$_POST['balance'];
$student_id=$_POST['student_id'];
$waver=$_POST['waver'];
$fee_bal=$bal-$sunion;
$method=$_POST['method'];;
	$date=$day."-".$month."-".$year;
	$dd=date('d-m-Y');

$a=$dbcon->query("SELECT * FROM fee_paymts where yearid='$year_id' and matric='$matriculex' ") or die(mysqli_error($dbcon));
	 $count=$a->num_rows;
	 
	 
if ($feeamt<100000) {
echo "<script>alert('Please Tell the Account to Input Fees Amount for this Program')</script>";
//header("Location: register.php?msg=$err");
exit();
} 

$dates=date('d-m-Y');
$time=date('d-m-Y G:i:s');

/////if debts exist update old debt to zero
    if($count>0){
		
		 $query551=$conn->query("UPDATE fee_paymts  set  
balance='0',updated_at='$date' WHERE matric='$matriculex' and yearid!='$year_id' and balance>0 " ) or die(mysqli_error($conn));
		

 $query55=$conn->query("UPDATE fee_paymts  set  
 scholar='$scholar',program_id='$dept_id',
fee_amt='$fees_paid',expected_amount='$feeamt',balance='$fee_bal',created_at='$date' ,debts='$debts',level_id='$levels'  WHERE matric='$matriculex' and yearid ='$year_id'" ) or die(mysqli_error($conn));

 $daily=$con->query("INSERT INTO daily set cust_id='$matriculex',day='$day',staffname='$fname',discount=' $regfee',rec='$part',date='$date',month='$month',year='$year_id',reason='fees',qty='1',area='1',price='$paid',total='$part',owed='$bal',company='$r',paidto='$active',time='$time',
			purpose='".$_GET['mo']."',scholar='$scholar',method='$method',sunion='$sunion',adminp='$adminp',tshirt='$tshirt',levels='$l',waver='$waver' ,fyear='$year' ,level_id='$levels',prog_id='$dept_id'") or die(mysqli_error($con));


echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	}
	else if($debts>0){
		
		 $query551=$conn->query("UPDATE fee_paymts  set  
balance='0',updated_at='$date' WHERE matric='$matriculex' and yearid!='$year_id'" ) or die(mysqli_error($conn));
		
		

 $query55=$conn->query("insert into fee_paymts  set  
matric='$matriculex',scholar='$scholar',program_id='$dept_id',
fee_amt='$fees_paid',expected_amount='$feeamt',balance='$fee_bal',created_at='$date' ,yearid='$year_id',debts='$debts',waiver='$waver',student_id='$student_id' ,sunion='$sunion',level_id='$levels' " ) or die(mysqli_error($conn));






 $daily=$con->query("INSERT INTO daily set cust_id='$matriculex',day='$day',staffname='$fname',discount=' $regfee',rec='$part',date='$date',month='$month',year='$year_id',reason='fees',qty='1',area='1',price='$paid',total='$part',owed='$bal',company='$r',paidto='$active',time='$time',
			purpose='".$_GET['mo']."',scholar='$scholar',method='$method',sunion='$sunion',adminp='$adminp',tshirt='$tshirt',levels='$l',waver='$waver' ,fyear='$year' ,level_id='$levels',prog_id='$dept_id'") or die(mysqli_error($con));


echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	}
	
	////if debts do not exixt just insert
	else {
 

 $query55=$conn->query("insert into fee_paymts  set  
matric='$matriculex',scholar='$scholar',
fee_amt='$fees_paid',expected_amount='$feeamt',balance='$fee_bal',created_at='$date' ,yearid='$year_id',debts='$debts',waiver='$waver' ,student_id='$student_id' ,sunion='$sunion',level_id='$levels',program_id='$dept_id'" ) or die(mysqli_error($conn));





 $daily=$con->query("INSERT INTO daily set cust_id='$matriculex',day='$day',staffname='$fname',discount=' $regfee',rec='$part',date='$date',month='$month',year='$year_id',reason='fees',qty='1',area='1',price='$paid',total='$part',owed='$bal',company='$r',paidto='$active',time='$time',
			purpose='".$_GET['mo']."',scholar='$scholar',method='$method',sunion='$sunion',adminp='$adminp',tshirt='$tshirt' ,levels='$l',waver='$waver',fyear='$year',level_id='$levels',prog_id='$dept_id' ") or die(mysqli_error($con));


echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	
}
}
	}
 ?>



<?php } ?>