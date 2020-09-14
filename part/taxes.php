<?php
/**
Simple taxes Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/taxes-insert-update-using-php-mysql-delete-taxes-records-using-checkboxes-in-php/
**/
include '../dbc.php'; // include the database and server connection file
$query 	= mysql_query("SELECT * FROM `taxes` WHERE id='1'"); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count

// Multipe insert case
if(isset($_POST['submit'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total'];
	if($amt > 0) {
		$qry = "INSERT INTO taxes(class,amount,cate) VALUES "; // Split the mysql_query
		for($i=1; $i<=$amt; $i++) {
			$qry .= "('".$_POST["class$i"]."', '".$_POST["amount$i"]."', '".$_POST["cate$i"]."'), "; // loop the mysql_query values to avoid more server loding time
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

// taxes delete case using checkboxes
if(isset($_POST['SubmitDelete'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$delete = mysql_query("DELETE FROM taxes WHERE id = '".$_POST["delete$i"]."'"); // Run the delete query inside for loop
	}

	// Redirect for each cases
	if($delete) {
		$msg = '<script type="text/javascript">window.location.href = "?view";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// taxes update case
if(isset($_POST['SubmitUpdate'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$update = mysql_query("UPDATE `taxes` SET `cnsp` = '".$_POST["cnps$i"]."', crtv = '".$_POST["crtv$i"]."'
		, dct= '".$_POST["dct$i"]."', ccf= '".$_POST["ccf$i"]."', cnps2= '".$_POST["cnps2$i"]."' ,new1= '".$_POST["new1$i"]."',
		new2= '".$_POST["new2$i"]."',new3= '".$_POST["new3$i"]."' WHERE `id` = '1'"); // Run the Mysql update query inside for loop
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
<title>NISHANG SYSTEMS</title>
<meta name="keywords" content="taxes insert in php, taxes crud using PHP MySql, taxes insert update delete using php mysql"/>
<meta name="description" content="taxes insert update delete CRUD using PHP MySql. A simple way to insert, update and delete taxes values at a time using PHP MySql"/>
<style>
.as_wrapper{
	margin:0 auto;
	width:900px;
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
	<h1 class="h1"><a href="">SETTING TAXES DASHBOARD</a></h1>
    <p style="color:#f00; line-height:1.5">To add salaries, note the Following<br>
    1. Type The Figures without %<br>
    2. Di not Add CFA or Frs to Figures
    
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
          
            <td style="background:#1188aa; padding:10px 10px">| <a class="a" href="?update" style="color:#fff">Update Taxes</a></td>
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
                <td align="center">Class</td>
                <td align="center">taxes</td>
                <TD>Category</TD>
                
            </tr>
            <?php
                // Loop the rows and inputs according to the amount
                for($i=1; $i<=$_GET['amt']; $i++) {
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><input type="text" name="class<?php echo $i; ?>" class="input" style="WIDTH:60PX" /></td>
                <td><input type="text" name="amount<?php echo $i; ?>" class="input" /></td>
                
                <td><select name="cate<?php echo $i; ?>" class="input" />
                <option value="New Student">New Student</option>
                 <option value="Returning Student">Returning Student</option>
                
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
                <th>S/N</th>
                <th>STAFF'S NAME</th>
                <th>POSITION</th>
               <th>NATIONALITY</th>

            </tr>
            <?php
                while($row = mysql_fetch_array($query))
                {
                    $i = $i + 1;
            ?>
            <tr class="<?php if($i%2 == 0) { echo "odd"; } else{ echo "even"; } ?>">
                <td><input type="checkbox" name="delete<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                
                <td><?php echo $row['nation']; ?></td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center" style="width:500px">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input style="COLOR:#F00; font-weight:bold; padding:10PX 10PX" type="submit" name="SubmitDelete" value="SACK!" /></td>
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
                <td align="center">CNSP 4.2%</td>
                <td align="center">CRTV</td>
                <td align="center">IRPP</td>
                <td align="center">Cuncil tax</td>
                <td align="center">CNPS 8.2%</td>
                
                 <td align="center">NHL Fund</td>
                <td align="center">new 2</td>
                <td align="center">new 3</td>
                
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr style="text-align:center">
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><input type="text" name="cnps<?php echo $i; ?>" value="<?php echo $row['cnsp']; ?>" class="input" style="WIDTH:60PX" /></td>
                <td><input type="text" name="crtv<?php echo $i; ?>" value="<?php echo $row['crtv']; ?>" class="input" style="WIDTH:60PX" /></td>
                
                 <td><input type="text" name="dct<?php echo $i; ?>" value="<?php echo $row['dct']; ?>" class="input" style="WIDTH:60PX" /></td>
                 <td><input type="text" name="ccf<?php echo $i; ?>" value="<?php echo $row['ccf']; ?>" class="input" style="WIDTH:60PX" /></td>
                
                 <td><input type="text" name="cnps2<?php echo $i; ?>" value="<?php echo $row['cnps2']; ?>" class="input" style="WIDTH:60PX" /></td>
                 
                  <td><input type="text" name="new1<?php echo $i; ?>" value="<?php echo $row['new1']; ?>" class="input" style="WIDTH:60PX" /></td>
                 <td><input type="text" name="new2<?php echo $i; ?>" value="<?php echo $row['new2']; ?>" class="input" style="WIDTH:60PX" /></td>
                
                 <td><input type="text" name="new3<?php echo $i; ?>" value="<?php echo $row['new3']; ?>" class="input" style="WIDTH:60PX" /></td>
               
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