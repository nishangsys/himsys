<?php
include '../includes/dbc.php';
@session_start();
$computer=gethostbyaddr($_SERVER['REMOTE_ADDR']);

$localIP = getHostByName(php_uname('n'));

;



if(isset($_GET['cust'])){
	
	$who=$_GET['cust'];
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $year_id=$bu['year'];
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
}

  $query =$con->query("SELECT * FROM users WHERE id=".$_SESSION['id']) or die(mysqli_error($con));

 while($userRow=$query->fetch_array()){
 
 $whom=$userRow['full_name'];

 
 }
	 
	  $ass=$conn->query("SELECT * from students where roll='".$_GET['cust']."'  ") or die(mysqli_error($conn));
	while ($bs=$ass->fetch_assoc()){
		$lev=$bs['levels'];
		
		
		
		
		$d=$conn->query("SELECT * FROM classes12 where class='".$bs['departmet']."' ") or die(mysqli_error($conn));
while($bu=$d->fetch_assoc()){
	 $fees=$bu['fees'];
	 //$regs=$bu[''];
	 $id=$bu['ids'];
	 $bank=$bu['extra'];
	 $regs=$bu['mattsy'];
	 $hl=$bu['conn'];
	 $ll=$bu['depf'];
	
}			 
	
	
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
               
              <tr><td>Program</td><td><input type="text" name="class" readonly="readonly" value="<?php echo $PRO=$bs['departmet'];; ?>" /></td></tr>
               
               
                <tr><td>Matricule</td><td><input type="text" name="matric" value="<?php echo $bs['matricule']; ?>" readonly="readonly"/></td></tr>
               
              
               <tr><td>Academic Year</td><td><input type="text" name="ayear" readonly="readonly" value="<?php  echo $bs['ayear'];
	 
 ?>" /></td></tr>
 <tr><td>Semester</td><td><input type="text" name="sem" value="<?php echo $term; ?>"   required="required"/></td></tr>
 <tr><td>Course Code</td><td><input type="text" name="course" value="<?php echo $course; ?>"  required="required"/></td></tr>
               
                <tr><td>Ca Mark</td><td><input type="text" name="ca" value="<?php echo $ca; ?>"   required="required" style="border:2px solid#f00"/></td></tr>
                
              <tr><td>Exams Mark</td><td><input type="text" name="nca" required="required"/></td></tr>
              
         <tr><td>Editing Done By</td><td><input type="text" name="user" value="<?php echo $whom; ?>" r readonly="readonly" /></td></tr>
  
  
             
            
          <input type="hidden" name="ids"  value="<?php
		 echo $who;		 ?>" required="required"  />


                        
                  <tr><td></td><td><button type="submit" name="add" class="btn btn-primary btn-lg"   >SAVE Update</button></td></tr>
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
$cour=$_POST['course'];
$month=date('G:i:s h:i:s');
$year=date('Y');

$res=$conn->query("INSERT resit set c101='$ca',c102='$nca',sex='$sem',year_id='$ayear' , fname='$cour',matricule='$matric',departmet='$PRO',levels='$lev'") or die(mysqli_error($conn)) ;
	 $ats=$con->query("insert into track set sname='$nam',  
smat='$matric',year_id='$year',fca='$ca',cca='$nca',edited='$user',ip='$localIP',comp='$computer',time='$month',reason='Added Course',course='$cour'") or die(mysqli_error($con)) ;




echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	
}
	
}
	}
	
?>