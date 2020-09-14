<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="print.css" />
<link rel="stylesheet" type="text/css" href="Style.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" media="screen" href="../css/left-fluid.css">
     <link rel="stylesheet" href="../js/boostrap.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

</head>
<script type="text/javascript">
/*--This JavaScript method for Print command--*/
    function PrintDoc() {
        var toPrint = document.getElementById('printarea');
        var popupWin = window.open('', '_blank', 'width=800,height=800,location=no,left=200px,line-heigh=1.5,font-face=Arial');
        popupWin.document.open();
        popupWin.document.write('<html><title>::Preview::</title><link rel="stylesheet" type="text/css" href="print.css" /></head><body onload="window.print()">')
        popupWin.document.write(toPrint.innerHTML);
        popupWin.document.write('</html>');
        popupWin.document.close();
    }
/*--This JavaScript method for Print Preview command--*/
    function PrintPreview() {
        var toPrint = document.getElementById('printarea');
        var popupWin = window.open('', '_blank', 'width=800,height=800,location=no,left=200px');
        popupWin.document.open();
        popupWin.document.write('<html><title>::Print Preview::</title><link rel="stylesheet" type="text/css" href="Print.css" media="screen"/></head><body">')
        popupWin.document.write(toPrint.innerHTML);
        popupWin.document.write('</html>');
        popupWin.document.close();
    }
</script>

<body>
<html>
<body  id="printarea">
<?php 
include '../dbc.php';
	  $query = $con->query("SELECT * FROM images,commands where commands.id='".$_GET['id']."' and images.id=commands.pro_id ") or die(mysqli_error($con));
	  while($cv=$query->fetch_assoc()){
	  ?>
              <div class="container">
                 <div class="col-md-8">
                                    
       <div class="row" >
                        <h3> </h3>
                        
                             <table border="1"  class="table table-bordered" style="background:#FFF; font-family:Arial, Helvetica, sans-serif; line-height:1.5; width:100%; border-collapse:collapse; ">
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
  
                <input type="button" value="Print" class="btn" onclick="PrintDoc()"/>
            </td>
            <td>
                <input type="button" value="Print Preview" class="btn" onclick="PrintPreview()"/>
            </td>
        </tr>
    </table>
    <?php } ?>
</body>
</html>
 

</body>
</html>