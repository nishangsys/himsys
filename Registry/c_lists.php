<form class="form-inline" action="" method="POST">
  <div class="form-group">
    <label for="email">Program:</label>
   <select class="form-control" id="sel1" name="dept" required>
              <option>........</option>

       <?php
	   $d=$con->query("SELECT certi FROM special order BY certi") or die(mysqli_error($con));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['certi']; ?>"><?php echo $df['certi']; ?></option>
    <?php } ?>
 
  </select>
  </div>
  <div class="form-group">
    <label for="pwd">Start Year:</label>
     <select class="form-control" id="sel1" name="s" required>
                 <option></option>
                <?php
				for($x=2016; $x<=2030; $x++){
				?>
                <option value="<?php echo $x; ?>">
                <?php echo $x; ?>
                </option>
                <?php } ?>
                 </select>
  </div>
  
  <div class="form-group">
    <label for="pwd">End Year:</label>
     <select class="form-control" id="sel1" name="e" required>
                 <option></option>
                <?php
				for($x=2016; $x<=2030; $x++){
				?>
                <option value="<?php echo $x; ?>">
                <?php echo $x; ?>
                </option>
                <?php } ?>
                 </select>
  </div>
 
  <button type="submit" name="ok" class="btn btn-default">Submit</button>
</form>  
  
  
    </form>
    </div>
   
      <?php
	 
	  if(isset($_POST['ok'])){
	  $dept=$_POST['dept'];
	  $a=$_POST['s'];
	  $b=$_POST['e'];
	  echo $ayear=$a."/".$b;
	   $d=$conn->query("SELECT departmet,count(fname) as alls,db1,levels,roll FROM courses where db1='$ayear' and departmet='$dept' GROUP BY departmet,levels") or die(mysqli_error($conn));
$i=1;
?>                       
                                
          
<div class="alert alert-info">
  <strong><?PHP echo $dept;  ?> Class List For <?php echo $ayear; ?></strong>
</div>                      
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Program</th>
           <th>Level</th>

        <th>Number of students</th>
             
        <th>Action</th> 
        
        
      </tr>
    </thead>
    <tbody>
    <tr>
     <td>0</td>
         <td>Foreigners</td>
       <td>ALL</td>
                <td>All</td>

        <td>
        
        <a href="../Registry/foreign.php?list=<?php echo $bu['departmet']; ?>&link=<?php echo $bu['prog']; ?> lists&id=<?php echo $bu['roll']; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $bu['levels']; ?> "><button class="btn btn-success"   >Excel Download </button></a>
        
        
        
        
        </td>

       
           
      </tr>
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="PaleGreen">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
         <td><?php echo $bu['departmet']; ?></td>
       <td><?php echo $bu['levels']; ?></td>
                <td><?php echo $bu['alls']; ?></td>

        <td>
        
        <a href="../Registry/ddo.php?list=<?php echo $bu['departmet']; ?>&link=<?php echo $bu['prog']; ?> lists&id=<?php echo $bu['roll']; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $bu['levels']; ?> "><button class="btn btn-success"   >Excel Download Class List</button>
        
         <a href="../Registry/biostats.php?list=<?php echo $bu['departmet']; ?>&link=<?php echo $bu['prog']; ?> lists&id=<?php echo $bu['roll']; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $bu['levels']; ?> "><button class="btn btn-primary"   >Bio Stats </button>
        
        
        
        </td>

       
           
      </tr>
        <?php } } ?>
      
    </tbody>
  </table></div>
 