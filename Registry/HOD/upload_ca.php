
<div class="alert alert-info">
  <strong> <span style="color:#f00">Upload a CA marks for <?php echo $ayear_name; ?></span> </strong>
</div>

<form class="form-inline" role="form" method="post" action="">
   
  <div class="form-group">
    <label for="email">Program :</label>
    <select class="form-control" id="sel1" name="prog" required>
    <option value > </option>
                       <?php
						$d=$conn->query("SELECT * FROM special order by prog_name  ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
					
                       ?>
                        <option value="<?php echo $bu['id']; ?>"><?php echo $bu['prog_name']; ?></option>
                     <?php } ?>
  </select>
  </div>
  <div class="form-group">
    <label for="pwd">Level :</label>
    <select class="form-control" id="sel1" name="level" required>
    <option value > </option>
                       <?php
						$d=$conn->query("SELECT * FROM levels  ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
					
                       ?>
                        <option value="<?php echo $bu['id']; ?>"><?php echo $bu['levels']; ?></option>
                     <?php } ?>
  </select>
  </div>
   <div class="form-group">
    <label for="pwd">Semester :</label>
    <select class="form-control" id="sel1" name="sem" required>
    <option value > </option>
    <option value="1">First Semester</option>
        <option value="2">Second Semester</option>

  </select>
  </div>
  <button type="submit" class="btn btn-primary" name="ok">Submit</button>
</form>
        
  <br /><hr />
      <?php
	 
	
	  if(isset($_POST['ok'])){
		  $sem=$_POST['sem'];
		  $pid=$_POST['pid'];
		  $level=$_POST['level'];
		  
	   $d=$conn->query("SELECT * from course where 
	  course.programe_id='$pid' and course.level_id='$level'  and course.sem='$sem' ") or die(mysqli_error($conn)) ;
	
$i=1;
?>   
                  
                            
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Program</th>
           <th>Code</th>

        <th>Status</th>
           <th>CV</th>
             
        <th>Action</th> 
        
        
      </tr>
    </thead>
    <tbody>
 
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="PaleGreen">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
         <td><?php echo $bu['title']; ?></td>
       <td><?php echo $bu['course_code']; ?></td>
           <td><?php echo $bu['status']; ?></td>
       <td><?php echo $bu['credit_value']; ?></td>   

        <td>
		<?php
		$dc=$conn->query("SELECT * FROM options,departments where options.id='".$bu['programe_id']."' 
AND options.department_id=departments.id		") or die(mysqli_error($conn));
							
					while($buc=$dc->fetch_assoc()){
					 $sch_id=$buc['school_id'];
					}
		
		?>
        
        <a href="?uploading_ca&did=<?php echo $_GET['did']; ?>&id=<?php echo $bu['id']; ?>&sch_id=<?php echo $sch_id; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $level; ?> "><button class="btn btn-success"   >Upload a  Level <?php echo $bu['levels']; ?> Course Ca Mark</button>
        
        
        
        
        </td>

       
           
      </tr>
        <?php } } ?>
      
    </tbody>
  </table>