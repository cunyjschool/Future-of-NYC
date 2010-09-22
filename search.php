<?php get_header(); ?>

		<div class="col1">

		<?php if (have_posts()) : ?>
		
		<div id="archivebox">
        	
            	<h3><em>Search Results |</em> <?php printf(__('\'%s\''), $s) ?></h3>        
		
		</div><!--/archivebox-->
	
			<?php while (have_posts()) : the_post(); ?>		

				<div class="post-alt blog" id="post-<?php the_ID(); ?>">
		
					<?php if ( !get_option('woo_resize') ) { if ( get_post_meta($post->ID, 'image', true) ) { ?> <!-- DISPLAYS THE IMAGE URL SPECIFIED IN THE CUSTOM FIELD -->
						
						<img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&amp;h=57&amp;w=100&amp;zc=1&amp;q=80" alt="<?php the_title(); ?>" class="th" />			
						
					<?php } else { ?> <!-- DISPLAY THE DEFAULT IMAGE, IF CUSTOM FIELD HAS NOT BEEN COMPLETED -->
						
						<img src="<?php bloginfo('template_directory'); ?>/images/no-img-thumb.jpg" alt="" class="th" />
						
					<?php } } ?> 		
					
					
					<h2><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<h3 class="post_date">Posted on <?php the_time('d F Y'); ?> <span class="singletags"><?php if (function_exists('the_tags')) { ?><?php the_tags('<br /> Tags: ', ', ', ''); ?><?php } ?></span></h3>
		
					<div class="entry">
						<?php the_content('<span class="continue">Continue Reading</span>'); ?> 
					</div>
		
					<h3 class="posted">Posted in <?php the_category(', ') ?><span class="comments"><?php comments_popup_link('Comments (0)', 'Comments (1)', 'Comments (%)'); ?></span></h3>
				
				</div><!--/post-->

		<?php endwhile; ?>
		
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
		
		<?php else : ?>

		<div id="archivebox">
        	
            	<h3><em>Search Results |</em> None Found</h3>				
		
		</div><!--/archivebox-->	
        
        <p>Sorry. Your search yielded no results. Please search again.</p>			
	
	<?php endif; ?>							

		</div><!--/col1-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>	
