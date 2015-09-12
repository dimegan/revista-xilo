<?php 
		if (has_post_thumbnail()){
			$post_thumbnail_id = get_post_thumbnail_id();
			$optimized_url = wp_get_attachment_image_src( $post_thumbnail_id, 'homepage-slider');
            $post_thumbnail_url = $optimized_url[0];
		}else{
			$post_thumbnail_url = get_template_directory_uri() . 
				'/images/placeholder-content-single.jpg';
		}
	?>
<div class="row" id="header-post">
	<div class="col-md-12" >
		<div class="post-image">
			<div class="post-super-image" 
			style="background-image: url('<?php echo $post_thumbnail_url; ?>');">
			</div>
		</div>
		<div class="post-title">
	    	<h1><span><?php the_title(); ?></span></h1>
		</div>
	</div>
</div>