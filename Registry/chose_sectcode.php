
<div class="alert alert-info">
  <strong>All Programs of <?php echo $ayear_name; ?></strong> I
</div>

<form class="form-inline" action="?importing_subjects" method="POST">
  <div class="form-group">
    <label for="email">Program:</label>
   <select class="form-control" id="sel1" name="dept" required>
              <option>........</option>

       
       <?php
	   $d=$dbcon->query("SELECT * from special order by prog_name") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['prog_name']; ?></option>
    <?php } ?>
 
  </select>
  </div>
 
  
  <div class="form-group">
    <label for="pwd">Semester :</label>
     <select class="form-control" id="sel1" name="sem" required>
                  <option>........</option>

       <?php
	   $d=$dbcon->query("SELECT * from semesters") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['s_num']; ?>"><?php echo $df['s_name']; ?></option>
    <?php } ?>
                 </select>
  </div>
  
  
  <div class="form-group">
    <label for="pwd">Levels :</label>
     <select class="form-control" id="sel1" name="level" required>
                  <option>........</option>

       <?php
	   $d=$dbcon->query("SELECT * from levels") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['levels']; ?></option>
    <?php } ?>
                 </select>
  </div>
  <br /><br />
 
  <button type="submit" name="ok" class="btn btn-success">Next Step</button>
</form>  
  