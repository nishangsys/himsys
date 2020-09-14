<div class="row">
<div class="alert alert-success" style="font-size:18px">
  <strong>Our System Says !</strong> Cash Transaction Recording
</div>

<div class="well">
 <form class="form-horizontal" action="?record" method="post" >
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
       <?php
	$result= $con->query("select * from income_classes order by name" ) or die (mysql_error());
					
								while ($row=$result->fetch_assoc()){
	?>
    <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
   <?php } ?>
  </select>
      </div>
    </div>
    
    
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Level:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="level" required>
       
        <option value="General" required>General</option>
       <?php
	$result= $dbcon->query("select * from levels order by levels" ) or die (mysqli_error($dbcon));
					
								while ($row=$result->fetch_assoc()){
	?>
    <option value="<?php echo $row['levels']; ?>" required>Level <?php echo $row['levels']; ?></option>
   <?php } ?>
  </select>
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Payment Type:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="rtype" required readonly>
      <option value="Cash" readonly>Cash</option>
  
  </select>
      </div>
    </div>
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="doLogin">Record Finance</button>
      </div>
    </div>
    </form>
    </div>

          
          </div>
        </div>
      
       
        
        </div>