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
<h1>Membesr Package Change Zone(<span style="color:#f00">Only for those who are not owing</span>)</h1>

    <?php
	$today=date('Y');
	$cust="SELECT * from member,members_times where member.matric=members_times.matricule and members_times.owed<='0' order by members_times.name ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
     
    <table style="width:100%">
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td>Names</td>
        
    <TD>Package</TD>
    <td>Days Left</td> 
    <td>Amount Owed</td>
    <td>Change Pack</td>
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
    <td><?php
		
		$today=date('d-m-Y'); 	
	 $date1 = date_create($row['duedate']);
        //echo "Start date: ".$date1->format("d-m-Y")."<br>";
        $date2 = date_create($today);
		
        //echo "End date: ".$date2->format("d-m-Y")."<br>";
		if($date2>$date1){
			echo "<span class='error'>Deadline has Expired</span>";
		}
		
		elseif ($date2==$date1){
						echo "<span class='error'>Only today is left</span>";

		}
		
		else{
			
        $diff = date_diff($date1,$date2);
	
        echo $diff->format(" %m months and %d days")."&nbsp;"."Left"."<br>";
		
		}
		
		
		 ?>
</td>
<td style="color:#f00"><?php echo $row['owed']; ?>

<td>
      <a href="frontpage.php?changed=<?php echo $row['matricule']; ?>">Change Package</a>

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