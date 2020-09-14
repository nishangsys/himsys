<?php
include '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';;
}

else {
			 $today=date('d-m-Y');
$cvv=mysql_query("SELECT * from to_boss where date='$today'  and dept='reception'  ") or die(mysql_error());
if(mysql_num_rows($cvv)>0){
		echo "<div style='background:#f00; color:#fff; width:400px; text-align:center; padding:10px 10px; margin:auto; margin-top:120px'>Sorry Today has been closed. Carry foward Tommorow</div>";
	}
	else {
		

?>
    


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SPLITTED TABLE</title>

        <link href="style.css" rel="stylesheet" type="text/css" />
         <META HTTP-EQUIV="REFRESH" CONTENT="15">
		<!--//webfonts-->
</head>
<script type="text/javascript">
function doCalc(form) {
  
}
</script>
<script language="JavaScript" src="../js/pop-up.js"></script>
<style>
.box1{
	width:90%;
	height:auto;
	overflow:hidden;
	border:1px dashed#000;
	margin:auto;
}
</style>


<body>

    <?php
 $area=$_GET['area'];
 $table=$_GET['table'];
 $db_table=$_GET['db_table'];
 $bkt=$_GET['bkt'];

	?>
    

    
    
    
    
    <h1 class="he">SPLIT THIS TABLE INTO TWO</h1>
   
     <?php   	   
 $ress=mysql_query("SELECT product,category,SUM(qty),price,SUM(total),id,section from ".$bkt." where area='".$area."' and tab='$table' and status='1' and split!='".$table."b'   group by id order by id DESC   ");
$num=1;

	   ?>
       
       <div class="box1">
       
       <table style="line-height:1.9; width:40%; float:left; margin:auto">
       <H1 style="width:40%; float:; background:#060; color:#fff">Table A <?php echo $table ?>  | <span style="background:#FF6; color:#000; padding:10PX 10PX">  <a href=javascript:popcontact('srec.php?roll=<?php echo $table; ?>&area=<?php echo $area; ?>&baskk=<?php echo $bkt; ?>&tabss=a') style="color:#000; text-decoration:blink">Cash Receipt.</a></span> | 
    <span style="background:#CCC; color:#000; padding:10PX 10PX">  <a href=javascript:popcontact('sval.php?roll=<?php echo $table; ?>&area=<?php echo $area; ?>&baskk=<?php echo $bkt; ?>&tabss=a')  style="color:#000; text-decoration:blink">Validate</a></span>    
       </H1>
       
				<tr style="background:#1188aa; color:#fff; padding:10px 10px"><td>S/N</td><td>Item</td><td>Price</td><td>Qty</td><td>TC</td><td>Sent to Left</td></tr>
				
        <?php   while ($getres=mysql_fetch_assoc($ress)){ ?>
        <tr>
        	<td style="width:20px"><?php echo $num++; ?></td>
            <td><?php echo $getres['product']; ?></td>
                  
            <td><?php echo $getres['price']; ?> </td>
             <td><?php echo $getres['SUM(qty)']; ?> </td>              
            <td><?php echo $getres['SUM(total)']; ?> </td>
            
              
          <td><a href="?hist_id=<?php echo $getres['id']; ?>&area=<?php echo $area; ?>&table=<?php echo $table; ?>&basket=<?php echo $bkt; ?>&d_tab=<?php echo $_GET['db_table'] ?> "  >
       Sent to Right >>></a></td>|
        
             
        
        
             
        </tr>
        <?php } ?>
        </tr>
        
         <tr>
        	<td style="width:20px"></td>
            <td>TOTAL</td>
                  
            <td> </td>
             <td> </td>              
            <td></td>
            
            
          <td style="background:#f00; color:#fff">
         <?PHP $mk=mysql_query("SELECT  SUM(total) as totals from ".$_GET['bkt']."  where area='".$area."' and tab='$table' and status='1' and split!='".$table."b'   group by tab    ");
	while($bav=mysql_fetch_assoc($mk)){
		echo $prodh=$bav['totals'];
		
	}
	?></td></tr>|
  
    
    
        </table>
        
        
        <?php
		if(isset($_GET['hist_id'])){
			 $id=$_GET['hist_id'];
			 $tabl=$_GET['table'];
			 $bsk=$_GET['basket'];
			 $d_tab=$_GET['d_tab'];
	 $df=$con->query("UPDATE ".$bsk." SET split='".$tabl."b' where id='$id'");
	  echo '<meta http-equiv="Refresh" content="0; url=sliptab.php?area='.$area.'&table='.$tabl.'&db_table='.$d_tab.'&bkt='.$bsk.'">';
	  echo '<meta http-equiv="Refresh" content="0; url=sliptab.php?area='.$area.'&table='.$tabl.'&db_table='.$d_tab.'&bkt='.$bsk.'">';
	 
		}
		
		if(isset($_GET['go'])){
			 $id=$_GET['go'];
			 $tabl=$_GET['table'];
			 $bsk=$_GET['basket'];
			 $d_tab=$_GET['d_tab'];
	 $df=$con->query("UPDATE ".$bsk." SET split='".$tabl."a' where id='$id'");
	  echo '<meta http-equiv="Refresh" content="0; url=sliptab.php?area='.$area.'&table='.$tabl.'&db_table='.$d_tab.'&bkt='.$bsk.'">';
	  echo '<meta http-equiv="Refresh" content="0; url=sliptab.php?area='.$area.'&table='.$tabl.'&db_table='.$d_tab.'&bkt='.$bsk.'">';
	 
		}
		
		
		?>
        
        
        
    <?php   	   
 $r=$con->query("SELECT product,category,SUM(qty),price,SUM(total),id,section from ".$bkt." where area='".$area."' and tab='$table' and status='1' and split='".$table."b'   group by id order by id DESC   ");
$num=1;

	   ?>     
        
     <table style="line-height:1.9; width:40%; float:left; margin:auto; margin-left:30px">
     
      <H1 style="width:40%; float:left; margin:auto; margin-left:30px; background:#090; color:#fff">Table  <?php echo $table ?> B | <span style="background:#FF6; color:#000; padding:10PX 10PX">  <a href=javascript:popcontact('srec2.php?roll=<?php echo $table; ?>&area=<?php echo $area; ?>&baskk=<?php echo $bkt; ?>&tabss=b') style="color:#000; text-decoration:blink">Cash Receipt.</a></span> | 
   <span style="background:#CCC; color:#000; padding:10PX 10PX">  <a href=javascript:popcontact('sval2.php?roll=<?php echo $table; ?>&area=<?php echo $area; ?>&baskk=<?php echo $bkt; ?>&tabss=b')  style="color:#000; text-decoration:blink">Validate</a></span>
       </H1>
				<tr style="background:#1188aa; color:#fff; padding:10px 10px"><td>S/N</td><td>Item</td><td>Price</td><td>Qty</td><td>TC</td><td>Sent to Left</td></tr>
				
        <?php   while ($getres=$r->fetch_assoc()){ ?>
        <tr>
        	<td style="width:20px"><?php echo $num++; ?></td>
            <td><?php echo $getres['product']; ?></td>
                  
            <td><?php echo $getres['price']; ?> </td>
             <td><?php echo $getres['SUM(qty)']; ?> </td>              
            <td><?php echo $getres['SUM(total)']; ?> </td>
            
            
         <td><a href="?go=<?php echo $getres['id']; ?>&area=<?php echo $area; ?>&table=<?php echo $table; ?>&basket=<?php echo $bkt; ?>&d_tab=<?php echo $_GET['db_table'] ?> "  >
      <<< Sent to Left </td>|
        
             
        
        
             
        </tr>
        <?php } ?>
        </tr>
        
         <tr>
        	<td style="width:20px"></td>
            <td>TOTAL</td>
                  
            <td> </td>
             <td> </td>              
            <td></td>
            
            
          <td style="background:#f00; color:#fff">
          <?PHP $mk=mysql_query("SELECT  SUM(total) as totals from ".$_GET['bkt']."  where area='".$area."' and tab='$table' and status='1' and split='".$table."b'   group by tab    ");
	while($bav=mysql_fetch_assoc($mk)){
		echo $prodh=$bav['totals'];
		
	}
	?></td>|
    
    
        </table>
        

</tr>
         
         <?php 
	} } ?>
    
     <?php
		if(isset($_GET['go'])){
			echo  $id=$_GET['hist'];
			 $tabl=$_GET['table'];
			 $bsk=$_GET['basket'];
			 $d_tab=$_GET['d_tab'];
	echo  $df=("UPDATE ".$_GET['bkt']." SET split='".$tabl."a' where id='$id'");
	
		}
		
		
		?>
    
    </div>


