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
	<h1 class="h1" style="font-size:14px">Today <?php echo date('F d -Y'); ?> Supply Activities</h1>
    
  
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                                    <th style="text-align:center;">Sentto</th>
                                    <th style="text-align:center;">Description</th>
                                    <th style="text-align:center;">Model</th>
                                    <th style="text-align:center;">Destination</th>
                                    <th style="text-align:center;">Qty</th>
                                    
                                      <th style="text-align:center;">Receiver</th>



                                </tr>
                            </thead>
                            <tbody>
								<?php
								$today=date('d-m-Y');
								
								$result= mysql_query("select SUM(receive),sentto,date,discribe from dept_stocks GROUP BY sentto,date order by id desc" ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['sentto']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['discribe']; ?></td>
								<td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $row ['model']; ?></td>
                            <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['sentto']; ?></td>

								<td style="text-align:center; word-break:break-all; width:60px;"> <?php echo $row ['SUM(receive)']; ?></td>
                              
    <td style="text-align:center; word-break:break-all; width:400px;">  <a href="DA4.php?name=<?php echo $row ['sentto']; ?>&date=<?php echo $row ['date']; ?>" target="new">Print A 4</a> |  <a href="Dprec.php?name=<?php echo $row ['sentto']; ?>&date=<?php echo $row ['date']; ?>" target="new">Print B 4</a> </td>


									
								
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