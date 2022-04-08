<?php include '../view/header.php'; ?>
<main>
  <section>
    <h1 class="heading"> Edit Recipe</h1>
  </section>

    <form action="index.php" method="post" id="edit_recipe_form">
        <input type="hidden" name="action" value="edit_recipe">
        <input type="hidden" name="recipe_id" value="<?php echo $recipe_id; ?>">
        </input>
        <label>Category:</label>
        <select name="category_id">
        <?php foreach ( $categories as $category ) : ?>
            <option value="<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br> <br>

        <label>Cuisine:</label>
        <select name="cuisine_id">
        <?php foreach ( $cuisines as $cuisine ) : ?>
            <option value="<?php echo $cuisine['cuisineID']; ?>">
                <?php echo $cuisine['cuisineName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br> <br>

        <label>Recipe Title:</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        </input>
        <br><br>

        <p class="text-form" >Recipe Ingredients:</p>
        <textarea name="ingredients" rows="4" cols="50"><?php echo $ingredients;?> </textarea>
        <br><br>

        <p class="text-form">Recipe Procedure:</p>
        <textarea name="procedure" rows="4" cols="50"> <?php echo $procedure;?> </textarea>
        <br><br>

        <p class="text-form">Recipe Source:</p>
        <textarea name="source" rows="4" cols="50"> <?php echo $source;?> </textarea>
        <br>

        <p class="text-form">&nbsp;</p>
        <input type="submit" value="Update recipe" />
        <br>
    </form>

    <p class="last_paragraph">
        <a href="index.php?action=list_recipes"><br> View Recipe List</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>
