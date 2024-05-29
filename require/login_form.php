<div class="container-fluid syntages-container p-5">
      <h3 class="text-center mb-4">User lmao</h3>
      <div class="container p-5 admin-form rounded" style="width: 30em;">

        <form action="login.php" method="post">

        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Username</label>
            <div class="col-sm-9">
              <input type="text" name="uname" class="form-control" id="inputPassword3">
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password" name="password" class="form-control" id="inputPassword3">
            </div>
          </div>
       
          <div class="row mb-3">
            <div class="col-sm-9">
              
            </div>
            <button type="submit" class="btn btn-primary col-auto">Sign in</button>
          </div>
          
        </form>

        <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
              form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                  event.preventDefault()
                  event.stopPropagation()
                }

                form.classList.add('was-validated')
              }, false)
            })
          })()
        </script>

        <?php
        include "connect_db.php";
        if (isset($_POST['submit'])) {
          $recipe_title = $_POST['title'];
          $recipe_category = $_POST['category'];
          $recipe_difficulty = $_POST['difficulty'];
          $recipe_rating = $_POST['rating'];
          $recipe_description = $_POST['description'];
          $recipe_description_tiny = $_POST['tiny_description'];
          $recipe_full_res = $_POST['full_res'];
          $recipe_thumbnail = $_POST['thumbnail'];
          $selected_ingredients_to_add = $_POST['ingredients'];

          $sql = "INSERT INTO recipes VALUES ('','$recipe_title', '', '$recipe_category', '$recipe_difficulty', '$recipe_description', '$recipe_description_tiny', '$recipe_description_tiny', '0', '$recipe_thumbnail', '$recipe_full_res')";
          mysqli_query($conn, $sql);
          echo "<script> alert('data has been inserted')</script>";
        }

        ?>

      </div>
    </div>
