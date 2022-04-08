<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1>Categories</h1>
        <nav>
            <ul>
                <!-- display links for all categories -->
                <?php foreach($categories as $category) : ?>
                <li>
                    <a href="?category_id=<?php
                              echo $category['categoryID']; ?>">
                        <?php echo $category['categoryName']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </section>

    <section>
        <br><h3 style=""><?php echo $name; ?></h3>
        <div class="text_recipe">
            <?php if($recipe['recipeIngredients'] != '' && $recipe['recipeIngredients'] != NULL) {
              echo "<p><b>Ingredients:<br></b>"; echo $ingredients;
            }?>

            <?php if($recipe['recipeProcedure'] != '' && $recipe['recipeProcedure'] != NULL) {
              echo "<p><b>Procedure:<br></b>"; echo $procedure;
            }?>

            <?php if($recipe['recipeSource'] != '' && $recipe['recipeSource'] != NULL) {
              echo "<p><b>Sources:</b><br>"; echo "<a href= $source target=_blank> $source </a>";
            }?>

        </div>
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
