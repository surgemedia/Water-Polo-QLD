 
<?php //debug($vars) ?>
<div class="<?php echo $vars['class'] ?> <?php echo $vars['list_style']; ?> list molecule"> 
<h6><?php if($vars['subtitle']){ echo $vars['subtitle']; } ?></h6> 
<?php if($vars['title']){ ?>
<h1> <?php echo $vars['title'];  ?></h1> 
<?php } ?>
<?php if(isset($vars["content"]) && strlen($vars["content"]) > 0) { ?>
	<?php echo apply_filters('the_content',  $vars["content"]); ?>
		<?php } ?>
<ul> 
  <?php for ($vars['i']=0; $vars['i'] < sizeof($vars['list']); $vars['i']++) { ?> 
    <li><?php echo $vars['list'][$vars['i']]['content'] ?></li> 
  <?php } ?> 
</ul> 
</div> 