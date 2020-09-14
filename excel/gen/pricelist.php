
<?php
include '../dbc.php';
$areas=$_GET['area'];
if($areas==15){

	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	$page='restaupage.php';
	
}
if($areas==10){
		 $areas;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
	$serial='Restau';
	$db_basket='restau_basket';
	$page='restaupage.php';
	
}
if($areas==2){
		 $areas;

	$a_area='2';
	$page='../bauca/baucapage.php';
	$db_table='bauca_tables';
	$serial='Bouccarau';
	$db_basket='bauca_basket';
	$page='baucapage.php';
	
}
if($areas==18){
		 $areas;

	$a_area='18';
	
	
	$a_area='18';
	$page='../bauca/clubpage.php';
	$db_table='other_tables';
	$serial='VIP';
	$db_basket='other_basket';
	$page='clubpage.php';

	
}
?>




<?php


//include '../dbc.php';



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>NSMS</title>
 <link href="../chiefs/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
        <link rel="stylesheet" type="text/css" href="../chiefs/css/DT_bootstrap.css">
		
        <link href="../chiefs/modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
     
</head>
<script src="../chiefs/modal/js1/jquery1.js" type="text/javascript"></script>
<script src="../chiefs/js1/bootstrap1.js" type="text/javascript"></script>



<script src="../chiefs/js/jquery.js" type="text/javascript"></script>
<script src="../chiefs/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="../chiefs/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="../chiefs/js/DT_bootstrap.js"></script>

<body>
<div class="as_wrapper">
	<h1 class="h1" style="font-size:14px; text-align:center; background:#1188aa; color:#fff; padding:10px 10px">AVAIALABLE STOCK IN THE <?PHP echo $serial; ?></h1>
    
  
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                                    <th style="text-align:center;">Product</th>
                                   
                                    <th style="text-align:center;">Selling Price</th>
                                    <th style="text-align:center;">Avaialable Stock</th>
						  

                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("select * from products where serial='".$serial."' order by product " ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['pro_id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['product']; ?></td>
						
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['price']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['quatity']; ?></td>
                           

								
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