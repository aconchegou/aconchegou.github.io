

<section id="enterprises-list" class="enterprises-list">
    <?php 
    

        // filter footage
        function footage_repeater_where( $where ) {
                                
            $where = str_replace("meta_key = 'footage_repeater_$", "meta_key LIKE 'footage_repeater_%", $where);

            return $where;
        }
        
        // filter investments
        function investments_repeater_where( $where ) {
                                
            $where = str_replace("meta_key = 'investments_repeater_$", "meta_key LIKE 'investments_repeater_%", $where);

            return $where;
        }
        



        $filters = $_GET['filter'];
        $values = $_GET['value'];
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
        'post_type' => 'empreendimento',
        'posts_per_page' =>  6,
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status' => 'publish',
        );
        
        
        if (!empty($filters) && !empty($values)) {
            $meta_queries = array();
            
            foreach ($filters as $index => $filter) {
                $value = $values[$index];
                $key_prefix = '';
                
               
                
                if (!empty($filter) && !empty($value)) {
                    
                    if ($filter === 'footage' || $filter === 'investments' ) {

                        if($filter === 'footage') {
                            add_filter('posts_where', 'footage_repeater_where');
                            $key_prefix = 'footage_repeater_$_';
                        } else {
                            add_filter('posts_where', 'investments_repeater_where');
                            $key_prefix = 'investments_repeater_$_';
                        }
                        
                        if($value[0] != 0 && $value[1] != 0){
                            
                            $meta_queries[] = 
                            [
                                'key' => $key_prefix.$filter,
                                'value' => array( $value[0], $value[1]),
                                'compare' => 'BETWEEN',
                                'type' => 'numeric'
                            ];
                        } else if($value[0] != 0 &&  $value[1] == 0){
                            
                            $value[1] = 999999999999;
                            $meta_queries[] = 
                            [
                                'key' => $key_prefix.$filter,
                                'value' => array($value[0], $value[1]),
                                'compare' => 'BETWEEN',
                                'type' => 'numeric'
                            ];
                        } else if($value[0] == 0 &&  $value[1] != 0){
                            
                            $meta_queries[] = 
                            [
                                'key' => $key_prefix.$filter,
                                'value' => array($value[0], $value[1]),
                                'compare' => 'BETWEEN',
                                'type' => 'numeric'
                            ];
                        }
                        
                        
                    }else{
                        
                        if($filter === 'datadeentrega'){
                            
                           $start = str_replace('-', '', $value);
                           $start = $start . '01';
                           
                           $end = str_replace('-', '', $value);
                           $end = $end . '31';

                           
                           
                           $meta_queries[] = array(
                                'key' => $filter,
                                'value' => array($start, $end),
                                'compare' => 'BETWEEN',
                                'type' => 'DATETIME',
                            );
                            
                        } else {
                            $meta_queries[] = array(
                                'key' => $filter,
                                'value' => $value,
                                'compare' => 'LIKE'
                            );
                        }
                    }
                }
            }
        
            if (!empty($meta_queries)) {
                // Se houver mais de uma consulta de metadados, use a relação "AND"
                $args['meta_query'] = array('relation' => 'AND') + $meta_queries;
            }
        }
        
        $query = new WP_Query($args);

        if ($query -> have_posts()) {
            while($query -> have_posts()) {
                $query -> the_post();
                $title = get_the_title();
                $thumb_url = get_the_post_thumbnail_url();
                $link = get_permalink();
                $status = get_field('status');
                // $label = get_field('label_imagem');
                $neighborhood = get_field('bairro');
                $price = get_field('valor');
                
                $area = get_field('area');
                $finish = get_field('acabamento');
                $company = get_field('company');
                $completion_date  = get_field('datadeentrega');
                
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
                               

            <div class="company-adress">
                <div id="company">
                    <h5 class="valor">
                        <?php 
                        if (is_array($company) && !empty($company)) {
                            $company = array_map(function($item) {
                                return str_replace('-', ' ', $item);
                            }, $company);
                            echo implode(' / ', $company);
                        } 
                        ?>
                    </h5>

                    <h5 class="valor"><?php echo $price; ?></h5>
                </div>    
                
                <div class="address">
                    <img src="/wp-content/uploads/2022/07/icone-local.svg"
                        alt="Localização">
                    <div>
                        <span><?php echo $neighborhood ? $neighborhood : null ?></span>
                        <span><?php echo $city ? $city : null ?></span>
                    </div>
                </div>
            </div>
            
            <div class="info">
                <span>
                        <img src="<?php echo $attribute_center['icone_atributo'] ?>"
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
                         <?php echo $completion_date  ?>
                         
                         
                </span>
            </div>
        </div>
        <?php echo ($status[0]['value'] === '100-vendidos') ? '' : '<div class="item-footer">
                <p>Saiba mais <span class="font-etmodules">&#x35;</span></p>
        </div>' ; ?>

    </div>
</a>
                <?php } ?>
            
            <?php
            }else{ ?>
                <div style="position:relative">
                    <p class="no-results">Não existe emprendimentos nesta busca!</p>
                    
                </div>
           <?php } wp_reset_postdata();
            ?>
            
            
            
            
            

            
            
            
            
            
            
</section>



<?php
if (count($query->posts)>=6) { ?>
<div id="more_posts" class="btn-blue">Ver mais empreendimentos</div>
<?php }   

