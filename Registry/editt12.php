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



	  $select=$conn->query("SELECT * from courses  where roll='".$who."' ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
	
		
	 /////get end year	

	
$date = $rows['db1'];
$date = explode('/', $date);
$start=$date[0];
$end  = $date[1];


	
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

              <tr><td>Student's Names</td><td><input type="text" name="name" required="required" value="<?php echo $rows['fname'];; ?>" /></td></tr>
               
              <tr><td>Program</td><td><input type="text" name="class" required="required" value="<?php echo $rows['departmet'];; ?>" /></td></tr>
               
               
                <tr><td>Matricule</td><td><input type="text" name="matric" value="<?php echo $rows['matricule']; ?>"  required="required"  /></td></tr>
                 
              
               
                <tr><td>Date of Birth</td><td><input type="text" name="dob" value="<?php echo $rows['cxx2']; ?>" required="required"/></td></tr>
                
              <tr><td>Place of Birth</td><td><input type="text" name="pob" value="<?php echo $rows['cxx1']; ?>" required="required"/></td></tr>
              
              
               <tr><td>Sex</td><td><input type="text" name="sex" value="<?php echo $rows['sex']; ?>" required="required" /></td></tr>
                
               <tr><td>Level</td><td><input type="text" name="lev" value="<?php echo $rows['levels']; ?>" required="required" /></td></tr>
                
  
  
               <tr><td>Start Year</td><td>  <select class="form-control" id="sel1" name="start" onBlur="doCalc(this.form)" required>
        <option value="<?php echo $start; ?>">
   <?php echo $start; ?>   </option>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=2008;$day<=2025;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select></td></tr>
                
               <tr><td>End Year</td><td> <select class="form-control" id="sel1" name="end" onBlur="doCalc(this.form)" required>
        <option value="<?php echo $end; ?>">
     <?php echo $end; ?> </option>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=2008;$day<=2025;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select></td></tr>
                
             
           
<input type="hidden" name="yid"  value="<?php echo $_GET['cust']; ?>"  />
                        
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >UPDATE</button></td></tr>
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
$db1=$ayear;
$dbirth=$_POST['month'];

$place=$_POST['place'];
$matric=$_POST['matric'];

$nation=$_POST['nation'];
$sex=$_POST['sex'];

$religion=$_POST['religion'];
$qualification=$_POST['qualification'];

$address=$_POST['address'];
$city=$_POST['city'];

$DEPT=$_POST['class'];
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

$start=$_POST['start'];
$end=$_POST['end'];
$shape=$start."/".$end;
$check= $conn->query("SELECT * FROM  courses  WHERE  
matricule='$matric'  and  roll!='".$_GET['cust']."' ") or die(mysqli_error($conn)) ;

	

	 $ats=$conn->query("update  courses  set  
matricule='$matric',fname='$fname',levels='$levels',
sex='$sex',db1='$shape',cxx1='$POB',cxx2='$DOB',c101='$start',c102='$end',departmet='$DEPT' WHERE roll='".$_GET['cust']."'") or die(mysqli_error($conn)) ;
$updare_two=$conn->query("update  courses  set  
cxx1='$POB',cxx2='$DOB',sex='$sex'  WHERE matricule='$matric' ") or die(mysqli_error($conn)) ;





echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	
}
	
}
	}

?>