<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); ?>
 
<div id="slideshow"><img src="http://localhost/rabbit/images/htONE.jpg"></div>

<div class="contentbox">
<img src="http://localhost/rabbit/images/ht1.jpg">
<p>Welcome to Hang Ten Boiler! Check out our delicious dinner sets! We have loads and loads of shrimps, mussels, and clams! Check out the picture above!  Our customer love us and we welcome you all to come and taste what we can dish up.  Be warned, eating style here is not like any other; it can get real messy eating with our hands~ </p>

</div>

<div class="contentbox">
<img src="http://localhost/rabbit/images/ht7.jpg">
<p>Did I mention?  We also have crabs and lots of them? Mixed in with our very own unique secret recipe, these crabs will blow your mind! How can you resist the look on this crab here?! Combined with Cajun spices, fresh garlic, butter, and not to mention, the secret stuff; will have you craving for more~ Check out what else we have to offer! </p>

</div>

<div class="contentbox">
<img src="http://localhost/rabbit/images/ht9.jpg">
<p>How we do it here- You order whatever you want on the menu.  Depending on what it is you can order either by the quantity (like fries, corn, combo plates, etc.) or by the weight (shrimps, crabs, lobsters, clams, etc.).  The seafood comes packed with the sauces you ordered just like the pics, ready to be devoured by you and friends! </p>

</div>





    <?php get_template_part( 'loop', 'index' ); ?>
 

<?php get_footer(); ?>