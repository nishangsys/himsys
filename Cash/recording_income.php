<?php

?>
     <div class="container" style="background:#eee">
  <h2><?php echo $clients; ?> Recording Expenses on <?php echo $date; ?><?php echo $_GET['type'] ?></h2>
  <form method="POST"  class="form-horizontal" action="" name="logForm" id="logForm" >
  
  
   
    <div class="form-group">
      <label class="control-label col-sm-2"  for="usr_email">Item Bought:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Item Bought" value="other incomes" name="item"  />
      </div>
    </div>
   
   
   
    <div class="form-group">
      <label class="control-label col-sm-2"  for="usr_email">Amount:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Amount Spent" name="amount" >
      </div>
    </div>
   
   
   
   
   
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="save">Save Records</button>
      </div>
    </div>
  </form>
</div>


    <?php
	if(isset($_POST['save'])){
		
		$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$item=$_POST['item'];
$amount=$_POST['amount'];
$qty=$_POST['qty'];
if($day<10){
	$dayy="0".$day;
}
else {
	$dayy=$day;
}

 $date=date('d-m-Y');
 $month=date('m');
 $year=date('Y');
$name=$_POST['name'];
		$acv=$con->query("INSERT INTO daily set cust_id='$who',room='',reason=' $item',qty='$qty',price='$paid',total='$amount',
			date='$date',month='$month',year='$year',area='0',time='$time',paidto='$paidto',purpose='other income' ,idds='',discount='',staffname='$name',rec='$amount'") or die(mysqli_error($con));
			echo "<script>alert('Action Succssfull')</script>";
	}
	
	?>