<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="main-content twelve columns omega">
	<?php
	if (have_posts()) :
     while (have_posts()) : the_post();
          if(!get_post_format()) {
               get_template_part('format', 'standard');
          } else {
               get_template_part('format', get_post_format());
          }
        endwhile;
      endif;
      ?>

	<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>
	
</div>

</div>
<?php get_footer(); ?>
