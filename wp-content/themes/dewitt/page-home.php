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
	 	
	 		<h1>California Personal Injury Lawyers</h1>
	 	
	 	</div><!-- section2_header_wrapper -->
	 	
	 	<div class="section2_right">
		 	
		 	<div class="section2_video_wrapper">
			 	
			 	<div class="video_title"><span>Press play</span> to learn why you should choose us</div><!-- video_title -->
			 	
			 	<div class="video_image_wrapper">
				 	
				 	<img class="video_thumb" src="<?php bloginfo('template_directory');?>/images/video_img.jpg"/>
				 	
				 	<div class="new_play_button">
					 	
					 	<img src="<?php bloginfo('template_directory');?>/images/new-play.png"/>
					 	
				 	</div><!-- new_play_button -->
				 	
			 	</div><!-- video_image_wrapper -->
			 	
		 	</div><!-- section2_video_wrapper -->
		 	
		 	<div class="top_content">
			 	
			 	<p>In California and elsewhere, the law allows you to claim monetary compensation for your damages if they were the fault of another person, individual, or entity, whether in an accident caused by that party’s negligence, or by their willful act or failure to act as required. <strong>We completely understand that money can never truly compensate you for the loss of your health or the death of a loved one;</strong> but is the best the legal system can do to achieve the closest approximation of justice for those who have been injured or bereaved.</p>
			 	
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
			 
			 
			 <span class="large_header">First & foremost, 
           <span class="bottom_header"> we are the real&nbsp;deal.</span><!-- bottom_header -->
        </span><!-- large_header -->
        
        <div class="section2_inner_content">
	        
	        <p>An injury or wrongful death accident can occur without warning. Your comfortable life can disappear in a flash. Your credit score may be taking a nosedive as your medical bills mount up. You may desperately want to return to work, but your condition won’t allow it. With rising bills and falling earnings, complicated by pain, suffering, disability, and mental anguish, you may be wondering how you can possibly go on.</p>
	        
	        <p>Unexpected injuries happen in so many ways: in motor vehicle accidents, trip and fall accidents, accidents in the workplace or on someone else’s premises, medical errors, injuries caused by defective products, and many, many more.</p>

					<p>Sometimes, an accident is just that—an accident.  It may be the result of your own carelessness or simply “an act of God.” But many times, it is someone else’s negligence or wrongdoing that is to blame for your suffering.</p>

					<p>In a just world, why should you be forced to suffer for something someone else did to harm you? While there is no such thing as perfect justice, we have laws in place that, when properly applied, can go a long way toward achieving the greatest possible degree of justice for those who have suffered damages that another individual, company, or other entity caused. That’s where having a good personal injury lawyer can make all the difference. With the right attorney behind you, justice is within your reach.</p>
	        
        </div><!-- section2_inner_content -->
			 
			 
		 </div><!-- section2_content -->
		 
		 <div style="clear:both"></div>
		 
	 </div><!-- section2_bottom -->
 	
 	
 	
<!--
 	<div id="section2-row1" class="content-row">
		<?php if( get_field('section2_text1_title') ): ?>
			<div class="content-title" id="section2-title">
				<h2><?php the_field('section2_text1_title');?></h2>
			</div>
		<?php endif; ?>
		<?php if( get_field('section2_text1_content') ): ?>
			<div class="content-text" id="section2-text1">
				<?php the_field('section2_text1_content');?>
			</div>
		<?php endif; ?>
		<div class="content-video" id="section2-video">
			<div id="section2-video-mask">
				<div id="section2-video-content">
					<?php if( get_field('video_caption') ): ?>
						<p><?php the_field('video_caption');?></p>
					<?php endif; ?>
					<div class="button-video"></div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	<div id="section2-row2" class="content-row">
		<figure class="content-image" id="section2-image">
			<div id="featured-meet-the-press" class="featured">
				<div class="featured-mask">
					<div class="featured-image">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nbc.png" />
					</div>
				</div>
			</div>
			<div id="featured-60-minutes" class="featured">
				<div class="featured-mask">
					<div class="featured-image">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/60minutes.png" />
					</div>
				</div>
			</div>
			<figcaption>Featured on</figcaption>
		</figure>
		<div class="content-text" id="section2-text2">
			<?php if( get_field('section2_text2_title') ): ?>
				<h3><?php the_field('section2_text2_title');?></h3>
			<?php endif; ?>
			<?php if( get_field('section2_text2_content') ): ?>
				<?php the_field('section2_text2_content');?>
			<?php endif; ?>
		</div>
	</div>
