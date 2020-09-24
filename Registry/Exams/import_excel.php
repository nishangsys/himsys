<?php
/**
 * Created by PhpStorm.
 * User: Aravinth
 * Date: 10-09-2017
 * Time: 12:30 PM
 */
 
	   
   

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;



   
	   
require_once ('../../includes/dbc.php');
require_once ('Spout/Autoloader/autoload.php');

if(!empty($_FILES['excelfile']['name']))
{
    // Get File extension eg. 'xlsx' to check file is excel sheet
    $pathinfo = pathinfo($_FILES['excelfile']['name']);

    // check file has extension xlsx, xls and also check
    // file is not empty
    if (($pathinfo['extension'] == 'xlsx' || $pathinfo['extension'] == 'xls')
        && $_FILES['excelfile']['size'] > 0 )
    {
        $file = $_FILES['excelfile']['tmp_name'];

        // Read excel file by using ReadFactory object.
        $reader = ReaderFactory::create(Type::XLSX);

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
					
					
		                 $sem=$_GET['sem'];
						echo $year_id=$_GET['ayear'];
						echo $code=$_GET['code'];
						$level=$_GET['level'];
						$status=$_GET['status'];
						 $cv=$_GET['cv'];
						$dept=$_GET['did'];
        $exams=round(  $row[1]);
	    $matricule= mysql_real_escape_string( $row[0]);
        $year_id=mysql_real_escape_string(  $row[2]);        
		$level =$_GET['level'];
		 $sem= $_GET['sem'];
        $code=mysql_real_escape_string(  $row[3]); 
	     $cv=mysql_real_escape_string(  $row[4]);   
		
		$MTAS=ltrim($matricule);
		$prog =$_POST['dept'];
		$total=$exams;
		
		/////check if ca exists 
		 $check_ca= $dbcon->query("SELECT * FROM   my_marks   WHERE matric='$MTAS' and code='$code' and sem='$sem'  and level_id='$level' and year_id='$year_id' and ca!=''  ") or die(mysqli_error($dbcon));
		
		  $ca_exist=$check_ca->num_rows;
		 
		 
                   $check= $dbcon->query("SELECT * FROM   my_marks   WHERE matric='$MTAS' and code='$code' and sem='$sem'  and level_id='$level' and year_id='$year_id' and exam=''  ") or die(mysqli_error($dbcon));
				   if(empty($prog)){
					   echo "<script>alert('Sorry   Chose a Program to Continue')</script>";


				   }
				   
				   else if(mysqli_num_rows($check)>0){
			
				   }
				   else if($ca_exist>0){
					   
$do=$dbcon->query("UPDATE    my_marks SET   exam='$exams' WHERE code='$code' AND matric='$MTAS' AND sem='$sem' AND year_id='$year_id'    ") or die(mysqli_error($dbcon));
				   }
				   
				   else if($total>100){
				   echo "<script>alert('Sorry  ".$code." total marks is more than 100')</script>";
				   }
				   
				   else {
		
		
$do=$dbcon->query("INSERT INTO   my_marks SET code='$code', matric='$MTAS',credit='$cv',sem='$sem',year_id='$year_id', level_id='$level',  exam='$exams',dept_id='$prog' ") or die(mysqli_error($dbcon));
     //$res = mysqli_query($con,$qry);

                }
				}
                $count++;
            }
        }

        if($do)
        {
            	echo "<script>alert('Importing Successfull')</script>";
				
				echo '<meta http-equiv="Refresh" content="0; url=../index.php?import_exams &did='.$_GET['did'].'&id='.$_GET['id'].'&year_id='.$_GET['year_id'].'&level='.$_GET['level_id'].'&sch_id='.$_GET['sch_id'].'">';
				
        }
        else
        {
		
            echo "<script>alert('Your file Uploaded Failed')</script>";
			
				echo '<meta http-equiv="Refresh" content="0; url=../index.php?import_exams ">';
        }

        // Close excel file
        $reader->close();
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

?>
