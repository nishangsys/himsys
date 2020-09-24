<?php

if (isset($_POST['import'])) 
{
include('../../includes/dbc.php');
          

//Import uploaded file to Database
$handle = fopen($_FILES['filename']['tmp_name'], "r");

while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	
	                    $exams=round( $data[1]);
	                    $matricule= mysql_real_escape_string( $data[0]);
						$ayear=mysql_real_escape_string(  $data[2]);         
						$sem=$_GET['sem'];
						$ayear=$_GET['ayear'];
						$code=$_GET['code'];
						//$level=$_GET['level'];
						$status=$_GET['status'];
						 $cv=$_GET['cv'];
						//$prog=$_GET['dept'];
						
		$total=$exams;
		
						/////Get student's deaprtment from matricule Given
						$check =$conn->query( "SELECT * FROM courses   WHERE matricule='$data[0]' ") or die(mysqli_error($conn));
						while($rows=$check->fetch_assoc()){
						echo	$prog=$rows['departmet'];
							echo $level=$rows['levels'];
						}
						
		 $check_ca= $dbcon->query("SELECT * FROM   my_marks   WHERE matric='$matricule' and code='$code' and sem='$sem'   and year_id='$ayear' and ca!=''  ") or die(mysqli_error($dbcon));
		
		  $ca_exist=$check_ca->num_rows;
		  
		  /////////////////
		    $check= $dbcon->query("SELECT * FROM   my_marks   WHERE matric='$matricule' and code='$code' and sem='$sem'  and year_id='$ayear' and exam=''  ") or die(mysqli_error($dbcon));
				   if(empty($prog)){
					   echo "<script>alert('Sorry   Chose a Program to Continue')</script>";


				   }
				   else if($ca_exist>0){
					   
$do=$dbcon->query("UPDATE    my_marks SET   exam='$exams' WHERE code='$code' AND matric='$matricule' AND sem='$sem' AND year_id='$ayear'    ") or die(mysqli_error($dbcon));
				   }
				   
				   else if($total>100){
				   echo "<script>alert('Sorry  ".$code." total marks is more than 100')</script>";
				   }
				   
				   else {
		
		
$do=$dbcon->query("INSERT INTO   my_marks SET code='$code', matric='$matricule',credit='$cv',sem='$sem',year_id='$ayear', level_id='$level',  exam='$exams',dept_id='$prog' ") or die(mysqli_error($dbcon));
     //$res = mysqli_query($con,$qry);

                }
				
		  
		  
		  
		  
		  
		  ////////////////	 
	
	}

fclose($handle);

//print "Import done";
echo "<script type='text/javascript'>alert('Successfully Imported a CSV File for User!');</script>";
	echo '<meta http-equiv="Refresh" content="1; url=../index.php?uploading_exams&did='.$_GET['did'].'&id='.$_GET['id'].'&ayear='.$_GET['ayear'].'&level='.$_GET['level_id'].'&sch_id='.$_GET['sch_id'].'">';
//view upload form
}
?>