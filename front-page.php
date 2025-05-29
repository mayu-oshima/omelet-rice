<?php get_header(); ?>

<!--メイン-->
<div class="kv_home">
	<div class="kv"></div>
	<div class="box_catch">
		<img class="logo" src="/wp-content/themes/omelet-rice/assets/images/logo_brown.png" alt="オムライスの森">
		<p class="catch">
			とろけるオムライスと、<br>
			緑に包まれるひととき。
		</p>
	</div>
</div>


<main class="main_home">
	<div class="main_wrap_home">
		<div id="news">
			<h2>お知らせ</h2>
			<?php if( have_rows('news_item') ): ?>
			<div class="news_list">
				<?php while ( have_rows('news_item') ) : the_row(); ?>
				<div class="item">
					<p class="date"><?php the_sub_field('news_date'); ?></p>
					<p class="text"><?php the_sub_field('news_text'); ?></p>
				</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>


	<?php if( have_rows('spotlight') ): ?>
	<div id="introduction">
		<h2>オムライスの森の特徴</h2>

		<div>
			<?php while ( have_rows('spotlight') ) : the_row(); ?>
			<section class="spotlight">
				<div class="image_spotlight">
					<div class="curtain move"></div>
					<img src="<?php the_sub_field('image'); ?>" alt="" class="move">
				</div>

				<div class="content_spotlight">
					<h3><?php the_sub_field('ttl'); ?></h3>
					<p>
						<?php the_sub_field('setntence'); ?>
					</p>
					<div class="btn_spotlight">
						<a href="<?php the_sub_field('btn_url'); ?>"><?php the_sub_field('btn_text'); ?></a>
					</div>
				</div>
			</section>
			<?php endwhile; ?>
		</div>

	</div>
	<?php endif; ?>

</main>

<?php get_footer(); ?>