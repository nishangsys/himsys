             <?php
			 include '../form/dbc.php';
		if(isset($_GET['id'])){
			ECHO $id=$_GET['id'];
			$d=$con->query("DELETE FROM upload where id='$id' limit 1");
			echo "<script>alert('File successfully deleted')</script>";
		}
		
		?>