-->








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
		 <a href="<?php echo site_url(); ?>/case-results/" class="button">View All Case Results</a>
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
		<div id="section6-title" class="content-title">	
			<p>
				<strong>02 | 05</strong>
			</p>
			<h2><?php the_field('section6_title');?></h2>
		</div>
	<?php endif; ?>
	<div id="section6-posts" class="content-posts" dir="rtl">
		<div id="section6-slider" class="content-slider">
			<article class="entry post" dir="ltr">
				<div class="entry-content">
					<h3 class="entry-title">What contributes to construction accidents?</h3>
					<div class="entry-date">February 24, 2017</div>
					<div class="entry-excerpt hidden-xs">
						<p>It's no secret that construction work can be dangerous - even deadly. Roughly one out of every five work-related deaths involves construction, according to the Occupational Safety and Health Administration. And, in 2015, construction workers in California had the third-highest fatality rate across all industries.</p>
					</div>
					<a href="#" class="button">Read Full Post</a>
				</div>
			</article>
			<article class="entry post" dir="ltr">
				<div class="entry-content">
					<h3 class="entry-title">Motorcycle safety: How to ride fast without putting your life on the line</h3>
					<div class="entry-date">February 24, 2017</div>
					<div class="entry-excerpt hidden-xs">
						<p>Among those who don't ride, bikers have a reputation for risk-taking. And biking, like virtually any activity, involves some risk. Yet that doesn't mean bikers have a death wish. Experienced riders learn how to manage the risk by using good judgment and proper riding techniques.</p>
					</div>
					<a href="#" class="button">Read Full Post</a>
				</div>
			</article>
			<article class="entry post" dir="ltr">
				<div class="entry-content">
					<h3 class="entry-title">Can I collect damages even if I contributed to an accident?</h3>
					<div class="entry-date">March 2, 2017</div>
					<div class="entry-excerpt hidden-xs">
						<p>If you live in California, the answer to the question posed in the headline is yes. You can pursue financial damages for an accident in which you were hurt even if you were partly to blame for the accident.</p>
					</div>
					<a href="#" class="button">Read Full Post</a>
				</div>
			</article>
			<article class="entry post" dir="ltr">
				<div class="entry-content">
					<h3 class="entry-title">What contributes to construction accidents?</h3>
					<div class="entry-date">February 24, 2017</div>
					<div class="entry-excerpt hidden-xs">
						<p>It's no secret that construction work can be dangerous - even deadly. Roughly one out of every five work-related deaths involves construction, according to the Occupational Safety and Health Administration. And, in 2015, construction workers in California had the third-highest fatality rate across all industries.</p>
					</div>
					<a href="#" class="button">Read Full Post</a>
				</div>
			</article>
			<article class="entry post" dir="ltr">
				<div class="entry-content">
					<h3 class="entry-title">Motorcycle safety: How to ride fast without putting your life on the line</h3>
					<div class="entry-date">February 24, 2017</div>
					<div class="entry-excerpt hidden-xs">
						<p>Among those who don't ride, bikers have a reputation for risk-taking. And biking, like virtually any activity, involves some risk. Yet that doesn't mean bikers have a death wish. Experienced riders learn how to manage the risk by using good judgment and proper riding techniques.</p>
					</div>
					<a href="#" class="button">Read Full Post</a>
				</div>
			</article>
			<article class="entry post" dir="ltr">
				<div class="entry-content">
					<h3 class="entry-title">Can I collect damages even if I contributed to an accident?</h3>
					<div class="entry-date">March 2, 2017</div>
					<div class="entry-excerpt hidden-xs">
						<p>If you live in California, the answer to the question posed in the headline is yes. You can pursue financial damages for an accident in which you were hurt even if you were partly to blame for the accident.</p>
					</div>
					<a href="#" class="button">Read Full Post</a>
				</div>
			</article>
			<article class="entry post" dir="ltr">
				<div class="entry-content">
					<h3 class="entry-title">What contributes to construction accidents?</h3>
					<div class="entry-date">February 24, 2017</div>
					<div class="entry-excerpt hidden-xs">
						<p>It's no secret that construction work can be dangerous - even deadly. Roughly one out of every five work-related deaths involves construction, according to the Occupational Safety and Health Administration. And, in 2015, construction workers in California had the third-highest fatality rate across all industries.</p>
					</div>
					<a href="#" class="button">Read Full Post</a>
				</div>
			</article>
			<article class="entry post" dir="ltr">
				<div class="entry-content">
					<h3 class="entry-title">Motorcycle safety: How to ride fast without putting your life on the line</h3>
					<div class="entry-date">February 24, 2017</div>
					<div class="entry-excerpt hidden-xs">
						<p>Among those who don't ride, bikers have a reputation for risk-taking. And biking, like virtually any activity, involves some risk. Yet that doesn't mean bikers have a death wish. Experienced riders learn how to manage the risk by using good judgment and proper riding techniques.</p>
					</div>
					<a href="#" class="button">Read Full Post</a>
				</div>
			</article>
			<article class="entry post" dir="ltr">
				<div class="entry-content">
					<h3 class="entry-title">Can I collect damages even if I contributed to an accident?</h3>
					<div class="entry-date">March 2, 2017</div>
					<div class="entry-excerpt hidden-xs">
						<p>If you live in California, the answer to the question posed in the headline is yes. You can pursue financial damages for an accident in which you were hurt even if you were partly to blame for the accident.</p>
					</div>
					<a href="#" class="button">Read Full Post</a>
				</div>
			</article>
		</div>
	</div>
	<div id="section6-arrows"></div>
</section>

   
<?php endwhile; else: ?>
<?php endif; ?>
    
<?php get_footer(); ?>