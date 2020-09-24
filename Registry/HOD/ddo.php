<?php

    
// fetch the data
mysql_connect('localhost', 'nishang', 'google1234');
mysql_select_db('2019_university');
$a = mysql_query("SELECT * from courses where roll='".$_GET['id']."' ") or die(mysql_error());
while($dd=mysql_fetch_assoc($a)){
 $dept=$dd['departmet'];
  
}


// output headers so that the file is downloaded rather than displayed

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename='.$dept.' Level '.$_GET['level'].' of '.$_GET['ayear'].' .csv');
// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

fputcsv($output, array('Name','Matricule'));
$year=date('Y');


$rows = mysql_query("SELECT fname,matricule from courses where  db1='".$_GET['ayear']."' and departmet='".$dept."' and levels='".$_GET['level']."' order by fname") or die(mysql_error());
// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);















?>