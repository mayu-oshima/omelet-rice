<?php get_header(); ?>

<!--メイン-->
<main>
	<div class="title">
		<div class="title_item">
			<h1>Contact</h1>
			<p class="yomi">お問い合わせ</p>
		</div>
	</div>

	<div class="main_wrap_contact">
		<h2>お問い合わせフォーム</h2>

		<div class="form_wrap">

			<p>
				オムライスの森へのお問合せは、こちらのフォームをご利用ください。<br>
				必要事項をご記入の上、「送信」を押してください。<br class="br_sp"><span class="hissu"></span>は必須項目です。<br>
				お預かりした大切なお客様情報は、お問い合わせへの返信などに使用する以外の目的には一切使用いたしません。
			</p>

			<form medhod="POST" action="" id="form">
				<div id="contact_form">

					<div class="form_item">
						<label for="name_sei" class="koumoku_form">お名前<span class="hissu"></span></label>
						<div class="mei">
							<input type="text" name="name_sei" placeholder="姓" id="name_sei" class="name">
							<input type="text" name="name_mei" placeholder="名" class="name">
						</div>
					</div>

					<div class="form_item">
						<label for="kana_sei" class="koumoku_form">フリガナ</label>
						<div>
							<input type="text" name="kana_sei" placeholder="セイ" id="kana_sei" class="name">
							<input type="text" name="kana_mei" placeholder="メイ" class="name">
						</div>
					</div>

					<div class="form_item">
						<label for="email" class="koumoku_form">メールアドレス<span class="hissu"></span></label>
						<div>
							<input type="text" name="email" id="email" placeholder="ご連絡可能なメールアドレスを入力してください">
						</div>
					</div>

					<div class="form_item">
						<label for="tel1" class="koumoku_form">電話番号</label>
						<div>
							<input type="text" name="tel1" id="tel1" class="tel" placeholder="000">
							<span class="tel_haihun">-</span>
							<input type="text" name="tel2" class="tel" placeholder="0000">
							<span class="tel_haihun">-</span>
							<input type="text" name="tel3" class="tel" placeholder="0000">
						</div>
					</div>

				  <div class="form_item">
				    <label class="koumoku_form">当カフェをお知りになったきっかけは？</label>
						<div>
					    <label><input type="checkbox" name="how" value="friends">知り合いの紹介で</label>
					    <label><input type="checkbox" name="how" value="magazine">雑誌・webサイトで見て</label><br class="br_sp">
							<label><input type="checkbox" name="how" value="other">その他</label>
						</div>
				  </div>

					<div class="form_item">
				    <label class="koumoku_form">お問い合わせの内容<span class="hissu"></span></label>
						<div>
					    <textarea name="message" placeholder="ご質問、お問い合わせを入力してください"></textarea>
						</div>
				  </div>

					<div id="wrap_submit">
						<input type="submit" name="submit" value="送信" id=btn_submit>
					</div>

				</div>
			</form>
		</div>
	</div>
</main>

<?php get_footer(); ?>