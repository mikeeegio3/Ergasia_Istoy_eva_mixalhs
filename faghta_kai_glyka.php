<?php
require "require/connect_db.php";
$category = $_GET["category"];
if (!isset($category)) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  if ($category == "Αλμυρό"){
    echo " <title>Foodini - Συνταγές Φαγητών</title>";
  }else{
    echo "<title>Foodini - Γλυκιές Συνταγές</title>";
  }
  ?>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style_reb.css">
  <script src="https://kit.fontawesome.com/51a1469d66.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="images/logo/icon/favicon.ico">
</head>

<body class="d-flex flex-column ">
  <!-- arxikopoiw times wste otan fortwsei h selida prwth fora na mhn vgazei error -->
  <?php
  $selected_ingredient = 0;
  $selected_difficulty = "";
  ?>


  <!-- arxh navbar -->
  <?php require "require/navbar.php" ?>
  <!-- telos navbar -->
  <!-- grammata panw se bg me maska -->
  <div class="container-fluid photo-bg-syntages"></div>
  <div class="text-bg-syntages">

    <?php
      if ($category == "Αλμυρό"){
        
        echo "<h1>Οι Συνταγές Φαγητών μας</h1>";
      }else{
        echo "<h1>Οι Γλυκιές μας Συνταγές</h1>";
      }
    ?>
    


    <p>Πόνος μη μας έρθει μακάρι. Πέφτω και κυλιέμαι σα ζάρι. Κάνω πως ξεχνάω τ' όνομα σου. Κι όλα αλλάζουν γύρω μου απότομα. Ο άνεμος για πού θα μας πάρει;
      Πέφτω και κυλιέμαι σα ζάρι. Κάνω πως ξεχνάω τ' άρωμα σου. Κι όλα αλλάζουν γύρω μου
    </p>
  </div>
  <!-- telos grammata panw se bg me maska -->



  <!-- arxh midsection -->
  <section class="container-fluid  p-5">
    <div class="container-fluid syntages-container">
      <div class="row">







        <div class="col-lg-4 p-4">
          <!-- div me olo to section epilogwn -->
          <form class="container rounded syntages-midsection-epiloges p-4" method="post">
            <h6>Επιλογή δυσκολίας:</h6>
            <div class="d-flex">
              <select class="form-select w-50" name="difficulty">
                <option value="">Κάθε Δυσκολία</option>
                <option value="'Εύκολη'">Ευκολες</option>
                <option value="'Μεσαία'">Μεσαίες</option>
                <option value="'Δύσκολη'">Δυσκολες</option>
              </select>
              <button type="submit" name="submit" value="submit" class="btn mx-3">Αναζήτηση</button>
            </div>

            <h6 class="mt-3">Επιλογή Υλικών:</h6>


            <!-- div me ola ta radio koublia -->
            <div class="container-fluid mt-2 d-flex flex-wrap">
              <div class='form-check m-2'>
                <input class='form-check-input' type='radio' name='ingredient' value="" id='0' checked>
                <label class='form-check-label' for='0'>All Ingredients</label>
              </div>
              <!--php pou printarei ola ta ylika kai ta id tous gia id twn radio  -->
              <?php
              $sql_ingredients = "SELECT * FROM ingredients";
              $result_ingredients = mysqli_query($conn, $sql_ingredients);


              while ($row_ingredients = mysqli_fetch_assoc($result_ingredients)) {
                echo "<div class='form-check m-2'>
                                <input class='form-check-input' type='radio' name='ingredient' value='" . $row_ingredients["ingredient_id"] . "' id='" . $row_ingredients['ingredient_id'] . "'>
                                <label class='form-check-label' for='" . $row_ingredients['ingredient_id'] . "'>
                                  " . $row_ingredients['title'] . "
                                </label>
                            </div>
                              ";
              }
              ?>



            </div>
          </form>

          <?php
          if (isset($_POST['submit'])) {
            $selected_ingredient = $_POST['ingredient'];
            $selected_difficulty = $_POST['difficulty'];
          }
          ?>


        </div>




        <!-- col me kartes syntagwn -->
        <div class="col-lg-8 p-4">
          <!-- div me kartes syntagwn -->
          <div class="container-fluid ml-4 rounded syntages-midsection p-4">



            <?php


            require "require/recipe_card.php";

            $diff_filter = "";
            if ($selected_difficulty == "") {

              $diff_filter = "";
              
            } else {
              $diff_filter = "and difficulty =" . $selected_difficulty;
              $lol =  '<h5 class="m-2">Συνταγές με βαθμό δυσκολίας: "' . $selected_difficulty . ' "</h5>';
              
            }



            if ($selected_ingredient > 0) {


              //apo ton pinaka pou ennwnei recipes kai ingredients, dialegoume ta recipe id's pou exoun sysxetistei me to ingredient id
              $find_recipe_ingredient = "SELECT * FROM recipes_ingredients WHERE ingredient_id = $selected_ingredient";

              //edw vrhskoume to onoma tou ignredient gia na to tuposoume
              $find_ingredient_name = "SELECT * FROM ingredients WHERE ingredient_id = $selected_ingredient";

              //to querry pou tha vrei ta recipe id pou exoun to igredient
              $recipes_with_ingredient_querry = mysqli_query($conn, $find_recipe_ingredient);

              //to querry pou tha vrei to onoma tou ingredient me to id tou
              $ingredient_name_sql = mysqli_query($conn, $find_ingredient_name);


              //to ingredient name
              $ingredient_name = mysqli_fetch_assoc($ingredient_name_sql);


              // print to ingredient name
              if ($diff_filter == "") {
                echo "<h5 class='m-2'>Συνταγές με: " . $ingredient_name['title'] . "</h5>";
              } else {
                echo "<h5 class='m-2'>Συνταγές με: " . $ingredient_name['title'] . " και βαθμό δυσκολίας: " . $selected_difficulty . "</h5>";
              }




              //while loop pou tha trexei gia kathe recepie pou exei mesa to ingredient
              while ($row_recipes_with_ingredient = mysqli_fetch_assoc($recipes_with_ingredient_querry)) {


                //apomononoume apo to row mono to recepie id se mia metavlhth
                $recipe_id = $row_recipes_with_ingredient['recipe_id'];


                //entolh pou tha vrei apo ton pinaka twn recipes afto me to id pou vrhkame apo panw
                $find_recipe_with_id_sql = "SELECT * FROM recipes WHERE recipe_id = $recipe_id and category = '" . $category . "' " . $diff_filter . " ";

                //to querry gia thn apo panw entolh
                $recipe = mysqli_query($conn, $find_recipe_with_id_sql);




                // while loop pou tha trexei gia kathe recipe me to id pou vrhkame parapanw (mono mia fora dld alla to evala se loop gt alliws evgaze error)
                while ($recipe_fetch = mysqli_fetch_assoc($recipe)) {
                  //fucntion pou tupwnei karta
                  single_card_function($recipe_fetch);;
                };
              };
            } else {

              if ($diff_filter != "") {
                echo "<h5 class='m-2'>Συνταγές με βαθμό δυσκολίας: " . $selected_difficulty . "</h5>";
              }
              //entolh..
              $find_recipe_with_id_sql = "SELECT * FROM recipes WHERE category = '" . $category . "' " . $diff_filter . " ";
             

              //querry
              $recipe = mysqli_query($conn, $find_recipe_with_id_sql);

              //while loop while loop pou tha printarei oles ta recipes
              while ($recipe_fetch = mysqli_fetch_assoc($recipe)) {
                //fucntion pou tupwnei karta
                single_card_function($recipe_fetch);
              };
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