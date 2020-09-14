<?php
include  '../includes/conn.php';
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipt</title>
<link href="style.css" type="text/css" rel="stylesheet" />

<style type="text/css" media="print">
  @page { size: portrait; }
  table{
	  border-collapse:collapse;
  }
  tr,td,th{
	  border:1px solid#000;
  }
  }
</style>



</head>

<!---
<input type="button" value="Print Ticket"
onClick="window.print()"/>
------>
<body onload="window.print();">



<?php include 'header.php'; 
$name=$_GET['name'];
?>
<div style="clear:both; margin-top:10px"></div>
           
       <h1 style="font-size:16px; background:#333; color:#fff"><?php echo $_GET['sentto']; ?> Supplies from Procurement on <?php echo $_GET['date']; ?></h1>             
              <table class="table table-bordered" style="width:100%">
                <thead>
                                        <tr>
                                            <th>#</th>
                                             <th>NAME</th>
        <th>CLASS</th> 
         <th>AMT PAID</th> 
                                       </tr>
                                    </thead>                                          
                            <tbody>
								<?php
								//$date=date('d-m-Y');
								$supp;
								
$d=$con->query("select * from daily WHERE reason='".$_GET['class']."' and year='".$_GET['ayear']."'   ") or die(mysqli_error($con));
$i=1;
while($bu=$d->fetch_assoc()){
								?>
								<tr>
                            <td > <?php echo $i++; ?></td>
  <td><?php  echo $bu['item']; ?></td>
                                            <td><?php  echo $bu['discribe']; ?></td>
                                            <td><?php  echo $bu['receive']; ?></td>
                       
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                              
                           
                              
                        </table>
 
</div></div>
                   
         <div style="width:90%; height:5px; background:#000; position:absolute; bottom:80px">
         
         <div style="width:300px; height:50px; padding:10px 0px; border-top:1px solid#000; float:right"><br />Approved By<br /><span style="font-style:italic; text-transform:capitalize ">Procurement Manager (Penyai).</span></div>
         
         
            <div style="width:300px; height:50px; border-top:1px solid#000;padding:10px 0px; float:left"><br />Requested 	By<br /><span style="font-style:italic; "><?php echo $name; ?></span>
         
         </div>
         
         
         
         
         
         
         </div>          
                   


</page>

   <?php ?>
</body>
</html>




