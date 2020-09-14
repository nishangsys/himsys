<div class="row">

<div class="alert alert-success" style="font-size:16px">
  <strong>Our System Says !</strong> Bank Transaction Recording
</div>
<div class="well">
 <form class="form-horizontal" action="?recording" method="post" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Department:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="dept" required>
       <option></option>
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
      <label class="control-label col-sm-2" for="DOB">Sector:</label>
      <div class="col-sm-10">
        <select class="form-control" id="sel1" name="sex" required>
       <option></option>
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
       <option></option>
       
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
       <select class="form-control" id="sel1" name="rtype" required readonly style="border:2px solid#f00">
      <option value="Bank" readonly>Bank</option>
  
  </select>
      </div>
    </div>
    
    
    
         <div class="form-group">
      <label class="control-label col-sm-2" for="email">Bank:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="bank" value="<?php echo $_GET['bank']; ?>" required readonly="readonly" style="border:2px solid#f00">
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Account Number:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="accnum" value="<?php echo $_GET['num']; ?>" required readonly="readonly" style="border:2px solid#f00">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Current Blanace:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="bal" value="<?php echo $_GET['amount']; ?>" required readonly="readonly" style="border:2px solid#f00">
      </div>
    </div>
    
    <input type="hidden" class="form-control" id="email"  name="bid" value="<?php echo $_GET['id']; ?>" >
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