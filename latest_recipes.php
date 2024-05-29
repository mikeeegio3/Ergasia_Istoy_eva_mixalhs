<?php require "require/connect_db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodini - Latest Recipes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style_reb.css">
    <script src="https://kit.fontawesome.com/51a1469d66.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="images/logo/icon/favicon.ico">
</head>

<body class="d-flex flex-column ">



  <!-- arxh navbar -->
  <?php require "require/navbar.php" ?>
  <!-- telos navbar -->

    <section class="container  my-5">
        <h3 class="text-center">Admin Dashboard</h3>


    </section>

    <section class="container-fluid  p-5">


        <div class="container-fluid syntages-container p-5 rounded">

            <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
            <a href="logout.php" class="text-decoration-none logout-button">Logout</a>

            <h3 class="text-center mb-4">Latest additions:</h3>
            <div class="container w-75 p-5 admin-form rounded">
                <?php
                // emfanizei tis teleutaies 3 syntages
                    require "require/recipe_card_for_edit.php";
                    $entry_number_sql = "SELECT * FROM recipes";
                    $entry_number_querry = mysqli_query($conn, $entry_number_sql);
                    $last_recipe_added = mysqli_num_rows($entry_number_querry);
                    $all_recipes = range(1, $last_recipe_added);
                    array_reverse($all_recipes);
                    
                    for ($x = 0; $x < 3; $x++){
                        $sql = "SELECT * FROM recipes WHERE recipe_id = ".$all_recipes[$x]."";
                        $querry = mysqli_query($conn, $sql);
                        while ($result = mysqli_fetch_assoc($querry)) {
                            //fucntion pou tupwnei karta
                            single_card_function($result);
                          };
                    } 
                   
                    
                ?>
                

            </div>

            
        </div>



    </section>


    <!-- arxh midsection -->
    <section class="container-fluid  p-5">


    </section>
    <!-- telos midsection -->



  <!-- arxh footer -->
  <?php require "require/footer.php" ?>
  <!-- telos footer -->



</body>

</html>