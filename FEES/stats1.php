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
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <script language="JavaScript" src="js/pop-up.js"></script>   
<style>
body{ font-family:Arial, Helvetica, sans-serif;
font-size:16px;
font-weight:bold}
table,tr,td{
	border:1px solid#000;
	border-collapse:collapse;
}
.demoInputBox{padding:7px; border:#F0F0F0 1px solid; border-radius:4px;}
.status-available{color:#000; background:#FF0; padding:10px 10px}
.status-not-available{color:#ff0;background:#F00; padding:10px 10px}
</style>
<script type="text/javascript">
function doCalc(form) {
		 

  form.balance.value = ((parseInt(form.feeamt.value)-parseInt(form.part.value)));

}
</script>

<script src="jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function checkAvailability() {
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "check_availability.php",
	data:'username='+$("#username").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status").html(data);
		$("#loaderIcon").hide();
	},
	error:function (){}
	});
}
</script>

  <div class="col-sm-12">
     
     <div class="alert alert-warning">
  <strong> <?php echo $ayear; ?> Fee Records Statistics
</div>
     
     
     
     <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr style="background:#9C6">
        <th>#</th>
        <th>Department (XAF)</th>
      <th>Expected Amount (XAF)</th>
      <th>Amount Paid (XAF)</th>
            <th>Amount Owed (XAF)</th>
  <th>% PAYMENT</th>
      </tr>
    </thead>
    <tbody>
     <?php
        $d=mysql_query("SELECT * FROM historic where year_id='$ayear' GROUP BY class") or die(mysql_error());
	   $i=1;
	  
	   ?>
      <tr>
     
       <?php  while($df=mysql_fetch_assoc($d)){?>
        <td><?php echo $i++; ?></td>
        
        <td><?php echo $df['amountpaid']; ?></td>
      <td> <?php
        $dm=mysql_query("SELECT sum(expected_amount) as expected FROM historic where year_id='$ayear' and class='".$df['amountpaid']."' ") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}	  
	   ?></td>
      <td style="color:#060; font-weight:bold"> <?php
        $dm=mysql_query("SELECT sum(amount_paid) as paid FROM historic where year_id='$ayear' and class='".$df['amountpaid']."'  ") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$PAID=$dfm['paid'];
			echo number_format($dfm['paid']);
		}	  
	   ?></td>
       <td style="color:#F00; font-weight:bold"> <?php
        $dm=mysql_query("SELECT sum(balance) as bal FROM historic where year_id='$ayear' and class='".$df['amountpaid']."' GROUP BY class ") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			echo number_format($dfm['bal']);
		}	  
	   ?></td>
       
       
       
       
          <td style="color:#009; font-weight:bold"> <?php
		  if($X<1){
			  echo 0;
		  }
		  else {
       echo number_format((($PAID/$X)*100),2);
		  }
	   ?> %</td>
      </tr>
      <?php } ?>
      
      
      
      
      
      
      
      
      
      
      
      
       <tr style="background:#FC3">
     
        <td></td>
        
        <td>TOTAL</td>
      <td> <?php
        $dm=mysql_query("SELECT sum(expected_amount) as expected FROM historic where year_id='$ayear' GROUP BY ayear ") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}	  
	   ?></td>
      <td style="color:#060; font-weight:bold"> <?php
        $dm=mysql_query("SELECT sum(amount_paid) as paid FROM historic where year_id='$ayear' GROUP BY ayear ") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$PAID=$dfm['paid'];
			echo number_format($dfm['paid']);
		}	  
	   ?></td>
       <td style="color:#F00; font-weight:bold"> <?php
        $dm=mysql_query("SELECT sum(balance) as bal FROM historic where year_id='$ayear'  GROUP BY ayear ") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			echo number_format($dfm['bal']);
		}	  
	   ?> </td>
       
       
       
       
          <td style="color:#009; font-weight:bold"> 100 %</td>
      </tr>
      
    </tbody>
  </table>
  </div>
     
     
     
     
     
     
     
     
     </div>


