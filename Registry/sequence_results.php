<?PHP
include  '../includes/dbc.php';
 
	 $mat=$_GET['xxc'];;
	
	$d=$dbcon->query("SELECT *  from courses where roll='$mat'") or die(mysqli_error($dbcon));
	while($row=$d->fetch_assoc()){
		
		$matric=$row['matricule'];
		$dept=$row['departmet'];
		$ayear=$row['db1'];
		
///////check if this program grading system has been set
$cd=$dbcon->query("SELECT * FROM `segments` WHERE dept='".$row['departmet']."'  ") or die(mysqli_error($dbcon));
  $set=$cd->num_rows;
  ////while loop to get department id from sector tbl			
				while($nn=$cd->fetch_assoc()){
					 $dep_id=$nn['sector'];
 					}
					
					 $sem=$_GET['seq'];
		if($sem==1){
			$sem_name='First Sequence';
		}
		else if($sem==2){
			$sem_name='Second Sequence';
		}
		else if($sem==3){
			$sem_name='Third Sequence';
		}
		else {
			$sem_name='Resits';
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FIRST SEMESTER RESULTS</title>
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
    	<div style="  height:130px; width:19%; float:left; border:1px dashed#000;  ">
<IMG src="../img/logo.png" style="margin:AUTO ; width:120PX; height:120PX"  />
</div>

		<div style="  height:auto; width:80%; float:left; border:;  ">

<div style="  height:AUTO; width:100%; float:left; text-align:center; background:#333; color:#FFF; 
  border:1px DASHED#000;text-transform:uppercase; font-size:18px; font-weight:bold ; padding:10px 0px; ">   BIAKA UNIVERSITY INSTITUTE OF BUEA(BUIB)
  <br />
  <span style="font-size:14px; font-style:italic"><br />The Audacity to be different</span> </div>


<div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;padding:5px 0px;   ">Website : www.biakahc.org </div>
  
  <div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px; padding:5px 0px; text-transform:uppercase  "> p.o box 77 bokoko ,buea</div></div>


    
    </div>
    
    
    
    <div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;padding:5px 0px; font-weight:bold;   "><?PHP echo $sem_name; ?> <?PHP echo $row['db1']; ?>  INDIVIDUAL RESULTS SLIP</div>
    <!--left box------->
   <div class="left_box">
   <div class="left_box_textbox">Name: <span class="span"><?php echo $row['fname']; ?></span> </div>
   <div class="left_box_textbox">Program: <span class="span"><?php echo $row['departmet']; ?></span>  </div>
   <div class="left_box_textbox">Matricle: <span class="span"><?php echo $row['matricule']; ?> </span> </div>
    <div class="left_box_textbox">Level: <span class="span"><?php echo $row['levels']; ?> </span> </div>
   </div> 
   
   
   <!--Right box for grading------>
     <div class="right_box">
       <?php
			
$cs=$dbcon->query("SELECT * FROM `grading` where sector='$dep_id' order by 	b DESC ") or die(mysqli_error($dbcon));
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
    <th>Code</th><th>Course Title</th><th>ST</th><th>MV</th><th>Module/20</th><th>Module/100</th><th>Grade</th><th>Remarks</th></tr>
    <?php
	
	$ds=$dbcon->query("SELECT *  from  my_marks where matric='".$matric."' and ayear='".$ayear."'  and sem='".$_GET['seq']."'  order by code ") or die(mysqli_error($dbcon));
	 $num_of_courses=$ds->num_rows;
	$i=1;
	while($rows=$ds->fetch_assoc()){
		
	?>
    
   <tr  ><td><?php echo $rows['code']; ?></td>
   <td style="font-size:10px"><?php
		
		 $as=$dbcon->query("SELECT * FROM subject where subject='".$rows['code']."'   and department='".$dept."' GROUP BY subject  ") or die(mysqli_error($dbcon));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $subj=$bs['title'];
			 $credit_val=$bs['credit'];
			 $status=$bs['status'];
			  
		  }
		   ?></td><td>C</td>
           <td>20</td>
          
           <td><?php echo ($rows['exam']); ?></td>
           <td><?php echo $  my_marks=(($rows['exam']*5));
		   
		   
		   
		 	  
	/////Credit Earned
		    $asj=$dbcon->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($dbcon));
		
		  while ($bs=$asj->fetch_assoc()){
			  
			 $status=$bs['status']; 
			
		  }
			
			
			if($status>=1){
			
			////UPDATE results set valid =1 meaning validated
	 $uu=$dbcon->query("UPDATE  my_marks set valid='1'   where levels='".$row['levels']."' and  ayear='".$ayear."' and code='".$rows['code']."' and matric ='".$matric."' ") or die(mysqli_error($dbcon));
			}
			else {
				
				
					 ////UPDATE results set valid =1 meaning validated
	 $uu=$dbcon->query("UPDATE  my_marks set valid='0'   where levels='".$row['levels']."' and  ayear='".$ayear."' and code='".$rows['code']."' and matric ='".$matric."' ") or die(mysqli_error($dbcon));
		
			}
			
		  
		   
		   
		   
		   
		   
		    ?></td>
           <td><?php  $as=$dbcon->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($dbcon));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $bs['weight'];  
		 
          } ?></td>
           <td><?php  $as=$dbcon->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($dbcon));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $bs['remark'];  
		 
          } 
	
		  
		  
		  
		  ?></td></tr>
    <?php } ?>
    
    </table>
    
    
    <div class="footer_box">
    		<div class="footer_box_left">Number of Courses Offered: <?php echo $num_of_courses; ?></div>
            
            <div class="footer_box_right">Number of Courses Passed: <?php 
			
			
			/////Credit Earned
		    $as=$dbcon->query("SELECT * FROM  my_marks where   matric ='".$matric."' and ayear='".$ayear."' and sem='$sem'  and valid='1' ") or die(mysqli_error($dbcon));
			echo $passed=$as->num_rows;
		
		 ?></div>
    
    </div>
    </div>


</div>
<div class="footers" style="font-size:9px;"><?php echo $page++; ?></div>


</body>
</html>
<?PHP }  ?>