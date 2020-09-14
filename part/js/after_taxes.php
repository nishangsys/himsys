<?php


include '../dbc.php';

/**
Simple multiple Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/multiple-insert-update-using-php-mysql-delete-multiple-records-using-checkboxes-in-php/
**/
@session_start();
$month=date('m');
	
$query 	= mysql_query("SELECT * FROM `voucher` where  month='$month' ORDER BY id ASC"); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count
$o 	= mysql_query("SELECT * FROM `taxes` WHERE id='1' ") or die(mysql_error()); // Select from the table
while($rt=mysql_fetch_assoc($o)){
	 $cnps=$rt['cnsp'];
	 $crtv=$rt['crtv'];
	 $dct=$rt['dct'];
	 $ccf=$rt['ccf'];
	$cnps2=$rt['cnps2'];
	$mytax=$rt['taxes'];
	$new1=$rt['new1'];
	//$new2=$rt['new2'];
	//$new3=$rt['new3'];
	
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
	$qu	= mysql_query("SELECT COUNT(name) as totcou FROM `voucher` where month='$month' and year='$year' ") or die(mysql_error()); // Select from the table
	while($a=mysql_fetch_assoc($qu)){
		echo $amtou=$a['totcou'];
		
	}

	$amt=$amtou;
	if($amt > 0) {
		
		
		//***********check if product exists
		for($i=1; $i<=$amt; $i++) {
	  $check=mysql_query("DELETE from tobe_paid where month='$month' and year='$year' ") or die(mysql_error());
		
			
		
		$year=date('Y');
		$_POST = array_map("ucwords", $_POST);
	
		for($i=1; $i<=$amt; $i++) {
			$year=date('Y');
			$date=date('d-m-Y');
			$month=date('m');
			
	for($i=1; $i<=$amt; $i++) {
	

		$_POST["net$i"]=$_POST["gross$i"]-($_POST["cnps$i"]+$_POST["taxes$i"]+$_POST["crtv+$i"]+$_POST["ccf$i"]+$_POST["dct$i"]);
			$qry =mysql_query( "INSERT INTO tobe_paid set name='".$_POST["name$i"]."',matric= '".$_POST["matric$i"]."',dept= '".$_POST["dept$i"]."',salary='".$_POST["salary$i"]."',
			 cnps='".$_POST["cnps$i"]."', cnps2='".$_POST["cnps2$i"]."',crtv='".$_POST["crtv$i"]."',net='".$_POST["net$i"]."',taxes='".$_POST["taxes$i"]."',
month='$month',year= '$year',irpp='".$_POST["dct$i"]."',position='".$_POST["position$i"]."',rents='".$_POST["rents$i"]."',pit='".$_POST["pit$i"]."'
,others='".$_POST["others$i"]."',	resp='".$_POST["resp$i"]."',research='".$_POST["research$i"]."',overtime='".$_POST["overtime$i"]."',nhlf='".$_POST["nhlf$i"]."',
leaves='".$_POST["leaves$i"]."',trans='".$_POST["trans$i"]."',senior='".$_POST["senior$i"]."',pre_paid='".$_POST["loan$i"]."',other_exp='".$_POST["deducts$i"]."' ") or die(mysql_error()); // loop the mysql_query values to avoid more server loding time
				

	
	$up_load=mysql_query("UPDATE loans set paidsofar='".$_POST["paidsofar$i"]."',loan_cost='".$_POST["owed$i"]."' WHERE id='".$_POST["id$i"]."'") or die(mysql_error());	

		echo "<script>alert('Deductions successfully Created. Thank You')</script>";
		echo '<meta http-equiv="Refresh" content="1; url=generating.php">';

	}
	
}}
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
	<h1 class="h1"><a href="">Tax Declaration for<span style="color:#f00">  <?php echo date('F Y'); ?> </span> </a></h1>
        <h3 style="color:#f00; font-size:16px">Please make sure no comma(,) ,full stops(.) and CFA are used</h3>

	<div class="as_country_container">
	
        
        
      
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center" style="width:95%">
            <tr  style="font-size:14px; font-weight:bold; background:#1188aa; color:#fff; height:30px ">
            <td></td>
                <td align="center">Sno</td>
                <td></td>
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
                <td align="center">CRTV (scale)</td>
                <td align="center">IRPP (scale) </td>
                <td align="center">CNSP <?php echo $cnps2 ?> %</td>
                                <td align="center">CCF <?php echo 1; ?> %</td>


                                <td align="center">SANCTIONS</td>

	         <td align="center">LOAN<BR>REPAYMT</td>
                
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><?php echo $num++; ?></td>
                <td><input type="hidden" name="taxtopay<?php echo $i; ?>" value="<?php  /////////////////////check if this person should pay taxes if ans=2
				 $sk=mysql_query("SELECT * from staffs where name='".$row['name']."' and matric='".$row['matric']."'  ") or die(mysql_error());
				 while($atk=mysql_fetch_assoc($sk)){
					echo $pay= $atk['paytax'];
				 }; ?>"  /></td>

                <td><input type="text" name="name<?php echo $i; ?>" value="<?php echo $row['name']; ?>" class="input" readonly  /></td>
                
                                

                <td><input type="text" name="salary<?php echo $i; ?>" value="<?php echo $salary=$row['salary']; ?>" style="width:90px"  class="input" readonly  /></td>
                  <td><input type="text" name="gross<?php echo $i; ?>"   value="<?php echo $gross=$row['gross']; ?>"   class="input" style="width:60px;background:#ee4a40; color:#fff"   /></td>
            
           </td>  
                           <td><input type="text" name="cnps<?php echo $i; ?>"
                           
                            value="<?php 
							  //if the person is not top pay tax the value is 1
				  if($pay==1){
					  echo 0;
				  }
				   //else calculate the tax
				  else {
					  
							
							 $sall=mysql_query("SELECT * from staffs where matric='".$row['matric']."' ") or die(mysql_error());
				 while($m=mysql_fetch_assoc($sall)){
					 $ma= $m['cnps'];
					 $per=$cnps/100;
					 
					
					
					  if( $ma==0 && $pay!=1){
						 echo 0;
					 }
					 
					 else {
						  $cv=(($per)*$row['salary']);
						  
						echo sprintf('%0.1f', $cv); 
						 
					 }
				 }							
				  }
				  
				  ?>" style="width:60px" class="input" readonly /></td>

             
                 <td><input type="text" name="crtv<?php echo $i; ?>" value="<?php
				 $salier=$row['salary'];
				    //if the person is not top pay tax the value is 1
				  if($pay==1){
					  echo 0;
				  }
				  elseif ($ma!='2'){
					  echo 0;
				  }
				  
				  //else calculate the tax
				  else {
					  
					   if($salier<$taxable_crtv && $pay!=1){
					 echo 0;
				 }
				 else if ($salier>$taxable_crtv && $salier<=99900){
					 echo 750;
				 }
				  else if ($salier>$taxable_crtv && $salier<=200000){
					 echo 1950;
				 }
				 
				 else if ($salier>$taxable_crtv && $salier<=310000){
					 echo 3250;
				 }
				 else if ($salier>$taxable_crtv && $salier<=400100)
                {
					 echo 4550;
				 }
				  else if ($salier>$taxable_crtv && $salier<=500000)
                {
					 echo 5850;
				 }
				 
				  else if ($salier>$taxable_crtv && $salier<=655200
)
                {
					 echo 7150;
				 }	
				  }
				 
				 ?>" style="width:60px" class="input" readonly /></td>                 
                 
                 
                 
                 
                  <td><input type="text" name="dct<?php echo $i; ?>"value="<?php
				 
				 $salier=$row['salary'];
				 //if the person is not top pay tax the value is 1
				  if($pay==1 ){
						 echo 0;
					 }
					//else calculate the tax 
				else
				{ 
				
				if($salier<$taxable_salary){
					 echo 0;
				 }
				  elseif ($ma!='2'){
					  echo 0;
				  }
				 else if ($salier>$taxable_salary && $salier<=310000){
					$one=$salier*0.7 	;
					$two=$salier*0.028	;
					//get the value from the principal and round it
					  $ahs1=($one -  $two)-41667;
					  //get the value for CAC and round it
					$ahs1=round($ahs1 *0.1);
					$per=round($ahs1*10/100);
					//ADD CAC+PRINCIPAL=1RPP
					echo $irpp=$ahs1+$per;

				 }
				  
				   else if ($salier>$taxable_salary && $salier<=429000){
					   $one1=($salier-310000);
					
					 $sec=(16693 +($one1) *0.7*0.15);
					 $per2=round($sec*10/100);
					echo $irpp2=$sec+$per2;
					
				 }
				   else if ($salier>$taxable_salary && $salier<= 667000){
					   $one3=($salier-429000);
					
					 $third=(29188 +($one3) *0.7*0.25);
					 $per3=round($third*10/100);
					echo $irpp3=$third+$per3;
					
				 }
				  
				}
				 ?>" style="width:60px" class="input" readonly /></td>                  
                
                
                  <td><input type="text" name="cnps2<?php echo $i; ?>" value="<?php
				  //if the person is not top pay tax the value is 1
				  if($pay==1){
					   echo 0;
				  }
				   elseif ($ma!='2'){
					  echo 0;
				  }
				  
				  //else calculate the tax
				  else {
				  	 $sall=mysql_query("SELECT * from staffs where matric='".$row['matric']."' ") or die(mysql_error());
				 while($m=mysql_fetch_assoc($sall)){
					 $ma= $m['cnps'];
					 if( $ma==0){
						 echo 0;
					 }
					 
					 else {
						  $cv2=(($cnps2/100)*$row['salary']);
						 echo sprintf('%0.1f', $cv2);
					 }
				 }	
				  }//close else
				   ?>" style="width:60px" class="input" readonly /></td>
                   
                      <td><input type="text" name="ccf<?php echo $i; ?>" value="<?php 
					  
					    //if the person is not top pay tax the value is 1
				  if($pay==1){
					  echo 0;
				  }
				   elseif ($ma!='2'){
					  echo 0;
				  }
				  
				  //else calculate the tax
				  else {
				  $salier=$row['salary'];
				 if($salier<$taxable_salary){
					 echo 0;
				 }
				 else if ($salier>$taxable_salary ){
				echo $ccff= round($salier/100);
				

				 }
				
				  }
				  ?>" style="width:60px" class="input" readonly /></td>

                   <td><input type="text" name="deducts<?php echo $i; ?>" style="width:60px" value="<?php 
				   
	$sk=mysql_query("SELECT SUM(loan) from loans where name='".$row['name']."' and matric='".$row['matric']."' and month='$month' and reason!=''  ") or die(mysql_error());
				 while($atk=mysql_fetch_assoc($sk)){
					echo $others= $atk['SUM(loan)'];
				 }; ?> 			   
				   
				   "  class="input"  /></td>
                                
                                
                                
                                
                                
                                
                                 <td><input type="text" name="loan<?php echo $i; ?>" style="width:60px; background:#FFC" value="<?php 
				   
	$sk=mysql_query("SELECT * from loans where reason=''  and name='".$row['name']."'  and loan_cost>0  ") or die(mysql_error());
				 while($atk=mysql_fetch_assoc($sk)){
			$chec=$atk['loan_cost']/$atk['monthin'];
					
	$topay= ($atk['loan_cost']-$atk['amt_paidin']);
		$months=date('m');
		$startmonth=$atk['startmonth'];
		$syear=$atk['syear'];
		$loancost=$atk['loan_cost'];
	

		$year=date('Y');
		$id=$atk['id'];
		$status=$atk['permit'];
	    $allowed=$months."/".$year ;
		$paidsofar=$atk['paidsofar'];
		 $totpaid=($atk['loan']+$atk['pertc_amt'])-$atk['loan_cost'];
		$pm=$atk['pmonth'];
		if($status==2 and $atk['pmonth']==$allowed ){
			echo 0;
		}
		else if($months>$startmonth && $syear==$year){ 
		echo  $atk['amt_paidin'];
	}	
	
	else if($months>$startmonth && $syear==$year){ 
		echo 0;
	}
	
	else if($months<$startmonth and $year>$syear){
		echo  $atk['amt_paidin'];
	}
	
	else {
echo  $atk['amt_paidin'];	}; 
				 }?> 			   
				   
				   "  class="input"  /></td>
              


        
                   <td><input type="hidden" name="dept<?php echo $i; ?>" value="<?php echo $row['dept']; ?>" class="input"  /></td>
                   
                          <td><input type="hidden" name="owed<?php echo $i; ?>" value="<?php
	if($status==2 and $pm==$allowed ){
		echo $loancost;
		
	}
	else {		
						  echo $topay;
	}
					
						    ?>" class="input"  /></td>
                          
                           <td><input type="hidden" name="paidsofar<?php echo $i; ?>" value="<?php
				$sk=mysql_query("SELECT * from loans where reason=''  and name='".$row['name']."'  and loan_cost>0  ") or die(mysql_error());
				 while($atk=mysql_fetch_assoc($sk)){
					  if($status==2){
						 $check=0;
					 }
					 else {
						   $check=$chec;
					 }
					echo  $paidsofar=$atk['paidsofar']+$check;
				 }
				?>" class="input"  /></td>
                          
                <td><input type="hidden" name="id<?php echo $i; ?>" value="<?php
				$sk=mysql_query("SELECT * from loans where reason=''  and name='".$row['name']."'  and loan_cost>0  ") or die(mysql_error());
				 while($atk=mysql_fetch_assoc($sk)){
					echo  $id=$atk['id'];
				 }
				?>" class="input"  /></td>            
                                             <td><input type="hidden" name="matric<?php echo $i; ?>" value="<?php echo $row['matric']; ?>" class="input"  /></td>

                                      <td><input type="hidden" name="position<?php echo $i; ?>" value="<?php echo $row['position']; ?>" class="input"  /></td>




                                      <td><input type="hidden" name="resp<?php echo $i; ?>" value="<?php echo $row['resp']; ?>" class="input"   /></td>

                                      <td><input type="hidden" name="overtime<?php echo $i; ?>" value="<?php echo $row['overtime']; ?>" class="input"  /></td>
                                      <td><input type="hidden" name="rents<?php echo $i; ?>" value="<?php echo $row['deductions']; ?>" class="input"  /></td>
                                      
                                       <td><input type="hidden" name="leaves<?php echo $i; ?>" value="<?php echo $row['leaves']; ?>" class="input"   /></td>
                                         <td><input type="hidden" name="research<?php echo $i; ?>" value="<?php echo $row['research']; ?>" class="input"   /></td>

                                      <td><input type="hidden" name="trans<?php echo $i; ?>" value="<?php echo $row['trans']; ?>" class="input"  /></td>
                                      <td><input type="hidden" name="senior<?php echo $i; ?>" value="<?php echo $row['senior']; ?>" class="input"  /></td>

               
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitUpdate" value="DECLARE TAXES FOR <?php echo date('F'); ?> " style="background:#1188aa; color:#fff; padding:10px 10px" /></td>
            </tr>
            </table>
            </form>
        <?php
        	
		
        ?>
	</div>
</div>
</body>
</html>

