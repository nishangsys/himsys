<?php

//require_once '../functions/functions.php';
session_start();


if(!isset($_SESSION['user_name'])){

header ("location: ../login.php");

}

else {
	
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipts</title>
<link href="../style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="right">

<h1>All Deletes so far</h1>   
    <?php
	 
	  
		 $sql="select * from records WHERE month!=1 order by roll DESC ";
		$rres=mysql_query($sql) or die(mysql_error());
		 $num=1;
		 $who=$_SESSION['username'];
		 
	
	?>
   
  
    
    	<table style="width:100%; margin:auto;">
      <tr style="background:#999; padding:10px 0px">
        <td style="color:#fff">S/N</td>
        <TD style="color:#fff"> Item Deleted by </TD>
        <td style="color:#fff">Item</td>
        <td style="color:#fff">Quantity deleted</td>
    
        <td style="color:#fff">Deleted on </td>
        
        <td style="color:#fff">Reason </td>
          <td style="color:#fff">Empty recycle bin </td>
     
         
       
        </tr>
        <?php
			while($row=mysql_fetch_assoc($rres)){
		?>
        <tr>
        
        <?php
		
		if($num%2==0)
 {
     echo '<tr bgcolor="#eee">';
 }
 else
 {
    // echo '<tr bgcolor="#FFF">';
 }
		
		?>
        <td><?php echo $num++; ?></td>
        <TD><?php echo $row['income'];; ?></TD>
        <TD><?php echo $row['expense']; ?></TD>
        <TD><?php echo $row['year']; ?></TD>             
         <TD><?php echo $row['date']; ?></TD>
         <TD><?php echo $row['reason']; ?></TD>
         <td><a href="../admin/empty.php?roll=<?php echo $row['id']; ?>" class="error">Empty it</a></td>
        
        
        
        <?php } ?>
        
        </table>
       
  
</body>
</html>
<?php }   ?>


