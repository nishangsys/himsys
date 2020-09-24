<?php  include '../includes/dbc.php'; 



$level=$_POST['level'];
$sem=$_POST['sem'];

$prog=$_POST['dept'];
$year=$_POST['ayear'];

$a=$dbcon->query("SELECT * FROM special where id='".$prog."' ") or die(mysqli_error($dbcon));

		
	while($b=$a->fetch_assoc()){
		 $prog_name=$b['prog_name'];
	}
	
	$a=$dbcon->query("SELECT * FROM semesters where s_num='".$sem."' ") or die(mysqli_error($dbcon));

		
	while($b=$a->fetch_assoc()){
		 $month=$b['s_name'];
	}
	
	$a=$dbcon->query("SELECT * FROM years where id='".$year."' ") or die(mysqli_error($dbcon));		
	while($b=$a->fetch_assoc()){
		 $year_name=$b['year_name'];
	}

$a=$dbcon->query("SELECT * FROM levels where id='".$level."' ") or die(mysqli_error($dbcon));		
	while($b=$a->fetch_assoc()){
		 $level_name=$b['levels'];
	}
	////get Current page number and Name 
			// $cl=$dbcon->query("SELECT * FROM   my_marks where levels='$level' and sem='$sem' and dept='$prog' and ayear='$year' AND ca!='' GROUP BY code  order by code") or die(mysqli_error($dbcon));
			
			$cl=$dbcon->query("SELECT * FROM   my_marks,subjects  where   my_marks.code=subjects.code and   my_marks.dept_id=subjects.prog_id  and   my_marks.level_id='$level' and   my_marks.sem='$sem' and   my_marks.dept_id='$prog' and   my_marks.year_id='$year' and   my_marks.ca='0'  GROUP BY   my_marks.code  order by   my_marks.code") or die(mysqli_error($dbcon));
			$gh=$cl->num_rows;
			 $a=1;
	
	
	///////check if this program grading system has been set
$cd=$dbcon->query("SELECT * FROM `segments` WHERE dept_id='".$prog."'  ") or die(mysqli_error($dbcon));
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
          <?php include '../Cash/header.php'; ?>
           </div>
           <div class="box2">
           <h1 style="margin-top:-20px; font-size:18px"><?PHP  echo $school;?></h1>
           <h2 style="margin-top:0px; font-size:14px"><?php echo $prog_name;  ?> Level <?php echo $level_name;  ?> <?PHP echo $month; ?> Frequency Distribution Performance <?php  echo $year_name; ?> School Year</h2>
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
		  
		  $aa=$dbcon->query("SELECT * FROM subjects where prog_id='$prog' 
		  and level_id='$level' and sem='$sem' and code='".$rowl['code']."'  ") or die(mysqli_error($dbcon));	
		 
	while($bn=$aa->fetch_assoc()){
		 $course_id=$bn['id'];
	}
	 ?></td>
          <td ><?php  echo $rowl['status']; ?></td>
         <td >100%</td>
       
        
        <td > <?php
		
		$cls_pass=$dbcon->query("SELECT * FROM   my_marks where level_id='$level'  and dept_id='$prog' 
		and year_id='$year' and sem='$sem' and code='".$rowl['code']."' and (ca+exam>49)  AND exam is NOT NULL  GROUP BY  matric ") or die(mysqli_error($dbcon));
	  $pass=$cls_pass->num_rows;
		////Total Number of students that sat for this Courses
		
		//////Fail: Number of students with marks less than 49
		$cls_fail=$dbcon->query("SELECT * FROM   my_marks where level_id='$level'  and dept_id='$prog' 
		and year_id='$year' and sem='$sem' and code='".$rowl['code']."' and (ca+exam<50)  AND exam is NOT NULL  GROUP BY  matric ") or die(mysqli_error($dbcon));
	 $fail=$cls_fail->num_rows;
	   echo $num_sat=$pass+$fail;
		?></td>
        
        <td > <?php
	
	echo  $pass
		?></td>
        
        
         <td > <?php
		
	echo  $fail
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
		<?php  $as=$dbcon->query("SELECT * FROM 
  my_marks where level_id='$level'  and dept_id='$prog' and year_id='$year' and sem='$sem' 
and code='".$rowl['code']."' and (ca+exam)>=$lower and (ca+exam)<=$upper  GROUP BY  matric	 ") or die(mysqli_error($dbcon));

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
		   <td ></td>
         <td >100%</td>
        
        <td > <?php
		
		
		
	/*	////Total Number of students that sat for this Courses
		$cls=$dbcon->query("SELECT * FROM   my_marks where levels='$level'  and dept='$prog' and ayear='$year' and sem='$sem'  AND exam is NOT NULL    ") or die(mysqli_error($dbcon));
	  $num_sat=$cls->num_rows;
	  */
		?></td>
        
        <td > <?php
		/*//////Pass: Number of students with marks greater than 49
		$cls=$dbcon->query("SELECT * FROM   my_marks where levels='$level'  and dept='$prog' and ayear='$year' and sem='$sem'  and (ca+exam>49) group by MATRIC  ") or die(mysqli_error($dbcon));
	echo  $pass=$cls->num_rows;
	*/
		?></td>
        
        
         <td > <?php
		 /*
		//////Fail: Number of students with marks less than 49
		$cls=$dbcon->query("SELECT * FROM   my_marks where levels='$level'  and dept='$prog' and ayear='$year' and sem='$sem' and (ca+exam<50) group by MATRIC  ") or die(mysqli_error($dbcon));
	echo  $fail=$cls->num_rows;
	*/
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
		<?php  $as=$dbcon->query("SELECT * FROM 
  my_marks where level_id='$level'  and dept_id='$prog' and year_id='$year' and sem='$sem' and  (ca+exam)>=$lower and (ca+exam)<=$upper  	 ") or die(mysqli_error($dbcon));
		echo $ffg=$as->num_rows; ?>
		</td>
        <?php  }// close $rowl=$cl->fetch_assoc());?> 
        
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
