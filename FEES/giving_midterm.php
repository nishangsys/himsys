
<script type="text/javascript">
function doCalc(form) {
		 

  form.balance.value = ((parseInt(form.feeamt.value)-parseInt(form.part.value)));

}
</script>
  <?php
  if(isset($_GET['mtname'])){
	  $id=$_GET['id'];
   $a=mysql_query("SELECT * from historic WHERE roll='$id'   ") or die(mysql_error());
	 while($ad=mysql_fetch_assoc($a)){
		 
		 
		 		 //////////Fees, bank ,regsitrating from settings tbl in school_db//////////////
$d=$con->query("SELECT * FROM settings where prog='".$ad['amountpaid']."' and levels='".$ad['time']."' ") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $fees=$bu['fees'];
	 //$regs=$bu[''];
	
	  $bank=$bu['bank'];
	 $regs=$bu['reg'];
	
	
}

		 	 //////////select academic year//////////////
$d=$conn->query("SELECT * FROM students where matricule='".$ad['matricule']."' ") or die(mysqli_error($conn));
while($bu=$d->fetch_assoc()){
	 $ssesse=$bu['cxx6'];
	
}

  
  ?>
  
  <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="../Fees/scho.php?roll=<?php echo $ad['id']; ?>&matric=<?php echo $ad['matricule']; ?>&mo=<?php echo $_GET['mo']; ?>&s=<?php echo $ssesse; ?>" method="post" name="form" > 
 
  <input type="hidden" class="form-control" id="email" placeholder="Enter Full Names" name="active" value="<?php echo $active; ?>" required="required">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="first_name" value="<?php echo $ad['student_name']; ?>" required="required">
      </div>
    </div>
    
     
   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-6">
  <select class="form-control" name="level" style="width:300px" required>
    <option value="<?php echo $ad['class']; ?>"><?php echo $ad['class']; ?></option>
   
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
      <label class="control-label col-sm-2" for="email">Academic Year:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="ayear" value="<?php echo $ad['ayear']; ?>" readonly>
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fees Amount Owed:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="feeamt" value="<?php echo $ad['balance']; ?>" onBlur="doCalc(this.form)"  readonly >
      </div>
    </div>
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Scholarship Amount:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="part" onBlur="doCalc(this.form)" style="border:2px solid#f00; color:#f00" required="required" >
      </div>
    </div>
    
	 
   
    
    <div class="form-group">

      <label class="control-label col-sm-2" for="pwd">Balance Due:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="balance" readonly="readonly" required="required" style="background:#FFC; color:#000; font-family:'Arial Black', Gadget, sans-serif">
      </div>
    </div>
    
    
     <input type="hidden"  name="paidsofar"  value="<?php echo $ad['amount_paid']; ?>" >
    <input type="hidden" name="as" value="<?php echo $ad['id'] ?>" />
    
      <input type="hidden" name="mats" value="<?php echo $ad['matricule'] ?>" />
    
     <input type="hidden" name="levels" value="<?php echo $l ?>" />
    
    
    
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
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="do" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
  
  
    
</div></div>
<?php } }  ?>


