<?php
/*
Template Name: Home
*/
get_header(); ?>

<?php wp_reset_query(); if (have_posts()) : while (have_posts()) : the_post(); ?>
 
 
 
 
             
<section id="section1" class="content-block">
  	<figure id="section1-image" class="content-image">
  		<div id="section1-image-mask">
  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/selling_points_img.jpg" />
		</div>
		
	</figure>
	<div class="content-text" id="section1-text">
		<div id="section1-text-mask"></div>
		<div id="section1-selling-points">
		
		<?php $c=0; while ( have_rows('selling_points') ) : the_row(); $c++; ?>
       	
       		<div class="selling-point" id="selling-point<?php echo $c; ?>">
				<img src="<?php the_sub_field('icon'); ?>" class="selling-point-icon" />
				<h3 class="selling-point-title"><?php the_sub_field('title'); ?></h3>
				<div class="selling-point-text">
					<?php the_sub_field('description'); ?>
				</div>
			</div>
        	
         <?php endwhile; ?>
         
		</div>
	</div>
</section>
  

  
<section id="section2" class="content-block">
 	
 	<div class="mycaption_wrapper">
	 	
	 	<div class="mycaption">
	 	
	 		Southern California
	 	
	 	</div><!-- mycaption -->
	 	
	 </div><!-- mycaption_wrapper -->
 	
 	<div class="section2_top">
	 	
	 	<div class="section2_left">
	 	
	 		<?php the_field( 'section2_text1_title' ); ?>
	 	
	 	</div><!-- section2_header_wrapper -->
	 	
	 	<div class="section2_right">
		 	
		 	<div class="section2_video_wrapper">
			 	
			 	<div class="video_title"><?php the_field( 'video_caption' ); ?></div><!-- video_title -->
			 	
			 	<div class="video_image_wrapper">
				 	
				 	<img class="video_thumb" src="<?php bloginfo('template_directory');?>/images/video_img.jpg"/>
				 	
				 	<div class="new_play_button">
					 	
					 	<div class="new_play_button_inner">
						 	
						 	
						 	<svg id="play_button" viewBox="0 0 78 78">
						 	
						 		<defs>
						 		
						 			
						 		
						 		</defs>
						 	
						 		<circle class="play1_circle" cx="38.5" cy="38.5" r="32.5"/>
						 		<circle class="play1_stroke" cx="39" cy="39" r="38.5"/>
						 		
						 		<polygon class="play1_tri" points="36 31 36 46 46 38 36 31"/>
						 	
						 	</svg>
						 	

					 	
					 	</div><!-- new_play_button_inner -->
					 	
				 	</div><!-- new_play_button -->
				 	
			 	</div><!-- video_image_wrapper -->
			 	
		 	</div><!-- section2_video_wrapper -->
		 	
		 	<div class="top_content">
			 	
			 	
			 	<?php the_field( 'section2_text1_content' ); ?>
			 	
			 
			 	
		 	</div><!-- top_content -->
		 	
	 	</div><!-- section2_right -->
	 	
	 </div><!-- section2_top -->
	 
	 
	 <div class="section2_bottom">
		 
		 <div class="press_wrapper">
			 
			 
			 <div class="press_top_wrapper">
			 
			 	<div class="meet_press_wrapper">
				 
				 	<img src="<?php bloginfo('template_directory');?>/images/nbc.png"/>
				 
			 	</div><!-- meet_press_wrapper -->
			 
			 	<div class="mywhite_line"></div><!-- white_line -->
			 
			 </div><!-- press_top_wrapper -->
			 
			 <div class="press_bottom_wrapper">
				 
				 <span>Featured On</span>
				 
				 <div class="sixty_min_wrapper">
					 
					 <img src="<?php bloginfo('template_directory');?>/images/60minutes.png"/>
					 
				 </div><!-- 60_min_wrapper -->
				 
			 </div><!-- press_bottom_wrapper -->
			 
		 </div><!-- press_wrapper -->
		 
		 
		 <div class="section2_content">
			 
			 <?php the_field( 'section2_text2_title' ); ?>
			 
