<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <?php
            // get data 
            $product_description = $_POST['product_description'];
            $list_price = $_POST['list_price'];
           // $dicsount_percent = $_POST['discount_percent'];
            $discount_percent = filter_input(INPUT_POST, 'discount_percent');
          
            
            
           // validation
            $error_message = ''; // needs to be available
            
           if(empty($product_description)) {
               $error_message = 'Product Descriptions required field';
           }
            if(!is_string($product_description)) {
               $error_message = 'is string';
           }
            if(empty($list_price)) {
               $error_message = 'Price needs to be entered';
           }
            if(!is_numeric($list_price)) {
               $error_message = 'List Price missing';
           }
           if(empty($discount_percent)) {
               $error_message = 'Price needs to be entered';
           }
            if(!is_numeric($discount_percent)) {
               $error_message = 'discount required field';
           } 
            
            if (!empty($error_message) ) { 
        include('index.php'); // needs to be included to display error
        exit();
            }
        
        // needs to be in order 
            $discount_percent = $_POST ['discount_percent'];
            $discount = $list_price * $discount_percent * .01; 
            $discount_price = $list_price - $discount ;
                            
           
        ?>
        
    <div id="content">
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span>$<?php echo $product_description; ?></span><br />

        <label>List Price:</label>
        <span>$<?php echo $list_price; ?></span><br />

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent; ?>%</span><br />

        <label>Discount Amount:</label>
        <span>$<?php echo $discount; ?></span><br />

        <label>Discount Price:</label>
        <span>$<?php echo $discount_price; ?></span><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>