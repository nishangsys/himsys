 <link href="../style.css" rel="stylesheet" type="text/css" />
       

<?php 
include('../dbc.php');

 $parent_cat = $_GET['parent_cat'];

$query = mysql_query("SELECT * FROM rooms WHERE cateogry ='$parent_cat' ") or die(mysql_error());
while($row = mysql_fetch_array($query)) {
	echo "<option value='$row[id]'>Room $row[num] Block $row[floor]</option>";
}
?>
 <div class="rooms"></div>