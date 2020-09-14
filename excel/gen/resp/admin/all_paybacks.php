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
<title>Pay Backs</title>
<link href="../style.css" type="text/css" rel="stylesheet" />
				        		<META HTTP-EQUIV="REFRESH" CONTENT="15">

</head>

<body>
<div class="right">

<h1>All Deletes so far</h1>   
    <?php
	 
	  
		 $sql="select * from reports where reason='payback' order by id DESC ";
		$rres=mysql_query($sql) or die(mysql_error());
		 $num=1;
		 $who=$_SESSION['username'];
		 
	
	?>
   
  
    
    	<table style="width:100%; margin:auto;">
      <tr style="background:#999; padding:10px 0px">
        <td style="color:#fff">S/N</td>
        <TD style="color:#fff"> Payments made by </TD>
        <td style="color:#fff">Made to</td>
        <td style="color:#fff">Made on</td>
    
        <td style="color:#fff">Checked In </td>
        
        <td style="color:#fff">Checkout Out</td>
     <td style="color:#fff">Amt Paidout</td>
         
       
        </tr>
        <?php
			while($row=mysql_fetch_assoc($rres)){
		?>
        <tr>
        
    
        <td><?php echo $num++; ?></td>
        <TD><?php echo $row['paidby'];; ?></TD>
        <TD><?php echo $row['name']; ?></TD>
        <TD><?php echo $row['date']; ?></TD>             
         <TD><?php echo $row['checkin']; ?></TD>
         <TD><?php echo $row['cout']; ?></TD>
                  <TD><?php echo $row['howmuch']; ?></TD>

        
        
        
        <?php } ?>
        
        </table>
       
  
</body>
</html>
<?php }   ?>


