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


	

	  $select=$conn->query("SELECT * from levels,special,years,students  where students.id='".$who."' AND students.level_id=levels.id and students.dept_id=special.id  AND students.year_id=years.id ") or die(mysqli_error($conn));
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


  
  <div style="clear:both"></div>
  <div class="col-sm-12">
 
  
  
  
      <div class="well">
 <form class="form-horizontal" action="" method="post" name="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
      
  <input name="username" type="text" value="<?php echo $rows['fname'];; ?>" id="username" class="demoInputBox" onBlur="checkAvailability()" style="width:65%; border:2px solid#f00" required="required"><span id="user-availability-status" style="color:#f00" > <?php
  
  $d=$conn->query("SELECT * FROM fee_paymts where student_id='".$rows['id']."' and yearid!='$year_id' AND balance>0  ") or die(mysqli_error($conn));
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
      <label class="control-label col-sm-2" for="email">Dept:</label>
      <div class="col-sm-10">
      
       <select class="form-control" id="sel1" name="dept_id" required>
    <option value="<?php echo $rows['dept_id'];; ?>"><?php echo $rows['prog_name'];; ?></option>
   
  </select>
     
      </div>
    </div>
    
    
     <input type="hidden" class="form-control" id="email"  name="fyear" value="<?php echo $rows['year_id']; ?>" style="color:#f00; font-weight:bold" />
        
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
      
       <input type="text" class="form-control" id="email"  name="levs" value="Level <?php echo ($rows['levels']+100); ?> Fees paid at <?php echo $_GET['mo']; ?>" style="color:#f00; font-weight:bold" />
        
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
		  if(empty($bal)){
			  echo 0;
		 }
		 else {
			 echo $bal;
		 }
			 
		
						 
				  ?>" style="color:#f00; font-weight:bold"onBlur="doCalc(this.form)" readonly="readonly" >
      </div>
    </div>
    
    
    </table>
    
   
    
    <input type="hidden" name="matric" value="<?php echo $rows['matricule'];
	 ?>" />
    <input type="hidden" name="student_id" value="<?php echo $rows['id']; ?>" />
     <input type="hidden" name="year_id" value="<?php echo $year_id; ?>" />
    
      <input type="hidden" name="level_id" value="<?php echo $rows['level_id']+1; ?>" />
    
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="save" class="btn btn-danger">Move to Next Level</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php }?>

<?php

$err = array();
if(isset($_POST['save'])){
	$_POST = array_map("ucwords", $_POST);
	


 $first_name=$_POST['username'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];

$fname="$first_name $middle_name $last_name";


$matric=$_POST['matric'];
$debt=$_POST['debts'];
$fyear=$_POST['fyear'];



$matriculex=$_POST['matric'];

	$year_id=$_POST['year_id'];
	$dept_id=$_POST['dept_id'];
	$student_id=$_POST['student_id'];
	$level_ids=$_POST['level_id'];

$names_tbl=$conn->query("insert into students  set  
matricule='$matriculex',fname='$fname', 
level_id='$level_ids',dept_id='$dept_id',year_id='$year_id'  " ) or die(mysqli_error($conn));


 $query55=$conn->query("UPDATE fee_paymts  set balance='0' ,debts='$debt' WHERE   
matric='$matriculex' AND yearid='$fyear' " ) or die(mysqli_error($conn));


 $query55=$conn->query("insert into fee_paymts  set  
matric='$matriculex',scholar='$scholar',
fee_amt='$fees_paid',expected_amount='$feeamt',balance='$fee_bal',created_at='$date' ,yearid='$year_id',debts='$debts',waiver='$waver' ,student_id='$student_id' ,sunion='$sunion',level_id='$levels',program_id='$dept_id'" ) or die(mysqli_error($conn));
	

echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Acc/ofees.php?cust='.$student_id.' ">';	
	
}
}
	
 ?>

