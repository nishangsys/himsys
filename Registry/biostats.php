<?php

    


// fetch the data
mysql_connect('localhost', 'nishang', 'google1234');
mysql_select_db('university');
$a = mysql_query("SELECT * from courses where roll='".$_GET['id']."' ") or die(mysql_error());
while($dd=mysql_fetch_assoc($a)){
  $dept=$dd['departmet'];
}



// output headers so that the file is downloaded rather than displayed

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename='. $dept.'.csv');
// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

fputcsv($output, array('Name','Matricule','Nationality','Place of Birth','Date of Birth','Program','Level'));
$year=date('Y');


//$rows = mysql_query("SELECT fname,matricule,cxx4,cxx1,cxx2  from courses where  db1='".$_GET['ayear']."' and departmet='".$dept."' and levels='".$_GET['level']."' order by fname") or die(mysql_error());
$rows = mysql_query("SELECT fname,matricule,cxx4,cxx1,cxx2,departmet,sex,levels  from courses where  db1='".$_GET['ayear']."' and levels='".$_GET['level']."' and departmet='".$dept."'  order by departmet,fname") or die(mysql_error());
// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);















?>