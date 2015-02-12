<?php
// Get IDs
$category_id = filter_input (INPUT_POST, 'categoryID');


// Delete the product from the database
require_once('database.php');
$query = "DELETE FROM categories
          WHERE categoryID = '$category_id'";

$db->exec($query);

// display the Product List page
include('category_list.php');
?>
