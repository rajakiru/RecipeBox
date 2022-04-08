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
    $cuisine_id = filter_input(INPUT_GET, 'cuisine_id',
            FILTER_VALIDATE_INT);
    if ($cuisine_id == NULL || $cuisine_id == FALSE) {
        $cuisine_id = 1;
    }
    $categories = get_categories();
    $category_name = get_category_name($category_id);
    $cuisines = get_cuisines();
    $cuisine_name = get_cuisine_name($cuisine_id);
    $recipes = get_recipes_by_category($category_id);
    $recipes_cuisine = get_recipes_by_cuisine($cuisine_id);

    include('recipe_list.php');

} else if ($action == 'view_recipe') {
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

        include('recipe_view.php');
    }
}
?>
