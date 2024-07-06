<?php
$professionals = get_field('professionals');
?>
<div id="professionals" class="d-flex flex-wrap justify-content-center mb-3">
    <?php foreach($professionals as $professional) { ?>
        <div class="d-flex flex-column align-items-center mb-5 professional-content">
  	        <img class="mb-3" src="<?php echo $professional[image] ?>">
            <p><?php echo $professional[profession] ?></p>
        </div>
    <?php } ?>  
</div>