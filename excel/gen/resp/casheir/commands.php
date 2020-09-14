
 <?php

	$cate=$_GET['command'];
	if(empty($cate)){
		 echo $message= "<div class='alert alert-danger' style='color:#fff; background:#f00;font-weight:bold'>ERROR. CHOSE A TABLE TO SEE COMMAND</div>";
	}
	else {
		  $a = mysql_query("SELECT SUM(qty),SUM(total),price,product,category,ids,id,price,qty,total FROM ".$db_basket." where tab='".$cate."' and status='3' and qty>0 GROUP BY category,product order by product ") or die(mysql_error());
			$i=1;
			 echo $message= "<div class='alert alert-danger' style='color:#fff; background:#6E0000;font-weight:bold; padding:5px 0px'>TABLE $cate COMMAND</div>";
?>

  
         <table class="table table-bordered" style="line-height:1; margin-top:-10px">
    <thead>
     
      <tr>
      <th>S/N</th>
        <th>Product</th>
        <th>Quatity</th>
        <th>Price</th>
        <th>Total</th>
      </tr>
    </thead>
   
   <?php   while ($fg=mysql_fetch_assoc($a)){ ?>
    <tbody style="line-height:1">
    <tr>
       <td><?php echo $i++; ?></td>
    
    <td> <a href="?delete=<?php echo $fg['product'];?>&id=<?php echo $fg['id']; ?>&tab=<?php echo $table; ?>&qty=<?php echo $fg['qty']; ?>&from=<?php echo $fg['froms']; ?>&db_basket=<?php echo $ybasket; ?>&dbtables=<?php echo $ytable; ?>&area=<?php echo $a_area; ?>&section=<?php echo $section; ?>" style="text-decoration:none; color:#000; padding:3px 6px"><?php echo $thatpro=$fg['product']; ?></a></td>
    
    <td><?php echo $fg['price']; ?></td>
    
     <td><?php echo $fg['qty']; ?></td>
     <td><?php echo $fg['SUM(total)']; ?></td>
    
    </tr>
   <?php } ?>
   
   
   
   
   
   
  <tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td style="background:#090; color:#fff"> <?PHP 
  			
$ren=mysql_query("SELECT SUM(total) as total,tab FROM ".$db_basket." where tab='".$cate."' and status='3' and qty>0 GROUP BY tab  ") or die(mysql_error());
while ($rol=mysql_fetch_assoc($ren)){ 
$tol=($rol['total']);
echo number_format($rol['total']) ."&nbsp;&nbsp;Frs";
}
	
	?></td>


  </tr>
    		
       
    </tbody>
  </table>
<?PHP			
while($row = $query->fetch_assoc()) {
	?>


    
    
    
    
    		
    
    
    
    
    
    
    
    
        <?PHP }}
	 ?>
     