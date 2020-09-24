<?php
include '../includes/dbc.php';

if(isset($_GET['cust'])){
	
	$who=$_GET['cust'];
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $ayear=$bu['year'];
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
}


	  $mm=$conn->query("SELECT * from courses where roll='".$_GET['cust']."' order by roll asc limit 1 ") or die(mysqli_error($conn));
	while ($bsm=$mm->fetch_assoc()){
		$mats=$bsm['matricule'];
	}
	  $ass=$conn->query("SELECT * from courses where matricule='".$mats."' order by roll desc limit 1 ") or die(mysqli_error($conn));
	while ($bs=$ass->fetch_assoc()){
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

              <tr><td>Student's Names</td><td><input type="text" name="name" required="required" value="<?php echo $bs['fname'];; ?>" /></td></tr>
               
              <tr><td>Program</td><td><input type="text" name="class" required="required" value="<?php echo $bs['departmet'];; ?>" /></td></tr>
               
               
                <tr><td>Matricule</td><td><input type="text" name="matric" value="<?php echo $bs['matricule']; ?>" required="required"/></td></tr>
               
              
               <tr><td>Academic Year</td><td><input type="text" name="ayear" readonly="readonly" value="<?php  echo $ayear;
	 
 ?>" /></td></tr>
               
                <tr><td>Date of Birth</td><td><input type="text" name="dob" value="<?php echo $bs['cxx1']; ?>" required="required"/></td></tr>
                
              <tr><td>Place of Birth</td><td><input type="text" name="pob" value="<?php echo $bs['cxx2']; ?>" required="required"/></td></tr>
              
               <tr><td>Sex</td><td><input type="text" name="sex" value="<?php echo $bs['sex']; ?>" required="required" /></td></tr>
                
         <tr><td>Level</td><td><input type="text" name="lev" value="<?php echo ($bs['levels']+100); ?>" required="required" /></td></tr>
  
  
             
            
          <input type="text" name="ids"  value="<?php
		 echo $id;		 ?>" required="required"  />


                        
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >SAVE</button></td></tr>
                  <input type="hidden" name="id"  value="<?php echo $l+1; ?>"  />
            </table>
    
    </form><br /><br />
   
        </a>
        </div>
          <?php 
if(isset($_POST['add'])){
	


	$_POST = array_map("ucwords", $_POST);
	

	
$usr_email = $data['usr_email'];
$user_name = $data['user_name'];
$level=$_POST['level'];

 $first_name=$_POST['username'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];

$fname=$_POST['name'];

$month=$_POST['month'];
$part=$_POST['part'];
$day=$_POST['day'];

$year=$_POST['year'];
$db1=$_POST['ayear'];
$dbirth=$_POST['month'];

$place=$_POST['place'];
$matric=$_POST['matric'];

$nation=$_POST['nation'];
$sex=$_POST['sex'];

$religion=$_POST['religion'];
$qualification=$_POST['qualification'];

$address=$_POST['address'];
$city=$_POST['city'];

$fee=$_POST['fees'];
$part=$_POST['part'];
$POB=$_POST['pob'];
$DOB=$_POST['dob'];
$accepted=$feeamt/2;
$guide=$_POST['guide'];
$reg=$_POST['reg'];
$bbm=$_POST['feeamt']-$_POST['part'];
$all=$part+$reg;




$cateory=$_POST['category'];

$levels=$_POST['lev'];


$contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];


$guardian1=$_POST['gaurdain1'];
$guardian2=$_POST['guardian2'];

$hschool=$_POST['hschool'];
$hgrade=$_POST['hgrade'];

$oschool=$_POST['oschool'];
$ograde=$_POST['ograde'];
$pass=$_POST['pass'];
$partd=$_POST['motive'];

$ids=$_POST['ids'];
$yid=$_POST['yid'];
$ass=$_POST['ass'];
$class1=$_POST['class'];
$matriculex=$_POST['matriculex'];

$matricule=$_POST['matricule'];
$cc=$_POST['department'];
$month=date('m');
$year=date('Y');

$c=$conn->query("SELECT * FROM courses WHERE 
matricule='$matric' and db1='$db1' ") or die(mysqli_error($conn)) ;
	if(mysqli_num_rows($c)>0){
		echo "<script>alert('ERROR. $matric is already rgistered in the system this year')</script>";
	}
	else {


	 $ats=$conn->query("insert into  courses  set  
matricule='$matric',fname='$fname',
levels='$levels',departmet='$class1',sex='$sex',db1='$db1',c110='$ids',c101='$year',c102='$year2',cxx7='$city',cxx6='$guide',cxx1='$POB',cxx2='$DOB' ") or die(mysqli_error($conn)) ;






echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	
}
	
}
	}
	}
?>