<?php
/**
 * Created by PhpStorm.
 * User: Aravinth
 * Date: 10-09-2017
 * Time: 12:30 PM
 */
 /**********************
require_once ('../../includes/dbc.php');
 
 if(isset($_POST["Import"])){
	 $sem=$_GET['sem'];
						$ayear=$_GET['ayear'];
						$code=$_GET['code'];
						$level=$_GET['level'];
						$status=$_GET['status'];
						 $cv=$_GET['cv'];
						$dept=$_GET['dept'];
						

						if(empty($sem)){
							echo "<script>alert('Sorry please chose a semester')</script>";
						}
						else if(empty($ayear)){
					       echo "<script>alert('Sorry please chose an academic Year')</script>";

						}
						else if(empty($code)){
						echo "<script>alert('Sorry please chose a course to get course code')</script>";

						}
						else if(empty($level)){
	                     echo "<script>alert('Sorry please chose a level')</script>";

						}
						else if(empty($status)){
						echo "<script>alert('Sorry please chose a course to get course status')</script>";

						}
						else if(empty($cv)){
	                     echo "<script>alert('Sorry please chose a course to get credit value')</script>";

						}
						else if(empty($cv)){
	                     echo "<script>alert('Sorry please chose a program First')</script>";

						}
						else {
		

		echo $filename=$_FILES["file"]["tmp_name"];
		

		 if($_FILES["file"]["size"] > 0)
		 {


 
				 //////////check for empty fields
				 if($emapData[1]=='null' && $emapData[2]>0) {
					echo "<script type=\"text/javascript\">
							alert(\"ERROR. There is an Empty Matricule some where . Check again.\");
							window.location = \"index.php\"
						</script>";
	        
				}
				else if(empty($emapData[2]) && !empty($emapData[1])){
					echo "<script type=\"text/javascript\">
							alert(\"ERROR. There is an Empty Ca Mark some where . Check again.\");
							window.location = \"index.php\"
						</script>";

				}
				else if($emapData[2]>40){
			   echo "<script>alert('ERROR. There is an Ca Mark greater than 40 . Check again')</script>";
			   

				}
				else {
			
		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
				 
				///check if records already exists
				  $check= $dbcon->query("SELECT * FROM my_records   WHERE matric='$emapData[1]' and code='$code' and sem='$sem'  and levels='$level' and ayear='$ayear'  ") or die(mysqli_error($dbcon));
				   if($check->num_rows>0){
					   echo 122233;
			
				   }
				   else {
				 
				
	    
	          //It wiil insert a row to our subject table from our csv file`
	           $result =$conn->query( "INSERT into my_records (`matric`, `code`, `credit`,  `ayear`, `sem`,`ca`,`dept`,`levels`) 
	            	values('$emapData[1]','$code','$cv','$ayear','$sem','$emapData[2]','$dept','$level')") or die(mysqli_error($conn));
	         //we are using mysql_query function. it returns a resource on true else False on error
				
	          
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php\"
						</script>";
				
				}

	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
			 
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"index.php\"
					</script>";
	        
			 

			 //close of connection
			
		 	
			
		 }
	}	
		 }
						

 }////////////////////close else 1
*****/

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;



   
	   
require_once ('../../includes/dbc.php');
require_once ('Spout/Autoloader/autoload.php');
			echo $sem=$_GET['sem'];
						$ayear=$_GET['ayear'];
						$code=$_GET['code'];
						$level=$_GET['level'];
						$status=$_GET['status'];
						 $cv=$_GET['cv'];
						$dept=$_GET['dept'];
						

						if(empty($sem)){
							echo "<script>alert('Sorry please chose a semester')</script>";
						}
						 if(empty($ayear)){
					       echo "<script>alert('Sorry please chose an academic Year')</script>";

						}
						 if(empty($code)){
						echo "<script>alert('Sorry please chose a course to get course code')</script>";

						}
						 if(empty($level)){
	                     echo "<script>alert('Sorry please chose a level')</script>";

						}
						
						 if(empty($cv)){
	                     echo "<script>alert('Sorry please chose a course to get credit value')</script>";

						}
						
						else {

if(!empty($_FILES['excelfile']['name']))
{
    // Get File extension eg. 'xlsx' to check file is excel sheet
    $pathinfo = pathinfo($_FILES['excelfile']['name']);

    // check file has extension xlsx, xls and also check
    // file is not empty
	//    if (($pathinfo['extension'] == 'csv' || $pathinfo['extension'] == 'xls')

    if (($pathinfo['extension'] == 'csv'  )
        && $_FILES['excelfile']['size'] > 0 )
		
    {
        echo $file = $_FILES['excelfile']['tmp_name'];

        // Read excel file by using ReadFactory object.
        $reader = ReaderFactory::create(Type::CSV);

        // Open file
        $reader->open($file);
        $count = 0;

        // Number of sheet in excel file
        foreach ($reader->getSheetIterator() as $sheet)
        {

            // Number of Rows in Excel sheet
            foreach ($sheet->getRowIterator() as $row)
            {

                // It reads data after header. In the my excel sheet,
                // header is in the first row.
                if ($count > 0) {

                    // Data of excel sheet
        echo $code=$row[0];
	    echo $matricule= $row[1];
        echo $ca = $row[2];   
				if(empty($matricule)){
					echo "<script>alert('ERROR. There is an Empty Matricule some where . Check again')</script>";
				}
				else if(empty($ca)){
			   echo "<script>alert('ERROR. There is an Empty Ca Mark some where . Check again')</script>";

				}
				else if($ca>40){
			   echo "<script>alert('ERROR. There is an Ca Mark greater than 40 . Check again')</script>";

				}
				else {
		
                   $check= $dbcon->query("SELECT * FROM my_records   WHERE matric='$matricule' and code='$code' and sem='$sem'  and levels='$level' and ayear='$ayear'  ") or die(mysqli_error($dbcon));
				   if(mysqli_num_rows($check)>0){
			
				   }
				 
				   
				   else {
		
		
$do=$dbcon->query("INSERT INTO my_records SET code='$code', matric='$matricule',credit='$cv',sem='$sem',ayear='$ayear', levels='$level',status='$status',  ca='$ca', dept='$dept'  ") or die(mysqli_error($dbcon));
     //$res = mysqli_query($con,$qry);

                }
				}
                $count++;
            }
        }

        if($do)
        {
            	echo "<script>alert('Importing Successfull')</script>";
				
echo '<meta http-equiv="Refresh" content="0; url=../Admission/thank.php">';	
        }
        else
        {
            echo "<script>alert('Your file Uploaded Failed for X reason')</script>";
echo "ERRRRRORRRR";				
        }

        // Close excel file
        $reader->close();
		}//////////close else if check inside 
    }
    else
    {
        echo "Please Choose only Excel file";
    }
}
else
{
    echo "Importing Sucessfull"."<br>";
  
}


						}
						

?>
