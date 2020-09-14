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
	 $year_id=$bu['id'];
	
}



	  $select=$conn->query("SELECT * from levels,special,years,students  where students.id='".$who."' AND students.level_id=levels.id and students.dept_id=special.id  AND students.year_id=years.id  ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
		$AY=$rows['year_id'];
		$matrics=$rows['matricule'];
		
		 $name=$rows['fname'];
	
	

	 
	
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
table,tr,td{
	border:1px solid#000;
	border-collapse:collapse;
	line-height:2;
	
}
</style>
<script type="text/javascript">
function doCalc(form) {

  form.balance.value = (((parseInt(form.feeamt.value)+(parseInt(form.debts.value)))+parseInt(form.waver.value)+parseInt(form.reg.value)-parseInt(form.part.value)));

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
      
  <input name="username" type="text" value="<?php echo $fn=$rows['fname'];; ?>" id="username" class="demoInputBox" onBlur="checkAvailability()" style="width:65%; border:2px solid#f00" required="required"><span id="user-availability-status" style="color:#f00" > <?php
   
  $d=$conn->query("SELECT * FROM fee_paymts where matric='$matrics' and yearid!='$year_id' AND balance>0  ") or die(mysqli_error($conn));
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
     <option value="<?php echo $_GET['mo']; ?>"><?php echo $_GET['mo']; ?></option>
       
        <option value="CASH"  >CASH </option>  
       
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
      
       <select class="form-control" id="sel1" name="dept_id" required>
    <option value="<?php echo $rows['dept_id'];; ?>"><?php echo $rows['prog_name'];; ?></option>
   
  </select>
     
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
          
       <select class="form-control" id="sel1" name="dept_id" required>
    <option value="<?php echo $rows['level_id'];; ?>"><?php echo $rows['levels'];; ?></option>
   
  </select>
        
      </div>
    </div>
      
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">A.Y:</label>
      <div class="col-sm-10">
      
        <select class="form-control" id="sel1" name="year_id" required>
    <option value="<?php echo $year_id; ?>"><?php echo $rows['year_name'];; ?></option>
   
  </select>
  
  
      </div>
    </div>
    
    
   
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> Waiver Amount:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="waver"   onBlur="doCalc(this.form)" required="required" value="<?php
			
		$a=$dbcon->query("SELECT * FROM fee_paymts where yearid='$year_id' and matric='$matrics' ") or die(mysqli_error($dbcon));
		while($ro=$a->fetch_assoc()){
			echo $ro['waiver'];
		}

		?>" >
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
    
      <input type="hidden" name="ass" value="<?php echo $ass ?>" />
    
     <input type="hidden" name="levels" value="<?php echo $l ?>" />
    
     <input type="hidden" name="student_id" value="<?php echo $rows['id']; ?>" />
    
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="save" class="btn btn-danger">Save</button>
      </div>
    </div>
  </form>
  
  
  
<?php }?>

 <hr />

<div class="alert alert-info">
  <strong>View All Waiver Payments History</strong> 
</div>
  <table class="table table-bordered">
<td>#</td>
<td>Date</td>
<td>Waiver Amount Paid</td><td>Bank Pmt</td><td>Bank</td></tr>
<?php

$d=$con->query("select  * from daily where  staffname='$fn'  and year='$year_id' and reason='waiver' ") or die(mysqli_error($con));
$a=1;
while($bu=$d->fetch_assoc()){
?>
<tr>
<td><?php echo $a++; ?></td>
<td><?php echo $bu['date']; ?></td>
<td><?php echo number_format($bu['rec']); ?></td><td><?php echo number_format($bu['bank']); ?></td><td><?php echo $bu['company']; ?></td>
<?php } ?>
</table>
    
</div></div>

<?php

$err = array();
if(isset($_POST['save'])){
	$_POST = array_map("ucwords", $_POST);
	

	
 $first_name=$_POST['username'];

$last_name=$_POST['last_name'];

$fname="$first_name $middle_name $last_name";

$month=$_POST['month'];
$part=$_POST['part'];
$day=$_POST['day'];

$year=$_POST['year'];
$year_id=$_POST['year_id'];

$matriculex=$_POST['matric'];

$waver=$_POST['waver'];;
$mmm=$_GET['mo'];
	if($mmm=='CASH'){
		$r='CASH';
		$cash=$waver;
		$bankk=0;
	}
	else {
		 $r=$bank;
		$cash=0;
		$bankk=$waver;
	}
	

$student_id=$_POST['student_id'];
$dates=date('d-m-Y');
$a=$dbcon->query("SELECT * FROM fee_paymts where yearid='$year_id' and student_id='$student_id' ") or die(mysqli_error($dbcon));
	 $count=$a->num_rows;
	

	if($count>0){	 


			 $daily_delete=$dbcon->query("DELETE FROM daily WHERE cust_id='$matriculex' AND year='$year_id' AND reason='waiver' AND waver>0 ") or die(mysqli_error($dbcon));
						
			 $daily=$dbcon->query("INSERT INTO daily set cust_id='$matriculex',day='$day',staffname='$fname',waver='$waver', date='$dates',month='$month',year='$year_id',reason='waiver',qty='1',paidto='$active',rec='$waver',
						purpose='waiver'") or die(mysqli_error($dbcon));
						
			$update_feepmts=$dbcon->query("UPDATE fee_paymts SET waiver='$waver'  where yearid='$year_id' and student_id='$student_id' ") or die(mysqli_error($dbcon));

			echo "<script>alert('Record Created Successfully!'); </script>";

			echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	

	}
	else {
		
			echo "<script>alert('ERROR. Please Input Atleast First Installment before Recording Scholarship!'); </script>";

			echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
		
	}
}
	}
 ?>



<?php } ?>