<?php require "require/connect_db.php"; require "require/find_entry_amount.php"; $search_thing = ''; $entry_number = find_recipe_amount();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foodini - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/51a1469d66.js" crossorigin="anonymous"></script>

  <link rel="icon" type="image/x-icon" href="images/logo/icon/favicon.ico">



</head>

<body>
  <!-- arxh navbar -->
  <?php require "require/navbar.php" ?>
  <!-- telos navbar -->


  <!-- carousel -->
  <header class="header">
    <?php require "require/home_carousel.php" ?>
  </header>
  <!-- telos carousel -->



  <!-- mesaio container -->
  <div class="container-fluid w-75 rounded my-5 p-5" style="background-color: #F7C566;">
    <div class="container">

      <section class="py-5">
        <div class="container main ">
          <h1 class="fw-light">Innovative Cooking</h1>
        </div>
      </section>

      <section class="" id="c-box2">


        <div class="container-fluid  c-main-cnt d-block d-sm-flex justify-content-center justify-content-around">

          <div class="card" style="width: 22%;">

            <div class="card-body overflow-hidden p-0" style="box-shadow: 2px 2px 3px 1px rgb(112, 112, 112); border-radius: 10px;">
              <img src="images/home_cards/almira.jpg" class="card-img-top card-img-bottom" alt="...">
              <a href="faghta_kai_glyka.php?category=Αλμυρό">
                <div class="overlay">
                  <h3>Φαγητά</h3>
                  <p>Οι Συνταγές φαγητών μας</p>

                </div>
              </a>


            </div>
          </div>
          <div class="card" style="width: 22%;">

            <div class="card-body overflow-hidden p-0" style="box-shadow: 2px 2px 3px 1px rgb(112, 112, 112); border-radius: 10px;">
              <img src="images/home_cards/glyka.jpg" class="card-img-top card-img-bottom" alt="...">
              <a href="faghta_kai_glyka.php?category=Γλυκό">
                <div class="overlay">
                  <h3>Γλυκά</h3>
                  <p>Οι Γλυκίες μας Συνταγές</p>

                </div>
              </a>


            </div>
          </div>
          <div class="card" style="width: 22%;">

            <div class="card-body overflow-hidden p-0" style="box-shadow: 2px 2px 3px 1px rgb(112, 112, 112); border-radius: 10px;">
              <img src="images/home_cards/mail.jpg" class="card-img-top card-img-bottom" alt="...">
              <a href="mailto:dpsd19023@aegean.gr">
                <div class="overlay">
                  <h3>Ρωτήστε μας κατι</h3>
                  <p>Στείτλε μας mail</p>

                </div>
              </a>


            </div>
          </div>




        </div>




      </section>
    </div>
  </div><!-- telos mesaiou -->

  <!-- arxh search -->
  <section class="container-fluid my-5">
    <?php require "require/home_search.php"; ?>
  </section>
  <!-- telos search -->

  <!-- arxh footer -->
  <?php require "require/footer.php" ?>
  <!-- telos footer -->

</body>

</html>