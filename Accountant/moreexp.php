<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>

              <div class="row">
                       
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
      EXPENDITURE REPORTS FOR   <span style="color:#ff0; font-weight:bold"><?PHP $date=$_GET['moreexp']; ?> TODAY <?php echo $date; ?>
  
        
       <a href="print_distr.php?name=<?php echo $supp; ?>&branch=<?php echo $branch; ?>&date=<?php echo date('d-m-Y'); ?>" target="_blank">  <button type="button" class="btn btn-warning" style="color:#006" >Print Copy</button>   </a> 
      </span>
      </div>             
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
                                        <th style="text-align:center;">Total Expenditure</th>
                                

                                </tr>
                            </thead>
                            <tbody>
								<?php
								//$date=date('d-m-Y');
								$supp;
								
								$result= mysql_query("select SUM(daily.exp),daily.date,SUM(daily.rec) from daily   GROUP BY daily.id order by daily.id ASC" ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['date']; ?></td>
								
                                	<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo number_format($row ['SUM(daily.exp)']); ?></td>
                                    
                           
								
                              
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                          
                            </tbody>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                              <thead>
                                <tr>
                           

                                </tr>
                            </thead>
                            <tbody >
                            
								<?php
								//$date=date('d-m-Y');
								$supp;
								
								$result= mysql_query("select SUM(daily.exp),daily.date,SUM(daily.rec) from daily   GROUP BY daily.date " ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr style="background:#6F6">
                            <td style="text-align:center; word-break:break-all; width:20px;"></td>

						
								<td style="text-align:center; word-break:break-all; width:200px;"> TOTAL EXPENDITURE</td>
								
                                	<td style="text-align:center; word-break:break-all; background:#F33; font-weight:bold; color:#FFF; width:200px;"> <?php echo number_format($row ['SUM(daily.exp)']); ?> XAF</td>
                                    
                           
								
                              
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                          
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