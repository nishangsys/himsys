<script type="text/javascript">
function doCalc(form) {
		 

  form.balance.value = ((parseInt(form.feeamt.value)-parseInt(form.part.value)));

}
</script>
  <?php
  if(isset($_GET['ndept'])){
	 $name=$_GET['yname'];
	  $id=$_GET['id'];
	  $year_id=$_GET['ayear'];
	   $a=$dbcon->query("SELECT * from historic WHERE roll='$id'   ") or die(mysqli_error($dbcon));
	 while($ad=$a->fetch_assoc()){
		 $owe=$ad['amount_paid'];

  
  ?>
  
  <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="all123.php?roll=<?php echo $ad['id']; ?>" method="post" name="form"> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="first_name" value="<?php echo $ad['student_name']; ?>" required="required">
      </div>
    </div>
    
    
    
    
    
   
  
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="form-group">
      <label class="control-label col-sm-2" for="email">OLD Dept:</label>
      <div class="col-sm-10">
  <select class="form-control" name="OLclass" style="width:300px" >
    <option value="<?php echo $ad['ndept']; ?>"><?php echo $ad['amountpaid']; ?></option>
     
   
  </select>
</div>
</div>
      
        
       
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">New Department:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="class" value="<?php echo $_GET['ndept'];; ?>" required="required">
      </div>
    </div>
  
      
    
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Academic Year:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="ayear" value="<?php echo $ad['ayear']; ?>" readonly>
      </div>
    </div>
    
    
     
   
    
      <input type="hidden" name="feeamt" value="<?php echo $fees=$_GET['fees']; ?>" />
    
     <input type="hidden" name="owed" value="<?php echo $owe; ?>" />
    
     <input type="hidden" name="new_bal" value="<?php echo $fees-$owe ?>" />
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="do" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php } } ?>



