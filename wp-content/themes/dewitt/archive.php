<?php get_header();?>

<div id="primary">
     <div id="inner_posts">
    	<?php wp_reset_query(); if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			
			<div class="mysingle_post">
				
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
				
				<div class="entry-meta">On behalf of DeWitt Algorri & Algorri Lawyers, A Professional Corporation<br />
				Posted in <?php global $post;
				$categories = get_the_category($post->ID);
				$cat_link = get_category_link($category[0]->cat_ID);
				echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>'
				?> on <?php the_time('l, F j, Y'); ?>.
				</div>
				
				<div class="entry-content"><?php echo get_the_excerpt(); ?></div>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="button">Read Full Post</a>
			
			
			</div><!-- mysingle_post -->
		<?php endwhile; else: ?>
		<?php endif; ?>
    
    </div><!-- mysingle_post -->
    
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
</div><!-- primary -->

<?php include('sidebar-blog.php');?>

<?php get_footer();?>