<?php
	function post_has_archive($args, $post_type){
		if('post'== $post_type){
			$args['rewrite']=true;
			$args['has_archive']='news';
		}
		return $args;
	}

//Contact Form 7 のreCAPTCHAのしきい値変更
add_filter( 'wpcf7_recaptcha_threshold', 'my_wpcf7_recaptcha_threshold' );
function my_wpcf7_recaptcha_threshold($score){
	return 0.29;
}
	/*YubinBangoライブラリ*/

	wp_enqueue_script( 'yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true );

	add_filter('register_post_type_args', 'post_has_archive', 10, 2);