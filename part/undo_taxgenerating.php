<?php


include '../dbc.php';

/**
Simple multiple Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/multiple-insert-update-using-php-mysql-delete-multiple-records-using-checkboxes-in-php/
**/
@session_start();
$month=date('m');
	
$query 	= mysql_query("SELECT * FROM `tobe_paid` WHERE month='$month' ORDER BY id ASC"); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count
$o 	= mysql_query("SELECT * FROM `taxes` WHERE id='1' ") or die(mysql_error()); // Select from the table
while($rt=mysql_fetch_assoc($o)){
	 $cnps=$rt['cnsp'];
	 $crtv=$rt['crtv'];
	 $dct=$rt['dct'];
	 $ccf=$rt['ccf'];
	$cnps2=$rt['cnps2'];
	$mytax=$rt['tax'];
	
}

// Multipe insert case
if(isset($_POST['SubmitUpdate'])) {

		$month=date('m');
			$qry =mysql_query( "DELETE FROM tobe_paid where month='$month' ") or die(mysql_error()); // loop the mysql_query values to avoid more server loding time
				

	
		

		echo "<script>alert('SUCCESS .You have successfully Deleted all salaries FOR $mon. Thank You')</script>";
		echo '<meta http-equiv="Refresh" content="1; url=after_taxes.php">';

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
	width:100%;
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
	<h1 class="h1"><a href=""> YOU ARE ABOUT TO UNDO TAX DECLARATION FOR <span style="color:#f00"><?php echo date('F Y'); ?> </span> </a></h1>

	<div class="as_country_container">
	
        
        
      
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center" style="width:95%">
            <tr  style="font-size:14px; font-weight:bold; background:#1188aa; color:#fff; height:30px ">
            <td></td>
                <td align="center">Sno</td>
                <td align="center">Name</td>
                <td align="center">Salary</td>
                
                    <td align="center">Gross Salary</td>
                    <?php
                    $t	= mysql_query("SELECT  * from taxes ") or die(mysql_error()); // Select from the table
					$num=1;
	while($at=mysql_fetch_assoc($t)){
		$percen=$at['code'];
		

	}
	
		?>
                   <td align="center">CNSP <?php echo $cnps ?> %</td>
                <td align="center">CRTV <?php echo $crtv ?> %</td>
                <td align="center">DCT <?php echo $dct ?> %</td>
                <td align="center">CCF <?php echo $ccf ?> %</td>
                <td align="center">CNSP <?php echo $cnps2 ?> %</td>
                                <td align="center">TAXES</td>

	
                
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td>.</td>
                <td><input type="text" name="name<?php echo $i; ?>" value="<?php echo $row['name']; ?>" class="input" readonly  /></td>

                <td><input type="text" name="salary<?php echo $i; ?>" value="<?php echo $salary=$row['salary']; ?>" style="width:90px"  class="input" readonly  /></td>
  <td><input type="text" name="gross<?php echo $i; ?>"   value="<?php echo $gross=$row['gross'];; ?>"   class="input" style="width:100px;background:#ee4a40; color:#fff"   /></td>
            
           </td>  
                           <td><input type="text" name="cnps<?php echo $i; ?>" value="<?php echo round(($cnps/100)*$row['salary']); ?>" style="width:60px" class="input" readonly /></td>

             
                 <td><input type="text" name="crtv<?php echo $i; ?>" value="<?php echo round(($ctv/100)*$row['salary']); ?>" style="width:60px" class="input" readonly /></td>                 
                  <td><input type="text" name="dct<?php echo $i; ?>" value="<?php echo round(($dct/100)*$row['salary']); ?>" style="width:50px" class="input" readonly /></td>                
                 <td><input type="text" name="ccf<?php echo $i; ?>" value="<?php echo round(($ccf/100)*$row['salary']) ?>" style="width:50px" class="input" readonly /></td>
                  <td><input type="text" name="cnps2<?php echo $i; ?>" value="<?php echo round(($cnps2/100)*$row['salary']); ?>" style="width:60px" class="input" readonly /></td>
                                       <td><input type="text" name="taxes<?php echo $i; ?>" value="<?php echo $row['taxes']; ?>" readonly  style="width:60px; background:#f00; color:#fff" class="input"  /></td>

        
                   <td><input type="hidden" name="dept<?php echo $i; ?>" value="<?php echo $row['dept']; ?>" class="input"  /></td>
                                      <td><input type="hidden" name="matric<?php echo $i; ?>" value="<?php echo $row['matric']; ?>" class="input"  /></td>


               
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitUpdate" value="UNDO <?php echo date('F'); ?> DECLARATION"  onclick="return confirm('Are you Sure YOU want to undo salaries for this month for all saved data will be lost ')" style="background:#F00; color:#fff; padding:10px 10px" /></td>
            </tr>
            </table>
            </form>
        <?php
        	
		
        ?>
	</div>
</div>
</body>
</html>

