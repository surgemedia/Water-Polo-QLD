<?php 


switch ($vars['trigger_element']) {
	//trigger
	case 'card': ?>
		<article class="<?php echo $vars['class'].' '.$vars['background_color'] ?>  molecule card">
		<div class="wrapper">
		<?php if(isset($vars["image"]) && strlen($vars["image"]) > 0) { ?>
			<img class="img-responsive" src="<?php echo $vars["image"]?>" alt=""></img>
			<?php } ?>

			<hgroup>
				<h1><?php echo $vars["title"]?></h1>
				<h6><?php echo $vars["subtitle"]?></h6>
			</hgroup>

			<?php if(isset($vars["content"]) && strlen($vars["content"]) > 0) { ?>
			<?php echo apply_filters('the_content',  $vars["content"]); ?>
				<?php } ?>

				<?php 
				if(isset($vars["button"])){
				get_component([
										'template' => 'atom/button-list',
										'vars' => $vars['button']	
										]);
				};
				?>

		</article>
<?php
		break;
		//trigger
		case 'image': ?>


<?php
			break; 
	default:
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
   <div class="blueimp-gallery blueimp-gallery-controls">
                <div class="slides"></div>
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="close">×</a>
                <a class="play-pause"></a>
            <ol class="indicator"></ol>
      <div class="links hidden">
        <?php debug($vars['repeater'][$i]['gallery']) ?>
        <?php for ($j=0; $j < sizeof($vars['repeater'][$i]['gallery']); $j++) { 
            debug($vars['repeater'][$i]['gallery'][$j]); ?>
            <a href="<?php echo $vars['repeater'][$i]['gallery'][$j]['url'] ?>" title="" data-gallery="<?php echo $vars['repeater'][$i]['gallery'][$j]['url'] ?>">
                <img src="">
            </a>
            <?php } ?>
       </div>