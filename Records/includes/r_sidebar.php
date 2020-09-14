<?php

?>
         <!-- RIGHT STRIP  SECTION -->
        <div id="right">

            
            <div class="well well-small">
                <ul class="list-unstyled">
                <li> <span><?php echo $pdept;  ?></span></li>
                 <li> <span><?php echo $ydept;  ?></span></li>
                 
                     <li>Level &nbsp; : <span><?php echo $level;  ?></span></li>
                     
                    <li>A Y &nbsp; : <span><?php echo $ayear;  ?></span></li>
                    <li>Semester &nbsp; : <span><?php        if($semester==1){
			echo "First";
		}
	  else {
		  echo "Second";
	  };  ?></span></li>
                   
                    
                </ul>
            </div>
            <div class="well well-small">
            <h3>My students</h3>
            
               <?php $d=$con->query("SELECT * FROM my_students where matric='$user' and year_id='$ayear' and term='$semester' and status='2' ") or die(mysqli_error($con));
$i=1;
?>   

 <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Subject</th>
      
        
      </tr>
    </thead>
    <tbody>
    
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="cornsilk">';
 }
 else
 {
    echo '<tr bgcolor="lightcyan">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><a href="?form_b&delete=<?php echo $bu['id']; ?>&matric=<?php echo $user; ?>&year_id=<?php echo $ayear; ?>&name=<?php echo $bu['ayear']; ?>" style="font-weight:bold; color:#033" onclick="return confirm('Are you sure about you wish to Unsign <?php echo $bu['subj']; ?> ')"><?php echo $bu['subj']; ?></a></td>
                               
                   
      </tr>
        <?php } ?>
      
    </tbody>
  </table>
  <?php
   
		  if(isset($_GET['delete'])){
	 $code=$_GET['delete'];
	$suject=$_GET['name'];
	$syaer=$_GET['ayear'];
	 $matric=$_GET['matric'];
	 
	 $del=$con->query("DELETE FROM my_students WHERE id='$code' ") or die(mysqli_error($con));
	 
		  }
  ?>
            
            
           
          
            
         

        </div>
        </div></div>
         <!-- END RIGHT STRIP  SECTION -->