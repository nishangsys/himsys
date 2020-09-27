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
$rows = mysql_query("select  * from students,levels,special,years,fee_paymts WHERE fee_paymts.balance>0 AND fee_paymts.matric=students.matricule AND fee_paymts.yearid=years.id AND  fee_paymts.level_id=levels.id AND fee_paymts.program_id=special.id   and fee_paymts.yearid='".$_GET['year_id']."'  GROUP BY students.matricule order by students.fname ");

// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);















?>