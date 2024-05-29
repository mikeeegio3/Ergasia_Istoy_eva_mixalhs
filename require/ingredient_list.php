<?php
function print_ingredients($x){
      echo "<div class='form-check m-2'>
        <input class='form-check-input' type='checkbox' name='ingredients[]' value='" . $x["ingredient_id"] . "' id='" . $x['ingredient_id'] . "'>
        <label class='form-check-label' for='" . $x['ingredient_id'] . "'>
        " . $x['title'] . "
        </label>
        </div>
    ";

}
  


