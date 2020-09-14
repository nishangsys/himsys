<script type="text/javascript">
function doCalc(form) {
		 

  form.balance.value = ((parseInt(form.feeamt.value)-parseInt(form.part.value)));

}
</script>
  <?php
  if(isset($_GET['level'])){
	 $name=$_GET['yname'];
	  $id=$_GET['id'];
	  $year_id=$_GET['ayear'];
	   $a=$dbcon->query("SELECT * from historic WHERE roll='$id'   ") or die(mysqli_error($dbcon));
	 while($ad=$a->fetch_assoc()){

  
  ?>
  
  <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="alls.php?roll=<?php echo $ad['id']; ?>" method="post" name="form"> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="first_name" value="<?php echo $ad['student_name']; ?>" required="required">
      </div>
    </div>
    
    
   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
  <select class="form-control" name="level" style="width:300px" required>
    <option value="<?php echo $ad['time']; ?>"><?php echo $ad['time']; ?></option>
    
        <?php
	   $d=mysql_query("SELECT * FROM levels order by levels") or die(mysql_error());
	   while($df=mysql_fetch_assoc($d)){
	   ?>
    <option value="<?php echo $df['levels']; ?>"><?php echo $df['levels']; ?></option>
    <?php } ?>
   
  </select>
</div>
</div>
      
  
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="form-group">
      <label class="control-label col-sm-2" for="email">Dept:</label>
      <div class="col-sm-10">
  <select class="form-control" name="class" style="width:300px" required>
    <option value="<?php echo $ad['amountpaid']; ?>"><?php echo $ad['amountpaid']; ?></option>
    <option></option>
        <?php
	   $d=mysql_query("SELECT * FROM classes order by class") or die(mysql_error());
	   while($df=mysql_fetch_assoc($d)){
	   ?>
    <option value="<?php echo $df['amountpaid']; ?>"><?php echo $df['amountpaid']; ?></option>
    <?php } ?>
   
  </select>
</div>
</div>
      
        
        
    
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Academic Year:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="ayear" value="<?php echo $ad['ayear']; ?>" readonly>
      </div>
    </div>
    
    
     
    <input type="hidden" name="as" value="<?php echo $ad['id'] ?>" />
    
      <input type="hidden" name="ass" value="<?php echo $ass ?>" />
    
     <input type="hidden" name="levels" value="<?php echo $l ?>" />
    
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="do" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php } } ?>



