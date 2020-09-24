<?php
						$d=$conn->query("SELECT * FROM special where id='".$_GET['did']."'  ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
						$dept_name=$bu['prog_name'];
					}
?>


<div class="alert alert-info">
  <strong> <span style="color:#f00">Upload a CA marks for <?php echo $dept_name; ?> this <?php echo $ayear_name; ?></span> </strong>
</div>

<form class="form-inline" role="form" method="post" action="">
   
  <div class="form-group">
    <label for="email">Program :</label>
   
     <select class="form-control" id="sel1" name="pid" required>
    <option value="<?php echo $_GET['did']; ?>" ><?php echo $dept_name; ?> </option>
           
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
		  
	   $d=$conn->query("SELECT * from special,subjects where 
	 subjects.prog_id='$pid' AND subjects.prog_id=special.id and subjects.level_id='$level'  and subjects.sem='$sem' ") or die(mysqli_error($conn)) ;
	
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
       <td><?php echo $bu['code']; ?></td>
           <td><?php echo $bu['status']; ?></td>
       <td><?php echo $bu['cv']; ?></td>   

        <td>
		
        
        <a href="?uploading_ca&did=<?php echo $_GET['did']; ?>&id=<?php echo $bu['id']; ?>&sch_id=<?php echo $bu['school_id']; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $level; ?> "><button class="btn btn-success"   >Upload a  Level <?php echo $bu['levels']; ?> Course Ca Mark</button>
        
        
        
        
        </td>

       
           
      </tr>
        <?php } } ?>
      
    </tbody>
  </table>