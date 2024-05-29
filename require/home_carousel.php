<!-- div me tis eikones kai ta koubia-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

<!-- koubia karousel -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>


<!-- div me eikones -->
<div class="carousel-inner">

  <?php
  
  // ftiaxnei array apo to 1(to id ths prwths sntaghs) mexri to id ths teleitaias(afto pou vrhka pio panw)
  $random = range(1, $entry_number);
  shuffle($random);
  // prwta echo mia eikona ektos loop gia na parei class active 
  $sql = "SELECT * FROM recipes where recipe_id = $random[0]";
  $querry = mysqli_query($conn, $sql);
  $fetch = mysqli_fetch_assoc($querry);
  echo " <div class='carousel-item active'style='background-image: url(images/eikones_syntagwn/full_res/" . $fetch['full_res'] . ".jpg)'>
      <div class='carousel-caption'>
        <h5>Προτεινόμενες Συνταγές της Εβδομάδας</h5>
        <p class='text-capitalize'>" . $fetch['title'] . "</p>
      </div>
    </div>";

  // for loop pou kanei echo alles 2 
  for ($x = 1; $x < 3; $x++) {
    $sql = "SELECT * FROM recipes where recipe_id = $random[$x]";
    $querry = mysqli_query($conn, $sql);
    $fetch = mysqli_fetch_assoc($querry);
    echo " <div class='carousel-item 'style='background-image: url(images/eikones_syntagwn/full_res/" . $fetch['full_res'] . ".jpg)'>
        <div class='carousel-caption'>
          <h5>Προτεινόμενες Συνταγές της Εβδομάδας</h5>
          <p class='text-capitalize'>" . $fetch['title'] . "</p>
        </div>
      </div>";
  };
  ?>

</div>

<!-- koubia bros pisw -->
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>


</div>