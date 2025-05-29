<?php get_header(); ?>

<!--メイン-->
<main>
	<div class="title">
		<div class="title_item">
			<h1>Access</h1>
			<p class="yomi">アクセス</p>
		</div>
	</div>

	<div class="main_wrap_access syozai">
		<h2>オムライスの森へのアクセス方法</h2>

		<?php if(get_field('address')): ?>
		<h3>所在地</h3>
		<p>
			<?php the_field('address'); ?>
		</p>
		<?php endif; ?>
	</div>
	<?php if(get_field('map')): ?>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=<?php the_field('map'); ?>" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	<?php endif; ?>

	<?php if( have_rows('transportation') ): ?>
	<div class="main_wrap_access koutuu">
		<h3>交通案内</h3>
		<?php while ( have_rows('transportation') ) : the_row(); ?>
		<h4><?php the_sub_field('ttl'); ?></h4>
		<p><?php the_sub_field('text'); ?></p>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>

</main>

<?php get_footer(); ?>