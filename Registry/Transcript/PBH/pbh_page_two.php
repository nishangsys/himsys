   
    
    
    
    
<?php


	////get Current page number and Name 
			 $cl=$dbcon->query("SELECT * FROM pages where num='$page'  ") or die(mysqli_error($dbcon));
while($rowl=$cl->fetch_assoc()){
	 $p_names=$rowl['name'];
	 $cur_pnum=$rowl['num'];
	
}
?>
	<page size="A4" layout="landscape"  >
        <div class="main" style="height:600px; border:1px solid#000; border-bottom:1px solid#000; outline:#FFF;   ";
		  >
           <div style="clear:both; margin-top:40px;"></div>
    
    <?php
	
	 include 'sec_header.php';
	?>
    
    <!----FIRST BOX RESIT WRITTEN------>
    
    <div class="semester_box_page2">
    <div class="title">RESIT SESSION WRITTEN</div>
     <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:90PX;">
            Course Code
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:273PX;">
            Course Title
            </div>
            
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:80PX; ">
           Score<br />
           /100
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:80px; line-height:none; ">
           Grade
            </div>
            
            
            
             <?PHP
				 $stripped = str_replace(' ', '', ltrim($row['matricule']));
				
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".$stripped."' and     sem='4' and mhnd='W'  GROUP BY roll order by code ") or die(mysqli_error($conn));
		  while ($ans=$ad->fetch_assoc()){
		  
		  ?>  
                 
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:90PX;height:15px ; padding:5px 0px; text-align:left">
           &nbsp; <?php echo $ans['code']; ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:273PX;height:15px ; padding:5px 0px; text-align:left">
            &nbsp; <?php
		
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."'  and department='".$row['departmet']."' GROUP BY subject  ") or die(mysqli_error($conn));

		
		  while ($bs=$as->fetch_assoc()){
			  
		  $s = ucwords(strtolower($bs['title']));
			 echo  $s;
			  
		 
          }
		   ?>
            </div>
            
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:80PX;height:15px ; padding:5px 0px; ">
           &nbsp;
             <?php  
	///Mulp msk by 100 and divide mks  by 20 have mks on 100   
		  $  my_marks=($ans['exam']*100)/20;
		  ////Round up mks to 2 d,p
		 echo $my_converted_mks=number_format($  my_marks,2); 
		 /********
	////Update Registry with total/100 for avg	  	
			 $uu=$conn->query("UPDATE  my_marks set earned='".$  my_marks."' where  matric='".$stripped."' and sem='3' and ayear='".$row['db1']."' and code='".$ans['code']."'  ") or die(mysqli_error($conn));
			 
			 ////if mark is greater than 50 then its a pass mks or else he is 
	if($  my_marks>=50){
		////PASS WITH VALID 1
			  	
			 $uu=$conn->query("UPDATE  my_marks set valid='1' where  matric='".$stripped."' and sem='3' and ayear='".$row['db1']."' and code='".$ans['code']."'  ") or die(mysqli_error($conn));
	}
	else {
		////FAIL WITH VALID 0
		
			 $uu=$conn->query("UPDATE  my_marks set valid='0' where  matric='".$stripped."' and sem='3' and ayear='".$row['db1']."' and code='".$ans['code']."'  ") or die(mysqli_error($conn));
	}
	*******/
		   ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:80px; line-height:none;height:15px ; padding:5px 0px; ">
            <?php
			////Get grade from grading scale
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['weight'];  
			 
		 
          }
		  
		   ?>
            </div>
            <?PHP } ?>
            
    
    </div>
    
    
    <!----END FIRST BOX RESIT WRITTEN------>
    
    
    
    
    <!----START FIRST BOX RESIT PRACTICAL------>
    
    <div class="semester_box_page2">
    <div class="title">RESIT SESSION PRACTICAL</div>
    
     <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:90PX;">
            Course Code
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:273PX;">
            Course Title
            </div>
            
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:80PX; ">
           Score<br />
           /100
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:80px; line-height:none; ">
           Grade
            </div>
            
            
            
             <?PHP
				 $stripped = str_replace(' ', '', ltrim($row['matricule']));
				
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".$stripped."'  and sem='4' and mhnd='P'  GROUP BY roll order by code ") or die(mysqli_error($conn));
		  while ($ans=$ad->fetch_assoc()){
		  
		  ?>  
                 
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:90PX;height:15px ; padding:5px 0px; text-align:left">
           &nbsp; <?php echo $ans['code']; ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:273PX;height:15px ; padding:5px 0px; text-align:left">
            &nbsp; <?php
		
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."' and department='".$row['departmet']."' GROUP BY subject  ") or die(mysqli_error($conn));

		
		  while ($bs=$as->fetch_assoc()){
			  
		  $s = ucwords(strtolower($bs['title']));
			 echo  $s;
			  
		 
          }
		   ?>
            </div>
            
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:80PX;height:15px ; padding:5px 0px; ">
           &nbsp;
             <?php  
	///Mulp msk by 100 and divide mks  by 20 have mks on 100   
		  $  my_marks=($ans['exam']*100)/20;
		  ////Round up mks to 2 d,p
		 echo $my_converted_mks=number_format($  my_marks,2); 
		 /********
	////Update Registry with total/100 for avg	  	
			 $uu=$conn->query("UPDATE  my_marks set earned='".$  my_marks."' where  matric='".$stripped."' and sem='4' and code='".$ans['code']."'  ") or die(mysqli_error($conn));
			 
			 ////if mark is greater than 50 then its a pass mks or else he is 
	if($  my_marks>=50){
		////PASS WITH VALID 1
			  	
			 $uu=$conn->query("UPDATE  my_marks set valid='1' where  matric='".$stripped."' and sem='4' and  code='".$ans['code']."'  ") or die(mysqli_error($conn));
	}
	else {
		////FAIL WITH VALID 0
		
			 $uu=$conn->query("UPDATE  my_marks set valid='0' where  matric='".$stripped."' and sem='4' and  code='".$ans['code']."'  ") or die(mysqli_error($conn));
	}
	*******/
		   ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:80px; line-height:none;height:15px ; padding:5px 0px; ">
            <?php
			////Get grade from grading scale
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['weight'];  
			 
		 
          }
		  
		   ?>
            </div>
            <?PHP } ?>
    
    
    </div>
          
    <DIV style="clear:both"></DIV> 
    <!----END FIRST BOX RESIT PRACTICAL------>    
    <!--------------------------------------------------------------------------------------------------CERTIFICATION EXAMS--------------------------------------------------------------------------------------------------------------------->
    <div class="title">CERTIFICATION EXAMINATION SESSION JULY <?php echo $year2; ?></div>
    
    
    
    
    
    
    <!----SECOND BOX RESIT WRITTEN------>
    
    <div class="semester_box_page2">
    <div class="title"> WRITTEN PAPERS</div>
     <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:90PX;">
            Course Code
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:273PX;">
            Course Title
            </div>
            
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:80PX; ">
           Score<br />
           /100
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:80px; line-height:none; ">
           Grade
            </div>
            
            
            
             <?PHP
				 $stripped = str_replace(' ', '', ltrim($row['matricule']));
				
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".$stripped."'  and  sem='5' and mhnd='W'  GROUP BY roll order by code ") or die(mysqli_error($conn));
		  while ($ans=$ad->fetch_assoc()){
		  
		  ?>  
                 
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:90PX;height:15px ; padding:5px 0px; text-align:left">
           &nbsp; <?php echo $ans['code']; ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:273PX;height:15px ; padding:5px 0px; text-align:left">
            &nbsp; <?php
		
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."'  and department='".$row['departmet']."' GROUP BY subject  ") or die(mysqli_error($conn));

		
		  while ($bs=$as->fetch_assoc()){
			  
		  $s = ucwords(strtolower($bs['title']));
			 echo  $s;
			  
		 
          }
		   ?>
            </div>
            
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:80PX;height:15px ; padding:5px 0px; ">
           &nbsp;
             <?php  
	///Mulp msk by 100 and divide mks  by 20 have mks on 100   
		  $  my_marks=($ans['exam']*100)/20;
		  ////Round up mks to 2 d,p
		 echo $my_converted_mks=number_format($  my_marks,2); 
		 /********
	////Update Registry with total/100 for avg	  	
			 $uu=$conn->query("UPDATE  my_marks set earned='".$  my_marks."' where  matric='".$stripped."' and sem='3' and ayear='".$row['db1']."' and code='".$ans['code']."'  ") or die(mysqli_error($conn));
			 
			 ////if mark is greater than 50 then its a pass mks or else he is 
	if($  my_marks>=50){
		////PASS WITH VALID 1
			  	
			 $uu=$conn->query("UPDATE  my_marks set valid='1' where  matric='".$stripped."' and sem='3' and ayear='".$row['db1']."' and code='".$ans['code']."'  ") or die(mysqli_error($conn));
	}
	else {
		////FAIL WITH VALID 0
		
			 $uu=$conn->query("UPDATE  my_marks set valid='0' where  matric='".$stripped."' and sem='3' and ayear='".$row['db1']."' and code='".$ans['code']."'  ") or die(mysqli_error($conn));
	}
	*******/
		   ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:80px; line-height:none;height:15px ; padding:5px 0px; ">
            <?php
			////Get grade from grading scale
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['weight'];  
			 
		 
          }
		  
		   ?>
            </div>
            <?PHP } ?>
            
    
    </div>
    
    
    <!----END SECOND BOX RESIT WRITTEN------>
    
    
    
    
    <!----START SECOND BOX RESIT PRACTICAL------>
    
    <div class="semester_box_page2">
    <div class="title"> PRACTICALS</div>
    
     <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:90PX;">
            Course Code
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:273PX;">
            Course Title
            </div>
            
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:80PX; ">
           Score<br />
           /100
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:80px; line-height:none; ">
           Grade
            </div>
            
            
            
             <?PHP
				 $stripped = str_replace(' ', '', ltrim($row['matricule']));
				
		  $ad=$conn->query("SELECT * FROM  my_marks where matric='".$stripped."'    and sem='5' and mhnd='P'  GROUP BY roll order by code ") or die(mysqli_error($conn));
		  while ($ans=$ad->fetch_assoc()){
		  
		  ?>  
                 
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:90PX;height:15px ; padding:5px 0px; text-align:left">
           &nbsp; <?php echo $ans['code']; ?>
            </div>
            
             <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:273PX;height:15px ; padding:5px 0px; text-align:left">
            &nbsp; <?php
		
		  $as=$conn->query("SELECT * FROM subject where subject='".$ans['code']."' and department='".$row['departmet']."' GROUP BY subject  ") or die(mysqli_error($conn));

		
		  while ($bs=$as->fetch_assoc()){
			  
		  $s = ucwords(strtolower($bs['title']));
			 echo  $s;
			  
		 
          }
		   ?>
            </div>
            
            
            <div  class="patition" style="border-left:none; border-top:0px; line-height:none; width:80PX;height:15px ; padding:5px 0px; ">
           &nbsp;
             <?php  
	///Mulp msk by 100 and divide mks  by 20 have mks on 100   
		  $  my_marks=($ans['exam']*100)/20;
		  ////Round up mks to 2 d,p
		 echo $my_converted_mks=number_format($  my_marks,2); 
		 /********
	////Update Registry with total/100 for avg	  	
			 $uu=$conn->query("UPDATE  my_marks set earned='".$  my_marks."' where  matric='".$stripped."' and sem='3' and ayear='".$row['db1']."' and code='".$ans['code']."'  ") or die(mysqli_error($conn));
			 
			 ////if mark is greater than 50 then its a pass mks or else he is 
	if($  my_marks>=50){
		////PASS WITH VALID 1
			  	
			 $uu=$conn->query("UPDATE  my_marks set valid='1' where  matric='".$stripped."' and sem='3' and ayear='".$row['db1']."' and code='".$ans['code']."'  ") or die(mysqli_error($conn));
	}
	else {
		////FAIL WITH VALID 0
		
			 $uu=$conn->query("UPDATE  my_marks set valid='0' where  matric='".$stripped."' and sem='3' and ayear='".$row['db1']."' and code='".$ans['code']."'  ") or die(mysqli_error($conn));
	}
	*******/
		   ?>
            </div>
            
            <div  class="patition" style="border-left:none; border-top:0px; width:80px; line-height:none;height:15px ; padding:5px 0px; ">
            <?php
			////Get grade from grading scale
		  
		    $as=$conn->query("SELECT * FROM grading where  sector='$dep_id' and $  my_marks>=b and $  my_marks<=a GROUP BY id ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			  
			echo $grade=$bs['weight'];  
			 
		 
          }
		  
		   ?>
            </div>
            <?PHP } ?>
    
    
    </div>
          
     
    <!----END SECOND BOX RESIT PRACTICAL------>  
    
    
    
    
  </div>

    <?php 
	
		include 'footer.php'; 
		

			 ?>







	</page>
   