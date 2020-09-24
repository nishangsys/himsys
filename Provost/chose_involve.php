
<div class="alert alert-info">
  <strong>All Programs of <?php echo $ayear_name; ?></strong> I
</div>

<form class="form-inline" action="" method="POST">
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
	   $d=$dbcon->query("SELECT * from students,years where students.year_id=years.id  GROUP BY students.year_id order by students.year_id DESC") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['year_name']; ?></option>
    <?php } ?>
                 </select>
  </div>
 
  <button type="submit" name="ok" class="btn btn-default">Submit</button>
</form>  
  