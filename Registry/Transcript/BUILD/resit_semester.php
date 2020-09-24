
  
  
  
  
          <!------Resit Semester Main Courses Box----------->
          
  
          <!------Resit Semester Main Courses Box----------->
          
          <div class="semester_box" style=" margin-top:-190px; height:170px; padding-bottom:10px; margin-left:35px  ; border:none ">
          
          <DIV style="float:left; clear:both;  height:15px; width:60%; clear:both; background:#fff">
             <span style="font-weight:bold">RESIT <?PHP echo $year2; echo $dep_id ?></span>
         </DIV>
         <div style="clear:both"></div>
          
          
          
          <!--Loading RESIT Courses----->
            
          <?PHP
		 
		  

		  $ad=$conn->query("SELECT * FROM my_marks where matric='".ltrim($row['matricule'])."' and year_id='".$row['year_id']."' and sem='3'
		   and level_id='".$row['level_id']."' ORDER BY code") or die(mysqli_error($conn));
		   $hm=$ad->num_rows;
		  while ($ans=$ad->fetch_assoc()){
		  ?>  
          
          
          
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; width:59PX; font-size:9px">
            <?php echo strtoupper($ans['code']);  ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:260PX; height:15px; border-bottom:none; border-top:none; text-align:left; font-size:9px">
            
            
             <?php
		
		  $as=$conn->query("SELECT * FROM subjects where code='".$ans['code']."'   and prog_id='".$row['dept_id']."' GROUP BY code  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $subj=$bs['title'];
			  
		 
          }
		  
		  
		  ///////////TOTAL CREDITS ATTEMPTED  IN RESITS
		  
		    $as=$conn->query("SELECT SUM(cv) as attempts FROM my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $credit_attempted=$bs['attempts'];
			  
		 
          }
		  
		  
		  
		  	////**************************///
		/////////check if records exists else insert
		  $asl=$conn->query("SELECT * FROM my_stats where matric='".ltrim($row['matricule'])."' and sem='3' and year_id='".$row['year_id']."'    ") or die(mysqli_error($conn));
		  $exist=$asl->num_rows;
		  
		  /////if exists upfaye
		  if($exist>=1){
		  
			
			 $uu=$conn->query("UPDATE my_stats set attempt='$credit_attempted' where  matric='".ltrim($row['matricule'])."' and sem='3' and year_id='".$row['year_id']."'  ") or die(mysqli_error($conn));
			}
			
			/////if not exixt insert
			else {
			$uu=$conn->query("INSERT INTO my_stats SET attempt='$credit_attempted',matric='".ltrim($row['matricule'])."', sem='3' ,year_id='".$row['year_id']."'  ") or die(mysqli_error($conn));
		
			}
			
			
			/////////// TOTAL CREDIT EARNED IN RESIT
			
			  $as=$conn->query("SELECT SUM(earned) as attempts FROM my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $credit_earned=$bs['attempts'];
			  
		 
          }
		  
		  
		  
		  
			
			
		  	////**************************///
		/////////check if records exists else insert
		  $asl=$conn->query("SELECT * FROM my_stats where matric='".ltrim($row['matricule'])."' and sem='3' and year_id='".$row['year_id']."'    ") or die(mysqli_error($conn));
		  $exist=$asl->num_rows;
		  
		  /////if exists upfaye
		  if($exist>=1){
		  
			
			 $uu=$conn->query("UPDATE my_stats set earn='$credit_earned' where  matric='".ltrim($row['matricule'])."' and sem='3' and year_id='".$row['year_id']."'  ") or die(mysqli_error($conn));
			}
			
			/////if not exixt insert
			else {
			$uu=$conn->query("INSERT INTO my_stats  SET earn='$credit_earned',matric='".ltrim($row['matricule'])."', sem='3' ,year_id='".$row['year_id']."'  ") or die(mysqli_error($conn));
		
			}
			
			
		   ?>
           
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; font-size:9px"> 
            <?php
		
		///////////Get total Marks
		  $as=$conn->query("SELECT (ca+exam ) as marks FROM my_marks where matric='".ltrim($row['matricule'])."' and level_id='".$row['level_id']."' and code='".$ans['code']."' and sem='3' and year_id='".$row['year_id']."'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $my_marks=round($bs['marks']); ///tot mks in this subj	
			//////////////////average makes gotten from resit  
			   if($dep_id==12){
				   
	//////Get Number of Times student has written course
	 $num=$conn->query("SELECT * FROM my_marks where matric='".ltrim($row['matricule'])."'   and code='".$ans['code']."'  ") or die(mysqli_error($conn));
	  $num_of_times=$num->num_rows;
				   
				   //////old mks from normal session
				   $n=$conn->query("SELECT SUM(ca+exam ) as marks FROM my_marks where matric='".ltrim($row['matricule'])."'   and code='".$ans['code']."'  ") or die(mysqli_error($conn));
		
		  while ($m=$n->fetch_assoc()){
			$old_mks=$m['marks'];		  
                   }
				   
				   $total_av_mks=($old_mks)/$num_of_times;
				   ////if tot is less than 50 then round it up
				     if($total_av_mks<50){
						$resit_mks=50;
					 }
					 else {
						 $resit_mks=round($total_av_mks);
					 }
///Update Normal Session with grades from resit mks avg

$as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $resit_mks>=b and $resit_mks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			 $grade=$bs['grade'];  
			
			
			 $uu=$conn->query("UPDATE my_marks set graded='$grade' where   code='".$ans['code']."' and matric ='".ltrim($row['matricule'])."' and sem!='3' ") or die(mysqli_error($conn));
		  }//////End while loop of $bs
		 
				   
			   }
          }
////use total marks to get garde

 $as=$conn->query("SELECT * FROM subjects where code='".$ans['code']."' and level='".$row['levels']."'
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
			
			 $uu=$conn->query("UPDATE my_marks set earned='$credit_earned' where level_id='".$row['level_id']."' and  year_id='".$row['year_id']."' and code='".$ans['code']."' and matric ='".ltrim($row['matricule'])."' and sem='3'  ") or die(mysqli_error($conn));
			////UPDATE results set valid =1 meaning validated
	 $uu=$conn->query("UPDATE my_marks set valid='1'   where   code='".$ans['code']."' and matric ='".ltrim($row['matricule'])."' ") or die(mysqli_error($conn));
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
			
			
			 $uu=$conn->query("UPDATE my_marks set grade='$grade' where level_id='".$row['level_id']."' and  year_id='".$row['year_id']."' and code='".$ans['code']."' and matric ='".ltrim($row['matricule'])."' and sem='3' ") or die(mysqli_error($conn));
		 
		  $uu=$conn->query("UPDATE my_marks set graded='$grade' where level_id='".$row['level_id']."' and  year_id='".$row['year_id']."' and code='".$ans['code']."' and matric ='".ltrim($row['matricule'])."' and sem='3' ") or die(mysqli_error($conn));
          }
		  
		   ?>
            </div>
            <div style="clear:Both"></div>
          
          
          
          <?php } ?>
          
        
          
          <div class="patition" style="width:262px; margin-left:57px; text-align:left; border:none; border-left:1px solid#000; border-right:1px solid#000;font-weight:bold" >
          SEMESTER GPA: &nbsp; <?php
		
		  $as=$conn->query("SELECT SUM(cv*grade) as attempts FROM my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $weighted_gpa=$bs['attempts'];		 
          }
		  
		   $as=$conn->query("SELECT SUM(cv) as attempts FROM my_marks where matric='".ltrim($row['matricule'])."' and sem='3' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $total_credit=$bs['attempts'];		 
          }
		  echo $resit_semseter_gpa=number_format($weighted_gpa/$total_credit,2);
		  
		  ///******************************/
		
		/////////check if records exists else insert
		  $asl=$conn->query("SELECT * FROM my_stats where matric='".ltrim($row['matricule'])."' and sem='3' and year_id='".$row['year_id']."'    ") or die(mysqli_error($conn));
		  $exist=$asl->num_rows;
		  
		  /////if exists upfaye
		  if($exist>=1){
			
			 $uu=$conn->query("UPDATE my_stats set gpa='$resit_semseter_gpa' where  matric='".ltrim($row['matricule'])."' and sem='3' and year_id='".$row['year_id']."'  ") or die(mysqli_error($conn));
			}
			
			/////if not exixt insert
			else {
			$uu=$conn->query("INSERT INTO my_stats   SET gpa='$resit_semseter_gpa',matric='".ltrim($row['matricule'])."', sem='3' ,year_id='".$row['year_id']."'  ") or die(mysqli_error($conn));
		
			}
		   ?>  <BR />
          
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
            </div>
          
          
          <!------Close Second Semester Main Courses Box----------->
     
  
  
  <!---Second Semester Resit------------>
  
  <div class="semester_box" style="height:60px; border-right:none; margin-top:-45px;">
  
 
 
 
 
 <div class="patition" style="width:267px; margin-left:57px; text-align:left; border:none; border-left:1px solid#000; border-right:1px solid#000; height:197px; bottom:0px;" >
        
        <?php  
		if ($cur_pnum==$h_many){
		include 'for_gpa.php'; 
		}
		else {
			
		}
		?>
          
          
          
          </div>
          
           <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-bottom:none; height:192px ; bottom:0px;">
           
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-bottom:none; height:192px; bottom:0px; ">
           
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none;  border-bottom:none ; height:192px; bottom:0px;">
          
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-bottom:none ; height:192px; bottom:0px;">
           
            </div>
            
          
 
 
  </div>
   <!----Second semseter Resit End courses---------->
 
