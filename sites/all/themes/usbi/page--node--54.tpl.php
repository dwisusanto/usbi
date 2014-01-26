<?php $theme_path = drupal_get_path('theme', 'usbi'); ?>
<?php $img_path = $base_path.$theme_path.'/img/'; ?>
<?php $images_path = $base_path.$theme_path.'/images/'; ?>

<div id="wrapper-all">
<!-- Header -->

<div class="usbi-header">
	<?php include "header.tpl.php"; ?>
    
	<div class="usbi-slider">
		<?php include "top-nav.tpl.php"; ?>
	</div>
</div>
<div id="wrapper">
  <div class="usbi-abouthead">
		<?php if ($page['header']): ?>
		  <?php print render($page['header']); ?>
		<?php else: ?>
			<img src="<?php print $images_path; ?>about_jpg.jpg" width="960" height="342" alt="img" />                
		<?php endif; ?>
  </div>
  <?php print $breadcrumb; ?>
  <div id="container" class="clearfix">
    <div id="center">
      <div id="squeeze">
        <div class="right-corner">
          <div class="left-corner" <?php if ($page['sidebar_first']): ?>style="width: 605px; float: left;" <?php endif; ?>>
            <a id="main-content"></a>
            <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
              <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
            <?php print render($tabs2); ?>
            <?php print $messages; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
            <div class="clearfix">
              <?php print render($page['content']); ?>
            <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
            </div>
          </div>
          <?php if ($page['sidebar_first']): ?>
		        <div id="sidebar-second" class="sidebar" style="float: right;">
		          <?php print render($page['sidebar_first']); ?>
		        </div>
		      <?php endif; ?>
        </div>
        <div class="usbi-clear"></div>
         
        <?php print render($page['footer']); ?>
				
        <div class="usbi-conshare">
					<div class="tw_share">
						<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
					<div class="fb_share">
						<a name="fb_share" type="button_count" share_url="<?php print request_uri(); ?>" href="http://www.facebook.com/sharer.php">Share</a>
				    <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
					</div>
        </div>
       
        <div class="usbi-clear"></div>   
      </div>
    </div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->
  </div> <!-- /#container -->
</div> <!-- /#wrapper -->
<?php include "footer.tpl.php"; ?>

</div><!--End Wrapper All-->

<?php drupal_add_js('jQuery(document).ready(function () { 
		jQuery("#usbimapsite").organicTabs();
	});',
    array('type' => 'inline', 'scope' => 'footer')
  );
  drupal_add_js('jQuery(document).ready(function () { jQuery(".answear").hide(); 
jQuery(".question").click(function() {jQuery(this).next(".answear").show()});
});',array('type' => 'inline', 'scope' => 'footer') ); ?>
?>