<?php

    






// output headers so that the file is downloaded rather than displayed

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

$dept=$_GET['dept'];
	$year_id=$_GET['year_id'];;
// output the column headings
fputcsv($output, array('Student Name','Matricule','Department','Level','School year'));

// fetch the data
mysql_connect('localhost', 'nishang', 'google1234');
mysql_select_db('university');
$rows = mysql_query("select  students.fname as fname,students.matricule, special.prog_name , levels.levels as levels,
  years.year_name as ayear  from levels,special,years,students  where students.level_id='".$_GET['level']."' AND students.year_id='".$_GET['year_id']."' AND students.level_id=levels.id and students.dept_id=special.id  AND students.year_id=years.id ");
// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);















?>