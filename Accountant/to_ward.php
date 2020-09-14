<div class="row">
<?php
/////////////for updates
  $doU=$con->query("SELECT * FROM all_admitted,daily where all_admitted.status='0' and all_admitted.yourid=daily.cust_id GROUP BY daily.cust_id") or die(mysqli_error($con));
  while($nam=$doU->fetch_assoc()){
?>

        
        <a href="?add&branch=<?php echo $branch; ?>">
        <div class="col-sm-4">
          <div class="well" style="  color:#fff; background-color: #404040" ><span style="font-size:18px; text-align:center; font-weight:bold; text-align:center">
<?php echo $nam['name']; ?> of <?php echo $nam['ward']; ?>  Bed <?php echo $nam['bednum']; ?></span><br />
<span style="color:#ff0"  ></span>         
            </p>           
          </div>
        </div>
        </a>

        <?php } ?>