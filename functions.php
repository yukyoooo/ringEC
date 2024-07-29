<?php
	function post_has_archive($args, $post_type){
		if('post'== $post_type){
			$args['rewrite']=true;
			$args['has_archive']='news';
		}
		return $args;
	}

	/*YubinBangoライブラリ*/

	wp_enqueue_script( 'yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true );

	add_filter('register_post_type_args', 'post_has_archive', 10, 2);