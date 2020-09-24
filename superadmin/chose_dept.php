
<?php

$x=$conn->query("SELECT * FROM special") or die(mysqli_error($conn));
while($rows=$x->fetch_assoc()){
?>
<a href="?creating_hod&dip=<?php echo $rows['id']; ?>">
<div class="col-sm-5">
      <div class="well">
       <p><?php echo $rows['prog_name']; ?></p>
      </div>
     
    </div>
    </a>
    <?php } ?>