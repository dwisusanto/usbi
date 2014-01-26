<?php
$view = views_get_view('slideshow');
$view->set_display('default');
$view->pre_execute();
$view->execute('default');
//print_r($view->result);

?>
<div class="usbi-wrapper">
<div class="flexslider">
	<ul class="slides">
<?php foreach ($view->result as $data) { 
$url = file_create_url($data->field_field_image[0]['raw']['uri']);
?>
		<li data-thumb="<?php print $url; ?>">  
			<a href="<?php print ($data->field_field_link ? url($data->field_field_link[0]['raw']['value']) : "#"); ?>"><span>
				<h6><?php print $data->node_title; ?></h6>
			</span>
<?php if ($data->field_field_image) { ?>
			<img src="<?php print $url; ?>" />
<?php	} else { ?>       
			<img src="images/sample_slider1.jpg" />
<?php } ?></a>
		</li>
<?php } ?>
	</ul>
</div>
</div>