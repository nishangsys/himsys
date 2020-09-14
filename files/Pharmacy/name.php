<?php
		 if(isset($_GET['name'])){
	   echo $name=$_GET['name'];
	    $date=date('d-m-Y');
		 $mk=$con->query("INSERT INTO customers set stu_name='$name',class='ward',reg_date='$date',gname='ward' ") or die(mysqli_error($con));
		    echo '<meta http-equiv="Refresh" content="0; url=index.php?from_ward">';
		 }
		?>