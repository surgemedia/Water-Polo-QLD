<?php 
 //debug($vars);
if (is_array($vars)) {
$button_size= sizeof($vars);
if (1<$button_size) : ?>
<div class="button-list">
<?php endif; ?>
	<?php foreach ($vars as $key=>$button) {?>
		<?php if(!isset($button['extra-data'])){ $button['extra-data'] = ""; }; ?>
		<a class="btn text-uppercase <?php echo $button['class']?>" href="<?php echo $button['link']?>" <?php echo $button['extra-data'] ?>> <?php echo $button['text']; ?> </a>
	<?php } ?>
<?php if (1<$button_size) : ?>
</div>
<?php endif; ?>
<?php } ?>