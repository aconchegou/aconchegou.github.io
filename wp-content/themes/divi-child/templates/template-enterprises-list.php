<section class="enterprises-list">
    <?php 
    $args = array(
	'post_type' => 'empreendimento',
    'posts_per_page' =>  -1,
    'orderby' => 'date',
    'order' => 'DESC');
    $query = new WP_Query($args); 

    if ($query -> have_posts()) {
        while($query -> have_posts()) { $query -> the_post();
                $title = get_the_title();
                $thumb_url = get_the_post_thumbnail_url();
                $link = get_permalink();
                $status = get_field('status');
                $label = get_field('label_imagem');
                $neighborhood = get_field('bairro');
                $price = get_field('valor');
                $type = get_field('tipo_do_empreendimento');
                $area = get_field('area');
                $finish = get_field('acabamento');

                $attributes_groups = get_field('atributos_cards');
                $attribute_left = $attributes_groups['atributo_esquerda'];
                $attribute_center = $attributes_groups['atributo_centro'];
                $attribute_right = $attributes_groups['atributo_direita'];
                $attribute_right_2 = $attributes_groups['atributo_direita_2'];

            ?>
    <a <?php echo ($status[0]['value'] === '100-vendidos') ? '' : 'href="' . $link . '"'; ?> >
    <div class="enterprise-container <?php echo ($status[0]['value'] === '100-vendidos') ? 'no-zoom' : ''; ?>"
         <?php echo ($status[0]['value'] === '100-vendidos') ? 'style="opacity: 0.7"' : ''; ?>>
        <div class="item-top">
            <?php
            if ($status) { ?>
            <span class="release"><?php echo $status[1]['label'] ?></span>
            <?php }
            ?>

            <img class="featured-image" src="<?php echo $thumb_url; ?>"
                 alt="<?php echo $title; ?>">
            <span class="rooms"><?php echo $label ? $label : '' ?></span>
        </div>
        <div class="item-body">
            <h4 class="titulo-pai"><?php echo $title; ?></h4>
            <h6 class"a-partir">A partir de: </h6>
            <h5 class="valor"><?php echo $price; ?></h5>
            <div class="address">
                <img src="/wp-content/uploads/2022/07/icone-local.svg"
                     alt="Localização">
                <div>
                    <span><?php echo $neighborhood ? $neighborhood : null ?></span>
                    <span><?php echo $city ? $city : null ?></span>
                </div>
            </div>
            <div class="info">
                <span>
                    <img src="<?php echo $attribute_left['icone_atributo'] ?>"
                         alt="<?php echo $attribute_left['titulo_atributo'] ?>">
                        <?php echo $attribute_left['descricao_atributo'] ?>
                </span>
                <span>
                    <img src="<?php echo $attribute_center['icone_atributo'] ?>"
                         alt="<?php echo $attribute_center['titulo_atributo'] ?>">
                    <?php echo $attribute_center['descricao_atributo'] ?>
                </span>
                <span>
                    <img src="<?php echo $attribute_right['icone_atributo'] ?>"
                         alt="<?php echo $attribute_right['titulo_atributo'] ?>">
                    <?php echo $attribute_right['descricao_atributo'] ?>
                </span>
                <span>
                    <img src="<?php echo $attribute_right_2['icone_atributo'] ?>"
                         alt="<?php echo $attribute_right_2['titulo_atributo'] ?>">
                    <?php echo $attribute_right_2['descricao_atributo'] ?>
                </span>
            </div>
        </div>
        <?php echo ($status[0]['value'] === '100-vendidos') ? '' : '<div class="item-footer">
                <p>Saiba mais <span class="font-etmodules">&#x35;</span></p>
        </div>' ; ?>

    </div>
</a>
    <?php
        }
    } wp_reset_postdata();
    ?>
</section>