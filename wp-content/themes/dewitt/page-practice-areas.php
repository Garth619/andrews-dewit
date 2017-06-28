<?php
/*
Template Name: Practice Areas
*/
get_header(); ?>

<section id="page-content">
	<div class="container">
    	<h1 id="page-title">Practice<br /> <span>Areas</span></h1>
    	<div id="practice-areas">
         	
         	
         	<?php wp_nav_menu(array('theme_location' => 'practiceareas', 'menu_class'  => 'nav',)); ?>
         	
         	
        </div>	
    </div>
</section>

<?php get_footer(); ?>
