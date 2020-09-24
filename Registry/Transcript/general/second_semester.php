 <!--Loading Second &nbsp;SEMESTER Courses----->
            



      <DIV style=" margin-top:-455PX;  border:none;  height:205PX; width:100%; float:left; "  >    
      
                <?PHP
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".ltrim($row['matricule'])."'  and  ayear='".$row['db1']."' and sem='2'  ORDER BY code ") or die(mysqli_error($conn));
		   $hm=$ad->num_rows;
		  while ($ans=$ad->fetch_assoc()){
		  ?>  
          
          
          
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; width:59PX; font-size:9px">
            <?php echo strtoupper($ans['code']);  ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:265PX; height:15px; border-bottom:none; border-top:none; text-align:left; font-size:9px">
            
            
             <?php
		
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."' and level='".$row['levels']."' and department='".$row['departmet']."' GROUP BY subject  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $subj=$bs['title'];
			  
		 
          }
		   ?>
           
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; font-size:9px">             <?php
		///////////Get total Marks
		  $as=$conn->query("SELECT (ca+exam ) as marks FROM  my_marks where matric='".ltrim($row['matricule'])."'  and code='".$ans['code']."' and sem='2' and ayear='".$row['db1']."'  ") or die(mysqli_error($conn));
		
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
		
		 
			 echo  $credit=$ans['credit'];
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
			
			 $uu=$conn->query("UPDATE  my_marks set earned='$credit_earned' where levels='".$row['levels']."' and  ayear='".$row['db1']."' and code='".$ans['code']."' and matric ='".ltrim($row['matricule'])."' ") or die(mysqli_error($conn));
			////UPDATE results set valid =1 meaning validated
	 $uu=$conn->query("UPDATE  my_marks set valid='1'   where levels='".$row['levels']."' and  ayear='".$row['db1']."' and code='".$ans['code']."' and matric ='".ltrim($row['matricule'])."' ") or die(mysqli_error($conn));
			}
			else {
				echo $credit_earned=0;
				
					 $uu=$conn->query("UPDATE  my_marks set earned='$credit_earned' where levels='".$row['levels']."' and  ayear='".$row['db1']."' and code='".$ans['code']."' and matric ='".ltrim($row['matricule'])."' ") or die(mysqli_error($conn));
	////UPDATE results set valid =1 meaning validated
	 $uu=$conn->query("UPDATE  my_marks set valid='0'   where levels='".$row['levels']."' and  ayear='".$row['db1']."' and code='".$ans['code']."' and matric ='".ltrim($row['matricule'])."' ") or die(mysqli_error($conn));
		
			}
			
			
		 
          }
		  ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-right:none; height:15px;border-bottom:none; border-top:none; font-size:9px">
          <?php
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['grade'];  
			
			 $uu=$conn->query("UPDATE  my_marks set grade='$grade' where levels='".$row['levels']."' and  ayear='".$row['db1']."' and code='".$ans['code']."' and matric ='".ltrim($row['matricule'])."' and sem='2' ") or die(mysqli_error($conn));
		 
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
		  
		  
		  
		  	////**************************///
		/////////check if Registry exists else insert
		  $asl=$conn->query("SELECT * FROM my_stats where matric='".ltrim($row['matricule'])."' and sem='2' and ayear='".$row['db1']."'    ") or die(mysqli_error($conn));
		  $exist=$asl->num_rows;
		  
		  /////if exists upfaye
		  if($exist>=1){
		  
			
			 $uu=$conn->query("UPDATE my_stats set attempt='$credit_attempted' where  matric='".ltrim($row['matricule'])."' and sem='2' and ayear='".$row['db1']."'  ") or die(mysqli_error($conn));
			}
			
			/////if not exixt insert
			else {
			$uu=$conn->query("INSERT INTO my_stats SET attempt='$credit_attempted',matric='".ltrim($row['matricule'])."', sem='2' ,ayear='".$row['db1']."'  ") or die(mysqli_error($conn));
		
			}
		   ?> 
          </div>
          
          
         
           <div class="patition" style="width:180px; margin-left:5px; text-align:left; border:none" >
         <span style="background:#fff"> TOTAL CREDITS EARNED : <?php
		 
		
		  $as=$conn->query("SELECT SUM(earned) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='2' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_earned=$bs['attempts'];
			  
		 
          }
		  
		  
		  
		  
			
			
		  	////**************************///
		/////////check if Registry exists else insert
		  $asl=$conn->query("SELECT * FROM my_stats where matric='".ltrim($row['matricule'])."' and sem='2' and ayear='".$row['db1']."'    ") or die(mysqli_error($conn));
		  $exist=$asl->num_rows;
		  
		  /////if exists upfaye
		  if($exist>=1){
		  
			
			 $uu=$conn->query("UPDATE my_stats set earn='$credit_earned' where  matric='".ltrim($row['matricule'])."' and sem='2' and ayear='".$row['db1']."'  ") or die(mysqli_error($conn));
			}
			
			/////if not exixt insert
			else {
			$uu=$conn->query("INSERT INTO my_stats  SET earn='$credit_earned',matric='".ltrim($row['matricule'])."', sem='2' ,ayear='".$row['db1']."'  ") or die(mysqli_error($conn));
		
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
          &nbsp;SEMESTER GPA: &nbsp; <?php
		
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
		
		/////////check if Registry exists else insert
		  $asl=$conn->query("SELECT * FROM my_stats where matric='".ltrim($row['matricule'])."' and sem='2' and ayear='".$row['db1']."'    ") or die(mysqli_error($conn));
		  $exist=$asl->num_rows;
		  
		  /////if exists upfaye
		  if($exist>=1){
			
			 $uu=$conn->query("UPDATE my_stats set gpa='$second_semseter_gpa' where  matric='".ltrim($row['matricule'])."' and sem='2' and ayear='".$row['db1']."'  ") or die(mysqli_error($conn));
			}
			
			/////if not exixt insert
			else {
			$uu=$conn->query("INSERT INTO my_stats   SET gpa='$second_semseter_gpa',matric='".ltrim($row['matricule'])."', sem='2' ,ayear='".$row['db1']."'  ") or die(mysqli_error($conn));
		
			}
		
		   ?>  <BR /><br><br>
           
            <?php
			if($cur_pnum==$h_many){
include 'for_gpa.php';			}
			else {
				
			}
			?>
          
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
            
           </div></div>
            
            