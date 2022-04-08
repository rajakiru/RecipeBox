<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
  <title> Recipe Box </title>
  <link rel="stylesheet" type="text/css" href="../main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- the body section -->
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../main.html"> Home </a>
  <a href="/recipe_dub/recipe_display"> View Recipes  </a>
  <a href="/recipe_dub/recipe_manage/?action=show_add_form"> Add Recipes </a>
  <a href="/recipe_dub/recipe_manage"> Edit Recipes </a>
</div>

<ul class="ul_navbar menu" onclick="openNav()"> <li> &#9776; </li></ul>

<section class="navbar">
  <ul class="ul_navbar" id="navmenu">
    <li class="li_navbar" style="float: left"><a href="../main.html"> Home </a></li>
    <li class="li_navbar"><a href="/recipe_dub/recipe_manage"> Edit Recipes </a></li>
    <li class="li_navbar"><a href="/recipe_dub/recipe_manage/?action=show_add_form"> Add Recipes </a></li>
    <li class="li_navbar"><a href="/recipe_dub/recipe_display"> View Recipes  </a></li>
  </ul>
</section>
