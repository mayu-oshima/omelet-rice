<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

  // 入力値をサニタイズ
  $name_sei = sanitize_text_field($_POST['name_sei']);
  $name_mei = sanitize_text_field($_POST['name_mei']);
  $kana_sei = sanitize_text_field($_POST['kana_sei']);
  $kana_mei = sanitize_text_field($_POST['kana_mei']);
  $email = sanitize_email($_POST['email']);
  $tel1 = sanitize_text_field($_POST['tel1']);
  $tel2 = sanitize_text_field($_POST['tel2']);
  $tel3 = sanitize_text_field($_POST['tel3']);
	$how_map = [
    'friends' => '知り合いの紹介で',
    'magazine' => '雑誌・webサイトで見て',
    'other' => 'その他'
	];
	$how = isset($_POST['how']) && isset($how_map[$_POST['how']])
    ? $how_map[$_POST['how']]
    : '';
  $message = sanitize_textarea_field($_POST['message']);

  // バリデーション
  $errors = array();
  if (empty($name_sei) || empty($name_mei)) {
    $errors[] = 'お名前を入力してください。';
  }
  if (empty($email) || !is_email($email)) {
    $errors[] = '有効なメールアドレスを入力してください。';
  }
  if (empty($message)) {
    $errors[] = 'お問い合わせ内容を入力してください。';
  }

  if (empty($errors)) {
    // 管理者宛メール
    $to = get_option('admin_email');
    $subject = '【オムライスの森】お問い合わせがありました';

    $body = "お名前: {$name_sei} {$name_mei}\n";
    $body .= "フリガナ: {$kana_sei} {$kana_mei}\n";
    $body .= "メールアドレス: {$email}\n";
    $body .= "電話番号: {$tel1}-{$tel2}-{$tel3}\n";
    $body .= "きっかけ: {$how}\n";
    $body .= "お問い合わせ内容:\n{$message}\n";

    $headers = array('Content-Type: text/plain; charset=UTF-8', "From: オムライスの森 <omser9696@gmail.com>");

    $mail_sent = wp_mail($to, $subject, $body, $headers);

    if ($mail_sent) {
      // 送信者へ自動返信メール
      $auto_subject = '【オムライスの森】お問い合わせありがとうございます';
      $auto_body = "{$name_sei} {$name_mei} 様\n\n";
      $auto_body .= "この度はお問い合わせいただき誠にありがとうございます。\n";
      $auto_body .= "以下の内容でお問い合わせを受け付けました。\n\n";
      $auto_body .= "-------------------------\n";
      $auto_body .= "お名前: {$name_sei} {$name_mei}\n";
      $auto_body .= "フリガナ: {$kana_sei} {$kana_mei}\n";
      $auto_body .= "メールアドレス: {$email}\n";
      $auto_body .= "電話番号: {$tel1}-{$tel2}-{$tel3}\n";
      $auto_body .= "きっかけ: {$how}\n";
      $auto_body .= "お問い合わせ内容:\n{$message}\n";
      $auto_body .= "-------------------------\n\n";
      $auto_body .= "内容を確認の上、担当者よりご連絡させていただきます。\n";
      $auto_body .= "今しばらくお待ちくださいませ。\n\n";
      $auto_body .= "オムライスの森";

      $auto_headers = array('Content-Type: text/plain; charset=UTF-8', "From: オムライスの森 <{$to}>");

      wp_mail($email, $auto_subject, $auto_body, $auto_headers);

      // thanksページへリダイレクト（URLは必要に応じて変更）
      wp_redirect(home_url('/thanks'));
      exit;
    } else {
      $errors[] = '送信に失敗しました。時間をおいて再度お試しください。';
    }
  }
}
?>

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

			<?php if (!empty($errors)) : ?>
				<div class="contact_errors">
					<ul>
						<?php foreach ($errors as $error) : ?>
							<li><?php echo esc_html($error); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>

			<?php if (!empty($success_message)) : ?>
				<div class="contact_success">
					<p><?php echo esc_html($success_message); ?></p>
				</div>
			<?php endif; ?>

			<form method="POST" action="" id="form">
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
					    <label><input type="radio" name="how" value="friends">知り合いの紹介で</label>
					    <label><input type="radio" name="how" value="magazine">雑誌・webサイトで見て</label><br class="br_sp">
							<label><input type="radio" name="how" value="other">その他</label>
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