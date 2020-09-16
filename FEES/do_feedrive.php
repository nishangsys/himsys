<?php

    






// output headers so that the file is downloaded rather than displayed
$dbtable = "stocks";
$db='hotels';
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

$dept=$_GET['dept'];
$level=$_GET['level'];
	$year_id=$_GET['year_id'];;
	$feeamt=$_GET['feeamt'];;
// output the column headings
fputcsv($output, array('Student Name','Matricule','Department','Level','Expected Amount','Amount Paid','Amount Owed','School year'));

// fetch the data
mysql_connect('localhost', 'nishang', 'google1234');
mysql_select_db('university');
$rows = mysql_query("select  students.fname as fname,students.matricule, special.prog_name , levels.levels as levels,
 fee_paymts.expected_amount as expected_amount,fee_paymts.fee_amt as fee_amt,
 fee_paymts.balance as owed,years.year_name as ayear  from levels,special,students,
 fee_paymts,years where  fee_paymts.yearid='$year_id' AND levels.id=fee_paymts.level_id 
 AND special.id=fee_paymts.program_id AND fee_paymts.program_id='$dept' AND fee_paymts.level_id='$level' AND fee_paymts.balance>='$feeamt'   AND years.id=fee_paymts.yearid
AND students.matricule=fee_paymts.matric AND fee_paymts.yearid=students.year_id  order by fee_paymts.id ");

// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);















?>