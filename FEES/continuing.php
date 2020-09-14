<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>

              <div class="row">
                       
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
      SCHOOL FEES REPORTS FOR <span style="color:#ff0; font-weight:bold"><?PHP echo $current; ?> ACADEMIC YEAR
  
       
      </span>
      </div>             
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
     
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css" />
		
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen" />
     

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

                              <th style="text-align:center;">Student's Name</th>
                          <th style="text-align:center;">Program</th>
                                    <th style="text-align:center;">Level</th>
                             <th style="text-align:center;">Amt paid</th>
                                                 
                                   
                   <th style="text-align:center;">Action</th>
                                                  

                                </tr>
                            </thead>
                            <tbody>
								<?php
							
								$result= $con->query("select  * from daily where reason like '%Students Registration%' order by id ASC" ) or die (mysqli_error($con));
								$num=1;
								while ($row= $result->fetch_assoc() ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $name=$row['staffname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:250px;"> <?php echo $row ['room']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['area']; ?></td>
                                    
                      <td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['rec']; ?></td>
                                    
            <td style="text-align:center; word-break:break-all; width:120px;">					
                 <a href="?continuing=<?php echo $name; ?>&program=<?php echo  $row ['room']; ; ?>&year_id=<?php echo  $row ['year']; ; ?>&level=<?php echo $row ['area']; ?>&paid=<?php echo $row ['rec']; ?>">      <button type="button" class="btn btn-primary btn-sm">Register Student </button> </a>
                 
                </td>     
								
								
                             
					</tr>		
                           
								
								<?php } ?>
                              </tbody><tbody>
                        		  
                         </tbody>
                         </table>


          
        </div>
        
        
    


</body>
</html>

       
