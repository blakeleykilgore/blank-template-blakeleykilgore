<?php get_header(); ?>
	<div class="row">
		<div class="twelve columns">
<!-- BEGIN SINGLE PHP -->
			<?php if (have_posts()) :
				/* OUR DATA CONTEXT IS DEFINED 	*/
				while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content();
				endwhile;
			endif; ?>
<!-- END SINGLE PHP -->
		</div>
	</div>
<?php get_footer(); ?>
