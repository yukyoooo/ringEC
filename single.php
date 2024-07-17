<?php get_header(); ?>
	<div class="single">
		<div class="single-wrapper">
			<div class="single-header">
				<h2 class="single-header__title"><?php the_title(); ?></h2>
			</div>
			<div class="single-body">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<!-- 繰り返したい内容　ここから -->
						<li class="single-entry">
							<div class="single-entry__inner">
								<?php the_content(); ?>
							</div>
						</li>
						<!-- 繰り返したい内容　ここまで -->
					<?php endwhile; ?>
				<?php else : ?>
					<p>まだ投稿はありません。</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
