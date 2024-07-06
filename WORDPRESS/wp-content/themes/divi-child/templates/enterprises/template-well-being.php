<?php
$conforts = get_field('confort');
$securities = get_field('security');
?>

<section id="well-being" class="container-fluid d-flex flex-lg-row flex-column flex-wrap p-0">
    <div class="col-12 col-lg-8 mb-5 mb-lg-0 well-being-head p-0">
        <div class="d-flex flex-wrap align-items-center justify-content-start title">
            <img src="/wp-content/uploads/2023/07/Icones-conforto.svg">
            <h4>Diferenciais</h4>
        </div>
        <div class="well-being-body confort">
            <?php foreach($conforts as $confort){ ?>
                <div class="d-flex flex-wrap align-items-start content">
                    <span class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone et-pb-icon et-animated">E</span>
                    <p><?php echo $confort[name] ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
    
    <!--Foi solicitado retirar esse trecho, por isso estou comentando.
    
    <div class="col-12 col-lg-4 well-being-head p-0">
        <div class="d-flex flex-wrap align-items-center justify-content-start title">
            <img src="/wp-content/uploads/2023/07/Icones-seguranca-red.svg">
            <h4>SEGURANÇA</h4>
        </div>
        <div class="well-being-body">
            <?php foreach($securities as $security){ ?>
                <div class="d-flex flex-wrap align-items-start content">
                    <span class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone et-pb-icon et-animated">E</span>
                    <p><?php echo $security[name] ?></p>
                </div>
            <?php } ?>
        </div>
    </div> -->
</section>