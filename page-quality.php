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
			<h2 class="contents-header__title">Quality</h2>
			<img src="<?php bloginfo('template_url') ?>/assets/images/original/00_footer_art_board.png">
		</div>
		<div class="about-body">
			<p>-品質保証‐</p>
			<br>
			<p>当ブランドでは素材と職人技へのこだわりを大切にし</p>
			<p>最高品質のジュエリーをお届けすることをお約束しています。</p>
			<br>
			<p>リングには10金またはシルバーを使用しております</p>
			<p>また刻印が施された石はビンテージのもので、</p>
			<p>当時の熟練した職人による手彫りの一点物です。</p>
			<br>
			<p>これらの石は本物の『瑪瑙』を使用しており、</p>
			<p>信頼できる第三者機関による厳格な品質検査を経ており</p>
			<p>各商品に正規の鑑別書が付属しております。</p>
			<br>
			<p>Gentryは時を超えて受け継がれた価値と職人技を大切にした</p>
			<p>唯一無二のものとなっています。</p>
			<br>
			<br>
			<p>鑑別書のサンプル画像もご覧いただけますので、ぜひお確かめください。</p>
		</div>
		<div class="quality-img">
			<img src="<?php bloginfo('template_url') ?>/assets/images/quality.jpg">
		</div>
	</div>
</div>
