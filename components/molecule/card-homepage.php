<?php
	//debug($vars);

	
?>
<div class="col-md-8 text-center">
<?php if(true == is_numeric($vars['image'])){  echo wp_get_attachment_image( $vars['image'], 'full', "", array( "class" => "img-responsive" ) );  } else { ?>
		<img class="img-responsive" src="<?php echo $vars['image'] ?>" alt="">
		<?php } ?>
</div>
<article class="<?php echo $vars['class'] ?> molecule card-img-side">
	<hgroup>
		<h1><?php echo $vars["title"]?></h1>
		<h6><?php echo $vars["subtitle"]?></h6>
	</hgroup>
	<?php echo apply_filters('the_content',  $vars["content"]); ?>
			<?php 
		if(isset($vars["button"])){
			get_component([
								'template' => 'atom/button-list',
								'vars' => $vars['button']	
								]);
		};
		?>

</article>
