<!DOCTYPE html>
	<?php get_header(); ?>
		<?php if (have_posts()): ?>
		<?php while (have_posts()) : ?>
		<?php the_post(); ?>
		ここに記事の情報を使ってなにか表示する。
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>