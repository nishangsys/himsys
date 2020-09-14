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
                  	<META HTTP-EQUIV="REFRESH" CONTENT="5">

     <div style="width:100%; height:600pc; float:left; border:1px dashed#000;background:#fff">
   
<?php
	//////////////////update basket	 	
	$un1=$con->query("SELECT * FROM	basket WHERE status='1' GROUP BY tab order by id ") or die(mysqli_error($con));
	$a=1;
	while($af=$un1->fetch_assoc()){
?>
<div style="width:400px; overflow:hidden; padding-bottom:20px; float:left; margin:10px 10px">
<h1 style="background:#000; color:#fff; font-weight:bold">

Table <?php echo $t=$af['tab']; ?>       <a href="?command=<?php echo $t=$af['tab']; ?> &area=<?php echo $_GET['area'] ?>" onclick="return confirm('<?php echo $_SESSION['user_name']; ?> Are you Sure ')">  </a></h1>
<?php
	$a=$con->query("SELECT product,category,SUM(qty) FROM	basket WHERE status='1' and tab='$t' and qty>0 GROUP BY product,category ") or die(mysqli_error($con));
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
	$un1=$con->query("UPDATE 	basket set status='3' where tab='$add' and status='3' ") or die(mysqli_error($con));
	echo '<meta http-equiv="Refresh" content="0; url=../gen/queue.php?area='.$_GET['area'].'">';
	 }   ?>
	 
     
       
         <!----------------------->
   
   <script>
	function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','commands.php?area=<?php echo $section; ?>&tabs=<?php echo $table=$_GET['tabs']; ?>&db_basket=<?php echo $db_basket; ?>&db_table=<?php echo $_GET['dbtables']=$db_table; ?>&add=<?php echo $_GET['add']; ?>&reduce=<?php echo $_GET['reduce']; ?>&good=<?php echo $serial; ?>',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);

</script>
 
    