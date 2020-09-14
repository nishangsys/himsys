<?php
/* Database connection start */
/* Database connection start */
$servername = "localhost";
$username = "nishang";
$password = "google1234";
$dbname = "hims_finance";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>