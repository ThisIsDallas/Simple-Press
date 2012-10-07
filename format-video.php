<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

	<div class="featured-image"><?php the_post_thumbnail('featured-image'); ?></div> 
	
	<div class="post-info fourteen columns">
		<h2 class="title ten columns alpha">
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		</h2>	
		<div class="comment-bubble one column omega">
			<?php comments_popup_link('0', '1', '%'); ?>
		</div>			
	</div>
	<div class="entry">
		<?php the_excerpt(); ?>
		<footer class="post-footer">

		</footer>
	</div>

</article>