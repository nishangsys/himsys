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

<div class="right">
<h1 style="background:#333; color:#FF0">Clients who have Stayed above their Given Department Dates</h1>

    <?php
	 $today=date('m/d/Y');
	$a=mysql_query("SELECT * from finances 	") or die(mysql_error());
	while($row=mysql_fetch_assoc($a)){
		$duedate= $row['duedate'];
		
	}
	
	$c=mysql_query("SELECT * from finances where finances.duedate<'$today' and status!=2 and yourid>0
	") or die(mysql_error());
	
	
	$num=1;
	
	
	?>
    <table>
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td>CUSTOMERS'S NAME</td>
    <td>DEPARTURE DATE</td>
    <TD>ARRIVAL DATE</TD>
    <TD>DAYS OWED</TD>
    
    <td>CHECK OUT</td>
    <?php 
	while($row=mysql_fetch_assoc($c)){
		
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#FFF; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo  $row['duedate'];?></td>
    <td><?php echo  $row['date'];?></td>
    <td><?php
    $rusn=mysql_query("SELECT DATEDIFF(CURDATE(),STR_TO_DATE(duedate, '%m/%d/%Y')) AS DAYS
FROM finances where id='".$row['id']."'");

while($rows=mysql_fetch_assoc($rusn)){
	$nn=$newadd=$rows['DAYS'];
	echo $newadd=$nn ."&nbsp;days";
	
	 $update=mysql_query("UPDATE finances set newadd='$nn'
 where id='".$row['id']."'") or die(mysql_error());

?></td>
    <td>
    <a href=javascript:popcontact('payingovt.php?addcheck=<?php echo $row['yourid'] ?>')  style="color:#F00">Check me Out!</a></td>
    
    </tr>
    
    <?php } }?>
    </table>
   
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } } ?>