<?php 
	$currenCatName = single_cat_title("", false);
    $category_id = get_cat_ID( $currenCatName );
    $category_link = get_category_link( $category_id );

?>
<div class="row">
	<div class="col-md-12 category-title ">
		<h2 class="cb-module-title">
			<a href="<?php echo esc_url( $category_link ); ?>"><?php echo $currenCatName; ?></a>
		</h2>
	</div>
</div>
<div class="row">
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
		
		<?php get_template_part( 'content', 'home' ); ?>
		
	<?php endwhile; ?>
</div>
<?php else : ?>

	<div class="row">
		<div class="col-md-12 category-title ">
			<h4>No hay articulos disponibles de esta categoría</h4>
		</div>
	</div>

<?php endif; ?>