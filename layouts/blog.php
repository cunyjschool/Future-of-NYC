<div class="box">

	<?php	
		include(TEMPLATEPATH . '/includes/version.php');
		
		$the_query = new WP_Query('cat=-'. $ex_feat . ',-' . $ex_vid . '&showposts=' . $showposts . '&orderby=post_date&order=desc');
		
		$counter = 0;
				
		while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
	?>

		<div class="post-alt blog">

			<?php if ( !get_option('woo_resize') ) { if ( get_post_meta($post->ID, 'image', true) ) { ?> <!-- DISPLAYS THE IMAGE URL SPECIFIED IN THE CUSTOM FIELD -->
						
						<img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&amp;h=57&amp;w=100&amp;zc=1&amp;q=95" alt="<?php the_title(); ?>" class="th" />			
				
			<?php } else { ?> <!-- DISPLAY THE DEFAULT IMAGE, IF CUSTOM FIELD HAS NOT BEEN COMPLETED -->
				
				<img src="<?php bloginfo('template_directory'); ?>/images/no-img-thumb.jpg" alt="" class="th" />
				
			<?php } } ?> 		
			
			<h2><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<h3 class="post_date">Posted on <?php the_time('d F Y'); ?> <span class="singletags"><?php if (function_exists('the_tags')) { ?><?php the_tags('<br /> Tags: ', ', ', ''); ?><?php } ?></span></h3>
            <hr style="clear:both;" />

			<div class="entry">
				<?php the_content('<span class="continue">Continue Reading</span>'); ?> 
			</div>

			 <h3 class="posted">Posted in <?php the_category(', ') ?><span class="comments"><?php comments_popup_link('Comments (0)', 'Comments (1)', 'Comments (%)'); ?></span></h3>
		
		</div><!--/post-->		

	<?php endwhile; ?>	
	
	<div class="fix"></div>
	
	<?php $archives_page = get_option('woo_archives_page') . '/'; ?>
	
	<p class="ar"><a href="<?php echo "$archives_page"; ?>" class="more">See more articles in the archive</a></p>

</div>