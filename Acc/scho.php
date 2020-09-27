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
$d=$conn->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($conn));
while($bu=$d->fetch_assoc()){
	 $year_id=$bu['year'];
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
}

$d=$con->query("SELECT * FROM scholars where id='".$_GET['sp']."'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $sponsor=$bu['name'];
	 
}


	  $select=$conn->query("SELECT * from levels,special,years,students  where students.id='".$who."' AND students.level_id=levels.id and students.dept_id=special.id  AND students.year_id=years.id ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
		$year_id=$rows['year_id'];
		$matrics=$rows['matricule'];	
		$level_id=$rows['level_id'];
        $dept_id=$rows['dept_id'];
		$l_name=$rows['levels'];
		$student_id=$rows['id'];
		$ayear=$rows['year_id'];
		$ayear_name=$rows['year_name'];
		
		
		
	 //////////Fees, bank ,regsitrating from settings tbl in school_db//////////////
	
$dop=$con->query("SELECT * FROM `settings` where prog_id='$dept_id'  AND level_id='$level_id' ") or die(mysqli_error($con));

$countss=$dop->num_rows;
while($bus=$dop->fetch_assoc()){
	 $fees=$bus['fees'];	
	 $bank=$bus['bank'];
	
	
}


	   $a=$dbcon->query("SELECT * from fee_paymts  WHERE matric='$matrics' AND yearid='$ayear'  ") or die(mysqli_error($dbcon));
	  $counts=$a->num_rows;
	   if($counts<1){
		 $fee_amt=$fees;
		 $paid=0;
		$balance=$fee_amt-$paid;
	 
		   
	   }
	   else {
	 while($ad=$a->fetch_assoc()){
		$fee_amt=$ad['expected_amount'];
		$paid=$ad['fee_amt'];
		$balance=$fee_amt-$paid;
	 }
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
		 

  form.balance.value = ((parseInt(form.feeamt.value)+parseInt(form.reg.value)-(parseInt(form.part.value)+parseInt(form.scholar.value))));

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
   <h3 style="background:#f00; margin:0px; color:#FFF; padding:5px 5px">Receiving Scholarships From <?php echo $sponsor; ?></h3>
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
      <label class="control-label col-sm-2" for="email">Paymt Desc</label>
      <div class="col-sm-10">
       <select required class="form-control" id="sel1" name="bank" >
       <option value="scholarship">scholarship</option>
      
        
       
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
      
      <select required class="form-control" id="sel1" name="levs" >
       
        
                              
        <option value="<?php echo $level_id; ?>"  ><?php echo $l_name; ?> </option>
   
        
      </select>
        
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
      <label class="control-label col-sm-2" for="pwd">Fees:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="feeamt" value="<?php echo $fees;			  ?>" onBlur="doCalc(this.form)" required="required" >
      </div>
    </div>
    
     
     
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Scholarship</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="scholar" value="<?php
			
		$a=$dbcon->query("SELECT * FROM fee_paymts where yearid='$year_id' and matric='$matrics' ") or die(mysqli_error($dbcon));
		while($ro=$a->fetch_assoc()){
			echo $ro['scholar'];
		}

		?>"   >
      </div>
    </div>
	
        <input type="hidden" class="form-control" id="pwd" name="part" value="0" onBlur="doCalc(this.form)" >
      
	  
    
     
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Balance:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="balance" readonly="readonly" required="required" style="background:#FFC; color:#f00; font-family:'Arial Black', Gadget, sans-serif">
      </div>
    </div>
    <table style="margin-left:120px">
 
    </table>
    
      <input type="hidden" class="form-control" id="pwd" name="reg" value="0" readonly="readonly"   >
    
    <input type="hidden" name="matric" value="<?php echo $rows['matricule'];
	 ?>" />
    
      <input type="hidden" name="ass" value="<?php echo $ass ?>" />
    
     <input type="hidden" name="levels" value="<?php echo $l ?>" />
    
     <input type="hidden" name="student_id" value="<?php echo $rows['id']; ?>" />
    
     <input type="hidden" name="balance_fee" value="<?php echo $balance; ?>" />
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="save" class="btn btn-danger">Save</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php }?>

<?php

$err = array();
if(isset($_POST['save'])){
	$_POST = array_map("ucwords", $_POST);
	

$level=$_POST['levs'];

 $first_name=$_POST['username'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];

$fname="$first_name $middle_name $last_name";

$month=$_POST['month'];
$part=$_POST['part'];

$year_id=$_POST['year_id'];

$matric=$_POST['matric'];
$sex=$_POST['sex'];
$feeamt=$_POST['feeamt'];
$part=$_POST['part'];
$accepted=$feeamt/2;
$bbm=$_POST['feeamt']-$_POST['part'];
$all=$part+$reg;

$levels=$_POST['lev'];
$matriculex=$_POST['matric'];

$matricule=$_POST['matricule'];

$matriculex=$_POST['matric'];
$dept_id=$_POST['dept_id'];
 $scolar=$_POST['scholar'];;
$balance_fee=$_POST['balance_fee'];
$bals=$_POST['balance_fee']-$_POST['scholar'];
$abbal=abs($bals);

$student_id=$_POST['student_id'];
$dates=date('d-m-Y');
$a=$dbcon->query("SELECT * FROM fee_paymts where yearid='$year_id' and matric='$matrics' ") or die(mysqli_error($dbcon));
	 $count=$a->num_rows;
	if($bals<0){
	echo "<script>alert('ERROR. You can only give a Scholarship of ".$abbal." to this Student'); </script>";
	echo '<meta http-equiv="Refresh" content="0; url=../Acc/scho.php?cust='.$_GET['cust'].'">';	
	}
	

	else if($count>0){	 


			 $daily_delete=$dbcon->query("DELETE FROM daily WHERE cust_id='$matriculex' AND year='$year_id' AND reason='scholarship' AND scholar>0 ") or die(mysqli_error($dbcon));
						
			 $daily=$dbcon->query("INSERT INTO daily set cust_id='$matriculex',day='$day',staffname='$fname',
			 scholar='$scolar',date='$dates',month='$month',year='$year_id',reason='scholarship',qty='1',paidto='$active',level_id='$level',
						purpose='scholarship'") or die(mysqli_error($dbcon));
						
			$update_feepmts=$dbcon->query("UPDATE fee_paymts SET scholar='$scolar'  where yearid='$year_id' and matric='$matrics' ") or die(mysqli_error($dbcon));

			echo "<script>alert('Record Created Successfully!'); </script>";

			echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	

	}
	else {
		
 $query55=$conn->query("insert into fee_paymts  set  
matric='$matriculex',scholar='$scolar',
fee_amt='0',expected_amount='$feeamt', created_at='$dates' ,yearid='$year_id',debts='',waiver='$waver' ,student_id='$student_id' ,sunion='$sunion',level_id='$level',program_id='$dept_id'" ) or die(mysqli_error($conn));


		
			echo "<script>alert('Recording Successfull'); </script>";

		echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
		
		
	}

	
}
 ?>
 
 
 
 <?php  } ?>

