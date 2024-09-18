<?php get_header(); ?>

<div class="top-wrapper">
	<div class="top-text">
		<p class="animated flipInX ">Gentry</p>
	</div>
</div>
<div class="top-description">
	<div class="top-description-text">
		<p>100年先に残る一生物</p>
		<p>ファッションとしてのリングだけでなく歴史と伝統の象徴でもあります。</p>
		<p>私たちのシグネットリングは、あなたの個性とスタイルを更に引き立てあなたの物語を共に歩みます。</p>
	</div>
</div>
<div class="top-toOnlineShop">
	<div class="top-toOnlineShop-button">
		<a href="<?php bloginfo('url'); ?>/category/item/" class="top-toOnlineShop-button-a">
			オンラインショップを見る
		</a>
	</div>
</div>
<div class="top-pics">
	<div class="top-pics-left">
		<img src="<?php bloginfo('template_url') ?>/assets/images/00_top_left1.jpg">
	</div>
	<div class="top-pics-right" id="top-pics-right">
		<div class="top-pics-right-top">
			<img class="no-active" src="<?php bloginfo('template_url') ?>/assets/images/00_top_right_up1.jpg">
			<img class="active" src="<?php bloginfo('template_url') ?>/assets/images/00_top_right_up2.jpg">
		</div>
		<div class="top-pics-right-bottom">
			<img class="active" src="<?php bloginfo('template_url') ?>/assets/images/00_top_right_down1.jpg">
			<img class="no-active" src="<?php bloginfo('template_url') ?>/assets/images/00_top_right_down2.jpg">
		</div>
	</div>
</div>
<div class="top-pics2">
	<div class="top-pics2-top">
		<div class="top-pics2-left">
			<img src="<?php bloginfo('template_url') ?>/assets/images/00_top_pics2_left.jpg">
		</div>
		<div class="top-pics2-right">
			<div class="product-name">
				<p>Signet Ring</p>
			</div>
			<div class="product-description">
				<p>私たちのリングは全て一点物です</p>
				<p>素晴らしい出会いがありますように</p>
			</div>
		</div>
	</div>
	<div class="top-pics2-bottom">
		<div class="top-pics2-bottom-1">
			<img src="<?php bloginfo('template_url') ?>/assets/images/00_top_pics2_bottom_1.jpg">
		</div>
		<div class="top-pics2-bottom-2">
			<img src="<?php bloginfo('template_url') ?>/assets/images/00_top_pics2_bottom_2.jpg">
		</div>
		<div class="top-pics2-bottom-2">
			<img src="<?php bloginfo('template_url') ?>/assets/images/00_top_pics2_bottom_3.jpg">
		</div>
		<div class="top-pics2-bottom-2">
			<img src="<?php bloginfo('template_url') ?>/assets/images/00_top_pics2_bottom_4.jpg">
		</div>
		<div class="top-pics2-bottom-2">
			<img src="<?php bloginfo('template_url') ?>/assets/images/00_top_pics2_bottom_5.jpg">
		</div>
	</div>
</div>
<div class="top-toOnlineShop2">
	<div class="top-text2">
		<p>Gentry</p>
	</div>
	<div class="product-name2">
		<p>Signet Ring</p>
	</div>
	<div class="to-shop-button">
		<a href="<?php bloginfo('url'); ?>/category/item/" class="top-toOnlineShop2-button-a">
			オンラインショップを見る
		</a>
	</div>
</div>
<div class="top-sns-wrapper">
	<a href="https://www.instagram.com/signet.ring_gentry?igsh=aTl2czJ1eWN3dzFr&utm_source=qr" class="flowbtn my_instagram1">
		<i class="fa-brands fa-instagram"></i>
	</a>
<!--	<a href="https://line.me/ti/p/%ライン＠のアカウント" class="flowbtn my_line1">-->
<!--		<i class="fa-brands fa-line"></i>-->
<!--	</a>-->
	<a href="https://www.tiktok.com/@gentry.1920?_t=8oHy4vxAAFB&_r=1" class="flowbtn my_tiktok1">
		<i class="fa-brands fa-tiktok"></i>
	</a>
</div>


<?php get_footer(); ?>
<script>

	function changeImage() {
		const images = document.images;
		for(let image of images) {
		// images.forEach((elem)=>{
			if(image.classList.contains('active')){
				image.classList.remove('active')
				image.classList.add('no-active')
			}else if(image.classList.contains('no-active')){
				image.classList.remove('no-active')
				image.classList.add('active')
			}
		}
	}
	setInterval(changeImage, 10000);
</script>
