<div class="row">
    

<?php 
if( have_rows('videos') ): ?>
    <div class="et_pb_module et_pb_text et_pb_text_4_tb_body  et_pb_text_align_left et_pb_bg_layout_light" style="display: flex; justify-content: center; max-width: 80%">
		<div class="et_pb_text_inner"><h3 style="text-align: left; width:  1080px;">Videos</h3></div>
	</div>
    <div class="owl-carousel owl-theme owl-enterprise-videos">
    <?php while( have_rows('videos') ) : the_row();
        $video = get_sub_field('video');
    ?>
        <div class="video">
            <?php echo $video; ?>
        </div>
    <?php
    endwhile; ?>
    </div>
<?php endif;
?>
</div>