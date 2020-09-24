<?php  include '../includes/dbc.php'; 

//////Name of school and other details
$c=$dbcon->query("SELECT * FROM `school` ") or die(mysqli_error($dbcon));
while($row=$c->fetch_assoc()){
	$school=$row['school'];
	$address=$row['twon'];
}


 /////Number of pages 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $row['fname'];  ?> Transcript</title>

<style>
body {
  background: #fff; 
  font-size:10px;
  font-family:Arial, Helvetica, sans-serif;
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;  
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="landscape"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="landscape"] {
  width: 21cm;
  height: 14.8cm;  
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}

.main{
	width:1060px;
	height:760px;
	border:none;
	margin:auto auto;
	
	
}
.box1{
	float:left;
	padding:20px 5px;
	border:1px solid#000;
	width:300px;
	height:32px;
	
}
.box1_left{
	width:180px;
	height:40px;
	margin-top:-20px;
	float:left;
	margin-left:-5px;
	border:1px solid#000;
	text-align:center;
	
}

.semester_box{
	float:left;
	padding:0px 0px;
	border:1px solid#000;
	width:525px;
	height:245px;
	border-top:none;
	border-bottom:none;
	
}
.patition{
	float:left; 
	height:30px;
	margin:0px;
	text-align:center;
	
	 border:1px solid#000;
	  width:40px;
}


@media print {
 .footer {page-break-after: always;}
}
th,tr,table,td{
	border:1px solid#000;
	border-collapse:collapse;
}

/* ISO Paper Size */
@page {
  size: A4 landscape;
}

/* Size in mm */    
@page {
  size: 100mm 200mm landscape;
}

/* Size in inches */    
@page {
  size: 4in 6in landscape;
}
.boxes{
	width:50px;
	 margin:0px;
	 padding:0px;
	  float:left;
	 
}
</style>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
</head>


<body onload="window.print();">

<?php


$level=$_POST['level'];
$sem=$_POST['sem'];
$prog=$_POST['querystr'];
$year=$_POST['grade'];

	////get Current page number and Name 
			 $cl=$dbcon->query("SELECT * FROM  my_marks where levels='$level' and sem='$sem' and dept='$prog' and ayear='$year' GROUP BY matric  order by matric ") or die(mysqli_error($dbcon));
			 $a=1;
	//	echo	 $ddf=$cl->num_rows;

	 $p_names=$rowl['name'];
	 $cur_pnum=$rowl['num'];

?>
	<page size="A4" layout="landscape"  >
        <div class="main" style="height:691px; border:; outline:#FFF; font-size:11px; ";
		  >
           <div style="clear:both; margin-top:40px; height:30px; background:#03C"></div>
    
    
    
    
    <table class="table table-bordered" style="margin-top:30px">
    <thead>
      <tr>
        <th>#</th>
        <th>Matricle</th>
        <?php
		$cls=$dbcon->query("SELECT * FROM  my_marks where levels='$level' and sem='$sem' and dept='$prog' and ayear='$year' GROUP BY code  order by code ") or die(mysqli_error($dbcon));
		
	while($rows=$cls->fetch_assoc()){
		?>
	
        <th  ><?php echo $rows['code'];?></th>
        <?php } ?>
         
      </tr>
    </thead>
    <tbody>
    <?php
	while($rowl=$cl->fetch_assoc()){
		?>
      <tr>
        <td><?php echo $a++; ?></td>
        <td><?php  echo $rowl['matric']; ?></td>
        
        <!-----First Load all the course---->
        
        <?php
		$cls=$dbcon->query("SELECT * FROM  my_marks where levels='$level' and sem='$sem' and dept='$prog' and ayear='$year' GROUP BY code  order by code ") or die(mysqli_error($dbcon));
		
	while($rows=$cls->fetch_assoc()){
		?>
	
        <td style="font-size:9px; line-height:1; padding:0px 0px"><span style="font-weight:bold">
		
<!----Select from marks where tbl where matric equals to this and courses code is equals to this --------->
 <?php
		$kl=$dbcon->query("SELECT * FROM  my_marks where levels='$level' and sem='$sem' and matric='".$rowl['matric']."' and  ayear='$year' and code='".$rows['code']."' ") or die(mysqli_error($dbcon));
		
		
	while($ks=$kl->fetch_assoc()){
		?>
       	

<!----Select from marks where tbl where matric equals to this and courses code is equals to this --------->		
		
		<?php $rows['code'];?>
        
      <span style=" font-weight:bold; clear:both" > Ca| Exam| Tot</span><br />
    <?php echo $ks['ca']; ?>| <?php echo $ks['exam']; ?>|<?php echo $ks['ca']+$ks['exam']; ?></td>
        
                <!-----First Load all the course---->

        <?php }} //// close $ks ?>
         
      </tr>
        
      </tr>
     <?php } // close $rowl=$cl->fetch_assoc());?>
    </tbody>
  </table>


	</page>
    
    
    
    <div style="clear:both"></div>

</body>
</html>
