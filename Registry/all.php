<?php

    






// output headers so that the file is downloaded rather than displayed

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

fputcsv($output, array('Name','Program','Matricule','Academic Year','Level','Nationality'));
$year=date('Y');

// fetch the data
mysql_connect('localhost', 'nishang', 'google1234');
mysql_select_db('2019_university');

$rows = mysql_query("SELECT fname,departmet,matricule,db1,levels,cxx4 from courses where  db1='".$_GET['ayear']."'  order by departmet") or die(mysql_error());
// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);















?>