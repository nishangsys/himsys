<?php


include '../includes/conn.php';

/**
Simple multiple Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/multiple-insert-update-using-php-mysql-delete-multiple-records-using-checkboxes-in-php/
**/
@session_start();
	
$query 	= mysql_query("SELECT * FROM `fixed_products` ORDER BY id ASC"); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count

// Multipe insert case
if(isset($_POST['submit'])) {
	$amt = $_POST['total'];
	if($amt > 0) {
		
		//***********check if product exists
		for($i=1; $i<=$amt; $i++) {
	  $check="SELECT * from fixed_products where product='".$_POST["product$i"]."' AND model='".$_POST["model$i"]."' AND qty>0";
		$run=mysql_query($check) or die(mysql_error());
		if(mysql_num_rows($run)>0){
		
			echo "<script>alert('Sorry Your Records cannot be uploaded because  ". $_POST["product$i"]." ". $_POST["model$i"]."  is already in stocks')</script>";
			echo "<p style='color:#f00; font-size:14px; font-weight:bold; text-align:center;'>Sorry Your Records cannot be uploaded because  ". $_POST["product$i"]." ". $_POST["cate$i"]."  is already in stocks</p>";
			echo '<meta http-equiv="Refresh" content="1; url= simple.php">';
			exit;
		}
		
		else {
			
		
		$year=date('Y');
		$_POST = array_map("ucwords", $_POST);
	
		$qry = "INSERT INTO fixed_products(product, model, discribe, qty,date,month,year) VALUES "; // Split the mysql_query
		
		for($i=1; $i<=$amt; $i++) {
			$year=date('Y');
			$date=date('d-m-Y');
			$month=date('m');
			
			

$agen=$_SESSION['username'];
			$qry .= "('".$_POST["product$i"]."', '".$_POST["describe$i"]."', '".$_POST["describe$i"]."','".$_POST["qty$i"]."','$date', 
'$month', '$year'), "; // loop the mysql_query values to avoid more server loding time

		}
		
		$qry	= substr($qry, 0, strlen($qry)-2);
		$insert1 = mysql_query($qry) or die (mysql_error()); // Execute the mysql_query
		
		

		echo "<script>alert('Stocks Successfully added. Thank You')</script>";
	}
	
}
	}
}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>NSMS</title>
<meta name="keywords" content="multiple insert in php, multiple crud using PHP MySql, multiple insert update delete using php mysql"/>
<meta name="description" content="multiple insert update delete CRUD using PHP MySql. A simple way to insert, update and delete multiple values at a time using PHP MySql"/>
<style>
.as_wrapper{
	margin:0 auto;
	width:100%;
	font-family:Arial;
	color:#333;
	background:#eee;
	font-size:14px;
}

.as_country_container{
	padding:20px;
	border:2px dashed #17A3F7;
}

.a {
	text-decoration:none;
	color:#999;
}

.a:hover {
	text-decoration:underline;
}

.a:active {
	color:#F55925;
}
.h1 a {
	text-decoration:none;
	color:#000;
}
.h1 a:hover {
	text-decoration:underline;
}
.table {
	border:2px dashed #17A3F7;
	padding:20px;
	width:95%;
	
}
.table tr td{
	padding:5px;
}
.table_view {
	border:1px solid #17A3F7;
	min-width:400px;
	border-collapse:collapse;
}
.table_view tr.heading th {
	background:#17A3F7;
	padding:5px;
	color:#FFF;
}
.table_view tr.odd {
	background:#F7F7F7;
}
.table_view tr.even {
	background:#FFF;
}
.table_view tr.odd:hover, .table_view tr.even:hover {
	background:#FEFDE0;
}
.table_view tr td {
	padding:5px;
}
.input {
	border:#CCC solid 1px;
	padding:5px;
}

.input:focus {
	border:#999 solid 1px;
	background:#FEFDE0;
	padding:5px;
}
</style>
</head>

<body>
<div class="as_wrapper">
	<h1 class="h1"><a href="">You are Adding Items to the Warehouse</a></h1>
    
    <h3 style="color:#f00; font-size:16px">Please make sure no product on this form/worksheet is already registered in stock</h3>
	<div class="as_country_container">
	<?php
    echo $msg; // Display the result message generated in the above PHP actions,
    //Create form to get number of rows to be generated to insert 
    ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get" name="amtForm">
        <table align="center">
        <tr>
            <td>Generate Excel Columns</td>
            <td><input type="text" name="amt" class="input" <?php if(isset($_GET["amt"])) { ?> value="<?php echo $_GET["amt"]; ?>" <?php } ?> /></td>
            <td><input type="submit" value="Generate"  /></td>
                    <td style="background:#1188aa; padding:10px 10px">| <a class="a" href="?update" style="color:#fff">Update Fees</a></td>

        </tr>
        </table>
        <br />
        </form>  
        
        
        <?php
        // Get the amount to be generated
        if(isset($_GET['amt'])) {
			if($_GET['amt'] > 0) {
        ?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center" class="table" >
            <tr style="background: #ccc; /* [disabled]color:#000; */ font-weight: bold">
                <td align="center">Sno</td>
                <td align="center">Product</td>
                <td align="center">Description</td>
                <td align="center">Model</td>
                 <td align="center">Qty</td>             
               
            </tr>
            <?php
                // Loop the rows and inputs according to the amount
                for($i=1; $i<=$_GET['amt']; $i++) {
            ?>
            <tr>
            
         
                <td><?php echo $i; ?></td>
                <td><input type="text" name="product<?php echo $i; ?>" class="input" /></td>
               
                <td><input type="text" name="describe<?php echo $i; ?>" class="input"   /></td>
                
                <td><input type="TEXT" name="model<?php echo $i; ?>" class="input" /></td>
                <td><input type="text" name="qty<?php echo $i; ?>" class="input" /></td>
                
                
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="4" align="center">
                <input type="hidden" name="total" value="<?php echo $i-1; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="submit" value="Add to stocks" /></td>
            </tr>
            </table>
            </form>  
            <?php     
            
            // Case for view and update the rows
      if(isset($_GET['update'])) {
			if($count <= 0) {
			?>
            <table align="center">
            <tr>
                <td>No records found!</td>
			</tr>
            </table>
            <?php
			} 
			else {
            $i = 0;
        	?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center">
            <tr>
                <td align="center">Sno</td>
                <td align="center">class</td>
                <td align="center">Fees</td>
                <td align="center">model</td>
                
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="fee_id<?php echo $i; ?>" value="<?php echo $row['fee_id']; ?>" /></td>
                <td><input type="text" name="class<?php echo $i; ?>" value="<?php echo $row['class']; ?>" class="input"  /></td>
                <td><input type="text" name="amount<?php echo $i; ?>" value="<?php echo $row['amount']; ?>" class="input" /></td>
                
                 <td><input type="text" name="cate<?php echo $i; ?>" value="<?php echo $row['cate']; ?>" class="input" /></td>
               
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hfee_idden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitUpdate" value="Update" /></td>
            </tr>
            </table>
            </form>
        <?php
        	}
		}
			}
		}
        ?>
	</div>
</div>
</body>
</html>

