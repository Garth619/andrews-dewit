<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

<div id="primary">
    <h1 id="page-title"><?php the_title(); ?></h1>
    <?php wp_reset_query(); if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="page-content">
        <?php the_content(); ?>
		<?php endwhile; else: ?>
		<?php endif; ?>
    </div> 
</div>
<?php include('sidebar.php');?>
    
<?php get_footer(); ?>







