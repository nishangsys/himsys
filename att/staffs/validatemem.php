<?php
include '../dbc.php';


$cus1="SELECT * from client ";
$run1=mysql_query($cus1) or die (mysql_error());
 while ($rows=mysql_fetch_assoc($run1)){
	 $clients=$rows['name'];
	 $AD=$rows['abs'];
	
 }
 $date=date('y');

if(isset($_GET['id'])){
	 $id=$_GET['id'];
	 $dept=$_GET['dept'];
	 
	 $md=mysql_query("SELECT * FROM all_departments where name='$dept'") or die(mysql_error());
	while($rd=mysql_fetch_assoc($md)){
		 $code=$rd['code'];
		
		
	}
	
	$m=mysql_query("SELECT * FROM staffs where id='$id'") or die(mysql_error());
	while($r=mysql_fetch_assoc($m)){
		$position=$r['age'];
		 $idd=$r['id'];
		
	}
	 //$MMAT="$code/"."$idd/"."$date";
	 $MMAT="HSC"."$date"."$idd";
	
		 $ok=mysql_query("UPDATE STAFFS set done='2',matric='$MMAT' where id='".$id."'") or die(mysql_error());
		 echo "<script>alert('".$name." is now our STAFF. Thank You')</script>";
		 echo '<meta http-equiv="Refresh" content="0; url=staffpage.php?our_staff">';
		 
	 }
?>