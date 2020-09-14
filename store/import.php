<?php  
//connect to the database 
include '../dbc.php';

if(isset($_POST['Submit'])){
	
$d1=$con->query("truncate fixed_products") or die(mysqli_error($con));
$_POST = array_map("ucwords", $_POST);
	

if ($_FILES[csv][size] > 0) { 

    //get the csv file 
    $file = $_FILES[csv][tmp_name]; 
    $handle = fopen($file,"r"); 
     
    //loop through the csv file and insert into database 
    do { 
        if ($data[0]) { 	
/********************************ADDED BY ME*****************/
				
		$insert="INSERT INTO fixed_products(product,discribe,qty,model) VALUES 
                ( 
                   '".addslashes($data[0])."', 
                    '".addslashes($data[1])."',
					'".addslashes($data[2])."', 
                    '".addslashes($data[3])."' 
					
					
					
                    
                ) 
            ";
			
		
			
           $run=mysql_query($insert) or die(mysql_error()); 
			
		  
        } 
    } while ($data = fgetcsv($handle,1000,",","'")); 
    // 

    //redirect 
    echo "<span style='background:#f00; color:#fff; padding:10px 10px; text-align:center; margin:auto'>YOU HAVE SUCCESSFULLY UPLOADED DATA TO STOCK</span>"; die(mysql_error()); 
	echo "<script>alert('UPLOAD SUCCESSFUL')</script>";

} 
}

?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Import a CSV File with PHP & MySQL</title> 
</head> 
<body> 

<div class="upload">
<h1 >Upload An Excel File Only</h1><br />
<P style="margin:0px; padding:0px">
Points to note before uplaod<br />
1. Make sure that Excel file is the format <span style='color:#f00'>.CSV </span> only<br />
2. No item in the new file should be available in stocks else your file will not upload<br />
</P>
<?php if (isset($_GET['success'])) { echo "<b>Your file has been imported.</b><br><br>"; } //generic success notice ?> 
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1"> <br />
Choose your file: <br /> 
<input name="csv" type="file" id="csv" /> 
<input type="submit" name="Submit" value="Upload" /> 
</form> 

</div>
</body> 
</html>









