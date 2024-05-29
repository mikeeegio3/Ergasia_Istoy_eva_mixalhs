<?php require "require/connect_db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodini - Profile Info</title>

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


        if (isset($_SESSION['name']) && isset($_SESSION['user_name'])) {
        ?>



            <div class="container-fluid syntages-container p-5 rounded">
                <div class="container  row w-50">
                    <div class="col-4 "><img src="images/profile_images/<?php echo $_SESSION['user_name'] ?>.jpg" alt="" srcset="" class="profile-image"></div>
                    <div class="col-6 ">Hello,<h1> <?php echo $_SESSION['name'];
                                                    echo " ";
                                                    echo $_SESSION['last_name']; ?></h1>
                    </div>


                </div>

                <div class="container row">
                    <div class="col-7"><a href="logout.php" class="text-decoration-none logout-button">Logout</a></div>
                    <div class="col-5">
                        <h3 class="text-center mb-4">Last recipes you added:</h3>
                    </div>

                </div>

                <div class="container-fluid row">
                    <div class="col-3 "></div>
                    <div class="col-8">
                        <div class="container  p-5 admin-form rounded">
                            <?php
                            // emfanizei tis teleutaies 3 syntages
                            require "require/recipe_card_for_edit.php";
                            $sql = "SELECT * FROM recipes where author = '" . $_SESSION['user_name'] . "'";
                            $querry = mysqli_query($conn, $sql);
                            while ($result = mysqli_fetch_assoc($querry)) {

                                single_card_function($result);
                            };



                            ?>


                        </div>
                    </div>
                </div>





            </div>




        <?php
        } else {
            require "require/login_form.php";
        }
        ?>

        <!-- gia na mhn kanei resubmit me kathe refresh -->
        <?php require "require/no_resubmit.php" ?>



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