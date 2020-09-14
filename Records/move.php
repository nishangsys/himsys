<?php
include '../includes/dbc.php';

if(isset($_GET['cust'])){
	
	$who=$_GET['cust'];
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $year_id=$bu['year'];
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
}



	  $select=$conn->query("SELECT * from students  where roll='".$who."' ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
	
		
	  $ass=$con->query("SELECT * from gen_info where matric='".$rows['mats']."'  ") or die(mysqli_error($con));
	while ($bs=$ass->fetch_assoc()){
		 $pob=$bs['pob'];
		      $dob=$bs['dob'];
			  $nation=$bs['nationality'];
			  $tels=$bs['tel'];
			  $sex=$bs['gender'];
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

              <tr><td>Student's Names</td><td><input type="text" name="name" required="required" value="<?php echo $rows['fname'];; ?>" /></td></tr>
               
              <tr><td>Program</td><td><input type="text" name="class" required="required" value="<?php echo $rows['departmet'];; ?>" /></td></tr>
               
               
                <tr><td>Matricule</td><td><input type="text" name="matric" value="<?php echo $rows['matricule']; ?>" readonly="readonly" /></td></tr>
                
                  
                <tr><td>School Year</td><td><input type="text" name="ayear" value="<?php echo $ayear; ?>" readonly="readonly" /></td></tr>
                 
              
               
                <tr><td>Date of Birth</td><td><input type="text" name="dob" value="<?php echo $rows['cxx2']; ?>"  readonly="readonly"/></td></tr>
                
              <tr><td>Place of Birth</td><td><input type="text" name="pob" value="<?php echo $rows['cxx1']; ?>" readonly="readonly"/></td></tr>
              
              
               <tr><td>Sex</td><td><input type="text" name="sex" value="<?php echo $rows['sex']; ?>" readonly="readonly" /></td></tr>
                
               <tr><td>Level</td><td><input type="text" name="lev" value="<?php echo $rows['levels']+100; ?>" required="required" /></td></tr>
                
  
  
               <tr><td>Start Year</td><td>  <select class="form-control" id="sel1" name="start" onBlur="doCalc(this.form)" required>
        <option value="<?php echo $year; ?>">
   <?php echo $year; ?>   </option>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=2008;$day<=2020;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select></td></tr>
                
               <tr><td>End Year</td><td> <select class="form-control" id="sel1" name="end" onBlur="doCalc(this.form)" required>
        <option value="<?php echo $year2; ?>">
     <?php echo $year2; ?> </option>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=2008;$day<=2020;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select></td></tr>
                
             
           
<input type="hidden" name="yid"  value="<?php echo $_GET['cust']; ?>"  />
                        
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >MOVE TO NEXT LEVEL</button></td></tr>
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
$year_id=$ayear;
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

$matricule=$_POST['matric'];
$cc=$_POST['department'];
$month=date('m');
$year=date('Y');

$start=$_POST['start'];
$end=$_POST['end'];
$shape=$start."/".$end;


$ats=$conn->query("SELECT * FROM students where
matricule='$matric' AND year_id='$ayear'  ") or die(mysqli_error($conn)) ;
$count=$ats->num_rows;
	if($count>0){
		echo "<script>alert('ERROR.$fname with matricule $matric already exists in $shape. '); </script>";

	}
	else {

	 $ats=$conn->query("INSERT INTO students  set  
matricule='$matric',fname='$fname',levels='$levels',
sex='$sex',year_id='$shape',cxx1='$POB',departmet='$class1',cxx2='$DOB',c101='$start',c102='$end' ") or die(mysqli_error($conn)) ;




/*

 $daily=$conn->query("INSERT INTO daily set cust_id='$matric',room='$room',paidto='$active',day='$day',staffname='$fname',discount='$reg',amt='$part',
			rec='$all',date='$dates',month='$month',year='$ayear',reason='fees',qty='1',area='1',price='$paid',total='$part',owed='$bbm',
			purpose='fees'") or die(mysqli_error($conn));

*/
echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
	
}
	
}
	}
	
}

?>