<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:url"                content="<?php the_permalink() ?>" />
  <meta property="og:site_name"                content="<?php get_bloginfo('name'); ?>" />
  <meta property="og:type"               content="website" />
  <meta property="og:title"              content="<?php the_title() ?>" />
  <meta property="og:description"        content="<?php //the_content() ?>" />
  <meta property="og:image"              content="<?php echo getFeaturedUrl(); ?>" />
  <meta name="pingdom-string" value="<?php echo get_field('pingdom_string','option'); ?>">
  <meta name="google-site-verification" content="<?php echo get_field('google_webmaster','option'); ?>" />
  <link rel="shortcut icon" href="<?php echo get_field('favicon','option'); ?>" />
  <style>
    body { opacity: 0; }
  </style>
  <?php wp_head(); ?>
  <?php echo get_field('bugherd','option'); ?>
  <?php echo get_field('google_analytics','option'); ?>
<script src="http://maps.google.com/maps/api/js?sensor=true&amp;libraries=places&amp;key=AIzaSyAVP5QwWp9NU2acObo2PUxLaUzAp4dEoBU" defer type="text/javascript"></script>
</head>

