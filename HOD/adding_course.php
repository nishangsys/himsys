<?php
/**
Simple subject Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/subject-insert-update-using-php-mysql-delete-subject-records-using-checkboxes-in-php/
**/

include '../includes/dbc.php'; // include the database and server connection file

@session_start();


  $user=$_SESSION['user_name'];
  
  ///////////////////////
echo $prog=$_POST['dept'];
  $dms=$con->query("SELECT * FROM users where user_name='$user'  ") or die(mysqli_error($con));
while($bn=$dms->fetch_assoc()){
	   echo $dp=$bn['address'];
	    
}

$query 	= mysql_query("SELECT * FROM `subject` WHERE main='$dp'   ORDER BY roll ASC") or die(mysql_error()); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count

// Multipe insert case
if(isset($_POST['submit'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total'];
	if($amt > 0) {
		$qry = "INSERT INTO subject(ayear,subject,department,year1,year2,extra,id,main) VALUES "; // Split the mysql_query
		for($i=1; $i<=$amt; $i++) {
			$qry .= "('".$_POST["subject$i"]."', '".nl2br($_POST["code$i"])."','".$_POST["dept$i"]."', '".$_POST["level$i"]."','".$_POST["term$i"]."','".$_POST["stat$i"]."','".$_POST["cv$i"]."','".$_POST["main$i"]."'), "; // loop the mysql_query values to avoid more server loding time
		}
		$qry 	= substr($qry, 0, strlen($qry)-2);
		$insert = mysql_query($qry) or die (mysql_error()); // Execute the mysql_query
		echo "<script>alert('Course Addition Succssfull')</script>";
	}
	// Redirect for each cases
	if($insert) {
		$msg = '<script type="text/javascript">window.location.href = "?view&result=added";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// subject delete case using checkboxes
if(isset($_POST['SubmitDelete'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$delete = mysql_query("DELETE FROM subject WHERE id = '".$_POST["delete$i"]."'"); // Run the delete query inside for loop
	}

	// Redirect for each cases
	if($delete) {
		$msg = '<script type="text/javascript">window.location.href = "?view";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// subject update case
if(isset($_POST['SubmitUpdate'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$update = mysql_query("UPDATE `subject` SET year_id='".$_POST["subject$i"]."', subject='".$_POST["codes$i"]."',year1= '".$_POST["levels$i"]."',year2='".$_POST["terms$i"]."',extra='".$_POST["stats$i"]."',id='".$_POST["cvs$i"]."',main='".$_POST["main$i"]."' WHERE `roll` = '".$_POST["id$i"]."'"); // Run the Mysql update query inside for loop
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
<meta name="keywords" content="subject insert in php, subject crud using PHP MySql, subject insert update delete using php mysql"/>
<meta name="description" content="subject insert update delete CRUD using PHP MySql. A simple way to insert, update and delete subject values at a time using PHP MySql"/>
<style>
.as_wrapper{
	margin:0 auto;
	width:90%;
	overflow:scroll;
	height:3000px;
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
	<h1 class="h1"><a href="">Add/Edit and Delete <?php echo $de; 
	@session_start();
	echo $user;
	 ?></a></h1>
   
	<div class="as_country_container">
	
    
    
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get" name="amtForm">
  <table class="table table-striped">        <tr>
            <td style="background:#1188aa; color:#fff; padding:10px 10px">Number  to add</td>
            <td><input type="text" name="amt" class="input" <?php if(isset($_GET["amt"])) { ?> value="<?php echo $_GET["amt"]; ?>" <?php } ?> />
            
            <input type="text" name="de" class="input" value="<?php echo $_GET["dept"]; ?>" readonly required>
     <input type="hidden" name="main" class="input" value="<?php echo $_GET["main"]; ?>" >          
              </td>
            <td><input type="submit" value="Generate"  />
           
            
            </td>
            <td style="background:#1188aa; padding:10px 10px"> <a class="a" href="?view=<?php echo $_SESSION['dept']; ?>" style="color:#fff">Delete </a></td>
            <td style="background:#1188aa; padding:10px 10px"> <a class="a" href="?update=<?php echo $_SESSION['dept']; ?>" style="color:#fff">Update </a></td>
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
            <table align="center" class="table" style="width:90%">
            <tr style="background:#1188aa; color:#fff">
                <td align="center">Sno</td>
                
                <td align="center">Course Title</td>
                <td align="center">Course code</td>
                <td align="center">Level</td>
                <td align="center">Semester</td>
                <td align="center">Status</td>
                <td align="center">Credit Value</td>
                <td align="center">Department</td>

                
            </tr>
            <?php
                // Loop the rows and inputs according to the amount
                for($i=1; $i<=$_GET['amt']; $i++) {
					
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><input type="text" name="subject<?php echo $i; ?>" style="width:300px" required  class="input"  /></td>
                 <td><input type="text" name="code<?php echo $i; ?>" style="width:120px"  class="input" required /></td>
                  <td><select name="level<?php echo $i; ?>" class="input" style="width:80px" required>
           <option value="100">100</option>
           <option value="200">200</option>
           <option value="300">300</option>
           <option value="400">400</option>
           <option value="500">500</option>
           <option value="600">600</option>
            <option value="700">700</option>                </select></td>
                   <td>
                   <select name="term<?php echo $i; ?>" class="input">
              <option value="1">First Semester</option>
             <option value="2">Second Semester</option>
             <option value="3">Third Semester</option>                </select>
                   </td>
                     <td><input type="text" name="stat<?php echo $i; ?>" style="width:80px"  class="input"  /></td>
                    <td><input type="text" name="cv<?php echo $i; ?>" style="width:80px"  class="input"  /></td>
                <td><input type="text" name="dept<?php echo $i; ?>"   style="width:200px"  value="<?php 
  echo $_GET['de'];
?>" readonly class="input" />
<td><input type="hidden" name="main<?php echo $i; ?>"    value="<?php 
  echo $_GET['main'];
?>" readonly class="input" />
               </td> 
               
                              
               
             
                              
                
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
            <table align="center" class="table_view" style="width:100%">
            <tr class="heading">
                <th>&nbsp;</th>
                <th>Sno</th>
                 <th>Course Title</th>
                <th>Course code</th>
                <th>Level</th>
                <th>Semester</th>
                <th>Status</th>
                <th>Credit Value</th>
                <th>Department</th>

                

            </tr>
            <?php
                while($row = mysql_fetch_array($query))
                {
                    $i = $i + 1;
            ?>
            <tr class="<?php if($i%2 == 0) { echo "odd"; } else{ echo "even"; } ?>">
                <td><input type="checkbox" name="delete<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><?php echo $i; ?></td>
                <td> <?php echo $row['ayear']; ?></td>
                <td> <?php echo $row['subject']; ?></td>
              <td> <?php echo $row['year1']; ?></td>
              <td> <?php echo $row['year2']; ?></td>
              <td> <?php echo $row['extra']; ?></td>
              <td> <?php echo $row['id']; ?></td>
               <td> <?php echo $row['main']; ?></td>
               
                
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
            <table align="center" style="width:100%">
           <tr style="background:#1188aa; color:#fff">
                <td align="center">Sno</td>
                 <td align="center">Course Title</td>
                <td align="center">Course code</td>
                <td align="center">Level</td>
                <td align="center">Semester</td>
                <td align="center">Status</td>
                <td align="center">Credit Value</td>
                <td align="center">Department</td>

                
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><input type="text" name="subject<?php echo $i; ?>" value="<?php echo $row['ayear']; ?>" class="input" style="width:300px"  /></td>
                <td><input type="text" name="codes<?php echo $i; ?>" value="<?php echo $row['subject']; ?>" class="input" style="width:100px"  /></td>
                 <td><input type="text" name="levels<?php echo $i; ?>" value="<?php echo $row['year1']; ?>" class="input" style="width:100px"  /></td>
                 
            <td><input type="text" name="terms<?php echo $i; ?>" value="<?php echo $row['year2']; ?>" class="input" style="width:100px"  /></td>
            
             <td><input type="text" name="stats<?php echo $i; ?>" value="<?php echo $row['extra']; ?>" class="input" style="width:100px"  /></td>
             
              <td><input type="text" name="cvs<?php echo $i; ?>" value="<?php echo $row['id']; ?>" class="input" style="width:80px"  /></td>
              
               <td><input type="text" name="main<?php echo $i; ?>" value="<?php echo $row['main']; ?>" class="input" style="width:200px" readonly  /></td>
                
                

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