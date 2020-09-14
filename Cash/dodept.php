<?php

    






// output headers so that the file is downloaded rather than displayed
$dbtable = "stocks";
$db='hotels';
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('Students Name','Department','Level','Cash Payment','Bank Payments','Sector','Date','Academic Year'));

// fetch the data
mysql_connect('localhost', 'nishang', 'google1234');
mysql_select_db('hims_finance');
$rows = mysql_query("SELECT staffname,room,area,rec,amt,purpose,date,year FROM daily where reason='".$_GET['type']."' and room='".$_GET['dept']."'  ");

// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);















?>