<?php

function find_recipe_amount(){
    require "connect_db.php";
    $entry_number_sql = "SELECT * FROM recipes";
    $entry_number_querry = mysqli_query($conn, $entry_number_sql);
    $entry_number = mysqli_num_rows($entry_number_querry);
    return $entry_number;
}
 
?>