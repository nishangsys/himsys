
  
  <div class="row">
        <div class="col-sm-6">
          <div class="well">
		<h3>My Unsigned Semester students
        
       
        
        </h3>
        <?php $d=$con->query("SELECT * FROM subject where subject.department='$dept' and subject.year1='$level' and subject.year2='$semester'  GROUP BY subject.ayear   ") or die(mysqli_error($con));
$i=1;
?>

<div class="panel-body">
                            <div class="table-responsive">
                                
                          
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Subject</th>
        <th>Code</th>
        
      </tr>
    </thead>
    <tbody>
    
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="Aquamarine">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><a href="?form_b&sign=<?php echo $bu['subject']; ?>&matric=<?php echo $user; ?>&year_id=<?php echo $ayear; ?>&name=<?php echo $bu['ayear']; ?>" style="font-weight:bold; color:#033"><?php echo $bu['ayear']; ?></a></td>
                                            <td><a href="?form_b&sign=<?php echo $bu['subject']; ?>&matric=<?php echo $user; ?>&year_id=<?php echo $ayear; ?>&name=<?php echo $bu['ayear']; ?>" style="font-weight:bold; color:#033"><button class="btn btn-primary btn-block"><?php echo $bu['subject']; ?></button></a></td>
                   
      </tr>
        <?php } ?>
      
    </tbody>
  </table>
                            </div>
                      </div>



<?php if(isset($_GET['sign'])){
	 $code=$_GET['sign'];
	$suject=$_GET['name'];
	$syaer=$_GET['ayear'];
	 $matric=$_GET['matric'];
	 
	 $del=$con->query("DELETE FROM my_students WHERE subj='$suject' AND code='$code' AND year_id='$syaer' AND matric='$matric'") or die(mysqli_error($con));
	 
	 
$f=$con->query("INSERT INTO my_students set subj='$suject',code='$code',year_id='$syaer',matric='$matric'") or die(mysqli_error($con));
}
; ?>














          </div>
        </div>
        <div class="col-sm-6">
          <div class="well">
               <?php $d=$con->query("SELECT * FROM my_students where matric='$user' and status='0' ") or die(mysqli_error($con));
$i=1;
?>   
          <h3>My  students | <a href="?form_b&ok=<?php echo $ayear; ?>&year_id=<?php echo $ayear; ?>&semeser=<?php echo $semester; ?>&matric=<?php echo $user; ?>"><button class="btn btn-danger" onclick="return confirm('Are you sure about that.Once you have signd you cannot change again')">Sign Up all the students Below</button></a>| </h3>
     
            <div class="table-responsive">
                                
                          
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Subject</th>
        <th>Code</th>
        
      </tr>
    </thead>
    <tbody>
    
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="orange">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><a href="?form_b&delete=<?php echo $bu['id']; ?>&matric=<?php echo $user; ?>&year_id=<?php echo $ayear; ?>&name=<?php echo $bu['ayear']; ?>" style="font-weight:bold; color:#033"><?php echo $bu['subj']; ?></a></td>
                                            <td><a href="?form_b&delete=<?php echo $bu['id']; ?>&matric=<?php echo $user; ?>&year_id=<?php echo $ayear; ?>&name=<?php echo $bu['ayear']; ?>" style="font-weight:bold; color:#033"><?php echo $bu['code']; ?></a></td>
                   
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>
                            </div>
          <?php 
		  
		  if(isset($_GET['delete'])){
	 $code=$_GET['delete'];
	$suject=$_GET['name'];
	$syaer=$_GET['ayear'];
	 $matric=$_GET['matric'];
	 
	 $del=$con->query("DELETE FROM my_students WHERE id='$code' ") or die(mysqli_error($con));
	 
		  }
		  
		  
		  if(isset($_GET['ok'])){
	$semester=$_GET['semester'];
	$syaer=$_GET['ok'];
	 $matric=$_GET['matric'];
	 
	 $fj=$con->query("UPDATE my_students set status='2' where matric='$matric' and year_id='$syaer'   ") or die(mysqli_error($con));
	 echo "<script>alert('Form successfully created')</script>";
	 echo '<meta http-equiv="Refresh" content="0; url=index.php?form_b">';
	 
		  }
; ?>
            </div>
          </div>
     