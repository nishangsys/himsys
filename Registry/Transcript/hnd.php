<?php  include 'includes/dbc.php'; 
$c=$dbcon->query("SELECT * FROM `school` ") or die(mysqli_error($dbcon));
while($row=$c->fetch_assoc()){
	$school=$row['school'];
	$address=$row['twon'];
}

/////Number Matricule where roll is equals get varible ccx

$c=$dbcon->query("SELECT * FROM `courses` WHERE roll='".$_GET['xxc']."'  GROUP BY db1") or die(mysqli_error($dbcon));

 ////matricule
 while($anss=$c->fetch_assoc()){
	 $matric=$anss['matricule'];
	 $ydept=$anss['departmet'];
	 $yname=$anss['fname'];
 }
 
 /////Number of pages 

$c=$dbcon->query("SELECT * FROM `courses` WHERE matricule='".$matric."' and departmet='$ydept'  GROUP BY db1") or die(mysqli_error($dbcon));

 $h_many=$c->num_rows;
 
 
 

$c=$dbcon->query("SELECT * FROM `courses` WHERE   matricule='".$matric."' and departmet='$ydept' order by db1 ASC") or die(mysqli_error($dbcon));
	$page=1;
	$ps=$c->num_rows;
	
while($row=$c->fetch_assoc()){
$dept=$row['departmet'];

$date = $row['db1'];
$date = explode('/', $date);
 $year1 = $date[0];
 $year2  = $date[1];

$page_num;
 
 
///////check if this program grading system has been set
$cd=$dbcon->query("SELECT * FROM `segments` WHERE dept='".$row['departmet']."'  ") or die(mysqli_error($dbcon));
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
					////if its hnd add a page else remove it
		  
		  if($dep_id==12){
			  $add_page=1;
		  }
		  else {
			  $add_page=0;
		  }
		  
		   $page_num=$ps+$add_page;
				
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
    
       <div class="main" style="height: <?php  if($cur_pnum==1){
			echo "690px; border:1px solid#000; border-bottom:1px solid#000; ";
			
		}
		else if($cur_pnum==2){
			echo "544px; border:1px solid#000; border-bottom:1px solid#000; ";
		}
		
		else{
			echo "690px;border:1px solid#000 ";
		}
			 ?>; margin-top:30px   " >
           <div style="clear:both; margin-top:40px;"></div>
    
  
     <?php
	
	if($page==1){
		 include 'header.php';
	}
	else {
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
             
              YEAR-FIRST SEMESTER <?PHP echo $row['db1']; ?></span>
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
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".ltrim($row['matricule'])."' and ayear='".$row['db1']."' and sem='1' and levels='".$row['levels']."'  ORDER BY  code ") or die(mysqli_error($conn));
		   $hm=$ad->num_rows;
		  while ($ans=$ad->fetch_assoc()){
		  ?>  
          
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; width:59PX; font-size:9px">
            <?php echo strtoupper($ans['code']);  ?>
            </div>
            
           
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:260PX; height:15px; border-bottom:none; border-top:none; text-align:left; font-size:9px">
            
            
             <?php
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."' and level='".$row['levels']."' and department='".$row['departmet']."' GROUP BY subject  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){			 
			   $s = ucwords(strtolower($bs['title']));
			 echo  $s;		  
		 
          }
		   ?>
           
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; font-size:9px"> 
            <?php
		
		///////////Get total Marks
		  $as=$conn->query("SELECT (ca+exam ) as marks FROM  my_marks where matric='".ltrim($row['matricule'])."' and levels='".$row['levels']."' and code='".$ans['code']."' and sem='1' and ayear='".$row['db1']."'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $  my_marks=round($bs['marks']); ///tot mks in this subj	 
          }
////use total marks to get garde


 $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."' and level='".$row['levels']."' and department='".$row['departmet']."' GROUP BY subject  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $status=$bs['status'];
			  
		 
          }
		   ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px">
            <?php
		
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."' and level='".$row['levels']."' and department='".$row['departmet']."' GROUP BY subject  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit=$bs['credit'];
			  
		
          }
		   ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none;font-size:9px  ">
           <?php
		    
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
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
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
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
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['grade'];  
			
			
		 
          }
		  
		   ?>
            </div>
            <div style="clear:Both"></div>
          
          
          
          <?php } ?>
          
          
          <div class="patition" style="width:320px; border:none; border-right:1PX solid#000; text-align:left; font-size:11px" >
          <span style="background:#fff">TOTAL CREDITS ATTEMPTED :</span> <?php
		
		  $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_attempted=$bs['attempts'];
			  
		 
          }
		  
		
		
			
		   ?>  <BR />
