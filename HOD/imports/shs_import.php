<?php

	session_start();
	//connection
	require_once ('../../includes/dbc.php');

	if(isset($_POST['import'])){
		
		                 $sem=$_GET['sem'];
						echo $year_id=$_GET['ayear'];
						echo $code=$_GET['code'];
						$level=$_GET['level'];
						$status=$_GET['status'];
						 $cv=$_GET['cv'];
						$dept=$_GET['dept'];
						
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
						 else if(empty($year_id)){
					       echo "<script>alert('Sorry please chose an academic Year')</script>";

						}
						 else if(empty($code)){
						echo "<script>alert('Sorry please chose a course to get course code')</script>";

						}
						 else if(empty($level)){
	                     echo "<script>alert('Sorry please chose a level')</script>";

						}
						 else if(empty($dept)){
	                     echo "<script>alert('Sorry Department Cannot Be Empty')</script>";

						}
						
						 else if(empty($cv)){
	                     echo "<script>alert('Sorry please chose a course to get credit value')</script>";

						}
						else {
						
	
						/////Get student's deaprtment from matricule Given
						$check =$conn->query( "SELECT * FROM students   WHERE matricule='$impData[1]' AND year_id='".$year_id."'  ") or die(mysqli_error($conn));
						while($rows=$check->fetch_assoc()){
							$dept=$rows['dept_id'];
							$level=$rows['level_id'];
						}
						
						
						$check =$conn->query( "SELECT * FROM my_marks   WHERE matric='$impData[1]' and code='$code' and sem='$sem'   and year_id='$year_id'") or die(mysqli_error($conn));
						$exist=$check->num_rows;;
						///check if Exams amrks Exists already
						
					 $check_ca= $dbcon->query("SELECT * FROM my_marks   WHERE matric='$impData[1]' and code='$code' and sem='$sem'   and year_id='$year_id' and exam!=''  ") or die(mysqli_error($dbcon));	
							
		        $ca_exist=$check_ca->num_rows;
				$rounded=round($impData[2]);
					 if($ca_exist>0){
					   
						$do=$dbcon->query("UPDATE  my_marks SET   ca='".$rounded."'   WHERE code='$code' AND matric='".$impData[1]."' AND sem='$sem' AND year_id='$year_id'    ") or die(mysqli_error($dbcon));
				   }
						else  if($exist>0){
							echo $num=$check->num_rows;
							$do=$dbcon->query("UPDATE  my_marks SET   ca='".$rounded."'   WHERE code='$code' AND matric='".$impData[1]."' AND sem='$sem' AND year_id='$year_id'    ") or die(mysqli_error($dbcon));
							echo "<script>alert('ERROR. Records already exists so it will not be Imported')</script>";
						}
						////if exams marks exists update ca to it
					
						
						else {
						
						$sql =$conn->query( "INSERT into my_marks (`matric`, `code`, `cv`,  `year_id`, `sem`,`ca`,`dept_id`,`level_id`) 
	            	values('$impData[1]','$code','$cv','$year_id','$sem','$rounded','$dept','$level')") or die(mysqli_error($conn));
						}
						
						//$query = $conn->query($sql);

						if($sql){
							$_SESSION['message'] = "Data imported successfully";
							printf("Affected rows(INSERT): %d\n",mysqli_affected_rows($sql));
							echo '<meta http-equiv="Refresh" content="1; url=../index.php?uploading_ca&did='.$_GET['did'].'&id='.$_GET['id'].'&year_id='.$_GET['year_id'].'&level='.$_GET['level_id'].'&sch_id='.$_GET['sch_id'].'">';
						}
						else{
							$_SESSION['message'] = "Cannot import data. Something went wrong ";
						}
					}
					}
						echo '<meta http-equiv="Refresh" content="1; url=../index.php?uploading_ca&did='.$_GET['did'].'&id='.$_GET['id'].'&year_id='.$_GET['year_id'].'&level='.$_GET['level_id'].'&sch_id='.$_GET['sch_id'].'">';
					
				}
				else{
					$_SESSION['message'] = "File contains empty data  ";
						echo '<meta http-equiv="Refresh" content="1; url=../index.php?uploading_ca&did='.$_GET['did'].'&id='.$_GET['id'].'&year_id='.$_GET['year_id'].'&level='.$_GET['level_id'].'&sch_id='.$_GET['sch_id'].'">';
				}
			}
			else{
				$_SESSION['message'] = "Please upload CSV files only";
				echo '<meta http-equiv="Refresh" content="1; url=../index.php?uploading_ca&did='.$_GET['did'].'&id='.$_GET['id'].'&year_id='.$_GET['year_id'].'&level='.$_GET['level_id'].'&sch_id='.$_GET['sch_id'].'">';
			}
		}
		else{
			$_SESSION['message'] = "File empty";
				echo '<meta http-equiv="Refresh" content="1; url=../index.php?uploading_ca&did='.$_GET['did'].'&id='.$_GET['id'].'&year_id='.$_GET['year_id'].'&level='.$_GET['level_id'].'&sch_id='.$_GET['sch_id'].'">';
		}

	}

	else{
		$_SESSION['message'] = "Please import a file first";
			echo '<meta http-equiv="Refresh" content="1; url=../index.php?uploading_ca&did='.$_GET['did'].'&id='.$_GET['id'].'&year_id='.$_GET['year_id'].'&level='.$_GET['level_id'].'&sch_id='.$_GET['sch_id'].'">';
	} 
 
?>