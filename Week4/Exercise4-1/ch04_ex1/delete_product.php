<?php
// Get IDs
$product_id = filter_input (INPUT_POST, 'productID');
$category_id = filter_input (INPUT_POST, 'categoryID');


// Delete the product from the database
require_once('database.php');
$query = "DELETE FROM products
          WHERE productID = '$product_id'";
$db->exec($query);

// display the Product List page
include('index.php');
?>