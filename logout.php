<!--Nahallah Champagne, April 5, 2024
IT 202-004, Project 04, nac88@njit.edu-->

<?php
session_start();
$_SESSION = [];  // Clear all session data from memory
session_destroy();     // Clean up the session ID
$login_message = 'You have been logged out.';
include('login.php');
