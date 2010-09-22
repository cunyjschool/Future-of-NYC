<script type="text/javascript">
    function startGallery() {
        var myGallery = new gallery($('myGallery'), {
            timed: true,
            showArrows: true,
            delay: 5000,
            defaultTransition: "fadeslideleft",
            showCarousel: false,
            showArrows: false
        });
    }
    window.onDomReady(startGallery);
</script>

<div id="myGallery">

<?php 
	
	$featposts = get_option('woo_feat_entries'); // Number of featured entries to be shown
	include(TEMPLATEPATH . '/includes/version.php');
	
	$the_query = new WP_Query('cat=' . $ex_feat . '&showposts=' . $featposts . '&orderby=post_date&order=desc');
			
	while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
?>

    <div class="imageElement" id="post-<?php the_ID(); ?>">

		<?php if ( !get_option('woo_resize') ) { ?> 
        
        <img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&amp;h=270&amp;w=595&amp;zc=1&amp;q=95" class="full" alt="<?php the_title(); ?>" />
        
        <?php } else { ?>
        
        <img src="<?php echo get_post_meta($post->ID, "image", $single = true); ?>" class="full" alt="<?php the_title(); ?>" />

        <?php } ?>
        <h3><?php the_title(); ?></h3>
        <p><?php echo strip_tags(get_the_excerpt(), '<a><strong>'); ?></p>
        <a href="<?php the_permalink() ?>" title="Read the full story" class="open"></a>
    
    </div>

<?php endwhile; ?>

</div>