<span style="background:#fff">GPA CREDITS ATTEMPTED: </span><?php
		
		  $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_attempted=$bs['attempts'];
			  
		 
          }
		   ?> 
          </div>
          
          
           <div class="patition" style="width:180px; margin-left:5px; text-align:left; border:none" >
           <span style="background:#fff">TOTAL CREDITS EARNED : <?php
		
		 $as=$conn->query("SELECT SUM(earned) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_earned=$bs['attempts'];
			  
		 
          }
		   ?> </span><BR />
          <span style="background:#fff">GPA CREDITS EARNED: 
          <?php
		
		  $as=$conn->query("SELECT SUM(earned) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_earned=$bs['attempts'];
			  
		 
          }
		  
		  
		   ?></span>
          </div>
          
          <div class="patition" style="width:262px; margin-left:57px; text-align:left; border:none; border-left:1px solid#000; border-right:1px solid#000;font-weight:bold" >
          &nbsp;SEMESTER GPA = &nbsp; <?php
		  
		
		  $as=$conn->query("SELECT SUM(credit*grade) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			   $weighted_gpas=$bs['attempts'];		 
          }
		  
		   $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $total_credit=$bs['attempts'];		 
          }
		echo $first_semseter_gpa_yearones=number_format($weighted_gpas/$total_credit,2) ;
		
		
		
		
		
		
		
		
		
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
            
             <span style="font-weight:bold"><?php 	echo $p_names; ?> YEAR - SECOND SEMESTER <?PHP echo $row['db1']; ?></span>
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
		  $ad=$conn->query("SELECT * FROM  my_marks where  sem='2' and matric='".ltrim($row['matricule'])."' and levels='".$row['levels']."' and  ayear='".$row['db1']."'   order by code ") or die(mysqli_error($conn));
		     $hm=$ad->num_rows;
			 
		  while ($ans=$ad->fetch_assoc()){
		  ?>  
          
          
          
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; width:59PX; font-size:9px">
            <?php echo strtoupper($ans['code']);  ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:265PX; height:15px; border-bottom:none; border-top:none; text-align:left; font-size:9px">
            
            
             <?php
		
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."' and level='".$row['levels']."' and department='".$row['departmet']."'    GROUP BY subject  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			   $s = ucwords(strtolower($bs['title']));
			 echo  $s;		  
		 
          }
		   ?>
           
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; font-size:9px">             <?php
		///////////Get total Marks
		  $as=$conn->query("SELECT (ca+exam ) as marks FROM  my_marks where matric='".ltrim($row['matricule'])."' and levels='".$row['levels']."' and code='".$ans['code']."' and sem='2' and ayear='".$row['db1']."'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			   $  my_marks=round($bs['marks']); ///tot mks in this subj	 
          }
