<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>
<?PHP
	$a = $con->query("SELECT * FROM images where id='".$_GET['chose']."'") or die(mysqli_error($con));
		while($rows = $a->fetch_assoc()) {
			$pr=$rows['fprice'];
			$img=$rows['image']; 
			$namse=$rows['name']; 
			}
?>
<?php
	$_POST = array_map("ucwords", $_POST);
	
	////////////////insert item

if(isset($_POST['OK'])){
	$name=$_POST['name'];
	$tel=$_POST['tel'];
	$email=$_POST['email'];
	$date=$_POST['date'];
	$mssage=$_POST['message'];
	$compliment=$_POST['compliment'];
	$shape=$_POST['shape'];
	$design_color=$_POST['design_color'];
	$body_color=$_POST['body_color'];
	$occasion=$_POST['occassion'];
	
	$comment=nl2br($_POST['comment']);
	$discount=$_POST['discount'];
	$today=date('d-m-Y');
	$qty=$_POST['qty'];
	$month=date('m');
	$year=date('Y');
	$id=$_POST['id'];
	$price=$_POST['price'];
	$branch=$_POST['branch'];
	
	$day=$_POST['day'];
	$pmonth=$_POST['month'];
	$pyear=$_POST['year'];
	 $occasion_date="$month"."/$day"."/$year";
	
	
	
	$cake=$namse;

 $do=$con->query("INSERT INTO commands SET name='$name',email='$email',tel='$tel', date='$date',today='$today',qty='$qty',discount='$discount',comment='$comment',occasion_date='$occasion_date',body_color='$body_color',design_color='$design_color', shape='$shape',occassion='$occasion',compliment='$compliment',message='$mssage',price='$price',month='$month',year='$year',cake='$cake',pro_id='$id',branch='$branch'") or die(mysqli_error($con));;
 
 
echo  "<script>alert('Success.Thank You')</script>";
echo '<meta http-equiv="Refresh" content="0; url=index.php?cakes&branch='.$_GET['branch'].'">';
}

?>
<?php 
	  $query = $con->query("SELECT * FROM images,commands where commands.id='".$_GET['more']."' and images.id=commands.pro_id ") or die(mysqli_error($con));
	  while($cv=$query->fetch_assoc()){
	  ?>
         
 
              <div class="row">
                        <h2><?php  echo $cv['name']; ?>
                        Command  <a href="print.php?id=<?php echo $_GET['more']; ?>" target="_blank"><button type="button" class="btn btn-primary">Print this</button> </a> </h2>
     
  
		                                <div class="col-md-8">
                                    
       <div class="row" >
                        <h3> </h3>
                        
                             <table class="table table-bordered" style="background:#FFF">
    <thead>
      <tr>
        <th>S/N</th>
        <th>ITEM</th>
        <th>VALUE</th>
  
        
      </tr>
    </thead>
    
    
    <tbody>
    
     <tr>
          
        <td>1</td>
                <td>Customer's Names</td>

        <td><?php echo $cv['name']; ?></td>
</tr>

<tr>
 <td>2</td>
               
                <td>Customer's Emil</td>

        <td><?php echo $cv['email']; ?></td>
</tr>
<tr>

 <td>3</td>
                
                <td>Customer's Contacts</td>

        <td><?php echo $cv['tel']; ?></td>
</tr>

<tr>

 <td>4</td>
                
                <td>Message on Cake</td>

        <td><?php echo $cv['message']; ?></td>
</tr>


<tr>

 <td>5</td>
                
                <td>Compliment</td>

        <td><?php echo $cv['compliment']; ?></td>
</tr>




<tr>

 <td>6</td>
                
                <td>Cake Shape</td>

        <td><?php echo $cv['shape']; ?></td>
</tr>



<tr>

 <td>7</td>
                
                <td>Body Color</td>

        <td><?php echo $cv['body_color']; ?></td>
</tr>


<tr>

 <td>8</td>
                
                <td>Design Color</td>

        <td><?php echo $cv['design_color']; ?></td>
</tr>



<tr>

 <td>9</td>
                
                <td>Occassion</td>

        <td><?php echo $cv['occassion']; ?></td>
</tr>



<tr>

 <td>10</td>
                
                <td>Delivery Date</td>

        <td><?php echo $cv['occasion_date']; ?></td>
</tr>



<tr>

 <td>11</td>
                
                <td>Comment</td>

        <td><?php echo $cv['comment']; ?></td>
</tr>



<tr>

 <td>12</td>
                
                <td>Discount</td>

        <td><?php echo $cv['compliment']; ?></td>
</tr>



<tr>

 <td>13</td>
                
                <td>Date of Command</td>

        <td><?php echo $cv['date']; ?></td>
</tr>



<tr>

 <td>14</td>
                
                <td>Price</td>

        <td><?php echo $pr=($cv['price']-$cv['discount']); ?></td>
</tr>


<tr>

 <td>15</td>
                
                <td>Qty</td>

        <td><?php echo $cv['qty']; ?></td>
</tr>
</tbody>
              
  </table>          
</div>

                     
                                      
         
</div>

         


 <div class="col-sm-4">
    <div class="well">
      <h3>Chosen Cake</h3>
      
                          

 <img src="../image/<?php  echo $cv['image']; ?>" style="width:100%;
 height:30%">
<h3>Price:<?php echo number_format($pr); ?> Frs</h3>
<a href="../image/<?php  echo $cv['image']; ?>">
  <button type="button" class="btn btn-success">Download</button> </a> 
  <a href="print.php?id=<?php echo $cv['id'];?>">
  <button type="button" class="btn btn-warning" style="color:#000">Print</button> </a> 
    </div>
    
 </div>
 </div>
 <?php } ?>