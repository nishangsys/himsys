<?php  include '../includes/dbc.php'; 
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
					////if its hnd add a page else remove it
		  
		  if($dep_id==12){
			  $add_page=1;
		  }
		  else if($dep_id==9){
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
.title{
	padding:5px 5px;
	font-size:18px;
	font-weight:bold;
	text-align:center;
	border-bottom:1PX solid#000;
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
	border-right:1px solid#000;
	width:350px;
	height:430px;
	border-top:none;
	border-bottom:none;
	
}
.semester_box_page2{
	float:left;
	padding:0px 0px;
	border:1px solid#000;
	width:527px;
	height:auto;
	overflow:hidden;
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


<body >

<?php


	////get Current page number and Name 
			 $cl=$dbcon->query("SELECT * FROM pages where num='$page'  ") or die(mysqli_error($dbcon));
while($rowl=$cl->fetch_assoc()){
	 $p_names=$rowl['name'];
	 $cur_pnum=$rowl['num'];
	
}
?>

<h3 style="color:#F00; font-size:22px; text-align:center">BUILDING <span style="color:#00F"><?PHP echo $row['fname'];  ?> </span> TRANSCRIPT PLEASE TAKE A CUP OF TEA WHILE IT LOADS</h3>
	<page size="A4" layout="landscape"  >
        <div class="main" style="height:690px; border:1px solid#000; border-bottom:1px solid#000; outline:#FFF;  ";
		  >
           <div style="clear:both; margin-top:40px;"></div>
    
     <?php
	
	if($page==1){
		 include 'header_pbh.php';
	}
	else {
	 include 'sec_header.php';
	}?>
          
          
          <!------First Sequence----------->
          
          <div class="semester_box">
          <div class="title">FIRST SEQUENCE</div>
           <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:50PX;">
            Course Code
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:190PX;">
            Course Title
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:29px; line-height:none; ">
           Hrs
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; ">
           Score<br />
           /100
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:35px; line-height:none; ">
           Grade
            </div>
            
            
            
            
            
            
            
            
        
            
              <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:50PX; height:367px">
          
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:190PX;height:367px">
            
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:29px; line-height:none;height:367px ">
          
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none;height:367px ">
           
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:35px; line-height:none;height:367px ">
          
            </div>
            
        
        
          <?php
		  include 'First_sequence.php';
		  ?>
            
          
            
          </div>
          
          
          <!------END First Sequence----------->
     
     
     
     
     
     
     
     
      <!------Second Sequence----------->
          
         
          <div class="semester_box">
          <div class="title">SECOND SEQUENCE</div>
           <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:50PX;">
            Course Code
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:190PX;">
            Course Title
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:29px; line-height:none; ">
           Hrs
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; ">
           Score<br />
           /100
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:35px; line-height:none; ">
           Grade
            </div>
            
            
            
            
            
            
            
            
        
            
              <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:50PX; height:367px">
          
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:190PX;height:367px">
            
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:29px; line-height:none;height:367px ">
          
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none;height:367px ">
           
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:35px; line-height:none;height:367px ">
          
            </div>
            
        
        
          <?php
		  include 'second_sequence.php';
		  ?>
            
          
            
          </div>
          
          
          
          <!------END Second Sequence----------->
          
          
          
          
           <!------Third Sequence----------->
          
          
          <div class="semester_box" style=" border:none; width:356px">
          <div class="title">THIRD SEQUENCE</div>
           <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:50PX;">
            Course Code
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:196PX;">
            Course Title
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:29px; line-height:none; ">
           Hrs
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; ">
           Score<br />
           /100
            </div>
            
            <div  class="patition" style="border:none; border-bottom:1px solid#000;width:35px; line-height:none; ">
           Grade
            </div>
            
            
            
            
            
            
            
            
        
            
              <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:50PX; height:367px">
          
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:196PX;height:367px">
            
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:29px; line-height:none;height:367px ">
          
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none;height:367px ">
           
            </div>
            
            <div  class="patition" style="border:none; width:35px; line-height:none;height:367px ">
          
            </div>
            
        
        
          <?php
		  include 'third_sequence.php';
		  ?>
            
          
          
          
          
            
          </div>
          
          
          
          <!------END Third Sequence----------->
    

</div>




	</page>
    
    <?php } ?>
    
    
    
    
    
    
    
    
    <div style="clear:both"></div>

</body>
</html>
<?php } ?>


   
    
    
    
    
    
    

   
    
    
    
