

<div class="alert alert-info">
  <strong> <span style="color:#f00">Upload a EXAMS marks for <?php echo $dept_name; ?> this <?php echo $ayear_name; ?></span> </strong>
</div>

<form class="form-inline" role="form" method="post" action="">
    <input type="hidden" name="pid" value="<?php echo $_GET['did']; ?>" readonly="readonly" style="color:#f00" class="form-control" id="email">

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
		  $pid=$_POST['prog'];
		  $level=$_POST['level'];
		  ////get department_id
		  	$d=$conn->query("SELECT * FROM special where id='".$pid."'  ") or die(mysqli_error($conn));	
			 $d->num_rows;			
					while($bu=$d->fetch_assoc()){
						 $dip=$bu['department_id'];
						 $dept=$bu['name'];
					}
				
					$d=$conn->query("SELECT * FROM levels where id='".$level."'  ") or die(mysqli_error($conn));				
					while($bu=$d->fetch_assoc()){
						  $levels=$bu['levels'];
					}
		  
		  
	   $d=$conn->query("SELECT * from subjects where prog_id='$pid' and level_id='$level'  and sem='$sem' ") or die(mysqli_error($conn)) ;
	   echo $d->num_rows;
	  
$i=1;
?>   
  <h3> <?php echo $dept; ?> Levels <?php echo $levels; ?> </h3>
               
                            
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
       <td><?php echo $bu['code']; ?></td>
           <td><?php echo $bu['status']; ?></td>
       <td><?php echo $bu['cv']; ?></td>   

        <td>
        
        <a href="?uploading_exams&did=<?php echo $bu['prog_id']; ?>&id=<?php echo $bu['id']; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $level; ?>&sch_id=<?php echo $sch_id; ?> "><button class="btn btn-success"   >Upload a  <?php echo $bu['course_code']; ?> Exams Mark</button>
        
        
        
        
        </td>

       
           
      </tr>
        <?php } } ?>
      
    </tbody>
  </table>
  