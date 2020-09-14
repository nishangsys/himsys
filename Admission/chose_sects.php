


<?php $d=$con->query("SELECT * FROM main_sects order by name   ") or die(mysqli_error($con));
$i=1;
?>
       <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Department</th>
        <th>Duration</th>
        
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
                                            <td><?php echo $bu['name']; ?></td>  
                                        
                                              <td><?php echo $bu['code']; ?></td>  
                                              <td><a href="?now&Link=New Student&nam=<?php echo $bu['id']; ?>" style="font-weight:bold; color:#033"><button class="btn btn-success" >Admit <?php echo $bu['name']; ?> Student</button></a></td>
                   
      </tr>
        <?php } ?>
      
      
      <TR>
      
       <td><?php  echo $i++; ?></td>
                                            <td>Others</td>  
                                        
                                              <td>Others</td>  
                                              <td><a href="?now&Link=New Student&nam=others" style="font-weight:bold; color:#033"><button class="btn btn-success" >Admit Others</button></a></td>
                   
      </tr>
    </tbody>
    </table>
   

