<?php
 if($vars['image_position'] == 'Right Side'){ 
	$vars['card_class'] = 'pull-left';
	$vars['img_class'] = 'pull-right';
	} else {
		$vars['card_class'] = 'pull-right';
		$vars['img_class'] = 'pull-left';
	}
	
?>
<div class="molecule image text-center <?php echo $vars['class'] ?> <?php echo $vars['img_class'] ?>"> 
<?php if(true == is_numeric($vars['image'])){  echo wp_get_attachment_image( $vars['image'], 'full', "", array( "class" => "img-responsive" ) );  } else { ?>
		<img class="img-responsive" src="<?php echo $vars['image'] ?>" alt="Image Molecule">
		<?php } ?>
</div> 