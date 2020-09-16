<?php
include '../includes/dbc.php';


	$_POST = array_map("ucwords", $_POST);
	

	
$name=$_POST['name'];
$level_id=$_POST['level_id'];
 $matric=$_POST['matric'];
$prog_id=$_POST['prog'];
$year_id=$_POST['year_id'];
$level_id=$_POST['level_id'];
$sector_id=$_POST['sector'];
$c=$conn->query("SELECT * FROM students WHERE 
matricule='$matric' and year_id='$year_id' ") or die(mysqli_error($conn)) ;
	if($c->num_rows>0){
		echo "<script>alert('ERROR. $matric is already rgistered in the system this year')</script>";
	}
	else {


	 $ats=$conn->query("insert into  students  set  
matricule='$matric',fname='$name',
level_id='$level_id',dept_id='$prog_id',sex='$sex',year_id='$year_id',sector='$sector_id' ") or die(mysqli_error($conn)) ;






echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Fees/first.php?ffirst">';	
	
}
	

	

?>