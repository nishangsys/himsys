<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>

              <div class="row">
                       
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
      RECEIVING SUPPLIES FROM <span style="color:#ff0; font-weight:bold"><?PHP echo $supp=$_GET['supplier']; ?>
     <a href="?receiving&branch=<?php echo $branch; ?>&supp=<?php echo $supp; ?>&good=<?php echo $name; ?>">
        <button type="button" class="btn btn-primary">Receive</button>   </a>   
      </span>
      </div>             
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

	
  
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                                    <th style="text-align:center;">Product</th>
                                    <th style="text-align:center;">Qty Supplied</th>
                                    <th style="text-align:center;">Total Cost</th>
                                    <th style="text-align:center;">Supplied on</th>
                                

                                </tr>
                            </thead>
                            <tbody>
								<?php
								$date=date('d-m-Y');
								$supp;
								
								$result= mysql_query("select stock,SUM(current),SUM(date),month from disburse where sentto='$branch' and sentby like '%$supp%' and month='$date' GROUP BY stock order by id ASC" ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['stock']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['SUM(current)']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['SUM(date)']; ?></td>
								
								
                               <td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $row ['month']; ?></td>


									
								
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

       
</div>