<?php
//require_once 'db.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){

header ("location: stocks.php");
echo "Error";
}
else {
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Setting</title>
<link href="../style.css" type="text/css" rel="stylesheet" />
</head>

<body>


    <?php
	
		if (isset($_POST['search'])){
	$search_info=$_POST['name'];//from the text type in form
// $search_info     
	 $query="SELECT *  from `products` WHERE `product`  like '%".mysql_real_escape_string($search_info) ."%'  or `category` 
	 like '%".mysql_real_escape_string($search_info) ."%'  ";
	
	$query_run=mysql_query($query);
	$query_num_rows	=mysql_num_rows($query_run);
	
	if(mysql_num_rows($query_run)<1) {
		
			echo "<div class='msessage_box'>".'<p>No such Name as '. '&nbsp;&nbsp;'. "  $search_info found in the database</div>"."<br>";
		
		
		
		}
	
	
	
		else {
				echo "<div class='msessage_box'>".$query_num_rows. '&nbsp;&nbsp;'. " Records of $search_info found</div>"."<br>";
			$num=1;
		
		


?>
    <div class="search_box">
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?searchproducts">
    <table>
    <tr style="background:#1188aa">
    <td><input type="text" name="name" style="background:#eee; margin-left:20px" required="required" /></td>
    <td><button type="submit" name="search" />Search Product</button></td>
    </tr>
    </table>
    </form>
    </div>
    
    	<table style="width:100%; margin:auto; height:auto; overflow:hidden">
        <tr style="background:#999; font-weight:bold">
        <td style="color:#fff">S/N</td>
        <TD style="color:#fff">Products</TD>
        <TD style="color:#fff">Category</TD>
        <td style="color:#fff">Unit Price</td>
          <td style="color:#fff">Available Stocks</td>
          <td style="color:#fff">Total Cost</td></tr>
        <?php
			while($row=mysql_fetch_assoc($query_run)){
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
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['quatity']; ?></td>
         <td><?php echo $row['total']; ?></td>
        </tr>
        
        
        
        <?php } ?>
        
        
        
       
        </table>
        
         <div class="msessage_box">Total available stock is :
        <?php 
		//
		$sql = "select sum(quatity) from products";
$q = mysql_query($sql);
$row = mysql_fetch_array($q);

echo  $row[0]."<br>";

			echo convert_number_to_words($row['0'])."-Units";
			//convert $row[0];
			 ?>
             
         
         
         
     

<?php } } } ?>
</body>
</html>


