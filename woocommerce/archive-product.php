<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header('shop'); ?>
<?php
	$ShopPageId = get_option( 'woocommerce_shop_page_id' );
	$heading_gap = "heading-gap";
	if(get_field('heading-gap',$ShopPageId) === false){
		$heading_gap = "heading-gap-top";
	}
	get_component([ 'template' => 'organism/page-heading',
											'remove_tags'=> get_field('remove_elements'),
											'vars' => [
														"class" => '',
														"title" => get_field('title',$ShopPageId),
														"subtitle" => get_field('subtitle',$ShopPageId),
														"content" => get_field('content',$ShopPageId),
														"background" => get_field('background',$ShopPageId),
														"image" => get_field('image',$ShopPageId),
														"button" => get_field('button',$ShopPageId),
														"heading-gap" => $heading_gap
														]
											 ]);
 ?>
<div id="content">
<div id="inner-content" class="wrap clearfix">
<div id="main" class=" clearfix" role="main">
	<?php //pagination_nav(); ?>
	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action('woocommerce_before_main_content');
		// do_action( 'woocommerce_pagination' );
		wc_get_template( 'loop/pagination.php' );
	?>

		<?php do_action( 'woocommerce_archive_description' ); ?>

		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * woocommerce_before_shop_loop hook
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				//do_action( 'woocommerce_before_shop_loop' );
			?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php woocommerce_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php woocommerce_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action('woocommerce_after_main_content');
	?>
</div>
	<!-- <div id="sidebar1" class="sidebar fourcol first clearfix sidebar-layout"> -->
	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action('woocommerce_sidebar');
	?>
	<!-- </div> -->
</div>
</div>
<?php 

	$vars['front_page'] = get_option('page_on_front');
	$vars['builder'] = get_field('layout',$vars['front_page']);
	foreach ($vars['builder'] as $key => $layout) {

		if($layout['acf_fc_layout'] == 'contact'){					
			//Section Options
			$layout["section"] = $layout['acf_fc_layout'];
			$layout['section_data'] = get_section_options($layout);

			//Call file for display
			echo '<section '.$layout['section_data'].'>';
					get_component([
								'template' => 'organism/contact',
								'vars' => $layout
					]);
						
			echo '</section>';
			
		}
	} 

?>
<?php get_footer('shop'); ?>
