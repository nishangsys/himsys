<?php
@session_start();

$_SESSION['id'];
$query =$con->query("SELECT * FROM users WHERE id=".$_SESSION['id']) or die(mysqli_error($con));

 while($userRow=$query->fetch_array()){
 
 $who=$userRow['full_name'];
 $level=$userRow['banned'];
 
 }
?>
     <div class="container" style="background:#eee">
  <h2><?php echo $clients; ?> Recording Expenses on <?php echo $date; ?><?php echo $_GET['type'] ?></h2>
  <form method="POST"  class="form-horizontal" action="" name="logForm" id="logForm" >
    <div class="form-group">
      <label class="control-label col-sm-2"  for="usr_email">Category Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter User name" name="name" value="<?php echo $_GET['type']; ?>" readonly="readonly">
      </div>
    </div>
  
   
    <div class="form-group">
      <label class="control-label col-sm-2"  for="usr_email">Description:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Item Bought" name="item"  />
      </div>
    </div>
   
   
   
    <div class="form-group">
      <label class="control-label col-sm-2"  for="usr_email">Paid to:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Name of person receiving the money" name="pto"  />
      </div>
    </div>
   
   
    <div class="form-group">
      <label class="control-label col-sm-2"  for="usr_email">Amount Spent:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Amount Spent" name="amount" >
      </div>
    </div>
   
   
   
   
    <div class="form-group">
      <label class="control-label col-sm-2"  for="usr_email">Qty Bought:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Item Bought" name="qty" >
      </div>
    </div>
   
    
    
    
  
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Day:</label>
      <div class="col-sm-10">
        <select class="form-control" id="sel1" name="day" onBlur="doCalc(this.form)" required>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=01;$day<=31;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select>
      </div>
    </div>
    
    
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Month:</label>
      <div class="col-sm-10">
        <select class="form-control" id="sel1" name="month" onBlur="doCalc(this.form)" required>
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
				
  </select>
      </div>
    </div>
    
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Year:</label>
      <div class="col-sm-10">
        <select class="form-control" id="sel1" name="year" onBlur="doCalc(this.form)" required>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=2017;$day<=2020;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select>
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
$head=$_POST['name'];
$pto=$_POST['pto'];
$qty=$_POST['qty'];
if($day<10){
	$dayy="0".$day;
}
else {
	$dayy=$day;
}

 $date=$dayy."-".$month."-".$year;
$name=$_POST['name'];
		$acv=$con->query("INSERT INTO daily set cust_id='$who',room='',reason=' $item',qty='$qty',price='$paid',total='$amount',
			date='$date',month='$month',year='$ayear',area='0',time='$time',paidto='$who',purpose='$head' ,idds='',discount='',staffname='$name',receiver='$pto',exp='$amount'") or die(mysqli_error($con));
			echo "<script>alert('Action Succssfull')</script>";
	}
	
	?>