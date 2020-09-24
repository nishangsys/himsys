 <div class="row">
  <?php
 	$prog=$_GET['dept'];
 	$level=$_GET['level'];
	
	$semid=$_GET['sem'];
	
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
 
 
        <div class="col-sm-12">
        
        <div class="alert alert-info">
  <strong><?php echo $dept_name;  ?> Level <?php echo $levels; ?> <?php echo $semester; ?>
  Courses Importation</strong> 
</div>



 <iframe src="subjects/index.php?dept=<?php echo mysqli_real_escape_string($con,$prog); ?>&term=<?php echo $semid; ?>&level=<?php echo $level; ?> " allowFullScreen style="width: 97%;
			float:left;
			background: #FFF;
            border:none;
            height:190px;
            overflow:hidden;
			border-radius: 5px;
		
 "></iframe>
          </div>
          </div>
          
           <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Course Code</th>
        <th>Course Title</th>
        <th>Status</th>
        <th>CV</th>
      </tr>
    </thead>
    <tbody>
    <?PHP
		  $select=$conn->query("SELECT * from subjects WHERE sem='".$semid."' AND prog_id='".$prog."' AND level_id='".$level."' ORDER BY id DESC  ") or die(mysqli_error($conn));
		  $i=1;
	while ($rows=$select->fetch_assoc()){
		
	
	?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $rows['code']; ?></td>
        <td><?php echo $rows['title']; ?></td>
        <td><?php echo $rows['status']; ?></td>
        <td><?php echo $rows['cv']; ?></td>
        <td>
        <a href="?importing_mysubjects&dept=<?php echo $_GET['dept']; ?>&level=<?php echo $_GET['level']; ?>&sem=<?php echo $_GET['sem']; ?>&del&id=<?php echo $rows['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you wish to delete <?php echo $rows['title']; ?> for <?php echo $dept_name; ?>')">Delete</a>
        
          <a href="?edit_course&id=<?php echo $rows['id']; ?>" class="btn btn-primary btn-xs" >Edit </a>
        
        </td>
      </tr>
      <tr>
       <?php } ?>
    </tbody>
  </table>
  
  
<?PHP
  if(isset($_GET['del'])){
	   $select=$conn->query("DELETE from subjects WHERE id='".$_GET['id']."' ") or die(mysqli_error($conn));
	   echo "<script>alert('Record Deleted  Successfully!'); </script>";
	   echo '<meta http-equiv="Refresh" content="0; url=?importing_mysubjects&dept='.$_GET['dept'].'&level='.$_GET['level'].'&sem='.$_GET['sem'].'">';	

  }
  
  ?>
  
  
  