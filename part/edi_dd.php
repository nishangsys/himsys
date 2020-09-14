<?php
	if(isset($_GET['edit_dd'])){
		$m=$_GET['edit_dd'];
		$r=mysql_query("DELETE FROM payslips where id='$m'  ") or die(mysql_error());
		echo "<script>alert('Action Successfull')</script>";
			echo '<meta http-equiv="Refresh" content="0; url= ?edit_slip">';
	}
?>