<!--
			 <span class="large_header">First & foremost, 
           <span class="bottom_header"> we are the real&nbsp;deal.</span>
        </span>
-->
        
        <div class="section2_inner_content">
	        
	        
	        <?php the_field( 'section2_text2_content' ); ?>
	        
	        	        
        </div><!-- section2_inner_content -->
			 
			 
		 </div><!-- section2_content -->
		 
		 <div style="clear:both"></div>
		 
	 </div><!-- section2_bottom -->
 	



</section><!-- section2 -->
  
<section id="section3" class="content-block">
    <div id="section3-case-results-desktop" class="content-case-results hidden-sm hidden-xs">
    	<?php $c=0; while ( have_rows('case_results') ) : the_row(); $c++; ?>
       	
			<div class="case-result" id="case-result<?php echo $c; ?>">
				<div class="case-result-info">
					<div class="case-result-amount"><?php the_sub_field('amount'); ?></div>
					<div class="case-result-type"><?php the_sub_field('type'); ?></div>
					<div class="case-result-vs"><?php the_sub_field('name_1'); ?><br />
					<strong>vs</strong><br />
					<?php the_sub_field('name_2'); ?></div>
				</div>
				<div class="case-result-hover">
					<div class="case-result-amount"><?php the_sub_field('amount'); ?></div>
					<div class="case-result-type"><?php the_sub_field('type'); ?></div>
					<div class="case-result-vs"><?php the_sub_field('name_1'); ?> vs <?php the_sub_field('name_2'); ?></div>
					<div class="case-result-text">
						<?php the_sub_field('description'); ?>
					 </div>
					 
					 <div class="mybutton_wrapper"><a href="<?php bloginfo('url');?>/verdicts-settlements" class="button">View All Case Results</a></div>
					 
					 
				</div>
			</div>

	   <?php endwhile; ?>
	</div>
    <div id="section3-case-results-mobile" class="visible-sm visible-xs">
	    
	    
	    <div class="new_buttons_wrapper">
				
				<div class="new_back_wrapper inner_button_wrapper">
					
					<img class="new_button_reg" src="<?php bloginfo('template_directory');?>/images/newleft.png"/>
					<img class="new_button_hov" src="<?php bloginfo('template_directory');?>/images/newlefthover.png"/>
				
				</div><!-- new_back_wrapper -->
				
				<div class="new_next_wrapper inner_button_wrapper">
					
					<img class="new_button_reg" src="<?php bloginfo('template_directory');?>/images/newright.png"/>
					<img class="new_button_hov" src="<?php bloginfo('template_directory');?>/images/newrighthover.png"/>
				
				</div><!-- new_back_wrapper -->
				
			</div><!-- new_buttons_wrapper -->
	    
		<div id="section3-slider" class="content-case-results content-slider">
			
			
			
			<?php $c=0; while ( have_rows('case_results') ) : the_row(); $c++; ?>
			
			<div class="case-result" id="case-result-mobile<?php echo $c; ?>">
				<div class="case-result-amount"><?php the_sub_field('amount'); ?></div>
				<div class="case-result-type"><?php the_sub_field('type'); ?></div>
				<div class="case-result-vs"><?php the_sub_field('name_1'); ?> vs <?php the_sub_field('name_2'); ?></div>
				<div class="case-result-text">
					<?php the_sub_field('description'); ?>
				 </div>
			</div>
			
			<?php endwhile; ?>
		 </div>
		 <a href="<?php bloginfo('url');?>/verdicts-settlements" class="button">View All Case Results</a>
	</div>
		
