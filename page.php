<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="main-content twelve columns omega">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<div class="featured-image"><?php the_post_thumbnail('featured-image'); ?></div> 
			
			<div class="post-info fourteen columns">
				<h2 class="title ten columns alpha">
					<?php the_title(); ?>
				</h2>				
			</div>
			<div class="entry">
				<?php the_content(); ?>
				</footer>
			</div>

		</article>

	<?php endwhile; endif; ?>
	
	</div>

</div>
<?php get_footer(); ?>