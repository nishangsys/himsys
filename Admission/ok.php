<?php
ini_set('max_execution_time', 600); //300 seconds = 5 minutes

include '../includes/dbc.php';
 $id = $_POST['num'];;
$names = $_POST['name'];
$year = $_POST['year'];
$prog = $_POST['prog'];


		/////check if you have genearted befor
$check	=$DBcon->query("SELECT *  FROM marks_sheet where prog='$prog' and year='$year' ") or die(mysqli_error($DBcon)); // Select 

if(mysqli_num_rows($check)>0){
	echo "<script>alert('Sorry have already generate for this month')</script>";
}

/////else run qury
else {
		
 $chkcount = $id;
for($i=0; $i<$chkcount; $i++)
{
	
	
			$qry =$con->query( "INSERT INTO marks_sheet set name='$names[$i]',prog='$prog[$i]',year='$year[$i]',status='pass'") or die(mysqli_error($con));
		
//$updating =$DBcon->query( "UPDATE finance set disc='".$_POST["transfer$i"]."' where cust_id='$cust_ID[$i]'") or die(mysqli_error($DBcon));
				

	//$MySQLiconn->query("UPDATE users SET first_name='$fn[$i]', last_name='$ln[$i]' WHERE id=".$id[$i]);
}
//header("Location: thank.php");
}
?>
