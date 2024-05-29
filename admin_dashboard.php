<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodini - Admin Dashboard</title>

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
            
            require "require/admin_dashboard_form.php";
            
            
        } else {
            require "require/login_form.php";
            
        }
        ?>

      


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