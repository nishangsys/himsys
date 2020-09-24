
<?php
	 $id=$_POST['date'];
	$aa=$conn->query("SELECT * FROM semesters,date_weeks where date_weeks.id='$id' and semesters.s_num=date_weeks.sem ") or die(mysqli_error($conn));
	$i=1;
		while($bb=$aa->fetch_assoc()){
		}
		
?>
<div class="alert alert-info">
  <strong>Info!</strong> Indicates a neutral informative change or action.
</div>