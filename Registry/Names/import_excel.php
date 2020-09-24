  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php

	session_start();
	//connection
	require_once ('../../includes/dbc.php');

	if(isset($_POST['import'])){
	
		
		              
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
						
						
									
				 $dept =$_GET['dept'];        
					$ayear = $_GET['ayear'];	
					$level =$_GET['level'];
					if(empty($dept)){
							echo "<script>alert('ERROR. Deaprtment Cannot be Empty')</script> ";
					}
					else if(empty($level)){
							echo "<script>alert('ERROR. Level Cannot be Empty')</script> ";
					}
					else if(empty($ayear)){
							echo "<script>alert('ERROR. Aacdemic Year Cannot be Empty')</script> ";
					}
					else {
						
                   $check= $dbcon->query("SELECT * FROM students   WHERE matricule='$impData[1]' and level_id='$level'   and  year_id='$ayear' and matricule!=''  ") or die(mysqli_error($dbcon));
				   
					
				   if($check->num_rows>0){
			
				   }
				   
				   else {
						
						
							
$sql=$dbcon->query("INSERT INTO students SET  matricule='$impData[1]',fname='".$impData[0]."',dept_id='$dept',year_id='$ayear', level_id='$level' ") or die(mysqli_error($dbcon));
						
						
		
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
?>