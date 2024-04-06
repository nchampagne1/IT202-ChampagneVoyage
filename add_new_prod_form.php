<!--Nahallah Champagne, March 22, 2024
IT 202-004, Project 03, nac88@njit.edu-->

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
        <form action="add_new_prod.php" method="post"
            id="add_new_product_form">

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
            <input type="text" name="code"><br>

            <label>Name:</label>
            <input type="text" name="name"><br>

            <label>Description:</label>
            <input type="text" name="description"><br>

            <label>Price:</label>
            <input type="text" name="price"><br>

            <label>Size:</label>
            <input type="text" name="size"><br>

            <label>Color:</label>
            <input type="text" name="color"><br>
            
            <br>
            <input type="submit" value="Add Product"><br>
        </form>
        <p><a href="product_list_page.php">View Product List</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> CHAMPAGNE Voyage, Inc.</p>
    </footer>
    <footer><?php include 'footer.php'; ?></footer>
</body>
</html>