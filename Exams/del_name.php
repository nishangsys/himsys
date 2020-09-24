<?php
include '../includes/dbc.php';
@session_start();
$computer=gethostbyaddr($_SERVER['REMOTE_ADDR']);

$localIP = getHostByName(php_uname('n'));

;



if(isset($_GET['cust'])){
	
	$who=$_GET['cust'];


  $query =$con->query("SELECT * FROM users WHERE id=".$_SESSION['id']) or die(mysqli_error($con));

 while($userRow=$query->fetch_array()){
 
 $whom=$userRow['full_name'];

 
 }
	 
	  $ass=$conn->query("
	  SELECT * FROM levels,special,years,students where students.id='".$_GET['cust']."' AND students.dept_id=special.id AND levels.id=students.level_id AND students.year_id=years.id 
	  ") or die(mysqli_error($conn));
	while ($bs=$ass->fetch_assoc()){
		$na=$bs['fname'];
		$ay=$bs['ayear'];
		
		
		

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
       <br />
   <div class="row">
    <div class="col-sm-10" style="margin-left:30px">


 <form method="post" enctype="multipart/form-data" class="form-horizontal" action="" role="form" >
    
     <table class="table table-bordered">

              <tr><td>Student's Names</td><td><input type="text" name="name"  value="<?php echo $bs['fname'];; ?>" readonly="readonly" /></td></tr>
               
              <tr><td>Program</td><td><input type="text" name="class" readonly="readonly" value="<?php echo $bs['prog_name'];; ?>" /></td></tr>
               
               
                <tr><td>Matricule</td><td><input type="text" name="matric" value="<?php echo $bs['matricule']; ?>" readonly="readonly"/></td></tr>
               
              
               <tr><td>Academic Year</td><td><input type="text" name="ayear" readonly="readonly" value="<?php  echo $bs['year_name'];
	 
 ?>" /></td></tr>
 
              
         <tr><td>Deleting Done By</td><td><input type="text" name="user" value="<?php echo $whom; ?>" r readonly="readonly" /></td></tr>
  
  
             
            
          <input type="hidden" name="ids"  value="<?php
		 echo $who;		 ?>" required="required"  />


                        
                  <tr><td></td><td><button type="submit" name="add" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure you want to delete <?php echo $na; ?> from  <?php echo $ay; ?> batch inour system')"    >Delete Name</button></td></tr>
                  <input type="hidden" name="id"  value="<?php echo $l+1; ?>"  />
            </table>
    
    </form><br /><br />
   
        </a>
        </div>
          <?php 
if(isset($_POST['add'])){
	


	$_POST = array_map("ucwords", $_POST);
	

$nam=$_POST['name'];
$class=$_POST['class'];
$year=$_POST['ayear'];
$matric=$_POST['matric'];
$ca=$_POST['ca'];
$nca=$_POST['nca'];
$user=$_POST['user'];
$sem=$_POST['sem'];
$month=date('G:i:s h:i:s');
$year=date('Y');

	 $ats=$con->query("insert into track set sname='$nam',  
smat='$matric',year_id='$year',fca='$ca',cca='$nca',edited='$user',ip='$localIP',comp='$computer',time='$month',reason='Deleted mark',course='$course'") or die(mysqli_error($con)) ;

$res=$conn->query("DELETE FROM students where id='$who'") or die(mysqli_error($conn)) ;



echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	
}
	
}
	}
	
?>