<?php

$month=$_POST['month'];

$year=$_POST['year'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>NSMS</title>
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
		
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
        
        <link href="../assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">

     
</head>
<script src="modal/js1/jquery1.js" type="text/javascript"></script>
<script src="modal/js1/bootstrap1.js" type="text/javascript"></script>



<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

<body>
<div class="as_wrapper">
	  
<h1 style="font-size:16px"><?php echo $clients; ?> Attendance Records for  <?php echo $month; ?>/<?php echo $year; ?>  | <a href="our_attend.php?month=<?php echo $month; ?>&thismonth=<?php echo $row ['thismonth']; ?>&year=<?php echo $year; ?>&name=<?php echo $_GET['name']; ?>" target="new"  class="btn btn-info" style="color:#fff">Print A copy</a></h1>

    
  
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th> 
                                    
                                    <th style="text-align:center;">Employee</th>
                                    <th style="text-align:center;">Matricule</th>
                                        <th style="text-align:center;">Minutes Spent</th>
                                
                                    <th style="text-align:center;">Hours Spent</th>
                                    <th style="text-align:center;">Days Present</th>
                                    <th style="text-align:center;">Permission </th>
                                     <th style="text-align:center;">Action </th>
                              
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("SELECT SUM(used),SUM(shift),COUNT(date),date,name,matric,permit,month,year FROM staff_reg  where month='$month' and year='$year'  GROUP BY matric,month order by name,id" ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['pro_id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row['name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:100px;"><?php echo $row['matric']; ?></td>
								<td style="text-align:center; word-break:break-all; width:140px;"> <?php echo $row['SUM(shift)']; ?></td>
								<td style="text-align:center; word-break:break-all; width:140px;"><?php echo $row['SUM(used)']; ?></td>
								<td style="text-align:center; word-break:break-all; width:40px;"> 
								<?php  $R=mysql_query("SELECT COUNT(date) as totalatt from staff_reg where matric='".$row['matric']."' and month='".$row['month']."' and year='".$row['year']."' GROUP BY date") or die(mysql_error());
					echo $counts=mysql_num_rows($R);
  /* 
   while($ty=mysql_fetch_assoc($R)){
	   echo $totsm=$ty['totalatt'];
   };*/ ?></td>
					
                			<td style="text-align:center; word-break:break-all; width:40px;"> <?php echo $row['permit']; ?></td>
                            <td style="text-align:center; word-break:break-all; width:120px;">  <a href="?view=<?php echo $row ['matric']; ?>&month=
									<?php echo $row ['month']; ?>&thismonth=<?php echo $row ['thismonth']; ?>&year=<?php echo $row ['year']; ?>&name=<?php echo $row['name']; ?>"  class="btn btn-info" style="color:#fff">View Records</a></td>
					              
									
										<!-- Modal -->
								<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								<h3 id="myModalLabel">Delete</h3>
								</div>
								<div class="modal-body">
								<p><div class="alert alert-danger">Are you Sure you want Delete?</p>
								</div>
								<hr>
								<div class="modal-footer">
								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
								<a href="delete.php<?php echo '?pro_id='.$id; ?>" class="btn btn-danger" >Yes</a>
								</div>
								</div>
								</div>
								</tr>

								<!-- Modal Bigger Image -->
								<div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">

								<h3 id="myModalLabel"><b><?php echo $row['fname']." ".$row['lname']; ?></b></h3>
								</div>
								<div class="modal-body">
								<?php if($row['location'] != ""): ?>
								<img src="upload/<?php echo $row['location']; ?>" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php else: ?>
								<img src="images/default.png" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php endif; ?>
								</div>
								<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
								</div>

								<?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>

</div>
</body>
</html>

<?php
	
?>