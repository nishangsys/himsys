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

<div class="receipt"> 


<?php include '../includes/header.php'; ?>

<br />
 <h3><?php echo $_GET['print_list'] ?> Lists of Successful Candidates for <?php echo $_GET['year'] ?>  </h3>
     <?php  $d=$conn->query("SELECT  * FROM students where departmet='".$_GET['print_list']."' and year_id='".$_GET['year']."' order by fname") or die(mysqli_error($conn));
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
        <td><?php echo $bu['fnames']; ?></td>
        <td><?php echo $bu['matricule']; ?></td>
      <?php } ?>
    </tbody>
  </table>
    
    

</body>
</html>




