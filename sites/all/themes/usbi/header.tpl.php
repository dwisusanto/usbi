<div class="usbi-top-header">
  <div class="usbi-wrapper">
    <div class="usbi-toplogo usbi-left">
      <a href="<?php print url(""); ?>"><img src="<?php print $img_path; ?>img_usbi_logo.png" alt="usbi"></a>
    </div>


    

        <?php if ($site_slogan): ?>
          <div id="site-slogan">
            <?php print $site_slogan; ?>
          </div>
        <?php endif; ?>

    <?php if ($page['lang']): ?>
          <div id="language-top">
			  <?php print render($page['lang']); ?>
          </div>
        <?php endif; ?>
        
    <div class="user-link">
    	<a href="<?php print url("user/register"); ?>">Register</a> |
        <a href="<?php print url("user/login"); ?>">Login</a>
    </div>
    
    	
      
    <div class="usbi-search">
      <ul class="usbi-searchbox usbi-left">  
              <!--<li><input name="" type="radio" value="" /></li>
              <li>ENTIRE SITE</li>
              <li><input name="" type="radio" value="" checked="checked" /></li>
              <li>DIRECTORY</li> -->           
        <li class="usbi-frmsearch">
					<?php
					$block = module_invoke('search', 'block_view', 'form'); 
					print render($block['content']);
					?>
        </li>
      </ul>
        
      <ul class="usbi-social usbi-right">
        <li><a href="<?php print url('rss.xml'); ?>"><img src="<?php print $img_path; ?>img_rss.jpg" width="30" alt="rss feed"></a></li>
        <li><a href="https://www.facebook.com/usbi.indonesia"><img src="<?php print $img_path; ?>img_fb.jpg" width="30" alt="facebook"></a></li>
        <li><a href="https://twitter.com/usbi_indonesia"><img src="<?php print $img_path; ?>img_twt.jpg" width="30" alt="twitter"></a></li>
				<!--<li>
					<?php
						$block = module_invoke('locale', 'block_view', 'language'); 
						print render($block['content']);
					?>
				</li>-->
      </ul> 
    </div>
      <div class="usbi-clear"></div>          
  </div>
</div>   