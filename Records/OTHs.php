<?php
include '../includes/dbc.php';


	$_POST = array_map("ucwords", $_POST);
	

	
$name= $data['name'];
$level_id=$_POST['level_id'];
 $matric=$_POST['matric'];
$prog_id=$_POST['prog_id'];
$year_id=$_POST['year_id'];
$level_id=$_POST['level_id'];
$sector_id=$_POST['sector'];
$c=$conn->query("SELECT * FROM students WHERE 
matricule='$matric' and year_id='$ayear' ") or die(mysqli_error($conn)) ;
	if($c->num_rows>0){
		echo "<script>alert('ERROR. $matric is already rgistered in the system this year')</script>";
	}
	else {


	 $ats=$conn->query("insert into  students  set  
matricule='$matric',fname='$fname',
levels='$levels',departmet='$class1',sex='$sex',year_id='$ayear',c110='$ids',c101='$year',c102='$year2',cxx7='$dept',nationality='Cameroonian',cxx1='$POB',cxx2='$DOB',cxx6='$sector' ") or die(mysqli_error($conn)) ;






echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=../Fees/first.php?ffirst">';	
	
}
	

	

?>