<script type="text/javascript">
function doCalc(form) {
		 

  form.balance.value = ((parseInt(form.feeamt.value)-parseInt(form.part.value)));

}
</script>
  <?php
  if(isset($_GET['update_debt'])){
	 $name=$_GET['update_debt'];
	  $id=$_GET['id'];
	  $year_id=$_GET['ayear'];
	   $a=$conn->query("SELECT * from historic WHERE roll='$id'   ") or die(mysqli_error($conn));
	 while($ad=$a->fetch_assoc()){
		 $matric=$ad['matricule'];

  
  ?>
  
  <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="" method="post" name="form"> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="name" value="<?php echo $ad['student_name']; ?>" required="required">
      </div>
    </div>
    
    
   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
  <select class="form-control" name="level" style="width:300px" >
    <option value="<?php echo $ad['class']; ?>"><?php echo $ad['class']; ?></option>
   
  </select>
</div>
</div>


 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Bank:</label>
      <div class="col-sm-10">
       <select required class="form-control" id="sel1" name="bank" >
       
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
        <input type="text" class="form-control" id="email"  name="class" value="<?php echo $ad['amountpaid']; ?>" readonly>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"> Year Concern:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="con" value="<?php echo $ad['ayear']; ?>" readonly>
      </div>
    </div>
    
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Current Year:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="ayear" value="<?php echo $ayear; ?>" style="color:#f00" readonly>
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fees Amount Owed:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="feeamt" value="<?php echo $ad['balance']; ?>" onBlur="doCalc(this.form)"  readonly >
      </div>
    </div>
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fee Amount Paid sofar:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="parts" onBlur="doCalc(this.form)" value="<?php echo $ad['amount_paid']; ?>" readonly="readonly" >
      </div>
    </div>
    
   
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fee Amount Paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="part" onBlur="doCalc(this.form)"  required="required" >
      </div>
    </div>
    
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Balance Due:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="balance" readonly="readonly" required="required" style="background:#FFC; color:#000; font-family:'Arial Black', Gadget, sans-serif">
      </div>
    </div>
    
    
    <input type="hidden" name="as" value="<?php echo $ad['id'] ?>" />
    
      <input type="hidden" name="ass" value="<?php echo $ass ?>" />
    
     <input type="hidden" name="levels" value="<?php echo $l ?>" />
    
    
    
     
      <table style="margin-left:120px">
    <tr><td>Day Paid</td><td> 
        <select class="form-control" id="sel1" name="day" onBlur="doCalc(this.form)" required>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=1;$day<=31;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select>
      </td><td>Month Paid</td><td><select class="form-control" id="sel1" name="month" onBlur="doCalc(this.form)" required>
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
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=2016;$day<=2020;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select></td></tr>
    </table>
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="do" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php } 


}
if(isset($_POST['do'])){
$class=$_POST['class'];


$name=$_POST['name'];
$level=$_POST['level'];
$bal=$_POST['balance'];
$id=$_GET['id'];
$paid=$_POST['part'];
$sofar=$_POST['parts'];
$year_id=$_POST['ayear'];
$cons=$_POST['con'];
$room=$_POST['class'];
echo $all=$sofar+$paid;


$month=$_POST['month'];;
$year=$_POST['year'];;
$day=$_POST['day'];;
$dates=$date=$day."-".$month."-".$year;;
$bank=$_POST['bank'];
$active=$_POST['active'];
if($bal<0){
	echo "<script>alert('ERROR. Negative Balance of $bal Notices. Correct that')</script>";

}

else {


$daily=$con->query("INSERT INTO daily set cust_id='$matric',room='$room',paidtou='$dates',paidto='$active',day='$day',staffname='$name',discount='$reg',amt='$part',
			rec='$paid',date='$dates',month='$month',year='$ayear',reason='debts',qty='1',area='1',price='$paid',total='$paid',owed='$bal',
			purpose='Debts',company='$bank',thatyear='$cons'") or die(mysqli_error($con));
  
$cv=$conn->query("UPDATE historic set balance='$bal',amount_paid='$all' where roll='".$_GET['id']."' ") or die(mysqli_error($conn));

//$cv12=$con->query("UPDATE debtors set balance='$bal' where roll='$id' ") or die(mysqli_error($con));
echo "<script>alert('SUCCESS')</script>";

echo '<meta http-equiv="Refresh" content="0; url=first.php?all_debtors">';
}
	
}
 ?>