////use total marks to get garde


 $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."' and level='".$row['levels']."' and department='".$row['departmet']."'  GROUP BY subject  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $status=$bs['status'];
			  
		 
          }
		   ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px">
            <?php
		echo $credit=$ans['credit'];
		 
		   ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none;font-size:9px  ">
           <?php
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $bs['weight'];  
		 
          }
		  
		   ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px ">
            <?php
		    
			
			/////Credit Earned
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
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
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['grade'];  
			
			
		 
          }
		  
		   ?>
            </div>
            <div style="clear:Both"></div>
          
          
          
          <?php } ?>
          
          <div class="patition" style="width:325px; border:none; border-right:; text-align:left" >
          <span style="background:#fff">TOTAL CREDITS ATTEMPTED : </span><?php
		
		  $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='2' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_attempted=$bs['attempts'];
			  
		 
          }
		   ?>  <BR />
          <span style="background:#fff">GPA CREDITS ATTEMPTED: 
          </span>
          <?php
		
		  $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='2' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_attempted=$bs['attempts'];
			  
		 
          }
		  
		  
		  
		  	
		   ?> 
          </div>
          
          
         
           <div class="patition" style="width:180px; margin-left:5px; text-align:left; border:none" >
         <span style="background:#fff"> TOTAL CREDITS EARNED : <?php
		 
		
		  $as=$conn->query("SELECT SUM(earned) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='2' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_earned=$bs['attempts'];
			  
		 
          }
		  
		  
		  
		  
			
		   ?> </span> <BR />
          <span style="background:#fff">GPA CREDITS EARNED:
          <?php
		
		  $as=$conn->query("SELECT SUM(earned) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='2' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_earned=$bs['attempts'];
			  
		 
          }
		   ?></span> 
          </div>
         
         
         
         
		
		
          <div class="patition" style="width:267px; margin-left:57px; text-align:left; border:none;  border-right:;font-weight:bold" >
          &nbsp;SEMESTER GPA = &nbsp; <?php
		
		  $as=$conn->query("SELECT SUM(credit*grade) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='2' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $weighted_gpa=$bs['attempts'];		 
          }
		  
		   $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='2' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $total_credit=$bs['attempts'];		 
          }
		  echo $second_semseter_gpa=number_format($weighted_gpa/$total_credit,2);
		  
		  
		  
		  ///******************************/
		
		
		
		   ?>  <BR /><br><br>
           
           
           
           
          
          </div>
          
           <div  class="patition" style="border:none;  line-height:none; border-bottom:none ">
           
            </div>
            
            <div  class="patition" style="border:none; line-height:none; border-bottom:none ">
           
            </div>
            
             <div  class="patition" style="border:none; line-height:none;  border-bottom:none ">
          
            </div>
            
             <div  class="patition" style="border:none;  line-height:none; border-bottom:none ">
           
            </div>
            
            <div  class="patition" style="border:none;  line-height:none; border-right:none;  border-bottom:none; border-right:; width:39px; ">
          
            </div>
            
            </DIV>
            
           
            </div>
            
            
          
          
          <!------Close Second Semester Main Courses Box----------->
     
    
    <?php
	
	/////get start year	
