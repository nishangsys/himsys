<?php
require_once("../includes/dbc.php");
//$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM historic WHERE student_name like '" . $_POST["keyword"] . "%' or  matricule like '" . $_POST["keyword"] . "%' and   year_id='".$_GET['ayear']."'   ORDER BY student_name LIMIT 0,10";
$result = $dbcon->query($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $country) {
?>
<li onClick="selectCountry('<?php echo $country["matricule"]; ?>');"><?php echo $country["student_name"]; ?> (<?php echo $country["matricule"]; ?>)<br /><?php echo $country["amountpaid"]; ?>)</li>
<?php } ?>
</ul>
<?php } } ?>