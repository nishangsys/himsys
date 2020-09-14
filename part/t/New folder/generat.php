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
					  $taxable_crtv= $att['amt'];
				 }
				 
				 $sall=mysql_query("SELECT * from taxable where id='2' ") or die(mysql_error());
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
			 cnps='".$_POST["cnps$i"]."', cnps2='".$_POST["cnps2$i"]."',crtv='".$_POST["crtv$i"]."',net='".$_POST["net$i"]."',thismonth='$mon',others_exp='".$_POST["taxes$i"]."',
month='$month',year= '$year',irpp='".$_POST["dct$i"]."',position='".$_POST["position$i"]."',rents='".$_POST["rents$i"]."',pit='".$_POST["pit$i"]."'
,others='".$_POST["others$i"]."',	resp='".$_POST["resp$i"]."',overtime='".$_POST["overtime$i"]."',nhlf='".$_POST["nhlf$i"]."' ,
leaves='".$_POST["leaves$i"]."',trans='".$_POST["trans$i"]."',research='".$_POST["research$i"]."',senior='".$_POST["senior$i"]."' ") or die(mysql_error()); // loop the mysql_query values to avoid more server loding time
				

	
		if($qry){

		echo "<script>alert('SALARIES successfully Created FOR $mon. Thank You')</script>";
		echo '<meta http-equiv="Refresh" content="1; url=generating.php">';
		}
		else {
					echo "<script>alert('ERROR IN Genr=eartion  FOR $mon. Thank You')</script>";

		}

	}
	
}}
		}
	}
}


?>