$fg=$dbcon->query("SELECT * FROM `my_Registry` WHERE   matric='".$matric."' AND ayear='".$row['db1']."'  and sem='3'  ") or die(mysqli_error($dbcon));
$exist=$fg->num_rows;
	if($exist>=1){
	?>
    
  
  
  
  
          <!------Resit Semester Main Courses Box----------->
          
          <div class="semester_box" style=" margin-top:-63px; height:170px; padding-bottom:10px;  border:none;   ">
          
          <DIV style="float:left; clear:both;  height:15px; width:60%; clear:both; background:#fff">
             <span style="font-weight:bold">RESIT <?PHP echo $year2; ?></span>
         </DIV>
         <div style="clear:both"></div>
          
          
          
          <!--Loading RESIT Courses----->
            
          <?PHP
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".ltrim($row['matricule'])."' and ayear='".$row['db1']."' and sem='3' and levels='".$row['levels']."' AND exam!='' order by code") or die(mysqli_error($conn));
		   $hm=$ad->num_rows;
		  while ($ans=$ad->fetch_assoc()){
		  ?>  
          
          
          
            <div  class="patition" style="border:none;  line-height:none; height:15px; border-bottom:none; border-top:none; width:59PX;  font-size:9px">
            <?php echo strtoupper($ans['code']);  ?>
            </div>
            
             <div  class="patition" style="border:none;  line-height:none; width:260PX; height:15px; border-bottom:none; border-top:none;  text-align:left; font-size:9px">
            
            
             <?php
		
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."'   and department='".$row['departmet']."' GROUP BY subject  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			   $s = ucwords(strtolower($bs['title']));
			 echo  $s;		  
		 
          }
		  
		  
		  ///////////TOTAL CREDITS ATTEMPTED  IN RESITS
		  
		    $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $credit_attempted=$bs['attempts'];
			  
		 
          }
		  
		  
		  
			
			
			/////////// TOTAL CREDIT EARNED IN RESIT
			
			  $as=$conn->query("SELECT SUM(earned) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $credit_earned=$bs['attempts'];
			  
		 
          }
		  
		  
		  
			
			
		   ?>
           
            </div>
            
            <div  class="patition" style="border:none;  line-height:none; height:15px; border-bottom:none; border-top:none; font-size:9px"> 
            <?php
		
		///////////Get total Marks
		  $as=$conn->query("SELECT (ca+exam ) as marks FROM  my_marks where matric='".ltrim($row['matricule'])."' and levels='".$row['levels']."' and code='".$ans['code']."' and sem='3' and ayear='".$row['db1']."'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $resit_mks=$bs['marks']; ///tot mks in this subj	
		  }
			//////////////////average makes gotten from resit  
////use total marks to get garde

 $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."' and level='".$row['levels']."' and department='".$row['departmet']."' GROUP BY subject  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $status=$bs['status'];
			  
		 
          }
		   ?>
            </div>
            
            <div  class="patition" style="border:none;  line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px">
            <?php
		
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."'  and department='".$row['departmet']."' GROUP BY subject  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit=$bs['credit'];
			
		 
          }
		   ?>
            </div>
            
             <div  class="patition" style="border:none;  line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px ">
            <?php
		    
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $resit_mks>=b and $resit_mks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $weight=$bs['weight'];  
		 
          }
		  ?>
            </div>
            
             <div  class="patition" style="border:none;  line-height:none; height:15px;border-bottom:none; border-top:none;font-size:9px ">
            <?php
		    
			
			/////Credit Earned
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $resit_mks>=b and $resit_mks<=a GROUP BY id ") or die(mysqli_error($conn));
		
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
            
            <div  class="patition" style="border:none;  line-height:none; border-right:none; height:15px;border-bottom:none; border-top:none; font-size:9px">
           <?php
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $resit_mks>=b and $resit_mks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['grade'];  
			
			
			
		 
          }
		  
		   ?>
            </div>
            <div style="clear:Both"></div>
          
          
          
          <?php } ?>
          
        
          
          <div class="patition" style="width:262px; margin-left:57px; text-align:left; border:none;   font-weight:bold" >
          &nbsp;&nbsp;SEMESTER GPA = &nbsp; <?php
		
		  $as=$conn->query("SELECT SUM(credit*grade) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $weighted_gpa=$bs['attempts'];		 
          }
		  
		   $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
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
     
  
  
  <!---Second Semester Resit------------>
  
  <div class="semester_box" style="height:60px; border:none;  margin-top:-50px;">
  
 
 
 
 
 <div class="patition" style="width:267px; margin-left:57px; text-align:left; border:none; border:none;  height:180px; bottom:0px;" >
        
       
          
          
          
          </div>
          
           <div  class="patition" style="border:none;  line-height:none; border-bottom:none; height:180px ; bottom:0px; ">
           
            </div>
            
            <div  class="patition" style="border:none;  line-height:none;  height:180px; bottom:0px; ">
           
            </div>
            
             <div  class="patition" style="border:none;  line-height:none;  border-bottom:none ; height:180px; bottom:0px;">
          
            </div>
            
             <div  class="patition" style="border:none;  line-height:none; border-bottom:none ; height:180px; bottom:0px;">
           
            </div>
            
          
 
 
  </div>
   <!----Second semseter Resit End courses---------->
 

    <?PHP
	}
	else {
	}?>
    <!--------------------------------------------------------------------------------------------------For resit--------------------------------------------------------------------------------------------------------------------->
  </div>

    






	</page>
    
    <?php } ?>
    
   
    
    
    
    
    
    <div style="clear:both"></div>

