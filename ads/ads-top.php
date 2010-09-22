<?php $show = get_option('woo_show_ads_top'); ?>

<?php if ( $show ) { ?>

<div class="ads">

	<a <?php do_action('woo_external_ad_link'); ?> href="<?php echo "$dest_url[1]"; ?>"><img src="<?php echo "$img_url[1]"; ?>" alt="" /></a>

	<a <?php do_action('woo_external_ad_link'); ?> href="<?php echo "$dest_url[2]"; ?>"><img src="<?php echo "$img_url[2]"; ?>" alt="" /></a>

	<a href="<?php echo bloginfo('wpurl').'/?page_id='.$GLOBALS['ad_link']; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/ad-here.gif" alt="Advertise Here" class="last" /></a>

</div><!--/ads-->

<?php } ?>