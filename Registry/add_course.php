
 
  <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="../assets/css/layout2.css" rel="stylesheet" />
       <link href="../assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <style>
input,select{
	width:90%;
	padding:5px 5px;
}
</style>
       <br />
   <div class="row">
    <div class="col-sm-10" style="margin-left:30px">


 <form method="post" enctype="multipart/form-data" class="form-horizontal" action="" role="form" >
    
     <table class="table table-bordered">

              <tr><td>Courses Title</td><td><input type="text" name="title" required="required" autocomplete="off" value="<?php echo $rows['title'];; ?>" /></td></tr>
               
              <tr><td>Course Code</td><td><input type="text" name="code" required="required" autocomplete="off" value="<?php echo $rows['subject'];; ?>"   /></td></tr>
               
               
                <tr><td>Credit Value</td><td><input type="number" name="credit" autocomplete="off" value="<?php echo $rows['credit']; ?>" required/></td></tr>
                
                
                <tr><td>Status</td><td><input type="text" name="status" autocomplete="off" value="<?php echo $rows['status']; ?>" required/></td></tr>
                
                  
          
                   <tr><td>Semester</td><td>
                   <select required class="form-control" id="sel1" name="sem" >
                   <option></option>
              
        <?php
							
								$result = $conn->query("SELECT * FROM semesters WHERE status='1' order by id") or die(mysqli_error($conn));
				while($bu=$result->fetch_assoc()){
								?>
                       
           
        <option value="<?php echo $bu['s_num']; ?>"  ><?php echo $bu['s_name']; ?> </option>
    <?php } ?> 
        
      </select></td></tr>
                
            
             <tr><td>Levels</td><td> <select required class="form-control" id="sel1" name="level" >
              <option value=""  ></option>
        <?php
							
								$result = $conn->query("SELECT * FROM levels order by levels") or die(mysqli_error($conn));
				while($bu=$result->fetch_assoc()){
								?>
                       
           
        <option value="<?php echo $bu['id']; ?>"  ><?php echo $bu['levels']; ?> </option>
    <?php } ?> 
        
      </select></td></tr>
  
  
  <tr><td>Department </td><td> <select required class="form-control" id="sel1" name="dept" >
              <option value="<?php echo $rows['department']; ?>"  ><?php echo $rows['department']; ?> </option>
        <?php
							
								$result = $con->query("SELECT * FROM special order by prog_name ") or die(mysqli_error($con));
				while($bu=$result->fetch_assoc()){
								?>
                       
           
        <option value="<?php echo $bu['id']; ?>"  ><?php echo $bu['prog_name']; ?> </option>
    <?php } ?> 
        
      </select></td></tr>
  
                        
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >SAVE</button></td></tr>
                 
            </table>
    
    </form><br /><br />
    
   
        </a>
        </div>
          <?php 
if(isset($_POST['add'])){
	


	$_POST = array_map("ucwords", $_POST);
	

 $title=$_POST['title'];
$cv=$_POST['credit'];
$code=$_POST['code'];
$status=$_POST['status'];

$sem=$_POST['sem'];

$level=$_POST['level'];
$dept=$_POST['dept'];



	/* $ats=$conn->query("insert into  subject  set  
title='$title',credit='$cv',status='$status'sem='$sem'mlevel='$level,department='$dept' where roll='".$_GET['id']."'") or die(mysqli_error($conn)) ;
*/

 $ats=$conn->query("SELECT * FROM subjects  WHERE  
sem='$sem' AND level_id='$level' AND prog_id='$dept' and code='$code' ") or die(mysqli_error($conn)) ;
if($ats->num_rows>0){
	
echo "<script>alert('ERROR.Course Already Exists!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=?add_course">';
}
else {

 $ats=$conn->query("INSERT INTO subjects  set  
title='$title',cv='$cv',status='$status',sem='$sem',level_id='$level',prog_id='$dept',code='$code'  ") or die(mysqli_error($conn)) ;

echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=?add_course">';	
	
}
}

	
?>


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
		  $select=$conn->query("SELECT * from subjects order by id DESC LIMIT 10") or die(mysqli_error($conn));
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
        <a href="?add_course&del&id=<?php echo $rows['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you wish to delete <?php echo $rows['title']; ?> for <?php echo $dept_name; ?>')">Delete</a>
        
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
	   echo '<meta http-equiv="Refresh" content="0; url=?add_course">';	

  }
  
  ?>