</body>
</html>
<?php } ?>









<!----------------General HND Page----------->





    
    
    
<?php


	////get Current page number and Name 
			 $cl=$dbcon->query("SELECT * FROM pages where num='$page'  ") or die(mysqli_error($dbcon));
while($rowl=$cl->fetch_assoc()){
	 $p_names=$rowl['name'];
	 $cur_pnum=$rowl['num'];
	
}
?>
	<page size="A4" layout="landscape"  >
        <div class="main" style="height:565px; border:1px solid#000; border-bottom:1px solid#000; outline:#FFF;   ";
		  >
           <div style="clear:both; margin-top:40px;"></div>
    
    <?php
	
	 include 'sec_header.php';
	?>
          
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
           
           
          
             <span style="font-weight:bold; ">
			<h2> HND QUALIFICATION</h2></span>
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
            
            
            
            
            
            
      <DIV style=" margin-top:-385PX; height:205PX; width:100%; float:left; line-height:2"  >    
            <!--Loading First &nbsp;SEMESTER Courses----->
            
          <?PHP
		  
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".$matric."'  and sem='hnd'   ORDER BY  code ") or die(mysqli_error($conn));
		   $hm=$ad->num_rows;
		  while ($ans=$ad->fetch_assoc()){
		  ?>  
          
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; width:59PX; font-size:14px">
            <?php echo strtoupper($ans['code']);  ?>
            </div>
            
           
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:260PX; height:15px; border-bottom:none; border-top:none; text-align:left; font-size:14px">
            
            
          Higher National Diploma
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; font-size:14px"> 
           C
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:14px">
            <?php
		  echo $credit=120;
		   ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none;font-size:14px  ">
           <?php
		    
		   echo $earned=$ans['hnd'];
		  ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:14px ">
            <?php
		    
			
			echo $credit;
		  
		  
		  ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-right:none; height:15px;border-bottom:none; border-top:none;font-size:14px">
            <?php
		  
		   echo $grade_point=$ans['mhnd'];
		   ?>
            </div>
            <div style="clear:Both"></div>
          
          
          
          <?php } ?>
          
          
          <div class="patition" style="width:320px; border:none; border-right:1PX solid#000; text-align:left; margin-top:30px; font-size:14px" >
          <span style="background:#fff">TOTAL CREDITS ATTEMPTED :</span> <?php
		
		echo $credit;
		
		
			
		   ?>  <BR />
