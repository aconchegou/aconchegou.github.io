<div class="wp-vr-container">
    <div class="wp-vr-player">
        <?php
        $wpvr = get_field('wp_vr_shortcode');
        echo do_shortcode($wpvr);
        ?>
    </div>
</div>