<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>オムライスの森｜栃木県壬生町/ランチ オムライス専門のカフェ</title>
	<meta name="keywords" content="オムライスの森,栃木県,壬生町,カフェ,オムライス">
	<meta name="description" content="栃木県壬生町でこだわり食材を使用したカフェ「オムライスの森」です。">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/5cb8774097.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/wp-content/themes/omelet-rice/assets/css/reset.css">
	<link rel="stylesheet" href="/wp-content/themes/omelet-rice/assets/css/style.css">
	<link rel="stylesheet" href="/wp-content/themes/omelet-rice/assets/css/responsive.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&family=Noto+Serif+JP:wght@700&display=swap" rel="stylesheet">
	<meta name="google-site-verification" content="t78xDGdL1Mdrddi0kSt5q-io6BcWZ6ShOGKgNOGtAJ8"/>
	<script src="/wp-content/themes/omelet-rice/assets/js/jquery-3.6.0.min.js"></script>
	<!--ヘッダーナビのscript-->
	<script type="text/javascript">
	 $(function(){
	  $('.menu_btn').click(function(){
	   $('body').toggleClass('open_nav');
	  });
	 });
 </script>
 <!--Curtainのscript-->
	<script type="text/javascript">
		$(function() {
		$(window).scroll(function() {
			$(".move").each(function() {
				var scroll = $(window).scrollTop();
				var blockPosition = $(this).offset().top;
				var windowHeihgt = $(window).height();
				if (scroll > blockPosition - windowHeihgt + 200) {
					$(this).addClass("active");
				}
			});
		});
	});
	</script>



	<!--Aboutページ：スムーススクロールのscript-->
	<script>
	$(function(){
		// #で始まるアンカーをクリックした場合に処理
		$('.move_smooth').on("click", function(){
			// スクロールの速度
			let speed = 400; // ミリ秒

			// アンカーの値取得 移動場所を取得
			let href= $(this).attr("href");

			// 移動先の値を取得
			let target = $(href);

			// 移動先を調整、座標をoffsetで取得し、その中で縦方向の座標をtopで取得
			let position = target.offset().top;

			// 上記で取得した縦方向の座標の位置まで、
			// 上設定を行った速度でスムーススクロールを行う。swingは徐々に移動を行う
			$('body,html').animate({scrollTop:position}, speed, 'swing');

			// aタグのページ遷移の機能を抑制。ページ遷移が行われると上記の処理が意味をなさない
			return false;
		});
	});
	</script>


  <!-- Contactページ -->
  <script src="/wp-content/themes/omelet-rice/assets/js/jquery.validate.min.js"></script>
  <script>
    $(function(){
      $("#form").validate({
      // 入力のルール
      rules: {
      // 必須項目
      "name_sei": {
      required: true
      },
      "name_mei" : {
      required: true
      },
      "email" : {
      required: true
      },
      "message" : {
      required: true
      },
      },
      // エラーメッセージ
      messages:{
      "name_sei" : {
      required : "<span class='warning'>・お名前(姓)の入力を行ってください。</span><br>"
      },
      "name_mei" : {
      required : "<span class='warning'>・お名前(名)の入力を行ってください。</span><br>"
      },
      "email" : {
      required: "<span class='warning'>・メールアドレスの入力を行ってください。</span><br>"
      },
      "message" : {
      required: "<span class='warning'>・お問い合わせ内容の入力を行ってください。</span><br>"
      },
      },
      // エラーメッセージの場所を指定
      // 第一引数errorは追加しようとしているエラーメッセージの内容。
      // 第二引数elementはエラーが発生したオブジェクトが設定されます。
      errorPlacement: function(error, element){
      error.insertBefore("#contact_form");
      }
      });
    });
  </script>


</head>



<body>

<!--ヘッダー-->
<header>
	<div class="wrap_header">
		<a href="/"><img class="logo_header" src="/wp-content/themes/omelet-rice/assets/images/logo_brown.png" alt="オムライスの森"></a>

		<div class="menu_btn nav_toggle">
    <div>
      <span></span>
      <span></span>
      <span></span>
    </div>
    </div>

		<nav class="header_nav">
			<ul>
				<li>
					<a href="/about/" class="about_header_nav">
						<span class="en">About</span><span class="ja">-店舗案内-</span>
					</a>
				</li>
				<li>
					<a href="/menu/" class="menu_header_nav">
						<span class="en">Menu</span><span class="ja">-メニュー-</span>
					</a>
				</li>
				<li>
					<a href="/contact/" class="contact_header_nav">
						<span class="en">Contact</span><span class="ja">-お問い合わせ-</span>
					</a>
				</li>
				<li>
					<a href="/access/" class="access_header_nav">
						<span class="en">Access</span><span class="ja">-アクセス-</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</header>