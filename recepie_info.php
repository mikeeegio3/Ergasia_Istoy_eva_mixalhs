<?php require "require/connect_db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php

  $recipe_id = $_GET['recipe_id'];
  $recipe_info_sql = "SELECT * FROM recipes WHERE recipe_id = $recipe_id";
  $recipe = mysqli_query($conn, $recipe_info_sql);
  $row = mysqli_fetch_assoc($recipe);

  echo "
        <title>Foodini - " . $row["title"] . "</title>
      ";
  ?>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_reb.css">

  <script src="https://kit.fontawesome.com/51a1469d66.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="images/logo/icon/favicon.ico">
</head>

<body class="d-flex flex-column ">
  <?php

  ?>
  <!-- arxh navbar -->
  <?php require "require/navbar.php" ?>
  <!-- telos navbar -->


  <!-- div eikonas -->
  <div class="container d-flex justify-content-center mb-4">
    <?php
    $recipe_info_sql = "SELECT * FROM recipes WHERE recipe_id = $recipe_id";
    $recipe = mysqli_query($conn, $recipe_info_sql);
    $row = mysqli_fetch_assoc($recipe);

    echo "
        <img src='images/eikones_syntagwn/full_res/" . $row["full_res"] . ".jpg' class='rounded' style='max-height: 30rem;'>
      ";
    ?>



  </div>
  <!-- telos div eikonas -->



  <!-- php me div gia titlo kai upotitlo -->
  <?php
  $recipe_info_sql = "SELECT * FROM recipes WHERE recipe_id = $recipe_id";
  $recipe = mysqli_query($conn, $recipe_info_sql);
  $row = mysqli_fetch_assoc($recipe);

  echo "
        <div class'container d-flex justify-content-center mt-5'>
          <h1 class='text-center text-capitalize'>" . $row['title'] . "</h1>
        </div>
        <div class='container d-flex justify-content-center mt-1'>
          <h4>Συνταγή για " . $row['title'] . "</h4>
        </div>

      ";
  ?>
  <!-- telos php me div gia titlo kai upotitlo -->



  <!-- breadcrubs -->
  <div class="container">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
      <ol class="breadcrumb">


        <!-- php gia responsive onoma breadcrumb -->
        <?php
        $recipe_info_sql = "SELECT * FROM recipes WHERE recipe_id = $recipe_id";
        $recipe = mysqli_query($conn, $recipe_info_sql);
        $row = mysqli_fetch_assoc($recipe);
        if ($row['category'] == "Αλμυρό") {
          echo "<li class='breadcrumb-item'><a href='faghta_kai_glyka.php?category=Αλμυρό' class='text-reset'>Φαγητά</a></li>";
        } else {
          echo "<li class='breadcrumb-item'><a href='faghta_kai_glyka.php?category=Γλυκό' class='text-reset'>Γλυκά</a></li>";
        }


        echo "
          <li class='breadcrumb-item active text-capitalize' aria-current='page'>" . $row['title'] . "</li>
      ";
        ?>

      </ol>
    </nav>
  </div>
  <!-- telos breadcrubs -->

  <!-- mesaio container -->
  <div class="container-fluid  rounded my-3 p-5">
    <!-- ftiaxnw ena row me 3 col -->
    <div class="container-fluid row  py-3 rounded" style="background-color: #F7C566; ">

      <div class="col-lg-2 p-3">
        <div class="container-fluid rounded py-3" style="background-color: #FFF8DC;">
          <div class="container">
            <h2 class="text-center">Υλικα</h2>
            <ul class="list">

              <?php
              $recipe_info_sql = "SELECT * FROM recipes_ingredients WHERE recipe_id = $recipe_id";
              $all_ingredients_querry = mysqli_query($conn, $recipe_info_sql);
              $ingredient_id_fetch = mysqli_fetch_assoc($all_ingredients_querry);


              while ($ingredient_id_fetch = mysqli_fetch_assoc($all_ingredients_querry)) {
                $one_ing = $ingredient_id_fetch['ingredient_id'];
                $find_ing_sql = "SELECT * FROM ingredients WHERE ingredient_id = $one_ing";
                $find_ing_querry = mysqli_query($conn, $find_ing_sql);

                while ($find_ing_fetch = mysqli_fetch_assoc($find_ing_querry)) {
                  echo "
                            <li>" . $find_ing_fetch['title'] . "</li>
                        ";
                }
              }


              ?>

            </ul>
          </div>
        </div>

      </div>
      <div class="col-lg-10 text-center p-3 px-5">
        <div class="container-fluid rounded text-center py-3 px-5 h-100" style="background-color: #FFF8DC;">
          <?php
          $recipe_info_sql = "SELECT * FROM recipes WHERE recipe_id = $recipe_id";
          $recipe = mysqli_query($conn, $recipe_info_sql);
          $row = mysqli_fetch_assoc($recipe);

          echo "
      <h2 class='mb-5'>Περιγραφή</h2>
        <p>" . $row['description'] . "</p>
      ";
          ?>
        </div>





      </div>


    </div>


  </div>
  <!-- telos mesaiou -->

  <!-- arxh footer -->
  <?php require "require/footer.php" ?>
  <!-- telos footer -->


</body>

</html>