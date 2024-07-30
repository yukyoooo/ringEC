<?php get_header(); ?>

<div class="form-main">
	<div class="form-wrapper">
		<div class="form-header">
			<h2 class="form-header__title">購入依頼</h2>
		</div>
		<div class="form-img">
			<img src="<?php echo($_GET["imgUrl"]) ?>" >
		</div>
		<div class="form-body ">
			<?php if($_SERVER["SERVER_NAME"] === 'takuhiko.local') : ?>
				<?php echo do_shortcode('[contact-form-7 id="35d89e3" title="購入依頼フォーム"]'); ?>
			<?php else : ?>
				<?php echo do_shortcode('[contact-form-7 id="d8d2ece" title="購入依頼"]'); ?>
			<?php endif ?>
		</div>
	</div>
</div>

<script type="text/javascript">
	let elementPrice = document.getElementById('product-price');
	elementPrice.readOnly = true;
	let elementCode = document.getElementById('product-code');
	elementCode.readOnly = true;
</script>