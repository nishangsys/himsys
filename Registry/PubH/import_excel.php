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
	$code =mysql_real_escape_string( $row[0]);
     $title =mysql_real_escape_string( $row[1]);	
	$sem =mysql_real_escape_string( $row[2]);
	$dept =mysql_real_escape_string( $row[3]);
	$level =mysql_real_escape_string( $row[4]);
	$num_of_hrs =mysql_real_escape_string( $row[5]);		
				
                    
      $check= $dbcon->query("SELECT * FROM subject   WHERE subject='$code' and sem='$sem'  and level='$level' and department='$dept'  ") or die(mysqli_error($dbcon));
				   if(mysqli_num_rows($check)>0){
			
				   }
				   else {
		
					
					
					
	 $do=$dbcon->query("insert into  subject  set  
  subject='$code',title='$title' ,department='$dept',level='$level',sem='$sem' ") or die(mysqli_error($dbcon)) ;

					
					  }
				}
                $count++;
            }
        }

        if($do)
        {
            	echo "<script>alert('Importing Successfull')</script>";
				echo '<meta http-equiv="Refresh" content="0; url=../PubH/index.php ">';
        }
        else
        {
            echo "<script>alert('Your file Uploaded Failed')</script>";
			
			
				echo '<meta http-equiv="Refresh" content="0; url=../PubH/index.php ">';
        }

        // Close excel file
        $reader->close();
    }
}

?>
