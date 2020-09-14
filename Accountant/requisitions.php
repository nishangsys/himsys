 <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
        <link rel="stylesheet" type="text/css" href="../css/DT_bootstrap.css">
		
        <link href="../modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
     
</head>
<script src="../modal/js1/jquery1.js" type="text/javascript"></script>
<script src="../modal/js1/bootstrap1.js" type="text/javascript"></script>



<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="../js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="../js/DT_bootstrap.js"></script>
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                              <th style="text-align:center;">Date</th>
                             
                              <th style="text-align:center;">Satff Name</th>
                                       <th style="text-align:center;">Total Expenditure</th>
                                          <th style="text-align:center;">Req Number</th>
                                                                          <th style="text-align:center;">Recieve on</th>
                                

                                </tr>
                            </thead>
                            <tbody>
								<?php
								//$date=date('d-m-Y');
								$supp;
								
								  $do12=$con->query("SELECT date,tab,SUM(price*qty),agent from requisitions where tab!='' group by tab   order by id DESC  ") or die(mysqli_error($con));
	  $i=1;
								while ($row= $do12->fetch_assoc()){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:150px;"> <?php echo $row ['date']; ?></td>
								
                                	<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['agent']; ?></td>
                                    	<td style="text-align:center; word-break:break-all; width:150px;"> <?php echo number_format($row ['SUM(price*qty)']); ?></td>
                                    
                               <td style="text-align:center; word-break:break-all; width:150px;"> <?php echo $row ['tab']; ?></td>
                              
								
                                <td style="text-align:center; word-break:break-all; width:350px;"><a href="print.php?roll=<?php echo $row ['tab']; ?>" target="new">   <button type="button" class="btn btn-primary">Print A Copy </button> | <a href="?seeit=<?php echo $row ['agent']; ?>&dep=&id=<?php echo $row ['tab']; ?>&link=Viewing <?php echo $row ['agent']; ?> Requisitions">   <button type="button" class="btn btn-success"> View Requiistion </button> </td>
								
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                          </tbody>