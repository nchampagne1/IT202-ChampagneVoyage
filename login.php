<!--Nahallah Champagne, April 5, 2024
IT 202-004, Project 04, nac88@njit.edu-->

<?php 
if (!isset($login_message)) {
$login_message = 'You must login to view this page.';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CHAMPAGNE Voyage</title>
    <style>
      h1 {
        text-align: center;
      }

      .email-pass-container {
        text-align: center;
      }

      body {
        background-image: url('images/travel2.jpg');
        background-size: cover;
        height: 100%;
      }

    </style>
  </head>


  <body>
    <!--<h1>CHAMPAGNE Voyage</h1>-->
    <!--Header Code-->
    <?php include 'header.php'; ?>
    <main>
      <h1>Login</h1>
      <form action="authenticate.php" method="post">
        
      <!--Email/Password Container-->
        <div class="email-pass-container">
          <label>Email:</label>
          <input type="text" name="email" value=""><br>
          <br>
          <label>Password:</label>
          <input type="password" name="password" value=""><br>
          <!--input type=password will automatically change the clear text to black dots-->
          <br>
          <input type="submit" value="Login">
          </form>
          <p><?php echo $login_message; ?></p>
        </div>
      <!--End of email/password container-->
  </main>
  <?php include 'footer.php'; ?>
 </body>
</html>