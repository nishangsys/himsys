
<?php  include '../includes/dbc.php'; 
$c=$dbcon->query("SELECT * FROM `school` ") or die(mysqli_error($dbcon));
while($row=$c->fetch_assoc()){
	$school=$row['school'];
	$address=$row['twon'];
}


	  $deptss=$_POST['querystr'];
	 $ayear=$_POST['grade'];
	$level=$_POST['level'];
    $sem=$_POST['sem'];


 
 
 

$cd=$dbcon->query("SELECT * FROM `courses` WHERE  courses.levels='$level'  and departmet='$deptss' and db1='$ayear'   ") or die(mysqli_error($dbcon));

while($rowd=$cd->fetch_assoc()){
 $matricules=$rowd['matricule'];
 $name=$rowd['fname'];
?>

<?php
$cf =$dbcon->query("SELECT * FROM  my_marks WHERE   matric ='$matricules' GROUP BY  levels  ") or die(mysqli_error($dbcon));

while($row =$cf ->fetch_assoc()){
	echo  $level =$row['levels'];
echo  $matric =$row['matric'];
$dept =$row['dept'];

$ayear= $row['ayear'];

 
 ///////check if this program grading system has been set
$cdl=$dbcon->query("SELECT * FROM `segments` WHERE dept='".$dept."'  ") or die(mysqli_error($dbcon));
  $set=$cdl->num_rows;
  ////while loop to get department id from sector tbl			
				while($nn=$cdl->fetch_assoc()){
					 $dep_id=$nn['sector'];
 					}
?>


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
	width:400px;
	height:auto;
	overflow:hidden;
	padding-bottom:0px;
	border:1px dashed#000;
	
	float:left;
	
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


@media print {
 .footers {page-break-after: always;}
}
h3{
	text-align:center;
	font-size:24px;
	color:#f00;
	border:2px solid#00F;
}

/* ISO Paper Size */
@page {
  size: A4 portrait;
}

/* Size in mm */    
@page {
  size: 100mm 200mm portrait;
}

/* Size in inches */    
@page {
  size: 4in 6in portrait;
}
.number{
	background:#FF0;
	border:1px solid#000;
	border-radius:20px 20px 20px 20px;
	color:#000;
	height:30px;
	padding:5px 5px;
	position:absolute;
	bottom:20px;
	right:200px;
}
</style>

  
    <div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;padding:5px 0px; font-weight:bold; text-transform:uppercase   "><?php echo $sem_name; ?> <?PHP echo $ayear; ?>  INDIVIDUAL RESULTS SLIP</div>
    <!--left box------->
   <div class="left_box">
   <div class="left_box_textbox">Name: <span class="span"><?php echo $name; ?></span> </div>
   <div class="left_box_textbox">Program: <span class="span"><?php echo $dept; ?></span>  </div>
   <div class="left_box_textbox">Matricle: <span class="span"><?php echo $matric; ?> </span> </div>
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

   <div style="clear:both"></div> 
    
    
    <div class="main_thing"  >
    <h3 style="padding:NONE; margin:0PX">LEVEL <?php echo $row['levels']; ?> Resit Semester</h3>
  <table>
    <th>Code</th><th>CA</th><th>Exams</th><th>Total</th><th>Grade</th><th>Remarks</th></tr>
    <?php
	
	$ds=$dbcon->query("SELECT *  from  my_marks where matric='".$matric."' and ayear='".$ayear."'  and sem='3'  order by code ") or die(mysqli_error($dbcon));
	echo $num_of_courses=$ds->num_rows;
	$i=1;
	while($rows=$ds->fetch_assoc()){
		
	?>
    
   <tr  ><td><?php echo $rows['code']; ?></td>
    
           <TD><?php echo $rows['ca']; ?></TD>
           <td><?php echo $rows['exam']; ?></td>
           <td><?php echo $  my_marks=$rows['ca']+$rows['exam'];
		   
		   
		   
		 	  
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
				
				
		
			}
			
		  
		   
		   
		   
		   
		   
		    ?></td>
           <td><?php  $as=$dbcon->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($dbcon));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $bs['weight'];  
		 
          } ?></td>
            </tr>
    <?php } ?>
    
    </table>
    </div>
    
    
    <div class="main_thing"  >
    <h3 style="padding:NONE; margin:0PX">LEVEL <?php echo $row['levels']; ?> First Semester</h3>
    
     <table>
    <th>Code</th><th>CA</th><th>Exams</th><th>Total</th><th>Grade</th><th>Remarks</th></tr>
    <?php
	
	$ds=$dbcon->query("SELECT *  from  my_marks where matric='".$matric."' and ayear='".$ayear."'  and sem='1'  order by code ") or die(mysqli_error($dbcon));
	echo $num_of_courses=$ds->num_rows;
	$i=1;
	while($rows=$ds->fetch_assoc()){
		
	?>
    
   <tr  ><td><?php echo $rows['code']; ?></td>
  
           <TD><?php echo $rows['ca']; ?></TD>
           <td><?php echo $rows['exam']; ?></td>
           <td><?php echo $  my_marks=$rows['ca']+$rows['exam'];
		   
		   
		   
		 	  
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
				
				
		
			}
			
		  
		   
		   
		   
		   
		   
		    ?></td>
           <td><?php  $as=$dbcon->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($dbcon));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $bs['weight'];  
		 
          } ?></td>
           </tr>
    <?php } ?>
    
    </table>
    </div>
    
    
    
    <div class="main_thing"  >
    <h3 style="padding:NONE; margin:0PX">LEVEL <?php echo $row['levels']; ?> SECOND Semester</h3>
    
     <table>
    <th>Code</th><th>CA</th><th>Exams</th><th>Total</th><th>Grade</th><th>Remarks</th></tr>
    <?php
	
	$ds=$dbcon->query("SELECT *  from  my_marks where matric='".$matric."' and ayear='".$ayear."'  and sem='2'  order by code ") or die(mysqli_error($dbcon));
	echo $num_of_courses=$ds->num_rows;
	$i=1;
	while($rows=$ds->fetch_assoc()){
		
	?>
    
   <tr  ><td><?php echo $rows['code']; ?></td>
  
           <TD><?php echo $rows['ca']; ?></TD>
           <td><?php echo $rows['exam']; ?></td>
           <td><?php echo $  my_marks=$rows['ca']+$rows['exam'];
		   
		   
		   
		 	  
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
				
				
		
			}
			
		  
		   
		   
		   
		   
		   
		    ?></td>
           <td><?php  $as=$dbcon->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($dbcon));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $bs['weight'];  
		 
          } ?></td>
            </tr>
    <?php } ?>
    
    </table>
    </div>
    
    <div style="clear:both"></div>
    </div>


</div>
<div class="footers" style="font-size:9px;"><?php echo $page++; ?></div>


<?php } } ?> 