<?php
include '../includes/dbc.php';
$years=date('y');
if(isset($_GET['cust'])){
	
	$who=$_GET['cust'];
	 //////////select academic year//////////////
$d=$con->query("SELECT * FROM years where status='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $ayear_name=$bu['year_name'];
	 $ayear=$bu['id'];
	
}

$CC=$ayear_name;
$ssyear=substr($CC,2,2);


	
	?>
 
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
		<?php
		 $select=$conn->query("SELECT * from levels,special,students  where students.id='".$_GET['cust']."' 
	  AND special.id=students.dept_id AND levels.id=students.level_id ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
	$levl_id=$rows['level_id'];
	
		?>
       <br />
   <div class="row">
    <div class="col-sm-10" style="margin-left:30px">
    
          <div class="well">
 <form class="form-horizontal" action="" method="post" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Department:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="dept" required>
              
    <option value="<?php echo $rows['dept_id']; ?>"><?php echo $rows['prog_name']; ?></option>
   
  </select>
      </div>
    </div>
      
      
	
	
      <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Current Levels:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="clevel" required>
	     <?php
	   $d=$con->query("SELECT * FROM levels,students where students.id='".$_GET['cust']."'
          AND students.level_id=levels.id 	   ") or die(mysqli_error($con));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $cl=$df['level_id']; ?>"><?php echo $df['levels']; ?></option>
    <?php } ?>
     
  </select>
      </div>
    </div> 



	
      <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">New Level:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="level" required>
		<option></option>
	     <?php
	   $d=$con->query("SELECT * FROM levels WHERE levels.id!='".$rows['level_id']."' ") or die(mysqli_error($con));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $cl=$df['id']; ?>"><?php echo $df['levels']; ?></option>
    <?php } ?>
     
  </select>
      </div>
    </div>  	
	
    <input type="hidden" name="matric"  value="<?php echo $rows['matricule']; ?>"  />
	
	
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="ok">Save Level Updates</button>
      </div>
    </div>
    </form>
    
    </div>
    </div>
    </div>
    <?PHP } ?>
   
        </a>
        </div>
          <?php 
if(isset($_POST['ok'])){
	


	$_POST = array_map("ucwords", $_POST);
	

$yid=$_POST['yid'];
$class=$_POST['class'];
$fees=$_POST['fees'];
$oldd=$_POST['dept'];
$matric=$_POST['matric'];
$level=$_POST['level'];
$clevel=$_POST['clevel'];
$year_id=$_POST['year_id'];
$lasts=$_POST['last'];
$sector=$_POST['sector'];
$month=date('m');
$year=date('Y');

$ats=$conn->query("SELECT * FROM students where
matricule='$matric'  and level_id='$level' ") or die(mysqli_error($conn)) ;
$count=$ats->num_rows;
	if($count>0){
		echo "<script>alert('ERROR. $newmat already exists. Change it'); </script>";

	}
	else {

	$ats=$conn->query("INSERT INTO  students_changelevel  set new_level='$level', year_id='$year_id',
matric='$matric',old_level='$clevel',old_mat='$matric' ") or die(mysqli_error($conn)) ;
	
	 /*$ats=$conn->query("update  fee_paymts  set program_id='$newd',level_id='$level_id', yearid='$year_id',
matric='$newmat',expected_amount='$fees'  WHERE student_id='".$_GET['cust']."'") or die(mysqli_error($conn)) ;
*/
	 $atsmm=$conn->query("update  students  set level_id='$level'   WHERE id='".$_GET['cust']."'") or die(mysqli_error($conn)) ;

	




echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	
}
	
}
	
	
}
?>