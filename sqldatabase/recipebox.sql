-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2021 at 09:12 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--
CREATE DATABASE IF NOT EXISTS `recipe` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `recipe`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(225) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'Desserts'),
(2, 'Appetizers'),
(4, 'Main Dishes'),
(5, 'Beverages'),
(6, 'Breads'),
(7, 'Soups'),
(8, 'Salad'),
(9, 'Misc');

-- --------------------------------------------------------

--
-- Table structure for table `cuisines`
--

DROP TABLE IF EXISTS `cuisines`;
CREATE TABLE IF NOT EXISTS `cuisines` (
  `cuisineID` int(11) NOT NULL AUTO_INCREMENT,
  `cuisineName` varchar(100) NOT NULL,
  PRIMARY KEY (`cuisineID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuisines`
--

INSERT INTO `cuisines` (`cuisineID`, `cuisineName`) VALUES
(1, 'Japanese'),
(2, 'American'),
(3, 'Italian'),
(4, 'Chinese'),
(5, 'Indian'),
(6, 'Korean'),
(7, 'Thai'),
(8, 'French'),
(9, 'Spanish'),
(10, 'Indonesian'),
(11, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_details`
--

DROP TABLE IF EXISTS `recipe_details`;
CREATE TABLE IF NOT EXISTS `recipe_details` (
  `recipeID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryID` int(11) NOT NULL,
  `cuisineID` int(11) NOT NULL,
  `recipeTitle` varchar(50) DEFAULT NULL,
  `recipeIngredients` text DEFAULT NULL,
  `recipeProcedure` text DEFAULT NULL,
  `recipeSource` text DEFAULT NULL,
  PRIMARY KEY (`recipeID`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe_details`
--

INSERT INTO `recipe_details` (`recipeID`, `categoryID`, `cuisineID`, `recipeTitle`, `recipeIngredients`, `recipeProcedure`, `recipeSource`) VALUES
(3, 2, 3, 'Garlic Roasted Potatoes', '- 3 pounds small red or white potatoes\r\n- 1/4 cup good olive oil\r\n- 1 1/2 teaspoons kosher salt\r\n- 1 teaspoon freshly ground black pepper\r\n- 2 tablespoons minced garlic (6 cloves)\r\n- 2 tablespoons minced fresh parsley', '1) Preheat the oven to 400 degrees F.\r\n2) Cut the potatoes in half or quarters and place in a bowl with the olive oil, salt, pepper, and garlic; toss until the potatoes are well coated. \r\n3) Transfer the potatoes to a sheet pan and spread out into 1 layer.\r\n4) Roast in the oven for 45 minutes to 1 hour or until browned and crisp. Flip twice with a spatula during cooking in order to ensure even browning.\r\n5) Remove the potatoes from the oven, toss with parsley, season to taste, and serve hot.', 'https://www.foodnetwork.com/recipes/ina-garten/garlic-roasted-potatoes-recipe-1913067'),
(13, 2, 2, 'Chocolate Strawberries', '- Chocolate<br>\r\n- Strawberries<br>\r\n- Sprinkles', 'Put Chocolate in Strawberries', ''),
(15, 1, 1, 'Koi Pond Mousse Cake', '', '', '  https://www.youtube.com/watch?v=fIwGmiLqeW0&list=LL&index=262&ab_channel=petrichoro  '),
(19, 1, 2, 'Perfect Brownies', '- 10 tablespoons (145 grams) unsalted butter<br>\r\n- 1 1/4 cups (250 grams) granulated sugar<br>\r\n- 3/4 cup plus 2 tablespoons (80 grams) unsweetened cocoa powder, natural or Dutch-process<br>\r\n- 1/4 rounded teaspoon kosher salt, use slightly less if using fine sea or table salt<br>\r\n- 1 teaspoon vanilla extract<br>\r\n- 2 large cold eggs<br>\r\n- 1/2 cup (65 grams) all-purpose flour<br>\r\n- 2/3 cup (75 grams) chopped walnuts or pecans, optional', '1. Pre-heat oven to 325 degrees F (162 degree celcius)<br>\r\n2. Add enough water to a medium saucepan so that it is 1 to 2 inches deep. Heat water until barely simmering.<br>\r\n3. Combine butter, sugar, cocoa powder, and the salt in a medium heat-safe bowl.<br>\r\n4. Rest the bowl over simmering water (if the bottom of the bowl touches the water, remove a little water). Stir mixture occasionally until the butter has melted and the mixture is quite warm. Don’t worry if it looks gritty; it will become smooth once you add the eggs and flour.<br>\r\n5. Remove the bowl from heat and set aside for 3 to 5 minutes until it is only warm, not hot.<br>\r\n6. Stir in the vanilla with a spoon. <br>\r\n7. Add the eggs, one at a time, stirring vigorously after each one.<br>\r\n8. When the batter looks thick, shiny and well blended, add the flour and stir until fully incorporated, then beat with the wooden spoon or spatula for 40 to 50 strokes. (The batter will be thick). Beat vigorously here. You want to see the brownie batter pulling away from the sides of the bowl.<br>\r\n9. Stir in nuts, if using. Spread evenly in lined pan.<br>\r\n10. Bake the brownies for 20 to 25 minutes or until a toothpick can be inserted into the center and come out with a few moist crumbs. As a visual test, brownies are done when the edges will look dry and the middle still looks slightly underbaked.', 'https://www.inspiredtaste.net/24412/cocoa-brownies-recipe/'),
(20, 1, 1, 'Mochi Donuts', '- 3/4cup(100g) Hot Cake Mix<br>\r\n- 3/4cup(100g) Shiratamako (lumpy glutinous rice flour)<br>\r\n- 200g (7oz.) silken Tofu (soft Tofu)<br>\r\nSugar Glaze<br>\r\n- 5 tbsp. powdered sugar<br>\r\n- 1 tbsp. water', '1. Cut parchment paper into 4 inch (10cm) square pieces.<br>\r\n2. Put Shiratamako and silken Tofu in a bowl and mix well until smooth. Then add hot cake mix and mix well.<br>\r\n3. Divide it into 6 pieces. Then divide each into 8 pieces and make small balls. On the square parchment paper, arrange 8 balls to form a circle.<br>\r\n4. Deep fry in oil at 170C (340F), 3 pieces at a time, for 1.5 minutes on each side until golden. Remove from the oil and drain. <br>\r\n5. Mix the sugar glaze, dip in hot donuts, let cool completely. ', 'https://www.youtube.com/watch?v=uGCmCDkpY6w&list=LL&index=542&ab_channel=ochikeron'),
(21, 4, 5, 'Paneer Butter Masala', '', '', 'https://www.youtube.com/watch?v=pjJgCXx_FRk&list=LL&index=557&ab_channel=IndianVegetarianRecipes'),
(22, 1, 8, 'Souflle Gateau au Chocolat', '150g couverture bitter chocolate<br>\r\n150g milk<br>\r\n3 egg yolks<br>\r\n30g cake flour<br>\r\n10g cocoa powder<br>\r\n3 egg white<br>\r\n50g sugar', '', 'https://www.youtube.com/watch?v=SYeajUwunOE&list=LL&index=558&ab_channel=HidaMariCooking'),
(23, 3, 7, 'Spring Rolls', '', '', 'https://www.youtube.com/watch?v=PfmeDb3KGOU&ab_channel=ThaiChefFood'),
(26, 1, 2, 'Cream Cheese Crumb Bars', '1/3 cup butter, softened<br>\r\n1/3 cup brown sugar plus two tablespoons, divided<br>\r\n1 cup all-purpose flour<br>\r\n1 cup walnuts, chopped and divided<br>\r\n1 tablespoon vegetable or canola oil<br>\r\n¼ cup granulated sugar<br>\r\n8 ounce package cream cheese, softened<br>\r\n1 egg beaten<br>\r\n2 tablespoons whole milk or light cream<br>\r\n1 tablespoon lemon juice<br>\r\n<br>\r\n½ teaspoon vanilla   ', '   Preheat oven to 350 degrees.<br>\r\n<br>\r\nLine an 8×8-inch pan with foil pressing tightly up sides. This will help remove the finished bars once baked.<br>\r\n<br>\r\nIn the bowl of a stand mixer with paddle attachment, cream the butter and the 1/3 cup of brown sugar until fluffy.<br>\r\n<br>\r\nAdd flour until just combined.<br>\r\n<br>\r\nRemove from mixer and blend ½ of the chopped nuts in by hand and stir mixture until a small crumb forms. Reserve one cup of this mixture. Take remaining mixture and press into the prepared 8X8 pan and bake for 12 minutes. Place on rack to cool.<br>\r\n<br>\r\nTo the reserved cup of crumb mixture, add the remaining 2 tablespoons brown sugar, remaining ½ cup chopped nuts and the one tablespoon of oil. Mix thoroughly and set aside.<br>\r\n<br>\r\nPlace stand mixer bowl back on with paddle and cream the sugar and cream cheese until light and fluffy. Scrape bowl and mix again.<br>\r\n<br>\r\nAdd egg, milk, lemon juice and vanilla and beat until very light and creamy.<br>\r\n<br>\r\nPour this mixture into cooled pan over the cooked crust and top with reserved topping pressing just slightly into mixture.<br>\r\n<br>\r\nBake for 25 minutes and cool on a rack in the pan. Once cool, lift the foil edges up and place the bar on a cutting board. Fold the foil down flat and slip the foil out.<br>\r\nWith a sharp serrated knife, cut the whole pan into 3 rows x 3 rows for total of nine squares. Then, if you’d like, cut each square in half corner to corner yielding 18 triangle pieces like we show in our photos   ', '   https://www.afamilyfeast.com/cream-cheese-crumb-bars/   '),
(33, 7, 5, 'Rasam', '', '', 'https://www.indianhealthyrecipes.com/tomato-rasam-recipe/'),
(48, 5, 6, 'Dalgona Coffee', '- 2 tbsp instant [coffee] or espresso powder<br>\r\n- 2 tbsp [sugar](https://www.bbc.co.uk/food/sugar)<br>\r\n- 2 tbsp very hot water<br>\r\n- 400ml/14fl oz [milk]', '1. Add the instant coffee, sugar and hot water to a medium mixing bowl. <br>\r\n2. Using an electric hand-held mixer, whip the coffee mixture until it is light brown, fluffy and holds stiff peaks when the whisk is removed.<br>\r\n3. Heat the milk, if desired, and divide between two heatproof glasses. <br>\r\n4. Spoon dollops of the frothed coffee mixture on top and smooth out with a spoon. Serve.', 'https://www.bbc.co.uk/food/recipes/dalonga_coffee_20606'),
(49, 5, 5, 'Falooda', '', '', 'https://www.indianhealthyrecipes.com/falooda-recipe/'),
(50, 5, 1, 'Matcha Green Tea', '- ¼ teaspoon matcha<br>\r\n- 2 ounces hot water, 175°F is ideal<br>\r\n- 6 ounces additional hot water or steamed milk of choice, almond milk, oat milk, coconut milk, dairy milk, etc.<br>\r\n- Maple syrup, honey, or other sweetener, optional', '1. Sift the matcha into a mug or small bowl to get rid of any lumps.<br>\r\n2. Pour in the 2 ounces of the hot water. Using a matcha whisk or small regular whisk, whisk briskly from side to side until the matcha is fully dispersed and there is a foamy layer on top.<br>\r\n3. Add the remaining 6 ounces hot water or steamed milk and whisk again until foamy. Sweeten to taste, if desired.', 'https://www.loveandlemons.com/matcha-green-tea/'),
(51, 9, 6, 'Cabbage Kimchi', '- 1 medium head napa cabbage (about 2 pounds)<br>\r\n- 1/4 cup iodine-free sea salt or kosher salt (see Recipe Notes)<br>\r\n- Water, preferably distilled or filtered<br>\r\n- 1 tablespoon grated garlic (5 to 6 cloves)<br>\r\n- 1 teaspoon grated peeled fresh ginger<br>\r\n- 1 teaspoon granulated sugar<br>\r\n- 2 tablepoons fish sauce or salted shrimp paste, or 3 tablespoons water<br>\r\n- 1 to 5 tablespoons Korean red pepper flakes ([gochugaru](https://www.thekitchn.com/from-the-spice-cupboard-gochug-142194))<br>\r\n- 8 ounces Korean radish or daikon radish, peeled and cut into matchsticks<br>\r\n- 4medium scallions, trimmed and cut into 1-inch pieces', '', 'https://www.thekitchn.com/how-to-make-easy-kimchi-at-home-189390'),
(52, 6, 8, 'Garlic Bread', '', '', 'https://www.foodnetwork.com/recipes/rachael-ray/garlic-bread-recipe-1951706'),
(53, 6, 5, 'Vada Pav', '', '', 'https://www.youtube.com/watch?v=Z9Y60u8tI9M&ab_channel=VeggieRecipeHouse'),
(54, 7, 2, 'Corn Soup', '   ', '      ', '   https://meaningfuleats.com/sweet-corn-soup/   '),
(55, 4, 1, 'Ramen', '', '', 'https://www.justonecookbook.com/vegetarian-ramen/'),
(56, 8, 11, 'Mega Crunchy Romaine Salad', '', '', 'https://cookieandkate.com/mega-crunchy-romaine-salad-recipe/');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
