<!DOCTYPE html>
<html>
<head>
	<title>
		How To Create Import CSV/Excel File To MySQL Database Using PHP
	</title>
	
<style type="text/css">
body {
	width:700px;
	margin:auto;
}
label {
	color: blue;
    font-size: 18px;
    font-weight: bold;
    font-family: cursive;
    margin-right: 10px;
}
input[type="file"] {
	border: blue 1px solid;
    padding: 8px;
    color: blue;
    font-size: 15px;
    border-radius: 4px;
    margin-right: 10px;
	cursor:pointer;
}
button {
    font-size: 18px;
    border: blue 1px solid;
    font-weight: bold;
    padding: 8px;
    background: azure;
    color: blue;
    border-radius: 4px;
	cursor:pointer;
}
div {
	border: blue 1px solid;
    padding: 15px;
    text-align: center;
    border-radius: 4px;
    background: azure;
}
table {
	width: 100%;
    text-align: center;
    font-size: 18px;
    font-family: cursive;
    border: blue 1px solid;
    background: azure;
}
th {
	color:red;
}
td {
	color:blue;
}
</style>

</head>

<body>

<br />
<br />

<form action="import_query.php" method="post" name="upload_excel" enctype="multipart/form-data">
<div>
	<label>Import CSV/Excel File:</label>
	<input type="file" multiple name="filename" id="filename">
	<button type="submit" id="submit" name="submit" data-loading-text="Loading...">Upload</button>
</div>
</form>

<br />
<br />

<table border="1" cellspacing="5" cellpadding="5">
	<thead>
		<tr>
			<th>UserName</th>
			<th>FirstName</th>
			<th>LastName</th>
			<th>Date Added</th>
		</tr>
	</thead>
<?php
include ('database.php');
$result= mysql_query("select * from user order by user_id ASC") or die (mysql_error());
while ($row= mysql_fetch_array ($result) ){
$id=$row['user_id'];
?>

	<tbody>
		<tr>
			<td><?php echo $row['user_name']; ?></td>
			<td><?php echo $row['first_name']; ?></td>
			<td><?php echo $row['last_name']; ?></td>
			<td><?php echo date("M d, Y h:i:s a",strtotime($row['date_added'])); ?></td>
		</tr>
	</tbody>

<?php } ?>
</table>

</body>

</html>