<?php

include '../includes/dbc.php';
/**
Simple multiple Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/multiple-insert-update-using-php-mysql-delete-multiple-records-using-checkboxes-in-php/
**/

$zone=$_GET['prog'];
$month=date('m');
$year=date('Y');
//////////////////////////////////////TAXABLE SALARIES SET ////////////////////////////////////////////////////

 $query= $con->query("SELECT * FROM special where stat='2'") or die(mysqli_error($con)); // Select from the table
$count 	= mysqli_num_rows($query); // Get the rows count


// Multipe insert case
if(isset($_POST['SubmitUpdate'])) {
	$date=date('d-m-Y');

	$cate=$_GET['cate'];
	$qu	=$con->query("SELECT COUNT(certi) as totcou FROM special  where stat='2'") or die(mysqli_error($con)); // Select from the table
	while($a=$qu->fetch_assoc()){
	$amtou=$a['totcou'];
		
	}

/////check if you have genearted befor
$check	=$con->query("delete FROM ratings where year='$year'   ") or die(mysqli_error($con)); // Select 

if(mysqli_num_rows($check)>0){
	/////check if you have genearted befor
$check	=$con->query("delete FROM ratings where year='$year'   ") or die(mysqli_error($con)); // Select 
	
	////////insert records into the daily table
	$qry12 =$con->query( "INSERT INTO ratings set prog='".$_POST["name$i"]."',year='$year',marks='".$_POST["tot$i"]."' ") or die(mysqli_error($con));
	
	
			
		echo "<script>alert('marks sheets successfully grenerated for $zone')</script>";
		echo '<meta http-equiv="Refresh" content="0; url=thank.php">';
		
		
}

/////else run qury
else {
	$amt=$amtou;
	if($amt > 0) {
		
	for($i=1; $i<=$amt; $i++) {
		
	
////////insert records into the daily table
	$qry12 =$con->query( "INSERT INTO ratings set prog='".$_POST["name$i"]."',year='$year',mark='".$_POST["tot$i"]."' ") or die(mysqli_error($con));
	
	
			
		echo "<script>alert('marks sheets successfully grenerated for $zone')</script>";
		echo '<meta http-equiv="Refresh" content="0; url=thank.php">';
		}
		
	}
	
}
		
	


}////////////else 
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
	font-size:18px;
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
<div class="as_wrapper" style="margin-top:-20px">
	<h3 style="text-align:center">Generating Pass marks Per Program for  <?php echo $zone; ?>  School Year</span> </a></h3>
      
	<div class="as_country_container">
	
        
        
      
            <form action="" method="post" >
            <table align="center" style="width:95%">
            <tr  style="font-size:14px; font-weight:bold; background:#1188aa; color:#fff; height:30px; width:90% ">
          
             
                <td></td>
                <td style="width:20%">Name</td>
                 
                
                    <td align="center">Pass Mark</td>
                 
                   
                
               
            </tr>
            <?php
                // Display the rows in inputs that can be editable90
                while($row = $query->fetch_assoc())	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                  
                 
                <td><input type="text" name="name<?php echo $i; ?>" value="<?php echo $row['prog_name']; ?>" style="width:250px" class="input" readonly  /></td>

               
                
  <td><input type="text" name="tot<?php echo $i; ?>"   value="<?php echo $row['tot']; ?>"   class="input" style="width:250px"  /></td>
  
      
            

               
            </tr>
            <?php
                }
            ?>
            
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitUpdate" value="GENERATE " style="background:#1188aa; color:#fff; padding:10px 10px" /></td>
            </tr>
            </table>
            </form>
        <?php
        	
		
        ?>
	</div>
</div>
</body>
</html>

