
  <div class="row">
        <div class="col-sm-12">
          <div class="well">
		<div class="alert alert-info">
  <strong>:</strong>NEW REQUIISITION</div>
        <?php $d=$con->query("SELECT * FROM names where dept='".$_GET['dept']."' WHERE staus>2 order by id DESC ") or die(mysqli_error($con));
$i=1;
?>

<div class="panel-body">
                           
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Name</th>
        <th>Rquisition Date</th>
     
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
                                            <td><?php echo $bu['name']; ?></td>
                                            <td><?php echo $bu['date']; ?></td>
                       
                     <td>
                  <a href="?prepare&id=<?php echo $bu['id']; ?>&uname=<?php echo $bu['name']; ?>&dept=<?php echo $bu['dept']; ?>" style="font-weight:bold; color:#033"><button class="btn btn-success" onclick="return confirm('Are you Sure you wish to ban <?php echo $bu['full_name']; ?> ')" > <i class="icon-key icon-white"></i> Prepare Requisition</button></a> 
                     </td>
                   
      </tr>
        <?php } ?>
      
    </tbody>
  </table>
                            </div>
                      </div>

        </div>
        </div>
     