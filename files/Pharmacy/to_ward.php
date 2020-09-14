<div class="row">
<?php
/////////////for updates
  $doU=$con->query("SELECT * FROM all_admitted,daily where all_admitted.status='0' and all_admitted.yourid=daily.cust_id GROUP BY daily.cust_id") or die(mysqli_error($con));
  while($nam=$doU->fetch_assoc()){
?>

        
        <a href="?name=<?php echo $nam['name']; ?>&branch=<?php echo $branch; ?>">
        <div class="col-sm-4">
          <div class="well" style="  color:#fff; background-color: #404040" ><span style="font-size:18px; text-align:center; font-weight:bold; text-align:center">
<?php echo $nam['name']; ?> of <?php echo $nam['ward']; ?>  Bed <?php echo $nam['bednum']; ?></span><br />
<span style="color:#ff0"  ></span>         
            </p>           
          </div>
        </div>
        </a>

        <?php } ?>
		<?php
		 if(isset($_GET['name'])){
	   echo $name=$_GET['name'];
	    $date=date('d-m-Y');
		 $mk=$con->query("INSERT INTO customers set stu_name='$name',class='ward',reg_date='$date',gname='ward' ") or die(mysqli_error($con));
		    echo '<meta http-equiv="Refresh" content="0; url=index.php?to_ward">';
		 }
		?>