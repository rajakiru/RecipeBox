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

function delete_recipe($recipe_id) {
  global $db;
  $query = 'DELETE FROM recipe_details
            WHERE recipeID = :recipe_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':recipe_id', $recipe_id);
  $statement->execute();
  $statement->closeCursor();
}

function add_recipe($category_id, $cuisine_id, $name, $ingredients, $procedure, $source) {
global $db;
$query = 'INSERT INTO recipe_details
             (categoryID, cuisineID, recipeTitle, recipeIngredients, recipeProcedure, recipeSource)
          VALUES
             (:category_id, :cuisine_id,:name, :ingredients, :procedure, :source)';
$statement = $db->prepare($query);
$statement->bindValue(':category_id', $category_id);
$statement->bindValue(':cuisine_id', $cuisine_id);
$statement->bindValue(':name', $name);
$statement->bindValue(':ingredients', $ingredients);
$statement->bindValue(':procedure', $procedure);
$statement->bindValue(':source', $source);
$statement->execute();
$statement->closeCursor();
}

function edit_recipe($recipe_id, $category_id, $cuisine_id, $name, $ingredients, $procedure, $source) {
global $db;
$query = 'UPDATE recipe_details
          SET categoryID= :category_id, cuisineID= :cuisine_id, recipeTitle= :name, recipeIngredients =:ingredients, recipeProcedure =:procedure, recipeSource =:source
          WHERE recipeID = :recipe_id';
$statement = $db->prepare($query);
$statement->bindValue(':recipe_id', $recipe_id);
$statement->bindValue(':category_id', $category_id);
$statement->bindValue(':cuisine_id', $cuisine_id);
$statement->bindValue(':name', $name);
$statement->bindValue(':ingredients', $ingredients);
$statement->bindValue(':procedure', $procedure);
$statement->bindValue(':source', $source);
$statement->execute();
$statement->closeCursor();
}

?>
