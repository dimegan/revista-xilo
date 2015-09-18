<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Inkness
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>	
	<div id="primary" class="content-area col-md-12">
		<?php get_template_part( 'single', 'header' ); ?>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<main id="main" class="site-main" role="main">
					<?php get_template_part( 'content', 'single' ); ?>
				</main><!-- #main -->
			</div>
			<div class="col-md-2"></div>
		</div>
	</div><!-- #primary -->
	<?php endwhile; // end of the loop. ?>
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>