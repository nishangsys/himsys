
<?php
 $id;
   $dm=$con->query("SELECT * FROM spendingcats order by cat") or die(mysqli_error($con));
while($bum=$dm->fetch_assoc()){
	 $deptss=$bum['cat'];
     $id=$bum['id'];
?>
<a href="?chosing_date&link=Record Daily Expenses&type=<?php echo $deptss; ?>">
<div class="col-sm-3" >
          <div class="well" style=" border:1px solid#999; text-align:center" >
          <span style="font-size:18px; text-align:center; font-weight:bold"> 

<?php
echo $deptss;
?> 
</span>

           
          </div>
          
        </div>
        <?php } ?>
        </a>
        
        