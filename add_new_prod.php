<!--Nahallah Champagne, March 22, 2024
IT 202-004, Project 03, nac88@njit.edu-->

<?php
//Use database local or njit local
require_once('database_njit.php');
$db = getDB();

// Get the product data
$travel_category_id = filter_input(INPUT_POST, 'travel_category_id', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');
$description = filter_input(INPUT_POST, 'description');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
$size = filter_input(INPUT_POST, 'size');
$color = filter_input(INPUT_POST, 'color');

// Validate inputs
if ($code == NULL) {
    $error = "Column \"Code\" is empty. Please check all fields and try again.";
    echo "$error <br>";
}

if ($name == NULL) {
    $error = "Column \"Name\" is empty. Please check all fields and try again.";
    echo "$error <br>";
}

if ($description == NULL) {
    $error = "Column \"Description\" is empty. Please check all fields and try again.";
    echo "$error <br>";
}

if ($price == NULL || $price == false) {
    $error = "Column \"Price\" is empty or invaild. Please check all fields and try again.";
    echo "$error <br>";
} else if ($price <= 0 || $price >= 5000) {
    $error = "Column \"Price\" is invaild. Please enter a valid price.";
    echo "$error <br>";
}

if ($size == NULL) {
    $error = "Column \"Size\" is empty. Please check all fields and try again.";
    echo "$error <br>";
}

if ($color == NULL) {
    $error = "Column \"Color\" is empty. Please check all fields and try again.";
    echo "$error <br>";
}

if ($travel_category_id == NULL || $travel_category_id == FALSE || $code == NULL || 
        $name == NULL || $description == NULL || $price == NULL || $price == FALSE ||
         $size == NULL || $color == NULL) {
    $error = "Invalid product data. Please check all fields and try again.";
    echo "$error <br>";
} else {
    require_once('database_njit.php');

    //Check if the travel codes are unique 
    $query_duplicate =  'SELECT * FROM travelItems
                        WHERE travelItemCode = :code';
    $statement_duplicate = $db->prepare($query_duplicate);
    $statement_duplicate->bindValue(':code', $code);
    $statement_duplicate->execute();
    $existing_product = $statement_duplicate->fetch();
    $statement_duplicate->closeCursor();

    if ($existing_product) {
        // If code already exists, print an error message to let the user know
        echo "Error: Travel product code '$code' already exists. Please enter a unique code.<br>";
    } else {

        // Add the product to the database  
        $query = 'INSERT INTO travelItems
                    (travelItemCategoryID, travelItemCode, travelItemName, 
                    description, price, size, color)
                    VALUES
                    (:travel_category_id, :code, :name, :description, :price,
                    :size, :color)';
        $statement = $db->prepare($query);
        $statement->bindValue(':travel_category_id', $travel_category_id);
        $statement->bindValue(':code', $code);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':size', $size);
        $statement->bindValue(':color', $color);
        $success = $statement->execute();
        $statement->closeCursor();
        echo "<p>Your insert statement status is $success</p>";
    }
}
?>
<p><a href="product_list_page.php">View Product List</a></p>