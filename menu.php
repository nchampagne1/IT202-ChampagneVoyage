<!--Nahallah Champagne, April 5, 2024
IT 202-004, Project 04, nac88@njit.edu-->
<?php include 'header.php'; ?>
<html>
    <head>
        <title>Login/Logout Menu</title>
    </head>
<body>
  <?php 
  if (isset($_SESSION['is_valid_admin'])) { 
  ?>
    <p>
      <a href="logout.php">Logout</a>
    </p>
  <?php } else { ?>
    <p>
      <a href="login.php">Login</a>
    </p>
  <?php } ?>
</body>
</html>