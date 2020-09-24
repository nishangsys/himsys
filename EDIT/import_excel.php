<?php
/**
 * Created by PhpStorm.
 * User: Aravinth
 * Date: 10-09-2017
 * Time: 12:30 PM
 */

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;

require_once ('../includes/dbc.php');
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
	$code =mysql_real_escape_string( $row[1]);
	$title= $row[2];;
     $status =mysql_real_escape_string( $row[0]);
	$cv =$row[3];
	$dept=mysql_real_escape_string( $row[4]);
	$level =mysql_real_escape_string( $row[5]);
	$sem =mysql_real_escape_string( $row[6]);
					
    	
					
					
	 $ats=$conn->query("insert into  subjects  set  
code='$code' ,title='$title',status='$status',cv='$cv',dept='$dept',level='$level',sem='$sem' ") or die(mysqli_error($conn)) ;

					
					
					
                    //$res = mysqli_query($conn,$qry);

                }
                $count++;
            }
        }

        if($ats)
        {
            echo "Your file Uploaded Successfull";
        }
        else
        {
            echo "Your file Uploaded Failed";
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
    echo "File is Empty"."<br>";
    echo "Please Choose Excel file";
}

?>
