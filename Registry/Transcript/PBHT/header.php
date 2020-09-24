
    <?php
	
/////get start year	
$df=$dbcon->query("SELECT * FROM `courses` WHERE   matricule='".$matric."' and departmet='$dept' order by db1 ASC LIMIT 1") or die(mysqli_error($dbcon));

while($gh=$df->fetch_assoc()){
	
$date = $gh['db1'];
$date = explode('/', $date);
$start= $date[0];


}



/////get end year	
$df=$dbcon->query("SELECT * FROM `courses` WHERE   matricule='".$matric."' and departmet='$dept' order by db1 DESC LIMIT 1") or die(mysqli_error($dbcon));

while($gh=$df->fetch_assoc()){
	
$date = $gh['db1'];
$date = explode('/', $date);

$end  = $date[1];

}

//////////CUMMULATIVE TOTAL CREDIT EARNED

  $as=$conn->query("SELECT SUM(credit*valid) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."'   and sem!='4'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 $cumalative_earned=$bs['attempts'] ;
			  
		 
          }
///////////  TOTAL CREDITS ATTEMPTED: 

	  $as=$conn->query("SELECT SUM(credit) as attempts FROM  my_marks where matric='".ltrim($row['matricule'])."'   and sem!='4'  ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
			 $total_credit_attempted=$bs['attempts'];	  
		 
          }
		  
		  ////////If a and b is equals then graduate
		  
		  if($total_credit_attempted==$cumalative_earned){
			  $graduate=1; ///mean student can graduate
		  }
		  else {
		$graduate=0; /////meaning student should not graduate 
		  }
///***********************//////////DEGREE CONFEERED

$as=$conn->query("SELECT * FROM degrees where dept='". $ydept."'   ") or die(mysqli_error($conn));
		
		  while ($bs=$as->fetch_assoc()){
		$degree_conferred=$bs['degree'];		  
		 
          }
		  
		  
///check if you have validated all the courses thats is whee val=1 in my_courses tbl
  $val=$conn->query("SELECT * FROM  my_marks where matric='".ltrim($row['matricule'])."'   and sem!='4' and valid!='1' and ca!='' and  exam!='' ") or die(mysqli_error($conn));
  $validate=$val->num_rows;
  
  ///check if you have validated all the courses thats is whee val=1 in my_courses tbl
  $vals=$conn->query("SELECT * FROM  my_marks where matric='".ltrim($row['matricule'])."'   and sem!='4' GROUP BY ayear ") or die(mysqli_error($conn));
  $allsem=$vals->num_rows;
  


?>
    	<div class="box1" style="margin-top:-15px">
        <p style="margin-top:-20px; font-size:12px; line-height:1.5">
        <?php echo $school; ?>
        <?php echo $address; ?>
