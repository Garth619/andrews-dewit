<?php
/*
Template Name: About
*/
get_header(); ?>


<div class="new_header_wrapper">
	
	
	<span class="new_line"></span><!-- new_line -->
	<h1 class="new_titles">About Us</h1>
	
	
	
</div><!-- new_header_wrapper -->


<section id="section1" class="content-block">

	<div class="content-text">
<!--
		<?php if( get_field('about_section1_title') ): ?>
			<h1 id="page-title">
				<?php the_field('about_section1_title');?>
			</h1>
-->
		<?php endif; ?>
    	<?php if( get_field('about_section1_text') ): ?>
			<?php the_field('about_section1_text');?>
		<?php endif; ?>
	</div>

	
	
	
	<div class="about_content_right">
	
			<div class="about_video_wrapper">
			 	
			 	<div class="video_title"><span>Press play to learn</span> Success is no Accident</div><!-- video_title -->
			 	
			 	<div class="video_image_wrapper">
				 	
				 	<img class="video_thumb" src="<?php bloginfo('template_directory');?>/images/video_img.jpg"/>
				 	
				 	<div class="new_play_button">
					 	
					 	<svg id="about_play_button" viewBox="0 0 78 78">
						 	
						 		<defs>
						 		
						 			
						 		
						 		</defs>
						 	
						 		<circle class="play1_circle" cx="38.5" cy="38.5" r="32.5"/>
						 		<circle class="play1_stroke" cx="39" cy="39" r="38.5"/>
						 		
						 		<polygon class="play1_tri" points="36 31 36 46 46 38 36 31"/>
						 	
						 	</svg>
						 	
					 	
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
