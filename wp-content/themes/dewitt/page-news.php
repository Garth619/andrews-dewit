<?php
/**
 * Template Name: In the News
 */

get_header(); ?>

<div id="primary">
    
    
<h1 id="page-title"><?php the_title(); ?></h1>

 <div id="page-content">

<div class="news_wrapper">
	
	
	<?php if(get_field('news_repeater')): ?>
	 
		<?php while(has_sub_field('news_repeater')): ?>
	 
			
			
			<div class="news_single">
		
				<h2><?php the_sub_field('year_news');?></h2>
				
				<?php if(get_sub_field('sub_title_news')):?>
				
					<span class="new_subtitle"><strong><?php the_sub_field('sub_title_news');?></span><!-- new_subtitle -->
				
				<?php endif;?>
		
				<?php the_sub_field('content_news');?>
		
		</div><!-- news_single -->
	    
		<?php endwhile; ?>
	 
	<?php endif; ?>
	
	

	
</div><!-- news_wrapper -->

 </div><!-- page-content -->


   
</div>
<?php include('sidebar.php');?>
    
<?php get_footer(); ?>







