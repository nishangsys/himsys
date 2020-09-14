<?php
if (isset($_POST['submit'])) 
{
include('database.php');

//Import uploaded file to Database
$handle = fopen($_FILES['filename']['tmp_name'], "r");

while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	mysql_query("INSERT into foods product='".$data[0]."', category='".$data[1]."', price='".$data[2]."', quatity='".$data[3]."',serial='".$data[4]."', cprice='".$data[5]."'  ") or die(mysql_error());
	
	}

fclose($handle);

//print "Import done";
echo "<script type='text/javascript'>alert('Successfully Imported a CSV File for User!');</script>";
echo "<script>document.location='index.php'</script>";
//view upload form
}

?>