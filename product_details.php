<!--Nahallah Champagne, April 19, 2024
IT 202-004, Project 05, nac88@njit.edu-->

<?php
require_once('database_njit.php');
$db = getDB();

$travelItemID = $_GET['travelItemID'];

// query the database to fetch the item details based on the travelItemID
$query = 'SELECT * FROM travelItems WHERE travelItemID = :travelItemID';
$statement = $db->prepare($query);
$statement->bindValue(':travelItemID', $travelItemID);
$statement->execute();
$item = $statement->fetch();
$statement->closeCursor();

// image filename based on the travelItemID
$imageFilename = "images/itemID/{$travelItemID}.jpg";

// ccheck if the image file exists
$imageExists = file_exists($imageFilename);

?>

<!DOCTYPE html>
<html>
    <head>
        <!--<title>Product Details</title>-->
        <link rel="stylesheet" href="home_page.css" />
        <style>
            /*The line*/
            .line hr {
                height: 3px;
                border: 0;
                background: black;
            }

            /*Center the image horizontally*/
            img {
                display: block;
                margin: 0 auto;
                width: 300px; /* Adjust the width as needed */
                height: auto; /* Maintain aspect ratio */
            }

            .item_description {
                border: 2px solid #F096B8;
                background-color: beige;
                width: 700px;
                padding: 10px;
                margin: auto;
                text-align: left;
            }

            /*CSS for Hover*/
            #product-image:hover {
                filter: grayscale(100%);
            }
        </style>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <header><h1>Product Details</h1></header>

        <!--A line to seperate the headers-->
        <div class="line">
            <hr><br>
        </div>
        <!--A line to seperate the headers-->

        <?php if ($item): ?>
            <h2><?php echo $item['travelItemName']; ?></h2><br>

            <!--Insert Images here-->
            <?php if ($imageExists): ?>
                <img id="product-image" src="<?php echo $imageFilename; ?>" alt="Product Image">
            <?php else: ?>
                <p>No image available</p>
            <?php endif; ?>
            <!--Insert Images here-->

            <!------JS MouseHover Event------>
            <script>
                const productImage = document.getElementById("product-image");

                //check that the image exists
                if (productImage) {
                    // mouseover
                    productImage.addEventListener("mouseover", function() {
                        this.style.filter = "grayscale(100%)";
                    });

                    //mouseout
                    productImage.addEventListener("mouseout", function() {
                        this.style.filter = "none"; 
                    });
                }
            </script>
            <!------JS MouseHover Event------>

            <div class= "item_description">
            <p>Description: <?php echo $item['description']; ?></p>
            <p>Price: $<?php echo $item['price']; ?></p>
            <p>Color: <?php echo $item['color']; ?></p>
            <p>Size: <?php echo $item['size']; ?></p>
            </div>
        <?php else: ?>
            <p>Product not found</p>
        <?php endif; ?>

        <footer><?php include 'footer.php'; ?></footer>
    </body>
</html>