

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
     
    
     
     
     
     <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr style="background:#9C6">
        <th>#</th>
        <th>Department</th>
      <th>Tot No Enrolled</th>
      <th>No of Male</th>
            <th>No of Female</th>
  <th>No of Foreigners</th>
      </tr>
    </thead>
    <tbody>
     <?php
        $d=mysql_query("SELECT departmet,COUNT(matricule) FROM students where year_id='$ayear' group by departmet order by COUNT(matricule) desc") or die(mysql_error());
	   $i=1;
	  
	   ?>
      <tr>
     
       <?php  while($df=mysql_fetch_assoc($d)){?>
        <td><?php echo $i++; ?></td>
        
        <td><?php echo $df['departmet']; ?></td>
      <td> <?php
        $dm=mysql_query("SELECT COUNT(matricule) as expected FROM students where year_id='$ayear' and departmet='".$df['departmet']."' order by  COUNT(matricule) desc") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}	  
	   ?></td>
      <td style="color:#060; font-weight:bold"> <?php
       $dm=mysql_query("SELECT COUNT(matricule) as expected FROM students where year_id='$ayear' and departmet='".$df['departmet']."' and sex LIKE '%M%' order by  COUNT(matricule) desc") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}
	   ?></td>
       <td > <?php
        $dm=mysql_query("SELECT COUNT(matricule) as expected FROM students where year_id='$ayear' and departmet='".$df['departmet']."' and sex LIKE '%F%' order by  COUNT(matricule) desc") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}  
	   ?></td>
       
       
       
       
          <td style="color:#009; font-weight:bold"> <?php
         $dm=mysql_query("SELECT COUNT(nationality) as alls FROM students where year_id='$ayear' and departmet='".$df['departmet']."' and nationality!=''") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$X=$dfm['alls'];
			echo number_format($dfm['alls']);
		}
	   ?> </td>
      </tr>
      <?php } ?>
      
      
      
      
      
      
      
      
      
      
      
      
       <tr style="background:#FC3">
     
        <td></td>
        
        <td>TOTAL</td>
      <td> <?php
        $dm=mysql_query("SELECT COUNT(matricule) as expected FROM students where year_id='$ayear' GROUP BY ayear ") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}	  
	   ?></td>
      <td style="color:#060; font-weight:bold"> <?php
        $dm=mysql_query("SELECT COUNT(matricule) as expected FROM students where year_id='$ayear' and sex like '%m%' GROUP BY ayear ") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}		  
	   ?></td>
       <td style="color:#F00; font-weight:bold"> <?php
          $dm=mysql_query("SELECT COUNT(matricule) as expected FROM students where year_id='$ayear' and sex like '%F%' GROUP BY ayear ") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}		
	   ?> </td>
       
       
       
       
          <td style="color:#009; font-weight:bold"> <?PHP
           $dm=mysql_query("SELECT COUNT(nationality) as alls FROM students where year_id='$ayear'  and nationality!='' GROUP BY ayear") or die(mysql_error());
		while($dfm=mysql_fetch_assoc($dm)){
			$X=$dfm['alls'];
			echo number_format($dfm['alls']);
		}
		  
		  ?></td>
      </tr>
      
    </tbody>
  </table>
  </div>
     
     
     
     
     
     
     
     
     </div>


