<?php
include  '../includes/dbc.php';

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipt</title>
<link href="style.css" type="text/css" rel="stylesheet" />

<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmission.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="../assets/css/layout2.css" rel="stylesheet" />
       <link href="../assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <link rel="stylesheet" href="../assets/plugins/timeline/timeline.css" />
<style type="text/css">
  @page { size: portrait; }
  .sub{
	  width:600px;
	  height:900px;
	 
	  margin:auto;
	  
  }
  
  .he
  .head1{
	  width:100%;
	  height:auto;
	 
  }
  
   .head2{
	  width:100%;
	  height:auto;
	
	  padding-bottom:20px;
  }
</style>
</head>

<!---
<input type="button" value="Print Ticket"
onClick="window.print()"/>
------>
<body onload="window.print();">




<?php include '../includes/header.php'; ?>

<br />

  <?php  $d=$conn->query("SELECT * from levels,special,years,students  where  students.level_id=levels.id and students.dept_id='".$_GET['prog_id']."' and students.year_id='".$_GET['year_id']."' and students.dept_id=special.id  AND  level_id='".$_GET['level_id']."' AND students.year_id=years.id GROUP BY students.year_id order by students.fname ") or die(mysqli_error($conn));
	 while($rows=$d->fetch_assoc()){
	  ?>    
 <h3><?php echo $rows['prog_name']; ?> Class Lists For <?php echo $rows['year_name'] ?>  </h3>
 <?php } ?>
 
 
 
     <?php  $d=$conn->query("SELECT * from levels,special,years,students  where  students.level_id=levels.id and students.dept_id='".$_GET['prog_id']."' and students.year_id='".$_GET['year_id']."' and students.dept_id=special.id  AND  level_id='".$_GET['level_id']."' AND students.year_id=years.id order by students.fname ") or die(mysqli_error($conn));
	 $i=1;
	  ?>    
  <table class="table table-bordered" style="width:90%; margin:auto;">
    <thead>
      <tr>
        <th>#</th>
        <th>Names</th>
        <th>Matricule</th>
      </tr>
    </thead>
    
    <tbody>
    <?php  while($bu=$d->fetch_assoc()){ ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td style="padding:5px 5px; text-align:left"><?php echo $bu['fname']; ?></td>
        <td><?php echo $bu['matricule']; ?></td>
      <?php } ?>
    </tbody>
  </table>
    
    

</body>
</html>




