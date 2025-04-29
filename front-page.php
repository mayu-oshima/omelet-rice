<?php get_header(); ?>

<!--メイン-->
<div class="kv_home"></div>


<main class="main_home">
	<div class="main_wrap_home">
		<div id="news">
			<h2>お知らせ</h2>

			<table class="news_list">

			<?php for ($i = 1; $i <= 5; $i++): ?>
				<?php
					$date = get_post_meta(get_the_ID(), 'notice_' . $i . '_date', true);
					$text = get_post_meta(get_the_ID(), 'notice_' . $i . '_text', true);
				?>
				<?php if ($date && $text): ?>
					<tr>
						<th><?php echo esc_html($date); ?></th>
						<td class="sentence">
							<?php echo wp_kses_post($text); ?>
						</td>
					</tr>
				<?php endif; ?>
			<?php endfor; ?>
			</table>
		</div>
	</div>


	<div id="introduction">
		<h2>オムライスの森の特徴</h2>

		<section class="spotlight" id="spotlight_tamago">
			<div class="image_spotlight"  id="image_tamago">
				<div class="curtain move"></div>
				<img src="/wp-content/themes/omelet-rice/assets/images/spotlight/tamago.jpg" alt="" class="move">
			</div>

			<div class="content_spotlight" id="content_tamago">
				<h3>栃木県産の高級卵を使用</h3>
				<p>
					当店では、栃木県の「卵明舎」の卵「魔法卵GOLD」を使用しています。旨味と甘み、コクがあって驚くほど膨らむ当店こだわりの卵です。一般卵と比較すると生卵でなんと、2,3倍以上のコクがあることが分かりました。また、卵白の起泡性が高いので焼いた時のふんわりとした膨らみは格別。
				</p>
				<div class="btn_spotlight">
					<a href="about.html#tamago_about">詳しくはこちら</a>
				</div>
			</div>
		</section>

		<section class="spotlight" id="spotlight_omuraisu">
			<div class="image_spotlight" id="image_omuraisu">
				<div class="curtain move"></div>
				<img src="/wp-content/themes/omelet-rice/assets/images/spotlight/omuraisu.jpg" alt="" class="move">
			</div>

			<div class="content_spotlight" id="content_omuraisu">
				<h3>種類豊富なオムライス</h3>
				<p>
					お食事は様々な種類のオムライスをご用意しており、オムライス好きな人はもちろん、そうでない人でもメニュー選びを楽しんでもらえると思います。旬の食材を使った季節限定メニューもあります。
				</p>
				<div class="btn_spotlight">
					<a href="menu.html">メニューはこちら</a>
				</div>
			</div>
		</section>


		<section class="spotlight" id="spotlight_sizen">
			<div class="image_spotlight" id="image_sizen">
				<div class="curtain move"></div>
				<img src="/wp-content/themes/omelet-rice/assets/images/spotlight/sizen.jpg" alt="" class="move">
			</div>

			<div class="content_spotlight" id="content_sizen">
				<h3>緑に包まれた贅沢ロケーション！</h3>
				<p>
					店内では、みずみずしい緑に包まれまるで森林浴をしているかのような気分に浸りながらお食事やカフェタイムを楽しめます。さらに、テラス席では栃木県壬生町の森林による絶景を一望でき、癒しあふれるくつろぎの時間を過ごせます。
				</p>
				<div class="btn_spotlight">
					<a href="about.html#sizen_about">詳しくはこちら</a>
				</div>
			</div>

		</section>

	</div>

</main>

<?php get_footer(); ?>