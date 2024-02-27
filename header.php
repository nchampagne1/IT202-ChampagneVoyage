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
            background-color: #F096B8;
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
            color: #fff; /* Text color for links */
            

        }

        .Nav-Bar nav ul li a:focus, .Nav-Bar nav ul li a:hover {
            color: #828489; /*text color for when the mouse hovers over the link */
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
                <li><a href="http://localhost/nac88/IT202-nac88-travelwebsite/home_page.php">About Us</a></li>
                <li><a href="http://localhost/nac88/IT202-nac88-travelwebsite/shipping_page.php">Shop</a></li>
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