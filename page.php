<?php get_header(); ?>
	<div class="row">
		<div class="nine columns">
			<?php if (have_posts()) :
				while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content();
				endwhile;
				endif; ?>
		</div>
		<!-- BEGIN SIDEBAR -->
		<div class="three columns">
			<?php get_sidebar(); ?>
		</div>
		<!-- END SIDEBAR -->
	</div>
<?php get_footer(); ?>
