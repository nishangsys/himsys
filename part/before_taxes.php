<?php


include '../dbc.php';

/**
Simple multiple Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/multiple-insert-update-using-php-mysql-delete-multiple-records-using-checkboxes-in-php/
**/
@session_start();
$month=$_GET['voucher'];;	
$tm=$_GET['name'];
$year=date('Y');
$query 	= mysql_query("SELECT * FROM `voucher` where month='$month' and year='$year' AND dept!='POLICLINIC' ORDER BY id ASC"); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count


// Multipe insert case
if(isset($_POST['SubmitUpdate'])) {
	
	$year=date('Y');
	$qu	= mysql_query("SELECT COUNT(name) as totcou FROM `voucher` where month='$month' and year='$year' AND dept!='POLICLINIC'") or die(mysql_error()); // Select from the table
	while($a=mysql_fetch_assoc($qu)){
		echo $amtou=$a['totcou'];
		
	}

	$amt=$amtou;
	if($amt > 0) {
		
		//***********check if product exists
		for($i=1; $i<=$amt; $i++) {
	  $check="SELECT * from voucher where name='".$_POST["name$i"]."' AND name='".$_POST["resp$i"]."' ";
		$run=mysql_query($check) or die(mysql_error());
		if(mysql_num_rows($run)>0){
		
			echo "<script>alert('Sorry Your Records cannot be uploaded because  ". $_POST["product$i"]." ". $_POST["model$i"]."  is already in stocks')</script>";
			echo "<p style='color:#f00; font-size:14px; font-weight:bold; text-align:center;'>Sorry Your Records cannot be uploaded because  ". $_POST["product$i"]." ". $_POST["cate$i"]."  is already in stocks</p>";
			echo '<meta http-equiv="Refresh" content="1; url= simple.php">';
			exit;
		}
		
		else {
			
		
		$year=date('Y');
		$_POST = array_map("ucwords", $_POST);
	
		for($i=1; $i<=$amt; $i++) {
			$date=date('d-m-Y');
			$month=$_GET['voucher'];;	
$year=date('Y');
	for($i=1; $i<=$amt; $i++) {
			$qry =mysql_query( "UPDATE voucher set name='".$_POST["name$i"]."',matric= '".$_POST["matric$i"]."',dept= '".$_POST["dept$i"]."',salary='".$_POST["salary$i"]."',resp='".$_POST["response$i"]."',
			 others='".$_POST["others$i"]."',deductions='".$_POST["deduce$i"]."',gross='".$_POST["net$i"]."'
			 ,senior='".$_POST["senior$i"]."',trans='".$_POST["trans$i"]."', leaves='".$_POST["leave$i"]."',
month='$month',year= '$year',overtime='".$_POST["overtime$i"]."' WHERE id='".$_POST["id$i"]."' ") or die(mysql_error()); // loop the mysql_query values to avoid more server loding time
				

	
		

		echo "<script>alert('Voucher successfully Created. Thank You')</script>";
		echo '<meta http-equiv="Refresh" content="1; url=after_taxes.php?voucher='.$month.'&name='.$tm.'">';

	}
	
}}
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
	<h1 class="h1"><a href="">Payment Voucher for <?php echo $_GET['name']; ?> <?php echo date('Y'); ?> <span style="color:#f00">Before Taxes</span> </a></h1>
       <h3 style="color:#f00; font-size:16px">Please make sure no comma(,) ,full stops(.) and CFA are used</h3>
 
	<div class="as_country_container">
	
        
        
      
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center">
            <tr  style="font-size:14px; font-weight:bold; background:#1188aa; color:#fff; height:30px ">
                <td align="center">Sno</td>
                <td align="center">Name</td>
                <td align="center">Salary</td>
                
                <td align="center">Responsiblity</td>
                  <td align="center">Research Allownace</td>
                 <td align="center">Others</td>
                <td align="center">Overtime</td>
                <td align="center">Rents allow.</td>
                
                <td align="center">Seniority Bonus</td>
                <td align="center">Transport allow.</td>
                <td align="center">Leave allow.</td>
                
                    <td align="center">Gross Salary</td>

                
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><input type="text" name="name<?php echo $i; ?>" value="<?php echo $row['name']; ?>" class="input" readonly  /></td>

                <td><input type="number" name="salary<?php echo $i; ?>" value="<?php echo $salary=$row['salary']; ?>" style="width:90px"  class="input" readonly  /></td>

                <td><input type="number" name="response<?php echo $i; ?>" value="<?php echo $resp=$row['resp']; ?>"  class="input" style="width:100px" /></td>
                  <td><input type="number" name="research<?php echo $i; ?>" value="<?php echo $research=$row['research']; ?>"  class="input" style="width:90px" /></td>

                <td><input type="number" name="others<?php echo $i; ?>"  value="<?php echo $others=$row['others']; ?>"   class="input" style="width:90px"   /></td>
                <td><input type="number" name="overtime<?php echo $i; ?>"  value="<?php echo $overtime=$row['overtime']; ?>"   class="input" style="width:60px"   /></td>
                                <td><input type="number" name="deduce<?php echo $i; ?>"  value="<?php echo $deductions=$row['deductions']; ?>"   class="input" style="width:60px"   /></td>
                <td><input type="number" name="senior<?php echo $i; ?>"  value="<?php echo $senior=$row['senior']; ?>"   class="input" style="width:90px"   /></td>
                <td><input type="number" name="trans<?php echo $i; ?>"  value="<?php echo $trans=$row['trans']; ?>"   class="input" style="width:60px"   /></td>
                                <td><input type="number" name="leave<?php echo $i; ?>"  value="<?php echo $leaves=$row['leaves']; ?>"   class="input" style="width:60px"   /></td>
               
               
                  <td><input type="text" name="net<?php echo $i; ?>"   value="<?php echo ($salary+$resp+$others+$overtime+$deductions+$leaves+$senior+$trans+$research); ?>"   class="input" style="width:100px;background:#ee4a40; color:#fff"   /></td>

                   <td><input type="hidden" name="dept<?php echo $i; ?>" value="<?php echo $row['dept']; ?>" class="input"  /></td>
                                      <td><input type="hidden" name="matric<?php echo $i; ?>" value="<?php echo $row['matric']; ?>" class="input"  /></td>


               
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitUpdate" value="SAVE <?php echo $_GET['name']; ?> <?php echo date('Y'); ?> Voucher" style="background:#1188aa; color:#fff; padding:10px 10px" /></td>
            </tr>
            </table>
            </form>
        <?php
        	
		
        ?>
	</div>
</div>
</body>
</html>

