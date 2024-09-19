<?php
	$tag_slug = single_tag_title("", false);//現在のタグアーカイブページのタイトルを取得
	$news_category_id = 6;
	$args = array(
		'category__and' => array($news_category_id),
	);
	query_posts($args);
?>
<?php get_header(); ?>
<div class="conetnts">
	<div class="about-wrapper">
		<div class="contents-header">
			<h2 class="contents-header__title">About</h2>
			<img src="<?php bloginfo('template_url') ?>/assets/images/original/00_footer_art_board.png">
		</div>
		<div class="about-body">
			<p>『私たちはシグネットリングを通じて</p>
			<p>	揺るぎのない魅力を引き立てるお手伝いをしています。』</p>
<br/>
			<p>シグネットリングの歴史は古くから続いています。</p>
			<p>流行に流されない本物の男にふさわしい、永遠に色あせない品格と存在感</p>
			<p>力強さと洗練さを併せ持つデザインで</p>
			<p>一点物のシグネットリングを提供させていただきます。</p>
		</div>
		<div class="about-img">
			<img src="<?php bloginfo('template_url') ?>/assets/images/about.png">
		</div>
	</div>
</div>
