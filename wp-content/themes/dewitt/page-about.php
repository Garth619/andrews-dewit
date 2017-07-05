<?php
/*
Template Name: About
*/
get_header(); ?>

<section id="section1" class="content-block">
	<div class="content-text">
		<?php if( get_field('about_section1_title') ): ?>
			<h1 id="page-title">
				<?php the_field('about_section1_title');?>
			</h1>
		<?php endif; ?>
    	<?php if( get_field('about_section1_text') ): ?>
			<?php the_field('about_section1_text');?>
		<?php endif; ?>
	</div>
	
	
	
	<div class="about_content_right">
	
			<div class="about_video_wrapper">
			 	
			 	<div class="video_title"><span>Press play</span> to learn why you should choose us</div><!-- video_title -->
			 	
			 	<div class="video_image_wrapper">
				 	
				 	<img class="video_thumb" src="<?php bloginfo('template_directory');?>/images/video_img.jpg"/>
				 	
				 	<div class="new_play_button">
					 	
					 	<img class="myplay_reg" src="<?php bloginfo('template_directory');?>/images/blue-internal.png"/>
					 	
				 	</div><!-- new_play_button -->
				 	
			 	</div><!-- video_image_wrapper -->
			 	
		 	</div><!-- about_video_wrapper -->

	</div><!-- about_content_right -->
	
	
	
	</section>
<section id="section2" class="content-block">
	
	
		
		<div class="content-image">
			
			<div class="content_inner_wrapper">
				
			</div><!-- content_image_wrapper -->
			
		</div><!-- content-image -->
		
	
	
	
	
	
	
	<div class="content-text">
    	<?php if( get_field('about_section2_title') ): ?>
			<h2><?php the_field('about_section2_title');?></h2>
		<?php endif; ?>
    	<?php if( get_field('about_section2_text') ): ?>
			<?php the_field('about_section2_text');?>
		<?php endif; ?>
	</div>
	<div class="content-attorneys">
		<?php if( get_field('about_attorneys') ): ?>
			<?php the_field('about_attorneys');?>
		<?php endif; ?>
	</div>
</section>
<section id="section3" class="content-block">
	<div class="content-text">
		<?php if( get_field('about_section3_title') ): ?>
			<h2><?php the_field('about_section3_title');?></h2>
		<?php endif; ?>
    	<?php if( get_field('about_section3_text1') ): ?>
			<?php the_field('about_section3_text1');?>
		<?php endif; ?>
	</div>
	<div class="content-text">
		<?php if( get_field('about_section3_text2') ): ?>
			<?php the_field('about_section3_text2');?>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
