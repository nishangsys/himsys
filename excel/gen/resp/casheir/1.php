<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

		             <div class="col-md-8">

  <?php 
	  $query = $con->query("SELECT * FROM commands where id='".$_GET['more']."' ") or die(mysqli_error($con));
	  while($cv=$query->fetch_assoc()){
	  ?>
              <div class="row" >
                        <h3>View more about <?php  echo $cv['name']; ?> Command</h3>
                        
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

        <td><?php echo $cv['price']; ?></td>
</tr>


<tr>

 <td>15</td>
                
                <td>Qty</td>

        <td><?php echo $cv['qty']; ?></td>
</tr>
</tbody>
              
  </table>          
</div>

<?php } ?>
</div>



 <div class="col-sm-4">
    <div class="well">
    
    </div>
    </div>