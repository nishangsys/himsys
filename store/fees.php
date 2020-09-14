<?php
/**
Simple our_tables Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/our_tables-insert-update-using-php-mysql-delete-our_tables-records-using-checkboxes-in-php/
**/
include '../dbc.php'; // include the database and server connection file
$query 	= mysql_query("SELECT * FROM `our_tables` ORDER BY id ASC"); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count

// Multipe insert case
if(isset($_POST['submit'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total'];
	if($amt > 0) {
		$qry = "INSERT INTO our_tables(num,status) VALUES "; // Split the mysql_query
		for($i=1; $i<=$amt; $i++) {
			$qry .= "( '".$_POST["num$i"]."', '2'), "; // loop the mysql_query values to avoid more server loding time
		}
		$qry 	= substr($qry, 0, strlen($qry)-2);
		$insert = mysql_query($qry); // Execute the mysql_query
	}
	// Redirect for each cases
	if($insert) {
		$msg = '<script type="text/javascript">window.location.href = "?view&result=added";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// our_tables delete case using checkboxes
if(isset($_POST['SubmitDelete'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$delete = mysql_query("DELETE FROM our_tables WHERE id = '".$_POST["delete$i"]."'"); // Run the delete query inside for loop
	}

	// Redirect for each cases
	if($delete) {
		$msg = '<script type="text/javascript">window.location.href = "?view";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// our_tables update case
if(isset($_POST['SubmitUpdate'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$update = mysql_query("UPDATE `our_tables` SET `class` = '".$_POST["class$i"]."', num = '".$_POST["num$i"]."', status = '".$_POST["status$i"]."' WHERE `id` = '".$_POST["id$i"]."'"); // Run the Mysql update query inside for loop
	}
	
	// Redirect for each cases
	if($update) {
		$msg = '<script type="text/javascript">window.location.href = "?update&result=updated";</script>';
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
<title>NISHANG</title>
<meta name="keywords" content="our_tables insert in php, our_tables crud using PHP MySql, our_tables insert update delete using php mysql"/>
<meta name="description" content="our_tables insert update delete CRUD using PHP MySql. A simple way to insert, update and delete our_tables values at a time using PHP MySql"/>
<style>
.as_wrapper{
	margin:0 auto;
	width:800px;
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
	<h1 class="h1"><a href="">Table Control Dashboard</a></h1>
    <p>To add Tables note the Following<br>
   <span style="color:#f00"> 1. Please no appostofix ( ' or ") are allowed</span>
    
    </p
    >
	<div class="as_country_container">
	<?php
    echo $msg; // Display the result message generated in the above PHP actions,
    //Create form to get number of rows to be generated to insert 
    ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get" name="amtForm">
        <table align="center">
        <tr>
            <td style="background:#1188aa; color:#fff; padding:10px 10px">Number of Classes you want to add</td>
            <td><input type="text" name="amt" class="input" <?php if(isset($_GET["amt"])) { ?> value="<?php echo $_GET["amt"]; ?>" <?php } ?> /></td>
            <td><input type="submit" value="Generate"  /></td>
            <td style="background:#1188aa; padding:10px 10px">| <a class="a" href="?view" style="color:#fff">Delete tables</a></td>
        </tr>
        </table>
        <br />
        </form>
        <?php
        // Get the num to be generated
        if(isset($_GET['amt'])) {
			if($_GET['amt'] > 0) {
				$lsd=mysql_query("SELECT * FROM our_tables order by id DESC LIMIT 1");
					while($r=mysql_fetch_assoc($lsd)){
						$l=$r['num']+1;
					}
        ?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center" class="table" style="width:500px">
            <tr>
                <td align="center">Sno</td>
                <td align="center">Table</td>
                
                
            </tr>
            <?php
                // Loop the rows and inputs according to the num
                for($i=1; $i<=$_GET['amt']; $i++) {
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                
                  
               
                <td><select name="num<?php echo $i; ?>" />
                <option value="<?php echo $room; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($room=$l;$room<=80;$room++)
					{
					echo "<option value='$room'>Table $room</option>";
					}
					?>
				</select>
                
                </select></td>
                
                
               
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
            <table align="center" class="table_view" style="width:500px">
            <tr class="heading">
                <th>&nbsp;</th>
                <th>Sno</th>
                <th>Table</th>
                

            </tr>
            <?php
                while($row = mysql_fetch_array($query))
                {
                    $i = $i + 1;
            ?>
            <tr class="<?php if($i%2 == 0) { echo "odd"; } else{ echo "even"; } ?>">
                <td><input type="checkbox" name="delete<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><?php echo $i; ?></td>
              
                <td>Room <?php echo $row['num']; ?></td>
                
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
                <td align="center">Table</td>
               
                
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
               
                <td><input type="text" name="num<?php echo $i; ?>" value="<?php echo $row['num']; ?>" class="input" /></td>
                
               
               
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitUpdate" value="Update" /></td>
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