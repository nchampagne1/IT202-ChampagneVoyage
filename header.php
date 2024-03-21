<!--Nahallah Champagne, Feburary 14, 2024
IT 202-004, Project 01, nac88@njit.edu-->

<html>
<head>
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
            margin-right: 640px;
        }

        .Nav-Bar nav {
            flex-grow: 1; /* Nav element will fill the space */
            
        }

        .Nav-Bar nav ul {
            list-style: none;
            padding: 0; /* Remove padding */
            margin: 0; /* Remove margin */
            text-align: left;
            margin-left: 2%;
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

        /*W3Schools inspired code to make one of the variables in my nav have a dropdown menu*/
        .dropdown {
            float: left;
            overflow: hidden;
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


    </style>
</head>

<body>
<header>
    <!--Navigation Bar-->
    <div class="Nav-Bar">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <!--A drop down menu, very fancy-->
                <div class="dropdown"><button class="dropbtn">Products 
                    <i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-content">
                        <a href="http://localhost/nac88/IT202-nac88-travelwebsite/product_list_page.php">Product List Manager</a>
                        <a href="http://localhost/nac88/IT202-nac88-travelwebsite/add_new_prod_form.php">Product Manager</a>
                        <a href="#">Undefined Product 3</a>
                    </div>
                </div> 
                <!--End of drop down menu-->
                <li><a href="http://localhost/nac88/IT202-nac88-travelwebsite/home_page.php">About Us</a></li>
                <li><a href="http://localhost/nac88/IT202-nac88-travelwebsite/shipping_page.php">Shipping</a></li>
                <li><a href="https://www.linkedin.com/in/nahallah-champagne-852349229/">Contact Us</a></li>
            </ul>
        </nav>

        <!-- include an header in line style -->
        <h1 style= "color: #000000; background-color: #F096B8; font-family: Lucida Handwriting;" > CHAMPAGNE <br>
        <span class="headFont">Voyage</h1>

    </div>
    <br> 

</header>
</body>
</html>