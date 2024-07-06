<section class="blog-caroussel">
    <?php 
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'order' => 'DESC',
        'offset' => 0,
    );
    $query = new WP_Query($args); 

    if ($query->have_posts()) { ?>
        <div class="owl-carousel owl-theme owl-post-blog">
            <?php while ($query->have_posts()) { 
                $query->the_post();
                $post_id = get_the_ID();
                $title = get_the_title();
                $thumb_url = get_the_post_thumbnail_url();
                $link = get_permalink();
                $excerpt = get_the_excerpt($post_id);
            ?>

            <div class="item-body">
                <div class="item-body-left"><img src="<?php echo $thumb_url; ?>" alt=""></div>
                <div class="item-body-right">
                    <h2><?php echo $title; ?></h2>
                    <p><?php echo $excerpt; ?></p>
                   <a href="<?php echo $link; ?>">Leia mais</a>
                </div>
            </div>

            <?php } ?>
        </div>
    <?php
    }
    wp_reset_postdata();
    ?>
</section>