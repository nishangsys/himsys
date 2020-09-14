<script type="text/javascript">
function doCalc(form) {
	
}
</script>
  <?php
  if(isset($_GET['name'])){
	 $name=$_GET['name'];
	  $id=$_GET['id'];
	  $year_id=$_GET['ayear'];
	   $a=mysql_query("SELECT * from historic WHERE roll='$id'   ") or die(mysql_error());
	 while($ad=mysql_fetch_assoc($a)){

  
  ?>
  
  <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="action12.php" method="post" name="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="first_name" value="<?php echo $ad['student_name']; ?>" required="required">
      </div>
    </div>
    
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Matricule</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="matricule" value="<?php echo $ad['matricule']; ?>"readonly>
      </div>
    </div>
    
    
   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
  <select class="form-control" name="level" style="width:300px" required>
    <option value="<?php echo $_GET['levelss']; ?>"><?php echo $_GET['levelss']; ?></option>
    <option value="200">200</option>
    <option value="300">300</option>
    <option value="400">400</option>
     <option value="500">500</option>

  </select>
</div>
</div>
      
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Dept:</label>
      <div class="col-sm-10">

         <select required class="form-control"  name="class" required >
       <option value="<?php echo $ad['amountpaid'];; ?>"><?php echo $ad['amountpaid'];; ?></option>
        <?php
							
								$result = $con->query("SELECT * FROM special group by certi") or die(mysqli_error($con));
				while($bu=$result->fetch_assoc()){
								?>
                              
        <option value="<?php echo $bu['prog_name']; ?>"  ><?php echo $bu['prog_name']; ?> </option>
    <?php } ?> 
      </select>      </div>
    </div>
    
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Academic Year:</label>
      <div class="col-sm-10">
       
         <select required class="form-control"  name="ayear" required >
       <option value="<?php echo $ayear;; ?>"><?php echo $ayear;; ?></option>
       
        <?php
							
								$result = $conn->query("SELECT * FROM historic group by ayear asc") or die(mysqli_error($conn));
				while($bu=$result->fetch_assoc()){
								?>
                              
        <option value="<?php echo $bu['ayear']; ?>"  ><?php echo $bu['ayear']; ?> </option>
    <?php } ?> 
        
      </select>
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fees Amount:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="feeamt" value="<?php echo $ad['expected_amount']; ?>" onBlur="doCalc(this.form)"  readonly >
      </div>
    </div>
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fee Amount Paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="part" onBlur="doCalc(this.form)" value="<?php echo $ad['amount_paid']; ?>" >
      </div>
    </div>
    
   
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Balance Due:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" value="<?php echo $ad['balance']; ?>" name="balance" readonly="readonly" required="required" style="background:#FFC; color:#000; font-family:'Arial Black', Gadget, sans-serif">
      </div>
    </div>
    
    
    
    <input type="hidden" name="as" value="<?php echo $ad['id'] ?>" />
    
      <input type="hidden" name="old" value="<?php echo $ayear ?>" />
    
     <input type="hidden" name="levels" value="<?php echo $l ?>" />
    
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="doLogin" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php } } ?>



