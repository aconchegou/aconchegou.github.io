<div class="dynamic-attributes-section">
    <?php
        $attributes = get_field('atributos_empreendimentos');
        if($attributes) :
    ?>

    <ul>
        <?php
            foreach ($attributes as $attribute) :
        ?>
        <li>
            <img src="<?php echo $attribute['icone_do_atributo']; ?>"
                 alt="<?php echo $attribute['titulo_do_atributo']; ?>">
            <p><?php echo $attribute['descricao_do_atributo']; ?></p>
        </li>
        <?php
            endforeach;
        ?>
    </ul>
    <?php
        endif;
    ?>
</div>