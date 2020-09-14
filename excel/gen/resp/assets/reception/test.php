  <?php
		   // include Barcode39 class 
include "Barcode39.php"; 

// set Barcode39 object 
$bc = new Barcode39("Shay Anderson"); 

// display new barcode 
$bc->draw();
		   // set object 
$bc = new Barcode39("123-ABC"); 

// set text size 
$bc->barcode_text_size = 5; 

// set barcode bar thickness (thick bars) 
$bc->barcode_bar_thick = 4; 

// set barcode bar thickness (thin bars) 
$bc->barcode_bar_thin = 2; 

// save barcode GIF file 
$bc->draw("barcode.gif");
		   
		   ?>