 <?php
 include '../dbc.php';
		if(isset($_GET['id'])){
			$roll=$_GET['id'];
			$update="UPDATE records set month='1' where roll='$roll' LIMIT 1";
			$RUN=mysql_query($update) or die(mysql_error());
			
			echo "<script>alert('$item has been Successfully emptied from the Recycle Bin. Thank You')</script>";
				echo "<h1>'Item has been Successfully emptied from the Recycle Bin. Thank You'</h1>";
				echo '<meta http-equiv="Refresh" content="0; url=adminpage.php?all_deletes">';
			
		}
		?>
      