<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='5'){
		echo "<script>alert('Sorry. Page restriction by the administartor')</script>";
		;
		
			
	}
	else {
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>New Student</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>


  <div class="search_box" style="background:#9CF">
    <form method="post" action="">
    <table>
    <tr>
    <td><input type="text" name="name" style="background:#fff; margin-left:30px; border:1px solid#ccc" placeholder="search a member's name......"/></td>
    <td><button type="submit" name="search" />Search </button></td>
    </tr>
    </table>
    </form>
   
    
      <table >
    <tr style=" font-weight:bold; color:#666;">
   <td>S/N</td>
    <td>Name </td>
    <td>Room Occupied </td>
    <td>Date of Transaction</td>
    <TD>Print Receipt</TD>
   </tr>
      <?php
	 include '../dbc.php';
	if(isset($_POST['search'])){
		 $name=$_POST['name'];
		 
		$se=mysql_query("SELECT * from finances where name like '%".$name."%' and yourid>0 ORDER BY name") or die(mysql_error());
		$i=1;
	}
	?>
	
    <tr >
     <?PHP
	if($i%2==0){
		echo "<tr style='background:#fff;height:30px'>";		
	}
	else {
		echo "<tr style='background:#fff; height:30px'>";
	}
	?>
    <?php
	while($ro=mysql_fetch_assoc($se)){
	?>
    <td>
    <?php echo $i++; ?></td>
     <td><?php echo $ro['name']; ?></td>
    <td>Room <?php echo $ro['room']; ?></td>
   
     <td><?php echo  $ro['date'];?></td>
    <td><a href="print.php?roll=<?php echo $ro['yourid']; ?>" target="_blank"> Print</a></td>
    </tr>
    <?php
	} ?>
    
   
    
    
    </table>
    
     </div>
    
	<div class="clear"></div>		
		 		
</body>
</html>
<?php } } ?>