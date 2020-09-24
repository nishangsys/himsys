<?php

	session_start();
	//connection
	require_once ('../../includes/dbc.php');

	if(isset($_POST['import'])){
		
		                 $sem=$_GET['sem'];
						$ayear=$_GET['ayear'];
						$code=$_GET['code'];
						//$level=$_GET['level'];
						$status=$_GET['status'];
						 $cv=$_GET['cv'];
						//$dept=$_GET['dept'];EXIT;
						
		//check if input file is empty
		if(!empty($_FILES['file']['name'])){
			$filename = $_FILES['file']['tmp_name'];
			$fileinfo = pathinfo($_FILES['file']['name']);

			//check file extension
			if(strtolower($fileinfo['extension']) == 'csv'){
				//check if file contains data
				if($_FILES['file']['size'] > 0){

					$file = fopen($filename, 'r');

					while(($impData = fgetcsv($file, 1000, ',')) !== FALSE){
						
						
						
						if(empty($sem)){
							echo "<script>alert('Sorry please chose a semester')</script>";
						}
						 else if(empty($ayear)){
					       echo "<script>alert('Sorry please chose an academic Year')</script>";

						}
						 else if(empty($code)){
						echo "<script>alert('Sorry please chose a course to get course code')</script>";

						}
						 
						 else if(empty($cv)){
	                     echo "<script>alert('Sorry please chose a course to get credit value')</script>";

						}
						else {
							////DELETE ALL empty marks
	          $DELETE =$conn->query( "DELETE  FROM my_records   WHERE ca+exam<0 ") or die(mysqli_error($conn));

						
						/////Get student's deaprtment from matricule Given
						$check =$conn->query( "SELECT * FROM courses   WHERE matricule='$impData[1]' ") or die(mysqli_error($conn));
						while($rows=$check->fetch_assoc()){
							$dept=$rows['departmet'];
							$level=$rows['levels'];
						}
						EXIT;
						 
						$check =$conn->query( "SELECT * FROM my_records   WHERE matric='$impData[1]' and code='$code' and sem='$sem'  and levels='$level' and ayear='$ayear'") or die(mysqli_error($conn));
						$exist=$check->num_rows;;
						///check if Exams amrks Exists already
						
						 $check_ca= $dbcon->query("SELECT * FROM my_records   WHERE matric='$MTAS' and code='$code' and sem='$sem'  and levels='$level' and ayear='$ayear' and exam!=''  ") or die(mysqli_error($dbcon));		
		        $ca_exist=$check_ca->num_rows;
					 if($ca_exist>0){
					   
						$do=$dbcon->query("UPDATE  my_records SET   ca='".$impData[2]."' and exam=".'$impData[3]'."  WHERE code='$code' AND matric='".$impData[1]."' AND sem='$sem' AND ayear='$ayear'    ") or die(mysqli_error($dbcon));
				   }
						else  if($exist>0){
							echo $num=$check->num_rows;
							echo "<script>alert('ERROR. Records already exists so it will not be Imported')</script>";
						}
						////if exams marks exists update ca to it
					
						
						else {
							ECHO $impData[3];EXIT;
						
						$sql =$conn->query( "INSERT into my_records (`matric`, `code`, `credit`,  `ayear`, `sem`,`ca`,`dept`,`levels`,`exam`) 
	            	values('$impData[1]','$code','$cv','$ayear','$sem','$impData[2]','$dept','$level','$impData[3]')") or die(mysqli_error($conn));
						}
						
						//$query = $conn->query($sql);

						if($sql){
							$_SESSION['message'] = "Data imported successfully";
							printf("Affected rows(INSERT): %d\n",mysqli_affected_rows($sql));
						}
						else{
							$_SESSION['message'] = "Cannot import data. Something went wrong ";
						}
					}
					}
					header('location: index.php');
					
				}
				else{
					$_SESSION['message'] = "File contains empty data  ";
					header('location: index.php');
				}
			}
			else{
				$_SESSION['message'] = "Please upload CSV files only";
				header('location: index.php');
			}
		}
		else{
			$_SESSION['message'] = "File empty";
			header('location: index.php');
		}

	}

	else{
		$_SESSION['message'] = "Please import a file first";
		header('location: index.php');
	} 
 
?>