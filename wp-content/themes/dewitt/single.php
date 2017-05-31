<?php get_header();?>

<div id="primary">
	<?php wp_reset_query(); if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="entry post">
			<h2 class="entry-title"><?php the_title(); ?></h2>
			<div class="entry-meta">On behalf of DeWitt Algorri & Algorri Lawyers, A Professional Corporation<br />
				Posted in <?php global $post;
				$categories = get_the_category($post->ID);
				$cat_link = get_category_link($category[0]->cat_ID);
				echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>'
				?> on <?php the_time('l, F j, Y'); ?>.
				</div>
			</div>
			<div class="entry-content"><?php the_content(); ?></div>
		</article>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div>
<div id="secondary">
    <div id="sidebar">
    	<?php dynamic_sidebar( 'blog' ); ?>
    </div>
</div>


<?php get_footer();?>