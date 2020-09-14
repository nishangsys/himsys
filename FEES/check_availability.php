<?php
require_once("dbcontroller.php");
$db_handle = new DBController();


if(!empty($_POST["username"])) {
  $result = mysql_query("SELECT count(*) FROM debtors WHERE student_name='" . $_POST["username"] . "'");
  $row = mysql_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='status-not-available'> This Student is a debtor.</span>";
  }else{
      echo "<span class='status-available'> This Student is not a debtor.</span>";
  }
}
?>