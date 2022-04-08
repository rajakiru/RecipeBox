<!DOCTYPE html>
<html>
<head>
  <title> Recipe Box </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'>
  <link rel="stylesheet" type="text/css" href="display.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<!-- Nav Bar -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../main.html"> Home </a></li>
  <a href="/recipe_dub/recipe_display"> View Recipes  </a></li>
  <a href="/recipe_dub/recipe_manage/?action=show_add_form"> Add Recipes </a>
  <a href="/recipe_dub/recipe_manage"> Edit Recipes </a></li>
</div>

<ul class="ul_navbar menu" onclick="openNav()">&#9776; </ul>

<div class="navbar">
  <ul class="ul_navbar" id="navmenu">
    <li class="li_navbar" style="float: left"><a href="../main.html"> Home </a></li>
    <li class="li_navbar"><a href="/recipe_dub/recipe_manage"> Edit Recipes </a></li>
    <li class="li_navbar"><a href="/recipe_dub/recipe_manage/?action=show_add_form"> Add Recipes </a></li>
    <li class="li_navbar"><a href="/recipe_dub/recipe_display"> View Recipes  </a></li>
  </ul>
</div>

<main>
  <div class="header text-center">
    <h1> View Recipes </h1>
  </div>
    <section>
        <h3> Categories</h3>
        <div class="container">
            <div class="row">
              <div class="col-md-12 heroSlider-fixed">
                <div class="overlay">
              </div>
                 <!-- Slider -->
                 <div class="slider responsive">
                 <!-- display links for all categories -->
                 <?php foreach($categories as $category) : ?>
                 <div>
                     <a href="?category_id=<?php echo $category['categoryID']; ?>">
                         <img src="../images/categories/<?php echo $category['categoryID']; ?>.png"
                              class="category" alt="Category banner image"></img>
                     </a>
                 </div>
                 <?php endforeach; ?>
                 </div>
        				 <!-- control arrows -->
        				<div class="prev">
        					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        				</div>
        				<div class="next">
        					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        				</div>

              </div>
            </div>
          </div>
    </section>

    <section>
        <h3><?php echo $category_name; ?></h3>
        <nav>
        <ul>
            <!-- display links for recipes in selected category -->
            <?php foreach ($recipes as $recipe) : ?>
            <li><h4>
                <a href="?action=view_recipe&amp;recipe_id=<?php
                          echo $recipe['recipeID']; ?>">
                    <?php echo $recipe['recipeTitle']; ?>
                </a>
            </h4></li>
            <?php endforeach; ?>
        </ul>
        </nav>
    </section>
    <br> <br>
    <section>
        <h3> Cuisines</h3>
        <div class="container">
            <div class="row">
              <div class="col-md-12 heroSlider-fixed">
                <div class="overlay">
              </div>
                 <div class="slider responsive">
                 <!-- display links for all cuisines -->
                 <?php foreach($cuisines as $cuisine) : ?>
                 <div>
                     <a href="?cuisine_id=<?php echo $cuisine['cuisineID']; ?>">
                         <img src="../images/cuisine/<?php echo $cuisine['cuisineID']; ?>.png"
                              class="cuisine" alt="Cuisine banner image"></img>
                     </a>
                 </div>
                 <?php endforeach; ?>
                 </div>
                 <!-- control arrows -->
                <div class="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                </div>
                <div class="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </div>
              </div>
            </div>
          </div>
    </section>

    <section>
        <h3><?php echo $cuisine_name; ?></h3>
        <nav>
        <ul>
            <!-- display links for recipes in selected category -->
            <?php foreach ($recipes_cuisine as $recipe) : ?>
            <li><h4>
                <a href="?action=view_recipe&amp;recipe_id=<?php
                          echo $recipe['recipeID']; ?>">
                    <?php echo $recipe['recipeTitle']; ?>
                </a>
            </h4></li>
            <?php endforeach; ?>
        </ul>
        </nav>
        <br>
    </section>
</main>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>
<script  src="./script.js"></script>

<?php include '../view/footer.php'; ?>
