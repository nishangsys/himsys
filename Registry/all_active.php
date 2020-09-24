<?php  include '../includes/dbc.php'; 

//////Name of school and other details
$c=$dbcon->query("SELECT * FROM `school` ") or die(mysqli_error($dbcon));
while($row=$c->fetch_assoc()){
	$school=$row['school'];
	$address=$row['twon'];
}


$level=$_POST['level'];
$sem=$_POST['sem'];
if($sem==1){
	$month="FIRST SEMSETER";
}
else {
	$month="SECOND SEMSETER";
}
$prog=$_POST['querystr'];
$year=$_POST['grade'];

	////get Current page number and Name 
			 $cl=$dbcon->query("SELECT  my_marks.matric as matric, courses.fname as fname, COUNT(code) as writtens FROM  my_marks,courses where  my_marks.matric=courses.matricule and  my_marks.levels=courses.levels and  my_marks.levels='$level'  
			 and  my_marks.dept='$prog' and  my_marks.ayear='$year' AND  my_marks.ca!='' 
			 GROUP BY  my_marks.matric  order by courses.fname ") or die(mysqli_error($dbcon));
			 $a=1;
	
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SPREAD SHEETS</title>

<style>
body {
  background: #fff; 
  font-size:10px;
  font-family:Arial, Helvetica, sans-serif;
  line-height:1.5;
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
table{
	margin:0px;
	padding:0px;
	line-height:1.5;
}

.box1{
	float:left;
	padding:20px 5px;
	border:1px solid#fff;
	width:15%;
	height:30px;
	
	
}


.box2{
	float:left;
	padding:20px 5px;
	border:1px solid#fff;
	width:80%;
	height:30px;
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
table{
	width:100%;
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
	width:auto ;
	 margin:0px;
	 padding:0px;
	  float:left;
	  height:15px;
	  text-align:center;
	  border:1px solid#000;	
	  font-size:12px;
	  padding:1px 0.5px;
	  
}
</style>

</head>


<body onload="window.print();">

<?php


					
?>
	<page size="A4" layout="landscape"  >
    
        <div class="main" style="height:691px; border:; outline:#FFF; font-size:11px; ";
		  >
          
           <div class="box1" >
           
           <img src="../img/logo.jpg" style="height:80px; margin-top:-25px" /> 
           </div>
           <div class="box2">
           <h1 style="margin-top:-20px"><?PHP  echo $school;?></h1>
           <h2><?php echo $prog;  ?> Level <?php echo $level;  ?> Active Students for <?php  echo $year; ?> School Year</h2>
           </div>
    
    
    
    <table class="table table-bordered" style="margin-top:30px; line-height:1.5">
    <thead>
      <tr>
        <th>#</th>
		 <th>Name</th>
       
        <th>Matricle</th>
        <th> Sem Courses With Marks</th>
       
      </tr>
    </thead>
    <tbody>
    <?php
	while($rowl=$cl->fetch_assoc()){
		?>
      <tr>
        <td style="font-size:10px"><?php echo $a++; ?></td>
		 <td style="font-size:10px"><?php  echo $rowl['fname']; ?></td>
        <td style="font-size:10px"><?php  echo $rowl['matric']; ?></td>
       <td style="font-size:10px"><?php  echo $rowl['writtens']; ?></td> 
    
        <?php } //// close $ks ?>
         
      </tr>
        
      </tr>
    </tbody>
  </table>


	</page>
    <div class="footer"></div>
    
    
    <div style="clear:both"></div>

</body>
</html>

