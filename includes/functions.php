<?php

////////////////add students to form B
function company_giveoutroom(){
	 $d=$con->query("SELECT COUNT(subject) as all FROM subject where subject.department='$dept' and subject.year1='$level' and subject.year2='$semester'  GROUP BY subject.ayear   ") or die(mysqli_error($con));
while($df=$d->fetch_assoc()){
	$df['all'];
	
}


}

?>