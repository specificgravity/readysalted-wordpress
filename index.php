<?php
/* The main template */
get_header();
?>
<section id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article>
		<header>
		<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_permalink(); ?></a></h1>
		</header>
		<div class="entry">
			<?php the_content(); ?>
		</div>
		<footer>
			<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
			<p class="postmetadata">Posted in <?php the_category(', '); ?></p>
		</footer>
	</article>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</section>
<aside>
	<?php get_sidebar(); ?>
</aside>
<?php get_footer(); ?>