</section>
  

  
<section id="section4" class="content-block">
  <div class="container">
  	  <figure class="content-image hidden-xs" id="section4-image">
 	  	  <div id="section4-image-mask">
  	  	  	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/content_2_img.jpg" />
		  </div>
	  </figure>
	  <?php if( get_field('section4_title') ): ?>
			<div class="content-title" id="section4-title">
				<h2><?php the_field('section4_title');?></h2>
			</div>
	  <?php endif; ?>
	  <?php if( get_field('section4_content') ): ?>
			<div class="content-text" id="section4-text">
				<?php the_field('section4_content');?>
			</div>
	  <?php endif; ?>
  </div>
</section>
 
<section id="section5" class="content-block">
	
	
	<div class="new_pa_wrapper">
			
			<span class="new_pa_title">Practice Areas</span><!-- new_pa_title -->
			
		</div><!-- new_pa_wrapper -->
	
	
	
	
	<div class="container">
		
		
		
		
		
 		<?php if( get_field('section5_content') ): ?>
			<div id="section5-title" class="content-title hidden-sm hidden-xs">
				<h2><?php the_field('section5_content');?></h2>
			</div>
	    <?php endif; ?>
 		<figure id="section5-image" class="content-image hidden-sm hidden-xs">
		</figure>
  		<div id="section5-practice-areas" class="content-practice-areas hidden-sm hidden-xs">
  			<?php $c=0; while ( have_rows('practice_areas') ) : the_row(); $c++; ?>
			
			<div class="practice-area">
				<figure class="practice-area-icon">
					<img src="<?php the_sub_field('icon'); ?>" />
				</figure>
				<div class="practice-area-title"><?php the_sub_field('title'); ?></div>
				<div class="practice-area-hover">
					<div class="practice-area-title"><?php the_sub_field('title'); ?></div>
					<a href="<?php the_sub_field('link_url'); ?>" class="button">Learn More</a>
				</div>
			</div>
			
			<?php endwhile; ?>
		</div>
		<div id="section5-practice-areas-mobile" class="content-practice-areas visible-sm visible-xs">
			<figure class="practice-area-icon">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pa_icon_1.svg" />
			</figure>
			<div class="practice-area-title">View all the types of cases we handle</div>
			<a href="<?php echo site_url(); ?>/practice-areas/" class="button">See All Practice Areas</a>
		</div>
	</div>
</section>
 

  
<section id="section6" class="content-block">
	
	
	
 	<?php if( get_field('section6_title') ): ?>
<!--
		<div id="section6-title" class="content-title">	

			<h2><?php the_field('section6_title');?></h2>
		</div>
-->
	<?php endif; ?>
	<div id="section6-posts" class="content-posts" dir="rtl">
		<div id="section6-slider" class="content-slider">
			
			
			<div class="section6_right">
				
				<div class="counter_wrapper">
				
					<span class="counter_inner"></span><!-- counter_inner -->
					
					<span class="new_greyline"></span><!-- new_greyline -->
				
				</div><!-- counter_wrapper -->
			
			<div id="section6-title" class="content-title">	

				<span><?php the_field('section6_title');?></span>
		
			</div><!-- section6-title -->
				
				
			</div><!-- section6_right -->
			
			
			
			
			<?php $mymain_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => '9', 'order' => 'DSC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
        
       
       <article class="entry post" dir="ltr">
				<div class="entry-content">
					<h3 class="entry-title"><?php the_title();?></h3>
					<div class="entry-date"><?php the_time('F j, Y'); ?></div>
					<div class="entry-excerpt hidden-xs">
						<p><?php echo wp_trim_words( get_the_content(), 55, '...' );?></p>
					</div>
					<a href="<?php the_permalink();?>" class="button">Read Full Post</a>
				</div>
			</article>
       
       
       
       
       <?php endwhile; ?>
      <?php wp_reset_postdata(); // reset the query ?>
			
			
			
			
			
			
						
			
			
			
			
			
			
		</div>
	</div>
	<div id="section6-arrows"></div>
</section>

   
<?php endwhile; else: ?>
<?php endif; ?>
    
<?php get_footer(); ?>