        <link href="../style.css" rel="stylesheet" type="text/css" />

<?php
//include  '../dbc.php';
require_once '../functions/functions.php';
@session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
	@session_start();
	
	if(($_SESSION['banned'])!='150'){
		echo "<script>alert('Sorry.Cannot View Page')</script>";
		
		
			
	}
	else {
    ?>


      <?php 
	  $stock="select * from products order by product ";
	   $run=mysql_query($stock) or die ('could not updated:'.mysql_error());
	   $num=1;
	  ?>
      
      
      <div class="search_box" style="background:#CCC">
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?searchproducts">
    <table>
    <tr>
    <td><input type="text" name="name" style="background:#fff; margin-left:30px; border:1px solid#ccc" placeholder="search a product now......."/></td>
    <td><button type="submit" name="search" />Search Product</button></td>
    </tr>
    </table>
    </form>
    </div>
   <h1 style="background:#F00">
    <span style="text-align:center; font-size:24px; margin-left:30px">Stock of Drinks <a href="printstock.php" style="color:#fff " target="_blank">Print a barcodes</a> | <a href="do.php" style="color:#ff0" target="_blank">Excel Download</a> </span></span> <br /></h1>
    
    	<table style="width:100%; margin:auto; height:auto; overflow:hidden">
        <tr style="background:#999; font-weight:bold">
        <td style="color:#fff">S/N</td>
        <TD style="color:#fff">Products</TD>
        <td style="color:#fff">Category</td>
                <td style="color:#fff">Unit Cost Price</td>

        <td style="color:#fff">Unit Selling Price</td>
          <td style="color:#fff">Available Stocks</td>
          <td style="color:#fff">Section</td>
          <td style="color:#fff">Date Bought</td>
          
          <td style="color:#fff">Barcode</td></tr>
        <?php
			while($row=mysql_fetch_assoc($run)){
		?>
        <tr>
        
         <?php if($num%2==0)//if $num/2 is even
					 {
						 echo '<tr bgcolor="#ccc">';
					 }
					 else
					 {
						 echo '<tr bgcolor="#eee">';
					 }
          ?>
        <td><?php echo $num++; ?></td>
        <TD><?php echo $row['product']; ?></TD>
        <TD><?php echo $row['category']; ?></TD>
                <td><?php echo $row['month']; ?></td>

        <td><?php echo $row['price']; ?></td>
        <td style="height:30px"><?php if($row['quatity']<10){
			$qty=$row['quatity'];
			echo "<span class='error'>".$qty."</span>";
		}
		else {		
		echo $row['quatity'];
		}?></td>
        <td><?php echo $row['serial']; ?></td>
         <td><?php echo $row['date']; ?></td>
         <td><?php echo $row['barcode']; ?></td>
        </tr>
        
        
        
        <?php } ?>
        
        
        
       
        </table>
        
 
      <?php } } ?>