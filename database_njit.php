<?php
// Slide 24
    $dsn = "mysql:host=sql1.njit.edu;port=3306;dbname=nac88";
    $username = 'nac88';
    $password = 'myD@t@b@se1';

    
    try {
        $db = new PDO($dsn, $username, $password);
        echo'<p>You are connected to the local host database!<p>';
    } catch (PDOException $ex) {
        $error_message = $ex->getMessage();
        include("database_error.php");
        exit();
    }
?>    