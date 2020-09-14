 <link href="../style.css" rel="stylesheet" type="text/css" />
       

<?php 
include('../dbc.php');

 $parent_cat = $_GET['parent_cat'];

$query = mysql_query("SELECT * FROM all_categories WHERE name ='$parent_cat' ") or die(mysql_error());
while($row = mysql_fetch_array($query)) {
	echo "<option value='$row[amt]'>$row[amt] </option>";
}
?>
 <div class="rooms"></div>