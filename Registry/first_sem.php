<?PHP
include  '../includes/dbc.php';
 
	 $matric=$_GET['xxc'];;
	 


	$a=$dbcon->query("SELECT * FROM semesters where s_num='".$_GET['sem']."' ") or die(mysqli_error($dbcon));

		
	while($b=$a->fetch_assoc()){
		 $semester_name=$b['s_name'];
	}
	
	
	$d=$dbcon->query("SELECT * FROM  years,levels,special,students WHERE students.id='$matric'
   AND students.year_id=years.id AND students.dept_id=special.id AND students.level_id=levels.id 
   
	") or die(mysqli_error($dbcon));
	while($row=$d->fetch_assoc()){
		
		 $ayear=$row['year_id'];
		
		
		
		
///////check if this program grading system has been set
$cd=$dbcon->query("SELECT * FROM `segments` WHERE dept_id='".$row['dept_id']."'  ") or die(mysqli_error($dbcon));
  $set=$cd->num_rows;
  ////while loop to get department id from sector tbl			
				while($nn=$cd->fetch_assoc()){
					 $dep_id=$nn['sector'];
 					}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo  $semester_name; ?>  </title>
<link href="style.css" type="text/css" rel="stylesheet" />

<style type="text/css">
body{
	font-family:Arial, Helvetica, sans-serif;
}
  @page { size: portrait; }
  .sub{
	  width:645px;
	  height:900px;
	 
	  margin:auto;
	  
  }
  .head1{
	  width:100%;
	  height:auto;
	   margin-top:50px;
	 
  }
  table{
	   width:100%;
  }
 table,tr,td,th{
	 border:1px dashed#000;
	 border-collapse:collapse;
	 padding:5px 5px;
	 font-size:12px;
	 line-height:1.5;
	
 }
   .head2{
	  width:100%;
	  height:auto;
	
	  padding-bottom:20px;
  }
  .left_box{
	  float:left;
	  height:125px;
	  width:445px;
	  border:1px solid#000;
	  
  }
  .right_box{
	  float:left;
	  height:115px;
	  width:185px;
	  border:1px solid#000;
	  font-size:10px;
	  padding:5px 5px;
	  
  }
  .left_box_textbox{
	  width:98%;
	  padding:5px 5px;
	  border:1px dashed#000;
	  height:20px;
	  
  }
  .for_grades{
	width:20px;
	 margin:0px;
	 padding:0px;
	  float:left;
	  line-height:1.5;
	 
}
.span{
	font-weight:bold;
	font-style:italic;
}
.sn{
	width:20px;
	height:25px;
	float:left;
	border:1px dashed#000;
	clear:both;
}
.main_thing{
	width:100%;
	height:auto;
	overflow:hidden;
	padding-bottom:0px;
	border:1px dashed#000;
	clear:both;
	
}
.footer_box{
	width:98%;
	padding:5px 5px;
	margin-top:20px;
	border:1px solid#000;
	height:25px;
}
.footer_box_left{
	width:50%;
	float:left;
	padding:0px 5px;
	border-right:1px solid#000;
	
	
}
.footer_box_right{
	width:40%;
	
	float:left;
	
}
</style>
</head>

<body>
<div class="sub">
	<div class="head1">
   
      <?php include '../Cash/header.php'; ?>
    </div>
    <div style="clear:both; height:10px"></div>
    
    
    <div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;padding:5px 0px; font-weight:bold;   "><?php echo  $semester_name; ?>  <?PHP echo $row['year_name']; ?>  INDIVIDUAL RESULTS SLIP</div>
    <!--left box------->
   <div class="left_box">
   <div class="left_box_textbox">Name: <span class="span"><?php echo $row['fname']; ?></span> </div>
   <div class="left_box_textbox">Program: <span class="span"><?php echo $row['prog_name']; ?></span>  </div>
   <div class="left_box_textbox">Matricle: <span class="span"><?php echo $row['matricule']; ?> </span> </div>
    <div class="left_box_textbox">Level: <span class="span"><?php echo $row['levels']; ?> </span> </div>
   </div> 
   
   
   <!--Right box for grading------>
     <div class="right_box">
       <?php
			
$cs=$dbcon->query("SELECT * FROM `grading` where sector='$dep_id' order by id DESC ") or die(mysqli_error($dbcon));
while($ro=$cs->fetch_assoc()){
	
			 ?>
<div class="for_grades"> <?php echo $ro['weight']; ?> :  </div>  <div class="for_grades"><?php echo $ro['b']; ?></div> <div class="for_grades" style="margin-left:-5px"> - </div>
<div class="for_grades" style="margin-left:-10px">
<?php echo $ro['a']; ?></div>
 &nbsp; 
 <div class="for_grades" style="margin-left:0px">% </div>
  <div class="for_grades"> <?php echo $ro['grade']; ?></div>
  <div class="for_grades" style="margin-left: px; width:75px;   font-size:8px"> <?php echo $ro['remark']; ?> </div>
 
  <div style="clear:both"></div>
  
  
<?php } ?></div>

    
    
    
    <div class="main_thing">
    
    <table>
    <th>Code</th><th>Course</th><th>ST</th><th>CV</th><th>CA</th><th>Exams</th><th>Total</th><th>Grade</th><th>Remarks</th></tr>
    <?php
	
	$ds=$dbcon->query("SELECT *  from   my_marks where matric='".$row['matricule']."' and year_id='".$row['year_id']."'  and sem='".$_GET['sem']."' order by code ") or die(mysqli_error($dbcon));
	$num_of_students=$ds->num_rows;
	$i=1;
	while($rows=$ds->fetch_assoc()){
		
	?>
    
   <tr  ><td><?php echo $rows['code']; ?></td>
   <td style="font-size:10px"><?php
		
		  $as=$dbcon->query("SELECT * FROM subjects where code='".$rows['code']."'   and prog_id='".$row['dept_id']."' GROUP BY code  ") or die(mysqli_error($dbcon));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $subj=$bs['title'];
			 $credit_val=$bs['cv'];
			 $status=$bs['status'];
			  
		 
          }
		   ?></td><td><?php echo $status; ?></td>
           <td><?php echo $credit_val; ?></td>
           <TD><?php echo $rows['ca']; ?></TD>
           <td><?php echo $rows['exam']; ?></td>
           <td><?php echo $my_marks=$rows['ca']+$rows['exam'];
		   
		   
		   
		 	  
	/////Credit Earned
		    $asj=$dbcon->query("SELECT * FROM grading where  sector='$dep_id' and $my_marks>=b and $my_marks<=a GROUP BY id ") or die(mysqli_error($dbcon));
		
		  while ($bs=$asj->fetch_assoc()){
			  
			 $status=$bs['status']; 
			
		  }
			
			
			if($status>=1){
				
			
			////UPDATE results set valid =1 meaning validated
	 $uu=$dbcon->query("UPDATE   my_marks set valid='1'   where level_id='".$row['level_id']."' and  year_id='".$row['year_id']."' and code='".$rows['code']."' and matric ='".$row['matricule']."' ") or die(mysqli_error($dbcon));
			}
			else {
				
				
					 ////UPDATE results set valid =1 meaning validated
	 $uu=$dbcon->query("UPDATE   my_marks set valid='0'   where level_id='".$row['levels']."' and  year_id='".$row['year_id']."' and code='".$rows['code']."' and matric ='".$row['matricule']."' ") or die(mysqli_error($dbcon));
		
			}
			
		  
		   
		   
		   
		   
		   
		    ?></td>
           <td><?php  $as=$dbcon->query("SELECT * FROM grading where  sector='$dep_id' and $my_marks>=b and $my_marks<=a GROUP BY id ") or die(mysqli_error($dbcon));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $bs['weight'];  
		 
          } ?></td>
           <td><?php  $as=$dbcon->query("SELECT * FROM grading where  sector='$dep_id' and $my_marks>=b and $my_marks<=a GROUP BY id ") or die(mysqli_error($dbcon));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $bs['remark'];  
		 
          } 
	
		  
		  
		  
		  ?></td></tr>
    <?php } ?>
    
    </table>
    
    
    <div class="footer_box">
    		<div class="footer_box_left">Number of students Offered: <?php echo $num_of_students; ?></div>
            
            <div class="footer_box_right">Number of students Passed: <?php 
			
			
			/////Credit Earned
		    $as=$dbcon->query("SELECT * FROM   my_marks where   matric='".$row['matricule']."' and year_id='".$row['year_id']."' and sem='".$_GET['sem']."'and valid='1' ") or die(mysqli_error($dbcon));
			echo $passed=$as->num_rows;
		
		 ?> </div>
    
    </div>
    </div>


</div>
</body>
</html>
<?PHP }  ?>