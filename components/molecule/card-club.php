<?php
	// debug($vars['button']);

		$vars['card_class'] = 'pull-right';
		$vars['img_class'] = 'pull-left';


?>
<article class="<?php echo $vars['class'] ?> molecule ">
<div class="col-md-6 col-xs-12 <?php echo $vars['img_class'] ?> text-center">
<?php if(true == is_numeric($vars['image'])){  echo wp_get_attachment_image( $vars['image'], 'full', "", array( "class" => "img-responsive" ) );  } else { ?>
		<img class="img-responsive img-circle" src="<?php echo $vars['image'] ?>" alt="">
		<?php } ?>
</div>
<div class="wrapper col-md-6 col-xs-12 <?php echo $vars['card_class'] ?>">
	<hgroup>
		<h1><?php echo $vars["title"]?></h1>
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
</div>

</article>
