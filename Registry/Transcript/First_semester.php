
      <DIV style=" margin-top:-455PX; height:auto; overflow:hidden; width:100%; float:left; border:none; "  >    
            <!--Loading First &nbsp;SEMESTER Courses----->
            
          <?PHP
		 
		
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".ltrim($row['matricule'])."' and ayear='".$row['db1']."' and sem='1' and levels='".$row['levels']."' AND exam!='' ORDER BY code  ") or die(mysqli_error($conn));
		   $hm=$ad->num_rows;
		  while ($ans=$ad->fetch_assoc()){
		  ?>  
          
            <div  class="patition" style="border:none; line-height:none; height:15px; border-bottom:none; border-top:none; width:59PX; font-size:9px">
            <?php echo strtoupper($ans['code']);  ?>
            </div>
            
           
            
             <div  class="patition" style="border:none; line-height:none; width:260PX; height:15px; border-bottom:none; border-top:none; text-align:left; font-size:9px">
            
            
             <?php
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."'  and department='".$row['departmet']."' GROUP BY subject  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $subj=$bs['title'];
			   $s = ucwords(strtolower($bs['title']));
			 echo  $s;
			  
		 
          }
		 
         
		   ?>
           
            </div>
            
            <div  class="patition" style="border:none;line-height:none; height:15px; border-bottom:none; border-top:none; font-size:9px"> 
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
            
            <div  class="patition" style="border:none; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px">
            <?php
		
		  echo $credit=$ans['credit'];
			  
		
		   ?>
            </div>
            
             <div  class="patition" style="border:none; line-height:none; height:15px;border-bottom:none; border-top:none;font-size:9px  ">
           <?php
		    
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $weight=$bs['weight'];  
		 ////$pass or failed
		 $passed_or_failed=$bs['status'];
          }
		  ?>
            </div>
            
             <div  class="patition" style="border:none; line-height:none; height:15px;border-bottom:none; border-top:none; font-size:9px ">
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
            
            <div  class="patition" style="border:none; line-height:none;  height:15px;  font-size:9px">
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
		
		  $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and ayear='".$row['db1']."' and levels='".$row['levels']."'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $credit_attempted=$bs['attempts'];
			  
		 
          }
		  
		
		
			
		   ?>  <BR />
<span style="background:#fff">GPA CREDITS ATTEMPTED: </span><?php
		
		  $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and ayear='".$row['db1']."'  and levels='".$row['levels']."'   ") or die(mysqli_error($conn));
		
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
			  $weighted_gpa=$bs['attempts'];		 
          }
		  
		   $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."' and sem='1' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $total_credit=$bs['attempts'];		 
          }
		echo $first_semseter_gpa_yearone=number_format($weighted_gpa/$total_credit,2) ;
		
		
		
		
		
		
		
		
		
		
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
                      
                      
                      
                      
                      
                      
                      
                      