<?php get_header(); ?>

<!--メイン-->
<main>

  <div class="wrap_product">
    <div class="vis_product">
      <?php the_post_thumbnail(); ?>
    </div>

    <div class="description_product">
      <p class="name_product"><?php the_title(); ?></p>
      <div class="description">
       <?php the_content(); ?>
			</div>
      <p class="price_product">
        <span class="bold"><span class="big"><?php the_field('price'); ?></span>円</span>( 税込 <?php the_field('tax-price'); ?>円 )
      </p>
    </div>
  </div>

</main>

<?php get_footer(); ?>