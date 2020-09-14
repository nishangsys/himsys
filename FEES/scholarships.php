  <style>
  a{
		text-decoration:none;
		color:#090;
		font-size:13px;
		font-weight:bold;
		
	}
  </style>
   <div class="col-sm-12">
   <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="?22" method="post" >
 
  <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Scholarship Provider:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="sch" required>
<option></option>
       <?php
	   $d=$con->query("SELECT * FROM scholars order by name") or die(mysqli_error($con));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['name']; ?>"><?php echo $df['name']; ?></option>
    <?php } ?>
 
  </select>
      </div>
    </div>
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Student's Department:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="dept" required>
<option></option>

       <?php
	   $d=mysql_query("SELECT * FROM special order by certi") or die(mysql_error());
	   while($df=mysql_fetch_assoc($d)){
	   ?>
    <option value="<?php echo $df['prog_name']; ?>"><?php echo $df['prog_name']; ?></option>
    <?php } ?>
 
  </select>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Student's Nationality:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="sex" required>

    <option value="1">Cameronian</option>
    <option value="2">Foreigner</option>
 
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
  