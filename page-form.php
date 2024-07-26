<?php get_header(); ?>

<?php
	$_SESSION["your_name"] = "なまえ";
	$_SESSION["email"] = "test@gmail.com";
	$_SESSION["tel"] = "09012345678";
?>

<div class="single">
	<div class="single-wrapper">
		<div class="single-header">
			<h2 class="single-header__title"><?php the_title(); ?></h2>
		</div>
		<div class="single-body">
			<?php echo do_shortcode('[contact-form-7 id="35d89e3" title="購入依頼フォーム"]'); ?>
		</div>
	</div>
</div>

<script>
	const cf7 = document.querySelector('.wpcf7-form')
	const render = (html) => cf7.innerHTML = html

	const renderCf7Component = () => {
		const component = `<?php require('cf7-component.php') ?>`
		render(component)
	}
	renderCf7Component()
</script>