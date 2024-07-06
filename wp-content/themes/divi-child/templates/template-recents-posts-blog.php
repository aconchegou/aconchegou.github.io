<?php 
    $args = array(
        'post_type' => 'post',
        'posts_per_page' =>  3,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    
    $query = new WP_Query($args);
    
    if ( $query->have_posts() ) : 
?>
        
        <div id="blog-home">
            <?php while( $query->have_posts() ) : 
                $query->the_post();
                $title = get_the_title();
                $img_url = get_the_post_thumbnail_url();
                $link = get_permalink(); ?>
                
                <a class="body-content-card" href="<?php echo $link ?>">
                  
                        <div class="card-header-image">
                            <img src="<?php echo $img_url ?>">
                        </div>
                        <div class="blog-home-title">
                            <h3><?php echo $title ?></h3>
                        </div>
                        
                        <span class="read-more-home">ler mais</span>
                    
                </a>
                
            <?php endwhile; ?>
            
        </div>
    <?php endif; ?>