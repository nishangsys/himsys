
      <DIV style=" margin-top:-455PX; height:auto; overflow:hidden; width:100%; float:left; border:none; "  >    
            <!--Loading First &nbsp;SEMESTER Courses----->
            
          <?PHP
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".ltrim($row['matricule'])."' and year_id='".$row['year_id']."' and sem='1' and level_id='".$row['level_id']."' ORDER BY code  ") or die(mysqli_error($conn));
		   $hm=$ad->num_rows;
		  while ($ans=$ad->fetch_assoc()){
			  //echo $row['departmet'];
		  ?>  
          
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; height:15px; border-bottom:none; border-top:none; width:59PX; font-size:9px">
            <?php echo strtoupper($ans['code']);  ?>
            </div>
            
           
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:260PX; height:15px; border-bottom:none; border-top:none; text-align:left; font-size:9px">
            
            
             <?php
			 
		  /*$as=$conn->query("SELECT * FROM subjects where code='".$ans['code']."' and level_id='".$row['level_id']."' and prog_id='".$row['dept_id']."' GROUP BY code  ") or die(mysqli_error($conn));
		  */
			
		
		  $as=$conn->query("SELECT * FROM subjects where code='".$ans['code']."' and level_id='".$row['level_id']."'  GROUP BY code  ") or die(mysqli_error($conn));
 		
		  while ($bs=$as->fetch_assoc()){
			 echo  $subj=$bs['title'];
			  
		 
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

/*
 $as=$conn->query("SELECT * FROM subjects where code='".$ans['code']."' and level_id='".$row['level_id']."' and prog_id='".$row['dept_id']."' GROUP BY code ") or die(mysqli_error($conn));
 */
 $as=$conn->query("SELECT * FROM subjects where code='".$ans['code']."' and level_id='".$row['level_id']."' and prog_id='".$row['dept_id']."' GROUP BY code ") or die(mysqli_error($conn));
		
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
			
			 $uu=$conn->query("UPDATE  my_marks set earned='$credit_earned' where level_id='".$row['level_id']."' and  year_id='".$row['year_id']."' and code='".$ans['code']."' and matric ='".ltrim($row['matricule'])."' ") or die(mysqli_error($conn));
			 ////UPDATE results set valid =1 meaning validated
	 $uu=$conn->query("UPDATE  my_marks set valid='1'   where level_id='".$row['level_id']."' and  year_id='".$row['year_id']."' and code='".$ans['code']."' and matric ='".ltrim($row['matricule'])."' ") or die(mysqli_error($conn));
			}
			else {
				echo $credit_earned=0;
				
					 $uu=$conn->query("UPDATE  my_marks set earned='$credit_earned' where level_id='".$row['level_id']."' and  year_id='".$row['year_id']."' and code='".$ans['code']."' and matric ='".ltrim($row['matricule'])."' ") or die(mysqli_error($conn));
	////UPDATE results set valid =1 meaning validated
	 $uu=$conn->query("UPDATE  my_marks set valid='0'   where level_id='".$row['level_id']."' and  year_id='".$row['year_id']."' and code='".$ans['code']."' and matric ='".ltrim($row['matricule'])."' ") or die(mysqli_error($conn));
		
			}
		 
          }
		  
		  
		  ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; border-right:none; height:15px;border-bottom:none; border-top:none;font-size:9px">
            <?php
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $my_marks>=b and $my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['grade'];  
			
			 $uu=$conn->query("UPDATE  my_marks set grade='$grade' where level_id='".$row['level_id']."' and  year_id='".$row['year_id']."' and code='".$ans['code']."' and matric ='".ltrim($row['matricule'])."' and sem='1' ") or die(mysqli_error($conn));
			 
			  $uu=$conn->query("UPDATE  my_marks set graded='$grade' where level_id='".$row['level_id']."' and  year_id='".$row['year_id']."' and code='".$ans['code']."' and matric ='".ltrim($row['matricule'])."' and sem='1' ") or die(mysqli_error($conn));
		 
          }
		  
		   ?>
            </div>
            <div style="clear:Both"></div>
          
          
          
          <?php } ?>
          
          
          <div class="patition" style="width:320px; border:none; border-right:1PX solid#000; text-align:left; font-size:11px" >
          <span style="background:#fff">TOTAL CREDITS ATTEMPTED :</span> <?php
		
		  $as=$conn->query("SELECT SUM(cv) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and year_id='".$row['year_id']."'  and level_id='".$row['level_id']."'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_attempted=$bs['attempts'];
			  
		 
          }
		  
	
		   ?>  <BR />
<span style="background:#fff">GPA CREDITS ATTEMPTED: </span><?php
		
		  $as=$conn->query("SELECT SUM(cv) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and year_id='".$row['year_id']."' and level_id='".$row['level_id']."'    ") or die(mysqli_error($conn));
		
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
		  
		  /////////check if records exists else insert
		  $asl=$conn->query("SELECT * FROM my_stats where matric='".ltrim($row['matricule'])."' and sem='1' and year_id='".$row['year_id']."'    ") or die(mysqli_error($conn));
		  $exist=$asl->num_rows;
		  
		  /////if exists upfaye
		  if($exist>=1){
		  
			
			 $uu=$conn->query("UPDATE my_stats set earn='$credit_earned' where  matric='".ltrim($row['matricule'])."' and sem='1' and year_id='".$row['year_id']."'  ") or die(mysqli_error($conn));
			}
			
			/////if not exixt insert
			else {
			$uu=$conn->query("INSERT INTO my_stats  SET earn='$credit_earned',matric='".ltrim($row['matricule'])."', sem='1' ,year_id='".$row['year_id']."'  ") or die(mysqli_error($conn));
		
			}
		  
		   ?></span>
          </div>
          
          <div class="patition" style="width:262px; margin-left:57px; text-align:left; border:none; border-left:1px solid#000; border-right:1px solid#000;font-weight:bold" >
          &nbsp;SEMESTER GPA: &nbsp; <?php
		
		  $as=$conn->query("SELECT SUM(cv*grade) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $weighted_gpa=$bs['attempts'];		 
          }
		  
		   $as=$conn->query("SELECT SUM(cv) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and year_id='".$row['year_id']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $total_credit=$bs['attempts'];		 
          }
		echo $first_semseter_gpa_yearone=number_format($weighted_gpa/$total_credit,2) ;
		
		
		
		
		///******************************/
		
		
		
		///******************************/
		
		/////////check if records exists else insert
		  $asl=$conn->query("SELECT * FROM my_stats where matric='".ltrim($row['matricule'])."' and sem='1' and year_id='".$row['year_id']."'    ") or die(mysqli_error($conn));
		  $exist=$asl->num_rows;
		  
		  /////if exists upfaye
		  if($exist>=1){
			
			 $uu=$conn->query("UPDATE my_stats set gpa='$first_semseter_gpa_yearone' where  matric='".ltrim($row['matricule'])."' and sem='1' and year_id='".$row['year_id']."'  ") or die(mysqli_error($conn));
			}
			
			/////if not exixt insert
			else {
			$uu=$conn->query("INSERT INTO my_stats   SET gpa='$first_semseter_gpa_yearone',matric='".ltrim($row['matricule'])."', sem='1' ,year_id='".$row['year_id']."'  ") or die(mysqli_error($conn));
		
			}
		
		
		
		
		
		
		
		
		
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
            </DIV>
            
                      <!--End Loading First &nbsp;SEMESTER Courses----->
                      
                      
                      
                      
                      
                      