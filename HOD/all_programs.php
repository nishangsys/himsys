


<div class="alert alert-info">
  <strong>All Programs Under your Control</strong>
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
	
			$d=$conn->query("SELECT * FROM special order by prog_name") or die(mysqli_error($conn));
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
       <a href="?dload_clists&did=<?php echo $bu['id']; ?>" style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-success btn-sm" >Download Class Lists </button>
</a>

	<?php if($bu['school_id']==1){ ?>
  <a href="?upload_ca&did=<?php echo $bu['id']; ?>" style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-info btn-sm" >Upload Ca Marks </button>
</a>
		<?php } else {?>
         <a href="?mgt_upload&did=<?php echo $bu['id']; ?>&sch_id=<?php echo $bu['school_id']; ?>&7" style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-info btn-sm" >Upload Ca Marks </button>
</a>
        <?php } ?>
  <a href="?dload_clists&did=<?php echo $bu['id']; ?>" style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-warning btn-sm" >Edit Ca Mark </button>
</a>

<a href="?uploaded_copy&did=<?php echo $bu['id']; ?>" style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-primary btn-sm" >Print Uploaded Ca Mark </button>
</a>
      
        </td>
      </tr>
     <?php } ?> 
    </tbody>
  </table>
         
        
		      </div>
    </div>
    </div>
   