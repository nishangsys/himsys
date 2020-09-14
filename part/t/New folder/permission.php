<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='8'){
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
        		<META HTTP-EQUIV="REFRESH" CONTENT="15">

		
        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>

<div class="right">

    <?php
	$today=date('Y');
	$cust="SELECT * from staffs where done='2' and cate='0' order by id  ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
    <table>
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td>STAFF'S NAME</td>
    <td>POSITION</td>
    <TD>TEL</TD>
    <td>MATRICULE</td>
   
    <td>PHOTO</td>
     <td>CHANGE PIC</td>
    <?php while($row=mysql_fetch_assoc($run)){
		$cat=$row['stu_name'];
		$id=$row['stu_id'];
		
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
    <td><?php echo  $row['age'];?></td>
    <td><?php echo  $row['tel'];?></td>
    
    <td><?php echo  $row['matric'];?></td>
 

    <td><img src="album/<?php echo  $row['photo'];?>" style="width:50px; height:50px"></td>
      
   <td>    <a href="staffpage.php?grant_permission=<?php echo $row['id'] ?>"  style="color:#F00">GIVE PERMISSION!</a></td>
</td>
    </tr>
    
    <?php } ?>
    </table>
   
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } } ?>