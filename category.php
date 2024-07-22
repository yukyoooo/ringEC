<?php
/**
 * Category Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header();
?>

	<section id="primary" class="site-content">
		<div id="content" role="main" class="products-wrapper">
			<div class="products-title">
				<p class="product-title-text">商品ラインナップ</p>
			</div>
		<?php
		if ( usces_is_cat_of_item( get_query_var( 'cat' ) ) ) :
			if ( have_posts() ) :
				?>

				<div class="cat-il type-grid">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<?php if ( usces_have_zaiko_anyone() ) : ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<a href="<?php the_permalink(); ?>">
							<div class="itemimg">
									<?php usces_the_itemImage( 0, 300, 300 ); ?>
									<?php do_action( 'usces_theme_favorite_icon' ); ?>
							</div>
							<div class="itemname">
								<p><?php usces_the_itemName(); ?></p>
							</div>
							<div class="itemprice">
								<p><?php usces_the_firstPriceCr(); ?></p>
<!--								--><?php //usces_guid_tax(); ?>
							</div>
						</a>
					</article>
					<?php else: ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="mask-soldout"><div class="soldout"><p>SOLD OUT</p></div></div>
						<div class="itemimg-soldout">
							<?php usces_the_itemImage( 0, 300, 300 ); ?>
							<?php do_action( 'usces_theme_favorite_icon' ); ?>
						</div>
						<div class="itemname-soldout">
							<p><?php usces_the_itemName(); ?></p>
						</div>
						<div class="itemprice-soldout">
							<p><?php usces_the_firstPriceCr(); ?></p>
							<!--								--><?php //usces_guid_tax(); ?>
						</div>
					</article>
					<?php endif; ?>
				<?php endwhile; ?>
				</div><!-- .cat-il -->

				<?php
			endif;
		endif;
		?>

			<div class="pagination_wrapper">
				<?php
				$args = array(
					'type'      => 'list',
					'prev_text' => __( ' &laquo; ', 'welcart_basic' ),
					'next_text' => __( ' &raquo; ', 'welcart_basic' ),
				);
				echo paginate_links( $args );
				?>
			</div><!-- .pagenation-wrapper -->

		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
