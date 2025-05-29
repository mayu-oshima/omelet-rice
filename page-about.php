<?php get_header(); ?>

<!--メイン-->
<main>
	<div class="title">
		<div class="title_item">
			<h1>About</h1>
			<p class="yomi">店舗案内</p>
		</div>
	</div>


	<div class="main_wrap_about">
		<?php if( have_rows('content') ): ?>
		<nav id="nav_about">
			<h4>コンテンツ</h4>
			<ul>
				<?php
				$link_num = 0;				
				while ( have_rows('content') ) : the_row();
				$link_num += 1;
				?>
				<li>
					<a href="#content_<?php echo $link_num; ?>" class="move_smooth"><i class="fas fa-caret-right"></i><?php the_sub_field('top_ttl'); ?></a>
				</li>
				<?php endwhile; ?>

			</ul>
		</nav>

		<div class="wrap_about">
			<?php
			$id_num = 0;				
			while ( have_rows('content') ) : the_row();
			$id_num += 1;
			?>
			<div class="link" id="content_<?php echo $id_num; ?>">
				<div class="content_about" >
					<?php if(get_sub_field('top_ttl')): ?>
						<h2><?php the_sub_field('top_ttl'); ?></h2>
					<?php endif; ?>
					<?php if(get_sub_field('top_img')): ?>
					<img src="<?php the_sub_field('top_img'); ?>" class="images_content">
					<?php endif; ?>
					<?php if(get_sub_field('top_sentence')): ?>
					<p class="sentence">
						<?php the_sub_field('top_sentence'); ?>
					</p>
					<?php endif; ?>

					<?php while ( have_rows('sub_content') ) : the_row(); ?>
					<div class="about_sub">
						<?php if(get_sub_field('sub_ttl')): ?>
						<h3><?php the_sub_field('sub_ttl'); ?></h3>
						<?php endif; ?>
						<?php if(get_sub_field('sub_img')): ?>
						<img src="<?php the_sub_field('sub_img'); ?>" class="images_content">
						<?php endif; ?>
						<?php if(get_sub_field('sub_sentence')): ?>
						<p class="sentence">
							<?php the_sub_field('sub_sentence'); ?>
						</p>
						<?php endif; ?>
					</div>
					<?php endwhile; ?>

				</div>
			</div>
			<?php endwhile; ?>

		</div>
		<?php else: ?>
			<p>記事はありません。</p>
		<?php endif; ?>
	</div>
	
</main>

<?php get_footer(); ?>