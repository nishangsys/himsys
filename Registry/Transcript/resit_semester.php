
  <?php
	/////Number of courses not validated4
	 $ass=$conn->query("SELECT *   FROM  my_marks where matric='".ltrim($row['matricule'])."'  and  sem='3' and  ayear='".$row['db1']."'  GROUP BY ayear ") or die(mysqli_error($conn));
	  $courses_not_vaidate=$ass->num_rows;
  ?>
  
  
  
          <!------Resit Semester Main Courses Box----------->
          
          <div class="semester_box" style=" margin-top:-230px; height:170px; padding-bottom:10px; margin-left:35px  ; border:none ">
          
          <?php
		  if($courses_not_vaidate<1){
			  }
			  else {
		 ?>
          <DIV style="float:left; clear:both;  height:15px; width:60%; clear:both; background:#fff">
             <span style="font-weight:bold">RESIT <?PHP echo $year2; ?></span>
         </DIV>
         <?php } ?>
         <div style="clear:both"></div>
          
          
          
          <!--Loading RESIT Courses----->
            
          <?PHP
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".ltrim($row['matricule'])."' and ayear='".$row['db1']."' and sem='3' and levels='".$row['levels']."' ORDER BY code") or die(mysqli_error($conn));
		   $hm=$ad->num_rows;
		  while ($ans=$ad->fetch_assoc()){
		  ?>  
          
          
          
            <div  class="patition" style="border:none; line-height:none; height:15px; border-bottom:none; border-top:none; width:59PX; font-size:9px">
            <?php echo strtoupper($ans['code']);  ?>
            </div>
            
             <div  class="patition" style="border:none ;line-height:none; width:260PX; height:15px; border-bottom:none; border-top:none; text-align:left; font-size:9px">
            
            
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
            
            <div  class="patition" style="border:none; line-height:none; height:15px; border-bottom:none; border-top:none; font-size:9px"> 
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
            
            <div  class="patition" style="border:none ; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px">
            <?php
		
			 echo  $credit=$ans['credit'];
			
       
		   ?>
            </div>
            
             <div  class="patition" style="border:none ; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px ">
            <?php
		    
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $weight=$bs['weight'];  
		 
          }
		  ?>
            </div>
            
             <div  class="patition" style="border:none ; line-height:none; height:15px;border-bottom:none; border-top:none;font-size:9px ">
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
            
            <div  class="patition" style="border:none ; line-height:none; border-right:none; height:15px;border-bottom:none; border-top:none; font-size:9px">
           <?php
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['grade'];  
			
		 
          }
		  
		   ?>
            </div>
            <div style="clear:Both"></div>
          
          
          
          <?php } ?>
          
        
           <?php
		  if($courses_not_vaidate<1){
			  }
			  else {
		 ?>
          <div class="patition" style="width:262px; margin-left:57px; text-align:left; border:none;   font-weight:bold" >
          SEMESTER GPA: &nbsp; <?php
		
		 $as=$conn->query("SELECT SUM(credit*grade) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));;
		
		  while ($bs=$as->fetch_assoc()){
			  $weighted_gpa=$bs['attempts'];		 
          }
		  
		   $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $total_credit=$bs['attempts'];		 
          }
		  echo $resit_semseter_gpa=number_format($weighted_gpa/$total_credit,2);
		  
		  ///******************************/
		
	
		   ?>  <BR />
          
          </div>
          <?php } ?>
           <div  class="patition" style="border:none; line-height:none;  ">
           
            </div>
            
            <div  class="patition" style="border:none; line-height:none;">
           
            </div>
            
             <div  class="patition" style="border:none; line-height:none; ">
          
            </div>
            
             <div  class="patition" style="border:none; line-height:none; ">
           
            </div>
            
            <div  class="patition" style="border:none; line-height:none; width:39px; ">
          
            </div>
            </div>
          
          
          <!------Close Second Semester Main Courses Box----------->
     
  
  
  <!---Second Semester Resit---------
  <div class="semester_box" style="height:60px; border-right:none; margin-top:-45px; background:#F63">
  
 
 
 
 
 <div class="patition" style="width:267px; margin-left:57px; text-align:left; border:none; border-left:1px solid#000; border-right:1px solid#000; height:197px; bottom:0px;" >
        
       
          
          
          
          </div>
          
           <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-bottom:none; height:192px ; bottom:0px;">
           
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-bottom:none; height:192px; bottom:0px; ">
           
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none;  border-bottom:none ; height:192px; bottom:0px;">
          
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-bottom:none ; height:192px; bottom:0px;">
           
            </div>
            
      --------------->    
 
 
  </div>
   <!----Second semseter Resit End courses---------->
 
