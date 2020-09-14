<?php
/**
Simple main_cat Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/main_cat-insert-update-using-php-mysql-delete-main_cat-records-using-checkboxes-in-php/
**/
include '../dbc.php'; // include the database and server connection file
$query 	= mysql_query("SELECT * FROM `main_cats` ORDER BY id ASC") or die(mysql_error()); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count

// Multipe insert case
if(isset($_POST['submit'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total'];
	if($amt > 0) {
		
		
		$qry = "INSERT INTO main_cats(disc,amt,howlong,facil,ins) VALUES "; // Split the mysql_query
		for($i=1; $i<=$amt; $i++) {
			$val=$_POST["howlong$i"];
			
			if($val=='12'){
			  $ins="Monthly";
		}
		else if($val=='1')  {
			$ins="Yearly";
		}
		else{
			$ins="Daily";
		}
		
			$qry .= "('".$_POST["disc$i"]."', '".$_POST["amt$i"]."','".$_POST["howlong$i"]."', '".$_POST["facil$i"]."','".$ins."'), "; // loop the mysql_query values to avoid more server loding time
		}
		$qry 	= substr($qry, 0, strlen($qry)-2);
		$insert = mysql_query($qry) or die(mysql_error()); // Execute the mysql_query
	}
	if($insert){
		echo "<script>alert('Data Saved. Thank you Very Much')</script>";
	}
	// Redirect for each cases
	
}

// main_cat delete case using checkboxes
if(isset($_POST['SubmitDelete'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$delete = mysql_query("DELETE FROM main_cats WHERE id = '".$_POST["delete$i"]."'"); // Run the delete query inside for loop
	}

	// Redirect for each cases
	if($delete) {
		$msg = '<script type="text/javascript">window.location.href = "?view";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// main_cat update case
if(isset($_POST['SubmitUpdate'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$update = mysql_query("UPDATE `main_cats` SET `disc` = '".$_POST["disc$i"]."', amt = '".$_POST["amt$i"]."', facil = '".$_POST["facil$i"]."',
		ins= '".$_POST["ins$i"]."'  WHERE `id` = '".$_POST["id$i"]."'"); // Run the Mysql update query inside for loop
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
<title>Simple main_cat Insert, Read, Update, Delete (CRUD) using PHP, MySql by Asif18</title>
<meta name="keywords" content="main_cat insert in php, main_cat crud using PHP MySql, main_cat insert update delete using php mysql"/>
<meta name="description" content="main_cat insert update delete CRUD using PHP MySql. A simple way to insert, update and delete main_cat values at a time using PHP MySql"/>
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
	<h1 class="h1"><a href="">Add/Edit and Delete a Room</a></h1>
    <p>To add main_cat note the Following<br>
   <span style="color:#f00"> 1. Please no appostofix ( ' or ") are allowed</span>
    </p
    >
	<div class="as_country_container">
	<?php
    echo $msg; // Display the result message generated in the above PHP actions,
    //Create form to get discber of rows to be generated to insert 
    ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get" name="amtForm">
        <table align="center">
        <tr>
            <td style="background:#1188aa; color:#fff; padding:10px 10px">How Many</td>
            <td><input type="text" name="amt" class="input" <?php if(isset($_GET["amt"])) { ?> value="<?php echo $_GET["amt"]; ?>" <?php } ?> /></td>
            <td><input type="submit" value="Generate"  /></td>
            <td style="background:#1188aa; padding:10px 10px">| <a class="a" href="?view" style="color:#fff">Delete </a></td>
            <td style="background:#1188aa; padding:10px 10px">| <a class="a" href="?update" style="color:#fff">Update</a></td>
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
            <tr style="text-align:center">
                <td align="center">Sno</td>
                <td align="center">Description</td>
                <td align="center">Cost</td>
                <TD align="center">facilities</TD>
                <TD align="center">Category</TD>
                
            </tr>
            <?php
                // Loop the rows and inputs according to the amount
                for($i=1; $i<=$_GET['amt']; $i++) {
					$lsd=mysql_query("SELECT * FROM main_cat order by id DESC LIMIT 1");
					while($r=mysql_fetch_assoc($lsd)){
						$l=$r['disc']+1;
					}
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td>
                                <input type="text" name="disc<?php echo $i; ?>">

             </td>
                
                  
                <td>
                <input type="text" name="amt<?php echo $i; ?>">
                </td>
                
                <td>
                  <input type="text" name="facil<?php echo $i; ?>">                
                
                </td>
                <td>
                
<select name="howlong<?php echo $i; ?>" class="input" />
                 <option value="24"  > Daily</option>

               	<option value="12"  > Monthly</option>
                 <option value="1"  > Yearly</option>

					
				</select>
                
                </td>
               
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
                <th>Description</th>
                <th>Amount</th>
               <th>facility</th>
               <th>Category</th>

            </tr>
            <?php
                while($row = mysql_fetch_array($query))
                {
                    $i = $i + 1;
            ?>
            <tr class="<?php if($i%2 == 0) { echo "odd"; } else{ echo "even"; } ?>" style="text-align:center">
                <td><input type="checkbox" name="delete<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['disc']; ?></td>
                <td><?php echo $row['amt']; ?></td>
                
                <td><?php echo $row['facil']; ?></td>
                                <td><?php echo $row['ins']; ?></td>

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
                <td align="center">Description</td>
                <td align="center">Amount</td>
                <td align="center">Facilities</td>
                <td align="center">Category</td>
                
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><input type="text" name="disc<?php echo $i; ?>" value="<?php echo $row['disc']; ?>" class="input"  /></td>
                <td><input type="text" name="amt<?php echo $i; ?>" value="<?php echo $row['amt']; ?>" class="input" /></td>
                
                 <td><input type="text" name="facil<?php echo $i; ?>" value="<?php echo $row['facil']; ?>" class="input" /></td>
                 <td><input type="text" name="ins<?php echo $i; ?>" value="<?php echo $row['ins']; ?>" class="input"  /></td>

               
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