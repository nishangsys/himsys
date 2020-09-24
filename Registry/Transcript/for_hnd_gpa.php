<div style="margin-left:-55px; height:110px; float:left;  width:100%; line-height:1.5; background:#FFF; font-size:12px">
   
   
   
   
   <div style="width:510px; height:50px;">
   
 <div style="float:left; width:260px; height:40px; background:#FFf">TOTAL CREDITS ATTEMPTED:  <?php
 /////HND Credit attempted
   $as=$conn->query("SELECT SUM(attempt) as attempts FROM my_stats where matric='".$matric."'   and sem='4'  ") or die(mysqli_error($conn));
     $df=$as->num_rows;
		
		  while ($bs=$as->fetch_assoc()){
			  $hnds=$bs['attempts'];
			  
		 
          }
		
		  $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".$matric."'   and sem!='3'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $total_credit_attempted=$bs['attempts'];
			  
		 
          }
		   ?> <br />
           
           
           
        CUMMULATIVE TOTAL CREDIT EARNED: <?php
		  $as=$conn->query("SELECT SUM(credit*valid) as attempts FROM  my_marks where matric='".$matric."'   and sem!='3'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $cumalative_earned=$bs['attempts'];
			  
		 
          }
		   ?>  
           
           </div> 
            
           
            <!----right GPA attemped boxes----->
            
             <div style="float:left; width:195px; height:40px; background:#FFf; margin-left:53px">GPA CREDITS ATTEMTED:  <?php
 /////HND Credit attempted
   $as=$conn->query("SELECT SUM(attempt) as attempts FROM my_stats where matric='".$matric."'   and sem='4'  ") or die(mysqli_error($conn));
     $df=$as->num_rows;
		
		  while ($bs=$as->fetch_assoc()){
			  $hnds=$bs['attempts'];
			  
		 
          }
		
		  $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".$matric."'   and sem!='3'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $total_credit_attempted=$bs['attempts'];
			  
		 
          }
		   ?> <br />
           
           
           
        CUM GPA CREDITS EARNED: <?php
		  $as=$conn->query("SELECT SUM(credit*valid) as attempts FROM  my_marks where matric='".$matric."'   and sem!='3'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $cumalative_earned=$bs['attempts'];
			  
		 
          }
		  
		  
		   ?>  
           
           </div> 
            
            </div>
            <!-------end right gpa----------->
        
        CUMMULATIVE GPA:   <?php
		
		
		  
		  
		  /////////For HND Grading
		   $as=$conn->query(" SELECT SUM(credit*graded) as attempts FROM  my_marks where matric='".$matric."' and sem!='3' and sem!='4'   ") or die(mysqli_error($conn));	
		  while ($bs=$as->fetch_assoc()){
			 $gpa_one=$bs['attempts'];		 
          }		 
		   ////Get CUM GPA Attempted ie SUM(credit)		   
		   $as=$conn->query(" SELECT SUM(credit) as attempts FROM  my_marks where matric='".$matric."' and sem!='3' and sem!='4'  ") or die(mysqli_error($conn));		
		  while ($bs=$as->fetch_assoc()){
		  $tot_credit_attempted=$bs['attempts'];		 
          } 		   	   
		echo   $cum_gpa=number_format($gpa_one/$tot_credit_attempted,2);
		
         
		   ?> <BR />
         
        
       </div>
      