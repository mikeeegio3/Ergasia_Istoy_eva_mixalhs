
<form class="row g-3 needs-validation" method="post" novalidate enctype="multipart/form-data">

<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Recipe Name</label>
    <input name="title" type="text" class="form-control" id="inputEmail4" required>
</div>

<div class="col-md-3">
    <label for="inputPassword4" class="form-label">Category</label>
    <select name="category" id="inputState" class="form-select" required>
        <option value="Αλμυρό" selected>Φαγητό</option>
        <option value="Γλυκό">Γλυκό</option>
    </select>
</div>

<div class="col-4">
    <label for="inputAddress" class="form-label">Difficulty</label>
    <select name="difficulty" id="inputState" class="form-select" required>
        <option value="Εύκολη" selected>Εύκολη</option>
        <option value="Μεσαία">Μεσαία</option>
        <option value="Δύσκολη">Δύσκολη</option>
    </select>
</div>

<div class="col-5 pt-5">
    <label for="" class="">Stars </label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="rating" id="rating_radio1" value="1" required>
        <label class="form-check-label" for="rating_radio1">1</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="rating" id="rating_radio2" value="2" required>
        <label class="form-check-label" for="rating_radio2">2</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="rating" id="rating_radio3" value="3" required>
        <label class="form-check-label" for="rating_radio3">3</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="rating" id="rating_radio4" value="4" required>
        <label class="form-check-label" for="rating_radio4">4</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="rating" id="rating_radio5" value="5" required>
        <label class="form-check-label" for="rating_radio5">5</label>
    </div>
</div>



<div class="col-md-12">
    <span class="input-group-text">Description</span>
    <textarea name="description" class="form-control" aria-label="With textarea" required></textarea>
</div>

<div class="col-md-8">
    <span class="input-group-text">Tiny Description</span>
    <textarea name="tiny_description" class="form-control" aria-label="With textarea" required></textarea>
    </select>
</div>

<div class="col-md-2">
    <label for="inputZip" class="form-label">Image</label>
    <input name="full_res" type="file" class="form-control" id="inputZip" required>
</div>








<h3 class="text-center mb-4 mt-5">Select the ingredients:</h3>
<div class="container-fluid mt-2 d-flex flex-wrap">

    <!--php pou printarei ola ta ylika kai ta id tous gia id twn radio  -->
    <?php
    $sql_ingredients = "SELECT * FROM ingredients";
    $result_ingredients = mysqli_query($conn, $sql_ingredients);


    while ($row_ingredients = mysqli_fetch_assoc($result_ingredients)) {
        print_ingredients($row_ingredients);
    }

    ?>



</div>
<div class="col-12 mt-5 text-center">
    <button name="submit" type="submit" class="btn btn-lg" style='background-color: #DC6B19;'>Submit the Recipe</button>
</div>

</form>