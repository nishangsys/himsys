
  
  <div class="row">
        <div class="col-sm-12">
          <div class="well">
		<div class="alert alert-info">
  <strong>Alert:</strong>All Heads of Departments</div>
        <?php $d=$DBcon->query("SELECT * FROM users where banned!='20' ") or die(mysqli_error($DBcon));
$i=1;
?>

<div class="panel-body">
                           
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Name</th>
        <th>User Name</th>
        <th>Contact</th>
                <th>Department</th>

         <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="Aquamarine">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><?php echo $bu['full_name']; ?></td>
                                            <td><?php echo $bu['user_name']; ?></td>
                                             <td><?php echo $bu['tel']; ?></td>
                                            <td><?php echo $bu['address']; ?></td>
                     <td>
                  <a href="?ban&bann=<?php echo $bu['id']; ?>&uname=<?php echo $bu['user_name']; ?>&dept=<?php echo $bu['address']; ?>" style="font-weight:bold; color:#033"><button class="btn btn-danger" onclick="return confirm('Are you Sure you wish to ban <?php echo $bu['full_name']; ?> ')" >Ban User</button></a> |
                 
                     </td>
                   
      </tr>
        <?php } ?>
      
    </tbody>
  </table>
                            </div>
                      </div>

        </div>
        </div>
        
        <?php
		if(isset($_GET['bann'])){
		$id=$_GET['bann'];
		$dg12=$DBcon->query("DELETE  FROM users where id='$id' ") or die(mysqli_error($DBcon));
		echo "<script>alert('Item Successfully Delete')</script>";
		
			echo '<meta http-equiv="Refresh" content="0; url=?ban ">';
		}
		?>
     