<?php

require_once '../functions/functions.php';
@session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>NISAHNG</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
      
</head>




<body>

<div class="right">
<h1>SUSPEND A MEMBER</span>)</h1>

    <?php
	$today=date('Y');
	$cust="SELECT * from member,members_times where member.matric=members_times.matricule AND members_times.level!='2'  order by members_times.name ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
     
    <table style="width:100%">
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td>Names</td>
        
    <TD>Package</TD>
    <td>Amount Owed</td>
    <td>Suspend</td>

    <?php while($row=mysql_fetch_assoc($run)){
		
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
    <td><?php echo $row['name']; ?>
   
     </td>
   
    <td><?php
		$ok=mysql_query("SELECT * from main_cats where id='".$row['cate']."'  ") ;
	while ($m=mysql_fetch_assoc($ok)){
	
		 echo  $m['disc'];
	}?></td>
   
<td style="color:#f00"><?php echo $row['owed']; ?>

<td>
      <a href="ban_memeber.php?roll=<?php echo $row['matricule']; ?>" style="color:#F00">Suspend Member</a>

</td>


     </td>
   
   
    
    </tr>
    
    <?php } ?>
    </table>
   
   
   
    </div>
    
    
   
    </div>
	
    
   </tr>
	<div class="clear"></div>		
		 		
</body>
</html>
<?php }  ?>