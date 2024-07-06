<section id="establishments-section">
    <?php
    $establishments = get_field('estabelecimentos_proximos');

    $academias = $establishments['academias'];
    $hospitais = $establishments['hospitais'];
    $colegios = $establishments['colegios'] ;
    $restaurantes = $establishments['restaurantes'] ;
    $farmacias = $establishments['farmacias'] ;
    $parques = $establishments['parques'] ;
    $shoppings = $establishments['shoppings'] ;
    $padarias = $establishments['padarias'] ;
    
    ?>
    <div class="find-on-map">
        <h6>Encontre no Mapa</h6>
    </div>
    <?php
    ?>
    <div class="establishments-buttons">
        <div href="#"
             data-iframe="<?php echo htmlentities($academias); ?>">
            <img src="/wp-content/uploads/2022/07/weights.png"
                 alt="ícone de academias">
            <p>Academias</p>
        </div>
    </div>
    <div class="establishments-buttons">
        <div href="#"
             data-iframe='<?php echo htmlentities($hospitais) ?>'>
            <img src="/wp-content/uploads/2022/07/hospital.png"
                 alt="ícone de academias">
            <p>Hospitais</p>
        </div>
    </div>
    <div class="establishments-buttons">
        <div href="#"
             data-iframe='<?php echo htmlentities($colegios) ?>'>
            <img src="/wp-content/uploads/2022/07/graduation-cap-1.png"
                 alt="ícone de academias">
            <p>Colégios</p>
        </div>
    </div>
    <div class="establishments-buttons">
        <div href="#"
             data-iframe='<?php echo htmlentities($restaurantes) ?>'>
            <img src="/wp-content/uploads/2022/07/restaurant.png"
                 alt="ícone de academias">
            <p>Restaurantes</p>
        </div>
    </div>
    <div class="establishments-buttons">
        <div href="#"
             data-iframe='<?php echo htmlentities($farmacias) ?>'>
            <img src="/wp-content/uploads/2022/07/medicine.png"
                 alt="ícone de academias">
            <p>Farmácias</p>
        </div>
    </div>
    <div class="establishments-buttons">
        <div href="#"
             data-iframe='<?php echo htmlentities($parques) ?>'>
            <img src="/wp-content/uploads/2022/07/park.png"
                 alt="ícone de academias">
            <p>Parques</p>
        </div>
    </div>
    <div class="establishments-buttons">
        <div href="#"
             data-iframe='<?php echo htmlentities($shoppings) ?>'>
            <img src="/wp-content/uploads/2022/07/shopping-bag.png"
                 alt="ícone de academias">
            <p>Shoppings</p>
        </div>
    </div>
    <div class="establishments-buttons">
        <div href="#"
             data-iframe='<?php echo htmlentities($padarias) ?>'>
            <img src="/wp-content/uploads/2022/07/bakery.png"
                 alt="ícone de academias">
            <p>Padarias</p>
        </div>
    </div>
</section>