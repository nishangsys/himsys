<?php

include '../dbc.php';

/**
Simple multiple Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/multiple-insert-update-using-php-mysql-delete-multiple-records-using-checkboxes-in-php/
**/

$query 	= mysql_query("SELECT * FROM `staffs` WHERE banned!='2' ORDER BY name") or die(mysql_error()); // Select from the table
 $count 	= mysql_num_rows($query); // Get the rows count
	$qu	= mysql_query("SELECT COUNT(name) as totcou FROM `staffs` where banned='0' order by name ") or die(mysql_error()); // Select from the table
	while($a=mysql_fetch_assoc($qu)){
	echo	$amtou=$a['totcou'];
		
	}

	$amt=$amtou;
	if($amt > 0) {
		
		//***********check if product exists
		for($i=1; $i<=$amt; $i++) {
			$month=date('m');
	  $check="SELECT * from voucher where month='$month' ";
		$run=mysql_query($check) or die(mysql_error());
		if(mysql_num_rows($run)>0){
		
			echo "<script>alert('ERROR. Voucher already generated for this month')</script>";
			echo '<meta http-equiv="Refresh" content="0; url=voucher.php">';
			
		}
		
		else {
			
		
		$year=date('Y');
		$_POST = array_map("ucwords", $_POST);
	
		$qry = "INSERT INTO voucher(name, matric, dept, salary,resp,others,deductions,month,year,overtime,position,senior,trans,leaves,research) VALUES "; // Split the mysql_query

		
		for($i=1; $i<=$amt; $i++) {
			$year=date('Y');
			$date=date('d-m-Y');
			$month=date('m');
			
			

$agen=$_SESSION['username'];
			$qry .= "('".$_POST["name$i"]."', '".$_POST["matric$i"]."', '".$_POST["dept$i"]."',
			'".$_POST["salary$i"]."','".$_POST["response$i"]."',
			 '".$_POST["others$i"]."','".$_POST["deduce$i"]."',
'$month', '$year','".$_POST["overtime$i"]."','".$_POST["position$i"]."','".$_POST["senior$i"]."','".$_POST["trans$i"]."','".$_POST["leaf$i"]."','".$_POST["research$i"]."'), "; // loop the mysql_query values to avoid more server loding time
				$gy =mysql_query( "UPDATE staffs set response='".$_POST["response$i"]."',senior='".$_POST["senior$i"]."',research='".$_POST["research$i"]."' WHERE matric='".$_POST["matric$i"]."' AND dept='".$_POST["dept$i"]."' ") or die(mysql_error()); // Split the mysql_query


		}
		
		$qry	= substr($qry, 0, strlen($qry)-2);
		$insert1 = mysql_query($qry) or die (mysql_error()); // Execute the mysql_query
		
		

		echo "<script>alert('Voucher successfully Created. Thank You')</script>";
			echo '<meta http-equiv="Refresh" content="1; url=before_taxes.php">';

	
	}
	
}
	}


?>