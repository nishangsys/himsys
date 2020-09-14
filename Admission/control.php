
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
 <iframe src="../SuperAdmin/controler.php " allowFullScreen style="width: 100%;
			float:left;
			background: #FFF;
            border:none;
            height:2200px;
            overflow:scroll;
			border-radius: 5px;
		
 "></iframe>
          </div>
          </div>