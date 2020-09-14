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
	$matric =mysql_real_escape_string( $row[1]);
	$gh= substr($matric,9,2);;
     $fname =mysql_real_escape_string( $row[0]);
	$levels =mysql_real_escape_string( $row[3]);
	
	$year_id=mysql_real_escape_string( $row[4]);
	$year1 =mysql_real_escape_string( $row[5]);
	$year2 =mysql_real_escape_string( $row[6]);
	$np=strtoupper($prog);
					
       $ats=$con->query("SELECT * FROM `specials` WHERE gh='$gh' ") or die(mysqli_error($con)) ;  
	while($ROWS=$ats->fetch_assoc()){
		 $prog=$ROWS['prog_name'];
	}

                  //Here, You can insert data into database.
                    //$qry = "INSERT INTO `marks`(`name`, `mobile_no`) VALUES ('$name','$mobile')";
					
					
					
					
	 $ats=$conn->query("insert into  students  set  
matricule='$matric',fname='$fname',
levels='$levels',departmet='$np',sex='$sex',year_id='$ayear',c101='$year1',c102='$year2',cxx1='$POB',cxx2='$DOB',cxx6='$school',cxx7='$dept',nationality='$nation',c110='16'") or die(mysqli_error($conn)) ;

					
					
					
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
