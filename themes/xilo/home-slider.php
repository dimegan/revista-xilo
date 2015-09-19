<?php 
    $catSlider = get_option( "home_slider-cat", "aperturas" );
    $postCounter = 0; 
?>
<header id="myCarousel" class="carousel slide" style="height:400px;">
    <!-- Indicators -->
    
    <ol class="carousel-indicators">
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    	<?php
        //Mostrar los 4 posts mas recientes de la categoría del slider
        query_posts('category_name='.$catSlider.'&showposts=4');
    		while (have_posts()) : the_post(); ?>
        		<?php 
        			if (has_post_thumbnail()){
            			$post_thumbnail_id = get_post_thumbnail_id();
                        $optimized_url = wp_get_attachment_image_src( $post_thumbnail_id, 'homepage-slider');
                        $post_thumbnail_url = $optimized_url[0];
    				}else{
    					$post_thumbnail_url = get_template_directory_uri() . 
    						'/images/placeholder-content-single.jpg';
    				}
    				$postCounter++;
        		?>
                <div class="item <?php if($postCounter == 1) { echo active; } ?>">
                    <a href="<?php the_permalink(); ?>">
                        <div class="fill" style="background-image:url('<?php echo $post_thumbnail_url; ?>');"></div>
                    </a>
                    <div class="carousel-caption">
                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        <!-- end wp query -->
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>