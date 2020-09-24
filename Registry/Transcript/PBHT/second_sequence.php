

          <div class="semester_box" style=" margin-top:-370px; height:365px">
 <?PHP
				 $stripped = str_replace(' ', '', ltrim($row['matricule']));
				
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".$stripped."' and levels='".$row['levels']."' and  ayear='".$row['db1']."' and sem='2'  GROUP BY roll order by code ") or die(mysqli_error($conn));
		  while ($ans=$ad->fetch_assoc()){
		  
		  ?>  
                 
              <div  class="patition" style="border:none;; line-height:none; width:50PX; height:15px ; font-size:10px; padding:5px 0px; text-align:left">&nbsp;
              <?php echo $ans['code']; ?>
          
            </div>
            
             <div  class="patition" style="border:none;; line-height:none; width:190PX;height:15px ; padding:5px 0px; font-size:9px; text-align:left; "> &nbsp;
               <?php
		
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."' and level='".$row['levels']."' and department='".$row['departmet']."' GROUP BY subject  ") or die(mysqli_error($conn));

		
		  while ($bs=$as->fetch_assoc()){
			  
		  $s = ucwords(strtolower($bs['title']));
			 echo  $s;
			  
		 
          }
		   ?>
            </div>
            
            <div  class="patition" style="border:none;; width:29px; line-height:none;height:15px ; padding:5px 0px;">
           &nbsp;
              <?php echo $ans['credit']; ?>
            </div>
            
            <div  class="patition" style="border:none;; line-height:none;height:15px ; padding:5px 0px;">
          <?php  
	///Mulp msk by 100 and divide mks  by 20 have mks on 100   
		  $  my_marks=($ans['exam']*100)/20;
		  ////Round up mks to 2 d,p
		 echo $my_converted_mks=number_format($  my_marks,2); 
		 
	
		   ?>
            </div>
            
            <div  class="patition" style="border:none;; width:35px; line-height:none;height:15px ; padding:5px 0px;">
            <?php
			////Get grade from grading scale
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['weight'];  
			 
		 
          }
		  
		   ?>
            </div>
                
            
            <?php } ?>
                
   <DIV style="padding:10px 10px; clear:both; margin-left:180PX; width:150PX; font-weight:bold; margin-top:20px; background:#FFF">
   Average: 
 <?php
 /////Get the total Number of courses in sem 1
 $asm=$conn->query("SELECT * FROM  my_marks where matric='".$stripped."' and sem='2' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
 /////Number of Courses written in SEM
 $num_of_course=$asm->num_rows;
 
 /////Sum total of all 1 sem courses on 100
		   $as=$conn->query("SELECT SUM(earned) as attempts FROM  my_marks where matric='".$stripped."' and sem='2' and ayear='".$row['db1']."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
	  $total_credit=number_format($bs['attempts'],2);		 
          }
///Div mks on 100 from sem by number of courses
		 $first_sequence_av=number_format($total_credit/$num_of_course,2) ;
		echo $first_sequence_av.""."/100";
		
 
 ?>  
   
   
   </DIV> 
            </div>
            