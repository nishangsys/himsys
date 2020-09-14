<?php

    





header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

$dept=$_GET['dept'];
$level=$_GET['level'];
	$year_id=$_GET['ayear'];;
// output the column headings
fputcsv($output, array('Student Name',' Amount Owed','Academic Year','Program'));

// fetch the data
mysql_connect('localhost', 'nishang', 'google1234');
mysql_select_db('university');
$rows = mysql_query("SELECT student_name,balance,ayear,class from historic where   year_id='".$_GET['ayear']."'   order by class ");

// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);















?>