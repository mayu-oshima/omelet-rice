<?php get_header(); ?>

<!--メイン-->
<main class="main_menu">
	<div class="title">
		<div class="title_item">
			<h1>Menu</h1>
			<p class="yomi">メニュー</p>
		</div>
	</div>

	<div class="main_wrap_menu">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="menu_item">
			<a href="<?php the_permalink(); ?>">
				<div class="wrap_menu_vis">
					<?php the_post_thumbnail('full', ['class' => 'menu_vis']) ?>
				</div>
				<p class="menu_name"><?php the_title(); ?></p>
				<p class="price">
					<span class="block_sp bold"><span class="big"><?php echo esc_html(get_post_meta(get_the_ID(), 'price', true)); ?></span>円</span>( 税込 <?php echo esc_html(get_post_meta(get_the_ID(), 'tax-price', true)); ?>円 )
				</p>
			</a>
		</div>
		<?php endwhile; endif; ?>
	</div>
</main>

<?php get_footer(); ?>