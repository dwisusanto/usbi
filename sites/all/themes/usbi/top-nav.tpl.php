<div class="usbi-topnav">
  <div class="usbi-wrapper">
    <div id="usbi-main-menu">
      <?php //print_r(menu_tree_all_data('menu-usbi-menu')); ?>
          <ul class="usbi-main-nav clearfix">
            <li class="current-menu-item">
              <a href="<?php print url(); ?>"><img src="<?php print $img_path; ?>img-home.png" alt="home" />HOME</a>
            </li>                        
      <?php $menus = menu_tree_all_data('menu-usbi-menu'); 
        foreach ($menus as $menu) {
      //print_r($menu);
      ?>
            <li>
					<?php if($menu['link']['href'] == "<nolink>") : ?>
              <span><?php print $menu['link']['link_title']; ?></span>
					<?php else: ?>
              <a href="<?php print url($menu['link']['href']); ?>"><?php print t($menu['link']['link_title']); ?></a>
					<?php endif ?>
					<?php if ($menu['below']) : ?>
              <ul class="xsatu">						
          <?php foreach ($menu['below'] as $child) { ?>
                <li><a href="<?php print url($child['link']['href']); ?>"><?php print t($child['link']['link_title']); ?></a></li>
          <?php } ?>
              </ul>
					<?php endif ?>
            </li>
      <?php
        }
      ?>
          </ul>
    </div> 
  </div>
</div>