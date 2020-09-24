<?php


include '../includes/dbc.php';

/**
Simple multiple Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/multiple-insert-update-using-php-mysql-delete-multiple-Registry-using-checkboxes-in-php/
**/
@session_start();
	 //////////select academic year//////////////
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $ayear=$bu['year'];
	 $year=$bu['extra'];

	 
	 $year2=$bu['extra1'];
	
}


 //////////select academic year//////////////
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	  $fyear=$bu['extra']-1; 
	 $syear=$bu['extra2']-1;
}
 $thyear=$fyear."/".$syear;
 
	
$query = $dbcon->query("SELECT * FROM `courses` where  departmet='".$_GET['dept']."' and levels='".$_GET['level']."' and db1='$thyear' order by fname ") or die(mysqli_error($dbcon)); // Select from the table
echo $count = $query->num_rows ; // Get the rows count


	


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
	background:url(loader.gif);
	
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


	<div class="as_country_container">
	
        
        
      
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center" style="width:95%">
            <tr  style="font-size:14px; font-weight:bold; background:#1188aa; color:#fff; height:30px ">
            <td></td>
                <td align="center">Sno</td>
               
                <td align="center">Name</td>
                <td align="center">Matricle</td>
                
                    <td align="center">Level</td>
                    <td align="center">School Year</td>
                  

	           
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = $query->fetch_assoc()){
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><?php echo $num++; ?></td>
                <td><input type="text" name="name<?php echo $i; ?>" value="<?php  echo 	$row['fname'] ?>" style="width:200px" /></td>

                <td><input type="text" name="matricule<?php echo $i; ?>" value="<?php echo $row['matricule'];  ?>" class="input" readonly  /></td>
                <td><input type="text" name="levels<?php echo $i; ?>" value="<?php echo $row['levels'];  ?>" class="input" readonly  /></td>
                                
  <td><input type="text" name="ayear<?php echo $i; ?>" value="<?php echo $row['db1'];  ?>" class="input" readonly  /></td>
                <td><input type="text"   value="<?php 
				$leve=$row['levels']+100;
			 	$dg=$dbcon->query("SELECT * FROM courses where db1='".$ayear."' AND levels='".$leve."' and fname='".$row['fname']."' ") or die(mysqli_error($dbcon));
		
				$cou=$dg->num_rows;
			
				if($cou>0){
				$checks=$dbcon->query("UPDATE  courses SET fname='".$row['fname']."',c102='$year2',cxx2='".$row['cxx2']."',cxx1='".$row['cxx1']."' ,cxx4='".$row['cxx4']."',cxx7='".$row['cxx7']."',c110='".$row['c110']."'  ,sex='".$row['sex']."', departmet='".$row['departmet']."' WHERE matricule='".$row['matricule']."' AND levels='".$leve."' AND db1='$ayear'    ") or die(mysqli_error($dbcon));	
					if($checks){
					echo "UPDATED";
				}
				
				
				}
				else {
					$leve=$row['levels']+100;
				
					 $check=$dbcon->query("INSERT INTO  courses SET fname='".$row['fname']."',matricule='".$row['matricule']."',levels='".$leve."',db1='$ayear',c101='$year',c102='$year2',cxx2='".$row['cxx2']."',cxx1='".$row['cxx1']."' ,cxx4='".$row['cxx4']."',cxx7='".$row['cxx7']."',c110='".$row['c110']."'  ,sex='".$row['sex']."', departmet='".$row['departmet']."',barcode='123' ") or die(mysqli_error($dbcon));
					
				
				}
				
				if($check){
					echo "UPDATED";
				}
				?>" style="width:300px"  class="input" readonly  /></td>
                
                
                 </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
               </td>
            </tr>
            </table>
            </form>
       
	</div>
   
</div>
</body>
</html>

