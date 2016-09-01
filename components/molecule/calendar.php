<article class="<?php echo $vars['class'] ?>  molecule calendar">
<?php $vars['target'] = 'calendar'.rand(); ?>
<?php //Required Fullcalendar; http://bootsnipp.com/snippets/xa95R  ?>
<div id="<?php echo $vars['target']; ?>"></div>
<script type="text/javascript">
  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();
	var events_<?php echo $vars['target']; ?> = [
	<?php 
			foreach ($vars['calendar'] as $key => $value) { ?>
			{
				id: <?php echo $key ?>,
        title: '<?php echo get_the_title($vars['calendar'][$key]); ?>',
        start:  new Date(y, m, 1),
        end:  new Date(y, m, 1),
        url: '<?php echo get_permalink($vars['calendar'][$key]); ?>'
      },
		<?php	} ?>

	];
		jQuery( document ).ready(function() {
	renderCalendar('#<?php echo $vars['target']; ?>',events_<?php echo $vars['target']; ?>);
});
</script>
</article>