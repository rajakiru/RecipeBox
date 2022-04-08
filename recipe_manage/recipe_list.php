<?php include '../view/header.php'; ?>
<main>
    <h1 class="heading"> Edit Recipes </h1>
    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
        <ul>
        <?php foreach ($categories as $category) : ?>
            <li>
            <a href="?category_id=<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
        </nav>
        <br>
    </aside>

    <section>
        <!-- display a table of recipes -->
        <h2><?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th> Recipe Title</th>
                <th> Delete </th>
                <th> Edit </th>

            </tr>
            <?php foreach ($recipes as $recipe) : ?>
            <tr>
                <td><?php echo $recipe['recipeTitle']; ?></t>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_recipe">
                    <input type="hidden" name="recipe_id"
                           value="<?php echo $recipe['recipeID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $recipe['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
                <td><a href="?action=show_edit_form&amp;recipe_id=<?php
                      echo $recipe['recipeID']; ?>">
                       <input type="submit" value="Edit">
                     </a></td>
            </tr>

            <?php endforeach; ?>
        </table>
        <p class="last_paragraph">
            <a href="?action=show_add_form">Add recipe</a>
        </p>
    </section>
</main>
<section class="footer_copyright">
    <p class="copyright">
        &copy; <?php echo date("Y"); ?> RecipeBox by Kiruthika.
    </p>
    <p><a href='https://www.freepik.com/vectors/watercolor'>
      Images by photographeeasia - www.freepik.com
    </a></p>
</section>
<script  src="../main.js"></script>
</body>
</html>
