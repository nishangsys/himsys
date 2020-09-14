<?php

$con = mysqli_connect('localhost','nishang','google1234','hotels');

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
		
	define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "nishang"); // set database user
define ("DB_PASS","google1234"); // set database password
define ("DB_NAME","hotels"); // set database name

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");
$dashbd=$_GET['area'];
 
if($dashbd==15){

	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	$page='restaupage.php';
	
}

if($dashbd=='Bartender'){

	$a_area='9';
	$page='../sales/restaupage.php';
	$db_table='our_tables';
$serial='Waitress';
	$db_basket='basket';
	$page='../sales/restaupage.php';
	
}
if($dashbd=='Restau'){
		 $dashbd;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
	$serial='Restau';
	$db_basket='restau_basket';
	$page='restaupage.php';
	
}

if($dashbd=='Bauca'){
		 $dashbd;

	$a_area='2';
	$page='../bauca/baucapage.php';
	$db_table='bauca_tables';
	$serial='Bauca';
	$db_basket='bauca_basket';
	$page='baucapage.php';
	
}

if($dashbd=='VIP'){
		 $dashbd;

	$a_area='18';
	$page='../bauca/clubpage.php';
	$db_table='other_tables';
	$serial='VIP';
	$db_basket='other_basket';
	$page='clubpage.php';
	
}

?>

<style>
table {
	  border-collapse:collapse;
	  font-weight:bold;
	  color:#000;
	  line-height:1.8;
  }
  table,td,tr{
	  border:1px solid black;
	  
  }
</style>
 <link href="../style.css" rel="stylesheet" type="text/css" />
          <link href="styless.css" rel="stylesheet" type="text/css" />
     <div style="width:100%; height:600pc; float:left; border:1px dashed#000;background:#fff">
       
      
        <?php
		
		
?>



<?php
	//////////////////update basket	 	
	$un1=$con->query("SELECT * FROM	$db_basket WHERE status='4' GROUP BY tab order by id ") or die(mysqli_error($con));
	$a=1;
	while($af=$un1->fetch_assoc()){
?>
<div style="width:400px; overflow:hidden; padding-bottom:20px; float:left; margin:10px 10px">
<h1 style="background:#000; color:#fff; font-weight:bold">

Table <?php echo $t=$af['tab']; ?>       <a href="?command=<?php echo $t=$af['tab']; ?> " onclick="return confirm('<?php echo $_SESSION['user_name']; ?> Are you Sure ')">  <span style="background:#090; color:#fff; margin-left:30px; padding:10px 10px">OK command</span></a></h1>
<?php
	$a=$con->query("SELECT product,category,SUM(qty) FROM	$db_basket WHERE status='4' and tab='$t' GROUP BY product,category ") or die(mysqli_error($con));
	$i=1;
	
?>
<table style="width:100%">
<tr style="background:#060; color:#fff"><td>S/N</td><td>Product</td><td>Status</td><td>Qty</td></tr>
<?php while($ab=$a->fetch_assoc()){ ?>
<tr>
 <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="Aquamarine">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
<td><?php echo $i++; ?></td>
<td><?php echo $ab['product']; ?></td>
<td><?php echo $ab['category']; ?></td>
<td><?php echo $ab['SUM(qty)']; ?></td>
</tr>
<?php } ?>

</table>
<?php ?>
</div>
<?php } ?>
<?php  echo $db_table; ?>

<?php  
	 if(isset($_GET['command'])){
		 $add=$_GET['command'];
	
	//////////////////update basket	 	
	$un1=$con->query("UPDATE 	$db_basket set status='3' where tab='$add' and status='4' ") or die(mysqli_error($con));
	echo '<meta http-equiv="Refresh" content="0; url=../'.$serial.'/restaupage.php">';
	 }   ?>