


<?php
/**
Simple rooms Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/rooms-insert-update-using-php-mysql-delete-rooms-Registry-using-checkboxes-in-php/
**/
include '../../includes/dbc.php'; // include the database and server connection file


$FG=$conn->query("SELECT * from levels,students where students.id='".$_GET['code']."'  AND students.level_id=levels.id 
") or die (mysqli_error($conn));
 while($io=$FG->fetch_assoc()){
	$yname=$io['fname'];
	$l_name=$io['levels'];
	 $ayear=$io['year_id'];
	 $dept=$io['dept_id'];
	$code=$io['matricule'];
 }
$query 	= $conn->query("SELECT * FROM `my_marks` where matric='".$code."'  and year_id='$ayear'  order by id DESC") or die(mysqli_error($conn)); // Select from the table
$count 	= $query->num_rows; // Get the rows count

// Multipe insert case
if(isset($_POST['submit'])) {
	
	

	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total'];
	if($amt > 0) {

	
		$qry = "INSERT INTO  my_marks(code,sem,ca,exam,matric,dept_id,year_id,level_id,cv) VALUES "; // Split the mysql_query
		for($i=1; $i<=$amt; $i++) {	
			
$query 	= $conn->query("SELECT * FROM `my_marks` where matric='".$_POST["matric$i"]."'  and year_id='".$_POST["ayear$i"]."' and sem='".$_POST["sem$i"]."' and code='".$_POST["code$i"]."' and level_id='".$_POST["level$i"]."'") or die(mysqli_error($conn)); // Select from the table
$counts 	=$query->num_rows; // Get the rows count
if($counts>0){
	echo "<script>alert(' ".$_POST["code$i"]." has already being recorded')</script>";
	
echo '<meta http-equiv="Refresh" content="0; url=index.php?code='.$_GET['code'].'">';	
}
else {

			$qry .= "('".$_POST["code$i"]."','".$_POST["sem$i"]."', '".$_POST["ca$i"]."','".$_POST["exam$i"]."', '".$_POST["matric$i"]."','".mysqli_real_escape_string($conn,$_POST["dept$i"])."','".mysqli_real_escape_string($conn,$_POST["ayear$i"])."','".$_POST["level$i"]."','".$_POST["cv$i"]."' ), "; // loop the mysql_query values to avoid more server loding time
}
		}
		$qry 	= substr($qry, 0, strlen($qry)-2);
		$insert = $conn->query($qry) or die(mysqli_error($conn)); // Execute the mysql_query
		
echo '<meta http-equiv="Refresh" content="0; url=index.php?view&code='.$_GET['code'].'">';	
		echo "<script>alert(' SUCCESSFULL')</scritp>";
		
	}
	// Redirect for each cases
	if($insert) {
	$msg = '<script type="text/javascript">window.location.href = "?view&result=added&code='.$_GET['code'].'&mat='.$_GET['mat'].'";</script>';
	}
	else {
		$msg = '<script type="text/javascript">window.location.href = "?view&result=added&code='.$_GET['code'].'&mat='.$_GET['mat'].'";</script>';
	}
}

// rooms delete case using checkboxes
if(isset($_POST['SubmitDelete'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$delete = mysql_query("DELETE FROM mycerti WHERE id = '".$_POST["delete$i"]."'"); // Run the delete query inside for loop
	}

	// Redirect for each cases
	if($delete) {
		$msg = '<script type="text/javascript">window.location.href = "?view&result=added&code='.$_GET['code'].'&mat='.$_GET['mat'].'";</script>';
	}
	else {
	$msg = '<script type="text/javascript">window.location.href = "?view&result=added&code='.$_GET['code'].'&mat='.$_GET['mat'].'";</script>';
	}
}

// rooms update case
if(isset($_POST['SubmitUpdate'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$update = mysql_query("UPDATE `mycerti` SET `subject` = '".$_POST["subject$i"]."', grade= '".$_POST["grade$i"]."', certia = '".$_POST["certia$i"]."', certib = '".$_POST["certib$i"]."' WHERE `id` = '".$_POST["id$i"]."'"); // Run the Mysql update query inside for loop
	}
	
	// Redirect for each cases
	if($update) {
		$msg = '<script type="text/javascript">window.location.href = "?view&result=added&code='.$_GET['code'].'&mat='.$_GET['mat'].'";</script>';
	}
	else {
	$msg = '<script type="text/javascript">window.location.href = "?view&result=added&code='.$_GET['code'].'&mat='.$_GET['mat'].'";</script>';
	}
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Editting Powered by Nishang Systems</title>


<style>
.as_wrapper{
	margin:0 auto;
	width:1000px;
	font-family:Arial;
	color:#333;
	font-size:14px;
	height:2000px;

	overflow:scroll;
	padding-bottom:30px;
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
h2{
	border:2px solid#F00;
	text-align:center;
	color:#03C;
}
</style>
</head>

<body>
	<h2 class="h1">Recording <span style="color:#00F"><?PHP echo $yname; ?></span>   Level <?php echo $l_name; ?> Marks</h2>
   <span style="color:#f00"> 1. Please no appostofix ( ' or ") are allowed</span>
    </p
    >
	<?php
    echo $msg; // Display the result message generated in the above PHP actions,
    //Create form to get number of rows to be generated to insert 
    ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>?code=<?php echo $_GET['code']; ?>&mat=<?php echo $_GET['mat']; ?>" method="POST" name="amtForm">
        <table align="center">
        <tr>
            <td style="background:#1188aa; color:#fff; padding:10px 10px">Paased in how many subjects?</td>
            <td><input type="text" name="amt" class="input" <?php if(isset($_POST["amt"])) { ?> value="<?php echo $_POST["amt"]; ?>" <?php } ?> /></td>
            <td><input type="submit" value="Generate"  /></td>
            <td style="background:#1188aa; padding:10px 10px">| <a class="a" href="?view&code=<?php echo $_GET['code']; ?>&mat=<?php echo $_GET['mat']; ?>" style="color:#fff">View All Registry</a></td>
        </tr>
        </table>
        <br />
        </form>
        <?php
        // Get the amount to be generated
        if(isset($_POST['amt'])) {
			if($_POST['amt'] > 0) {
        ?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center" class="table" style="width:500px">
            <tr>
                <td align="center">Sno</td>
                <td align="center">Course <BR>Code</td>
                <td align="center">Semester</td>
                <td align="center">CA</td>
                <td align="center">Exams</td>
                 <td align="center">Credit</td>
                <td align="center">Matricule</td>
                <td align="center">Program</td>
                
                <td align="center">School<br>Year</td>
            </tr>
            <?php
                // Loop the rows and inputs according to the amount
                for($i=1; $i<=$_POST['amt']; $i++) {
					
					$FG=$conn->query("SELECT * from levels,special,years,students where students.id='".$_GET['code']."'  AND students.level_id=levels.id AND levels.id=students.level_id AND years.id=students.year_id ") or die (mysqli_error($conn));
 while($io=$FG->fetch_assoc()){
	$yname=$io['fname'];
	$l_name=$io['level_id'];
	 $ayear=$io['year_id'];
	 $y_name=$io['year_name'];
	 $dept=$io['dept_id'];
	 $dept_name=$io['prog_name'];
	$matric=$io['matricule'];
 }
					
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><input type="text" name="code<?php echo $i; ?>"  class="input" style="width:85px" />
                </td>
                 <td>
                 
                 <select name="sem<?php echo $i; ?>" class="input" required>
                 <option></option>
               <option value="1">First</option>

                 <option value="2">Second</option>
                 <option value="3">Resits</option>
                 </select>

                </td>
                
                 <td><input type="text" name="ca<?php echo $i; ?>"  class="input" style="width:40px"  />
                </td>
                <td><input type="text" name="exam<?php echo $i; ?>"  class="input" style="width:40px" required />
                </td>
                
                 <td><input type="text" name="cv<?php echo $i; ?>"  class="input" style="width:40px" required />
                </td>
                 <td><input type="text" name="matric<?php echo $i; ?>" style="width:130px" class="input" value="<?php echo $matric; ?>" readonly />
                </td>
                
                  <td>
                  
                 <select name="dept<?php echo $i; ?>" class="input" required>
                 <option value="<?php echo $dept; ?>"><?php echo $dept_name; ?></option>
                 </select>
                 
                </td>
                
               
                 <td>
                    <select name="ayear<?php echo $i; ?>" class="input" required>
                 <option value="<?php echo $ayear; ?>"><?php echo $y_name; ?></option>
                 </select>
                </td>
                
                <input type="hidden" name="level<?php echo $i; ?>" class="input" style="width:40px"  value="<?php echo $l_name; ?>" readonly />
               
                
                
               
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
                <td>No Registry found!</td>
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
            <td></td>
                <td align="center">Sno</td>
                <td align="center">Subject</td>
                <td align="center">Sem</td>
                <td align="center">Ca</td>
                 <td align="center">Exams</td>
               
                <td align="center">School Year</td>
                <td align="center">Level</td>
               

            </tr>
            <?php
                while($row = $query->fetch_assoc())
                {
                    $i = $i + 1;
            ?>
            <tr class="<?php if($i%2 == 0) { echo "odd"; } else{ echo "even"; } ?>" style="text-align:center">
                <td>#</td>
                <td><?php echo $i; ?></td>
                <td> <?php echo $row['code']; ?></td>
                <td><?php echo $row['sem']; ?></td>
                 <td> <?php echo $row['ca']; ?></td>
                <td><?php echo $row['exam']; ?></td>
                
                <td><?php echo $row['ayear']; ?></td>
                 <td><?php echo $row['levels']; ?></td>
                 
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
                <td>No Registry found!</td>
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
                <td align="center">Subject</td>
                <td align="center">Grade</td>
                <td align="center">Certificate</td>
                <td align="center">School</td>
                
                
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><input type="text" name="subject<?php echo $i; ?>" value="<?php echo $row['subject']; ?>" class="input"  /></td>
                
                
                <td><input type="text" name="grade<?php echo $i; ?>" value="<?php echo $row['grade']; ?>" class="input" /></td>
                 <td><input type="text" name="certia<?php echo $i; ?>" value="<?php echo $row['certia']; ?>" readonly class="input"  /></td>
                
                
                <td><input type="text" name="certib<?php echo $i; ?>" value="<?php echo $row['certib']; ?>" class="input" /></td>
               
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