<?php
require('../model/database.php');
require('../model/recipe_db.php');
require('../model/category_db.php');
require('../model/cuisine_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_recipes';
    }
}

if ($action == 'list_recipes') {
    $category_id = filter_input(INPUT_GET, 'category_id',
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
    }
    $category_name = get_category_name($category_id);
    $categories = get_categories();
    $recipes = get_recipes_by_category($category_id);
    include('recipe_list.php');
} else if ($action == 'delete_recipe') {
    $recipe_id = filter_input(INPUT_POST, 'recipe_id',
            FILTER_VALIDATE_INT);
    $category_id = filter_input(INPUT_POST, 'category_id',
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE ||
            $recipe_id == NULL || $recipe_id == FALSE) {
        $error = "Missing or incorrect recipe id or category id.";
        include('../errors/error.php');
    } else {
        delete_recipe($recipe_id);
        header("Location: .?category_id=$category_id");
    }
} else if ($action == 'show_add_form') {
    $categories = get_categories();
    $cuisines = get_cuisines();
    include('recipe_add.php');
} else if ($action == 'add_recipe') {
    $category_id = filter_input(INPUT_POST, 'category_id',
            FILTER_VALIDATE_INT);
    $cuisine_id = filter_input(INPUT_POST, 'cuisine_id',
            FILTER_VALIDATE_INT);
    $name = filter_input(INPUT_POST, 'name');
    $ingredients = filter_input(INPUT_POST, 'ingredients');
    $procedure = filter_input(INPUT_POST, 'procedure');
    $source = filter_input(INPUT_POST, 'source');
    //convert new line characters to <br> tags
    $ingredients = nl2br($ingredients, false);
    $procedure = nl2br($procedure, false);
    $source = nl2br($source, false);

    if ($category_id == NULL || $category_id == FALSE || $name == NULL) {
        $error = "Inavalid data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        add_recipe($category_id, $cuisine_id, $name, $ingredients, $procedure, $source);
        header("Location: .?category_id=$category_id");
    }

} else if ($action == 'show_edit_form') {
      $recipe_id = filter_input(INPUT_GET, 'recipe_id',
          FILTER_VALIDATE_INT);
      if ($recipe_id == NULL || $recipe_id == FALSE) {
        $error = 'Missing or incorrect recipe id.';
        include('../errors/error.php');
      } else {
        $categories = get_categories();
        $cuisines = get_cuisines();
        $recipe = get_recipe($recipe_id);
        // Get recipe data
        $name = $recipe['recipeTitle'];
        $ingredients = $recipe['recipeIngredients'];
        $procedure= $recipe['recipeProcedure'];
        $source = $recipe['recipeSource'];
        include('recipe_edit.php');
      }
} else if ($action == 'edit_recipe') {
    $recipe_id = filter_input(INPUT_POST, 'recipe_id',FILTER_VALIDATE_INT);
    $category_id = filter_input(INPUT_POST, 'category_id',
            FILTER_VALIDATE_INT);
    $cuisine_id = filter_input(INPUT_POST, 'cuisine_id',
            FILTER_VALIDATE_INT);
    $name = filter_input(INPUT_POST, 'name');
    $ingredients = filter_input(INPUT_POST, 'ingredients');
    $procedure = filter_input(INPUT_POST, 'procedure');
    $source = filter_input(INPUT_POST, 'source');

    if ($recipe_id == NULL || $recipe_id == FALSE) {
        $error = 'Missing or incorrect recipe id.';
        include('../errors/error.php');
    } else {
        edit_recipe($recipe_id, $category_id, $cuisine_id, $name, $ingredients, $procedure, $source);
        header("Location: .?category_id=$category_id");
    }
}
?>
