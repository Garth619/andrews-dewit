<?php
/*
Template Name: Practice Areas
*/
get_header(); ?>

<section id="page-content">
	<div class="container">
    	<h1 id="page-title">Practice<br /> <span>Areas</span></h1>
    	<div id="practice-areas">
         	<?php dynamic_sidebar( 'practice-areas' ); ?>
        </div>	
    </div>
</section>

<?php get_footer(); ?>
