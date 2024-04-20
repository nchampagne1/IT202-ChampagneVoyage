<!--Nahallah Champagne, April 5, 2024
IT 202-004, Project 04, nac88@njit.edu-->

<?php
require_once('admin_db.php');
session_start();

$db = getDB();

// Retrieve user input from POST
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

// Validate email and password
if (is_valid_admin_login($email, $password)) {

    
    // Store admin details in the session array
    $_SESSION['is_valid_admin'] = true;
    $_SESSION['firstName'] = $adminDetails['firstName'];
    $_SESSION['lastName'] = $adminDetails['lastName'];
    $_SESSION['emailAddress'] = $adminDetails['emailAddress'];
    // redirect logged in user to default page
    echo "<p>You have successfully logged in.</p>";
} else {
    if ($email == NULL && $password == NULL) {
        $login_message ='You must login to view this page.';
    } else {
        $login_message = 'Invalid credentials.';
    }
    include('login.php');
}
?>
<p><a href="home_page.php">Redirect to About Us page</a></p>