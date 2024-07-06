<?php 
if( have_rows('adicionais') ): ?>
    <div class="enterprise-additional">
    <?php while( have_rows('adicionais') ) : the_row();
        $icon = get_sub_field('icone');
        $name = get_sub_field('nome');
        $description = get_sub_field('sobre');
    ?>
        <div class="additional">
            <img src="<?php echo $icon; ?>" alt="<?php echo 'Icone ' . $name; ?>">
            <h4><?php echo $name; ?></h4>
            <p><?php echo $description; ?></p>
        </div>
    <?php
    endwhile; ?>
    </div>
<?php endif;
?>