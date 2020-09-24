
<?PHP


	/////Number of courses not validated4
	 $ass=$conn->query("SELECT *   FROM  my_marks where matric='".ltrim($row['matricule'])."'  and valid='0' and sem!='3'  ") or die(mysqli_error($conn));
	 $courses_not_vaidate=$ass->num_rows;

	?>
      
    <div style="margin-left:-30px; height:110px; float:left;  width:100%; line-height:1.5; background:#FFF">
   
 TOTAL CREDITS ATTEMPTED:  <?php
		
		  $as=$conn->query("SELECT SUM(cv) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."'   and sem!='3'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  /////if you dept CV= Total earned show else hide
	
	
			  
			echo  $total_credit_attempted=$bs['attempts'];
	
		
	
          }
		   ?>  <br />
        
        
        
        GPA CREDITS ATTEMPTED:  <?php
		  $as=$conn->query("SELECT SUM(cv) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."'   and sem!='3'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 
			 
			 	  /////if you dept CV= Total earned show else hide
	
	
			  
			echo  $gpa_credit_attempted=$bs['attempts'];
	  
		 
          }
		   ?> <br />
           
        CUMMULATIVE TOTAL CREDIT EARNED: <?php
		  $as=$conn->query("SELECT SUM(cv*valid) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."'   and sem!='3'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			   echo  $cumalative_earned=$bs['attempts'];
			  
			  
			 	  /***
	
	if($cumalative_earned>=$dept_cumcredit){
		
		 echo  $cumalative_earned=$bs['attempts'];
	}
	else {
		
	}
		*******/	  
			  
			  
		 
          }
		   ?> <BR />
        CUM GPA CREDITS EARNED: <?php
		
		   $as=$conn->query("SELECT SUM(cv*valid) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."'   and sem!='3'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  			 	  /////if you dept CV= Total earned show else hide
	
		echo  $cum_gpa_earned=$bs['attempts'];
	
          }
		   ?>     
           
           
           
           
           
             
        
        <br /> <br />
        
       <span style="font-weight:bold"> CUMMULATIVE GPA:   <?php
		
		 $as=$conn->query("SELECT SUM(gpa)  FROM my_stats where matric='".ltrim($row['matricule'])."' and gpa>0    ") or die(mysqli_error($conn));	 
		
		  while ($bs=$as->fetch_assoc()){
			 $gpa_one=$bs['SUM(gpa)'];		 
          }
		  ////Number of semesters; 
		
		  $deptt=$row['dept_id'];
		  
		   $as=$conn->query("SELECT * FROM my_stats where matric='".ltrim($row['matricule'])."' and gpa>0   ") or die(mysqli_error($conn));
		     $num_of_sem=$as->num_rows;
		   if(empty($deptt)){
			   echo 'No Dept chose';
		   }
		   
		   else {
			   
		 
		  echo $cum_gpa=number_format($gpa_one/$num_of_sem,2);
		   }
		  
		   
         
		   ?></span> <BR />
         
        
       </div>
       