<?php

/**
 * @file
 * Theme template for a list of tweets.
 *
 * Available variables in the theme include:
 *
 * 1) An array of $tweets, where each tweet object has:
 *   $tweet->id
 *   $tweet->username
 *   $tweet->userphoto
 *   $tweet->text
 *   $tweet->timestamp
 *   $tweet->time_ago
 *
 * 2) $twitkey string containing initial keyword.
 *
 * 3) $title
 *
 */
?>
<?php if ($lazy_load): ?>
  <?php print $lazy_load; ?>
<?php else: ?>
<div id="tab_container">
	<?php $tweet_i = 0; ?>
	<?php foreach ($tweets as $tweet_key => $tweet): ?>
	<?php if ($tweet) { ?>
	<?php $tweet_i ++; ?>
	<?php if ($tweet_i <= 6) { ?>
	<?php if ($tweet_i == 1) { ?>
	<div id="tab1">
  <?php } ?>
	<?php if ($tweet_i == 4) { ?>
	<div id="tab2">
  <?php } ?>
		<span class="usbi-twitter-cont usbi-left">
			<span class="usbi-twitter-isi">
					<h4>ABOUT <?php print l($tweet->time_ago, 'http://twitter.com/' . $tweet->username . '/status/' . $tweet->id);?> <br />FROM <span class="usbi-orange"><?php print l($tweet->username, 'http://twitter.com/' . $tweet->username); ?></span></h4>
					<p><?php print twitter_pull_add_links($tweet->text); ?></p>
			</span>
		</span>
	<?php if ($tweet_i == 3)  { ?>
	</div>
  <?php } ?>	
	<?php if ($tweet_i == 6) { ?>
	</div>
  <?php break; ?>	
  <?php } ?>	
  <?php } } ?>
	<?php endforeach; ?>                      
</div>                              
<?php endif; ?>
<div class="usbi-clear"></div> 