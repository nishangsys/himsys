<form class="form-inline" role="form" method="POST" action="">
  <div class="form-group">
    <label for="email">Date:</label>
    <input type="date" name="date" class="form-control" id="email" required>
  </div>
  
  
  
  
  <div class="form-group">
    <label for="email">Week Number :</label>
    <select class="form-control" id="sel1" name="week" required>
         		<option></option>
                  <?php
				  
			for($i=0; $i<=36; $i++){
	 
				  ?>
                <option value="<?php echo $i+1; ?>"> Week <?php echo $i+1;; ?></option>
                <?php } ?>
              
              </select>
  </div>
  
  
  <div class="form-group">
    <label for="email">Semester :</label>
    <select class="form-control" id="sel1" name="sem" required>
         		<option></option>
                  <?php
				  
				$ds=$conn->query("SELECT * FROM semesters ") or die(mysqli_error($conn));
		while($bus=$ds->fetch_assoc()){
	 
				  ?>
                <option value="<?php echo $bus['s_num']; ?>"><?php echo $bus['s_name']; ?></option>
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

 <table class="table table-bordered">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Date</th>
        <th>Week</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
	/*
	$date = new DateTime('2000-01-01');
echo $date->format('Y-m-d H:i:s');
*/
	$ds=$conn->query("SELECT * FROM date_weeks order by id DESC LIMIT 10 ") or die(mysqli_error($conn));
	$i=1;
		while($bus=$ds->fetch_assoc()){
			?>
	 
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $bus['date']; ?></td>
        <td>Week <?php echo $bus['week_num']; ?></td>
        <td><a href="" class="btn btn-primary btn-xs">Update</a>
        
        <a href="?calendar&id=<?php echo base64_encode($bus['id']); ?>" class="btn btn-success btn-xs">Record Attendance</a>
        
      </tr>
     <?php } ?>
    </tbody>
  </table>
  
  