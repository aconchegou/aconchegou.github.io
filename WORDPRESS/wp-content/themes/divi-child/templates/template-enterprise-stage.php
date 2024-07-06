<?php
$stage = get_field('estagios_da_obra');
?>
<div class="stages">
    <div class="stage">
        <img src="/wp-content/uploads/2022/07/icone-logo.svg" alt="Projeto">
        <p>Projeto</p>
    </div>
    <div class="stage">
        <img src="/wp-content/uploads/2022/07/excavator.svg" alt="Terraplanagem">
        <p>Terraplanagem</p>
    </div>
    <div class="stage">
        <img src="/wp-content/uploads/2022/07/building.svg" alt="Fundação">
        <p>Fundação</p>
    </div>
    <div class="stage">
        <img src="/wp-content/uploads/2022/07/construction.svg" alt="Construção">
        <p>Construção</p>
    </div>
    <div class="stage">
        <img src="/wp-content/uploads/2022/07/bricklayer.svg" alt="Acabamento">
        <p>Acabamento</p>
    </div>
    <div class="stage">
        <img src="/wp-content/uploads/2022/07/building-1.svg" alt="Entregue">
        <p>Entregue</p>
    </div>
    <div class="time-line">
        <?php
        switch($stage) {
            case 'Obras não iniciadas':
                echo '<img src="/wp-content/uploads/2022/07/time-line-4.svg" alt="">';
                break;
            case 'Terraplanagem':
                echo '<img src="/wp-content/uploads/2022/07/time-line-3.svg" alt="">';
                break;
            case 'Fundação':
                echo '<img src="/wp-content/uploads/2022/07/time-line-2.svg" alt="">';
                break;
            case 'Construção':
                echo '<img src="/wp-content/uploads/2022/07/time-line-1.svg" alt="">';
                break;
            case 'Acabamento':
                echo '<img src="/wp-content/uploads/2022/07/time-line-5.svg" alt="">';
                break;
            case 'Entregue':
                echo '<img src="/wp-content/uploads/2022/07/time-line-6.svg" alt="">';
                break;
            case '':
                echo '<img src="/wp-content/uploads/2022/07/time-line-4.svg" alt="">';
                break;
        }
        ?>
    </div>
</div>
