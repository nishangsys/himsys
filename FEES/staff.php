<?php

    






// output headers so that the file is downloaded rather than displayed
$dbtable = "stocks";
$db='hotels';
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

$dept=$_POST['dept'];
$level=$_POST['level'];
	$year_id=$_POST['ayear'];;
	$feeamt=$_GET['feeamt'];;
// output the column headings
fputcsv($output, array('Staff Name','Matricule'));

// fetch the data
mysql_connect('localhost', 'nishang', 'google1234');
mysql_select_db('staffs');
$rows = mysql_query("SELECT name,matric from staffs WHERE dept!='POLICLINIC' and   banned!='2'  order by name ");

// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);















?>