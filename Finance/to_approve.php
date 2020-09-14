

<?php

include '../includes/dbc.php'; // include the database and server connection file

@session_start();
	

 $name=$_GET['ids'];

$query 	= mysql_query("SELECT * FROM `requisitions` where ids='".$name."'   ORDER BY id ASC"); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count

// Multipe insert case
if(isset($_POST['submit'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total'];
	if($amt > 0) {
		$qry = "INSERT INTO requisitions(name) VALUES "; // Split the mysql_query
		for($i=1; $i<=$amt; $i++) {
			$qry .= "( '".$_POST["name$i"]."'), "; // loop the mysql_query values to avoid more server loding time
		}
		$qry 	= substr($qry, 0, strlen($qry)-2);
		$insert = mysql_query($qry); // Execute the mysql_query
				echo "<script>alert('SUCCESSFUL')</script>";

	}
	// Redirect for each cases
	if($insert) {
		$msg = '<script type="text/javascript">window.lonameion.href = "?view&result=added";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// requisitions delete case using checkboxes
if(isset($_POST['SubmitDelete'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$delete = mysql_query("DELETE FROM requisitions WHERE id = '".$_POST["delete$i"]."'"); // Run the delete query inside for loop
	}

	// Redirect for each cases
	if($delete) {
		$msg = '<script type="text/javascript">window.lonameion.href = "?view";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// requisitions update case
if(isset($_POST['SubmitUpdate'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total'];
	$date=date('d-m-Y'); // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$update = mysql_query("UPDATE `requisitions` SET  price = '".$_POST["price$i"]."',qty = '".$_POST["qty$i"]."',product = '".$_POST["product$i"]."',opening_stocks = '".$_POST["class$i"]."',pdate='$date',status='2',area='procurement' WHERE `id` = '".$_POST["id$i"]."'") or die(mysql_error()); // Run the Mysql update query inside for loop
	}
	echo "<script>alert('Successfull in Updating')</script>";
	
	// Redirect for each cases
	if($update) {
		$msg = '<script type="text/javascript">window.lonameion.href = "?update&result=updated";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>NSMS</title>
<style>
.as_wrapper{
	margin:0 auto;
	width:95%;
	font-family:Arial;
	color:#333;
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
	min-width:500px;
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

	<div class="as_country_container">
	<?php
    echo $msg; // Display the result message generated in the above PHP actions,
    //Create form to get number of rows to be generated to insert 
    ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get" name="amtForm">
        <table align="center">
        <tr>
            
            <td style="background:#1188aa; padding:10px 10px">| <a class="a" href="?view&ids=<?php echo $_GET['ids']; ?>" style="color:#fff">Delete a Requisited Item</a></td>
            <td style="background:#1188aa; padding:10px 10px">| <a class="a" href="?update&ids=<?php echo $_GET['ids']; ?>" style="color:#fff">Update/ Validate a Requisited Item</a></td>
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
            <table align="center" class="table" style="width:500px">
            <tr>
                <td align="center">Sno</td>
                <TD>namegory</TD>
                
            </tr>
            <?php
                // Loop the rows and inputs according to the amount
                for($i=1; $i<=$_GET['amt']; $i++) {
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                
                   
               
                <td><input type="text" name="name<?php echo $i; ?>" class="input" value="<?php ?>" /></td>
                
                
               
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="4" align="center">
                <input type="hidden" name="total" value="<?php echo $i-1; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="submit" value="Add" /></td>
            </tr>
            </table>
            </form>
        <?php 
			}
			else {
			?>
            <table align="center">
            <tr>
                <td align="center">Enter greater than '0'</td>
			</tr>
            </table>
            <?php
			}
        }
        // Case for view and delete the data
        elseif(isset($_GET['view'])) {
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
            <table align="center" class="table_view" style="width:90%">
            <tr class="heading">
                <td>&nbsp;</td>
                   <td align="center">Sno</td>
               
            <td align="center">Staff Name</td>
           <td align="center">Item Requisited</td>
            <td align="center">Cost</td>
           <td align="center">Qty</td>


            </tr>
            <?php
                while($row = mysql_fetch_array($query))
                {
                    $i = $i + 1;
            ?>
            <tr class="<?php if($i%2 == 0) { echo "odd"; } else{ echo "even"; } ?>">
                <td><input type="checkbox" name="delete<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><?php echo $i; ?></td>
               
                
                <td><?php echo $row['agent']; ?></td>
                <td><?php echo $row['product']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['qty']; ?></td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center" style="width:500px">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitDelete" value="Delete" /></td>
            </tr>
            </table>
            </form>
		<?php
			}
        }
        // Case for view and update the rows
        elseif(isset($_GET['update'])) {
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
               
            <td align="center">Staff Name</td>
           <td align="center">Item Requisited</td>
            <td align="center">Cost</td>
           <td align="center">Qty</td>
           <td align="center">Total Cost</td>
         <td align="center">Expenditure Class</td>
                
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
               
                
                 <td><input type="text" name="name<?php echo $i; ?>" value="<?php echo $row['agent']; ?>" class="input" /></td>
                  <td><input type="text" name="product<?php echo $i; ?>" value="<?php echo $row['product']; ?>" class="input" style="width:200px" /></td>
                   <td><input type="text" name="price<?php echo $i; ?>" value="<?php echo $row['price']; ?>" class="input" style="width:100px" /></td>
                    <td><input type="text" name="qty<?php echo $i; ?>" value="<?php echo $row['qty']; ?>" class="input" style="width:80px" /></td>
                    
                     <td><input type="text" name="total<?php echo $i; ?>" value="<?php echo ($row['qty']*$row['price']); ?>" class="input" style="width:80px" /></td>
                    
        <td><select name="class<?php echo $i; ?>" class="input" required>
                    <?php
					$d=$con->query("SELECT * from exp_classes order by name  ") or die(mysqli_error($con));
					?>
                     <?php while($bu=$d->fetch_assoc()){ ?>
      <option value="<?php echo $row['opening_stocks']; ?>"><?php echo $row['opening_stocks']; ?></option>

                    <option value="<?php echo $bu['name']; ?>" required><?php echo $bu['name']; ?></option>
                    <?php } ?>
                    </select></td>
               
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitUpdate" value="Validate and Sent to the next Office" /></td>
            </tr>
            </table>
            </form>
        <?php
        	}
		}
	
        ?>
	</div>
</div>
</body>
</html>