<?php
include '../includes/dbc.php';
  $a1=mysql_query("SELECT * FROM rushs where roll='1'") or die(mysql_error());
 while ($ad=mysql_fetch_assoc($a1)){
	 $ad1[''];
	$year_id=$ad['year'];
	 $as=$ad['extra'];
	$ass=$ad['extra2'];
 }


?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>

              <div class="row">
                       
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
      SCHOOL FEES REPORTS FOR <span style="color:#ff0; font-weight:bold"><?PHP echo $ayear; ?> ACADEMIC YEAR
  
       
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

                              <th style="text-align:center;">Student's Name</th>
                          <th style="text-align:center;">Program</th>
                                    <th style="text-align:center;">Level</th>
                                    
                                        <th style="text-align:center;">Matricule</th>
                                
                                   
                   <th style="text-align:center;">Action</th>
                                                  

                                </tr>
                            </thead>
                            <tbody>
								<?php
							
								$result= $dbcon->query("select  * from students where year_id='$ayear' order by fname" ) or die (mysqli_error($dbcon));
								$num=1;
								while ($row= $result->fetch_assoc() ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $name=$row['fname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:250px;"> <?php echo $row ['departmet']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $lev=$row ['levels']; ?></td>
                                    
                            	<td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $mat=$row ['matricule']; ?></td>
                                    
            <td style="text-align:center; word-break:break-all; width:200px;">					
                   
       <a href="change.php?name=<?php echo $name; ?>&id=<?php echo  $row ['id']; ; ?>&year_id=<?php echo $ayear; ?>&levelss=<?php echo $lev; ?>">      <button type="button" class="btn btn-primary btn-sm">UPDATE MATRICULE</button> </a>  </td>     
								
								
                             
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

       <?php
	   if(isset($_GET['delete'])){
	   $id=$_GET['delete'];
	   $name=$_GET['name'];
	   $year_id=$_GET['ayear'];
	   $result12= $dbcon->query("delete from historic where roll='$id' " ) or die(mysqli_error($dbcon)) ;
	     $result123= $dbcon->query("delete from students where fname='$name' and year_id='$ayear' " ) or die(mysqli_error($dbcon)) ;
		 echo "<script>alert('Delete Successfull')</script>";
	   }
	   ?>
</div>