<!--
Template Name: raum_Trivia1
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
	<link href="<?php echo get_template_directory_uri(); ?>/Profilestylecopy.css" rel="stylesheet">
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

	<!-- Topエリア -->
	<!-- Topエリア背景画像 -->
	<section id="topback" class="p-0 m-0">
		<div class="img1">
			<img src="<?php echo get_template_directory_uri(); ?>/img/handle2.jpg" alt="ラウムにできること">
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
				<img src="<?php echo get_template_directory_uri(); ?>/img/Trivia.png" class="p-3"alt="岐阜Web制作Raum">
				<div class="top_text text-center">
					<p></p>
					<p>ホームページの<br>豆知識</p>
				</div>
			</div>
		</div>
	</section>

	<!-- 目次 -->
	<section id="trivia">
		<div class="contents my-5">
			<div class=" contents_ttl text-center">
				<div>
					<h3>目次</h3>
				</div>
			</div>
			<div class=" contents_cont">
				<div class="row m-4">
					<div class=" contents_txt">
						<a class="nav-link" href="https://www.raum-official.com/raum_trivia/#SSL">1. URLの横に「保護されていません」と表示されます。このままにするとまずいの？</a>
						<a class="nav-link" href="https://www.raum-official.com/raum_trivia/#HP">2. ホームページを持ってるとどんないい事があるの？</a>
						<a class="nav-link" href="https://www.raum-official.com/raum_trivia/#BUY">3. 集客できるホームページと集客できないホームページ何が違うの？</a>
					</div>
				</div>
			</div>
		</div>

		<div id="SSL" class="my-5">
			<div class="title">
				<h2> 1. URLの横に保護されていませんと表示されます。このままにするとまずいの？</h2>
			</div>
			<div class="triv_cont">
				<div class="triv_conts">
					<h3 class="subtitle">保護されていませんと表示されているホームページは危険！</h3>
					<div>
						<div class="img_trivia text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ssl.jpg" class="text-center" alt="岐阜Web制作Raum">
						</div>
						<div class="triv_txt">
							<p>　「保護されていません」という表示は、このWebサイト（ページ）から送られる<strong>情報が第三者から読み取られてしまう</strong>可能性があることを示しています。</p>
							<p>理由は通信データを暗号化されていないため。特にクレジットカード情報や個人情報を入力する場合は気をつけた方がいいです。</p>
							<br>
							<p>また特に個人情報を扱うホームページでなくても、このような表示がされると、<strong>ホームページを見た人は危険なページ</strong>だと思ってしまう可能性が高くなります。</p>
						</div>
					</div>
				</div>
				<div class="triv_conts">
					<h3 class="subtitle">「保護されていません」の表示を消すには？</h3>
					<div>
						<div class="img_trivia text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ssl2.png" class="text-center" alt="岐阜Web制作Raum">
						</div>
						<div class="triv_txt">
							<p>　結論から言うとSSL化を行うと通信データが暗号化され、この<strong>「保護されていません」という表示を消す事</strong>ができます。</p>
							<p>このSSL化の手順は、まず、安全なwebサイトかの審査を行い、「SSLサーバ証明書」を発行してもらいます。その後、サーバにインストールするとSSL化が完了します。</p>
							<br>
							<p><strong>私たち「Raum」でもこのSSL化を行っている</strong>ため、お気軽にご相談ください。
							<br><button type="button" class="btn1 com_hover my-3 "><a href="#contact">ホームページの無料相談</a></button></p>
						</div>
					</div>
				</div>
			</div>
		<div>

		<div id="HP" class="my-5">
			<div class="title">
				<h2> 2. ホームページを持ってるとどんないい事があるの？</h2>
			</div>
			<div class="triv_cont">
				<div class="triv_conts">
					<h3 class="subtitle">メリット１：口コミが広がり安くなる</h3>
					<div class="img_trivia text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/trivia1.jpg" class="text-center" alt="岐阜Web制作Raum">
					</div>
					<div>
						<div class="triv_txt">
							<p>あなたは知り合いに「〇〇っていいよー！」とオススメされた後、インターネットでその商品を検索したことありませんか？</p>
							<p>または、LINEやメールで「URL」をつけて「ここにいってるよー！」と友人から送られてきた経験はないですか？</p>
							<br>
							<p>このように、ホームページがあると人に紹介しやすくなったり、周りの人の話を聞いて興味を持ってくれた人が問い合わせまでしてくれたりと<strong>口コミが格段に広がりやすく</strong>なります。</p>
							<p>今、口コミからお客様がきてくださってるなら、ホームページをお店の良さが伝わるものに変えると、<strong>興味があったけどお問い合わせするまでに至らなかったお客様まできてくれるように</strong>なりますよ。</p>
						</div>
					</div>
				</div>
				<div class="triv_conts">
					<h3 class="subtitle">メリット２：格安でできる営業・広告</h3>
					<div class="img_trivia text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/trivia2.jpg" class="text-center" alt="岐阜Web制作Raum">
					</div>
					<div>
						<div class="triv_txt">
							<p>毎月かかる営業費・広告費はどれくらいですか？</p>
							<br>
							<p>ホームページは格安の営業マンや広告にもなるんです。</p>
							<p>例えば、新しい接骨院に行きたい時なんて検索しますか？
							<br>多くの人は「地域名　＋　接骨院」と検索する人が多いと思います。</p>
							<p>そしてホームページを見て良ければ、そこに行くか決める。このように、<strong>必要としているお客様が自ら探して連絡してくださる</strong>ようになってきます。</p>
							<p>ホームページを見てきてくださるお客様が増えれば、<strong>営業マンや広告の代わり</strong>になってきます</p>
						</div>
					</div>
				</div>
				<div class="triv_conts">
					<h3 class="subtitle">メリット３：お店の印象を変えられる</h3>
					<div class="img_trivia text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/trivia3.jpg" class="text-center" alt="岐阜Web制作Raum">
					</div>
					<div>
						<div class="triv_txt">
							<br>
							<p>例えば、何か買いたい、行きたいと思った時、どこかにホームページがないか探しませんか？</p>
							<p>どんなお店なんだろう。どれくらいの価格なんだろう</p>
							<p>そう思ってホームページを探してそのページがなかった場合、<strong>信用性にかけてしまします。</strong></p>
							<br>
							<p>また、ホームページがあった場合、その<strong>ホームページから素敵な印象</strong>を感じたら、素敵なお店だから行ってみたいと思えます。</p>
							<p>逆に、手入れされてない古いホームページであれば、この<strong>お店はあまり良くないと勝手に判断</strong>してしまうんです。</p>
							<p>こうやって初めてそのお店に行く方の印象を変える事ができます。
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="BUY" class="my-5">
			<div class="title">
				<h2> ３. 集客できるホームページとは？</h2>
			</div>
			<div class="ttriv_cont">
				<div class="triv_conts">
					<h3 class="subtitle">定期的に更新している</h3>
					<div class="img_trivia text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/trivia5.jpg" class="text-center" alt="岐阜Web制作Raum">
					</div>
					<div>
						
						<div class="triv_txt">
							<p>ホームページを見たときにお知らせの日付が1年も前であったら,
							今もそのサービスをやっているか不安になりませんか？</p>
							<br>
							<p><strong>不安要素があるとお客様は足を運びにくくなってしまいます。</strong></p>
							<p>ホームページから人がくるサイトは頻繁に更新しています。</p>
							<p>そのため、ホームページは<strong>月に1回以上</strong>更新することをオススメしていますよ。</p>
						</div>
					</div>
				</div>
				<div class="triv_conts">
					<h3 class="subtitle">お客様自身がそのサービスを使っている事がイメージできる</h3>
					<div class="img_trivia text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/trivia4.jpg" class="text-center" alt="岐阜Web制作Raum">
					</div>
					<div>
						<div class="triv_txt">
							<p>人がこのサービスを買いたいと思うのは、</p>
							<br>
							<p>悩みがあったり、やりたい事があったときに<strong>解決してくれそう</strong>だと感じたときがほとんどです。</p>
							<p>じゃぁ、その「解決してくれそう」だとどこで感じているのか。
							<br>それは、商品の特徴と口コミです。</p>
							<p><strong>自分と同じような状態の人が解決したり、自分のなりたい姿になっているのを見て</strong></p>
							<p>私の悩みも解決できそうと感じられたら、問い合わせてみようと思うんです。</p>
						</div>
					</div>
				</div>
				<div class="triv_conts">
					<h3 class="subtitle">ホームページの一番最初のページで自分に関係あると思わせる</h3>
					<div>
						<div class="triv_txt">
							<p>ページは自分に関係ないと思われたら別のサイトに移動されてしまいます。</p>
							<br>
							<p>あなたは何か検索したときに、ページの下まで全て見るサイトってどれくらいありますか？</p>
							<p>途中で読むのをやめるサイトの方が圧倒的に多いと思います。</p>
							<br>
							<p>同じように多くの人は<strong>自分に関係ないサイトだ。</strong>必要な情報が載っていないと思えば<strong>別のサイトに移動</strong>します。</p>
							<p>そのため、<strong>一番最初のページに興味を持つような一言</strong>があると一気に最後まで、読まれる可能性が高くなるんです。</p>
						</div>
					</div>
				</div>
			<div>
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


