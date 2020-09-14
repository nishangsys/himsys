


<?php $d=$con->query("SELECT * FROM special order by prog_name  ") or die(mysqli_error($con));
$i=1;
?>
       <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Department</th>
        <th>Matricule Pattern</th>
        
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
                                            <td><?php echo $bu['prog_name']; ?></td>  
                                        
                                              <td><?php echo $bu['gh']; ?></td>  
                                              <td><a href="?chose_sect&link=Admit Direct <?php echo $bu['prog_name']; ?> Entry&nam=<?php echo $bu['id']; ?>" style="font-weight:bold; color:#033">Admit <span style="color:#00F; font-weight:bold"><?php echo $bu['prog_name']; ?></span> Direct Entry</a></td>
                   
      </tr>
        <?php } ?>
      
      
      <TR>
      
       <td><?php  echo $i++; ?></td>
                                            <td>Others</td>  
                                        
                                              <td>Others</td>  
                                              <td><a href="?now&Link=New Student&nam=others" style="font-weight:bold; color:#033">Admit Others</a></td>
                   
      </tr>
    </tbody>
    </table>
   

