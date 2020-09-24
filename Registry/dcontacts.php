<?php

    






// output headers so that the file is downloaded rather than displayed

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

fputcsv($output, array('Name','Program','Tele Num'));
$year=date('Y');

// fetch the data
mysql_connect('localhost', 'nishang', 'google1234');
mysql_select_db('school_finance');

$rows = mysql_query("SELECT names,choiceone,tel from gen_info where  fax='".$_GET['list']."'  order by names") or die(mysql_error());
// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);















?>