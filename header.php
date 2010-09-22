<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

    <title>
		<?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
		<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Search Results<?php } ?>
		<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
		<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php single_cat_title(); ?><?php } ?>
		<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php the_time('F'); ?><?php } ?>
		<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Tag Archive&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?>
    </title>

	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

	<link rel="stylesheet" type="text/css"  href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
	<?php wp_head(); ?>

	<!--[if lte IE 6]>
	<script defer type="text/javascript" src="<?php bloginfo('template_directory'); ?>/images/pngfix.js"></script>
	<![endif]-->
	
	<?php include(TEMPLATEPATH . '/includes/stylesheet.php'); ?>	

	<script src="<?php bloginfo('template_directory'); ?>/includes/js/mootools.v1.11.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/includes/js/jd.gallery.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/includes/js/jd.gallery.transitions.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/mootabs1.2.js"></script>
	<script type="text/javascript" charset="utf-8">
		window.addEvent("domready", init);
		function init() {
			myTabs = new mootabs("myTabs1");
		}			
	</script>
	
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/slideshow.css" type="text/css" media="screen" />

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/suckerfish.js"></script>	
    
    <script type="text/javascript" src="http://futurenyc.crainsnewyork.com/wp-content/plugins/flash-video-player/swfobject.js"></script>


<style type="text/css">
<!--
body {
	background-color:#F7F7F7;
	
}
-->
</style>

</head>

<body>
<?php
	if ( is_home() ) { $GLOBALS['home'] = true; }
	$template_path = get_bloginfo('template_directory');
	$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.jpg';
?>

<div id="page">

<div id="nav"> <!-- START TOP NAVIGATION BAR -->
	
		<div id="nav-left">
	
			<ul>
            
            	<?php /* If this is the frontpage */ if ( is_home() ) { ?>
				<li class="current_page_item"><a href="<?php echo get_option('home'); ?>/">Home</a></li>
				<?php } else { ?>
				<li class="page_item"><a href="<?php echo get_option('home'); ?>/">Home</a></li>
				<?php } ?>
				<?php wp_list_pages('depth=1&sort_column=menu_order&title_li=' ); ?>	
                
            </ul>
		
		</div><!--/nav-left -->

		<div id="nav-right">		
		
			<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
				
				<div id="search">
					<input type="text" value="Enter your search keywords here..." onclick="this.value='';" name="s" id="s" />
					<input name="" type="image" src="<?php bloginfo('stylesheet_directory'); ?>/styles/<?php echo "$style_path"; ?>/search.gif" value="Go" class="btn" />
				</div><!--/search -->
				
			</form>
		
		</div><!--/nav-right -->
		
	</div><!--/nav-->
	
	<div class="fix"></div>
	
	<div id="header"><!-- START LOGO LEVEL WITH RSS FEED -->
		
		<h1><a href="http://www.crainsnewyork.com"><img src="<?php if ( get_option('woo_logo') <> "" ) {  echo get_option('woo_logo'); } else { ?><?php bloginfo('stylesheet_directory'); ?>/styles/<?php echo "$style_path"; ?>/logo.gif<?php } ?>" alt="" /></a></h1>
		
		

	</div><!--/header -->
    
    	 <meta name="verify-v1" content="hPIpS4xRlaUTrWA2d327WGVmYIVE5CM+vdQc8GNKfiQ=" />
	
	<div id="suckerfish"><!-- START CATEGORY NAVIGATION (SUCKERFISH CSS) -->	
   	  <ul>[kml_flashembed movie="http://futurenyc.crainsnewyork.com/wp-content/uploads/2008/12/conference_header_sb.swf" height="319" width="960" /]</ul>     
			<ul id="nav2">
				<?php wp_list_categories('title_li=') ?>	
			</ul>
					
	</div><!--/nav2-->
	<div id="columns"><!-- START MAIN CONTENT COLUMNS -->