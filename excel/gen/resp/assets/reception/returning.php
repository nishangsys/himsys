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
       <?php
	 //include '../dbc.php';
	if(isset($_POST['search'])){
		 $name=$_POST['name'];
		 
		$se=mysql_query("SELECT * from customers where stu_name like '%".$name."%' GROUP BY stu_name  order by stu_name ") or die(mysql_error());
		$i=1;
	}
	?>
	
    <tr style=" font-weight:bold; color:#666;">
   <td>S/N</td>
     <td>CUSTOMERS'S NAME</td>
    <td>DATE REGISTERED</td>
    <TD>SEX</TD>
    <td>ASSIGN ROOM</td>
   </tr>
      <?php while($row=mysql_fetch_assoc($se)){
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
    <td><?php echo $row['stu_name']; ?></td>
    <td><?php echo  $row['reg_date'];?></td>
    <td><?php echo  $row['category'];?></td>
    <td>
    <a href="frontpage.php?old=<?php echo $row['client_id'] ?>"  style="color:#f00">RE-Register me</a></td>
    
    </tr>
    
    <?php } ?>
    
    
    </table>
    
    </div>
    

    <?php
	$today=date('Y');
	$cust="SELECT * from customers GROUP BY stu_name  order by stu_name  ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
    <table>
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td>CUSTOMERS'S NAME</td>
    <td>DATE REGISTERED</td>
    <TD>SEX</TD>
    <td>ASSIGN ROOM</td>
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
    <td><?php echo $row['stu_name']; ?></td>
    <td><?php echo  $row['reg_date'];?></td>
    <td><?php echo  $row['category'];?></td>
    <td>
    <a href="frontpage.php?old=<?php echo $row['client_id'] ?>"  style="color:#f00">RE-Register me</a></td>
    
    </tr>
    
    <?php } ?>
    </table>
   
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } } ?>