<?php


	////get Current page number and Name 
			 $cl=$dbcon->query("SELECT * FROM pages where num='$page'  ") or die(mysqli_error($dbcon));
while($rowl=$cl->fetch_assoc()){
	 $p_names=$rowl['name'];
	 $cur_pnum=$rowl['num'];
	
}
?>
	<page size="A4" layout="landscape"  >
        <div class="main" style="height:600px; border:1px solid#000; border-bottom:1px solid#000; outline:#FFF;   ";
		  >
           <div style="clear:both; margin-top:40px;"></div>
    
    <?php
	
	 include 'sec_header.php';
	?>
    
    <!----FIRST BOX RESIT WRITTEN------>
    
    <div class="semester_box_page2">
    <div class="title">RESIT SESSION WRITTEN</div>
     <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:90PX;">
            Course Code
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:273PX;">
            Course Title
            </div>
            
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:80PX; ">
           Score<br />
           /100
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:80px; line-height:none; ">
           Grade
            </div>
            
            
            
             <?PHP
			
				 $stripped = str_replace(' ', '', $matric);
				
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".$stripped."' and     sem='4' and credit='W'  GROUP BY roll order by code ") or die(mysqli_error($conn));
		  while ($ans=$ad->fetch_assoc()){
		  
		  ?>  
                 
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:90PX;height:15px ; padding:5px 0px; text-align:left">
           &nbsp; <?php echo $ans['code']; ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:273PX;height:15px ; padding:5px 0px; text-align:left">
            &nbsp; <?php
		
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."'  and department='".$ydept."' GROUP BY subject  ") or die(mysqli_error($conn));

		
		  while ($bs=$as->fetch_assoc()){
			  
		  $s = ucwords(strtolower($bs['title']));
			 echo  $s;
			  
		 
          }
		   ?>
            </div>
            
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:80PX;height:15px ; padding:5px 0px; ">
           &nbsp;
             <?php  
	///Mulp msk by 100 and divide mks  by 20 have mks on 100   
		  $  my_marks=($ans['exam']*100)/20;
		  ////Round up mks to 2 d,p
		 echo $my_converted_mks=number_format($  my_marks,2); 
		 
		 
	////Update Registry with total/100 for avg	  	
			 $uu=$conn->query("UPDATE  my_marks set earned='".$  my_marks."' where  matric='".$stripped."' and sem='4' and code='".$ans['code']."' and credit='W'  ") or die(mysqli_error($conn));
			 
			 ////if mark is greater than 50 then its a pass mks or else he is 
	if($  my_marks>=50){
		////PASS WITH VALID 1
			  	
			 $uu=$conn->query("UPDATE  my_marks set valid='1' where  matric='".$stripped."' and sem!='4' and  code='".$ans['code']."'  ") or die(mysqli_error($conn));
			 $uu2=$conn->query("UPDATE  my_marks set valid='1' where  matric='".$stripped."' and sem='4' and  code='".$ans['code']."'  ") or die(mysqli_error($conn));
	}
	else {
		////FAIL WITH VALID 0
		
			 $uu=$conn->query("UPDATE  my_marks set valid='0' where  matric='".$stripped."' and sem!='4' and  code='".$ans['code']."'   ") or die(mysqli_error($conn));
	}
		 /********
	////Update Registry with total/100 for avg	  	
			 $uu=$conn->query("UPDATE  my_marks set earned='".$  my_marks."' where  matric='".$stripped."' and sem='3' and ayear='".$row['db1']."' and code='".$ans['code']."'  ") or die(mysqli_error($conn));
			 
			 ////if mark is greater than 50 then its a pass mks or else he is 
	if($  my_marks>=50){
		////PASS WITH VALID 1
			  	
			 $uu=$conn->query("UPDATE  my_marks set valid='1' where  matric='".$stripped."' and sem='3' and ayear='".$row['db1']."' and code='".$ans['code']."'  ") or die(mysqli_error($conn));
	}
	else {
		////FAIL WITH VALID 0
		
			 $uu=$conn->query("UPDATE  my_marks set valid='0' where  matric='".$stripped."' and sem='3' and ayear='".$row['db1']."' and code='".$ans['code']."'  ") or die(mysqli_error($conn));
	}
	*******/
		   ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:80px; line-height:none;height:15px ; padding:5px 0px; ">
            <?php
			////Get grade from grading scale
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['weight'];  
			 
		 
          }
		  
		   ?>
            </div>
            <?PHP } ?>
            
    
    </div>
    
    
    <!----END FIRST BOX RESIT WRITTEN------>
    
    
    
    
    <!----START FIRST BOX RESIT PRACTICAL------>
    
    <div class="semester_box_page2">
    <div class="title">RESIT SESSION PRACTICAL</div>
    
     <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:90PX;">
            Course Code
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:273PX;">
            Course Title
            </div>
            
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:80PX; ">
           Score<br />
           /100
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:80px; line-height:none; ">
           Grade
            </div>
            
            
            
             <?PHP
				 $stripped = str_replace(' ', '',$matric);
				
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".$stripped."'  and sem='4' and credit='P'  GROUP BY roll order by code ") or die(mysqli_error($conn));
		  while ($ans=$ad->fetch_assoc()){
		  
		  ?>  
                 
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:90PX;height:15px ; padding:5px 0px; text-align:left">
           &nbsp; <?php echo $ans['code']; ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:273PX;height:15px ; padding:5px 0px; text-align:left">
            &nbsp; <?php
		
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."' and department='".$ydept."' GROUP BY subject  ") or die(mysqli_error($conn));

		
		  while ($bs=$as->fetch_assoc()){
			  
		  $s = ucwords(strtolower($bs['title']));
			 echo  $s;
			  
		 
          }
		   ?>
            </div>
            
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:80PX;height:15px ; padding:5px 0px; ">
           &nbsp;
             <?php  
	///Mulp msk by 100 and divide mks  by 20 have mks on 100   
		  $  my_marks=($ans['exam']*100)/20;
		  ////Round up mks to 2 d,p
		 echo $my_converted_mks=number_format($  my_marks,2); 
		
	////Update Registry with total/100 for avg	  	
			 $uu=$conn->query("UPDATE  my_marks set earned='".$  my_marks."' where  matric='".$stripped."' and sem='4' and code='".$ans['code']."' and credit='P'  ") or die(mysqli_error($conn));
			 
			 ////if mark is greater than 50 then its a pass mks or else he is 
	if($  my_marks>=50){
		////PASS WITH VALID 1
			   $uu2=$conn->query("UPDATE  my_marks set valid='1' where  matric='".$stripped."' and sem='4' and  code='".$ans['code']."'  ") or die(mysqli_error($conn));	
			 $uu=$conn->query("UPDATE  my_marks set valid='1' where  matric='".$stripped."' and sem!='4' and  code='".$ans['code']."'  ") or die(mysqli_error($conn));
	}
	else {
		////FAIL WITH VALID 0
		
			 $uu=$conn->query("UPDATE  my_marks set valid='0' where  matric='".$stripped."' and sem!='4' and  code='".$ans['code']."'   ") or die(mysqli_error($conn));
	}
	
		   ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:80px; line-height:none;height:15px ; padding:5px 0px; ">
            <?php
			////Get grade from grading scale
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['weight'];  
			 
		 
          }
		  
		   ?>
            </div>
            <?PHP } ?>
    
    
    </div>
          
    <DIV style="clear:both"></DIV> 
    <!----END FIRST BOX RESIT PRACTICAL------>    
    <!--------------------------------------------------------------------------------------------------CERTIFICATION EXAMS--------------------------------------------------------------------------------------------------------------------->
    <div class="title">CERTIFICATION EXAMINATION SESSION JULY <?php echo $year2; ?></div>
    
    
    
    
    
    
    <!----SECOND BOX RESIT WRITTEN------>
    
    <div class="semester_box_page2">
    <div class="title"> WRITTEN PAPERS</div>
     <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:90PX;">
            Course Code
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:273PX;">
            Course Title
            </div>
            
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:80PX; ">
           Score<br />
           /100
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:80px; line-height:none; ">
           Grade
            </div>
            
            
            
             <?PHP
				 $stripped = str_replace(' ', '',$matric);
				
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".$stripped."'  and  sem='5' and credit='W'  GROUP BY roll order by code ") or die(mysqli_error($conn));
		  while ($ans=$ad->fetch_assoc()){
		  
		  ?>  
                 
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:90PX;height:15px ; padding:5px 0px; text-align:left">
           &nbsp; <?php echo $ans['code']; ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:273PX;height:15px ; padding:5px 0px; text-align:left">
            &nbsp; <?php
		
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."'  and department='".$ydept."' GROUP BY subject  ") or die(mysqli_error($conn));

		
		  while ($bs=$as->fetch_assoc()){
			  
		  $s = ucwords(strtolower($bs['title']));
			 echo  $s;
			  
		 
          }
		   ?>
            </div>
            
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:80PX;height:15px ; padding:5px 0px; ">
           &nbsp;
             <?php  
	///Mulp msk by 100 and divide mks  by 20 have mks on 100   
		  $  my_marks=($ans['exam']*100)/20;
		  ////Round up mks to 2 d,p
		 echo $my_converted_mks=number_format($  my_marks,2); 
		
	////Update Registry with total/100 for avg	  	
			 $uu=$conn->query("UPDATE  my_marks set earned='".$  my_marks."' where  matric='".$stripped."' and sem='5' and code='".$ans['code']."' and credit='W'  ") or die(mysqli_error($conn));
			 
			 ////if mark is greater than 50 then its a pass mks or else he is 
	if($  my_marks>=50){
		////PASS WITH VALID 1
			  	
			 $uu=$conn->query("UPDATE  my_marks set valid='1' where  matric='".$stripped."' and sem='5' and code='".$ans['code']."'  and credit='W' ") or die(mysqli_error($conn));
	}
	else {
		////FAIL WITH VALID 0
		
			 $uu=$conn->query("UPDATE  my_marks set valid='0' where  matric='".$stripped."' and sem='5'  and credit='W' and code='".$ans['code']."'  ") or die(mysqli_error($conn));
	}
	
		   ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:80px; line-height:none;height:15px ; padding:5px 0px; ">
            <?php
			////Get grade from grading scale
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['weight'];  
			 
		 
          }
		  
		   ?>
            </div>
            <?PHP } ?>
            
    
    </div>
    
    
    <!----END SECOND BOX RESIT WRITTEN------>
    
    
    
    
    <!----START SECOND BOX RESIT PRACTICAL------>
    
    <div class="semester_box_page2">
    <div class="title"> PRACTICALS</div>
    
     <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:90PX;">
            Course Code
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:273PX;">
            Course Title
            </div>
            
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:80PX; ">
           Score<br />
           /100
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:80px; line-height:none; ">
           Grade
            </div>
            
            
            
             <?PHP
				 $stripped = str_replace(' ', '',$matric);
				
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".$stripped."'    and sem='5' and credit='P'  GROUP BY roll order by code ") or die(mysqli_error($conn));
		  while ($ans=$ad->fetch_assoc()){
		  
		  ?>  
                 
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:90PX;height:15px ; padding:5px 0px; text-align:left">
           &nbsp; <?php echo $ans['code']; ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:273PX;height:15px ; padding:5px 0px; text-align:left">
            &nbsp; <?php
		
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."' and department='".$ydept."' GROUP BY subject  ") or die(mysqli_error($conn));

		
		  while ($bs=$as->fetch_assoc()){
			  
		  $s = ucwords(strtolower($bs['title']));
			 echo  $s;
			  
		 
          }
		   ?>
            </div>
            
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:80PX;height:15px ; padding:5px 0px; ">
           &nbsp;
             <?php  
	///Mulp msk by 100 and divide mks  by 20 have mks on 100   
		  $  my_marks=($ans['exam']*100)/20;
		  ////Round up mks to 2 d,p
		 echo $my_converted_mks=number_format($  my_marks,2); 
		
	////Update Registry with total/100 for avg	  	
			 $uu=$conn->query("UPDATE  my_marks set earned='".$  my_marks."' where  matric='".$stripped."' and sem='5' and credit='P' and code='".$ans['code']."'  ") or die(mysqli_error($conn));
			 
			 ////if mark is greater than 50 then its a pass mks or else he is 
	if($  my_marks>=50){
		////PASS WITH VALID 1
			  	
			 $uu=$conn->query("UPDATE  my_marks set valid='1' where  matric='".$stripped."' and sem='5' and credit='P'  and code='".$ans['code']."'  ") or die(mysqli_error($conn));
	}
	else {
		////FAIL WITH VALID 0
		
			 $uu=$conn->query("UPDATE  my_marks set valid='0' where  matric='".$stripped."' and sem='5' and credit='P'  and code='".$ans['code']."'  ") or die(mysqli_error($conn));
	}
	
		   ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:80px; line-height:none;height:15px ; padding:5px 0px; ">
            <?php
			////Get grade from grading scale
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['weight'];  
			 
		 
          }
		  
		   ?>
            </div>
            <?PHP } ?>
    
    
    </div>
          
     
    <!----END SECOND BOX RESIT PRACTICAL------>  
    
    
    
    
  </div>

    <?php 
	
		include 'footer.php'; 
		

			 ?>







	</page>
   
    