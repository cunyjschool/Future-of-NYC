<?php get_header(); ?>

		<div class="col1">

			<?php include(TEMPLATEPATH . '/includes/featured.php'); ?>

            <?php
				$showplace = get_option('woo_show_video_feat');
				if ( $showplace ) { include(TEMPLATEPATH . '/includes/video.php'); }
			?>
            
            <?php
				$showplace = get_option('woo_show_video_feat');
				if ( !$showplace ) { include(TEMPLATEPATH . '/includes/video.php'); }
			?>
           
	
        <div class="col1a">
        
      	<?php
				
				$layout = get_option('woo_layout');

				include('layouts/'.$layout);
				
			?>
        </div><!--/col1a-->
        
        <div class="col1b">
        <p>this is a test</p>
        <p>testing</p>
        <p> this is a test</p>
        
        </div><!--/col1b-->
     
        </div><!--/col1-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>