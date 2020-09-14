 <table class="table table-bordered" style="background:#FFF">
    <thead>
      <tr>
        <th>S/N</th>
        <th> NAME</th>
        
        <th>ACTION</th>
        
      </tr>
    </thead>
    
    
    <tbody>
    
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
        <td><?php echo $_GET['name']; ?></td>
        

         <td>
            <a href="?who=<?php echo $_GET['name']; ?>&branch=<?php echo $branch; ?>&id=<?php echo $_GET['id']; ?>">
        <button type="button" class="btn btn-warning">CONFIRM AND SUPPLY</button>    
          </td>

       <?php
	   if(isset($_GET['who'])){
		   $date=date('d-m-Y');
	    $mk=$con->query("INSERT INTO names set name='".$_GET['who']."',dept='$dept',date='$date',sector='lab' ") or die(mysqli_error($con));
		    echo '<meta http-equiv="Refresh" content="0; url=index.php?my_labtec2">';
	   }
	   ?>
      </tr>
      
    
    </tbody>
    
  </table>  