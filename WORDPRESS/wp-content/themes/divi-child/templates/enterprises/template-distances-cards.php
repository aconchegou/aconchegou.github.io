<?php
    $cards = get_field('chegue_rapido')['local'];
    $carIcon = "/wp-content/uploads/2022/07/car.png";
    $busIcon = "/wp-content/uploads/2022/09/bus-white.png";
    $walkIcon = "/wp-content/uploads/2022/09/walk-white.png";
    if($cards) :
?>
<section class="distances-cards-section">
    <div class="get-quickly">
        <h6>Chegue Mais Rápido</h6>
    </div>
    <?php
    foreach ($cards as $card) :
        $icon = '';
        switch ($card['meio_de_transporte']) {
            case 'Carro':
                $icon = $carIcon;# code...
                break;
            
            case 'Ônibus':
                $icon = $busIcon;# code...
                break;
            
            case 'Andando':
                $icon = $walkIcon;# code...
                break;
            default:
                $icon = $carIcon;# code...
                break;
        }
    ?>
    <div class="distance-cards">
        <div class="title">
            <p><?php echo $card['nome_do_local']; ?></p>
        </div>
        <div class="metrics">
            <div class="distance">
                <p><?php echo $card['distancia']; ?></p>
            </div>
            <div class="time">
                <img src="<?php echo $icon; ?>"
                     alt="�0�0nibus">
                <p><?php echo $card['tempo']; ?></p>
            </div>
        </div>
    </div>
    <?php
    endforeach;
    ?>
</section>
<?php 
endif;
?>