<?php
function single_card_function ($x){
    echo "
        <a href='recepie_info.php?recipe_id=".$x['recipe_id']."' style='text-decoration: none;'>
            <div class='card mb-3 m-3'>
            <div class='row g-0'> 
                <div class='col-md-4'>
                <img src='images/eikones_syntagwn/thumbnail/".$x['thumbnail'].".jpg' class='img-fluid rounded-start' alt='...'>
                </div>
                <div class='col-md-8'>
                <div class='card-body'>
                    <h3 class='card-title text-capitalize'>".$x['title']."</h3>
                    <p class='card-text'>" . $x["description_tiny"] . "</p>
                    <p class='card-text'><small class='text-body-secondary'>" ."Δυσκολια: " .$x["difficulty"] . "</small></p>
                </div>
                </div>
            </div>
            </div>
        </a>
    ";}
    