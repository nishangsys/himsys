<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";
$sql = "SELECT * from students where fname LIKE '%".$_GET['query']."%' LIMIT 20";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$json = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$json[] = $rows["fname"];
}
echo json_encode($json);
?>