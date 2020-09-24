
    <br /><br />    
    <div style="margin-left:-30px; height:110px; float:left; background:#fff; width:100%; line-height:1.5">
        TOTAL CREDITS ATTEMPTED:  <?php
		
		  $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."'   and sem!='3'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $total_credit_attempted=$bs['attempts'];
			  
		 
          }
		   ?>  <br />
        
        
        
        GPA CREDITS ATTEMPTED:  <?php
		  $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."'   and sem!='3'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $gpa_credit_attempted=$bs['attempts'];
			 
			   /////////check if Registry exists else insert
		  $asl=$conn->query("SELECT * FROM graduation where matric='".ltrim($row['matricule'])."' and level='".$row['levels']."' and ayear='".$row['db1']."'     ") or die(mysqli_error($conn));
		  $exist=$asl->num_rows;
		  
		  /////if exists upfaye
		  if($exist>=1){
			
			 $uu=$conn->query("UPDATE graduation set attemps='$gpa_credit_attempted' where  matric='".ltrim($row['matricule'])."' and level='".$row['levels']."' and ayear='".$row['db1']."'  ") or die(mysqli_error($conn));
			}
			
			/////if not exixt insert
			else {
			$uu=$conn->query("INSERT INTO graduation   SET matric='".ltrim($row['matricule'])."',level='".$row['levels']."',ayear='".$row['db1']."',attemps='$gpa_credit_attempted',dept='".$row['departmet']."',name='".$row['fname']."' ") or die(mysqli_error($conn));
			}
			  
		 
          }
		  
		  
		  
		  
		 
		   ?> 
           <BR />
        CUMMULATIVE TOTAL CREDIT EARNED: <?php
		  $as=$conn->query("SELECT SUM(credit*valid) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."'   and sem!='3'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $cumalative_earned=$bs['attempts'];
			  
		 
          }
		   ?> <BR />
        CUM GPA CREDITS EARNED: <?php
		
		   $as=$conn->query("SELECT SUM(credit*valid) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."'   and sem!='3'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 echo  $cum_gpa_earneds=$bs['attempts'];
			 
			 /////////check if Registry exists else insert
		  $asl=$conn->query("SELECT * FROM graduation where matric='".ltrim($row['matricule'])."' and level='".$row['levels']."' and ayear='".$row['db1']."'    ") or die(mysqli_error($conn)) ;
		  $exist=$asl->num_rows;
		  
		  /////if exists upfaye
		  if($exist>=1){
			
			 $uu=$conn->query("UPDATE graduation set earned='$cum_gpa_earneds' where  matric='".ltrim($row['matricule'])."' and level='".$row['levels']."' and ayear='".$row['db1']."' ") or die(mysqli_error($conn));
			}
			
			/////if not exixt insert
			else {
			$uu=$conn->query("INSERT INTO graduation   SET matric='".ltrim($row['matricule'])."',level='".$row['levels']."',ayear='".$row['db1']."',earned='$cum_gpa_earneds',dept='".$row['departmet']."',name='".$row['fname']."' ") or die(mysqli_error($conn));
			}
			  
		 
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
		   
		   echo $cum_gpa=number_format($gpa_one/$num_of_sem,2);
		   
		   
		   
		   
		   
		   
		   
		   /////////////////For ranking
		   
		   /////////check if Registry exists else insert
		  $asl=$conn->query("SELECT * FROM graduation where matric='".ltrim($row['matricule'])."' and level='".$row['levels']."' and ayear='".$row['db1']."'    ") or die(mysqli_error($conn));
		  $exist=$asl->num_rows;
		  
		  /////if exists upfaye
		  if($exist>=1){
			
			 $uu=$conn->query("UPDATE graduation set gpa='$cum_gpa' where  matric='".ltrim($row['matricule'])."' and level='".$row['levels']."' and ayear='".$row['db1']."' ") or die(mysqli_error($conn));
			}
			
			/////if not exixt insert
			else {
			$uu=$conn->query("INSERT INTO graduation   SET matric='".ltrim($row['matricule'])."',level='".$row['levels']."',ayear='".$row['db1']."',gpa='$cum_gpa',dept='".$row['departmet']."' ,name='".$row['fname']."'") or die(mysqli_error($conn));
		
			}
		  
		   
         
		   ?> <BR />
         
        
       </div>