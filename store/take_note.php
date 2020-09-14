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
	<h1 class="h1" style="font-size:14px">Ware House  stocks that will soon finish</h1>
    
  
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                                    <th style="text-align:center;">Product</th>
                                    <th style="text-align:center;">Description</th>
                                    <th style="text-align:center;">Model</th>
                                    <th style="text-align:center;">Stock</th>
                                    <th style="text-align:center;">Date First Stocked</th>

                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("select * from fixed_products order by product ASC" ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['product']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['discribe']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['model']; ?></td>
								<td style="text-align:center; word-break:break-all; width:100px;"> <?php $qty=$row ['qty'];
								                                                                       if($qty<11){
																										   echo "<span style='color:#f00; text-decoration:blink'>
																										   $qty</span>";
																									   }
																									   else {
																										   echo $qty;
																									   }?></td>
                               <td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $row ['date']; ?></td>


									
								
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