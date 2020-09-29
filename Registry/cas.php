
<?php
include '../includes/dbc.php';
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	  $ayear=$bu['year'];
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
}
?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>HIMS SCHOOL SYSTEM </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="Biaka University Institute of Buea-BUIB E-Learning Portal by the IT Department" name="description" />
	<meta content="Biaka University Institute of Buea-BUIB E-Learning Portal by the IT Department" name="Nishang Isaac of Nishang Systems" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="../assets/css/layout2.css" rel="stylesheet" />
       <link href="../assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <link rel="stylesheet" href="../assets/plugins/timeline/timeline.css" />
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
</head>


    <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">

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
    <label for="pwd">Year:</label>
     <select class="form-control" id="sel1" name="ayear" required>
                 <option value="<?php echo $ayear; ?>"><?php echo $ayear; ?></option>
                
                 </select>
  </div>
 
  <button type="submit" name="ok" class="btn btn-default">Submit</button>
</form>  
  
  
    </form>
    </div>
   
      <?php
	 

	  $dept=$_POST['dept'];
	  $ayear=$_POST['ayear'];
	   $d=$conn->query("SELECT * from cas") or die(mysqli_error($conn));
$i=1;
?>                       
                                
          
<div class="alert alert-info">
  <strong><?PHP echo $dept;  ?> Class List For <?php echo $ayear; ?></strong>     <a href="all.php?list=<?php echo $bu['departmet']; ?>&link=<?php echo $bu['prog']; ?> lists&id=<?php echo $bu['roll']; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $bu['levels']; ?> "><button class="btn btn-primary"   >Excel Download <?php echo $ayear; ?> STUDENTS </button></a>
        
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
        
        <a href="foreign.php?list=<?php echo $bu['departmet']; ?>&link=<?php echo $bu['prog']; ?> lists&id=<?php echo $bu['roll']; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $bu['levels']; ?> "><button class="btn btn-success"   >Excel Download </button></a>
        
        
        
        
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
         <td><?php echo $bu['matric']; ?></td>
       <td><?php echo $f=$bu['mark']; ?></td>
                <td><?php

				 $c=$conn->query("SELECT * from  my_marks where matric='".$bu['matric']."' and code='NUS 214' and ayear='2019/2020' ") or die(mysqli_error($conn));
				 while($ee=$c->fetch_assoc()){
					 echo $CA=$ee['ca'];
				 }

				?></td>

        <td>

       <?PHP echo $T=$f; 
	   /*
	   ECHO $c=("UPDATE  my_marks where SET ca='$T' AND  
	   matric='".$bu['matric']."' and code='NUS 214' and ayear='2019/2020' "); 
	   */
	   ?> 
        
        
        
        </td>
		<TD>
		
		 <?PHP 
	/* $c=$conn->query("UPDATE  my_marks SET ca='$T' where  
	   matric='".$bu['matric']."' and code='NUS 214' and ayear='2019/2020' ") or die(mysqli_error($conn));
	 */
	   ?> 
       
           
      </tr>
        <?php }  ?>
      
    </tbody>
  </table></div>
 