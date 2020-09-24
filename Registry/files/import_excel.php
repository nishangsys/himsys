  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php

	session_start();
	//connection
	require_once ('../../includes/dbc.php');

	if(isset($_POST['import'])){
		
		
        $dept =$_GET['prog'];        
		$level= $_GET['level'];
		 $sem= $_GET['sem'];
        $year_id=$_GET['ayear']; 
		
		              
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
						 
						 else if(empty($level)){
	                     echo "<script>alert('Sorry please chose a level')</script>";

						}
						 else if(empty($dept)){
	                     echo "<script>alert('Sorry Department Cannot Be Empty')</script>";

						}
						
						 else if(empty($impData[1])){
	                     echo "<script>alert('Sorry some credit value are empty so will not be imported')</script>";

						}
						else {
						
	
						/////Get student's deaprtment from matricule Given
						
						
						
						$check =$conn->query( "SELECT * FROM my_marks   WHERE matric='$impData[0]' and code='$impData[1]' and sem='$sem'   and year_id='$year_id'") or die(mysqli_error($conn));
						$exist=$check->num_rows;;
						///check if Exams amrks Exists already
						
					 $check_ca= $dbcon->query("SELECT * FROM my_marks   WHERE matric='$impData[0]' and code='$impData[1]' and sem='$sem'   and year_id='$year_id' and exam!=''  ") or die(mysqli_error($dbcon));	
							
		        $ca_exist=$check_ca->num_rows;
				$rounded=round($impData[3]);
				$rounde_exam=round($impData[4]);
					 if($ca_exist>0){
					   
						$do=$dbcon->query("UPDATE  my_marks SET   ca='".$rounded."' and exam='".$rounde_exam."'   WHERE code='$impData[1]' AND matric='".$impData[0]."' AND sem='$sem' AND year_id='$year_id'    ") or die(mysqli_error($dbcon));
				   }
						else  if($exist>0){
							$num=$check->num_rows;
							$do=$dbcon->query("UPDATE  my_marks SET   ca='".$rounded."'   WHERE code='".$impData[1]."' AND matric='".$impData[0]."' AND sem='$sem' AND year_id='$year_id'    ") or die(mysqli_error($dbcon));
							echo "<script>alert('ERROR. Records already exists so it will not be Imported')</script>";
						}
						////if exams marks exists update ca to it
					
						
						else {
						
						$sql =$conn->query( "INSERT into my_marks (`matric`, `code`, `cv`,  `year_id`, `sem`,`ca`,`exam`,`dept_id`,`level_id`) 
	            	values('$impData[0]','$impData[1]','$impData[2]','$year_id','$sem','$rounded','$rounde_exam','$dept','$level')") or die(mysqli_error($conn));
						}
						
						

						if($sql){
							$_SESSION['message'] = "Data imported successfully";
							printf("Affected rows(INSERT): %d\n",mysqli_affected_rows($sql));
								echo '<meta http-equiv="Refresh" content="1; url=../../Admission/thanks.php">';
								echo '<div class="alert alert-info">
							  <strong>	SUCCESS:</strong> Imporation Successfull. Thank you
							</div>';
						}
						else{
							echo "<script>alert('Cannot import data. Something went wrong')</script> ";
							echo '<div class="alert alert-danger">
							  <strong>	ERROR:</strong> Cannot import data. Something went wrong
							</div>';
							
						}
					}
					}
					
					
				}
				else{
					
					echo "<script>alert('File contains empty data')</script> ";
					
				}
			}
			else{
				
				
					echo "<script>alert('Please upload CSV files only')</script> ";
					
			}
		}
		else{
				echo "<script>alert('File empty')</script> ";
				
			
		}

	}

	else{
		echo "<script>alert('Please import a file first')</script> ";
				
	
	} 
 
?>