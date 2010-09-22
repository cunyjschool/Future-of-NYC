<script src="Scripts/AC_ActiveX.js" type="text/javascript"></script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<div class="col2">
     
   <div class="conference">
    <div class="widget">
    
	   <h2 class="hl">About the Future of New York City series</h2>
         <ul>
           <p>This conference series is designed to help business and political leaders better understand the economic issues facing New York and to develop solutions to improve the prospects of the economy. </p>
           <br />
           <p>The first conference in February attracted more than 1,000 business leaders and government officials and saw keynote addresses by J.P. Morgan Chase CEO Jamie Dimon and Mayor Bloomberg. It was covered live by CNBC and WNYC radio and received extensive coverage in other media.</p>
           <br />
      </ul>
    </div><!--/widget--> 
    <div class="tickets">    </div>
    <!--/tickets-->
   </div><!--/conference-->  
   
   <div class="fix"></div>
	
	<?php if (get_option('woo_flickr_id') != "") { ?>
	
		<div class="flickr">
			<?php $flickr_url = get_option('woo_flickr_url'); ?>
			    <div class="widget">
                  <h2 class="hl">Conference Photos <span class="flickr-ar"><a href="<?php echo "$flickr_url"; ?>">- See all photos</a></span></h2>
                </div>
		  <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo get_option('woo_flickr_entries'); ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo get_option('woo_flickr_id'); ?>"></script>	
        	<div class="fix"></div>
		</div><!--/flickr-->
	
	<?php } ?>
    
    <div class="fix"></div>
    
  
  <div class="conference">
   <div class="widget">
       <div id="block">
       <p align="center">
       <h2 class="hl">Presenting Sponsors</h2>
       <div class="blockborder"><a href="http://www.guardianlife.com/"><img src="http://futurenyc.crainsnewyork.com/wp-content/uploads/2008/12/guardian-sidebar.jpg" /></a></div>
       <div class="blockborder"><a href="http://www.nyc.gov/html/sbs/html/home/home.shtml"><img src="http://futurenyc.crainsnewyork.com/wp-content/uploads/2008/12/sbs-sidebar.jpg" /></a></div>
       </p>
        <p align="center">
       <h2 class="hl">City Sponsors</h2>
          <div class="blockborder"><a href="http://www.aa.com/business"><img src="http://futurenyc.crainsnewyork.com/wp-content/uploads/2009/02/aa-sidebar.jpg" /></a></div>
       </p>
       <p align="center">
       <h2 class="hl">City Supporters</h2>
       <div class="blockborder"><a href="http://www.eisnerllp.com/"><img src="http://futurenyc.crainsnewyork.com/wp-content/uploads/2008/12/logo_sidebar_eisner.jpg" /></a></div>
          <div class="blockborder"><a href="www.panynj.gov/"><img src="http://futurenyc.crainsnewyork.com/wp-content/uploads/2009/02/pa-sidebar.jpg" /></a></div>
          <div class="blockborder"><a href="http://www.powerspaceandservices.com/"><img src="http://futurenyc.crainsnewyork.com/wp-content/uploads/2009/02/powerspace-sidebar.jpg" /></a></div>
       </p>
       <p align="center">
       <h2 class="hl">Partners</h2>
       <div class="blockborder"><a href="http://www.ibrooklyn.com/"><img src="http://futurenyc.crainsnewyork.com/wp-content/uploads/2009/02/BCC-sidebar.jpg" /></a></div>
       <div class="blockborder"><a href="http://cuny.edu/"><img src="http://futurenyc.crainsnewyork.com/wp-content/uploads/2009/02/cuny-sidebar.jpg" /></a></div>
       <div class="blockborder"><a href="http://www.manhattancc.org/common/11001/default.cfm?clientID=11001"><img src="http://futurenyc.crainsnewyork.com/wp-content/uploads/2009/02/mcc-sidebar.jpg" /></a></div>
       <div class="blockborder"><a href="http://www.queenschamber.org/"><img src="http://futurenyc.crainsnewyork.com/wp-content/uploads/2009/02/qcc-sidebar.jpg" /></a></div>
       </p>
       </div><!--/block-->
          <?php include('ads/ads-management.php'); ?>
                 
          <?php include('ads/ads-300x250.php'); ?>
                 
          <?php include('ads/ads-top.php'); ?>
       
          <?php include('ads/ads-bottom.php'); ?>
          
     </div><!--/widget-->
   </div><!--/conference-->

   
    <div id="myTabs1" class="sideTabs">
		
		<ul class="mootabs_title">
			<li title="pop"><span>Popular</span></li>
			<li title="feat"><span>Latest</span></li>
            <li title="comm"><span>Comments</span></li>
			<?php if (function_exists('wp_tag_cloud')) { ?><li title="tagcloud"><span>Tags</span></li><?php } ?>
            <li title="sub"><span>Subscribe</span></li>
		</ul>	

		<div class="mootabs_panel" id="pop">
			<ul class="list1">
                <?php include(TEMPLATEPATH . '/includes/popular.php' ); ?>                    
			</ul>
        </div>

		<div id="feat" class="mootabs_panel">
	        <ul class="list2">
				<?php 
					include(TEMPLATEPATH . '/includes/version.php');	
					$the_query = new WP_Query('cat=' . $ex_feat . '&showposts=10&orderby=post_date&order=desc');	
					while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
				?>
				<li><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
				<?php endwhile; ?>		
			</ul>
		</div>
			
		<div class="mootabs_panel" id="comm">
			<ul class="list3">
                <?php include(TEMPLATEPATH . '/includes/comments.php' ); ?>                    
			</ul>
		</div>
			
		<?php if (function_exists('wp_tag_cloud')) { ?>
	
			<div class="mootabs_panel" id="tagcloud">
				
				<?php wp_tag_cloud('smallest=10&largest=18'); ?>
			
			</div>
	
		<?php } ?>

        <div class="mootabs_panel" id="sub">
	        <ul id="rss">
				<li><h2>Stay up to date</h2><a href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/ico-rss.gif" alt="" /></a></li>
				<li><a href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>">Subscribe to the RSS Feed</a></li>
				<li><a href="http://www.feedburner.com/fb/a/emailverifySubmit?feedId=<?php $feedburner_id = get_option('woo_feedburner_id'); echo $feedburner_id; ?>" 	target="_blank">Subscribe to the feed via email</a></li>
			</ul>
        </div>
	
</div>
	
	
	<div class="fix"></div>
	
	
	
</div><!--/col2-->