<span style="background:#fff;  margin-top:30px;">GPA CREDITS ATTEMPTED: </span><?php
		
		  echo $credit;
		   ?> 
          </div>
          
          
           <div class="patition" style="width:180px; margin-left:5px; text-align:left; border:none; font-size:12px; line-height:1.5;  margin-top:30px;" >
           <span style="background:#fff">TOTAL CREDITS EARNED : <?php
		
		 echo $credit;
		   ?> </span> 
          <span style="background:#fff; z-index:-2; padding:5px 5px;">GPA CREDITS EARNED: 
          <?php
		
		  echo $credit;
		  
		  
		   ?></span>
          </div>
          
          <div class="patition" style="width:262px; margin-left:57px; text-align:left; border:none; border-left:1px solid#000; border-right:1px solid#000;font-weight:bold; font-size:14px;  margin-top:30px;" >
          &nbsp;SEMESTER GPA = &nbsp; <?php
		
		  
		  
		 /*  $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $total_credit=$bs['attempts'];		 
          }*/
		echo $hnd_gpa=number_format(($credit*( $grade_point))/ $credit,2) ;
		
		
		/////////check if Registry exists else insert
		  $asl=$conn->query("SELECT * FROM my_stats where matric='".ltrim($row['matricule'])."' and sem='4' and ayear='".$row['db1']."'    ") or die(mysqli_error($conn));
		  $exist=$asl->num_rows;
		  
		  /////if exists upfaye
		  if($exist>=1){
		
			 $uu=$conn->query("UPDATE my_stats set gpa='$hnd_gpa',attempt='$credit',earn='$credit' where  matric='".ltrim($row['matricule'])."' and sem='4' and ayear='".$row['db1']."'  ") or die(mysqli_error($conn));
		
		
		}
			
			/////if not exixt insert
			else {
			$uu=$conn->query("INSERT INTO my_stats   SET gpa='$hnd_gpa',matric='".ltrim($row['matricule'])."', sem='4' ,ayear='".$row['db1']."',attempt='$credit',earn='$credit'  ") or die(mysqli_error($conn));
		
			}
		
		
		
		   ?> <BR />
           
          <div style="font-size:12px; margin-top:30px" >
           <?php
			
include 'for_hnd_gpa.php';			
			?>
          </div>
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
            
             
            <div style="clear:both"></div>
            
              <!--Course Code Box----->
            <div  class="patition" style="border-left:1px solid#000; border-top:0px; line-height:none; height:420px;  border-bottom:none; border-top:none; width:58PX; font-size:9px">
            
            </div>
           
            
            <!----Course Title Box ------->
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:265PX; height:420px; border-bottom:none;  border-top:none; text-align:left; font-size:9px"></div>
           
            
            <!-----Type Box----------->
             
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:420px ">
           
            </div>
                        
            
             <!-----Credit Value Box----------->
             
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:420px ">
           
            </div>
           
            
            
             <!-----Grade Box----------->
             
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:420px;  ">
           
            </div>
            <!----Credit Erned Box--------------->
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none;  height:420px; ">
           
            </div>
            
                        <!----Grade Point  Box--------------->

            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-right:none; height:420px; ">
           
            </div>
            
          <!--Loading Second &nbsp;SEMESTER Courses----->
            



      <DIV style=" margin-top:-325PX; height:205PX;  width:100%; float:left"  >    
      
               
          
          
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; width:59PX; font-size:9px">
           
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:265PX; height:15px; border-bottom:none; border-top:none; text-align:left; font-size:9px">
            
            
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; font-size:9px">        
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px">
           
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none;font-size:9px  ">
        
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px ">
         
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-right:none; height:15px;border-bottom:none; border-top:none; font-size:9px">
         
            </div>
            <div style="clear:Both"></div>
          
        
          
          <div class="patition" style="width:325px; border:none; border-right:; text-align:left" >
         
          </div>
          
          
         
           <div class="patition" style="width:180px; margin-left:5px; text-align:left; border:none" >
         <span style="background:#fff"> 
          </div>
         
         
         
         
		
		
          <div class="patition" style="width:267px; margin-left:57px; text-align:left; border:none;  border-right:;font-weight:bold" >
          
           
            
          
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
$fg=$dbcon->query("SELECT * FROM `my_Registry` WHERE   matric='".$matric."' and dept='$dept' and sem='3'  ") or die(mysqli_error($dbcon));
$exist=$fg->num_rows;
	if($exist>=1){
	?>
    
  
  
  
  
          <!------Resit Semester Main Courses Box----------->
          
          <div class="semester_box" style=" margin-top:-63px; height:170px; padding-bottom:10px;   ">
          
          <DIV style="float:left; clear:both;  height:15px; width:60%; clear:both; background:#fff">
             <span style="font-weight:bold">RESIT <?PHP echo $year2; ?></span>
         </DIV>
         <div style="clear:both"></div>
          
          
          
          <!--Loading RESIT Courses----->
            
          <?PHP
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".ltrim($row['matricule'])."' and ayear='".$row['db1']."' and sem='3' and levels='".$row['levels']."' and exam!='' order by code") or die(mysqli_error($conn));
		   $hm=$ad->num_rows;
		  while ($ans=$ad->fetch_assoc()){
		  ?>  
          
          
          
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; width:59PX;  font-size:9px">
            <?php echo strtoupper($ans['code']);  ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:260PX; height:15px; border-bottom:none; border-top:none;  text-align:left; font-size:9px">
            
            
             <?php
		
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."'   and department='".$row['departmet']."' GROUP BY subject  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $subj=$bs['title'];
			  
		 
          }
		  
		  
		  ///////////TOTAL CREDITS ATTEMPTED  IN RESITS
		  
		    $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $credit_attempted=$bs['attempts'];
			  
		 
          }
		  
		  
		  
			
			
			/////////// TOTAL CREDIT EARNED IN RESIT
			
			  $as=$conn->query("SELECT SUM(earned) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $credit_earned=$bs['attempts'];
			  
		 
          }
		  
		  
		  
			
			
		   ?>
           
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; font-size:9px"> 
            <?php
		
		///////////Get total Marks
		  $as=$conn->query("SELECT (ca+exam ) as marks FROM  my_marks where matric='".ltrim($row['matricule'])."' and levels='".$row['levels']."' and code='".$ans['code']."' and sem='3' and ayear='".$row['db1']."'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $  my_marks=round($bs['marks']); ///tot mks in this subj	 
          }
