<?php
						$d=$conn->query("SELECT * FROM special where id='".$_GET['did']."'  ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
						$dept_name=$bu['prog_name'];
					}
?>


<div class="alert alert-info">
  <strong> <span style="color:#f00">Printing Uploaded CA marks for <?php echo $dept_name; ?> this <?php echo $ayear_name; ?></span> </strong>
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
						$d=$conn->query("SELECT * FROM my_marks,levels WHERE my_marks.level_id=levels.id GROUP BY my_marks.level_id   ") or die(mysqli_error($conn));
							
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
  
   <div class="form-group">
    <label for="pwd">Academic Year :</label>
    <select class="form-control" id="sel1" name="ayear" required>
        <option value > </option>
                       <?php
						$d=$conn->query("SELECT * FROM my_marks,years WHERE year_id=my_marks.year_id  group by years.year_name DESC ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
					
                       ?>
                        <option value="<?php echo $bu['id']; ?>"><?php echo $bu['year_name']; ?></option>
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
		
		  
	   $d=$conn->query("SELECT * from my_marks,subjects where subjects.code=my_marks.code and my_marks.dept_id='$pid' and my_marks.level_id='$l'  and my_marks.sem='$sem' and my_marks.year_id='$ayear' GROUP BY my_marks.code ") or die(mysqli_error($conn));
	  
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
        
        <a href="print_to_pdf/print_pdf.php?dept=<?php echo $bu['dept_id'];; ?>&sem=<?php echo $sem; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $bu['level_id']; ?>&code=<?php echo $bu['id']; ?>&nnsjsj  " target="new"><button class="btn btn-success"   >Download PDF of <?php echo $bu['code']; ?> Level  <?php echo $bu['levels']; ?>  Ca Marks</button>
        
         <a href="print_ca.php?dept=<?php echo $bu['dept_id'];; ?>&sem=<?php echo $sem; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $bu['level_id']; ?>&code=<?php echo $bu['id']; ?>&nnsjsj " target="new"><button class="btn btn-primary"   >Print a Copy </button>
        
        
        
        
        </td>

       
           
      </tr>
        <?php } } ?>
      
    </tbody>
  </table>