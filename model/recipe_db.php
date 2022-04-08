<?php
function get_recipes_by_category($category_id) {
    global $db;
    $query = 'SELECT * FROM recipe_details
              WHERE recipe_details.categoryID = :category_id
              ORDER BY recipeID';
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $recipes = $statement->fetchAll();
    $statement->closeCursor();
    return $recipes;
}

function get_recipes_by_cuisine($cuisine_id) {
    global $db;
    $query = 'SELECT * FROM recipe_details
              WHERE recipe_details.cuisineID = :cuisine_id
              ORDER BY recipeID';
    $statement = $db->prepare($query);
    $statement->bindValue(":cuisine_id", $cuisine_id);
    $statement->execute();
    $recipes_cuisine = $statement->fetchAll();
    $statement->closeCursor();
    return $recipes_cuisine ;
}

function get_recipe($recipe_id) {
    global $db;
    $query = 'SELECT * FROM recipe_details
              WHERE recipeID = :recipe_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":recipe_id", $recipe_id);
    $statement->execute();
    $recipe = $statement->fetch();
    $statement->closeCursor();
    return $recipe;
}

?>
