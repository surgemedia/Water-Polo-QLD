<?php 
$vars['gallery_id'] = 'links'.rand();

switch ($vars['trigger_element']) { 
?>
<?php	case 'card': ?>
<?php //debug($vars['card']); ?>
<article id="<?php echo $vars['gallery_id']; ?>" class="<?php echo $vars['card']['class'].' '.$vars['card']['background_color'] ?>  molecule lightbox card">
<div class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
		<div class="wrapper">
			<hgroup>
				<h1><?php echo $vars['card']["title"]?></h1>
				<h6><?php echo $vars['card']["subtitle"]?></h6>
			</hgroup>
		<?php if(isset($vars['card']["image"]) && strlen($vars['card']["image"]) > 0) { ?>
			<img class="img-responsive" src="<?php echo $vars['card']["image"]?>" alt=""></img>
			<?php } ?>


			<?php if(isset($vars['card']["content"]) && strlen($vars['card']["content"]) > 0) { ?>
			<?php echo apply_filters('the_content',  $vars['card']["content"]); ?>
				<?php } ?>
				</di>
				<?php

				if(isset($vars["button"])){ 
				get_component([
										'template' => 'atom/button-list',
										'vars' => $vars['button']
										]);
				};
				?>

		<?php 
	$vars['gallery'] = get_field('gallery',$vars['gallery']);
 ?>
<div class="links hidden">
<?php 
	switch ($vars['gallery_trigger']) {
		case 1:
	$vars['gallery_col'] = 'col-md-12';
			break;
		case 2:
	$vars['gallery_col'] = 'col-md-6';
			break;
		case 3:
	$vars['gallery_col'] = 'col-md-4';
			break;
		case 4:
	$vars['gallery_col'] = 'col-md-3';
			break;
		default:
	$vars['gallery_col'] = 'col-md-3';
			break;
	}
 foreach ($vars['gallery'] as $value) { ?>
    <a class="<?php echo $vars['gallery_col'] ?>" href="<?php echo $value['image']; ?>" title="<?php echo $value['caption']; ?>">
        <img class="img-responsive" src="<?php echo $value['image']; ?>" alt="<?php echo $value['caption']; ?>">
    </a>
<?php } ?>
<script>
  jQuery(document).ready(function(){
	popGallery('<?php echo $vars['gallery_id']; ?>');
	 });
</script>
		</article>
<?php break; ?>
<?php	case 'gallery': ?>
<div id="<?php echo $vars['gallery_id']; ?>">
<?php 
	switch ($vars['gallery_trigger']) {
		case 1:
	$vars['gallery_col'] = 'col-md-12';
			break;
		case 2:
	$vars['gallery_col'] = 'col-md-6';
			break;
		case 3:
	$vars['gallery_col'] = 'col-md-4';
			break;
		case 4:
	$vars['gallery_col'] = 'col-md-3';
			break;
		default:
	$vars['gallery_col'] = 'col-md-3';
			break;
	}
 foreach ($vars['gallery'] as $value) { ?>
    <a class="<?php echo $vars['gallery_col'] ?>" href="<?php echo $value['image']; ?>" title="<?php echo $value['caption']; ?>">
        <img class="img-responsive" src="<?php echo $value['image']; ?>" alt="<?php echo $value['caption']; ?>">
    </a>
<?php } ?>
</div>
<script>
document.getElementById('<?php echo $vars['gallery_id']; ?>').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>
<?php break; ?>
<?php	case 'image': ?>
	<div class="img module"><img src="" alt=""></div>
<?php break; ?>

	<?php default:
 			get_component([
              'template' => 'atom/button-list',
              'vars' => [

										[
											"class" => 'btn blue text-uppercase margin-0-top',
											"text" => "View Gallery",
											"internal_link" => '#',
											'link_type' => 'internal',
											'disabled' => false
										]
										]
              ]);
		break;
}

 ?>
<?php 
/*=======================================
=            Photo Light Box            =
=======================================*/
?>
<?php //debug($vars) ?>

