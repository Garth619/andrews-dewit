<?php
/*
Template Name: Case Results
*/
get_header(); ?>

<section id="page-content">
    <?php wp_reset_query(); if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1 id="page-title">
    	<?php if( get_field('page_title') ) { 
			the_field('page_title');
		} else {
			the_title(); 
		} ?>
    </h1>
    <?php the_content(); ?>
    
    <div id="case-results">
    	<?php $c=0; while ( have_rows('case_results') ) : the_row(); ?>
           
			<?php if($c==0) { ?>
				<div class="case-results-row">
			<?php } ?>

			<div class="case-result">
				<div class="case-result-content">
				  <div class="case-result-amount"><?php the_sub_field('amount'); ?></div>
				  <div class="case-result-type"><?php the_sub_field('type'); ?></div>
				  <div class="case-result-title"><?php the_sub_field('name_1'); ?> v. <?php the_sub_field('name_2'); ?></div>
				  <div class="case-result-text">
					<?php the_sub_field('description'); ?>
				  </div>
				</div>
			</div>

			<?php if($c==3) { ?>
				</div>
			<?php $c = 0;
				} else {
				  $c++;
				} ?>

	  <?php endwhile; ?>
	  <?php endwhile; else: ?>
      <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>
