

<div class="container text-center">    

<div class="row">
    <div class="col-sm-10 well">
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Total Application Amt </th>
        <th>Charges Amt</th>
        <th>Total  Amt </th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
            
        <?php
 $amt=15000;
 $year=date('Y');

   $dm=$con->query("SELECT SUM(paid),paid,COUNT(id) FROM transanctions where year='$year'  ") or die(mysqli_error($con));
while($bum=$dm->fetch_assoc()){
	echo $bum['COUNT(id)'];
	$top=$amt*$bum['COUNT(id)'];
	 $tp=$bum['SUM(paid)'];
	 $tous=$tp-$amt*$bum['COUNT(id)'];
	 $pp=($top/$tp)*100;
	 	 $charge=($tous/$tp)*100;


?>
        <td>John</td>
        <td> <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $pp; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pp; ?>%">
		  <span class="sr-only">40% Complete (success)</span>
		</div>
</td>


<td> <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $charge; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $charge; ?>%">
		  <span class="sr-only">40% Complete (success)</span>
		</div>
</td>


<td style="width:300px"> <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
		  <span class="sr-only">100% Complete (success)</span>
		</div>
</td>
        <?php } ?>
      </tr>
      
       <tr>
        <td>John</td>
        <td><?php echo number_format($top); ?> FCFA</td>
        <td><?php echo number_format($tous); ?> FCFA</td>
        <td><?php echo number_format($tp); ?> FCFA</td>
      </tr>

      <tr>
      
    </tbody>
  </table>
          </div>
          </div>