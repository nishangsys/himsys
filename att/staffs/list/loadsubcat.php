 <link href="../style.css" rel="stylesheet" type="text/css" />
       

<?php 
include('config.php');

 $parent_cat = $_GET['parent_cat'];

$query = mysql_query("SELECT * FROM rooms WHERE cateogry ='$parent_cat'") or die(mysql_error());
while($row = mysql_fetch_array($query)) {
	echo "<option value='$row[id]'>Room $row[num]</option>";
}
?>
 <div class="rooms"></div>