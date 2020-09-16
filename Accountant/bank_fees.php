  <style>
  a{
		text-decoration:none;
		color:#090;
		font-size:18px;
		font-weight:bold;
		
	}
  </style>
  <div class="alert alert-success" style="font-size:18px">
  <strong>Our System Says !</strong> Recording Fees paid throughBank
</div>
   <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="?2" method="post" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Department:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="dept" required>
              <option>........</option>

       <?php
	   $d=$dbcon->query("SELECT * FROM classes order by class") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['class']; ?>"><?php echo $df['class']; ?></option>
    <?php } ?>
 
  </select>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Nationality:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="sex" required>
       <option>........</option>
    <option value="1">Cameronian</option>
    <option value="2">Foreigner</option>
 
  </select>
      </div>
    </div>
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Payment Type:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="rtype" required readonly>
      <option value="Bank" readonly>Bank</option>
  
  </select>
      </div>
    </div>
    
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="doLogin">Submit</button>
      </div>
    </div>
    </form>
    </div>
    </div>
    </div>
  