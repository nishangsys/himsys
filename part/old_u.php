<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

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


<?php include 'head.php'; ?>

	<div class="contain">
   <div class="subcontain">
     <div class="subcontain">
       <?php include 'bussersidebar.php'; ?>
       <div class="right">
         <div class="calender">
           <script type="text/javascript">
            calendar();
        </script>
         </div>
         
         
       

    <?php
	$roll=$_GET['assigning'];
	 $cust="SELECT * from customers where client_id='$roll' ";
	$run=mysql_query($cust) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		$namse=$row['client_id'];
	$num=1;
	
	
	?>
    <h2 style="background:#333; color:#fff; text-align:center; padding:10px 0px;
    font-size:19px;">You're Assiging a Room to <span style="color:#FF0">
	<?php echo $row['stu_name'] ?></span> </h2>
   
    <?php } ?>
 
 
 <?php
	$today=date('Y');
	//tot num or rooms
	
	
	$cust="SELECT * from rooms where status!=2 order by id  ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;	
	?>

<div class="right">

 <td>
    <a href=javascript:popcontact('givehim.php?roll=<?php echo $namse; ?>') style="color:#1188AA">

<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?roll=<?php echo $namse; ?>">
        <table>
 <?php while($row=mysql_fetch_assoc($run)){
	 $no=$row['num'];
	 $cate=$row['cateogry'];
	echo $ca=$row['COUNT(num)'];
	
		?>
        
        <tr>
        <td><input type="hidden" name="no" value="<?php echo $no; ?>"></td>
        
      
        <td><input type="hidden" name="cat" value="<?php echo $cate; ?>"></td>
       
     
        <td><input type="hidden" name="name" value="<?php echo $namse; ?>"></td></tr>
        
        

    <?php
	
		echo "<div class='rooms2'>
	<h1>".R.".".$row['num']."</h1>";
	echo "
	<P>Category ".$row['cateogry']." </p>
		
		
		</div>";
	
	
	?>
    
    </table>
    <?php
	$id=$_POST['id'];
	$numn=$_POST['no'];
	$catego=$_POST['cat'];
	
	?>
        </form>
    <?php } ?>
   </a>

    </div>
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } } ?>