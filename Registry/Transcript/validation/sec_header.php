
    	<div class="box1">
        <p style="margin-top:-20px; font-size:12px; line-height:1.5">
        <?php echo $school; ?>
        <?php echo $address; ?>
</p>
        </div>
        
        
        <div class="box1" style="width:250px; text-align:center; border-left:none">
        <BR />
        STUDENTS ACADEMIC Registry
        </div>
        
        
        
         <div class="box1" style="width:475px; border-left:none; border-right:none">
         	<div class="box1_left" style=" border-top:none; border-left:none">
     <br />Student's No: <span style="font-size:12px; color:#F00; font-weight:bold"><?php echo ltrim($row['matricule']); ?> </span>
         </div>
     
     
     <div class="box1_left" style=" border-top:none; margin-left:0px; border-left:none">
            <br />Date Printed: <?php echo date('d-m-Y'); ?>
            
      </div>
      
       <div class="box1_left" style=" border-top:none; margin-left:0px; border-left:none; width:118px; border-right:none">
            <br />Page <?php echo $page++; ?>/ <?php echo $page_num; ?>
            
      </div>
            
            <div class="box1_left" style=" border-top:none; margin-left:0px; border-left:none; margin-top:0px; padding-bottom:0px; height:40px; width:450px; border-bottom:0px; border-right:none">
             <?php
		   
		   $fullname = $row['fname'];
    $fullname = trim($fullname); // remove double space
   $firstname = substr($fullname, 0, strpos($fullname, ' '));
     $lastname = substr($fullname, strpos($fullname, ' '), strlen($fullname));
		   
		     ?>
           <p style="text-align:left; float:left; padding-left:5px"> Surname:   <span style="font-size:14px; font-weight:bold"><?php echo $firstname;  ?>
          
           </p> 
           
           
            <p style="text-align:left; float:right; padding-left:5px">
           <span style="margin-left:30xp"><span style="font-weight:normal" >Other Names: </span>:<b><?php echo $lastname;  ?></b>
           </p> 
           
          
            
      </div>
        
        
        </div>