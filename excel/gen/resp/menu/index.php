<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dynamic Drop Down Menu using PHP, MYSQL & jQuery - w3lessons.info - </title>
<link href="menu.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>


<div class="Dmenu">
<?php
//databse settings
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'njei');

$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
mysql_query ("set character_set_results='utf8'");
$query = mysql_query("select * from category where parent = 0");
while($row = mysql_fetch_array($query)) {
$cid = $row['cid']; 
?>

    <div class="mainCat"><a href="#" class="flink" data-catID="<?php echo $cid; ?>"><?php echo $row['name'];?></a>
    <div class="allContent">
      <div class="snav" >
        
        <div class="menuItems"></div>
        <br class="clearfix">
      </div>
    </div>
  </div>
<?php } ?>
    



</body>
</html>
