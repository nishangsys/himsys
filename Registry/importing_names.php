<?php  $prog=$_POST['dept'];
		$ayear=$_POST['ayear'];
		$level=$_POST['level'];
		
		          $d=$conn->query("SELECT * FROM special where id='".$prog."'  ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
						$dept_name=$bu['prog_name'];
					}
					 $d=$conn->query("SELECT * FROM levels where id='".$level."'  ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
						$level_name=$bu['levels'];
					}
					 $d=$conn->query("SELECT * FROM years where id='".$ayear."'  ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
						$year_name=$bu['year_name'];
					}

?>

 <div class="row">
 <h3 style="font-family:'Arial Black', Gadget, sans-serif">Importing <?php echo $dept_name; ?>  Level <?php echo $level_name; ?> Names
 for <?php echo $year_name; ?></h3>
 
        <div class="col-sm-12">
 <iframe src="Names/index.php?dept=<?php echo  $prog ; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $level; ?> " allowFullScreen style="width: 97%;
			float:left;
			background: #FFF;
            border:none;
            height:2000px;
            overflow:hidden;
			border-radius: 5px;
		
 "></iframe>
          </div>
          </div>