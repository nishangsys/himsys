
  <?php
$zone=$_GET['get_nentrance'];
?>

  <?php

$y=date('y');

$res = $conn->query("SELECT * FROM classes1 where class='$zone' ") or die(mysqli_error($conn));

		while($row=$res->fetch_array())
		{
			$code=$row['code'];
			$abb=$row['abb'];
			$matt=$row['matt'];
		}
		$matric=$abb."".$y."".$code;
?>


  <div class="table-responsive">
                                
      <?php
	  $year=date('Y');
	  
	   $d=$con->query("SELECT * FROM lists where prog='".$_GET['get_nentrance']."'") or die(mysqli_error($con));
	    $s=$matt;
$i=1;
?>                       
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>
	            <th>Name</th>

        <th>Program</th>
        <th>Matricule</th> 
         <th>Action</th> 
        
      </tr>
    </thead>
    <tbody>
    
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="CornSilk">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><?php echo $bu['names']; ?></td>
       

        <td><?php echo $bu['choiceone']; ?></td>
        <td><?php echo $bu['matric']; ?></td>

        <td> 
         <a href="?get_nentrance=<?php echo $bu['choiceone']; ?>&name=<?php echo $bu['names']; ?>&matric=<?php echo $ymats; ?>&id=<?php echo $bu['id']; ?>&last=<?php echo $m+1; ?>&admit=<?php echo $bu['matric']; ?>&KK"><button class="btn btn-success"   >Admit & Generate Admission Letter</button></a>
   
       
       </td>
           
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>
  <?php
  
  if(isset($_GET['admit'])){
	  
	  $name=$_GET['name'];
	  $mat=$_GET['matric'];
	  $prog=$_GET['get_nentrance'];
	  $l=$_GET['last'];
	  $id=$_GET['id'];
	  $code=$_GET['admit']; 
		  $res = $con->query("DELETE FROM lists WHERE names='$name' AND year_id='$year_id'  ") or die(mysqli_error($con));
	  
	 
		 $res = $conn->query("UPDATE classes1 set matt='$l'  where class='$prog' ") or die(mysqli_error($conn));
		 
		  $res = $con->query("UPDATE gen_info set abouts='1'  where matric='$code' ") or die(mysqli_error($con));
		 
		 $res = $con->query("INSERT INTO lists set names='$name',prog='$prog',matric='$mat',year='$year',year_id='$year_id',mats='$code' ") or die(mysqli_error($con));
		 
	
		
		echo '<meta http-equiv="Refresh" content="0; url=?get_nentrance='.$prog.'&link=Generating Admission Lists">';
	  /*
	  
	    $res = $conn->query("UPDATE marks_sheet set mat='$mat',admitted='1'  where id='$id' ") or die(mysqli_error($conn));
		  $res = $conn->query("SELECT * FROM classes1 where class='$zone' ") or die(mysqli_error($conn));
		    $res = $conn->query("SELECT * FROM classes1 where class='$zone' ") or die(mysqli_error($conn));
	  
	  $res = $conn->query("SELECT * FROM classes1 where class='$zone' ") or die(mysqli_error($conn));
	  */
	  
  }
  
  ?>