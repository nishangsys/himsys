<script type="text/javascript">
function doCalc(form) {
		 

  form.balance.value = ((parseInt(form.feeamt.value)-parseInt(form.part.value)));

}
</script>
  
  <div class="col-sm-12">
  <div class="alert alert-warning">

  <strong>Info!</strong> Viewing Fees Situation by Department
</div> 

      <div class="well">
 <form class="form-horizontal" action="?viewing_feedrive" method="post" name="form">
 
 
   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Choose a Department:</label>
      <div class="col-sm-10">
  <select class="form-control" name="dept" style="width:300px" required>
  <?php
							
								$result = $con->query("SELECT * FROM settings group by prog") or die(mysqli_error($con));
				while($bu=$result->fetch_assoc()){
								?>
                              
        <option value="<?php echo $bu['prog']; ?>"  ><?php echo $bu['prog']; ?> </option>
    <?php } ?> 
    
  </select>
</div>
</div>
      
    
  
   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
  <select class="form-control" name="level" style="width:300px" required>
    <option value="<?php echo $ad['olddebt']; ?>"><?php echo $ad['olddebt']; ?></option>
    <option value="200">200</option>
    <option value="300">300</option>
    <option value="400">400</option>
            <option value="500">500</option>

  </select>
</div>
</div>
      
      
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Fee drive from:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="" name="feeamt" value="" required="required" style="width:300px">
      </div>
    </div>
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="doLogin" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
    
</div></div>



