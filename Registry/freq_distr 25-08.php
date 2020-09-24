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

$a=$dbcon->query("SELECT * FROM options where name='".$prog."' ") or die(mysqli_error($dbcon));

		
	while($b=$a->fetch_assoc()){
		 $prog_id=$b['id'];
	}
	
	$a=$dbcon->query("SELECT * FROM years where name='".$year."' ") or die(mysqli_error($dbcon));		
	while($b=$a->fetch_assoc()){
		 $year_id=$b['id'];
	}

$a=$dbcon->query("SELECT * FROM level where name='".$level."' ") or die(mysqli_error($dbcon));		
	while($b=$a->fetch_assoc()){
		 $level_id=$b['id'];
	}
	////get Current page number and Name 
			// $cl=$dbcon->query("SELECT * FROM  my_marks where levels='$level' and sem='$sem' and dept='$prog' and ayear='$year' AND ca!='' GROUP BY code  order by code") or die(mysqli_error($dbcon));
			
			$cl=$dbcon->query("SELECT * FROM  my_marks,subject  where  my_marks.code=subject.subject and  my_marks.dept=subject.department and  my_marks.levels='$level' and  my_marks.sem='$sem' and  my_marks.dept='$prog' and  my_marks.ayear='$year' and  my_marks.ca!=''  GROUP BY  my_marks.code  order by  my_marks.code") or die(mysqli_error($dbcon));
			$gh=$cl->num_rows;
			 $a=1;
	
	
	///////check if this program grading system has been set
