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
        $matricule=mysql_real_escape_string(  $row[1]);
	    $name= mysql_real_escape_string( $row[0]);
        $dept =mysql_real_escape_string(  $row[4]);        
		$ayear =mysql_real_escape_string(  $row[3]);	
		$level =mysql_real_escape_string(  $row[2]);
		$sex =mysql_real_escape_string(  $row[5]);
		$dob=mysql_real_escape_string(  $row[7]);  
		$pob =mysql_real_escape_string(  $row[6]); 
                   $check= $dbcon->query("SELECT * FROM courses   WHERE matricule='$matricule' and levels='$level'   and  db1='$ayear'  ") or die(mysqli_error($dbcon));
				   if(mysqli_num_rows($check)>0){
			
				   }
				   else {
		
		
$do=$dbcon->query("INSERT INTO courses SET  matricule='$matricule',fname='$name',departmet='$dept',db1='$ayear', levels='$level',sex='$sex' , cxx1='$pob',cxx2='$dob'") or die(mysqli_error($dbcon));
     //$do=$dbcon->query("INSERT INTO courses SET  matricule='$matricule',fname='$name',departmet='$dept',sex='$sex' ,db1='$ayear', cxx1='$pob',cxx2='$dob',levels='$level' ") or die(mysqli_error($dbcon));

                }
				}
                $count++;
            }
        }

        if($do)
        {
            	echo "<script>alert('Importing Successfull')</script>";
				echo '<meta http-equiv="Refresh" content="0; url= ?import_marks ">';
        }
        else
        {
            echo "<script>alert('Your file Uploaded Failed')</script>";
			
			echo '<meta http-equiv="Refresh" content="0; url= import_excel.php?prog='.$dept.'&term='.$term.'&level='.$level.'&ayear='.$ayear.' ">';
        }

        // Close excel file
        $reader->close();
    }
}

?>
