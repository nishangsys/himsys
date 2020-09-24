<?php

 $who=$_GET['id'];


	  $select=$conn->query("SELECT * from levels,special,students,fee_paymts  where students.id='".$who."' AND special.id=students.dept_id AND levels.id=students.level_id AND fee_paymts.matric=students.matricule AND fee_paymts.yearid='$ayear' ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
	
		
	 

?>
 
 
      <div class="well">
 <form class="form-horizontal" action="" method="post" name="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
      
  <input name="username" type="text" value="<?php echo $rows['fname'];; ?>" id="username" class="demoInputBox" onBlur="checkAvailability()" style="width:65%; border:2px solid#f00" required="required"><span id="user-availability-status" style="color:#f00" > <?php
 
  $d=$conn->query("SELECT * FROM fee_paymts where matric='".$rows['matricule']."' and yearid!='$year_id' AND balance>0  ") or die(mysqli_error($conn));
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
    
    
    
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
      
       <input type="text" class="form-control" id="email"  name="levs" value="Level <?php echo ($rows['levels']); ?> Fees paid at <?php echo $_GET['mo']; ?>" style="color:#f00; font-weight:bold" />
        
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
		   if($counts<1){
		echo 0;
	 }
	 else {
		echo $bal;
	 }
		
						 
				  ?>" style="color:#f00; font-weight:bold"onBlur="doCalc(this.form)"  required="required" >
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fees:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="feeamt" value="<?php  echo $rows['expected_amount']; ?>" onBlur="doCalc(this.form)" required="required" r>
      </div>
    </div>
    
        <input type="hidden" class="form-control" id="pwd" name="student_union" value="0" onBlur="doCalc(this.form)" >
     
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> Fee Paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" value="<?php  echo $rows['fee_amt']; ?>" id="pwd" name="part" value="0" onBlur="doCalc(this.form)" >
      </div>
    </div>
    
   
     
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Balance:</label>
      <div class="col-sm-10">
        <input type="number" value="<?php  echo $rows['balance']; ?>" class="form-control" id="pwd" name="balance" style="background:#FFC; color:#000; font-family:'Arial Black', Gadget, sans-serif">
      </div>
    </div>
  
  
    
    <input type="hidden" name="matric" value="<?php echo $rows['matricule'];
	 ?>" />
    
      <input type="hidden" name="disc" value="0" />
    
     <input type="hidden" name="student_id" value="<?php echo $rows['id']; ?>" />
     <input type="hidden" name="level_id" value="<?php echo $rows['level_id']; ?>" />
    
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="save" class="btn btn-danger">Save Finance Update</button>
      </div>
    </div>
  </form>
    
   
     <?php } ?>
        