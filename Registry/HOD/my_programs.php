


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
	
			$d=$conn->query("SELECT * FROM hods,departments where hods.user_id='".$_SESSION['id']."' and 							hods.dept_id=departments.id ") or die(mysqli_error($conn));
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
       <td><?php echo $bu['name']; ?></td>
        <td>
           
 <a href="../HOS/print_allpogs.php?did=<?php echo $bu['id']; ?>&sem=1" style="color:#fff; text-decoration:blink text-align:center; 
 font-weight:bold;" target="_new"><button type="button" class="btn btn-primary btn-sm" >All <?php echo $bu['name']; ?> First Semester </button>
</a>

<a href="../HOS/print_allpogs.php?did=<?php echo $bu['id']; ?>&sem=2" style="color:#fff; text-decoration:blink text-align:center; 
 font-weight:bold;" target="_new"><button type="button" class="btn btn-danger btn-sm" >All <?php echo $bu['name']; ?> Second Semester</button>
</a>



      
        </td>
      </tr>
     <?php } ?> 
    </tbody>
  </table>
         
        
		      </div>
    </div>
    </div>
   