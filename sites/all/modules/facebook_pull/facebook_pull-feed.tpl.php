<div id="tab_container2">
	<?php $fb_i = 0; ?>
	<?php foreach ($items as $item): ?>
	<?php $fb_i ++; ?>
	<?php if ($fb_i <= 6) :?>
	<?php if ($fb_i == 1) :?>
	<div id="fbtab1">
  <?php endif; ?>
	<?php if ($fb_i == 4) :?>
	<div id="fbtab2">
  <?php endif; ?>
		<span class="usbi-twitter-cont usbi-left">
			<span class="usbi-twitter-isi">
					<h4>ABOUT <?php print l(format_interval(time() - strtotime($item->created_time)), '#');?> <br />FROM <span class="usbi-orange"><?php print l($item->from->name, 'http://facebook.com/profile.php?id=' . $item->from->id); ?></span></h4>
					<p><?php echo @$item->message; ?>
			<?php if ($item->type === 'link'): ?>
        <?php echo @$item->description; ?>
        <?php echo l($item->name, $item->link); ?>
      <?php endif; ?>
					</p>
			</span>
		</span>
	<?php if ($fb_i == 3) :?>
	</div>
  <?php endif; ?>	
	<?php if ($fb_i == 6) :?>
	</div>
  <?php endif; ?>	
  <?php endif; ?>
	<?php endforeach; ?>                      
</div>