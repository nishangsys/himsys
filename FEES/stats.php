

<style>

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
  <strong>Nishang Says!</strong> <?php echo $ayear_name; ?> Fee Records Statistics
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
        $d=$dbcon->query("SELECT * from students,special where students.dept_id=special.id  AND students.year_id='$ayear' GROUP BY students.dept_id") or die(mysqli_error($dbcon));
	   
	  
	   ?>
      <tr>
     
       <?php  while($df=$d->fetch_assoc()){?>
        <td><?php echo $i++; ?></td>
        
        <td><?php echo $df['prog_name']; ?></td>
      <td> <?php
        $dm=mysql_query("SELECT sum(expected_amount) as expected FROM fee_paymts where yearid='$ayear' and program_id='".$df['dept_id']."' ") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}	  
	   ?></td>
      <td style="color:#060; font-weight:bold"> <?php
           $dm=mysql_query("SELECT sum(fee_amt) as PAID FROM fee_paymts where yearid='$ayear' and program_id='".$df['dept_id']."' ") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$PAID=$dfm['PAID'];
			echo number_format($PAID);
		}	  
	   ?></td>
       <td style="color:#F00; font-weight:bold"> <?php
          $dm=mysql_query("SELECT sum(balance) as expected FROM fee_paymts where yearid='$ayear' and program_id='".$df['dept_id']."' ") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$owed=$dfm['expected'];
			echo number_format($owed);
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
        $dm=mysql_query("SELECT sum(expected_amount) as expected FROM fee_paymts where yearid='$ayear' ") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}	   
	   ?></td>
      <td style="color:#060; font-weight:bold"> <?php
          $dm=mysql_query("SELECT sum(fee_amt) as PAID FROM fee_paymts where yearid='$ayear' ") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$PAID=$dfm['PAID'];
			echo number_format($PAID);
		}	   
	   ?></td>
       <td style="color:#F00; font-weight:bold"> <?php
         $dm=mysql_query("SELECT sum(balance) as expected FROM fee_paymts where yearid='$ayear' and program_id='".$df['dept_id']."' ") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$owed=$dfm['expected'];
			echo number_format($owed);
		}	     
	   ?> </td>
       
       
       
       
          <td style="color:#009; font-weight:bold"> 100 %</td>
      </tr>
      
    </tbody>
  </table>
  </div>
     
     
     
     
     
     
     
     
     </div>


