<?php require "require/connect_db.php"; require "require/ingredient_list.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodini - Add recipe</title>

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


        <?php
        $now_ing = false;

        if (isset($_SESSION['name']) && isset($_SESSION['user_name'])) {
        ?>

            <div class="container-fluid syntages-container p-5 rounded">

                <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
                <a href="logout.php" class="text-decoration-none logout-button">Logout</a>

                <h3 class="text-center mb-4">Add a recipe:</h3>
                <div class="container w-50 p-5 admin-form rounded">

                    <!-- forma -->
                   <?php require "require/add_recipe_form.php"; ?>
                   <!-- javascript gia na kanei submit mpno egurh forma -->
                   <?php require "require/form_empty_check.php"; ?>

                   

                    <?php                   
                    if (isset($_POST['submit'])) {

                        // photografia stuff
                        $img_name = $_FILES['full_res']['name'];
                        $img_temp_name = $_FILES['full_res']['tmp_name'];
                        $img_type = $_FILES['full_res']['type'];
                        $find_extention = explode('.', $img_name);
                        $img_extention = end($find_extention);

                        reset($find_extention);
                        $img_only_name = current($find_extention);

                        $allowed = array('jpg');
                        if (in_array($img_extention, $allowed)) {
                            $img_destination = 'images/eikones_syntagwn/full_res/' . $img_name;
                            move_uploaded_file($img_temp_name, $img_destination);
                        }
                        // telos fotografia stuff


                        // xwris afto to id auto increment den tha lavmane upopshn an exei svhstei kati kai tha synexize me id megalutero apo to prwhgoumeno syn 1
                        $sql_reset_ai = "ALTER TABLE recipes AUTO_INCREMENT = 1";
                        mysqli_query($conn, $sql_reset_ai);
                        if (!$recipe_title = '' && !$recipe_category = '' && !$recipe_description = '' && !$recipe_description_tiny = '' && !$recipe_difficulty = '' && !$recipe_thumbnail = '' && !$recipe_full_res = '' && !$recipe_rating = '') {
                            $recipe_title = $_POST['title'];
                            $recipe_category = $_POST['category'];
                            $recipe_difficulty = $_POST['difficulty'];
                            $recipe_rating = $_POST['rating'];
                            $recipe_description = $_POST['description'];
                            $recipe_description_tiny = $_POST['tiny_description'];
                            $recipe_full_res = $img_only_name;

                            $recipe_thumbnail = $img_only_name."-mikro";
                            $recipe_author = 0;

                            $sql = "INSERT INTO recipes VALUES ('','$recipe_title', '$recipe_category', '$recipe_difficulty', '$recipe_description', '$recipe_description_tiny', '$recipe_rating', '$img_only_name', '$recipe_thumbnail', '$recipe_full_res', '$recipe_author')";
                            mysqli_query($conn, $sql);
                            echo "<script> alert('data has been inserted')</script>";






                            $entry_number_sql = "SELECT * FROM recipes";
                            $entry_number_querry = mysqli_query($conn, $entry_number_sql);
                            $last_recipe_added = mysqli_num_rows($entry_number_querry);



                            $selected_ingredients_to_add = $_POST['ingredients'];
                            foreach ($selected_ingredients_to_add as $selected_one) {

                                $sql = "INSERT INTO recipes_ingredients(`recipe_id`, `ingredient_id`) VALUES ('$last_recipe_added','$selected_one')";
                                mysqli_query($conn, $sql);
                            }
                        }
                    }

                    ?>



                </div>

                <div class="col=12 text-center my-5"><a class="last-added-button" href="latest_recipes.php">See last added recipes</a></div>
            </div>

        <?php
        } else {
            require "require/login_form.php";
        }
        ?>

        <!-- gia na mhn kanei resubmit me kathe refresh -->
       <?php require "require/no_resubmit.php" ?>



    </section>


  <!-- arxh footer -->
  <?php require "require/footer.php" ?>
  <!-- telos footer -->


</body>

</html>