<form class="form-inline" role="form" method="POST" action="../Records/print_dailyatt.php" target="new">
  <div class="form-group">
    <label for="email">Choose Date:</label>
    <input type="date" name="date" class="form-control" id="email">
  </div>
  
  
  
  
  <div class="form-group">
    <label for="email">Program :</label>
    <select class="form-control" id="sel1" name="prog" required>
    <option></option>
    <?php
	$ds=$conn->query("SELECT * FROM students_register,special where students_register.dept_id=special.id GROUP BY 
	students_register.dept_id ") or die(mysqli_error($conn));
	$i=1;
		while($bus=$ds->fetch_assoc()){
			?>
                  
                <option value="<?php echo $bus['dept_id']; ?>"> <?php echo $bus['prog_name']; ?></option>
                <?php } ?>
              
              </select>
  </div>
  
  
  <div class="form-group">
    <label for="email">Level :</label>
    <select class="form-control" id="sel1" name="level" required>
    <option></option>
    <?php
	$ds=$conn->query("SELECT * FROM students_register,levels where students_register.level_id=levels.id GROUP BY 
	students_register.level_id ") or die(mysqli_error($conn));
	$i=1;
		while($bus=$ds->fetch_assoc()){
			?>
                  
                <option value="<?php echo $bus['level_id']; ?>"> <?php echo $bus['levels']; ?></option>
                <?php } ?>
              
              </select>
  </div>
  
  
  <div style="clear:both; margin-top:10px"></div>
  <button type="submit" name="save" class="btn btn-primary"> Next </button>
</form>
<?php

	if(isset($_POST['save'])){
		$date=$_POST['date'];
		$sem=$_POST['sem'];
		$wwwk=$_POST['week'];
		$newDate = date("d-m-Y", strtotime($date));

		
		$c=$dbcon->query("SELECT * FROM date_weeks WHERE 
date='$date' and year_id='$ayear' ") or die(mysqli_error($dbcon)) ;

 $gg=$c->num_rows;


	if(mysqli_num_rows($c)>0){
		echo "<script>alert('ERROR. $date is already registered in the system this year')</script>";
	}
	else{
			 $ats=$dbcon->query("insert into  date_weeks SET 
date='$newDate', year_id='$ayear',week_num='$wwwk', sem='$sem'") or die(mysqli_error($dbcon)) ;






echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=?chose_week&link=Record%20Attendance">';
		
		
		
	}
	}

?>
