<?php
/**
 * Cart Pge Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header();
?>

	<div id="primary" class="site-content">
		<div id="content" class="cart-page" role="main">

		<?php
		if ( have_posts() ) :
			usces_remove_filter();
			?>

			<article class="post" id="wc_<?php usces_page_name(); ?>">

				<h1 class="cart_page_title"><?php esc_html_e( 'Cart' ); ?></h1>

				<div class="header_explanation">
					<?php do_action( 'usces_action_cart_page_header' ); ?>
				</div><!-- .header_explanation -->

				<div class="error_message"><?php usces_error_message(); ?></div>

				<form action="<?php usces_url( 'cart' ); ?>" method="post" onKeyDown="if(event.keyCode == 13){return false;}">
				<?php if ( usces_is_cart() ) : ?>
					<div id="cart">
						<table cellspacing="0" id="cart_table">
							<tbody>
								<?php usces_get_cart_rows(); ?>
							</tbody>
						</table>


					</div><!-- #cart -->
				<?php else : ?>
					<div class="no_cart"><?php esc_html_e( 'There are no items in your cart.', 'usces' ); ?></div>
				<?php endif; ?>
					<?php echo apply_filters( 'usces_theme_filter_upbutton', '<div class="upbutton"><p>' . __( 'Press the `update` button when you change the amount of items.', 'usces' ) . '<input name="upButton" type="submit" value="' . __( 'Quantity renewal', 'usces' ) . '" onclick="return uscesCart.upCart()" /></p></div>' ); ?>

					<div class="send"><?php usces_get_cart_button(); ?></div>
					<?php do_action( 'usces_action_cart_page_inform' ); ?>
				</form>

				<div class="footer_explanation">
					<?php do_action( 'usces_action_cart_page_footer' ); ?>
				</div><!-- .footer_explanation -->

			</article><!-- .post -->

		<?php else : ?>

			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'usces' ); ?></p>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
