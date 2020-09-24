<?php  
include '../../includes/dbc.php'; 
//////Name of school and other details
$c=$dbcon->query("SELECT * FROM `school` ") or die(mysqli_error($dbcon));
while($row=$c->fetch_assoc()){
	$school=$row['school'];
	$address=$row['twon'];
}

/////Number Matricule where roll is equals get varible ccx

$c=$dbcon->query("SELECT * FROM `students` WHERE id='".$_GET['xxc']."'  ") or die(mysqli_error($dbcon));

 ////matricule
 while($anss=$c->fetch_assoc()){
	 $matric=$anss['matricule'];
	 $ydept=$anss['dept_id'];
 }
 
 /////Number of pages 

$c=$dbcon->query("SELECT * FROM `students` WHERE matricule='".$matric."' and dept_id='$ydept'  GROUP BY year_id") or die(mysqli_error($dbcon));

 $h_many=$c->num_rows;
 
 
 

$c=$dbcon->query("SELECT * FROM special,years,students WHERE   students.matricule='".$matric."' AND students.year_id=years.id and students.dept_id='$ydept'  AND students.dept_id=special.id order by students.year_id ASC") or die(mysqli_error($dbcon));
	$page=1;
	$page_num=$c->num_rows;
while($row=$c->fetch_assoc()){
$dept=$row['prog_name'];
$dept_id=$row['dept_id'];
$date = $row['year_name'];
$date = explode('/', $date);
 $year1 = $date[0];
 $year2  = $date[1];

 $page/$page_num;
 
 
///////check if this program grading system has been set
$cd=$dbcon->query("SELECT * FROM `segments` WHERE dept_id='".$row['dept_id']."'  ") or die(mysqli_error($dbcon));
  $set=$cd->num_rows;
 if($set<1){
	 echo "<script>alert('Sorry Grading system for $dept has not been Saved')</script>";
	 exit;
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
<title><?php echo $row['fname'];  ?> Transcript</title>

<style>
body {
  background: #fff; 
  font-size:12px;
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
.footer{
	width:90%; 
	float:left;
	font-size:10px;
	font-weight:bold;
	margin:5px 30px;
	border:;
	text-align:left;
	background:#fff;
	padding:2px 0px;
	
}
.for_registry{
	float: right;
	bottom:20px;
	right:60px;
	height:20px;
	width:260px;
	margin-right:230px;
	margin-top:15px;
	border-top:;
	font-weight:bold;
	border:;
	font-size:14px;
}

@media print {
 .footer {page-break-after: always;}
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
.for_grades{
	width:30px;
	 margin:0px;
	 padding:0px;
	  float:left;
	 
}
</style>
</head>


<body onload="window.print();">

<?php


	////get Current page number and Name 
			 $cl=$dbcon->query("SELECT * FROM pages where num='$page'  ") or die(mysqli_error($dbcon));
while($rowl=$cl->fetch_assoc()){
	 $p_names=$rowl['name'];
	 $cur_pnum=$rowl['num'];
	
}
?>
	<page size="A4" layout="landscape"  >
        <div class="main" style="height:691px; border:1px solid#000; border-bottom:1px solid#000; outline:#FFF;  ";
		  >
           <div style="clear:both; margin-top:40px;"></div>
    
    <?php
	
	/////if this is the first  pages combine the two header
	if($page==1){
		 include 'header.php';
	}
	else {
		/////if this is not the first  pages show only the second head
	 include 'sec_header.php';
	}?>
          
          <!------First Semester Main Courses Box----------->
          
          <div class="semester_box">
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:59PX;">
            Course Code
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:260PX;">
            Course Title
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; ">
           Type
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; ">
           Credit Value
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none;  ">
           Grade
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; ">
           Credits Earned
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-right:none; ">
           Grade Point
            </div>
            
             <span style="font-weight:bold">
			 <?php 	echo $p_names; ?>
             
              YEAR-FIRST SEMESTER <?PHP echo $row['year_name']; ?></span>
            <div style="clear:both"></div>
            
            
            <!--Course Code Box----->
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:383px; border-bottom:none; border-top:none; width:59PX; font-size:9px">
            
            </div>
           
            
            <!----Course Title Box ------->
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:260PX; height:385px; border-bottom:none;  border-top:none; text-align:left; font-size:9px; "></div>
           
            
            <!-----Type Box----------->
             
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:385px ">
           
            </div>
                        
            
             <!-----Credit Value Box----------->
             
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:385px ">
           
            </div>
           
            
            
             <!-----Grade Box----------->
             
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:385px;  ">
           
            </div>
            <!----Credit Erned Box--------------->
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none;  height:385px; ">
           
            </div>
            
                        <!----Grade Point  Box--------------->

            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-right:none; height:385px;   ">
           
            </div>
            
            
            
            
            
            
      <DIV style=" margin-top:-385PX; height:205PX; width:100%; float:left"  >    
            <!--Loading First &nbsp;SEMESTER Courses----->
            
          <?PHP
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".ltrim($row['matricule'])."' and year_id='".$row['year_id']."' and sem='1' and level_id='".$row['level_id']."'  ORDER BY  code ") or die(mysqli_error($conn));
		   $hm=$ad->num_rows;
		  while ($ans=$ad->fetch_assoc()){
		  ?>  
          
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; width:59PX; font-size:9px">
            <?php echo strtoupper($ans['code']);  ?>
            </div>
            
           
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:260PX; height:15px; border-bottom:none; border-top:none; text-align:left; font-size:9px">
            
            
             <?php
		  $as=$conn->query("SELECT * FROM subjects where code='".$ans['code']."' and level_id='".$row['level_id']."' and prog_id='".$row['dept_id']."' GROUP BY code  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			
			   $s = ucwords(strtolower($bs['title']));
			 echo  $s;
			  
		 
          }
		   ?>
           
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; font-size:9px"> 
            <?php
		
		///////////Get total Marks
		  $as=$conn->query("SELECT (ca+exam ) as marks FROM  my_marks where matric='".ltrim($row['matricule'])."' and level_id='".$row['level_id']."' and code='".$ans['code']."' and sem='1' and year_id='".$row['year_id']."'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $my_marks=round($bs['marks']); ///tot mks in this subj	 
          }
////use total marks to get garde


 $as=$conn->query("SELECT * FROM subjects where code='".$ans['code']."' and level_id='".$row['level_id']."' and prog_id='".$row['dept_id']."' GROUP BY code  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $status=$bs['status'];
			  
		 
          }
		   ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px">
            <?php
		
		  echo  $credit=$ans['cv'];
			  
		
          
		   ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none;font-size:9px  ">
           <?php
		    
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $my_marks>=b and $my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $weight=$bs['weight'];  
		 ////$pass or failed
		 $passed_or_failed=$bs['status'];
          }
		  ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px ">
            <?php
		    
			
			/////Credit Earned
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $my_marks>=b and $my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			$status=$bs['status']; 
			
			if($status>=1){
			echo	$credit_earned=$credit;
			
			
			}
			else {
				echo $credit_earned=0;
	
		
			}
		 
          }
		  
		  
		  ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-right:none; height:15px;border-bottom:none; border-top:none;font-size:9px">
            <?php
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $my_marks>=b and $my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['grade'];  
			
			
		 
          }
		  
		   ?>
            </div>
            <div style="clear:Both"></div>
          
          
          
          <?php } ?>
          
          
          <div class="patition" style="width:320px; border:none; border-right:1PX solid#000; text-align:left; font-size:11px" >
          <span style="background:#fff">TOTAL CREDITS ATTEMPTED :</span> <?php
		
		  $as=$conn->query("SELECT SUM(cv) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' 
		  and sem='1' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_attempted=$bs['attempts'];
			  
		 
          }
		  
		
		
			
		   ?>  <BR />
<span style="background:#fff">GPA CREDITS ATTEMPTED: </span><?php
		
		  $as=$conn->query("SELECT SUM(cv) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_attempted=$bs['attempts'];
			  
		 
          }
		   ?> 
          </div>
          
          
           <div class="patition" style="width:180px; margin-left:5px; text-align:left; border:none" >
           <span style="background:#fff">TOTAL CREDITS EARNED : <?php
		
		 $as=$conn->query("SELECT SUM(earned) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_earned=$bs['attempts'];
			  
		 
          }
		   ?> </span><BR />
          <span style="background:#fff">GPA CREDITS EARNED: 
          <?php
		
		  $as=$conn->query("SELECT SUM(earned) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_earned=$bs['attempts'];
			  
		 
          }
		  
		  
		   ?></span>
          </div>
          
          <div class="patition" style="width:262px; margin-left:57px; text-align:left; border:none; border-left:1px solid#000; border-right:1px solid#000;font-weight:bold" >
          &nbsp;SEMESTER GPA = &nbsp; <?php
		
		  $as=$conn->query("SELECT SUM(cv*grade) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $weighted_gpa=$bs['attempts'];		 
          }
		  
		   $as=$conn->query("SELECT SUM(cv) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $total_credit=$bs['attempts'];		 
          }
		echo $first_semseter_gpa_yearone=number_format($weighted_gpa/$total_credit,2) ;
		
		
		
		
		
		
		
		
		
		
		   ?> <BR />
          
          </div>
          
           <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-bottom:none ">
           
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-bottom:none ">
           
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none;  border-bottom:none ">
          
            </div>
            

             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-bottom:none ">
           
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-right:none;  border-bottom:none; border-right:1px solid#000; width:39px; ">
          
            </div>
            
                      <!--End Loading First  SEMESTER Courses----->

            
            
          </DIV>
            
          </div>
          
          
          <!------Close First Semester Main Courses Box----------->
     
     
     
     
     
     
     
          <!------Second Semester Main Courses Box----------->
          
          <div class="semester_box" style="width:530px; border-right:none;   height:300px" >
         
         
         
         
         
          <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:59PX;">
            Course Code
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:265PX;">
            Course Title
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; ">
           Type
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; ">
           Credit Value
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none;  ">
           Grade
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; ">
           Credits Earned
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-right:none; ">
           Grade Point
            </div>
            
             <span style="font-weight:bold"><?php 	echo $p_names; ?> YEAR - SECOND SEMESTER <?PHP echo $row['year_name']; ?></span>
            <div style="clear:both"></div>
            
              <!--Course Code Box----->
            <div  class="patition" style="border-left:1px solid#000; border-top:0px; line-height:none; height:385px; border-bottom:none; border-top:none; width:58PX; font-size:9px">
            
            </div>
           
            
            <!----Course Title Box ------->
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:265PX; height:385px; border-bottom:none;  border-top:none; text-align:left; font-size:9px"></div>
           
            
            <!-----Type Box----------->
             
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:385px ">
           
            </div>
                        
            
             <!-----Credit Value Box----------->
             
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:385px ">
           
            </div>
           
            
            
             <!-----Grade Box----------->
             
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:385px;  ">
           
            </div>
            <!----Credit Erned Box--------------->
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none;  height:385px; ">
           
            </div>
            
                        <!----Grade Point  Box--------------->

            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-right:none; height:385px; ">
           
            </div>
            
          <!--Loading Second &nbsp;SEMESTER Courses----->
            



      <DIV style=" margin-top:-385PX; height:205PX; width:100%; float:left"  >    
      
                <?PHP
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".ltrim($row['matricule'])."' and level_id='".$row['level_id']."' and  year_id='".$row['year_id']."' and sem='2'  order by code ") or die(mysqli_error($conn));
		   $hm=$ad->num_rows;
		  while ($ans=$ad->fetch_assoc()){
		  ?>  
          
          
          
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; width:59PX; font-size:9px">
            <?php echo strtoupper($ans['code']);  ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:265PX; height:15px; border-bottom:none; border-top:none; text-align:left; font-size:9px">
            
            
             <?php
		
		  $as=$conn->query("SELECT * FROM subjects where code='".$ans['code']."' and level_id='".$row['level_id']."' and prog_id='".$row['dept_id']."' GROUP BY code  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $subj=$bs['title'];
			  
		 
          }
		   ?>
           
           
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; font-size:9px">             <?php
		///////////Get total Marks
		  $as=$conn->query("SELECT (ca+exam ) as marks FROM  my_marks where matric='".ltrim($row['matricule'])."' and level_id='".$row['level_id']."' and code='".$ans['code']."' and sem='2' and year_id='".$row['year_id']."'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			   $my_marks=round($bs['marks']); ///tot mks in this subj	 
          }
////use total marks to get garde


 $as=$conn->query("SELECT * FROM subjects where code='".$codes."' and level_id='".$row['level_id']."' 
 and prog_id='".$row['dept_id']."' GROUP BY code  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $status=$bs['status'];
			  
		 
          }
		   ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px">
            <?php
		
		 echo  $credit=$ans['cv'];
			  
		
		 
		   ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none;font-size:9px  ">
           <?php
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $my_marks>=b and $my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $bs['weight'];  
		 
          }
		  
		   ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px ">
            <?php
		    
			
			/////Credit Earned
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $my_marks>=b and $my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			$status=$bs['status']; 
			
			if($status>=1){
			echo	$credit_earned=$credit;
			
			}
			else {
				echo $credit_earned=0;
	
		
			}
			
			
		 
          }
		  ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-right:none; height:15px;border-bottom:none; border-top:none; font-size:9px">
          <?php
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $my_marks>=b and $my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['grade'];  
			
			
		 
          }
		  
		   ?>
            </div>
            <div style="clear:Both"></div>
          
          
          
          <?php } ?>
          
          <div class="patition" style="width:325px; border:none; border-right:; text-align:left" >
          <span style="background:#fff">TOTAL CREDITS ATTEMPTED : </span><?php
		
		  $as=$conn->query("SELECT SUM(cv) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='2' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_attempted=$bs['attempts'];
			  
		 
          }
		   ?>  <BR />
          <span style="background:#fff">GPA CREDITS ATTEMPTED: 
          </span>
          <?php
		
		  $as=$conn->query("SELECT SUM(cv) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='2' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_attempted=$bs['attempts'];
			  
		 
          }
		  
		  
		  
		  	
		   ?> 
          </div>
          
          
         
           <div class="patition" style="width:180px; margin-left:5px; text-align:left; border:none" >
         <span style="background:#fff"> TOTAL CREDITS EARNED : <?php
		 
		
		  $as=$conn->query("SELECT SUM(earned) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='2' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_earned=$bs['attempts'];
			  
		 
          }
		  
		  
		  
		  
			
		   ?> </span> <BR />
          <span style="background:#fff">GPA CREDITS EARNED:
          <?php
		
		  $as=$conn->query("SELECT SUM(earned) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='2' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_earned=$bs['attempts'];
			  
		 
          }
		   ?></span> 
          </div>
         
         
         
         
		
		
          <div class="patition" style="width:267px; margin-left:57px; text-align:left; border:none;  border-right:;font-weight:bold" >
          &nbsp;SEMESTER GPA = &nbsp; <?php
		
		  $as=$conn->query("SELECT SUM(cv*grade) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='2' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $weighted_gpa=$bs['attempts'];		 
          }
		  
		   $as=$conn->query("SELECT SUM(cv) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='2' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $total_credit=$bs['attempts'];		 
          }
		  echo $second_semseter_gpa=number_format($weighted_gpa/$total_credit,2);
		  
		  
		  
		  ///******************************/
		

		
		   ?>  
  <div style="margin-top:30px; clear:both" ></div>        
           <?php include 'for_gpa.php';	 ?><BR /><br><br>
           
          
          </div>
          
           <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-bottom:none ">
           
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-bottom:none ">
           
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none;  border-bottom:none ">
          
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-bottom:none ">
           
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-right:none;  border-bottom:none; border-right:; width:39px; ">
          
            </div>
            
            </DIV>
            
           
            </div>
            
            
          
          
          <!------Close Second Semester Main Courses Box----------->
     
    
    <?php
	
	/////get start year	
