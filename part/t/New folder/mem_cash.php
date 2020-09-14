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

    <?php
	$today=date('Y');
	$cust="SELECT * from member where done='2' and matric=''  ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
    <table>
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td> NAME</td>
    <td>CONTACT</td>
    <TD>NATIONALITY</TD>
    <td> IAMGE</td>
    
        <TD>Receive Contribution</TD>

    <?php while($row=mysql_fetch_assoc($run)){
		$id=$row['id'];
		$name=$row['name'];
		
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
    <td><?php echo  $row['tel'];?></td>
    <td><?php echo  $row['nation'];?></td>
        <td><img src="album/<?php echo  $row['photo'];?>" style="width:50px; height:50px"></td>

     
    <td>
     <A href="frontpage.php?yourcontri=<?php echo $row['id']; ?>">Receive Contribution</td>
    
    </tr>
    <?php } ?>

    </table>
    
    <?php
	 if(isset($_GET['id'])){
		 $ok=mysql_query("UPDATE member set done='2' where id='".$id."'") or die(mysql_error());
		 echo "<script>alert('".$name." is now our member. Thank You')</script>";
		 echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?next_pages">';
		 
	 }
	?>
   
       
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } } ?>