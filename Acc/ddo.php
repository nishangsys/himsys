<?php

    






// output headers so that the file is downloaded rather than displayed

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

fputcsv($output, array('Name','Program','Matricule','Academic Year'));
$year=date('Y');

// fetch the data
mysql_connect('localhost', 'nishang', 'google1234');
mysql_select_db('university');
$rows = mysql_query("SELECT fname,departmet,matricule,year_id from students where  year_id='".$_GET['year']."' and departmet='".$_GET['list']."' order by fname") or die(mysql_error());
// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);















?>