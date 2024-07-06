<?php 
$gallery = get_field('galeria');
?>
<section id="condominium-photos">
    <div id="owl-condominium-photos" class="owl-carousel owl-theme">
        <?php foreach ($gallery as $item){ ?>
            <div class='item'>
                <div class="image-carousel">
                    
                    <a href="<?php echo $item ?>" data-lightbox="condominium-photos">
                        <img src="<?php echo $item ?>" class="lightbox-trigger">
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>