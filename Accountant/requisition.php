<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

                
 <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     

<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="../js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="../js/DT_bootstrap.js"></script>

</head>

<body>

              <div class="row">
                       
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
      REQUISITION GENERATION PER HEAD  <span style="color:#ff0; font-weight:bold">
  
      </span>
      </div>      
             
<div style="clear:both"></div>


        
         <div class="col-sm-15" >

              <div class="row">
                       
                        <?PHP
						 echo $message;
						?>


<BR />
  
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                              <th style="text-align:center;">Code</th>
                          <th style="text-align:center;">Budget Head</th>
                                    <th style="text-align:center;">Allocated Budget</th>
                                    
                                        <th style="text-align:center;">Expend. Head</th>


  <th style="text-align:center;">Action</th>

                                </tr>
                            </thead>
                            <tbody>
								<?php
								$date=date('d-m-Y');
								$supp;
								
								$result= mysql_query("select * from exp_classes where year_id='$year_id' order by name" ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:120px;"> <?php echo $row ['code']; ?></td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['name']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:120px;"> <?php echo number_format($row ['budget']); ?></td>
                                    
                                    	<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['heads']; ?></td>
                                    
              
         <td style="text-align:center; word-break:break-all; width:200px;"> 
            <a href="?requisiting=<?php echo $row['id']; ?>">
        <button type="button" class="btn btn-success">REQUISIT NOW</button>    
     </a></td>		
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                           
                        </table>


          
        </div>
        </div>
        </div>
    </div>

</div>
</body>
</html>

       
</div>