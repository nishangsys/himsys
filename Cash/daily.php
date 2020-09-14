<form class="form-inline" role="form" method="post" action="?daily">
  <div class="form-group">
    <label for="email">Day:</label>
     <select class="form-control" id="sel1" name="day" onBlur="doCalc(this.form)" required>
          <option value="<?php echo date('d');?>"><?php echo date('d');?></option>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
        
    <?php 
					for($day=1;$day<=31;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select>
  </div>
  <div class="form-group">
    <label for="pwd">Month:</label>
    <select class="form-control" id="sel1" name="month" onBlur="doCalc(this.form)" required>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
      <option value="01">January</option>
              <option value="02">Febuary</option>
              <option value="03">March</option>
              <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
              <option value="07">July</option>
              <option value="08">August</option>
              <option value="09">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
				
  </select>
  </div>
  
  <div class="form-group">
    <label for="pwd">Year:</label>
    <select class="form-control" id="sel1" name="year" onBlur="doCalc(this.form)" required>
         <option value="<?php echo date('Y');?>"><?php echo date('Y');?></option>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
        
    <?php 
					for($day=2016;$day<=2020;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select>
  </div>
 <button type="submit" class="btn btn-success" name="doLogin">Search</button>
							</form>


<?php
if(isset($_POST['doLogin'])){
	$day = strip_tags($_POST['day']);
	$month = strip_tags($_POST['month']);
	$year = strip_tags($_POST['year']);
	
	$date=$day."-".$month."-".$year;
	
}
else {
$date=date('d-m-Y');
}

?>
<h2>Financial Reports on <?php  echo $date; ?> | TOTAL  : <?php 
		$abb=$con->query("SELECT SUM(rec) as inc FROM daily where date='$date' and paidto='$who' order by id desc") or die(mysqli_error($con));
		$i=1;
		
		
		while($mc=$abb->fetch_assoc()){
			echo $mc['inc'];
		}
			
					?>     <span style="color:#F00"></span></h2>
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Subject</th>
        <th>Amount Received</th>
      </tr>
    </thead>
    <tbody>
    
     <?php 
		$abb=$con->query("SELECT * FROM daily where date='$date' and paidto='$who' order by id desc") or die(mysqli_error($con));
		$i=1;
		
		
		while($mc=$abb->fetch_assoc()){
			
					?>     
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $mc['staffname']; ?>   <?php echo $mc['spurpose']; ?></td>
        <td><?php echo $mc['rec']; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>