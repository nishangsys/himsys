
<div class="alert alert-info">
  <strong>Alert!</strong> Depositing with <?php echo $_GET['bank']; ?>
</div>
     <div class="col-sm-6">
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
        <input type="text" class="form-control" id="email"  name="ayear" value="<?php echo $ayear; ?>" readonly style="border:2px solid#f00">
      </div>
    </div>
    
   
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Amount Deposited:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="paid" onBlur="doCalc(this.form)" required="required" >
      </div>
    </div>
   
   
     
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Date Deposited:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="pwd" name="date" required="required" >
      </div>
    </div>
   
    
   
    
    
    
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
    
      
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="do" onclick="return confirm('Are you sure about that figure')" class="btn btn-success">Save it</button>
      </div>
    </div>
  </form>
    
</div></div>




  <div class="col-sm-6">
      <div class="well">
      <h3><?php echo $_GET['bank']; ?> Historique| <a href="bank_p.php?bank=<?php echo $_GET['bank']; ?>" target="_new">   
        <button type="button" class="btn btn-info">Print </button>   </a> |  <a href="print.php?bank=<?php echo $_GET['bank']; ?>">   
 <a href="do.php?bank=<?php echo $_GET['bank']; ?>">         <button type="button" class="btn btn-success">Excel Download </button>   </a> </h3> 
      
        <?php $d=$con->query("SELECT * FROM bank_records where name='".$_GET['bank']."' order by id ASC  ") or die(mysqli_error($con));
$i=1;
?>

<div class="panel-body">
                            <div class="table-responsive">
                                
                          
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Date</th>
        <th>Initial Amt</th>
          <th>Amt Deposited</th>  
          <th>Amt Withdrawn</th>
          <th>Balance</th>
      </tr>
    </thead>
    <tbody>
    
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="Aquamarine">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
          <td><?php echo $bu['date']; ?></td>
         <td><?php echo $bu['formals']; ?></td>
 <td  style="color:#00f"><?php echo $bu['currents']; ?></td>
  <td style="color:#f00"><?php $bu['withdrawn']; ?></td>
  <td><?php echo number_format($bu['newtot']); ?></td>      
      </tr>
        <?php } ?>
      
    </tbody>
  </table>
             
      </div>
      </div>
      </div>
      </div>
<?php ?>


<?php
if(isset($_POST['do'])){
	echo $name=$_POST['name'];
	$accnum=$_POST['accnum'];
	$year_id=$_POST['ayear'];
	$paid=$_POST['paid'];
	$level=$_POST['level'];
	$deposit=$_POST['deposit'];
	$total=$deposit+$paid;
	@session_start();
	$date=$_POST['date'];
	$day=date('d');
	$month=date('m');
	$year=date('Y');
	$new=$deposit+$paid;
	$active=$_SESSION['user_name'];
$id=$_POST['id'];


		 $depo=$con->query("INSERT INTO bank_records set num='$accnum',name='$name',formals='$deposit',currents='$paid',date='$date',year='$ayear',newtot='$new'") or die(mysqli_error($con));
				  
 $daily=$con->query("INSERT INTO daily set cust_id='$accnum',room='B$accnum',paidto='$active',day='$day',staffname='$name',discount='$paid',amt='',
			exp='$paid',date='$date',month='$month',year='$ayear',reason='bank',qty='1',area='$level',price='$paid',total='$deposit',owed='',
			purpose='Bank deposits',company='deposits'") or die(mysqli_error($con));
			
		
		
				
 $daily12=$con->query("UPDATE our_accounts set amt='$total' where id='$id'") or die(mysqli_error($con));
			echo "<script>alert('Records Successfull')</script>";
			echo '<meta http-equiv="Refresh" content="0; url=?deposits">';	
}

?>

       