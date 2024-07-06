<div class="enterprises-list-with-filter">
  <!--  <div class="filter">
        <span data-filter="pronto">Pronto para Morar</span>
        <span data-filter="breve-lancamento">Lançamentos</span>
        <span data-filter="em-obra">Em construção</span>
        <span data-filter="100-vendidos">100% Vendidos</span>
       <span data-filter="">Todos</span> -->
    </div> 
    <div class="enterprises-list">

        <?php
        $filter_param = isset($_GET['status']) ? $_GET['status'] : false;
        
        // Define the order of the statuses
        $status_order = array(
            'pronto',
            'breve-lancamento',
            'em-obra',
            '100-vendidos'
        );

        
        $args = array(
            'post_type' => 'empreendimento',
            'posts_per_page' =>  -1,
            'orderby' => 'meta_value',
            'meta_key' => 'status',
            'order' => 'DESC',
            'meta_query' => $filter_param ? array(
                array(
                    'key' => 'status',
                    'value' => '"' . $filter_param . '"',
                    'compare' => 'LIKE'
                )
            ) : ''
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                get_template_part('templates/template-parts/template-enterprise-item');
            }
        }
        wp_reset_postdata();
        ?>
    </div>
</div>