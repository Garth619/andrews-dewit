<?php
/*
Template Name: Attorney
*/
get_header(); ?>

<section id="page-content">
	<div class="container">
        <div id="primary">
        	<?php if( get_field('photo') ): ?>
        		
			<?php endif; ?>
       		<h1 id="page-title"><?php the_field('name');?></h1>
			<div id="attorney-contact">
				<?php if( get_field('job_title') ): ?>
					<span><?php the_field('job_title');?></span>
				<?php endif; ?>
				<?php if( get_field('phone_number') ): ?>
					<span><strong>P</strong> <?php the_field('phone_number');?></span>
				<?php endif; ?>
				<?php if( get_field('fax_number') ): ?>
					<span><strong>F</strong> <?php the_field('fax_number');?></span>
				<?php endif; ?>
				<?php if( get_field('email') ): ?>
					<span><a href="mailto:<?php the_field('email');?>">Email me</a></span>
				<?php endif; ?>
			</div>
          </h1>
          <div id="attorney-bio">
	          <div id="attorney-image-mobile">
					<img src="<?php the_field('photo');?>" />
				</div>
				<?php the_field('bio');?>
		  </div>
        </div>
        <div id="secondary">
        	<?php if( get_field('photo') ): ?>
        		<figure id="attorney-image">
					<img src="<?php the_field('photo');?>" />
					<figcaption><?php the_field('caption');?></figcaption>
				</figure>
			<?php endif; ?>
       		<div id="attorney-info">
				<div class="col-left">
					<?php the_field('sidebar_text_1');?>
				</div>
				<div class="col-right">
					<?php the_field('sidebar_text_2');?>
				</div>
			</div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
