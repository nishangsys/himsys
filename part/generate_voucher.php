<?php


include '../dbc.php';

/**
Simple multiple Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/multiple-insert-update-using-php-mysql-delete-multiple-records-using-checkboxes-in-php/
**/
@session_start();
	
$query 	= mysql_query("SELECT * FROM `staffs` WHERE banned!='2' and dept!='POLICLINIC' ORDER BY name"); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count
 $month=$_GET['month'];
 $tm=$_GET['name'];
$year=date('Y');;
// Multipe insert case
if(isset($_POST['SubmitUpdate'])) {
	$qu	= mysql_query("SELECT COUNT(name) as totcou FROM `staffs` where banned='0' and dept!='POLICLINIC' order by name ") or die(mysql_error()); // Select from the table
	while($a=mysql_fetch_assoc($qu)){
		$amtou=$a['totcou'];
		
	}

	$amt=$amtou;
	if($amt > 0) {
		
		//***********check if product exists
		for($i=1; $i<=$amt; $i++) {
			$month=date('m');
	  //***********check if product exists
		for($i=1; $i<=$amt; $i++) {
	

		
			
		
		$year=date('Y');
		$_POST = array_map("ucwords", $_POST);
	
		$qry = "INSERT INTO voucher(name, matric, dept, salary,resp,others,deductions,month,year,overtime,position,senior,trans,leaves,research) VALUES "; // Split the mysql_query

		
		for($i=1; $i<=$amt; $i++) {
			$month=$_GET['month'];
 $tm=$_GET['name'];
$year=date('Y');;
			
	  $check="DELETE from voucher where month='$month' and year='$year' and dept!='POLICLINIC'";
		$run=mysql_query($check) or die(mysql_error());		

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
		echo '<meta http-equiv="Refresh" content="1; url=before_taxes.php?voucher='.$month.'&name='.$tm.'">';

	
	}
	
}
	}
}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>NSMS</title>
<meta name="keywords" content="multiple insert in php, multiple crud using PHP MySql, multiple insert update delete using php mysql"/>
<meta name="description" content="multiple insert update delete CRUD using PHP MySql. A simple way to insert, update and delete multiple values at a time using PHP MySql"/>
<style>
body{
	font-size:16px;
	background:url(bg.jpg);
}
.as_wrapper{
	margin:0 auto;
	width:100%;
	font-family:Arial;
	color:#333;
	background:#eee;
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
	width:95%;
	
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
	<h1 class="h1"><a href="">You are Preparing a Voucher for <?php echo $_GET['name']; ?> <?php echo date('Y'); ?></a></h1>
    
    <h3 style="color:#f00; font-size:16px">Please make sure no comma(,) ,full stops(.) and CFA are used</h3>
	<div class="as_country_container">
	
        
        
      
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center">
            <tr  style="font-size:14px; font-weight:bold; background:#1188aa; color:#fff; height:30px ">
                <td align="center">Sno</td>
                <td align="center">Name</td>
                <td align="center">Salary</td>
                
                <td align="center">Responsiblity</td>
                                  <td align="center">Research<br> Allownace</td>

                 <td align="center">Others</td>
                <td align="center">Overtime</td>
                
                <td align="center">Rents allowance</td>
                
                <td align="center">Seniority</td>
                 <td align="center">Transports</td>
                <td align="center">Leave Bonus</td>
                


                
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><input type="text" name="name<?php echo $i; ?>" value="<?php echo $row['name']; ?>" class="input" readonly  /></td>

                <td><input type="number" name="salary<?php echo $i; ?>" value="<?php echo $row['salary']; ?>" class="input"  style="width:120px"  readonly  /></td>

                <td><input type="number" name="response<?php echo $i; ?>" value="<?php echo $row['response']; ?>"  class="input" style="width:90px" /></td>
                                <td><input type="number" name="research<?php echo $i; ?>" value="<?php echo $row['research']; ?>"  class="input" style="width:90px" /></td>

                <td><input type="number" name="others<?php echo $i; ?>"  class="input" style="width:90px" value="<?php echo $row['others']; ?>"   /></td>
                <td><input type="number" name="overtime<?php echo $i; ?>" value="<?php echo $row['overtime']; ?>" class="input" style="width:70px"   /></td>
                                <td><input type="number" name="deduce<?php echo $i; ?>" value="<?php echo $row['rents']; ?>"  class="input" style="width:90px"   /></td>
                                <td><input type="text" name="senior<?php echo $i; ?>"   class="input" value="<?php echo $row['senior']; ?>" style="width:90px" /></td>
                <td><input type="text" name="trans<?php echo $i; ?>" value="<?php echo $row['trans']; ?>"  class="input" style="width:70px"   /></td>
                <td><input type="text" name="leaf<?php echo $i; ?>" value="<?php echo $row['leaves']; ?>"  class="input" style="width:90px"   /></td>
                   

                   <td><input type="hidden" name="dept<?php echo $i; ?>" value="<?php echo $row['dept']; ?>" class="input"  /></td>
                                      <td><input type="hidden" name="matric<?php echo $i; ?>" value="<?php echo $row['matric']; ?>" class="input"  /></td>

                                      <td><input type="hidden" name="position<?php echo $i; ?>" value="<?php echo $row['age']; ?>" class="input"  /></td>

               
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitUpdate" value="Generate  Voucher for <?php echo $_GET['name']; ?>" style="background:#1188aa; color:#fff; padding:10px 10px" /></td>
            </tr>
            </table>
            </form>
        <?php
        	
		
        ?>
	</div>
</div>
</body>
</html>

