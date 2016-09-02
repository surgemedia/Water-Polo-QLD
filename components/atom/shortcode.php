<?php 	debug($vars); ?>
<?php if (strlen($vars['shortcode']) > 0) : ?>
	<?php echo do_shortcode($vars['shortcode']); ?>
<?php endif ?>