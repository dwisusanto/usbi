<?php $theme_path = drupal_get_path('theme', 'usbi'); ?>
<?php $img_path = $base_path.$theme_path.'/img/'; ?>
<?php $images_path = $base_path.$theme_path.'/images/'; ?>
<script language="javascript">
	jQuery(window).load(function(){
		jQuery('.flexslider').flexslider({
			animation: "slide",
			controlNav: "thumbnails",
			start: function(slider){
				jQuery('body').removeClass('loading');
			}
		});
	});
		
	jQuery(function() {  
		jQuery("#usbi-tabs").organicTabs();        
		jQuery("#usbi-socmed").organicTabs();			
		jQuery("#usbimapsite").organicTabs();
			jQuery("#usbi-quicktab").organicTabs({
					"speed": 200
			});    
	});
</script>

<div id="wrapper-all">
<!-- Header -->
<div class="usbi-header">
	<?php include "header.tpl.php"; ?>
    
    <div class="usbi-slider">
    	<?php include "top-nav.tpl.php"; ?>
    	<?php include "slider.tpl.php"; ?>
    </div>
</div>

<!-- Content Quick Tour -->
<div id="usbi-quicktab" class="usbi-cont-base">
	<div class="usbi-cont-satu">
        <div class="usbi-quicktour">
        	<span class="usbi-red">QUICK</span> <span class="usbi-grey">LINKS</span>
        </div>
        
        <ul class="nav usbinav usbi-left">
            <li class="usbinav-one"><a href="#tabquick1" class="current"><?php print t('Prospective Students'); ?></a> </li>
            <li class="usbinav-two"><a href="#tabquick2"><?php print t('Current Students'); ?></a></li>
            <li class="usbinav-three"><a href="#tabquick3"><?php print t('Parents'); ?></a></li>
            <li class="usbinav-four"><a href="#tabquick4"><?php print t('Professionals'); ?></a></li>
            <li class="usbinav-five last"><a href="#tabquick5"><?php print t('Visitors'); ?></a></li>
        </ul>
        <div class="list-wrap usbi-cont-bagall">
        <div id="tabquick1">
<?php $block = module_invoke('block', 'block_view', 15); ?>
<?php print render($block['content']); ?>
            <div class="usbi-clear"></div> 
				</div> 
				<div id="tabquick2" class="usbi-hide">
<?php $block = module_invoke('block', 'block_view', 16); ?>
<?php print render($block['content']); ?>
				<div class="usbi-clear"></div> 
				</div>
				
				<div id="tabquick3" class="usbi-hide">
<?php $block = module_invoke('block', 'block_view', 17); ?>
<?php print render($block['content']); ?>
				<div class="usbi-clear"></div> 
				</div>
				 
				<div id="tabquick4" class="usbi-hide">
<?php $block = module_invoke('block', 'block_view', 19); ?>
<?php print render($block['content']); ?>              
				</div>
				<div id="tabquick5" class="usbi-hide">
<?php $block = module_invoke('block', 'block_view', 18); ?>
<?php print render($block['content']); ?>      
				</div>
             
        </div>
    	<div class="usbi-clear"></div>        
    </div>
</div>

<!-- Content Tab Nes -->
<div id="usbi-tabs" class="usbi-cont-tabs usbi-wrapper">
    <ul class="nav">
      <li><a href="#tabs-1" class="current">News</a></li>
      <!--<li><a href="#tabs-2">Videos</a></li>-->
    </ul>
    
    <div class="list-wrap usbi-tabs-content"> 
    	<div id="tabs-1">  
       		<div class="usbi-tabs-contleft usbi-left">
                <h2 class="usbi-red">Campus NEWS</h2>
<?php 
$view2 = views_get_view('campus_news');
$view2->set_display('default');
$view2->pre_execute();
$view2->execute('default');
//print_r($view->result);
foreach ($view2->result as $data) { 
$by = user_load($data->node_uid);
?>
                <div class="usbi-tabs-isi">
                    <h4><a href="<?php print url('node/' . $data->nid); ?>"><?php print $data->node_title; ?></a> </h4>
                    <div> <?php print date('d/m/y', $data->node_created); ?></div>
                    <p><?php print drupal_render($data->field_body[0]['rendered']); ?><a href="<?php print url('node/'.$data->nid);?>">Read More <span class="usbi-orange">&raquo;</span></a></p>
                </div>
<?php } ?>
            </div>
            <div class="usbi-tabs-contright usbi-right">
							<h2 class="usbi-red">USBI Video</h2>
<?php
$view2 = views_get_view('home_video');
$view2->set_display('default');
$view2->pre_execute();
$view2->execute('default');
//print_r($view->result);
foreach ($view2->result as $data) { 
$by = user_load($data->node_uid);
?>							
							<div class="usbi-tabs-isi">
									<?php print drupal_render($data->field_field_op_video_embed[0]['rendered']); ?>
									<h4><a href="<?php print url('node/' . $data->nid); ?>"><?php print $data->node_title; ?></a> </h4>
									<div>By: <?php print $by->name; ?> <?php print date('d/m/y', $data->node_created); ?></div>
									<p><?php print drupal_render($data->field_body[0]['rendered']); ?><a href="<?php print url('node/'.$data->nid);?>">Read More <span class="usbi-orange">&raquo;</span></a></p>
									<div class="usbi-clear"></div>
							</div>
<?php } ?>
            </div>
            <div class="usbi-clear"></div>	
        </div>
      
		<div id="tabs-2" class="usbi-hide">
			<h2>Current Videos</h2>
			<p>asadadada duaaaaaaaaaa</p>
    </div>  
	</div>             
</div>

<!-- Content Socmed -->
<script type="text/javascript">
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
								<?php if (function_exists('twitter_pull_render')) { print twitter_pull_render('@USBI_Indonesia', 'Usbi Indonesia', 20); } ?>                          
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