$fg=$dbcon->query("SELECT * FROM `my_marks` WHERE   matric='".$matric."'  and sem='3'  ") or die(mysqli_error($dbcon));
$exist=$fg->num_rows;
	if($exist>=1){
	?>
    
  
  
  
  
          <!------Resit Semester Main Courses Box----------->
          
          <div class="semester_box" style=" margin-top:-63px; height:170px; padding-bottom:10px;  ">
          
          <DIV style="float:left; clear:both;  height:15px; width:60%; clear:both; background:#fff">
             <span style="font-weight:bold">RESIT <?PHP echo $year2; ?></span>
         </DIV>
         <div style="clear:both"></div>
          
          
          
          <!--Loading RESIT Courses----->
            
          <?PHP
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".ltrim($row['matricule'])."' and year_id='".$row['year_id']."' and sem='3' and level_id='".$row['level_id']."' order by code") or die(mysqli_error($conn));
		   $hm=$ad->num_rows;
		  while ($ans=$ad->fetch_assoc()){
		  ?>  
          
          
          
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; width:59PX;  font-size:9px">
            <?php echo strtoupper($ans['code']);  ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:260PX; height:15px; border-bottom:none; border-top:none;  text-align:left; font-size:9px">
            
            
             <?php
		
		  $as=$conn->query("SELECT * FROM subjects where code='".$ans['code']."'   and prog_id='".$row['dept_id']."' GROUP BY code  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			
			   $s = ucwords(strtolower($bs['title']));
			 echo  $s;
			  
		 
          }
		  
		  
		  ///////////TOTAL CREDITS ATTEMPTED  IN RESITS
		  
		    $as=$conn->query("SELECT SUM(cv) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $credit_attempted=$bs['attempts'];
			  
		 
          }
		  
		  
		  
			
			
			/////////// TOTAL CREDIT EARNED IN RESIT
			
			  $as=$conn->query("SELECT SUM(earned) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $credit_earned=$bs['attempts'];
			  
		 
          }
		  
		  
		  
			
			
		   ?>
           
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; font-size:9px"> 
            <?php
		
		///////////Get total Marks
		  $as=$conn->query("SELECT (ca+exam ) as marks FROM  my_marks where matric='".ltrim($row['matricule'])."' and level_id='".$row['level_id']."' and code='".$ans['code']."' and sem='3' and year_id='".$row['year_id']."'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $my_marks=round($bs['marks']); ///tot mks in this subj	 
          }
////use total marks to get garde

 $as=$conn->query("SELECT * FROM subjects where code='".$ans['code']."' and level_id='".$row['level_id']."' and prog_id='".$row['dept_id']."' GROUP BY code  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $status=$bs['status'];
			  
		 
          }
		   ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px">
            <?php
		
		  $as=$conn->query("SELECT * FROM subjects where code='".$ans['code']."'  and prog_id='".$row['dept_id']."' GROUP BY code  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit=$bs['cv'];
			
		 
          }
		   ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px ">
            <?php
		    
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $my_marks>=b and $my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $weight=$bs['weight'];  
		 
          }
		  ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none;font-size:9px ">
            <?php
		    
			
			/////Credit Earned
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $my_marks>=b and $my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			  
			$status=$bs['status']; 
			
			if($status>=1){
			echo	$credit_earned=$credit;
			
			}
			else {
				echo $credit_earned=0;

		
			}
			
		 
          }
		  ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-right:none; height:15px;border-bottom:none; border-top:none; font-size:9px">
           <?php
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $my_marks>=b and $my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['grade'];  
			
			
			
		 
          }
		  
		   ?>
            </div>
            <div style="clear:Both"></div>
          
          
          
          <?php } ?>
          
        
          
          <div class="patition" style="width:262px; margin-left:57px; text-align:left; border:none;   font-weight:bold" >
          &nbsp;&nbsp;SEMESTER GPA = &nbsp; <?php
		
		  $as=$conn->query("SELECT SUM(cv*grade) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $weighted_gpa=$bs['attempts'];		 
          }
		  
		   $as=$conn->query("SELECT SUM(cv) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $total_credit=$bs['attempts'];		 
          }
		  echo $resit_semseter_gpa=number_format($weighted_gpa/$total_credit,2);
		  
		  
		   ?>  <BR />
          
          </div>
          
           <div  class="patition" style="border:none;   line-height:none;  ">
           
            </div>
            
            <div  class="patition" style=" border:none; line-height:none; ">
           
            </div>
            
             <div  class="patition" style=" border:none; line-height:none;    ">
          
            </div>
            
             <div  class="patition" style="border:none;  line-height:none; ">
           
            </div>
            
            <div  class="patition" style="border:none;   line-height:none;  width:39px; ">
          
            </div>
            </div>
          
          
          <!------Close Second Semester Main Courses Box----------->
     
  
  
  

    <?PHP
	}
	else {
	}?>
    <!--------------------------------------------------------------------------------------------------For resit--------------------------------------------------------------------------------------------------------------------->
  </div>

    <?php 
	
			if ($cur_pnum==$h_many){
		include 'footer.php'; 
		}
		else {
			
		}

			 ?>







	</page>
    
    <?php } ?>
    
    <div style="clear:both"></div>

</body>
</html>
<?php } ?>