<?php require "require/connect_db.php";
require "require/recipe_card.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foodini - Search results</title>

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

  <!-- grammata panw se bg me maska -->
  <div class="container-fluid photo-bg-syntages"></div>
  <div class="text-bg-syntages">
    <?php
    $search_thing = $_GET["search"];
    ?>
    <h1 class='mb-3'>Αποτελέσματα αναζήτησης</h1>


    <p>Πόνος μη μας έρθει μακάρι. Πέφτω και κυλιέμαι σα ζάρι. Κάνω πως ξεχνάω τ' όνομα σου. Κι όλα αλλάζουν γύρω μου απότομα. Ο άνεμος για πού θα μας πάρει;
      Πέφτω και κυλιέμαι σα ζάρι. Κάνω πως ξεχνάω τ' άρωμα σου. Κι όλα αλλάζουν γύρω μου
    </p>
  </div>
  <!-- telos grammata panw se bg me maska -->



  <!-- arxh midsection -->
  <section class="container-fluid  p-5">

    <?php
    if ($_GET["search"] != "") {
      $search_thing = $_GET["search"];
      echo "<h2 class='text-center my-5'>Συνταγές με: " . $search_thing . "</h1>";
    } else {
      echo "<h2 class='text-center my-5'>Συνταγές με: 🤔</h1>";
    }

    ?>

    <div class="container rounded syntages-container">
      <div class="row">
        <div class="col-lg-12 p-4">
          <!-- div me kartes syntagwn -->
          <div class="container-fluid ml-4 rounded syntages-midsection p-4">



            <?php
            if ($_GET["search"] != "") {
              $search_thing = $_GET["search"];

              $find_recipe_with_id_sql = "SELECT * FROM recipes WHERE title LIKE '%$search_thing%'";


              $recipe = mysqli_query($conn, $find_recipe_with_id_sql);
              $result_number = mysqli_num_rows($recipe);

              if ($result_number == 0) {
                echo "<h5>Δεν υπαρχουν συνταγές με: " . $search_thing . "</h5>";
              } else {
                while ($recipe_fetch = mysqli_fetch_assoc($recipe)) {
                  single_card_function($recipe_fetch);
                };
              }
            } else {
              echo "<h5>anazhthse kati valid glykoulh</h5>";
            }


            ?>


          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- telos midsection -->



  <!-- arxh footer -->
  <?php require "require/footer.php" ?>
  <!-- telos footer -->



</body>

</html>