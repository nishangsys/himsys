

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
         $d=$dbcon->query("SELECT * from students,special where students.dept_id=special.id  AND students.year_id='$ayear' GROUP BY students.dept_id") or die(mysqli_error($dbcon));
	   
	   $i=1;
	  
	   ?>
      <tr>
     
       <?php while($df=$d->fetch_assoc()){?>
        <td><?php echo $i++; ?></td>
        
        <td><?php echo $df['prog_name']; ?></td>
      <td> <?php
        $dm=$dbcon->query("SELECT COUNT(matricule) as expected FROM students where year_id='$ayear' and dept_id='".$df['dept_id']."' ") or die(mysqli_error($dbcon));;
		while($dfm=$dm->fetch_assoc()){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}	  
	   ?></td>
      <td style="color:#060; font-weight:bold"> <?php
        $dm=$dbcon->query("SELECT COUNT(matricule) as expected FROM students where year_id='$ayear' and dept_id='".$df['dept_id']."' AND sex='male' ") or die(mysqli_error($dbcon));;
		while($dfm=$dm->fetch_assoc()){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}	
	   ?></td>
       <td > <?php
         $dm=$dbcon->query("SELECT COUNT(matricule) as expected FROM students where year_id='$ayear' and dept_id='".$df['dept_id']."' AND sex='female' ") or die(mysqli_error($dbcon));;
		while($dfm=$dm->fetch_assoc()){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}	
	   ?></td>
       
       
       
       
          <td style="color:#009; font-weight:bold"> <?php
        $dm=$dbcon->query("SELECT COUNT(matricule) as expected FROM students where year_id='$ayear' and dept_id='".$df['dept_id']."' AND nationality IS NOT NULL AND nationality!='cameroonian' ") or die(mysqli_error($dbcon));;
		while($dfm=$dm->fetch_assoc()){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}	
	   ?> </td>
      </tr>
      <?php } ?>
      
      
      
      
      
      
      
      
      
      
      
      
       <tr style="background:#FC3">
     
        <td></td>
        
        <td>TOTAL</td>
      <td> <?php
       $dm=$dbcon->query("SELECT COUNT(matricule) as expected FROM students where year_id='$ayear'  ") or die(mysqli_error($dbcon));;
		while($dfm=$dm->fetch_assoc()){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}	 
	   ?></td>
      <td style="color:#060; font-weight:bold"> <?php
      $dm=$dbcon->query("SELECT COUNT(matricule) as expected FROM students where year_id='$ayear'  AND sex='male' ") or die(mysqli_error($dbcon));;
		while($dfm=$dm->fetch_assoc()){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}		  
	   ?></td>
       <td style="color:#F00; font-weight:bold"> <?php
         $dm=$dbcon->query("SELECT COUNT(matricule) as expected FROM students where year_id='$ayear' AND sex='female' ") or die(mysqli_error($dbcon));;
		while($dfm=$dm->fetch_assoc()){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}	
	   ?> </td>
       
       
       
       
          <td style="color:#009; font-weight:bold"> <?PHP
           $dm=$dbcon->query("SELECT COUNT(matricule) as expected FROM students where year_id='$ayear'  AND nationality IS NOT NULL AND nationality!='cameroonian' ") or die(mysqli_error($dbcon));;
		while($dfm=$dm->fetch_assoc()){
			$X=$dfm['expected'];
			echo number_format($dfm['expected']);
		}	
		  
		  ?></td>
      </tr>
      
    </tbody>
  </table>
  </div>
     
     
     
     
     
     
     
     
     </div>


