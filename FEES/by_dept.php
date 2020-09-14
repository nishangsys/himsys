<script type="text/javascript">
function doCalc(form) {
		 

  form.balance.value = ((parseInt(form.feeamt.value)-parseInt(form.part.value)));

}
</script>
  
  <div class="col-sm-12">
  
  <div class="alert alert-info">
  <strong>Info!</strong> Viewing Fees Situation by Department
</div> 

      <div class="well">
 <form class="form-horizontal" action="?viewing_dept" method="post" name="form">
  
   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Choose a Department:</label>
      <div class="col-sm-10">
  <select class="form-control" name="level" style="width:300px" required>
 <?php
							
								$result = $conn->query("SELECT * FROM historic where year_id='$ayear' group by amountpaid") or die(mysqli_error($conn));
				while($bu=$result->fetch_assoc()){
								?>
                              
        <option value="<?php echo $bu['amountpaid']; ?>"  ><?php echo $bu['amountpaid']; ?> </option>
    <?php } ?> 
    
  </select>
</div>
</div>
      
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="doLogin" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
    
</div></div>



