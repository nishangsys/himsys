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
	$page_num=$c->num_rows;
while($row=$c->fetch_assoc()){
$dept=$row['departmet'];

$date = $row['db1'];
$date = explode('/', $date);
 $year1 = $date[0];
 $year2  = $date[1];

 $page/$page_num;
 
 
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
	border:1px solid#000;
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
	padding:5px 5px;
	margin:5px 30px;
	border:;
	text-align:left;
	
}
.for_registry{
	float: right;
	bottom:20px;
	right:60px;
	height:20px;
	width:260px;
	margin-right:230px;
	margin-top:40px;
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
  $h_many;
?>
	<page size="A4" layout="landscape">
        <div class="main" style="height: <?php  if($cur_pnum==$h_many){
			echo "614px; border:1px solid#000; border-bottom:1px solid#000; ";
			
		}
		else if($cur_pnum<$h_many && $cur_pnum!=1){
			echo "614px; border:1px solid#000; border-bottom:1px solid#000; ";
		}
		else{
			echo "760px;border:1px solid#000 ";
		}
			 ?>;   " >
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
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:455px; border-bottom:none; border-top:none; width:59PX; font-size:9px">
            
            </div>
           
            
            <!----Course Title Box ------->
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:260PX; height:455px; border-bottom:none;  border-top:none; text-align:left; font-size:9px"></div>
           
            
            <!-----Type Box----------->
             
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:455px ">
           
            </div>
                        
            
             <!-----Credit Value Box----------->
             
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:455px ">
           
            </div>
           
            
            
             <!-----Grade Box----------->
             
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:455px;  ">
           
            </div>
            <!----Credit Erned Box--------------->
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none;  height:455px; ">
           
            </div>
            
                        <!----Grade Point  Box--------------->

            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-right:none; height:455px; ">
           
            </div>
            
            <?php include 'First_semester.php'; ?>
            <!-------------************---------->
            
          </div>
          
          
          <!------Close First Semester Main Courses Box----------->
     
     
     
     
     
     
     
          <!------Second Semester Main Courses Box----------->
          
          <div class="semester_box" style="width:530px; border:none;    height:300px" >
         
         
         
         
         
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
            <div  class="patition" style="border-left:1px solid#000; border-top:0px; line-height:none; height:455px; border-bottom:none; border-top:none; width:58PX; font-size:9px">
            
            </div>
           
            
            <!----Course Title Box ------->
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:265PX; height:455px; border-bottom:none;  border-top:none; text-align:left; font-size:9px"></div>
           
            
            <!-----Type Box----------->
             
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:455px ">
           
            </div>
                        
            
             <!-----Credit Value Box----------->
             
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:455px ">
           
            </div>
           
            
            
             <!-----Grade Box----------->
             
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:455px;  ">
           
            </div>
            <!----Credit Erned Box--------------->
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none;  height:455px; ">
           
            </div>
            
                        <!----Grade Point  Box--------------->

            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-right:none; height:455px; ">
           
            </div>
            
           <?php
		   /********Second Semseter*************/
		   include 'second_semester.php';
		   
		   ?>
            </div>
            
            
          
          
          <!------Close Second Semester Main Courses Box----------->
     
    
   
    <?php
	
	/////get start year	
$fg=$dbcon->query("SELECT * FROM `my_Registry` WHERE   matric='".$matric."'  and sem='3'  ") or die(mysqli_error($dbcon));
 $exist=$fg->num_rows;
	if($exist>=1){
	 include 'resit_semester.php';
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