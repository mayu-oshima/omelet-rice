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
        <span class="bold"><span class="big"><?php echo esc_html(get_post_meta(get_the_ID(), 'price', true)) ?></span>円</span>( 税込 <?php echo esc_html(get_post_meta(get_the_ID(), 'tax-price', true)) ?>円 )
      </p>
    </div>
  </div>

</main>

<?php get_footer(); ?>