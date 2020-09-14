

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
		 

  form.balance.value = ((parseInt(form.feeamt.value)-parseInt(form.part.value)));

}
</script>

<script src="../fees/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function checkAvailability() {
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "../fees/check_availability.php",
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
  if(isset($_GET['recording'])){
   $your=$_POST['dept'];
	$count=$_POST['sex'];
	$rtype=$_POST['rtype'];
	$level=$_POST['level'];
	   $a=$dbcon->query("SELECT * from classes WHERE class='$your'  ") or die(mysqli_error($dbcon));
	 while($ad=$a->fetch_assoc()){
  if($count==1){
	 $fee=$ad['fees'];
  }
  else {
	 $fee=$ad['dep'];
  }

 
  
  ?>
  
  <div class="col-sm-12">
  <div class="alert alert-success" style="font-size:18px">
  <strong>Our System Says !</strong> Recording Other Payments order than Fees Paid by Bank
</div>
      <div class="well">
 <form class="form-horizontal" action="" method="post" name="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
      
  <input name="username" type="text" id="username" class="demoInputBox" onBlur="checkAvailability()" style="width:60%" required="required"><span id="user-availability-status"></span>    

     
      </div>
    </div>
    
      
         <div class="form-group">
      <label class="control-label col-sm-2" for="email">Sector:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="reason" value="<?php echo $count; ?>" required readonly="readonly">
      </div>
    </div>
    
      
         <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="level" value="<?php echo $level; ?>" required readonly="readonly">
      </div>
    </div>
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Dept:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="class" value="<?php echo $your; ?>" readonly>
      </div>
    </div>
    
       <div class="form-group">
      <label class="control-label col-sm-2" for="email">Paymt Type:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" style="background:#FF9" name="ptype" value="<?php echo $rtype; ?>" readonly>
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Bank Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" style="background:#CC6; font-size:18px" name="bname" >
      </div>
    </div>
    
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Academic Year:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="year_id" value="<?php echo $year_id; ?>" readonly>
      </div>
    </div>
    
   
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Amount Paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="paid" onBlur="doCalc(this.form)" >
      </div>
    </div>
   
    
   
    
    
    
    <input type="hidden" name="as" value="<?php echo $as ?>" />
    
      <input type="hidden" name="ass" value="<?php echo $ass ?>" />
    
     <input type="hidden" name="levels" value="<?php echo $l ?>" />
    
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="do" class="btn btn-success">Save it</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php } } ?>


<?php
if(isset($_POST['do'])){
	echo $name=$_POST['full_name'];
	$dept=$_POST['class'];
	$year_id=$_POST['year_id'];
	$paid=$_POST['paid'];
	$level=$_POST['level'];
	$reason=$_POST['reason'];
	$payment_type=$_POST['ptype'];
	@session_start();
	$bank=$_POST['bname'];
	$date=date('d-m-Y');
	$day=date('d');
	$month=date('m');
	$year=date('Y');
	$active=$_SESSION['user_name'];
	
 $daily=$con->query("INSERT INTO daily set cust_id='0',room='$dept',paidto='$active',day='$day',staffname='$name',discount='$reg',amt='$paid',
			rec='',date='$date',month='$month',year='$year_id',reason='$reason',qty='1',area='$level',price='$paid',total='$paid',owed='',
			purpose='$reason',company='bank'") or die(mysqli_error($con));
			echo "<script>alert('Records Successfull')</script>";
			echo '<meta http-equiv="Refresh" content="0; url=?bank_record">';	
}

?>
