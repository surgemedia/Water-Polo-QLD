<?php //debug('List: Element coming soon.'); ?> 
 
<?php //debug($vars) ?>
<div class="<?php echo $vars['class'] ?> list molecule"> 
<h6><?php if($vars['subtitle']){ echo $vars['subtitle']; } ?></h6> 
<h1><?php if($vars['title']){ echo $vars['title']; } ?></h1> 
<?php if(isset($vars["content"]) && strlen($vars["content"]) > 0) { ?>
	<?php echo apply_filters('the_content',  $vars["content"]); ?>
		<?php } ?>
<ul> 
  <?php for ($vars['i']=0; $vars['i'] < sizeof($vars['list']); $vars['i']++) { ?> 
    <li><?php echo $vars['list'][$vars['i']]['content'] ?></li> 
  <?php } ?> 
</ul> 
</div> 