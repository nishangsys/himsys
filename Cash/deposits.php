
       <?php
	   $d=$con->query("SELECT * FROM our_accounts WHERE status='' order by name") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>

<a href="?my_deposits&bank=<?php echo $df['name']; ?>&amount=<?php echo $df['amt']; ?>&curacc=<?php echo $df['bal']; ?>&num=<?php echo $df['acc_num']; ?>&id=<?php echo $df['id']; ?>">

<div class="row">
        <div class="col-sm-4">
          <div class="well">
            <h4>Deposits with <?php echo $df['name']; ?></h4>
            
          </div>
        </div>
        </div>
</a>
<?php } ?>
      