<?php
						$d=$conn->query("SELECT * FROM options where id='".$_GET['did']."'  ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
						$dept_name=$bu['name'];
					}
?>


<div class="alert alert-info">
  <strong> <span style="color:#f00">Uploaded a CA marks for <?php echo $dept_name; ?> this <?php echo $ayear; ?></span> </strong>
</div>

<form class="form-inline" role="form" method="post" action="">
    <input type="hidden" name="pid" value="<?php echo $_GET['did']; ?>" readonly="readonly" style="color:#f00" class="form-control" id="email">

  <div class="form-group">
    <label for="email">Program :</label>
    <input type="text" name="prog" value="<?php echo $dept_name; ?>" readonly="readonly" style="color:#f00" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Level :</label>
    <select class="form-control" id="sel1" name="level" required>
    <option value > </option>
                       <?php
						$d=$conn->query("SELECT * FROM level  ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
					
                       ?>
                        <option value="<?php echo $bu['id']; ?>"><?php echo $bu['name']; ?></option>
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
  
   <div class="form-group">
    <label for="pwd">Academic Year :</label>
    <select class="form-control" id="sel1" name="ayear" required>
        <option value > </option>
                       <?php
						$d=$conn->query("SELECT * FROM my_records group by ayear ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
					
                       ?>
                        <option value="<?php echo $bu['ayear']; ?>"><?php echo $bu['ayear']; ?></option>
                     <?php } ?>

  </select>
  </div>
  <button type="submit" class="btn btn-primary" name="ok">Submit</button>
</form>
        
  <br /><hr />
      <?php
	 
	
	  if(isset($_POST['ok'])){
		  $sem=$_POST['sem'];
		  $pid=$_POST['pid'];
		  $l=$_POST['level'];
		  $ayear=$_POST['ayear'];
		  
		  $dm=$conn->query("SELECT * FROM level where id='".$l."'  ") or die(mysqli_error($conn));
		  $dm->num_rows;
							
					while($bum=$dm->fetch_assoc()){
						$level=$bum['name'];
					}
		  
	   $d=$conn->query("SELECT * from course,my_records where course.course_code=my_records.code and course.programe_id='$pid' and course.level_id='$l'  and course.sem='$sem' and my_records.ayear='$ayear' GROUP BY my_records.code ") or die(mysqli_error($conn));
	  
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
        
        <a href="print_to_pdf/print_pdf.php?dept=<?php echo $bu['dept'];; ?>&sem=<?php echo $sem; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $level; ?>&code=<?php echo $bu['code']; ?> " target="new"><button class="btn btn-success"   >Download PDF of <?php echo $bu['code']; ?> Level  <?php echo $bu['levels']; ?>  Ca Marks</button>
        
         <a href="print_ca.php?dept=<?php echo $dept_name;; ?>&sem=<?php echo $sem; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $level; ?>&code=<?php echo $bu['code']; ?> " target="new"><button class="btn btn-primary"   >Print a Copy </button>
        
        
        
        
        </td>

       
           
      </tr>
        <?php } } ?>
      
    </tbody>
  </table>