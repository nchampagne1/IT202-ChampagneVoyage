<!--Nahallah Champagne, April 5, 2024
IT 202-004, Project 04, nac88@njit.edu-->

<?php
require_once('database_njit.php');
//For login
function add_voyageManager($firstName, $lastName, $email, $password) {
    $db = getDB();
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = 'INSERT INTO voyageManagers (emailAddress, password, firstName, lastName, dateCreated)
              VALUES (:email, :password, :firstName, :lastName, NOW() )';
    $statement = $db->prepare($query);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $hash);
    $statement->execute();
    $statement->closeCursor();
} //end of Function add_voyageManager
//add_voyageManager("Nahallah", "Champagne", "nahallah@cvoyage.com", "nac88");
//add_voyageManager("Rick", "Grimes", "rickgrimes@cvoyage.com", "rick!");
//add_voyageManager("Percy", "Jackson", "percyj@cvoyage.com", "percyj!");
?>