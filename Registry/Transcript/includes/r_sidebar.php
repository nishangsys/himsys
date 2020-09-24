<?php

?>
         <!-- RIGHT STRIP  SECTION -->
        <div id="right">

            
            <div class="well well-small">
                <ul class="list-unstyled">
                    <li>A Y &nbsp; : <span><?php echo $ayear;  ?></span></li>
                    <li>Semester &nbsp; : <span><?php        if($semester==1){
			echo "First";
		}
	  else {
		  echo "Second";
	  };  ?></span></li>
                     <li>Level &nbsp; : <span><?php echo $level;  ?></span></li>
                    
                </ul>
            </div>
            <div class="well well-small">
            <h3>My courses</h3>
            
               <?php $d=$con->query("SELECT * FROM my_courses where matric='$user' and ayear='$ayear' and term='$semester' and status='2' ") or die(mysqli_error($con));
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
                                            <td><a href="?form_b&delete=<?php echo $bu['id']; ?>&matric=<?php echo $user; ?>&ayear=<?php echo $ayear; ?>&name=<?php echo $bu['db1']; ?>" style="font-weight:bold; color:#033" onclick="return confirm('Are you sure about you wish to delete <?php echo $bu['subj']; ?> ')"><?php echo $bu['subj']; ?></a></td>
                               
                   
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
	 
	 $del=$con->query("DELETE FROM my_courses WHERE id='$code' ") or die(mysqli_error($con));
	 
		  }
  ?>
            
            
           
          
            
         

        </div>
        </div></div>
         <!-- END RIGHT STRIP  SECTION -->