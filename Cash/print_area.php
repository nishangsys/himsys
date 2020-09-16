

   <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                               View Reports <?php echo $ayear_name; ?> Reports
                            </div>
  
  
  
  
  
<DIV style="clear:both"></DIV>
        
         <div class="col-sm-15" >

              <div class="row">
                       
                        <?PHP
						 echo $message;
						?>



   
      <?php
	  $do12=$con->query("SELECT * from daily where rec>0 group by reason,year   order by reason ") or die(mysqli_error($con));
	  $i=1;
      
      
      ?>     
        <table class="table table-bordered" style="background:#FFF">
    <thead>
      <tr>
        <th>S/N</th>
        <th>NAME</th>
        <th>Finance Year</th>
        <th>ACTION</th>
        
      </tr>
    </thead>
    
    
    <tbody>
    <?php while($df=$do12->fetch_assoc()){ ?>
      <tr>
                 <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="white">';
 }
 else
 {
    echo '<tr bgcolor="AliceBlue">';
 }
		
		?>
        <td><?php  echo $i++; ?></td>
        <td><?php echo $name=$df['reason']; ?></td>
        
       
        
           <td><?php echo $ayear_name; ?></td>
       

         <td>
     |   <a href="A4.php?class=<?php echo $name; ?>&year_id=<?php echo $ayear; ?>&yn=<?php echo $ayear_name; ?>&gdhgd" target="new">
        <button type="button" class="btn btn-danger">Print</button>    
        

</a> </td>

       
      </tr>
      
    <?php } ?>
    </tbody>
    
  </table>  
  
  <?php
  
  ?>
       
</div>