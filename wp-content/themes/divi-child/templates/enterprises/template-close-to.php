<?php
$close = get_field('close_to_enterprise');
?>
<div id="close" class="d-flex flex-lg-row flex-column align-items-center">
  <div class="col-12 col-lg-3">
    <h4 class="text-center text-lg-start">Pertinho deste<br>empreendimento</h4>
  </div>
  <div id="content-icon" class="col-12 col-lg-9 d-flex flex-wrap justify-content-around">
      <?php if($close) { ?>
        <?php foreach ($close as $item) { ?>
            <div class="mx-2 d-flex flex-column align-items-center">
              <img src="<?php echo $item['icon'] ?>">
              <p><?php echo $item['name'] ?></p>
            </div>
        <?php } 
      }?>  
  </div>
</div>