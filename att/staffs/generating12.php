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
	$tax=$rt['taxes'];
	$nhlf=$rt['new1'];
	
}
//////////////////////////////////////TAXABLE SALARIES SET ////////////////////////////////////////////////////

 $sall=mysql_query("SELECT * from taxable where id='1' ") or die(mysql_error());
				 while($att=mysql_fetch_assoc($sall)){
					 $taxable_salary= $att['amt'];
				 }
				 

// Multipe insert case
if(isset($_POST['SubmitUpdate'])) {
	$month=date('m');
	$year=date('Y');
	$qu	= mysql_query("SELECT COUNT(name) as totcou FROM `tobe_paid` where month='$month' and year='$year' ") or die(mysql_error()); // Select from the table
	while($a=mysql_fetch_assoc($qu)){
		echo $amtou=$a['totcou'];
		
	}

	$amt=$amtou;
	if($amt > 0) {
		
		//***********check if product exists
		for($i=1; $i<=$amt; $i++) {
	  $check="SELECT * from payslips where month='$month' ";
		$run=mysql_query($check) or die(mysql_error());
		if(mysql_num_rows($run)>0){
			
				for($i=1; $i<=$amt; $i++) {
			$year=date('Y');
			$date=date('d-m-Y');
			$month=date('m');
			

		

		echo "<script>alert('ERROR. You have already generated for this month')</script>";
		echo '<meta http-equiv="Refresh" content="1; url=generating.php">';

			
		}
				
		}
		
		else {
			
		
		$year=date('Y');
		$_POST = array_map("ucwords", $_POST);
	
		for($i=1; $i<=$amt; $i++) {
			$year=date('Y');
			$date=date('d-m-Y');
			$month=date('m');
			
	for($i=1; $i<=$amt; $i++) {
		$mon=date('F');
			$qry =mysql_query( "INSERT INTO payslips set name='".$_POST["name$i"]."',matric= '".$_POST["matric$i"]."',dept= '".$_POST["dept$i"]."',salary='".$_POST["salary$i"]."',ccf='".$_POST["ccf$i"]."',
			 cnps='".$_POST["cnps$i"]."', cnps2='".$_POST["cnps2$i"]."',crtv='".$_POST["crtv$i"]."',net='".$_POST["net$i"]."',thismonth='$mon',taxes='".$_POST["taxes$i"]."',
month='$month',year= '$year',irpp='".$_POST["dct$i"]."',position='".$_POST["position$i"]."',rents='".$_POST["rents$i"]."',pit='".$_POST["pit$i"]."'
,others='".$_POST["others$i"]."',	resp='".$_POST["resp$i"]."',overtime='".$_POST["overtime$i"]."',nhlf='".$_POST["nhlf$i"]."'  ") or die(mysql_error()); // loop the mysql_query values to avoid more server loding time
				

	
		

		echo "<script>alert('SALARIES successfully Created FOR $mon. Thank You')</script>";
		echo '<meta http-equiv="Refresh" content="1; url=generating.php">';

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
	<h1 class="h1"><a href="">Generating Payslip for <span style="color:#f00"><?php echo date('F Y'); ?> </span> </a></h1>
        <h3 style="color:#f00; font-size:16px">Please make sure no comma(,) ,full stops(.) and CFA are used</h3>

	<div class="as_country_container">
	
        
        
      
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center" style="width:95%">
            <tr  style="font-size:14px; font-weight:bold; background:#1188aa; color:#fff; height:30px ">
            <td></td>
                <td align="center">Sno</td>
                <td align="center">Name</td>
                <td align="center">Salary</td>
                
                    <td align="center">Net Salary</td>
                    <?php
                    $t	= mysql_query("SELECT  * from taxes ") or die(mysql_error()); // Select from the table
					$num=1;
	while($at=mysql_fetch_assoc($t)){
		$percen=$at['code'];
		

	}
	
		?>
                   <td align="center">CNSP <?php echo $cnps ?> %</td>
                <td align="center">CRTV <?php echo $crtv ?> %</td>
                <td align="center">IRPP <?php echo $dct ?> %</td>
                <td align="center">Counncil tax<br> <?php echo $ccf ?> %</td>
                <td align="center">CNSP <?php echo $cnps2 ?> %</td>
                <td align="center">PIT <?php echo $tax ?> %</td>
                                <td align="center">NHL Funds <?php echo $tax ?> %</td>

                                <td align="center">OTHER DEDUCTIONS</td>
                                                                <td align="center"></td>

                                

	
                
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><?php echo $num++; ?></td>
                <td><input type="text" name="name<?php echo $i; ?>" value="<?php echo $row['name']; ?>" class="input" readonly  /></td>

                <td><input type="text" name="salary<?php echo $i; ?>" value="<?php echo $salary=$row['salary']; ?>" style="width:90px"  class="input" readonly  /></td>
  <td><input type="text" name="net<?php echo $i; ?>"   value="<?php echo $net=$row['net'];; ?>"   class="input" style="width:100px;background:#ee4a40; color:#fff"   /></td>
            
           </td>  
                           <td><input type="text" name="cnps<?php echo $i; ?>" value="<?php echo round(($cnps/100)*$row['salary']); ?>" style="width:60px" class="input" readonly /></td>

             <!------------------------CRTV TAXWS---------------------------->
             
                 <td><input type="text" name="crtv<?php echo $i; ?>" value="<?php
				 
				 $salier=$row['salary'];
				 if($salier<$taxable_salary){
					 echo 0;
				 }
				 else if ($salier>$taxable_salary && $salier<=99900){
					 echo 750;
				 }
				  else if ($salier>$taxable_salary && $salier<=200000){
					 echo 1950;
				 }
				 
				 else if ($salier>$taxable_salary && $salier<=310000){
					 echo 3250;
				 }
				 else if ($salier>$taxable_salary && $salier<=400100)
                {
					 echo 4550;
				 }
				  else if ($salier>$taxable_salary && $salier<=500000)
                {
					 echo 5850;
				 }
				 
				  else if ($salier>$taxable_salary && $salier<=655200
)
                {
					 echo 7150;
				 }
				
				 
				 
				 
				 
				 
				 
				 ?>" style="width:60px" class="input" readonly /></td>                 
                  <td><input type="text" name="dct<?php echo $i; ?>" value="<?php echo (($dct/100)*$row['salary']); ?>" style="width:50px" class="input" readonly /></td>                
                 <td><input type="text" name="ccf<?php echo $i; ?>" value="<?php echo (($ccf/100)*$row['salary']) ?>" style="width:50px" class="input" readonly /></td>
                  <td><input type="text" name="cnps2<?php echo $i; ?>" value="<?php echo (($cnps2/100)*$row['salary']); ?>" style="width:60px" class="input" readonly /></td>
                                   <td><input type="text" name="pit<?php echo $i; ?>" value="<?php echo (($tax/100)*$row['salary']); ?>" style="width:60px" class="input" readonly /></td>
                                     <td><input type="text" name="nhlf<?php echo $i; ?>" value="<?php echo (($nhlf/100)*$row['salary']); ?>" style="width:60px" class="input" readonly /></td>

                   
                                       <td><input type="text" name="taxes<?php echo $i; ?>" value="<?php echo $row['taxes']; ?>" readonly  style="width:60px; background:#f00; color:#fff" class="input"  /></td>

        
                   <td><input type="hidden" name="dept<?php echo $i; ?>" value="<?php echo $row['dept']; ?>" class="input"  /></td>
                                      <td><input type="hidden" name="matric<?php echo $i; ?>" value="<?php echo $row['matric']; ?>" class="input"  /></td>

                                      <td><input type="hidden" name="position<?php echo $i; ?>" value="<?php echo $row['position']; ?>" class="input"  /></td>
 
                   <td><input type="hidden" name="others<?php echo $i; ?>" value="<?php echo $row['others']; ?>" class="input"  /></td>
                                      <td><input type="hidden" name="resp<?php echo $i; ?>" value="<?php echo $row['resp']; ?>" class="input"   /></td>

                                      <td><input type="hidden" name="overtime<?php echo $i; ?>" value="<?php echo $row['overtime']; ?>" class="input"  /></td>
                                      <td><input type="hidden" name="rents<?php echo $i; ?>" value="<?php echo $row['rents']; ?>" class="input"  /></td>

               
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitUpdate" value="GENERATE PAYSLIP FOR <?php echo date('F'); ?> " style="background:#1188aa; color:#fff; padding:10px 10px" /></td>
            </tr>
            </table>
            </form>
        <?php
        	
		
        ?>
	</div>
</div>
</body>
</html>

