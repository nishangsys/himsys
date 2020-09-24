<?php  

$prog=$_POST['dept'];
 	$level=$_POST['level'];
	
	$semid=$_POST['sem'];
	
	   $_GET['ayear'];
				 	  $select=$conn->query("SELECT * from special WHERE id='".$prog."'   ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
		$dept_name=$rows['prog_name'];
		
		
	}
	 	  $select=$conn->query("SELECT * from levels WHERE id='".$level."' ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
		
		$levels=$rows['levels'];
		
		
	}
	 	  $select=$conn->query("SELECT * from semesters WHERE id='".$semid."'   ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
		
		$semester=$rows['s_name'];
		
	}
?>
	<a href="?importing_mysubjects&dept=<?php echo $prog; ?>&level=<?php echo $level; ?>&sem=<?php echo $semid; ?>">
 <div class="col-sm-9">
          <div class="well">
           Importing <?php echo $dept_name;  ?> Level <?php echo $levels; ?> <?php echo $semester;  ?> Subjects
          </div>
        </div>
  </a>