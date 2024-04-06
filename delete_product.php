<!--Nahallah Champagne, April 5, 2024
IT 202-004, Project 04, nac88@njit.edu-->

<?php
//slide 37
//When making a new page we hve to connect the sql to our php code

require_once('database_njit.php');
$db = getDB();

// Get IDs
$travelItemID = filter_input(INPUT_POST, 'travelItemID', FILTER_VALIDATE_INT);
$travel_category_id = filter_input(INPUT_POST, 'travel_category_id', FILTER_VALIDATE_INT);

if ($travelItemID !== false && $travel_category_id !== false) {
    $query = 'DELETE FROM travelItems WHERE travelItemID = :travelItemID';
    $statement = $db->prepare($query);
    $statement->bindValue(':travelItemID', $travelItemID);
    $success = $statement->execute();
    $statement->closeCursor();
    echo "<p>Your delete statement status is $success</p>";
}
?>

<p><a href="product_list_page.php">View Product List</a></p>

