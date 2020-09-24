<?php
/**
 * Created by PhpStorm.
 * User: Aravinth
 * Date: 10-09-2017
 * Time: 12:34 PM
 */

$hostname = 'localhost';
$username = 'nishang';
$password = 'google1234';
$dbname = '2019_university';

$con = mysqli_connect($hostname,$username,$password);
mysqli_select_db($con,$dbname);
?>
