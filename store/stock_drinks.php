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
	<h1 class="h1" style="font-size:14px">You are Adding Drinks to the Ware House</h1>
    
    <a class="btn btn-primary" href="add_drinks.php" target="_blank"  style="text-decoration:none; color:#fff; padding:5px 10px">Click Here To Add Drink</a>
  
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                                    <th style="text-align:center;">Product</th>
                                    <th style="text-align:center;">Category</th>
                                    <th style="text-align:center;">Cost Price</th>
                                    <th style="text-align:center;">Selling Price</th>
                                    <th style="text-align:center;">Quantity</th>
									<th style="text-align:center;">Barcode</th>
                                <th style="text-align:center;">Action</th>

                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("select * from stocks order by product ASC" ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['pro_id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['product']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['category']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['month']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['price']; ?></td>
								<td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $row ['quatity']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['barcode']; ?></td>

								<td style="text-align:center; width:400px;">
									<a href="edit.php<?php echo '?id='.$id; ?>" class="btn btn-info" style="text-decoration:none; color:#fff; float:left; margin-left:5px">Edit</a>
									 <a href="delete.php?id=<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" style="text-decoration:none; color:#fff; float:left; margin-left:5px" >Delete </a>
									<a href="WHEDIT/list_user.php" target="_blank" class="btn btn-info" style="text-decoration:none; color:#fff">Multiple </a>

                                
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