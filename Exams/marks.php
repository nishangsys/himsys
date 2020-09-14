  <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="" method="post" >
   
   
   
     <table class="table table-bordered">

              <tr><td>School Year</td><td> 
              
                <select class="form-control" id="sel1" name="ayear" required>
              <option>........</option> 
	  
    <option value="<?php echo $ayear; ?>"><?php echo $ayear; ?>  Academic Year</option>
    </select></td><td>Semester</td><td>
       <select class="form-control" id="sel1" name="term" required>
              <option value="1">First Semester</option>  <option value="2">Second Semester</option>
    </select>
              
              </td></tr>
               
               
                        
                  <tr><td></td><td><button type="submit" name="ok" class="myButton"   >SAVE</button></td></tr>
                  <input type="hidden" name="id"  value="<?php echo $l+1; ?>"  />
            </table>
     
  
      
  
  
   <?php
   if(isset($_POST['ok'])){
 $term=$_POST['term'];
  $year_id=$_POST['ayear'];
 			 
?>

 <div class="row">
 
        <div class="col-sm-12">
 <iframe src="../Exams/old.php?year_id=<?php echo $ayear; ?>&term=<?php echo $term; ?>" allowFullScreen style="width: 100%;
			float:left;
			background: #FFF;
            border:none;
            height:1200px;
            overflow:hidden;
			border-radius: 5px;
		
 "></iframe>
          </div>
          </div>
          
          <?php } ?>
		      </div>
    </div>