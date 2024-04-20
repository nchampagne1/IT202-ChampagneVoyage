<!--Nahallah Champagne, Feburary 14, 2024
IT 202-004, Project 01, nac88@njit.edu-->

<!DOCTYPE html>
<html>
<head>
<?php
// Start the session
session_start();
?>
    <style>
        .headFont {
            font-size: 60%;
        }

        .Nav-Bar {
            width: 100%; 
            margin: 0 auto; /* Center the container horizontally */
            display: flex; /* Use flexbox for layout */
            justify-content: space-between; /* Align items with space between them */
            align-items: center; /* Align items vertically */
            background-color: #F096B8; /*pink*/
        }

        .Nav-Bar h1 {
            margin: 0;
            text-align: center;
            margin-right: 650px;
        }

        .Nav-Bar nav {
            flex-grow: 1; /* Nav element will fill the space */
            
        }

        .Nav-Bar nav ul {
            list-style: none;
            padding: 0; /* Remove padding */
            margin: 0; /* Remove margin */
            text-align: left;
            margin-right: 2%;
        }

        .Nav-Bar nav ul li {
            display: inline; /* Display list items horizontally */
            margin-right: 10px; /* Add spacing between list items */
        }

        .Nav-Bar nav ul li a {
            color: #fff; /* Text color for links - white*/
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            /*text-decoration: none; /* Remove default underline */
        }

        .Nav-Bar nav ul li a:focus, .Nav-Bar nav ul li a:hover {
            color: #828489; /*text color for when the mouse hovers over the link*/ 
        }

        /*W3Schools inspired code to make one of the variables in my nav have a dropdown menu------------*/
        .dropdown {
            position: relative; /* Set the positioning context for the dropdown */
            display: inline-block; /* Display the dropdown as inline block */
            margin-left: -4%;
        }

        .dropdown .dropbtn {
            font-size: 16px;  
            border: none;
            outline: none;
            color: white; /*text color*/
            background-color: inherit;
            font-family: inherit;

            margin-left: 2%;
            margin-right: 10px;
            
            float: left;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .Nav-Bar a:hover, .dropdown:hover .dropbtn {
            background-color: #F096B8; /*make a darker pink*/
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            top: 100%; /* Position the dropdown content below the dropdown button */
            /*left: 0;*/
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 12px;
            display: block;
            text-align: left;
        }

        .dropdown:hover .dropdown-content {
            display: block; /*Shape of the drop down menu */
        }

        .Nav-Bar a:hover, .dropdown:hover .dropbtn {
            background-color: #F26C9E;
        }
        /*End of dropdown menu stuff-----------------------------------------------------------------------*/
    </style>
</head>

<body>
<header>
    <!--Navigation Bar-->
    <div class="Nav-Bar">
    <nav>
        <ul>
            <li><a href="home_page.php">About Us</a></li>
            <?php 
            // Check if the user is logged in
            if (isset($_SESSION['is_valid_admin'])) { 
            ?>
            <li><a href="logout.php">Logout</a></li>
            <!--Dropdown menu, based on the user authentication-->
            <div class="dropdown">
                <button class="dropbtn">Products 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="product_list_page.php">Product List Manager</a>
                    <a href="add_new_prod_form.php">Product Manager</a>
                    <a href="#">Undefined Product 3</a>
                </div>
            </div>
            <!--End of drop down menu-->
            <li><a href="shipping_page.php">Shipping</a></li>
            <?php } else { ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="login.php">Shipping</a></li>
                <!-----Dropdown menu------------->
                <div class="dropdown">
                    <button class="dropbtn">Products 
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="product_list_page.php">Product List Manager</a>
                    </div>
                </div>
                <!--------Dropdown Menu----------------->
               
            <?php } ?>
            <li><a href="https://www.linkedin.com/in/nahallah-champagne-852349229/">Contact Us</a></li>
        </ul>
    </nav>

    <!-- Header title -->
    <h1 style="color: #000000; background-color: #F096B8; font-family: Lucida Handwriting;"> CHAMPAGNE <br>
        <span class="headFont">Voyage</span>
    </h1>
    
    <!--------Welcome Message------------------------------->
    <?php
    /*
    require_once('database_njit.php');
    $db = getDB();
    //Get category ID
    $voyage_email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
    echo $voyage_email;

    // Get user details from VoyageManager table
    $queryUserDetails = 'SELECT firstName, lastName, emailAddress FROM voyageManagers 
        WHERE emailAddress = :voyage_email';
    $statement = $db->prepare($queryUserDetails);
    $statement->bindValue(':voyage_email', $voyage_email); 
    $statement->execute();
    $userDetails = $statement->fetch();

    //var_dump($userDetails);

    $firstName = $userDetails['firstName'];
    $lastName = $userDetails['lastName'];
    $emailAddress = $userDetails['emailAddress'];
    $statement->closeCursor();

    if (isset($_SESSION['is_valid_admin']) && $_SESSION['is_valid_admin']) {

        echo "Welcome $firstName $lastName ($emailAddress)";
    }
    */
    ?>
    <!--------Welcome Message------------------------------->
</div>
<br> 
</header>

</body>
</html>