<?php


//include '../dbc.php';



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>NSMS</title>
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
		
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
     
</head>
<script src="modal/js1/jquery1.js" type="text/javascript"></script>
<script src="modal/js1/bootstrap1.js" type="text/javascript"></script>



<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

<body>
<div class="as_wrapper">
	<h1 class="h1" style="font-size:14px">PRINT A COPY OF SALARIES PAYMENTS DETAILS</h1>
    
  
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
                                 <th style="text-align:center;" >S/N</th>
                                    
                                    <th style="text-align:center;">Department</th>
                                    <th style="text-align:center;">Period</th>
                                   <th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
								$year=date('Y');
								echo $month=date('m');
								
								$result= mysql_query("SELECT * FROM payslips where dept!='POLICLINIC' GROUP BY month,year order by Id DESC" ) or die (mysql_error());
								$i=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								#D9EDF7
								?>
								<tr>
                                
             <td style="text-align:center; word-break:break-all; width:10px;"> <?php echo $i++; ?></td>

								
								<td style="text-align:center; word-break:break-all; width:470px;"> Print a copy for the month of <?php echo $row ['thismonth']; ?>  </td>
								<td style="text-align:center; word-break:break-all; width:230px;"> <?php echo $row ['thismonth']; ?> <?php echo $row ['year']; ?></td>
								

								<td style="text-align:center; width:350px;">
                            <a href="printmonth_print.php?month=<?php echo $row['month']; ?>&this=<?php echo $row ['thismonth']; ?> &year=<?php echo $row ['year']; ?> " target="_blank" class="btn btn-info" style="color:#fff">Print a Copy</a>

						|  <a href="printmonth_printc.php?month=<?php echo $row['month']; ?>&this=<?php echo $row ['thismonth']; ?> &year=<?php echo $row ['year']; ?> " target="_blank" class="btn btn-primary" style="color:#fff">Contract Workers</a>
			</td>
									
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
								<a href="delete.php<?php echo '?student_id='.$id; ?>" class="btn btn-danger">Yes</a>
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
                                
                                
								<?php if($row['photo'] != ""): ?>
								<img src="../staffs/album/<?php echo $row['photo']; ?>" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php else: ?>
								<img src="../staffs/album/default.png" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
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
    
</body>
</html>

<?php
	
?>