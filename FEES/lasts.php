


<?php 

$bb =$con->query("SELECT * FROM special where id='".$_GET['nam']."' ") or die(mysqli_error($con));
 while($userRow=$bb->fetch_array()){ 
  $active=$userRow['prog_name'];
 }

$d=$con->query("SELECT * FROM main_sects order by name   ") or die(mysqli_error($con));
$i=1;
?>
       <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Department</th>
       
         <th>Action</th>
        
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
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><?php echo $active; ?> <?php echo $bu['name']; ?></td>  
                                        
                                             
                                              <td>
                               
  
   <a href="?all_lasts=<?php echo $nj; ?>&id=<?php echo  $_GET['nam']; ; ?>&year_id=<?php echo $ayear; ?>&fid=<?php echo $bu['id']; ?>&link=Admitting <?php echo $active; ?> <?php echo $bu['name']; ?> Direct Entry">                                                   
                                            <button class="btn btn-success" >View Lastly Admitted <?php echo $bu['name']; ?> Student</button></a></td>
                   
      </tr>
        <?php } ?>
      
     
    </tbody>
    </table>
   

