<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.cdnfonts.com/css/apple-chancery" rel="stylesheet">
	<link href="https://fonts.cdnfonts.com/css/mathilde" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<?php add_action( 'wp_enqueue_scripts', function(){
	wp_enqueue_style( 'my-style', get_template_directory_uri() . '/assets/css/index.css' );
	} ); ?>
	<?php wp_head(); ?>
</head>

<body>
