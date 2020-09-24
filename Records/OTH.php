<?php
include '../includes/dbc.php';

if(isset($_POST['add'])){
	


	$_POST = array_map("ucwords", $_POST);
	

$level=$_POST['level'];

 $name=$_POST['name'];
$matric=$_POST['matric'];
$ayear=$_POST['ayear'];
$dob=$_POST['dob'];
$pob=$_POST['pob'];
$sex=$_POST['sex'];
$dept_id=$_POST['dept_id'];


$c=$conn->query("SELECT * FROM students WHERE 
matricule='$matric' and year_id='$ayear' ") or die(mysqli_error($conn)) ;
	if(mysqli_num_rows($c)>0){
		echo "<script>alert('ERROR. $matric is already rgistered in the system this year')</script>";
		echo '<meta http-equiv="Refresh" content="0; url=../Records/index.php?others&link=%20Add%20Missing%20Names">';	
	}
	else {


	 $ats=$conn->query("insert into  students  set  
matricule='$matric',fname='$name',
level_id='$level',dept_id='$dept_id',sex='$sex',year_id='$ayear',pob='$pob',dob='$dob' ") or die(mysqli_error($conn)) ;






echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Records/index.php?edits&link=Edit%20Students">';	
	
}
	
}

?>