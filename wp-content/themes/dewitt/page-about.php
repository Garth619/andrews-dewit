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
	<div class="content-video">
		<?php if( get_field('about_video_caption') ): ?>
			<p><?php the_field('about_video_caption');?></p>
		<?php endif; ?>
		<div class="button-video"></div>
	</div>
</section>
<section id="section2" class="content-block">
	<div class="content-image"></div>
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
