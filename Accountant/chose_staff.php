<div class="container-fluid text-center">    
  <div class="row content">
   
    <div class="col-sm-12 text-left"> 
       <?php
	    $today=date('d-m-Y');
		$con = mysqli_connect('localhost','nishang','google1234','hims_finance');

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
	  $do12=$con->query("SELECT * from requisition_name    order by id DESC LIMIT 25 ") or die(mysqli_error($con));
	  $i=1;
      
      
      ?>     
        <table class="table table-bordered" style="background:#FFF">
    <thead>
      <tr>
        <th>S/N</th>
        <th>NAME</th>
        <th>DEPARTMENT</th>
        
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
        <td><?php echo $name=$df['name']; ?></td>
         <td><?php echo $df['dept']; ?></td>
       

         <td>
         <!---
            <a href="sales.php?our_staff=<?php echo $name; ?>&dep=<?php echo $df['dept']; ?>&id=<?php echo $df['id']; ?>&req_id=<?php echo $df['req_id']; ?>" target="_new">-->
            
            <a href="?prepareit&our_staff=<?php echo $name; ?>&dep=<?php echo $df['dept']; ?>&id=<?php echo $df['id']; ?>&req_id=<?php echo $df['req_id']; ?>" target="_new">
        <button type="button" class="btn btn-primary">PREPARE NEW REQUISITION</button>    
          
</a>  |


  <a href="?seeit=<?php echo $name; ?>&dep=<?php echo $df['dept']; ?>&id=<?php echo $df['id']; ?>&req_id=<?php echo $df['req_id']; ?>" target="_new">
        <button type="button" class="btn btn-success">VIEW PREPARED REQUISITION</button>    
          
</a> </td>

       
      </tr>
      
    <?php } ?>
    </tbody>
    
  </table>  
  
  <?php
  
  ?>
     
  </div>
</div>