</p>
        </div>
        
        
        <div class="box1" style="width:210px; text-align:center; border-left:none; margin-top:-15px">
        <BR />
        STUDENTS ACADEMIC Registry
        </div>
        
        
        
         <div class="box1" style="width:515px; border-left:none; border-right:none; margin-top:-15px">
         	<div class="box1_left" style=" border-top:none; border-left:none; width:210px">
     <br />Student's No: <span style="font-size:14px; font-weight:bold"><?php echo ltrim($row['matricule']); ?> </span>
         </div>
     
     
     <div class="box1_left" style=" border-top:none; margin-left:0px; border-left:none">
            <br />Date Printed: <?php echo date('d-m-Y'); ?>
            
      </div>
      
       <div class="box1_left" style=" border-top:none; margin-left:0px; border-left:none; width:128px; border-right:none">
            <br />Page <br /><?php echo $page++; ?> OF <?php echo $page_num; ?>
            
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
        
        
        
        
        <div class="box1" style="border-top:0px; height:0px;  ">
        <p style="margin-top:-20px;  font-size:12px; line-height:1.5"> Date of Birth: 
        
         <br />    
        
        <span style="font-size:14px; font-weight:bold"> <?php echo $row['cxx2']; ?></span>        
        </div>
        
        
        <div class="box1" style="border-top:0px; width:140px; border-left:0px; height:0px">
        <p style="margin-top:-20px;  font-size:12px; line-height:1.5"> Place of Birth: <br />    
        
        <span style="font-size:14px; font-weight:bold"><?php echo $row['cxx1']; ?></span>  
        </div>
        
        
         <div class="box1" style="border-top:0px; width:60px; border-left:0px; height:0px">
        <p style="margin-top:-20px;  font-size:12px; line-height:1.5"> Sex: <br />    
        
        <span style="font-size:14px; font-weight:bold"><?php echo $row['sex']; ?></span>  
        </div>
        
        
        
         <div class="box1" style="border-top:0px; width:200px; border-left:0px; height:0px">
        <p style="margin-top:-20px;  font-size:12px; line-height:1.5"> School Last Attended: <br />    
        
        <span style="font-size:14px; font-weight:bold"> </span>  
        </div>
        
        
        
        <div class="box1" style="border-top:0px; border-right:none; width:302px; border-left:0px; height:0px">
        <p style="margin-top:-20px;  font-size:12px; line-height:1.5"> This Transcript is not valid without the signature of the Registrar and Enbossed seal of the school</p>
        </div>
        
        
        
        
        
          <div class="box1" style="border-top:0px;  width:375px; height:80px">
          		<div class="box1" style="border-top:0px; width:376px; border-left:none; border-right:none; margin-top:-30px; height:5px; margin-left:-8px;">
                <p style="margin-top:0px;  font-size:12px; line-height:1.5"> Date of Enrolment :  <span style="font-size:14px; font-weight:bold">October <?php echo $start; ?></span>   </p> 
       		 </div>
             
             
             
             
             	<div class="box1" style="border-top:0px; width:376px; border-left:none; border-bottom:0px; border-right:none; margin-top:0px; height:45px; margin-left:-8px;">
                <p style="margin-top:0px;  font-size:12px; line-height:1.5; margin-top:-20px"> Department :  <span style="font-size:14px; font-weight:bold"> <?php echo $row['departmet']; ?></span> <br />
                
                 Degree Proposed :  <span style="font-size:13px; font-weight:bold"> <?php 
				 
				 
	if($validate<1){
		
			  
			echo	$degree_conferred;
	}
	else {
		
	} ?></span> 
                 <br />
                  Degree Conferred :  <span style="font-size:13px; font-weight:bold"> <?php 
				 
				 
	if($validate<1 && $allsem>=3 ){
		
			  
			echo	$degree_conferred;
	}
	else {
		
	} ?></span>
                  <br />
                   Date :  <span style="font-size:14px; font-weight:bold"> <?php 
				   
	if($allsem>=3){
		
			  
			echo	"August ". $end;
	}
	else {
		
	}
				   ?></span>  
                
                
                  </p> 
       		 </div>
              
        </div>
        
        
        
        
          <div class="box1" style="border-top:0px;  width:115px; height:80px; border-left:none">
          Student's Address
          </div>
          
             <div class="box1" style="border-top:0px;  width:105px; height:80px; border-left:none">
          Parent's Address
          </div>
          
             <div class="box1" style="border-top:0px;  width:105px; height:80px; border-left:none">
          Remarks: 
          </div>
          
          
          
             <div class="box1" style="border-top:0px; border-right:0px;width:302px; text-align:left; height:80px; border-left:none">
                          <div  style="margin-top:-20px; font-size:10px;   height:60px">

             <?php
			
$cs=$dbcon->query("SELECT * FROM `grading` where sector='$dep_id' order by 	b DESC ") or die(mysqli_error($dbcon));
while($ro=$cs->fetch_assoc()){
	
			 ?>
<div class="for_grades"> <?php echo $ro['weight']; ?> :  </div>  <div class="for_grades"><?php echo $ro['b']; ?></div> <div class="for_grades"> - </div>
<div class="for_grades" style="margin-left:-10px">
<?php echo $ro['a']; ?></div>
 &nbsp; 
 <div class="for_grades" style="margin-left:-10px">% </div>
  <div class="for_grades"> <?php echo $ro['grade']; ?></div>
  <div class="for_grades" style="margin-left:-10px"> GP </div>
  <div style="clear:both"></div>
  
  
<?php } ?></div>

<div style="clear:both"></div>

<div style="width:95%; font-size:10px;  height:30px">
<div class="for_grades"> C -  </div>  <div class="for_grades">Compulsory </div> <br /><div class="for_grades" style="float:left"> R -  </div>  <div class="for_grades" style="width:130px">School Requirement </div>    </div>
        
          </div>
          