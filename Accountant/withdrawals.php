
       <?php
	   $d=$con->query("SELECT * FROM our_accounts where amt>0 order by name") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>

<a href="?my_withdrawal&bank=<?php echo $df['name']; ?>&amount=<?php echo $df['amt']; ?>&curacc=<?php echo $df['bal']; ?>&num=<?php echo $df['acc_num']; ?>&id=<?php echo $df['id']; ?>">

<div class="row">
        <div class="col-sm-4">
          <div class="well">
            <h4>Withdraw From <?php echo $df['name']; ?></h4>
            
          </div>
        </div>
</a>
<?php } ?>
        
       