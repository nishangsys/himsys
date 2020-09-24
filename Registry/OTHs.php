<?php
include '../includes/dbc.php';

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
$start=$_POST['start'];
$end=$_POST['end'];
$db1=$start."/".$end;

$ass=$con->query("SELECT * from special where certi='".$class1."'  ") or die(mysqli_error($con));
	while ($bs=$ass->fetch_assoc()){
		 $sch=$bs['sch'];
		 $dept=$bs['school'];
		   
	}
$c=$conn->query("SELECT * FROM courses WHERE 
matricule='$matric' and db1='$db1' ") or die(mysqli_error($conn)) ;
	if(mysqli_num_rows($c)>0){
		echo "<script>alert('ERROR. $matric is already rgistered in the system this year')</script>";echo '<meta http-equiv="Refresh" content="0; url=index.php?others&link=others">';	
	}
	else {


	
	 $ats=$conn->query("insert into  courses  set  
matricule='$matric',fname='$fname',
levels='$levels',departmet='$class1',sex='$sex',db1='$db1',c110='$ids',c101='$start',c102='$end',cxx7='$dept',cxx4='Cameroonian',cxx1='$POB',cxx2='$DOB',cxx6='$sch' ") or die(mysqli_error($conn)) ;






echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Fees/first.php">';	
	
}
	
}

?>