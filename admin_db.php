<!--Nahallah Champagne, April 5, 2024
IT 202-004, Project 04, nac88@njit.edu-->

<?php
require_once('database_njit.php');
function is_valid_admin_login($email, $password) {
  $db = getDB();
  $query = 'SELECT password FROM voyageManagers WHERE emailAddress = :email';
  $statement = $db->prepare($query);
  $statement->bindValue(':email', $email);
  $statement->execute();
  $row = $statement->fetch();
  echo "<pre>";
  echo print_r($row);
  echo "</pre>";
  $statement->closeCursor();  

  if ($row == false) {
    return false;
  } else {
    $hash = $row['password'];
    return password_verify($password, $hash);
  }
}