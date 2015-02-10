<?php
// Get the product data
$category_name = filter_input (INPUT_POST, 'categoryName');
// Validate inputs
if (empty($category_name)  ) {
    $error = "Invalid data. Check all fields and try again.";
    include('error.php');
} else {
    // If valid, add the product to the database
    require_once('database.php');
    $query = "INSERT INTO categories
                 (categoryName)
              VALUES
                 ('$category_name')";
    $db->exec($query);

    // Display the Product List page
    include('category_list.php');
}
?>
