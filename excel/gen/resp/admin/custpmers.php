<?php

require_once '../functions/functions.php';


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>NSMS</title>
 <link href="../reception/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
     
        <link rel="stylesheet" type="text/css" href="../reception/css/DT_bootstrap.css">
		
        <link href="../reception/modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
        
        <link href="../reception/assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
        <link href="../reception/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">

     
</head>
<script src="../reception/modal/js1/jquery1.js" type="text/javascript"></script>
<script src="../reception/modal/js1/bootstrap1.js" type="text/javascript"></script>



<script src="../reception/js/jquery.js" type="text/javascript"></script>
<script src="../reception/js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="../reception/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="../reception/js/DT_bootstrap.js"></script>

<body>
<div class="right">
<div class="as_wrapper">
	<h1 class="h1" style="font-size:14px">You are Adding Drinks to the Ware House</h1>
    
  
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th> 
                         
                             <th  style="text-align:center;">Name</th>
			<th style="text-align:center;">Tel No</th>
			<th style="text-align:center;">Date of Birth</th>
            <th style="text-align:center;">Nationality</th>
            <th style="text-align:center;">Email </th>
            <th style="text-align:center;">ID/Passport No</th>

                                 
                          

                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("SELECT stu_name, tel,dor,pof, email,innum FROM customers group by stu_name ORDER BY stu_name " ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['pro_id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
						
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row['stu_name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:140px;"><?php echo $row['tel']; ?></td>
								<td style="text-align:center; word-break:break-all; width:90px;"> <?php echo $row['dor']; ?></td>
                                			<td style="text-align:center; word-break:break-all; width:180px;"> <?php echo $row['pof']; ?></td>
                                            
                                            <td style="text-align:center; word-break:break-all; width:140px;"> <?php echo $row['email']; ?></td>
                                			<td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $row['innum']; ?></td>

							
                              
									
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