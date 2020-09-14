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
fputcsv($output, array('Student Name','Level','Expected Amount','Amount Paid','Amount Owed'));

// fetch the data
mysql_connect('localhost', 'nishang', 'google1234');
mysql_select_db('university');
$rows = mysql_query("SELECT student_name,time,expected_amount,amount_paid,balance from historic WHERE year_id='$ayear' and class='$dept'   order by student_name ");

// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);















?>