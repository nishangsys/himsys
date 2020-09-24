
<div class="alert alert-info">
  <strong>Choose Department to Import Names</strong> 
</div>

<form class="form-inline" action="?importing_names" method="POST">
  <div class="form-group">
    <label for="email">Program:</label>
   <select class="form-control" id="sel1" name="dept" required>
              <option>........</option>

       <?php
	   $d=$dbcon->query("SELECT * from students,special where students.dept_id=special.id  GROUP BY students.dept_id") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['prog_name']; ?></option>
    <?php } ?>
 
  </select>
  </div>
  <div class="form-group">
    <label for="pwd">Year:</label>
     <select class="form-control" id="sel1" name="ayear" required>
                  <option>........</option>

       <?php
	   $d=$dbcon->query("SELECT * from years order by year_name DESC") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['year_name']; ?></option>
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
  