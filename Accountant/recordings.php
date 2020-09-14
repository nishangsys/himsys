
      
<script src="../modal/js1/jquery1.js" type="text/javascript"></script>
<script src="../modal/js1/bootstrap1.js" type="text/javascript"></script>


     
   
<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="../js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="../js/DT_bootstrap.js"></script>


         <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">

	 <div class="col-sm-12">
      <div class="well">
<h3>Choose a main head to register sub head</h3>

        
  
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                              <th style="text-align:center;">Expenditure Class</th>
                             
                              <th style="text-align:center;">Code</th>
                               <th style="text-align:center;">Budget</th>
                                 <th style="text-align:center;">Amt Used</th>
                                         <th style="text-align:center;">% Used</th>
                                                                   <th style="text-align:center;">Action</th>
                                

                                </tr>
                            </thead>
                            <tbody>
								<?php
								//$date=date('d-m-Y');
								$supp;
								
								$result= mysql_query("select * from exp_classes order by name" ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:260px;"> <?php echo $row ['name']; ?></td>
								
                                	<td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $row ['code']; ?></td>
                      <td style="text-align:center; word-break:break-all; width:160px;"> <?php echo number_format($row ['budget']); ?></td>
                      
                       <td style="text-align:center; word-break:break-all; width:160px;"> <?php echo number_format($row ['budget']-$row ['budget1']); ?></td>
                       
                        <td style="text-align:center; word-break:break-all; width:80px;"> <?php 
						
		 $diff=$row ['budget']-$row ['budget1'];
				echo	 number_format((($diff/$row ['budget'])*100),2); ?> %</td>
                             
								
                                <td style="text-align:center; word-break:break-all; width:80px;"> <a href="?expreq=<?php echo $row ['id']; ?>&clas=<?php echo $row ['name']; ?>&ccode=<?php echo $row ['code']; ?>&bbudget=<?php echo $row ['budget']; ?>&used=<?php echo $row ['budget']-$row ['budget1']; ?>">   <button type="button" class="btn btn-success">Requisit </button> </td>
								
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                              
                           
                              
                        </table>


          
        </div>
        </div>
        </div>
    </div>
