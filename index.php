<?php get_header(); ?>
	<section class="row">
		<div class="twelve columns">
<!-- BEGIN LOOP -->
			<?php
			if ( have_posts() ) {
			    while ( have_posts() ) {
			        the_post(); ?>
							<h3><?php the_title(); ?></h3>
							<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('thumbnail');
							} 
							the_excerpt();
					} // end while
			} // end if
			?>
<!-- END LOOP -->
		</div>
	</section>
<?php get_footer(); ?>
