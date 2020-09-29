

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
        
       
      <th>Finance Type</th>
       <th>Amount Received</th>
       
    
      </tr>
    </thead>
    <tbody>
     <?php
      $dm=$dbcon->query("SELECT reason,SUM(rec) as totals FROM daily where year='$ayear' GROUP BY reason order by reason ASC  ") or die(mysqli_error($dbcon));
	$i=1;
	   
	  
	   ?>
       
        
       <?php  while($df=$dm->fetch_assoc()){?>
      <tr>
    
     
        <td><?php echo $i++; ?></td>
       
        
        <td><?php echo $df['reason']; ?></td>
          <td><?php echo number_format($df['totals']); ?></td>
       
    
      </tr>
      <?php } ?>
      
      <tr style="color:#f00">
      <td></td>
      <td>Total Amount given as Scholarship </td><td><?php
          $dms=$dbcon->query("SELECT SUM(scholar) as totals FROM daily where year='$ayear'    ") or die(mysqli_error($dbcon));
		  while($dfs=$dms->fetch_assoc()){
		  echo number_format($dfs['totals']);
		  }
		  ?></td></tr>
      
      
      
      
      
      
      
      
      
      
      
      
       <tr style="background:#FC3">
     
        <td></td>
        
        <td>TOTAL</td>
      <td> <?php
          $dm=$dbcon->query("SELECT SUM(rec) as totals FROM daily where year='$ayear'   ") or die(mysqli_error($dbcon));
		while($dfm=$dm->fetch_assoc()){
			
			echo number_format($dfm['totals']);
		}	   
	   ?></td>
     
      </tr>
      
    </tbody>
  </table>
  </div>
     
     
     
     
     
     
     
     
     </div>


