<?php
$securities = get_field('security_condominium');
$sustainabilities = get_field('sustainability');
$qualities = get_field('quality');
?>

<section id="technical-information" class="container-fluid d-flex flex-wrap p-0">
    <div class="col-12 col-lg-4 mb-3 mb-lg-0">
        <div class="d-flex flex-wrap flex-column justify-content-center align-items-center technical-information-head">
            <img src="/wp-content/uploads/2023/07/Icones-sustentabilidade.svg">
            <h4>LAZER</h4>
        </div>
        <div class="technical-information-body">
            <?php foreach($sustainabilities as $sustainability){ ?>
                <div class="d-flex flex-wrap align-items-start mb-3 content">
                    <span class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone et-pb-icon et-animated">E</span>
                    <p class="col-10"><?php echo $sustainability[name] ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
    </section>
    <section id="technical-information" class="container-fluid d-flex flex-wrap p-0">
    <div class="col-12 col-lg-4 mb-3 mb-lg-0">
        <div class="d-flex flex-wrap flex-column justify-content-center align-items-center technical-information-head">
            <img src="/wp-content/uploads/2023/07/Icones-security-yellow.svg">
            <h4>SEGURANÇA</h4>
        </div>
        <div class="technical-information-body">
            <?php foreach($securities as $security){ ?>
                <div class="d-flex flex-wrap align-items-start mb-3 content">
                    <span class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone et-pb-icon et-animated">E</span>
                    <p class="col-10"><?php echo $security[name] ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
    </section>
    <section id="technical-information" class="container-fluid d-flex flex-wrap p-0">
    <div class="col-12 col-lg-4 mb-3 mb-lg-0">
        <div class="d-flex flex-wrap flex-column justify-content-center align-items-center technical-information-head">
            <img src="/wp-content/uploads/2023/07/Icones-qualidade.svg">
            <h4>QUALIDADE</h4>
        </div>
        <div class="technical-information-body">
            <?php foreach($qualities as $quality){ ?>
                <div class="d-flex flex-wrap align-items-start mb-3 content">
                    <span class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone et-pb-icon et-animated">E</span>
                    <p class="col-10"><?php echo $quality[name] ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
