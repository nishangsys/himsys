
<div class="alert alert-info">
  <strong>Alert!</strong> Depositing with <?php echo $_GET['bank']; ?>
</div>
     <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="" method="post" name="form">
  
    
      
         <div class="form-group">
      <label class="control-label col-sm-2" for="email">Bank Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="name" value="<?php echo $_GET['bank']; ?>" required readonly="readonly" style="border:2px solid#f00">
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Account Number:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="accnum" value="<?php echo $_GET['num']; ?>" readonly style="border:2px solid#f00">
      </div>
    </div>
    
      
         <div class="form-group">
      <label class="control-label col-sm-2" for="email">Current Deposit:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="deposit" value="<?php echo $_GET['amount']; ?>" required readonly="readonly" style="border:2px solid#f00">
      </div>
    </div>
    
    
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Total Withdrwal:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="class" value="<?php echo $_GET['curacc']; ?>" readonly style="border:2px solid#f00">
      </div>
    </div>
    
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Academic Year:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="year_id" value="<?php echo $year_id; ?>" readonly style="border:2px solid#f00">
      </div>
    </div>
    
   
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Amount Withdrawn:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="paid" onBlur="doCalc(this.form)" required="required" >
      </div>
    </div>
   
   
     
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Date Withdrawn:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="date" required="required" >
      </div>
    </div>
   
    
   
    
    
    
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
    
      
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="do" class="btn btn-success">Save it</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php ?>


<?php
if(isset($_POST['do'])){
	echo $name=$_POST['name'];
	$accnum=$_POST['accnum'];
	$year_id=$_POST['year_id'];
	$paid=$_POST['paid'];
	$level=$_POST['level'];
	$deposit=$_POST['deposit'];
	$total=$deposit-$paid;
	@session_start();
	$date=$_POST['date'];
	$day=date('d');
	$month=date('m');
	$year=date('Y');
	$active=$_SESSION['user_name'];
$id=$_POST['id'];
 $daily=$con->query("INSERT INTO daily set cust_id='$accnum',room='$accnum',paidto='$active',day='$day',staffname='$name',discount='$paid',amt='',
			rec='$paid',date='$date',month='$month',year='$year_id',reason='bank',qty='1',area='$level',price='$paid',total='$deposit',owed='',
			purpose='Bank Withdrawal',company='Withdrawal'") or die(mysqli_error($con));
			
			
				
 $daily12=$con->query("UPDATE our_accounts set amt='$total' where id='$id'") or die(mysqli_error($con));
			echo "<script>alert('Records Successfull')</script>";
			echo '<meta http-equiv="Refresh" content="0; url=?save_requisitions">';	
}

?>

       