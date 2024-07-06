<?php 
$plan = get_field('planta_do_empreendimento');
if ($plan) { ?>
    <div id="sync1" class="owl-carousel owl-theme owl-enterprise-plan popup-enterprise-plan">
        <?php foreach($plan as $image) { ?>
        <div class="img-wrap item">
            <div class="gallery-item">
                <a href="<?php echo $image; ?>"  data-effect="mfp-zoom-in">
                    <img src="<?php echo $image; ?>" alt="Imagem da planta">
                    <div class="overlay">
                        <img src="/wp-content/uploads/2022/07/icone-zoom.svg" alt="Zoom">
                    </div>
                </a>
            </div>
        </div>
        <?php } ?>
    </div>
    <div  id="sync2" class="navigation-thumbs owl-carousel">
        <?php foreach($plan as $image) { ?>
        <div class="item">
            <img src="<?php echo $image; ?>" alt="Imagem da planta">
        </div>
        <?php } ?>
    </div>
<?php } else { ?>
    <p>Não foi encontrada nenhuma imagem da planta</p>
<?php }