<?PHP
include  '../dbc.php';
session_start();

$dept=$_GET['dept'];
	$year_id=$_GET['ayear'];;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MY PAYSLIP</title>
<link href="style.css" type="text/css" rel="stylesheet" />

<style type="text/css">
  @page { size: portrait; }
  .sub{
	  width:600px;
	  height:900px;
	 
	  margin:auto;
	  
  }
  .head1{
	  width:100%;
	  height:auto;
	 
  }
  
   .head2{
	  width:100%;
	  height:auto;
	
	  padding-bottom:20px;
  }
</style>
          
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
		
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
     
</head>

<body>
<div class="sub">
	<div class="head1">
    	<div style="  height:130px; width:19%; float:left; border:1px dashed#000;  ">
<IMG src="img/logo.png" style="margin:AUTO ; width:120PX; height:120PX"  />
</div>

		<div style="  height:auto; width:79%; float:left; border:;  ">

<div style="  height:AUTO; width:100%; float:left; text-align:center; background:#333; color:#FFF; 
  border:1px DASHED#000;text-transform:uppercase; font-size:18px; font-weight:bold  "> salary voucher FOR <?php echo $clients; ?> </div>


<div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;   "> <?php echo $AD; ?></div>
  
  <div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;  "> <?php echo $TEL; ?></div></div>


    
    </div>
    
    
    
    
    
    
    
    
    
    
    
    <div class="head2">
                    
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
    <span style="color:#ff0; font-weight:bold"> <?php echo $level; ?></span> SCHOOL FEES REPORTS FOR <span style="color:#ff0; font-weight:bold"><?PHP echo $ayear; ?> ACADEMIC YEAR
  
       | <a href="fee_s.php?dept=<?php echo $level; ?>&year_id=<?PHP echo $ayear; ?>" target="_new"> <button type="submit" class="btn btn-warning" name="doLogin" class="btn btn-danger">Print a Copy</button></a>
      </span>
      </div>   

	
  
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                              <th style="text-align:center;">Student's Name</th>
                          <th style="text-align:center;">Program</th>
                                    <th style="text-align:center;">Level</th>
                                     <th style="text-align:center;">Amount Paid</th>
                                   
                                     <th style="text-align:center;">Amount Owed</th>
                                   
                   <th style="text-align:center;">Action</th>
                                                  

                                </tr>
                            </thead>
                            <tbody>
								<?php
							
								$result= mysql_query("select  * from historic where year_id='$ayear' and class='$dept' order by student_name" ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $name=$row ['student_name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:250px;"> <?php echo $row ['amountpaid']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['time']; ?></td>
                                    
                        <td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['amount_paid']; ?></td>
								
                                             <td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['balance']; ?></td>
			
            <td style="text-align:center; word-break:break-all; width:80px;">					
                   
       <a href="?name=<?php echo $name; ?>&id=<?php echo  $row ['id']; ; ?>&year_id=<?php echo $ayear; ?>">      <button type="button" class="btn btn-primary btn-sm">UPDATE</button> </a> </td>     
								
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                         </tbody>
                         </table>

    
    </div>


</div>
</body>
</html>
