<div class="alert alert-info">
  <strong>Message:</strong> Choose a tutor to Assign students
</div>
<?php
 $id;
   $dm=$con->query("SELECT * FROM subject where main='".$_GET['dept']."' GROUP BY department order by department") or die(mysqli_error($con));
while($bum=$dm->fetch_assoc()){
	 $deptss=$bum['department'];
     
?>
<a href="?assigning_course&level=<?php echo $_GET['mylevel']; ?>&dept=<?php echo $_GET['dept']; ?>&yname=<?php echo $_GET['name']; ?>&program=<?php echo $deptss; ?>">
<div class="col-sm-3" >
          <div class="well" style=" border:1px solid#999; text-align:center" >
          <span style="font-size:18px; text-align:center; font-weight:bold"> 
          <span style="color:#F00"><?php echo $_GET['name']; ?></span><br />
Level <?php echo $l=$_GET['mylevel']; ?><br />
<?php
echo $deptss;
?> 
</span>

           
          </div>
          
        </div>
        <?php } ?>
        </a>
        
        