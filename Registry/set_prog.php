
      <?php
	  $year=date('Y');
	  
	   $d=$dbcon->query("SELECT * from sectors ") or die(mysqli_error($dbcon));
while($bu=$d->fetch_assoc()){ ?>
<a href="?set_as=<?php echo $bu['id'];  ?>">
<div class="col-sm-12 well" style="margin:10px; font-size:24px; ">
     
      Set  <?php echo $bu['name'];  ?> Grading Scale
      
      </div>
    </a>
        <?php } ?>
     