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

 $query= $con->query("SELECT * FROM gen_info  where year='$year'  order  by names") or die(mysqli_error($con)); // Select from the table
$count 	= mysqli_num_rows($query); // Get the rows count


// Multipe insert case
if(isset($_POST['SubmitUpdate'])) {
	$date=date('d-m-Y');

	$cate=$_GET['cate'];
	$qu	=$con->query("SELECT COUNT(names) as totcou FROM gen_info  where year='$year'  ") or die(mysqli_error($con)); // Select from the table
	while($a=$qu->fetch_assoc()){
	$amtou=$a['totcou'];
		
	}

/////check if you have genearted befor
$check	=$con->query("update FROM marks_sheet set orals='".$_POST["orals$i"]."',writ='".$_POST["writ$i"]."' where name='".$_POST["name$i"]."'    ") or die(mysqli_error($con)); // Select 

if(mysqli_num_rows($check)>0){
	/////check if you have genearted befor
//$check	=$con->query("delete FROM marks_sheet where year='$year' and prog='$zone'   ") or die(mysqli_error($con)); // Select 
	$_POST["tot$i"]=$_POST["orals$i"]+$_POST["writ$i"];
	////////insert records into the daily table
	$qry12 =$con->query( "INSERT INTO marks_sheet set name='".$_POST["name$i"]."',prog='$zone',year='$year',tot='".$_POST["tot$i"]."' ,matric='".$_POST["matric$i"]."',orals='".$_POST["orals$i"]."',writ='".$_POST["writ$i"]."'") or die(mysqli_error($con));
	
	/////check if you have genearted befor
$check	=$con->query("update FROM marks_sheet set orals='".$_POST["orals$i"]."',writ='".$_POST["writ$i"]."' where name='".$_POST["name$i"]."'    ") or die(mysqli_error($con)); // Select
			
		echo "<script>alert('marks sheets successfully grenerated for $zone')</script>";
		//echo '<meta http-equiv="Refresh" content="0; url=thank.php">';
		
		
}

/////else run qury
else {
	$amt=$amtou;
	if($amt > 0) {
		
	for($i=1; $i<=$amt; $i++) {
		
	
////////insert records into the daily table
	$_POST["tot$i"]=$_POST["orals$i"]+$_POST["writ$i"];
	////////insert records into the daily table
	$qry12 =$con->query( "INSERT INTO marks_sheet set name='".$_POST["name$i"]."',prog='$zone',year='$year',tot='".$_POST["tot$i"]."' ,matric='".$_POST["matric$i"]."',orals='".$_POST["orals$i"]."',writ='".$_POST["writ$i"]."'") or die(mysqli_error($con));
	
	
			
		echo "<script>alert('marks sheets successfully grenerated for $zone')</script>";
		//echo '<meta http-equiv="Refresh" content="0; url=thank.php">';
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
	            height:4000px;

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
	
     
	<div class="as_country_container">
	
        
        
      
            <form action="" method="post" >
            <table align="center" style="width:95%">
            <tr  style="font-size:14px; font-weight:bold; background:#1188aa; color:#fff; height:30px; width:90% ">
          
             
                <td></td>
                <td style="width:20%">Name</td>
                 
                <td align="center">Program</td>
                
                    <td align="center">Written/80</td>
                 
                    <td align="center">Orals/20</td>
                 
                   
                
               
            </tr>
            <?php
                // Display the rows in inputs that can be editable90
                while($row = $query->fetch_assoc())	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                  
                 
                <td><input type="text" name="name<?php echo $i; ?>" value="<?php echo $row['names']; ?>" style="width:250px" class="input" readonly  /></td>

                             
                <td><input type="text" name="cate<?php echo $i; ?>" value="<?php echo $row['choiceone']; ?>" s class="input" style="width:250px" readonly  /></td>
                
                
  <td><input type="text" name="writ<?php echo $i; ?>"   value="<?php 
  
 $q= $con->query("SELECT * FROM marks_sheet  where matric ='".$row['id']."' ") or die(mysqli_error($con)); 
 while($d=$q->fetch_assoc()){
 echo $d['writ'];
 }
 ?>"   class="input" style="width:80px"  /></td>
  
  <td><input type="text" name="orals<?php echo $i; ?>"   value="<?php 
  
 $q= $con->query("SELECT * FROM marks_sheet  where matric ='".$row['id']."' ") or die(mysqli_error($con)); 
 while($d=$q->fetch_assoc()){
 echo $d['orals'];
 }
 ?>"   class="input" style="width:80px"  /></td>
  
      
             <td><input type="hidden" name="matric<?php echo $i; ?>" value="<?php echo $row['id']; ?>" style="width:80px" class="input" readonly  /></td>

               
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

