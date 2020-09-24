
    <br /><br />    
    <div style="margin-left:-30px; height:110px; float:left; background:#fff; width:100%; line-height:1.5">
        TOTAL CREDITS ATTEMPTED:  <?php
		
		  $as=$conn->query("SELECT SUM(cv) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."'   and sem!='3'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $total_credit_attempted=$bs['attempts'];
			  
		 
          }
		   ?>  <br />
        
        
        
        GPA CREDITS ATTEMPTED:  <?php
		  $as=$conn->query("SELECT SUM(cv) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."'   and sem!='3'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $gpa_credit_attempted=$bs['attempts'];
			  
		 
          }
		   ?> 
           <BR />
        CUMMULATIVE TOTAL CREDIT EARNED: <?php
		  $as=$conn->query("SELECT SUM(cv*valid) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."'   and sem!='3'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $cumalative_earned=$bs['attempts'];
			  
		 
          }
		   ?> <BR />
        CUM GPA CREDITS EARNED: <?php
		
		   $as=$conn->query("SELECT SUM(cv*valid) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."'   and sem!='3'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $cum_gpa_earned=$bs['attempts'];
			  
		 
          }
		   ?>       
        
        <br /> <br />
        
        CUMMULATIVE GPA:   <?php
		
		 $as=$conn->query("SELECT SUM(gpa)  FROM my_stats where matric='".ltrim($row['matricule'])."' and gpa>0    ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  $gpa_one=$bs['SUM(gpa)'];		 
          }
		  
		   $as=$conn->query("SELECT * FROM my_stats where matric='".ltrim($row['matricule'])."' and gpa>0   ") or die(mysqli_error($conn));
		   $num_of_sem=$as->num_rows;
		   
///if the cumalative GPA earned is equals to attempted
		   if($cumalative_earned==$total_credit_attempted){
		   
		   echo $cum_gpa=number_format($gpa_one/$num_of_sem,2);
		   
	
		   }
		   else {
		   }
         
		   ?> <BR />
         
        
       </div>