<?php 
$plant = get_field('planta_do_empreendimento');

?>
<section id="plant-photos">
    <div id="owl-plant-photos" class="owl-carousel owl-theme">
        <?php foreach ($plant as $item){ ?>
            <div class='item'>
                <div class="image-carousel">
                    <a href="<?php echo $item ?>" data-lightbox="plant-photos">
                        <img src="<?php echo $item ?>" class="lightbox-trigger">
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
