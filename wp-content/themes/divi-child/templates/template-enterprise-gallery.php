<?php 
$gallery = get_field('galeria');
$gallery_pairs =  array_chunk($gallery, 2);
if ($gallery) { ?>
    <div class="owl-carousel owl-theme owl-enterprise-gallery popup-enterprise-gallery">
        <?php foreach($gallery_pairs as $images) { ?>
        <div class="img-wrap">
            <?php foreach($images as $image) { ?>
                <div class="gallery-item">
                    <a href="<?php echo $image; ?>"  data-effect="mfp-zoom-in">
                        <img src="<?php echo $image; ?>" alt="Imagem da galeria">
                        <div class="overlay">
                            <img src="/wp-content/uploads/2022/07/icone-zoom.svg" alt="Zoom">
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
<?php } else { ?>
    <p class="c-white">Não foi encontrada nenhuma imagem na galeria</p>
<?php }