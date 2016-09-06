<?php
	//debug($vars);

		$vars['card_class'] = 'pull-right';
		$vars['img_class'] = 'pull-left';
		$vars['cart_url'] = get_permalink(woocommerce_get_page_id( 'cart' ));


?>
<article class=" <?php echo $vars['class'] ?> molecule card">
<div class="col-md-6 col-xs-6 <?php echo $vars['img_class'] ?> text-center">
<?php if(true == is_numeric($vars['image'])){  echo wp_get_attachment_image( $vars['image'], 'full', "", array( "class" => "img-responsive" ) );  } else { ?>
		<img class="img-responsive img-circle" src="<?php echo $vars['image'] ?>" alt="">
		<?php } ?>
</div>
<div class="wrapper col-md-6 col-xs-6  <?php echo $vars['card_class'] ?>">
	<hgroup>
		<h1><?php echo $vars["title"]?></h1>
	</hgroup>
	<?php echo apply_filters('the_content',  $vars["content"]); ?>
	<?php if($_GET['add-to-cart'] == get_the_id()){
			get_component([
										'template' => 'atom/button-list',
										'vars' => [ [
															'text' =>  "Added! View Cart",
															'link' => $vars['cart_url'],
															] ],
										]);
		} else {
			if(isset($vars["button"])){
					get_component([
										'template' => 'atom/button-list',
										'vars' => $vars['button']
										]);
				};
		}
		?>
</div>

</article>
