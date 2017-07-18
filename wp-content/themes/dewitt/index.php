<?php get_header();?>

<div id="primary">
    <div id="inner_posts">
    	<?php wp_reset_query(); if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			
			
			<div class="mysingle_post">
			
			
				<h1 class="main_header">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
					</a>
				</h1>
				<div class="entry-meta">On behalf of DeWitt Algorri & Algorri Lawyers, A Professional Corporation<br />
				Posted in <?php global $post;
				$categories = get_the_category($post->ID);
				$cat_link = get_category_link($category[0]->cat_ID);
				echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>'
				?> on <span><?php the_time('l, F j, Y'); ?>.</span>
				</div>
				<div class="entry-content"><p><?php echo wp_trim_words( get_the_content(), 89, '...' );?></p></div>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="button">Read Full Post</a>
		
		
		
		
		</div><!-- mysingle_post -->
		
		
		
		
		
		
		
		<?php endwhile; else: ?>
		<?php endif; ?>
    </div> <!-- inner posts -->
    
    
    <nav class="posts-nav">
		<ul>
			<li class="prev-link">
			   <?php previous_posts_link() ?> 
			</li>
			<li class="next-link">
				<?php next_posts_link() ?>
			</li>
		</ul>
	</nav>
</div>

<?php include('sidebar-blog.php');?>


<?php get_footer();?>