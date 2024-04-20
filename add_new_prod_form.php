<!--Nahallah Champagne, March 22, 2024
IT 202-004, Project 03, nac88@njit.edu-->

<!--Nahallah Champagne, April 19, 2024
IT 202-004, Project 05, nac88@njit.edu-->

<?php
require_once('database_njit.php');
$db = getDB();

$query = 'SELECT * FROM travelCategories
          ORDER BY travelCategoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>

<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>CHAMPAGNE Voyage</title>
    <link rel="stylesheet" href="add_new_prod_form.css">
</head>

<!-- the body section -->
<body>
    <?php include 'header.php'; ?>
    <header><h1>Product Manager</h1></header>

    <!--A line to seperate the headers-->
    <div class="line">
        <hr>
    </div>

    <main>
        <h2>Add Product</h2>
        <form action="add_new_prod.php" method="post" name="add_new_prod_form"
            id="add_new_prod_form">

            <label>Category:</label>
            <select name="travel_category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['travelCategoryID']; ?>">
                    <?php echo $category['travelCategoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select>
            <br>  
            <label>Code:</label>
            <input type="text" name="code" id="code">
            <span>*</span><br>

            <label>Name:</label>
            <input type="text" name="name" id="name">
            <span>*</span><br>

            <label>Description:</label>
            <input type="text" name="description" id="description">
            <span>*</span><br>

            <label>Price:</label>
            <input type="text" name="price" id="price">
            <span>*</span><br>

            <label>Size:</label>
            <input type="text" name="size" id="size">
            <span>*</span><br>

            <label>Color:</label>
            <input type="text" name="color" id="color">
            <span>*</span><br>
            
            <br>
            <input type="submit" value="Add Product" id="submit_button"/>
            <input type="reset" value="Clear Form" id="reset_button" />
        </form>

        <p><a href="product_list_page.php">View Product List</a></p>
    </main>

    <!--Copy and paste the jquery source---------------------------->
    <script
    src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
    crossorigin="anonymous"></script>
    <!--Copy and paste the jquery source---------------------------->

    <script src="add_new_prod_form.js"></script>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> CHAMPAGNE Voyage, Inc.</p>
    </footer>
    <footer><?php include 'footer.php'; ?></footer>
</body>
</html>