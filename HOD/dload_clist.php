<?php
						$d=$conn->query("SELECT * FROM special where id='".$_GET['did']."'  ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
						$dept_name=$bu['prog_name'];
					}
?>


<div class="alert alert-info">
  <strong>All Programs Under <span style="color:#f00"><?php echo $dept_name; ?> Department</span> </strong>
</div>
        
  
 <table class="table table-bordered">
    <thead>
      <tr>
      <th>S/N</th>
          <th>Department</th>
       
      
        <th>Action</th>
      </tr>
    </thead>
    <?php
	
			$d=$conn->query("SELECT * FROM special where id='".$_GET['did']."' ") or die(mysqli_error($conn));
			$i=1;
while($bu=$d->fetch_assoc()){
	
	?>
    <tbody>
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
      <td><?php echo $i++; ?></td>
       <td><?php echo $bu['prog_name']; ?></td>
      
        <td>
        
       
        
       <a href="?prog_clists&did=<?php echo $bu['id']; ?>" style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-success btn-sm" >Download <?php echo $bu['prog_name']; ?> Class Lists </button>
</a>

  <a href="?upload_ca&did=<?php echo $bu['id']; ?>" style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-info btn-sm" >Upload Ca Marks </button>
</a>
  <a href="?edit_ca&did=<?php echo $bu['id']; ?>" style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-warning btn-sm" >Edit Ca Mark </button>
</a>

 <a href="?print_uploadedca&did=<?php echo $bu['id']; ?>" style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-primary btn-sm" >Print Uploaded Ca Mark </button>
</a>
      
        </td>
      </tr>
     <?php } ?> 
    </tbody>
  </table>
         
        
		      </div>
    </div>
    </div>
   