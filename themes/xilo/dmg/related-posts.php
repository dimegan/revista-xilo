<?php 
	if ( is_single() ): // Si es un single post
		$categories = get_the_category();
		$postId = get_the_ID(); // El id del current post

		if(! empty( $categories )):
		
			$postCategories=array();
			foreach($categories as $category) {
				array_push($postCategories,$category->term_id);
			}	

			?>
			<!-- POST RELACIONADOS POR CATEGORIA -->
			<div class="post-relation-by-category">
				
				<h3>Estos artículos podrían interesarte </h3>	
				<div class="related-posts clearfix">
					<?php 
					 $args = array( // La variable
						'cat'=>implode(",",$postCategories), // Buscamos articulos de las categorías del actual
						'showposts' => 3, // El número de posts que se van a listar
						'post__not_in' => array($postId) // Llama al id del post actual para que no sea listado
						);
					?>
					
					<ul class="list-unstyled">
					 <?php $recent = new WP_Query($args); while($recent->have_posts()) : $recent->the_post();?>
						 <li class="related-item">
						 	<a href="<?php the_permalink() ?>">
							 	<div class="image-outerwrapper">
								 	<div class="image-wrapper">
								 	<?php the_post_thumbnail( 'medium' ); ?>
								 	</div>
							 	</div>
						 	</a>
						 	<div class="related-info">
							 	<span>
							 		<a class="tittle-post-relation" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
							 	</span>
							 	<br/>
							 	<span class="meta-data"><?php the_time('j F, Y'); ?> </span>
						 	</div>
						 </li>
						 
					 <?php endwhile; ?>
					 <?php wp_reset_postdata(); ?>
					</ul>
				</div>
			<!-- end post-relation-by-category -->
			</div>
	<!-- if(! empty( $categories )) -->
	<?php endif ?>
<!-- end If (is_single()) -->
<?php endif ?>
