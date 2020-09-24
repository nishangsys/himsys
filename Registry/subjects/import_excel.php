  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php

	session_start();
	//connection
	require_once ('../../includes/dbc.php');

	if(isset($_POST['import'])){
		
		$dept =$_POST['dept'];        
		$level= $_POST['level'];
		$sem= $_POST['sem'];
		
		              
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
						
						
						
	 $check= $dbcon->query("SELECT * FROM subjects   WHERE code='".$impData[0]."' and sem='$sem'  and level_id='$level' and prog_id='$dept'  ") or die(mysqli_error($dbcon));
	 	$course_exixts=$check->num_rows;
					 if($course_exixts>0){
					 
				   }
						
						
						else {
						
										
					
	 $do=$dbcon->query("insert into  subjects  set  
  code='".$impData[0]."',title='".$impData[1]."' ,prog_id='$dept',status='".$impData[3]."' ,cv='".$impData[2]."',level_id='$level',sem='$sem' ") or die(mysqli_error($dbcon)) ;

		
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
		
 
?>