<!--
Template Name: raum_mail
-->

<!DOCTYPE html>
<html lang="ja">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web制作はRaum</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/Profilestyle copy.css" rel="stylesheet">
	<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="icon" href="/favicon.ico" type="img/favicon.ico">
</head>

<body>
<div class="wrap">
	<!-- Navigation -->
	<!-- ナビ -->
    <header id="top-head">
        <div class="inner">
            <div id="mobile-head">
				<a class="logo" href="https://www.raum-official.com/raum">
					<img src="<?php echo get_template_directory_uri(); ?>/img/RAUMlogo.png" class="p-3"alt="岐阜Web制作Raum">
				</a>
                <div id="nav-toggle">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <nav id="global-nav">
                <ul>
					<li class="nav-item">
						<a class="nav-link" href="https://www.raum-official.com/raum_trivia/">ホームページ豆知識</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://www.raum-official.com/raum_feature/">Raumの特徴</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://www.raum-official.com/raum_price/">料金</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://www.raum-official.com/raum_member/">スタッフ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="raum-official.com/raum_qa/">よくある質問</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://www.raum-official.com/raum_mail/">無料相談</a>
					</li>
                </ul>
            </nav>
        </div>
    </header>

	<!-- Topエリア背景画像 -->
	<section id="topback" class="p-0 m-0">
		<div class="img1">
			<img src="<?php echo get_template_directory_uri(); ?>/img/handle2.jpg" alt="ラウムにできること">
		</div>
	</section>

	<!-- Topエリア -->
	<section id="topview">
		<div class="topview">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/raum_top_sub.jpg" alt="raum">
			</div>
			<div class="top_ttl_sub text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/Contact.png" class="p-3"alt="岐阜Web制作Raum">
				<div class="top_text">
					<p></p>
					<p>無料相談</p>
				</div>
			</div>
		</div>
	</section>


	<!--お問い合わせ-->
	<section id="contact" class="claster">
		<div class="contact_text text-center">
			<div class="info pb-3">
				<h3>「ホームページからもっとたくさんの<br class="add_line">お客さんに来てもらうには？」</h3>
			</div>
				<h4 class="mt-2 mb-3 text-center">まずは現状分析</h4>
				<div class="px-3 mx-auto my-5">
					<p>毎月ホームページはどれくらい見られているの？</p>
					<p>ホームページはどこから見られてるの？Instagram？検索？</p>
					<p>お客さんはホームページのどこを見ているの？</p>
					<p>お客さんはどんなキーワードで検索しているの？</p>
					<p class="mt-2 mb-3">売れるホームページは<br class="add_line">これらのことを知ることから始まります</p>
					<p class="pt-4"><strong>ホームページ一つで売り上げは変わってくる。</strong></p>
					<p>現状分析をしたい方は<br>「Raum」の無料の相談がオススメです。</p>
				</div>
				
			</div>

		<div class="contact_info my-0 mx-auto text-center">
			<div class="contact text-center">
				<div>
					<h3>【無料】ホームページ相談</h3>
				</div>
			</div>
			<div class="pb-5 pt-2">
				<form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSe0V8KauHdy95ioQUBa5zQBNK7trooGn6p6vjsNVMYdjw1mFw/formResponse" target="_self" method="POST" id="mG61Hd">
					<div class="text-center">
						<p>お気軽にご連絡ください</p>
						<div class="contact_item">
							<label>お名前<span>(必須)</span></label>
							<br>
							<input class="contact_inp" type="text" name="entry.271032105" placeholder="例）山田太郎" value="">
						</div>
						<div class="contact_item">
							<label>メールアドレス<span>(必須)</span></label>
							<br>
							<input class="contact_inp" type="text" name="entry.1075848321" placeholder="例）guest@example.com" value="">
						</div>
						<div class="contact_item">
							<label>ホームページ</label>
							<br>
							<input class="contact_inp" type="text" name="entry.1003904052" placeholder="お持ちの場合はお書きください" value="">
						</div>
						<div class="contact_item">
							<label>お問い合わせ内容</label>
							<br>
							<textarea class="contact_inp contact_detail" name="entry.958808251" rows="5" placeholder="ご自由にお書きください"></textarea>
						</div>
						<button class="btn submit_btn" type="submit">送信</button>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!--- Footer -->
	<footer>
		<div class="container-fluid p-0">
			<div class="row text-center">
				<div class="col-12">
					<hr class="light">
					<h5>&copy; Raum.com</h5>
				</div>
			</div>
		</div>
	</footer>
</div>

</body>
</html>


