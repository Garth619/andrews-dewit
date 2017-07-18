<?php get_header();?>

<div id="primary">
	<div id="inner_posts">
	<?php wp_reset_query(); if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		
		
		
		<div class="mysingle_post">
		
			
			<h1 class="main_header"><?php the_title(); ?></h1>
			
			<div class="entry-meta">On behalf of DeWitt Algorri & Algorri Lawyers, A Professional Corporation<br />
				Posted in <?php global $post;
				$categories = get_the_category($post->ID);
				$cat_link = get_category_link($category[0]->cat_ID);
				echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>'
				?> on <?php the_time('l, F j, Y'); ?>.
			</div>
			
			
			<div class="entry-content"><?php the_content(); ?></div>
		
			
				
			</div><!-- mysingle_post -->
	
	
	
	
	<?php endwhile; else: ?>
	<?php endif; ?>
 </div> <!-- inner posts -->

</div><!-- primary -->
<?php include('sidebar-blog.php');?>


<?php get_footer();?>