
<?php
	$_POST = array_map("ucwords", $_POST);
	
	////////////////insert item

if(isset($_GET['id'])){


  
	  $dfGu=$con->query("UPDATE years SET status='0' WHERE id!='".$_GET['id']."' ") or die(mysqli_error($con));
	  
	  
	  $dfGu=$con->query("UPDATE years SET status='1' WHERE id='".$_GET['id']."' ") or die(mysqli_error($con));
	  
	   echo "<script>alert('SUCCESSFULLY set ".$_GET['yname']." AS CURRENT ACADEMIC YEAR ')</script>";

echo '<meta http-equiv="Refresh" content="0; url=?set_ayear&link=Set%20Aacdemic%20Year">';

  }

  
?>

 
          
      <?php
	  $do12=$con->query("SELECT * from years order by id DESC") or die(mysqli_error($con));
	  $i=1;
      
      
      ?>     
        <table class="table table-bordered" style="background:#FFF">
    <thead>
      <tr>
        <th>S/N</th>
        <th>ACADEMIC YEAR</th>
        
        <th>ACTION</th>
        
      </tr>
    </thead>
    
    
    <tbody>
    <?php while($df=$do12->fetch_assoc()){ ?>
      <tr>
                 <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="white">';
 }
 else
 {
    echo '<tr bgcolor="AliceBlue">';
 }
		
		?>
        <td><?php  echo $i++; ?></td>
        <td><?php echo $name=$df['year_name']; ?></td>
      


         <td>
         <?php
		 if($df['status']==1){
			 echo "<span class='btn btn-success btn-xs'>Is the current Academic Year</span>";
		 ?>
         <?php } else { ?>
            <a href="?set_ayear&id=<?php echo $df['id']; ?>&update=<?php echo $df['id']; ?>&yname=<?php echo $name=$df['year_name']; ?>&FSFSG" onClick="return confirm('Do you wish to set <?php echo $name=$df['year_name']; ?>  as current academic Year')" class="btn btn-primary btn-xs">
       Set as Current Academic Year     

</a>  <?php } ?></td>

       
      </tr>
      
    <?php } ?>
    </tbody>
    
  </table>  
  
 