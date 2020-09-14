
<div class="right">
<h1 style="background:#4254BE; color:#fff"> Click Choose a Department below</h1> 
    
    
     <?PHP
  $r=mysql_query("SELECT * FROM all_departments order by name") or die(mysql_error());
  while($row=mysql_fetch_assoc($r)){
  ?>

  <Div style="background:#1188AA; border:1PX solid#000; padding:10px 10px; width:370px; margin:20PX 20PX; float:left; color:#666; border:1px solid#000"> 
 
 
 <a href="<?PHP echo $_SERVER['_SELF']; ?>?employ=<?php echo $row['name']; ?>" style="color:#fff; font-size:18px; text-decoration:none">  Employ in <span style="color:#ff0"><?php echo $row['name']; ?> Dept</span></a>
 
 </Div>
 
 <?php } ?>

   
    </div>
	
    
   
			
