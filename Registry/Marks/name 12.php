<?php
$conn= mysqli_connect("localhost", "root", "", "biakahc_online");

$gpa = $_POST['gpa'];
		$code=$_GET['code'];
 $school=$_GET['school'];
  $certi=$_GET['cer'];
  
$number = count($_POST["name"]);
if($number > 1)
{
	for($i=0; $i<$number; $i++)
	{
		if(empty($_POST["name"][$i] )){
			echo "A subject is Missing";
		}
		else if(empty($_POST["grade"][$i] )){
			echo "A Grade is Missing";
			
			
		}
		
		{ if(trim($_POST["name"][$i] != '' ))
		{
			
			$conn->query("DELETE FROM `mycerti` WHERE  subject='".$_POST["name"][$i]."' AND  grade='".$_POST["grade"][$i]."' AND gpa='$gpa' AND matric='$code' AND certia='$certi' AND certib='$school' ") or die(mysqli_error($conn));
			$sql = "INSERT INTO `mycerti`(subject,grade,matric,certia,certib) VALUES('".mysqli_real_escape_string($conn, $_POST["name"][$i])."','".mysqli_real_escape_string($conn, $_POST["grade"][$i])."','$code','$certi','$school')";
			mysqli_query($conn, $sql) or die(mysqli_error($conn));
		
				
				}
	}
	echo "Data Inserted";
	}
}



echo '<meta http-equiv="Refresh" content="1; url=login.php">';
