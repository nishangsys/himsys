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
		 $l=$rows['levels']+100;
         $deptss=$rows['departmet'];
		 $sessionss=$rows['cxx6'];
		 $sex=$rows['sex'];
	
		
	 //////////Fees, bank ,regsitrating from settings tbl in school_db//////////////
	
$dop=$con->query("SELECT * FROM `settings` where prog LIKE '%".$deptss."%' and levels LIKE '%".$l."%'  ") or die(mysqli_error($con));

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
      <label class="control-label col-sm-2" for="email">Sex:</label>
      <div class="col-sm-10">
       <select  class="form-control" id="sel1" name="bank" >
     <option value="<?php echo $sex; ?>"><?php echo $sex; ?></option>
       
    
        <option value="Male"  >Male</option>  
                <option value="Female"  >Female</option>  

        
        
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
      
       <input type="text" class="form-control" id="email"  name="levs" value="<?php echo ($l); ?> " readonly="readonly" style="color:#f00; font-weight:bold" />
        
      </div>
    </div>
      
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">A.Y:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="year_id" value="<?php echo $current; ?><?php echo $year_id; ?>" readonly>
      </div>
    </div>
    
    
    
   
    
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

	
$bal=$_POST['balance'];;
$waver=$_POST['waver'];;
	$date=$day."-".$month."-".$year;
	$dd=date('d-m-Y');
/************************ SERVER SIDE VALIDATION **************************************/
/********** This validation is useful if javascript is disabled in the browswer ***/





$exists=$conn->query("SELECT * FROM students  WHERE  
matricule='$matriculex' AND year_id='$year_id' " ) or die(mysqli_error($conn));
	$ex=$exists->num_rows;
	if($ex>0){
		echo "<script>alert('$fname has already been admitted this $year_id')</script>";
	}
	else {

$names_tbl=$conn->query("insert into students  set  
matricule='$matriculex',fname='$fname',c110='16',
levels='$l',departmet='$class1',year_id='$year_id',sex='$sex' " ) or die(mysqli_error($conn));
echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	
	}
}
}

 ?>

