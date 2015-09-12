<?php 
	$cat1 = get_option( "dmg_first_cat", "default" );
	$cat2 = get_option( "dmg_second_cat", "default" );
	$cat3 = get_option( "dmg_third_cat", "default" );
?>
<div class="site-main">
	<!-- primera categoria -->
	<?php query_posts('category_name='.$cat1.'&showposts=3');?>
	<?php get_template_part( 'home', 'category' ); ?>
	<?php wp_reset_query(); ?>
	<!-- end wp query -->

	<!-- segunda categoria -->
	<?php query_posts('category_name='.$cat2.'&showposts=3');?>
	<?php get_template_part( 'home', 'category' ); ?>
	<?php wp_reset_query(); ?>
	<!-- end wp query -->

	<!-- tercera categoria -->
	<?php query_posts('category_name='.$cat3.'&showposts=3');?>
	<?php get_template_part( 'home', 'category' ); ?>
	<?php wp_reset_query(); ?>
	<!-- end wp query -->
</div>