
  
  <div class="row">
        <div class="col-sm-12">
          <div class="well">
		<h3>My signed Semester students <span style="color:#090"> >>Submit my Assignment</span>
        
       
        
        </h3>
        <?php $d=$con->query("SELECT * FROM my_students where matric='$user' and year_id='$year_id' and status='2' GROUP BY id   ") or die(mysqli_error($con));
$i=1;
?>

<div class="panel-body">
                           
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Subject</th>
        <th>Code</th>
       
         <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="Aquamarine">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><?php echo $bu['subj']; ?></td>
                                            <td><?php echo $bu['code']; ?></td>
                                          
                                             
                                              <td><a href="?submit_ass=<?php echo $bu['code']; ?>&year_id=<?php echo $year_id; ?>&subj=<?php echo $bu['subj']; ?>" style="font-weight:bold; color:#033"><button class="btn btn-warning" >Submit Assignment</button></a></td>
                   
      </tr>
        <?php } ?>
      
    </tbody>
  </table>
                            </div>
                      </div>

        </div>
        </div>
     