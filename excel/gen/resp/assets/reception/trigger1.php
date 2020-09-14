<?php
/**
Simple customers Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/customers-insert-update-using-php-mysql-delete-customers-records-using-checkboxes-in-php/
**/
include '../dbc.php';
session_start();

if(!isset($_SESSION['user_name'])){

echo "<script>window.open('login.php','_self')</script>";
}


	else {

$query 	= mysql_query("SELECT * FROM `customers` GROUP BY stu_name ORDER BY stu_name ASC"); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count

// Multipe insert case
if(isset($_POST['submit'])) {
	$amt = $_POST['total'];
	if($amt > 0) {	
	
		
		//***********check if product exists
		for($i=1; $i<=$amt; $i++) {
	  
		
		$qry = "INSERT INTO customers() VALUES "; // Split the mysql_query
		for($i=1; $i<=$amt; $i++) {
			$qry .= "('".$_POST["name$i"]."'), "; // loop the mysql_query values to avoclient_id more server loding time
		}
		$qry 	= substr($qry, 0, strlen($qry)-2);
		$insert = mysql_query($qry) or die(mysql_error()); 
		echo "<script>alert('Registration Successful. Thank You')</script>";
		// Execute the mysql_query
	}
	// Redirect for each cases
	if($insert) {
		$msg = '<script type="text/javascript">window.location.href = "?view&result=added";</script>';
	}
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}

}
// customers delete case using checkboxes
if(isset($_POST['SubmitDelete'])) {
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$delete = mysql_query("DELETE FROM customers WHERE client_id = '".$_POST["delete$i"]."'"); // Run the delete query insclient_ide for loop
		      $kl="DELETE FROM students WHERE stu_name = '".$_POST["name$i"]."'";
				$delete = mysql_query($kl); // 

	}

	// Redirect for each cases
	if($delete) {
		$msg = '<script type="text/javascript">window.location.href = "?view";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// customers update case
if(isset($_POST['SubmitUpdate'])) {
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		//$_POST["total$i"]=$_POST["quatity$i"]*$_POST["student$i"];
		$one=("UPDATE `customers` SET  stu_name = '".$_POST["name$i"]."',tel='".$_POST["tel$i"]."'
		,email='".$_POST["email$i"]."'
		,innum='".$_POST["catno$i"]."',alevel='".$_POST["doi$i"]."',olevel='".$_POST["pob$i"]."'
		 WHERE `client_id` = '".$_POST["client_id$i"]."'");
		$update = mysql_query($one) or die(mysql_error()); // Run the Mysql update query insclient_ide for loop
		echo "<script>alert('Update Successful. Thank You')</script>";
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
<title>Nishang Software Special</title>
<meta name="keywords" content="customers insert in php, customers crud using PHP MySql, customers insert update delete using php mysql"/>
<meta name="description" content="customers insert update delete CRUD using PHP MySql. A simple way to insert, update and delete customers values at a time using PHP MySql"/>

<style>
body{
	font-family:Arial, Helvetica, sans-serif;
	line-height:1.9;
}
.as_wrapper{
	margin:0 auto;
	width:100%;
	font-family:Arial;
	color:#333;
	font-size:14px;
	background:#eee;
}

.as_country_container{
	padding:20px;
	border:2px dashed #17A3F7;
}

.a {
	text-decoration:none;
	color:#000;
	background:#D7E2E6;
	padding:10px 10px;
	border-radius:10px 10px 10px 10px;
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
	max-width:100%;
}
.table tr td{
	padding:5px;
}
.table_view {
	border:1px solclient_id #17A3F7;
	width:100%;
	
	border-collapse:collapse;
}
.table_view tr.heading th {
	background:#D7E2E6;
	padding:5px;
	color:#000;
}
.table_view tr.odd {
	background:#eee;
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
	border:#CCC solclient_id 1px;
	padding:5px;
}

.input:focus {
	border:#999 solclient_id 1px;
	background:#FEFDE0;
	padding:5px;
}
button, .butt{font-size:16px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	border:1px solid #dcdcdc;
	padding:9px 18px;
	text-decoration:none;
	background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
	background:-ms-linear-gradient( top, #ededed 5%, #dfdfdf 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #ededed), color-stop(100%, #dfdfdf) );
	background-color:#ededed;
	color:#777777;
	display:inline-block;
	text-shadow:1px 1px 0px #ffffff;
 	-webkit-box-shadow:inset 1px 1px 0px 0px #ffffff;
 	-moz-box-shadow:inset 1px 1px 0px 0px #ffffff;
 	box-shadow:inset 1px 1px 0px 0px #ffffff;}
	.right{	
	width:100%;
	height:auto;
	overflow:hidden;	
	background:#fff;
	float:left;
	border-right:1px solid#eee;
	margin-left:10px;;
	
	}
</style>
</head>

<body>
<div class="as_wrapper">

	
	<?php
    echo $msg; // Display the result message generated in the above PHP actions,
    //Create form to get number of rows to be generated to insert 
    ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get" name="amtForm">
        <table align="center">
        <tr style="">

            <td>| <a class="a" href="?update">  Update customers Names</a></td>
           
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
            <table align="center">
            <tr style="background:#D7E2E6; padding:10px 0px">
                <td align="center">Sno</td>
                <td align="center">product's Names</td>
                <td align="center">Matricule</td>
                <td align="center">year</td>
                <td align="center">Price</td>
                <td align="center">quatity</td>
                <td align="center"></td>
            </tr>
            <?php
                // Loop the rows and inputs according to the amount
                for($i=1; $i<=$_GET['amt']; $i++) {
            ?>
            <tr>
             <?php
		
		if($i%2==0)
 {
     echo '<tr bgcolor="#eee">';
 }
 else
 {
    // echo '<tr bgcolor="#FFF">';
 }
		
		?>
                <td><?php echo $i; ?></td>
                <td><input type="text" name="name<?php echo $i; ?>" class="input" /></td>
                <td><input type="text" name="mat<?php echo $i; ?>" class="input" /></td>
                <td><input type="text" name="year<?php echo $i; ?>" class="input" /></td>
                
                <td><input type="text" name="postion<?php echo $i; ?>" class="input" /></td>
                <td><input type="text" name="quatity<?php echo $i; ?>" class="input" /></td>
                <td><input type="hidden" name="date<?php echo $i; ?>" value="<?php echo date('d-m-Y'); ?>" class="input" /></td>
                
                <td><input type="hidden" name="month<?php echo $i; ?>" value="<?php echo date('m'); ?>" class="input" /></td>
                <td><input type="hidden" name="year<?php echo $i; ?>" value="<?php echo date('Y'); ?>" class="input" /></td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="4" align="center">
                <input type="hidden" name="total" value="<?php echo $i-1; ?>" /> <?php // Post the total rows count value ?>
                <button type="submit" name="submit">Employ Now</button></td>
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
            <table align="center" class="table_view">
            <tr class="heading">
                <th>&nbsp;</th>
                <th>Sno</th>
                <th> Names</th>
                <th>Program</th>
                <th>year</th>
            </tr>
            <?php
                while($row = mysql_fetch_array($query))
                {
                    $i = $i + 1;
            ?>
            <tr class="<?php if($i%2 == 0) { echo "odd"; } else{ echo "even"; } ?>">
                <td><input type="checkbox" name="delete<?php echo $i; ?>" value="<?php echo $row['client_id']; ?>" /></td>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['stu_name']; ?></td>
                <td><?php echo $row['class']; ?></td>
                <td><?php echo $row['year']; ?></td>
              <td><input type="hidden" name="name<?php echo $i; ?>" value="<?php echo $row['stu_name']; ?>"   /></td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hclient_idden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <button type="submit" name="SubmitDelete" >DELETE STUDENTS</button></td>
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
            <tr style="background:#1188AA; color:#FFF">
                <td align="center">Sno</td>
                <td align="center">Names</td>
                
                <td align="center">Telephone</td>
                <td align="center">Email</td>
                
                 <td align="center">ID/Passport No</td>
                <td align="center">Date of Issue</td>
                    <td align="center">Place of Issue</td>

              
                 
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="client_id<?php echo $i; ?>" value="<?php echo $row['client_id']; ?>" /></td>
                <td><input type="text" name="name<?php echo $i; ?>" value="<?php echo $row['stu_name']; ?>" class="input" style="width:230px"  /></td>
                <td><input type="text" name="tel<?php echo $i; ?>" value="<?php echo $row['tel']; ?>" class="input" style="width:80px" /></td>
                
                
                  <td><input type="text" name="email<?php echo $i; ?>" value="<?php echo $row['email']; ?>" class="input" style="width:140px" /></td>
                  
                   <td><input type="text" name="catno<?php echo $i; ?>" value="<?php echo $row['innum']; ?>" class="input" style="width:130px" /></td>
                
                <td><input type="text" name="doi<?php echo $i; ?>" value="<?php echo $row['alevel']; ?>" class="input" style="width:90px" /></td>           
                
                  <td><input type="text" name="poi<?php echo $i; ?>" value="<?php echo $row['olevel']; ?>" class="input" style="width:80px" /></td>
                  
                  
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <button type="submit" name="SubmitUpdate" >Update Now</button></td>
            </tr>
            </table>
            </form>
        <?php
        	}
		}
	}
        ?>
	</div>
</div>
</body>
</html>