////use total marks to get garde

 $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."' and level='".$row['levels']."' and department='".$row['departmet']."' GROUP BY subject  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $status=$bs['status'];
			  
		 
          }
		   ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px">
            <?php
		
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."'  and department='".$row['departmet']."' GROUP BY subject  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit=$bs['credit'];
			
		 
          }
		   ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px ">
            <?php
		    
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $weight=$bs['weight'];  
		 
          }
		  ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px;border-bottom:none; border-top:none;font-size:9px ">
            <?php
		    
			
			/////Credit Earned
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
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
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['grade'];  
			
			
			
		 
          }
		  
		   ?>
            </div>
            <div style="clear:Both"></div>
          
          
          
          <?php } ?>
          
        
          
          <div class="patition" style="width:262px; margin-left:57px; text-align:left; border:none;   font-weight:bold" >
          &nbsp;&nbsp;SEMESTER GPA = &nbsp; <?php
		
		  $as=$conn->query("SELECT SUM(credit*grade) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $weighted_gpa=$bs['attempts'];		 
          }
		  
		   $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
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
     
  
  
  <!---Second Semester Resit------------>
  
  <div class="semester_box" style="height:60px; border-right:none; margin-top:-50px;">
  
 
 
 
 
 <div class="patition" style="width:267px; margin-left:57px; text-align:left; border:none;height:180px; bottom:0px;" >
        
       
          
          
          
          </div>
          
           <div  class="patition" style="border:none;  line-height:none; border-bottom:none; height:180px ; bottom:0px; ">
           
            </div>
            
            <div  class="patition" style="border:none;  line-height:none; border-bottom:none; height:180px; bottom:0px; ">
           
            </div>
            
             <div  class="patition" style="border:none;  line-height:none;  height:180px; bottom:0px;">
          
            </div>
            
             <div  class="patition" style="border:none;  line-height:none;height:180px; bottom:0px;">
           
            </div>
            
          
 
 
  </div>
   <!----Second semseter Resit End courses---------->
 

    <?PHP
	}
	else {
	}?>
    <!--------------------------------------------------------------------------------------------------For resit--------------------------------------------------------------------------------------------------------------------->
  </div>

    <?php 
	
		include 'footer.php'; 
		

			 ?>







	</page>
   