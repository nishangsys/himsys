

<?php

require_once 'functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
    ?>
    
    
      <div class="search_box" style="background:#CCC">
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?searchproducts">
    <table>
    <tr>
    <td><input type="text" name="name" style="background:#fff; margin-left:30px; border:1px solid#ccc" placeholder="search a product now......."/></td>
    <td><button type="submit" name="search" />Search Product</button></td>
    </tr>
    </table>
    </form>
    </div>


    <iframe src="EDIT/list_PRODUCTS12.php" style="width:1250px; height:3000PX; overflow:hidden "></iframe>
         
         
         
     

<?php } ?>
</div></div>
