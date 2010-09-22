<?php
	$showvideo = get_option('woo_show_video');
	
	if ($showvideo) { ?>

	<div id="video-frame">
	
	<div id="myTabs2">
	
		<div class="video-right">

		<?php include(TEMPLATEPATH . '/includes/version.php'); ?>
		
		<?php query_posts('showposts=1&cat=' . $ex_vid); ?>
	
		<?php if (have_posts()) : ?>
		
			<?php while (have_posts()) : the_post(); ?>	
		
				<h2>Currently Playing...</h2>
				<h3><?php the_title(); ?></h3>
                <p>Added on <?php the_time('d F Y'); ?></p>
		
			<?php endwhile; ?>
		
		<?php endif; ?>
	
        <h2>View More Videos:</h2>   
       
        <?php query_posts('showposts=4&offset=1&cat=' . $ex_vid); ?>
   
        <?php if (have_posts()) : ?>
       
            <ul class="mootabs_title">
   
            <?php while (have_posts()) : the_post(); ?>   
       
                <li><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
           
            <?php endwhile; ?>
           
            </ul>   

       
        <?php endif; ?>
		</div><!--/video-right -->
	
	<?php query_posts('showposts=1&cat=' . $ex_vid); ?>
	
	<?php if (have_posts()) : ?>
	
		<div class="video-left">

		<?php while (have_posts()) : the_post(); ?>	
	
			<div id="video-<?php the_ID(); ?>">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
			</div>
		
		<?php endwhile; ?>
		
		</div><!--/video-left -->
	
	<?php endif; ?>
	
	</div>
	
	</div><!--/video-frame -->

<?php } ?>