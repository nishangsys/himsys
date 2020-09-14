<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="2; url=login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='10'){
		echo "<script>alert('Sorry. Page restriction by the administartor')</script>";
		echo "<script>window.open('index.php?names','_self')</script>";
		
			
	}
	else {
?>
    <?php
	
		$sql="select * from products order by product";
		$rres=mysql_query($sql);
		 $num=1;
		 
	
	?>
   
    
    	<table style="width:90%; margin:auto;">
      <tr style="background:#1188aa; padding:10px 0px">
        <td style="color:#fff">S/N</td>
        <TD style="color:#fff"> Product</TD>
         <TD style="color:#fff"> Category</TD>
        <td style="color:#fff">Current Stock</td>
        <td style="color:#fff">News Price</td>
        </tr>
        <?php
			while($row=mysql_fetch_assoc($rres)){
		?>
        <tr>
        <?php if($num%2==0)//if $num/2 is even
					 {
						 echo '<tr bgcolor="#eee">';
					 }
					 else
					 {
						 echo '<tr bgcolor="#fff">';
					 }
          ?>
        <td><?php echo $num++; ?></td>
        <TD><?php echo $row['product']; ?></TD>
        <TD><?php echo $row['category']; ?></TD>
        <TD><?php echo $row['quatity']; ?></TD>
        <td><a href="updatebarprice.php?good=<?php echo $row['pro_id']; ?>"> <i class="fa fa-pencil-square "></i> New Stocks</a></td>
        </tr>
        <?php } ?>
        </table>
        
    </div>
    
</div>

<?php } } ?>