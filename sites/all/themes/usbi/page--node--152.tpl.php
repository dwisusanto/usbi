<?php $theme_path = drupal_get_path('theme', 'usbi'); ?>
<?php $img_path = $base_path.$theme_path.'/img/'; ?>
<?php $images_path = $base_path.$theme_path.'/images/'; ?>
<?php drupal_set_title("International Pathways"); ?>
<style>
.answear {display: none}
</style>
<!-- Header -->

<div id="wrapper-all">

<div class="usbi-header"> 
  <?php include 'header.tpl.php'; ?>
  <div class="usbi-slider">
    <?php include 'top-nav.tpl.php'; ?>
    <div class="usbi-wrapper">
      <div class="usbi-toppathway">            
        <div class="pathwaydivhead">
          <h1>Mobility</h1>
          <a href="<?php print url("pathway"); ?>"><span>International Pathways</span></a>
          
        </div>
      </div>          
    </div>
  </div>
</div>
<div class="usbi-wrapper">
	<div id="usbi-path">    	
        <ul class="nav usbi-pathway ">
            <li style="display:none;"><a href="#path-0" class="current"><span>path nol</span></a></li>
            <li class="patwaysatu"><a href="#path-1"><span>Earn 3 degrees in 4 years</span></a></li>                
            <li class="patwaydua"><a href="#path-2"><span>Choose from hundredS</span>of top US Universities and Programs</a></li>
            <li class="patwaytiga"><a href="#path-3"><span>Earn a US-accredited Associate Degree</span>Right here in Jakarta</a></li>
            <li class="patwayempat"><a href="#path-4"><span>Save thousands of dollars </span>on a US Bachelor's degree </a></li>                            
            <li class="patwaylima"><a href="#path-5"><span>FAQ</span></a></li> 
        </ul>
        
        <div class="list-wrap usbi-path-content"> 
      <div id="path-0"> <?php $node_mom = node_load(139); print $node_mom->body[$node_mom->language][0]['safe_value']; ?> </div>
    	<div id="path-1" class="usbi-hide">  
        <?php $node_mom = node_load(146); print $node_mom->body[$node_mom->language][0]['safe_value']; ?> 
      </div>
      
				<div id="path-2" class="usbi-hide">
					<?php $node_mom = node_load(147); print $node_mom->body[$node_mom->language][0]['safe_value']; ?> 
        </div>
        
        <div id="path-3" class="usbi-hide">
          <?php $node_mom = node_load(149); print $node_mom->body[$node_mom->language][0]['safe_value']; ?> 
        </div> 
        <div id="path-4" class="usbi-hide">
          <?php $node_mom = node_load(148); print $node_mom->body[$node_mom->language][0]['safe_value']; ?> 
        </div>
        <div id="path-5" class="usbi-hide">
          <?php $node_mom = node_load(151); print check_markup($node_mom->body[$node_mom->language][0]['value'], 'php_code', $node_mom->language); ?> 
        </div>          
                   
		</div>    
	</div>
</div>

<!-- Content Socmed -->
<script type="text/javascript">
jQuery(function() {
	jQuery(".question").click(function() {
		var nextheight = jQuery(this).next(".answear").height();
		var newheight = jQuery("#path-5").height()+nextheight;
			jQuery("#path-5").height(newheight);
			jQuery(".usbi-path-content").height(newheight);
    jQuery(this).next(".answear").show();
	});
		jQuery("#usbi-tabs").organicTabs();        
		jQuery("#usbi-socmed").organicTabs();			
		jQuery("#usbimapsite").organicTabs();
			jQuery("#usbi-quicktab").organicTabs({
					"speed": 200
			});    
	});
jQuery("#usbi-path").organicTabs();

var openTab = function(tab,tabid,tabspaging) {
	jQuery(tab+' div').removeClass("active-socmed");
	jQuery(tabid).addClass("active-socmed");
	
	var partab = tabspaging.parent().children('li').each(function(){jQuery(this).removeClass('active');});		
};

jQuery(document).ready(function() {
	var href = jQuery("ul.socmedtabs li:first-child").children('a').attr("href");
	tabspaging = jQuery("ul.socmedtabs li:first-child");
	openTab('#tab_container',href,tabspaging);
	
	jQuery('ul.socmedtabs li').click(function(){
		tabspaging = jQuery(this);
		var href = jQuery(this).children('a').attr('href');
		openTab('#tab_container',href,tabspaging);
		return false;
	});	
	
	var href = jQuery("ul.socmedtabs2 li:first-child").children('a').attr("href");
	tabspaging = jQuery("ul.socmedtabs2 li:first-child");
	openTab('#tab_container2',href,tabspaging);
	
	jQuery('ul.socmedtabs2 li').click(function(){
		tabspaging = jQuery(this);
		var href = jQuery(this).children('a').attr('href');
		openTab('#tab_container2',href,tabspaging);
		return false;
	});	
});
</script>
<div id="usbi-socmed" class="usbi-sokmedcon usbi-wrapper">
	<div class="usbi-connect usbi-left">
    	<h2>CONNECT <span>with</span> USBI <span>via :</span></h2>
    </div>
    <div class="usbi-fbtweet usbi-left">
   	  	<ul class="nav">
        	<li><a href="#socmed-1" class="current"><img src="<?php print $img_path; ?>img_sosmed_tw.png" width="25" alt="fb" />TWITTER</a></li>
            <li><a href="#socmed-2"><img src="<?php print $img_path; ?>img_sosmed_fb.png" width="25" alt="fb" />FACEBOOK</a></li>
        </ul>
    </div>
    
    <div class="usbi-fbtweet-content usbi-left">
    	<div class="list-wrap">
        	<div id="socmed-1" class="usbi-contweet">
                <div class="usbi-twitter-err">
                    <ul class="socmedtabs">
                        <li><a href="#tab1"><img src="<?php print $img_path; ?>erow_left.png" alt="erow" /></a></li>
                        <li><a href="#tab2"><img src="<?php print $img_path; ?>erow_right.png" alt="erow" /></a></li>
                    </ul>
                </div>
								<?php  if (function_exists('twitter_pull_render')) { print twitter_pull_render('@usbi_indonesia', 'Usbi Indonesia', 10); } ?>                          
            </div>
            
            <div id="socmed-2" class="usbi-contweet usbi-hide">
            	<div  class="usbi-twitter-err">
                    <ul class="socmedtabs2">
                        <li><a href="#fbtab1"><img src="<?php print $img_path; ?>erow_left.png" alt="erow" /></a></li>
                        <li><a href="#fbtab2"><img src="<?php print $img_path; ?>erow_right.png" alt="erow" /></a></li>
                    </ul>
        		</div>
<?php
  $app_id = variable_get('facebook_pull_app_id', '');
  $app_secret = variable_get('facebook_pull_app_secret', '');
  $graph_id = variable_get('facebook_pull_graph_id', '');
  $type = variable_get('facebook_pull_object_type', '');
  $limit = variable_get('facebook_pull_limit', '');

  echo facebook_pull_render($graph_id, $type, $app_id, $app_secret, $options = array('limit' => $limit));
?>
            </div>
        </div>        
    </div>  
		<div class="usbi-clear"></div> 
</div>

<?php include "footer.tpl.php"; ?>

</div><!--End Wrapper All-->

<?php drupal_add_js('jQuery(document).ready(function () { 
		jQuery("#usbimapsite").organicTabs();
	});',
    array('type' => 'inline', 'scope' => 'footer')
  );
?>