<?php

    






// output headers so that the file is downloaded rather than displayed
$dbtable = "stocks";
$db='hotels';
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('Bank Name','Bank Acc Number','Initial Deposit','Amount Deposited','Amount Withdrawn','Total Amt in Account','Date','Academic Year'));

// fetch the data
mysql_connect('localhost', 'nishang', 'google1234');
mysql_select_db('hims_finance');
$rows = mysql_query("SELECT name,num,formals,currents,withdrawn,newtot,date,year FROM bank_records where name='".$_GET['bank']."' order by id DESC ");

// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);















?>