<?php
/**
Simple staffs Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/staffs-insert-update-using-php-mysql-delete-staffs-records-using-checkboxes-in-php/
**/
include '../dbc.php'; // include the database and server connection file
$query 	= mysql_query("SELECT * FROM `staffs` WHERE level='CNSP' ORDER BY id ASC"); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count

$o 	= mysql_query("SELECT * FROM `thelast` WHERE id='1' ") or die(mysql_error()); // Select from the table
while($rt=mysql_fetch_assoc($o)){
	 $cnps=$rt['cnsp'];
	 $crtv=$rt['crtv'];
	 $dct=$rt['dct'];
	 $ccf=$rt['ccf'];
	$cnps2=$rt['cnps2'];
	
}

// Multipe insert case
if(isset($_POST['submit'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total'];
	if($amt > 0) {
		$qry = "INSERT INTO staffs(class,amount,cate) VALUES "; // Split the mysql_query
		for($i=1; $i<=$amt; $i++) {
			$qry .= "('".$_POST["class$i"]."', '".$_POST["amount$i"]."', '".$_POST["cate$i"]."'), "; // loop the mysql_query values to avoid more server loding time
		}
		$qry 	= substr($qry, 0, strlen($qry)-2);
		$insert = mysql_query($qry); // Execute the mysql_query
	}
	// Redirect for each cases
	if($insert) {
		$msg = '<script type="text/javascript">window.location.href = "?view&result=added";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// staffs delete case using checkboxes
if(isset($_POST['SubmitDelete'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$delete = mysql_query("DELETE FROM staffs WHERE id = '".$_POST["delete$i"]."'"); // Run the delete query inside for loop
	}

	// Redirect for each cases
	if($delete) {
		$msg = '<script type="text/javascript">window.location.href = "?view";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// staffs update case
if(isset($_POST['SubmitUpdate'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	$date=date('d-m-Y');
	$month=date('m');
	$year=date('Y');
	$mm=date('F');
	$check=mysql_query("SELECT * FROM payslip where month='$month' and year='$year'") or die(mysql_error());
	if(mysql_num_rows($check)>0){
			echo "<script>alert('ERROR. Your have already Generate salaries for this month ')</script>";

	}
	else {
	for($i=1; $i<=$amt; $i++) {
		$update = mysql_query("INSERT INTO  `payslip` SET cnps = '".$_POST["cnps$i"]."', position = '".$_POST["position$i"]."'
		, name= '".$_POST["name$i"]."' , crtv= '".$_POST["crtv$i"]."', dct= '".$_POST["dct$i"]."', ccf= '".$_POST["ccf$i"]."'
		, cnps2= '".$_POST["cnps2$i"]."', tottax= '".$_POST["tottax$i"]."', usalary= '".$_POST["payable$i"]."',date='$date',month='$month',year='$year',thismonth='$mm' ") or die(mysql_error()); // Run the Mysql update query inside for loop
	
	echo "<script>alert('SUCCESS. Salaries Successfully generated for this month ')</script>";
		echo '<meta http-equiv="Refresh" content="0; url=staffpage.php?their_salaries">';

	}
	

}
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>NISHANG SYSTEMS</title>
<meta name="keywords" content="staffs insert in php, staffs crud using PHP MySql, staffs insert update delete using php mysql"/>
<meta name="description" content="staffs insert update delete CRUD using PHP MySql. A simple way to insert, update and delete staffs values at a time using PHP MySql"/>
<style>
body{
	background:url(bg.jpg);
}
.as_wrapper{
	margin:0 auto;
	width:100%;
	background:#fff;
	font-family:Arial;
	color:#333;
	font-size:14px;
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
	<h1 class="h1"><a href="">CNSP DECLARATION</a><BR>
    PAY SLIP FOR THE MONTH OF <?php echo date('F Y'); ?>
    </h1>
   
	<div class="as_country_container">
	<?php
    echo $msg; // Display the result message generated in the above PHP actions,
    //Create form to get number of rows to be generated to insert 
    ?>
        
      
            <?php
			
            $i = 0;
        	?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center" style="width:100%">
            <tr style="background:#1188aa; color:#fff; padding:10px 0px">
                <td align="center">Sno</td>
                <td align="center">STAFF'S NAME</td>
                <td align="center">Gross Salary</td>
                <td align="center">CNSP <?php echo $cnps ?> %</td>
                <td align="center">CRTV <?php echo $crtv ?> %</td>
                <td align="center">DCT <?php echo $dct ?> %</td>
                <td align="center">CCF <?php echo $ccf ?> %</td>
                <td align="center">CNSP <?php echo $cnps2 ?> %</td>
                <td align="center">Total Taxes</td>
                <td align="center">New Salary Payable</td>
                <td></td>
               
                
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><input type="text" name="name<?php echo $i; ?>" value="<?php echo $row['name']; ?>" class="input" /></td>
                                 <td><input type="text" name="salary<?php echo $i; ?>" value="<?php echo $row['salary']; ?>" style="width:80px" class="input" readonly /></td>

                <td><input type="text" name="cnps<?php echo $i; ?>" value="<?php echo (($cnps/100)*$row['salary']); ?>" style="width:60px" class="input" readonly /></td>
                
                 <td><input type="text" name="crtv<?php echo $i; ?>" value="<?php echo (($ctv/100)*$row['salary']); ?>" style="width:60px" class="input" readonly /></td>                 
                  <td><input type="text" name="dct<?php echo $i; ?>" value="<?php echo (($dct/100)*$row['salary']); ?>" style="width:60px" class="input" readonly /></td>                
                 <td><input type="text" name="ccf<?php echo $i; ?>" value="<?php echo (($ccf/100)*$row['salary']) ?>" style="width:60px" class="input" readonly /></td>
                  <td><input type="text" name="cnps2<?php echo $i; ?>" value="<?php echo (($cnps2/100)*$row['salary']); ?>" style="width:60px" class="input" readonly /></td>
                
                 <td><input type="text" name="tottax<?php echo $i; ?>" value="<?php echo ((($cnps/100)*$row['salary'])+(($ccf/100)*$row['salary']) ); ?>" style="width:60px" class="input" /></td>
                  <td><input type="text" name="payable<?php echo $i; ?>" value="<?php echo ($row['salary']-((($cnps/100)*$row['salary'])+(($ccf/100)*$row['salary']))); ?>" style="width:80px; background:#9FC" class="input" /></td>
                                <td><input type="hidden" name="position<?php echo $i; ?>" value="<?php echo $row['age']; ?>" class="input" /></td>

               
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitUpdate" value="Generate Salaries for <?php echo date('F'); ?>" style="background:#9C0; padding:10PX 10PX" /></td>
            </tr>
            </table>
            </form>
        <?php
        
        ?>
	</div>
</div>
</body>
</html>