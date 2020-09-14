
  <?php
 $id;
   $dm=$con->query("SELECT * FROM users where id='$id'  ") or die(mysqli_error($con));
while($bum=$dm->fetch_assoc()){
	 $deptss=$bum['address'];
}
$year_id;
?>

 <div class="row">
 
        <div class="col-sm-12">
 <iframe src="../SuperAdmin/statistics.php?year_id=<?php echo $year_id; ?>" allowFullScreen style="width: 100%;
			float:left;
			background: #FFF;
            border:none;
            height:1200px;
            overflow:hidden;
			border-radius: 5px;
		
 "></iframe>
          </div>
          </div>