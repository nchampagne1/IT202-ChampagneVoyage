<!--Nahallah Champagne, Feburary 28, 2024
IT 202-004, Project 02, nac88@njit.edu-->

<?php
  //Use database local or njit local
  require_once('database_njit.php');

  //Get category ID
  $travel_category_id = filter_input(INPUT_GET,'travel_category_id', FILTER_VALIDATE_INT);
  if (!$travel_category_id) {
      $travel_category_id = 1;
  }

  // Get name for selected category
  $queryTravelCategory = 'SELECT * FROM travelCategories WHERE travelCategoryID = :travel_category_id';
  $statement1 = $db->prepare($queryTravelCategory);
  $statement1->bindValue(':travel_category_id', $travel_category_id);
  $statement1->execute();
  $category = $statement1->fetch();
  $travel_category_name = $category['travelCategoryName'];
  $statement1->closeCursor();

  //Get all categories
  $queryAllCategories = 'SELECT * FROM travelCategories ORDER BY travelCategoryID';
  $statement2 = $db->prepare($queryAllCategories);
  $statement2->execute();
  $travelCategories = $statement2->fetchAll();
  $statement2->closeCursor();

  //Get products for selected category
  $queryTravelProducts = 'SELECT * FROM travelItems WHERE travelItemCategoryID = :travel_category_id ORDER BY travelItemID';
  $statement3 = $db->prepare($queryTravelProducts);
  $statement3->bindValue(':travel_category_id', $travel_category_id);
  $statement3->execute(); // Execute the query to fetch data
  $travelItems = $statement3->fetchAll(); // Fetch all rows
  $statement3->closeCursor();
?>

<!DOCTYPE html>
<html>
<head>
  <title>CHAMPAGNE Voyage</title>
  <link rel="stylesheet" href="product_list_page.css" />
</head>
<body>
  <?php include 'header.php'; ?>
  <main>
        <figure class="categories">
            <h1>Product List Manager</h1>
            <aside>
                <!-- display a list of categories -->
                <h4>Categories</h4>
                <nav>
                    <ul>
                        <?php foreach ($travelCategories as $category) : ?>
                            <li>
                                <a href="?travel_category_id=<?php echo $category['travelCategoryID'];?>">
                                    <?php echo $category['travelCategoryName']; ?> 
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>       
            </aside>

            <section>
                <!-- display a table of products -->
                <h4><?php echo $travel_category_name; ?></h4>
                <table>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Size</th>
                        <th>Color</th>
                    </tr>

                    <?php foreach ($travelItems as $item) : ?>
                        <tr>
                            <td><?php echo $item['travelItemCode']; ?></td>
                            <td><?php echo $item['travelItemName']; ?></td>
                            <td><?php echo $item['description']; ?></td>
                            <td><?php echo $item['price']; ?></td>
                            <td><?php echo $item['size']; ?></td>
                            <td><?php echo $item['color']; ?></td>
                            <!-- Add more columns if necessary -->
                        </tr>
                    <?php endforeach; ?>      
                </table>
            </section>
        </figure>
    </main>  
    <footer><?php include 'footer.php'; ?></footer>
  </body>
</html>
