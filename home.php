<?php get_header(); ?>
<style type="text/css">
<!--
.style1 {color: #8cb5e1}
.style2 {font-size: 18px}
.style3 {font-size: 18px; font-weight: bold; }
.style4 {color: #FFFFFF}
-->
</style>


		<div class="col1">
        
            <ul>
            <?php
				$showplace = get_option('woo_show_video_feat');
				if ( $showplace ) { include(TEMPLATEPATH . '/includes/video.php'); }
			?>
            </ul>
            
         <div class="col1a">
         
         <img src="http://futurenyc.crainsnewyork.com/wp-content/uploads/2008/12/roundedcornr_top.gif" />
         
         	 <div class="sessions">
      
         	    <h2 class="hl style1">Latest Posts</h2>
      	         <?php
				
			    	$layout = get_option('woo_layout');

				   include('layouts/'.$layout);
				
			     ?>
              

           <div class="fix" style="height:10px"></div>
                 
         
           </div><!--/sessions-->
     
     <img src="http://futurenyc.crainsnewyork.com/wp-content/uploads/2008/12/roundedcornr_bottom.gif" />
     
        </div><!--/col1a-->
        
        <div class="col1b">
                               
      
                      <img src="http://futurenyc.crainsnewyork.com/wp-content/uploads/2008/12/roundedcornr_top_networked.gif" />
           <div class="uservoice">
          	<h2 align="center" class="hl style1">Share Your Ideas</h2>
               <div class="uservoice2">
                 <div align="justify">Have an idea on how to strengthen New York City's small businesses? Click <a href="http://futurenyc.uservoice.com/pages/19338-ideas-for-nyc-small-businesses">here</a> to share your ideas on how to cut costs, continue to grow and support your business</div>
                 
            </div><!--/uservoice2--> 

          </div><!--/uservoice-->
          <img src="http://futurenyc.crainsnewyork.com/wp-content/uploads/2008/12/roundedcornr_bottom_networked.gif" />                                       
                                                                            
       	  <div class="widget_speakers">
   			   <h2 align="center" class="hl style1">Speakers &amp; Panelists</h2>
                <ul>
                  <p>&nbsp;</p>
                  <div align="center">[kml_flashembed movie="http://futurenyc.crainsnewyork.com/wp-content/uploads/2009/06/speakers_scroll-sb.swf" height="430" width="215" /]</div></p>
                </ul>    
          </div><!--/widget_speakers-->
                 
                    

          
        </div><!--/col1b-->
                  
        
            <?php
				$showplace = get_option('woo_show_video_feat');
				if ( !$showplace ) { include(TEMPLATEPATH . '/includes/video.php'); }
			?>

        
        	</div><!--/col1-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>