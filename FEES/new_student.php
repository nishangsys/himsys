<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>
<?php
 $level=$_POST['level'];
 $dept=$_POST['dept'];
  $d=$con->query("SELECT * FROM main_sects where id='".$_GET['nam']."'") or die(mysqli_error($con));
  while($bu=$d->fetch_assoc()){
	 $code=$bu['code'];
	  $name=$bu['name'];
	   $fid=$bu['id'];
  }
?>
              <div class="row">
                       
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
    <span style="color:#ff0; font-weight:bold"> </span> SCHOOL  FEES DEBTORS REPORTS FOR <span style="color:#ff0; font-weight:bold"><?PHP echo $ayear; ?> ACADEMIC YEAR
      </span>
      </div>             

		
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
     
</head>
<script src="modal/js1/jquery1.js" type="text/javascript"></script>
<script src="modal/js1/bootstrap1.js" type="text/javascript"></script>



<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

	
    
    <div class="col-sm-12">
          <div class="well">
          
           <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                              <th style="text-align:center;">Program</th>
                                           <th style="text-align:center;">Action?</th>
                                   
                 
                                </tr>
                            </thead>
                            <tbody>
								<?php
							echo $ayear;
								$result= $con->query("select  * from special order by certi" ) or die (mysqli_error($con));
								$num=1;
								while ($row= $result->fetch_assoc () ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; "> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; "> <?php echo $name; ?> <?php echo $nj=$row ['prog_name']; ?></td>
							
                            
                            
			
          		
            <td style="text-align:center; word-break:break-all;;">					
                   
       <a href="?ydept=<?php echo $nj; ?>&id=<?php echo  $row ['id']; ; ?>&year_id=<?php echo $ayear; ?>&fid=<?php echo $fid; ?>">      <button type="button" class="btn btn-danger btn-sm">Admit </button> </a> </td>     
								
								
                             
					</tr>		
								
                             
					</tr>		
                           
								
								<?php } ?>
                                <tr>
                                <td></td>
                                <td>I.C.E.L.P</td>
                                <td>            
       <a href="?ydept= I.C.E.L.P&id=others&year_id=<?php echo $ayear; ?>&fid=<?php echo $fid; ?>">      <button type="button" class="btn btn-danger btn-sm">Admit I.C.E.L.P </button> </a></td>
                                </tr>
                                
                                 <tr>
                                <td></td>
                                <td>ICAN</td>
                                <td>            
       <a href="?ydept=ICAN&id=others&year_id=<?php echo $ayear; ?>&fid=<?php echo $fid; ?>">      <button type="button" class="btn btn-danger btn-sm">Admit ICAN </button> </a></td>
                                </tr>
                              <tbody>
                        		  
                         </tbody>
                         </table>
          </div>
     </div>
     
     
     
     

          
        </div>
     
</body>
</html>

       
</div>