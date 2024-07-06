<?php
$stage = get_field('estagios_da_obra');
?>
<div class="stages">
    <div class="stage-icons">
        <div class="stage">
            <img src="/wp-content/uploads/2023/08/obras-nao-iniciadas-2.png" alt="Obras não iniciadas">
            <p>Obras não iniciadas</p>
        </div>
        <div class="stage">
            <img src="/wp-content/uploads/2023/08/Icones-32.svg" alt="Terraplanagem">
            <p>Terraplanagem</p>
        </div>
        <div class="stage">
            <img src="/wp-content/uploads/2023/08/Icones-33.svg" alt="Fundação">
            <p>Fundação</p>
        </div>
        <div class="stage">
            <img src="/wp-content/uploads/2023/08/Icones-34.svg" alt="Construção">
            <p>Construção</p>
        </div>
        <div class="stage">
            <img src="/wp-content/uploads/2023/08/Icones-35.svg" alt="Acabamento">
            <p>Acabamento</p>
        </div>
        <div class="stage">
            <img src="/wp-content/uploads/2023/01/Icones-36.svg" alt="Entregue">
            <p>Entregue</p>
        </div>
    </div>
    <div class="time-line">
        <?php
        switch($stage) {
            case 'Obras não iniciadas':
                echo '<img src="#" alt="">';
                break;
            case 'Terraplanagem':
                echo '<img src="#" alt="">';
                break;
            case 'Fundação':
                echo '<img src="#" alt="">';
                break;
            case 'Construção':
                echo '<img src="/wp-content/uploads/2023/08/Time-line-1.svg" alt="">';
                break;
            case 'Acabamento':
                echo '<img src="#" alt="">';
                break;
            case 'Entregue':
                echo '<img src="#" alt="">';
                break;
            case '':
                echo '<img src="#" alt="">';
                break;
        }
        ?>
    </div>
</div>