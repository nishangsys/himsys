<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>

  <?php 
	  $query = $con->query("SELECT * FROM suppliers  order by name ") or die(mysqli_error($con));
	  ?>
              <div class="row" >
                    
              
                 <!-------------img box------->
         
          <?php

while($row = $query->fetch_assoc()) {
		  ?>
          
          <a href="receiving.php?receiving=<?php echo $row['name']; ?>&branch=<?php echo $branch; ?>&supp=<?php echo $row['name']; ?>" target="_new">
        <div class="col-sm-3" >
          <div class="well" style=" background:#033; color:#fff" >
          <span style="font-size:18px; text-align:center; font-weight:bold">
<?php echo $row['name'] ?></span>

            
            </p>
           
          </div>
        </div>
        </a>
        <?php } ?>
</div>