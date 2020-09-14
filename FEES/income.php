

<style>

table,tr,td{
	border:1px solid#000;
	border-collapse:collapse;
}
th{
	background:#9F9; color:#000;
	margin:0px;
	text-align:center; 
	
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
  <strong>Nishang Says!</strong> <?php echo $ayear; ?> Fee Records Statistics
</div>
     
     
     
     <div class="table-responsive">          

   
     
     
     <?php
        $d=$conn->query("SELECT * FROM historic where class>50 GROUP BY class order by class") or die(mysqli_error($conn));
		 while($df=$d->fetch_assoc()){
	 
	  
	   ?>
       
   <table class="table">
    <thead>
    <th colspan="2">LEVEL <?php echo $l=$df['class']; ?></th>
      <tr >
        
        <td>Admission Package</td><td><?php $dl=$con->query("SELECT SUM(adminp) AS tot FROM daily where year='$ayear' and levels='".$l."' and session!='PART TIME' ") or die(mysqli_error($con));
while($bul=$dl->fetch_assoc()){
	 $ans=$bul['tot'];
	 echo number_format($ans);
	 
}
 ?> Frs</td></tr>
        
      <tr><td>Registration</td><td><?php $dl=$con->query("SELECT SUM(discount) AS tot FROM daily where year='$ayear' and levels='".$l."' and session!='PART TIME' ") or die(mysqli_error($con));
while($bul=$dl->fetch_assoc()){
	 $ans=$bul['tot'];
	 echo number_format($ans);
	 
}
 ?> Frs</td></tr>
 
     <tr> <td>Studion Union Fee</td><td><?php $dl=$con->query("SELECT SUM(sunion) AS tot FROM daily where year='$ayear' and levels='".$l."' and session!='PART TIME' ") or die(mysqli_error($con));
while($bul=$dl->fetch_assoc()){
	 $ans=$bul['tot'];
	 echo number_format($ans);
	 
}
 ?> Frs</td></tr>
 
 
       <tr><td>Tuition</td><td><?php $dl=$con->query("SELECT SUM(rec+bank) AS tot FROM daily where year='$ayear' and levels='".$l."' and session!='PART TIME' and reason='fees' ") or die(mysqli_error($con));
while($bul=$dl->fetch_assoc()){
	 $ans=$bul['tot'];
	 echo number_format($ans);
	 
}
 ?> Frs</td></tr>
      </tr>
    </thead>
     <?php } ?>
    <tbody>        
    </tbody>
    </table>   
       
      <table class="table">
    <thead>
      <tr >
        
        
       <td>I.C.E.L.P</td><td><?php $dl=$conn->query("SELECT SUM(amount_paid) AS tot FROM historic where year_id='$ayear' and class='I.C.E.L.P' ") or die(mysqli_error($conn));
while($bul=$dl->fetch_assoc()){
	 $ans=$bul['tot'];
	 echo number_format($ans);
	 
}
 ?> Frs</td></tr>
 
 
  <tr >
        
        
       <td>ICAN</td><td><?php $dl=$conn->query("SELECT SUM(amount_paid) AS tot FROM historic where year_id='$ayear' and class='ICAN' ") or die(mysqli_error($conn));
while($bul=$dl->fetch_assoc()){
	 $ans=$bul['tot'];
	 echo number_format($ans);
	 
}
 ?> Frs</td></tr>
 
  <tr >
        
        
       <td>Waiver</td><td><?php $dl=$conn->query("SELECT SUM(c111) AS tot FROM historic where year_id='$ayear'  ") or die(mysqli_error($conn));
while($bul=$dl->fetch_assoc()){
	 $ans=$bul['tot'];
	 echo number_format($ans);
	 
}
 ?> Frs</td></tr>
 
 
  <tr >
        
        
       <td>T-Shirts</td><td><?php $dl=$con->query("SELECT SUM(tshirt) AS tot FROM daily where year='$ayear'   ") or die(mysqli_error($con));
while($bul=$dl->fetch_assoc()){
	 $ans=$bul['tot'];
	 echo number_format($ans);
	 
}
 ?> Frs</td></tr>
 </thead>
 <tbody>
 <th colspan="2">PART TIME</th>
 <tr>
 <TD>Registration Fee</TD><td><?php $dl=$con->query("SELECT SUM(discount) AS tot FROM daily where year='$ayear' and session='PART TIME' and reason='fees' ") or die(mysqli_error($con));
while($bul=$dl->fetch_assoc()){
	 $ans=$bul['tot'];
	 echo number_format($ans);
	 
}
 ?> Frs</td></tr>
  <tr>
 <TD>Registration Package</TD><td><?php $dl=$con->query("SELECT SUM(adminp) AS tot FROM daily where year='$ayear' and session='PART TIME' and reason='fees' ") or die(mysqli_error($con));
while($bul=$dl->fetch_assoc()){
	 $ans=$bul['tot'];
	 echo number_format($ans);
	 
}
 ?> Frs</td></tr>
 
  <tr>
 <TD>Tuition</TD><td><?php $dl=$con->query("SELECT SUM(rec+bank) AS tot FROM daily where year='$ayear' and session='PART TIME' and reason='fees' ") or die(mysqli_error($con));
while($bul=$dl->fetch_assoc()){
	 $ans=$bul['tot'];
	 echo number_format($ans);
	 
}
 ?> Frs</td></tr>
 
 
 
 
 
 
 <th colspan="2">M.B.A</th>
 <tr>
 <TD>Registration Fee</TD><td><?php $dl=$con->query("SELECT SUM(discount) AS tot FROM daily where year='$ayear' and levels='600' and reason='fees' ") or die(mysqli_error($con));
while($bul=$dl->fetch_assoc()){
	 $ans=$bul['tot'];
	 echo number_format($ans);
	 
}
 ?> Frs</td></tr>
  <tr>
 <TD>Application</TD><td><?php $dl=$con->query("SELECT SUM(adminp) AS tot FROM daily where year='$ayear' and levels='600' and reason='fees' ") or die(mysqli_error($con));
while($bul=$dl->fetch_assoc()){
	 $ans=$bul['tot'];
	 echo number_format($ans);
	 
}
 ?> Frs</td></tr>
 
  <tr>
 <TD>Tuition</TD><td><?php $dl=$con->query("SELECT SUM(rec+bank) AS tot FROM daily where year='$ayear' and levels='600' and reason='fees' ") or die(mysqli_error($con));
while($bul=$dl->fetch_assoc()){
	 $ans=$bul['tot'];
	 echo number_format($ans);
	 
}
 ?> Frs</td></tr>
 
 <tr> <td>Studion Union Fee</td><td><?php $dl=$con->query("SELECT SUM(sunion) AS tot FROM daily where year='$ayear' and levels='600' and reason='fees'") or die(mysqli_error($con));
while($bul=$dl->fetch_assoc()){
	 $ans=$bul['tot'];
	 echo number_format($ans);
	 
}
 ?> Frs</td></tr>
 <th colspan="2">OTHER INCOME</th>
 <?php
 $dl=$con->query("select * from income_classes order by name") or die(mysqli_error($con));
while($bul=$dl->fetch_assoc()){
	?>
    <tr><td><?php echo $bul['name'];?>
    
    </td><td>  <?php $dlm=$con->query("SELECT SUM(rec) AS tot FROM daily where year='$ayear'  and reason='".$bul['name']."'") or die(mysqli_error($con));
while($bulm=$dlm->fetch_assoc()){
	 $ans=$bulm['tot'];
	 echo number_format($ans);
	 
}
 ?> Frs</td></tr>
    <?php } ?>
 </tbody>
        </table>
   
      
      
      
      
      
      
      
  </div>
     
     
     
     
     
     
     
     
     </div>


