
<?php
/**
 * Created by PhpStorm.
 * User: Aravinth
 * Date: 10-09-2017
 * Time: 12:30 PM
 */

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;

require_once ('connect.php');
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
                    $fname = $row[0];
                    $prog = $row[1];
					$matric = $row[2];
					$levels = $row[3];
					$sex = $row[4];
					$year_id= $row[5];
					$year1 = $row[6];
					$year2 = $row[7];
					$ids = $row[8];
					$school = $row[9];
					$POB = $row[10];
					$DOB = $row[11];
					$dept = $row[12];                   
					$nation = $row[13];
                    

                    //Here, You can insert data into database.
                    //$qry = "INSERT INTO `marks`(`name`, `mobile_no`) VALUES ('$name','$mobile')";
					
					$qry = $con->query("SELECT * FROM students where matricule='$matric' and  year_id='$ayear'") or die(mysqli_error($con));
					if(mysqli_num_rows($qry)>0){
						
					}
					else {
					
	 $ats=$con->query("insert into  students  set  
matricule='$matric',fname='$fname',
levels='$levels',departmet='$prog',sex='$sex',year_id='$ayear',c110='$ids',c101='$year1',c102='$year2',cxx1='$POB',cxx2='$DOB',cxx6='$school',cxx7='$dept',nationality='$nation'") or die(mysqli_error($con)) ;

echo "Affected rows: " . mysqli_affected_rows($con);
					}

					
					
                    //$res = mysqli_query($con,$qry);

                }
                $count++;
            }
        }

        if($res)
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
