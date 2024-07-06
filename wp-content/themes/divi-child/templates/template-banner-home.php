<div class="banner-home">
    <?php
    $args = array(
        'post_type' => 'banners',
        'posts_per_page' =>  -1,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) { ?>
        <div class="owl-carousel owl-theme owl-banners-carousel">
            <?php while ($query->have_posts()) {
                $query->the_post();
                $desktop = get_field('imagem_desktop');
                $mobile = get_field('imagem_mobile');
                $button_link = get_field('link_do_botao'); 
                $titulo = get_field('titulo_do_banner');
                $descricao = get_field('descricao');
            ?>
                <div>
                    <?php if ($button_link) : ?>
                        <a href="<?php echo $button_link; ?>" target="_blank">
                        <?php endif; ?>
                        <div class="banner-slide banner-desktop" style="background-image: url(<?php echo $desktop; ?>);">
                            <h2><?php echo $titulo; ?></h2>
                            <p><?php echo $descricao; ?></p>
                            <a href="<?php echo $button_link; ?>" target="_blank" class="saiba-mais-button">Saiba Mais</a>
                        </div>
                        <div class="banner-slide banner-mobile" style="background-image: url(<?php echo $mobile; ?>);">
                        </div>
                        <?php if ($button_link) : ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php } ?>
        </div>
    <?php }
    wp_reset_postdata(); ?>
</div>
