<?php
@session_start();
include '../includes/dbc.php'; // include the database and server connection file


  $query =$con->query("SELECT * FROM users WHERE id=".$_SESSION['id']) or die(mysqli_error($con));

 while($userRow=$query->fetch_array()){
 
 $who=$userRow['user_name'];
 $level=$userRow['banned'];
 
 }
 
 


///////////////select semester////////////
$d=$con->query("SELECT * FROM sector where area='$level'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $secto=$bu['name'];
}
 if(empty($level)){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

 
if($level=='5' or $level=='20' or $level=='2' ){

 //////////select academic year//////////////
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $year_id=$bu['year'];
	 $year=$bu['extra'];
	 $year2=$bu['extra1'];
}

 $mm=$conn->query("SELECT * from subject where roll='".$_GET['cust']."' order by roll asc limit 1 ") or die(mysqli_error($conn));
	while ($bsm=$mm->fetch_assoc()){
		$code=$bsm['subject'];
		$subject=$bsm['ayear'];
	}
 

$query 	= mysql_query("SELECT * FROM `resits` WHERE year_id='$ayear' and fname='$code'") or die(mysql_error()); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count

// Multipe insert case
if(isset($_POST['Submit11'])) {
	$_POST = array_map("ucwords", $_POST);
  $amt = $_POST['total'];
	
	if($amt > 0) {
	
		
		for($i=1; $i<=$amt; $i++) {
		$qry =mysql_query( "UPDATE resits set c102='".$_POST["exams$i"]."' where roll='".$_POST["roll$i"]."' "); // Split the mysql_query
		
		}
	
		echo "<script>alert('SUCCESSFUL IN SAVING EXAMS MARKS FOR $subject')</script>";
		echo '<meta http-equiv="Refresh" content="1; url=recording_marks.php?cust='.$_GET['cust'].'">';
	}
	// Redirect for each cases
	if($insert) {
		echo "<script>alert('SUCCESSFUL IN STOCK FORM CREATION')</script>";
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// rooms delete case using checkboxes
if(isset($_POST['SubmitDelete'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$delete = mysql_query("DELETE FROM rooms WHERE id = '".$_POST["delete$i"]."'"); // Run the delete query inside for loop
	}

	// Redirect for each cases
	if($delete) {
		$msg = '<script type="text/javascript">window.location.href = "?view";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// rooms update case
if(isset($_POST['Submit1'])) {
	$_POST = array_map("ucwords", $_POST);
	echo $amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$del12=mysql_query("DELETE  FROM resits WHERE year_id='$ayear' and fname='$code' ") or die(mysql_error());
	exit; 	$update = mysql_query("INSERT INTO  `resits` SET `matricule` = '".$_POST["matric$i"]."', fname='$code',departmet='$dept',levels='$level',sex='".$_POST["term$i"]."',year_id='$ayear',c101='".$_POST["ca$i"]."',c102='".$_POST["exam$i"]."' ") or die(mysql_error()); // Run the Mysql update query inside for loop
	}
	
	// Redirect for each cases
	if($update) {
		$msg = '<script type="text/javascript">window.location.href = "?update&result=updated";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title><?php echo $subject; ?> Marks Sheet</title>
<meta name="keywords" content="rooms insert in php, rooms crud using PHP MySql, rooms insert update delete using php mysql"/>
<meta name="description" content="rooms insert update delete CRUD using PHP MySql. A simple way to insert, update and delete rooms values at a time using PHP MySql"/>
<style>
.as_wrapper{
	margin:0 auto;
	width:969px;
	font-family:Arial;
	color:#333;
	font-size:14px;
	height:2000px;

	overflow:scroll;
	padding-bottom:30px;
}

.as_country_container{
	padding:20px;
	border:2px dashed #17A3F7;
}

.a {
	text-decoration:none;
	color:#999;
}

.a:hover {
	text-decoration:underline;
}

.a:active {
	color:#F55925;
}
.h1 a {
	text-decoration:none;
	color:#000;
}
.h1 a:hover {
	text-decoration:underline;
}
.table {
	border:2px dashed #17A3F7;
	padding:20px;
	min-width:500px;
}
.table tr td{
	padding:5px;
}
.table_view {
	border:1px solid #17A3F7;
	min-width:400px;
	border-collapse:collapse;
}
.table_view tr.heading th {
	background:#17A3F7;
	padding:5px;
	color:#FFF;
}
.table_view tr.odd {
	background:#F7F7F7;
}
.table_view tr.even {
	background:#FFF;
}
.table_view tr.odd:hover, .table_view tr.even:hover {
	background:#FEFDE0;
}
.table_view tr td {
	padding:5px;
}
.input {
	border:#CCC solid 1px;
	padding:5px;
}

.input:focus {
	border:#999 solid 1px;
	background:#FEFDE0;
	padding:5px;
}
</style>
</head>

<body>
<div class="as_wrapper">
	<h3>Registering <?php echo $subject; ?> Marks of <?php echo $ayear; ?></h3>
	<div class="as_country_container">
	
		<?php
		
		
			if($count <= 0) {
			?>
            <table align="center">
            <tr>
                <td>No records found!</td>
			</tr>
            </table>
            <?php
			} 
			else {
            $i = 0;
        	?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center">
            <tr>
                <td align="center">Sno</td>
                <td align="center">Dept</td>
               <td align="center">Matricule</td>

                <td align="center">Code</td>
                <td align="center">CA</td>
                <td align="center">Exams</td>
                            

                
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="roll<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                
                 <td><input type="text" name="prog<?php echo $i; ?>" value="<?php echo $row['departmet']; ?>" class="input" readonly style="width:250px" /></td>
                <td><input type="text" name="matric<?php echo $i; ?>" value="<?php echo $row['matricule']; ?>" class="input" readonly style="width:100px" /></td>
                
               <td><input type="text" name="matric<?php echo $i; ?>" value="<?php echo $row['fname']; ?>" class="input" readonly style="width:80px" /></td>
                
                    <td><input type="text" name="ca<?php echo $i; ?>" value="<?php echo $ca=$row['c101']; ?>" class="input" style="width:80px; " 
					<?php
		
		if(empty($ca)){
			echo "";
		}
		else {
			echo "readonly='readonly'";
		}
		?>
		
         /></td>
                 
                 
                <td><input type="text" name="exams<?php echo $i; ?>" value="<?php echo $ex=$row['c102']; ?>" class="input" style="width:80px; " <?php
		
		if(empty($ex)){
			echo "";
		}
		else {
			echo "readonly='readonly'";
		}
		?>
         /></td>
               
            
            <?PHP }  ?>
           
           </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $count; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="Submit11" value="SAVE MY MARKSHEET" onClick="return confirm('Are you sure?')" style="padding:10px 10px; background:#060; color:#fff" /></td>
            </tr>
            </table>
            </form>
        <?php
        ?>
	</div>
</div>
</body>
</html>
<?php } ?>