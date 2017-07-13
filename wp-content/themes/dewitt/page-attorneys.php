<?php
/*
Template Name: Attorneys
*/
get_header(); ?>

<div class="new_header_wrapper">
	
	
	<span class="new_line"></span><!-- new_line -->
	<h1 class="new_titles">Meet The <span>Attorneys</span></h1>
	
	
	
</div><!-- new_header_wrapper -->

<section id="page-content">
	<div class="container">
		
		
<!--
		
		<h1 id="page-title">
			<?php if( get_field('page_title') ) { 
				the_field('page_title');
			} else {
				the_title(); 
			} ?>
		</h1>
-->
       
       
       
       
       
        <div class="attorneys">
           <?php $c=0; while ( have_rows('attorneys') ) : the_row(); ?>
           
           		<?php if($c==0) { ?>
					<div class="attorneys-row">
				<?php } ?>
       	
				<div class="attorney">
					
					<?php $attorneyimagetwo = wp_get_attachment_image_src(get_sub_field('image'), 'attorneyimage'); ?>
					
					
					<a href="<?php the_sub_field('link _url');?>" class="attorney-image">
						
						
						<?php $attorneyimagetwo = wp_get_attachment_image_src(get_sub_field('image'), 'attorneyimage'); ?>
						
						<img src="<?php echo $attorneyimagetwo[0]; ?>"/>
						
					</a>
					
					
					
					<div class="attorney-name"><a href="<?php the_sub_field('link _url');?>"><?php the_sub_field('name'); ?></a></div>
					<a href="<?php the_sub_field('link _url');?>" class="button">View Profile</a>
				</div>
				
				<?php if($c==3) { ?>
					</div>
				<?php $c = 0;
					} else {
					  $c++;
					} ?>

			 <?php endwhile; ?>
         </div>
    </div>
</section>

<?php get_footer(); ?>