$cd=$dbcon->query("SELECT * FROM `segments` WHERE dept='".$prog."'  ") or die(mysqli_error($dbcon));
    $set=$cd->num_rows;
 if($set<1){
	 echo "<script>alert('Sorry Grading system for $prog has not been Set')</script>";
	 
 }
 else {
  ////while loop to get department id from sector tbl			
				while($nn=$cd->fetch_assoc()){
					 $dep_id=$nn['sector'];
 					}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FREQUENCY DISTRIBUTION</title>


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
.f1{
	float:left;
	padding:5px 5px;
	text-align:left;
	width:20%;
	font-size:14px;
}
.f2{
	float:left;
	padding:5px 5px;
	text-align:left;
	width:98%;
	font-size:14px;
}



@media print {
 .footer {page-break-after: always;}
}
table{
	width:100%;
	line-height:2.5;
}
th,tr,table,td{
	border:1px solid#000;
	border-collapse:collapse;
	padding:0px 5px;
}
.gg{
	font-weight:bold;
	font-family:"Arial Black", Gadget, sans-serif;
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


<body >
<!--
<body onload="window.print();">-->
<?php


					
?>
	<page size="A4" layout="landscape"  >
    
        <div class="main" style="height:691px; border:; outline:#FFF; font-size:11px; ";
		  >
          
           <div class="box1" >
           
           <img src="../img/logo.jpg" style="height:80px; margin-top:-25px" /> 
           </div>
           <div class="box2">
           <h1 style="margin-top:-20px; font-size:18px"><?PHP  echo $school;?></h1>
           <h2 style="margin-top:0px; font-size:14px"><?php echo $prog;  ?> Level <?php echo $level;  ?> <?PHP echo $month; ?> Frequency Distribution Performance <?php  echo $year; ?> School Year</h2>
           </div>
    
    
    
    <table class="table table-bordered" style="margin-top:30px;">
    <thead>
    <tr>
    
     <?php
		 //////Select all Grades patterning to this Grading System
		$cls=$dbcon->query("SELECT * FROM grading where sector='$dep_id' order by weight ") or die(mysqli_error($dbcon));
		$hm=$cls->num_rows;
		?>
    <td colspan="6"></td><td colspan="4">Number</td><td></td><td colspan="<?php echo $hm; ?>">Grade and Number</td>
    </tr>
      <tr>
        <th>#</th>
        <th>Code</th>
       <th>Course Title</th>
       <th>CV</th>
        <th>Course Instructor</th>
       <th>ST</th>
       <th>Course<br />Coverage</th>
      
       <th>CE</th>
       <th>Pass</th>
       <th>Fail</th>
       <th>% Pass</th>
         <?php
		 //////Select all Grades patterning to this Grading System
		$cls=$dbcon->query("SELECT * FROM grading where sector='$dep_id' order by weight ") or die(mysqli_error($dbcon));
		
	while($rows=$cls->fetch_assoc()){
		?>
	
        <th style="padding:0px; margin:0px; text-align:center"  ><?php echo $rows['weight'];?>
        </th>
        <?php } ?>
       
      </tr>
    </thead>
    <tbody>
    <?php
	while($rowl=$cl->fetch_assoc()){
		
		?>
      <tr>
        <td><?php echo $a++; ?></td>
        <td ><?php  echo $rowl['code']; ?></td>
         <td style="font-size:10px"><?php  echo $rowl['title']; ?></td>
         <td ><?php  echo $rowl['credit']; ?></td>
          <td ><?php
		  
		  $aa=$dbcon->query("SELECT * FROM course where programe_id='$prog_id' and level_id='$level_id' and sem='$sem' and course_code='".$rowl['code']."'  ") or die(mysqli_error($dbcon));	
		 
	while($bn=$aa->fetch_assoc()){
		 $course_id=$bn['id'];
	}
	
		
	  $aa=$dbcon->query("SELECT * FROM teacher,teachers_courses where  teachers_courses.teacher_id=teacher.id and teachers_courses.course_id='$course_id' and teachers_courses.semester_id='$sem' and teachers_courses.year_id='$year_id' and teachers_courses.level_id='$level_id' and teachers_courses.prog_id='$prog_id' ") or die(mysqli_error($dbcon));	
	
		 	
	while($bn=$aa->fetch_assoc()){
		 echo $course_id=$bn['firstname'].",";
	} ?></td>
          <td ><?php  echo $rowl['status']; ?></td>
         <td >100%</td>
       
        
        <td > <?php
		////Total Number of students that sat for this Courses
		$cls=$dbcon->query("SELECT * FROM  my_marks where levels='$level'  and dept='$prog' and ayear='$year' and sem='$sem' and code='".$rowl['code']."' AND exam is NOT NULL  GROUP BY  matric ") or die(mysqli_error($dbcon));
	echo  $num_sat=$cls->num_rows;
		?></td>
        
        <td > <?php
		//////Pass: Number of students with marks greater than 49
		$cls=$dbcon->query("SELECT * FROM  my_marks where levels='$level'  and dept='$prog' and ayear='$year' and sem='$sem' and code='".$rowl['code']."' and (ca+exam>49)  GROUP BY  matric ") or die(mysqli_error($dbcon));
	echo  $pass=$cls->num_rows;
		?></td>
        
        
         <td > <?php
		//////Fail: Number of students with marks less than 49
		$cls=$dbcon->query("SELECT * FROM  my_marks where levels='$level'  and dept='$prog' and ayear='$year' and sem='$sem' and code='".$rowl['code']."' and (ca+exam<50)  GROUP BY  matric ") or die(mysqli_error($dbcon));
	echo  $fail=$cls->num_rows;
		?></td>
        
          <td > <?php
		//////Percentage Pass: 
		$as= (($pass/$num_sat)*100);
		echo $per_pass=number_format($as,0);
		?> </td>
        
        
        <!--------Grading and Registry Loading--------------->
        
          <?php
		 //////Select all Grades patterning to this Grading System
		$lo=$dbcon->query("SELECT * FROM grading where sector='$dep_id' order by weight ") or die(mysqli_error($dbcon));
		
	while($ks=$lo->fetch_assoc()){
		$lower=$ks['b'];
		$upper=$ks['a'];
		?>
	
        <td style="padding:0px 5px"  >
		<?php  $as=$dbcon->query("SELECT * FROM  my_marks where levels='$level'  and dept='$prog' and ayear='$year' and sem='$sem' and code='".$rowl['code']."' and (ca+exam)>=$lower and (ca+exam)<=$upper  GROUP BY  matric	 ") or die(mysqli_error($dbcon));
		echo $ffg=$as->num_rows; ?>
		</td>
       <?php } //// close 	while($ks=$lo->fetch_assoc()){
        ?>
         
        
        
      </tr>
      
     <?php  }// close $rowl=$cl->fetch_assoc());?>
     
     
     <!----------For Totals------------->
      
      
      
     <tr class="gg">
     <td colspan="3">GRAND TOTAL</td>
     <td>  </td>
         <td ></td>
         <td >100%</td>
        
        
        <td > <?php
		
		?></td>
        <td > <?php
		
		?></td>
        <td > <?php
		
		?></td>
        
        
         <td > <?php
		
		?></td>
        
          <td > <?php
		
		?> </td>
        
        
        <!--------Grading and Registry Loading--------------->
        
          <?php
		 //////Select all Grades patterning to this Grading System
		$lo=$dbcon->query("SELECT * FROM grading where sector='$dep_id' order by weight ") or die(mysqli_error($dbcon));
		
	while($ks=$lo->fetch_assoc()){
		$lower=$ks['b'];
		$upper=$ks['a'];
		?>
	
        <td style="padding:0px 5px"  >
		<?php  ?>
		</td>
       <?php } //// close 	while($ks=$lo->fetch_assoc()){
        ?>
         
        
        
     </tr>
     
     
      
      <!---------For totals-------------->
    </tbody>
  </table>

<div class="f1">CV : Credit Value</div>
<div class="f1">ST: Status</div>

<div class="f1">CE: Candidate Examined</div>
<div class="f2">The % passed is based on CE(The number of candidates who completed the program of study by writing the final examination)</div>
<div class="f2">The % passed course covered is based on the degree of completion of the approved course content (number of topic as expanded in the weekly course outline)</div>

	</page>
    <div class="footer"></div>
    
    
    <div style="clear:both"></div>

</body>
</html>
<?php } ?>
