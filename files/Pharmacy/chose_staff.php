<div class="container-fluid text-center">    
  <div class="row content">
   
    <div class="col-sm-12 text-left"> 
      <div class="alert alert-danger">
        <strong>Software Says!</strong> Selling to <strong>
        <?php echo $_GET['our_staff']; ?></strong></a>.
      </div>
       <?php
	   $today=date('d-m-Y');
	  $do12=$con->query("SELECT * from customers where reg_date='$today' and gname='staff' order by client_id DESC LIMIT 5 ") or die(mysqli_error($con));
	  $i=1;
      
      
      ?>     
        <table class="table table-bordered" style="background:#FFF">
    <thead>
      <tr>
        <th>S/N</th>
        <th>NAME</th>
        <th>DEPARTMENT</th>
        <th>SECTOR</th>
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
        <td><?php echo $name=$df['stu_name']; ?></td>
         <td><?php echo $df['class']; ?></td>
         <td><?php echo $df['gname']; ?></td>


         <td>
            <a href="?our_staff=<?php echo $name; ?>&dep=<?php echo $df['class']; ?>&id=<?php echo $df['client_id']; ?>">
        <button type="button" class="btn btn-info">SELL TO HIM/HER</button>    
          
</a></td>

       
      </tr>
      
    <?php } ?>
    </tbody>
    
  </table>  
  
  <?php
  
  ?>
     
  </div>
</div>