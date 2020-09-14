<?php
if($_POST['catID'] != '') 
{
$cid =trim($_POST['catID']);
//databse settings
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'test');

$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
mysql_query ("set character_set_results='utf8'");

//get all posts from that category
$query = mysql_query("select * from `post` WHERE `cid` IN (select cid from category WHERE `cid`=$cid OR `parent` = $cid) LIMIT 4");
$total_posts = mysql_num_rows($query);
if($total_posts > 0)
{
 while($rows = mysql_fetch_array($query))
 {
   ?>
   <div class="inside"> <a href="<?php echo $rows['link'];?>" target="_blank"> <img src="<?php echo $rows['image'];?>" ></a>
  <p><?php echo $rows['title']; ?></p>
</div>
   <?php
 }
} else {
echo '<div class="noCont">This category currently has no posts.</div>';
}

mysql_close($connection);
}
?>