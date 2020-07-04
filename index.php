<!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web制作はRaum</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="icon" href="/favicon.ico" type="img/favicon.ico">
</head>

<body>
<div class="wrap">
	<!-- Navigation -->
	<nav id="navigation" class="navbar navbar-expand-md navbar-light bg-light sticky-top "style=background-color:#e3f2fd;>
		<!--メニュー-->
		<div class="container-fluid">
			<a class="navbar-brand p-0" href="#"><img class="Icon" src="<?php echo get_template_directory_uri(); ?>/img/icon.png" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="current-item collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link"  href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#profile">Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#skill_all">Skill</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#works">Works</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!--top画像-->

	<div id="home" class="claster">
		<div class="Top">
			<img src="<?php echo get_template_directory_uri(); ?>/img/back.png" alt="">
			<div class="Top-info">
				<h1><span class="bound1">R</span><span class="bound2">a</span><span class="bound3">u</span><span class="bound4">m</span></h1>
				<h3>Web Creator</h3>
			</div>
			<div class="str">
				<div class="str1"><i class="fas fa-star"></i></div>
				<div class="str2"><i class="fas fa-star"></i></div>
				<div class="str3"><i class="fas fa-star"></i></div>
				<div class="str4"><i class="fas fa-star"></i></div>
				<div class="str5"><i class="fas fa-star"></i></div>
			</div>
		</div>
	</div>

	<!-- info -->

	<div class="bg-white m-3 text-center info">
		<div>
			<h2 class="my-3" >成果と見た目にこだわったWebサイト</h2>
			<p>デザインからコーディングまで<br class="add_line">全てお任せください</p>
		</div>
		<a href="#contact">
			<button type="button" class="btn1 btn my-3 ">お問い合わせ</button>
		</a>
	</div>

	<!--- できること -->
	<section>
		<div class="text-center cando fadein m-0 mb-5">
			<div class="text1 m-auto ">
				<h3 class="mt-2 mb-5 text-center"><span>Raum</span>  ならこんな課題を解決します</h3>
				<div class="px-3 text-left">
					<p><i class="far fa-check-square mx-1"></i>分かりやすいLPの作成を作成したい</p>
					<p><i class="far fa-check-square mx-1"></i>デザインからコーディングまで任せたい</p>
					<p><i class="far fa-check-square mx-1"></i>社内のプログラマーが足りない</p>
				</div>
			</div>
		</div>
	</section>


	<!-- About -->
	<section id="about" class="claster">
		<div class="about text-center m-0 fadein">
			<div>
				<h3 class="text-md-left">About</h3>
			</div>
		</div>
		<div class="info row">
			<div class="about_txt text-center">
					<p>サイト設計からコーディングまで対応しています。</p>
					<p>強みは広告運用の経験よりサイトの訪問者の反応がいいLPの設計、デザインが可能なこと。
					お客様がお持ちの大切な価値を利用者にわかりやすく伝えることを第一とし、
						「シンプル・見やすい・分かりやすい・伝わる」Webデザインにて設計します。</p>
			</div>
			<div class="about_left col-12 col-md-4">
			</div>
			<div class="about_right col-12 col-md-8 p-0">
				<img src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="">
			</div>
		</div>
	</section>

	<!--メリット-->
	<section id="Merit">
		<div class="merit text-center m-0 mb-5 fadein">
			<div>
				<h3 class="text-md-left">Merit</h3>
			</div>
			<div>
				<h2>Raumを選ぶ<br class="add_line"><span class="emphasis">3</span>つのメリット</h2>
			</div>
			<div class="merit_conts">
				<div class="my-5 merit_cont">
					<p class="num">1</p>
					<i class="far fa-calendar-alt m-2"></i>
					<h4>必要な時だけ依頼可能</h4>
				
					<p>どのような会社でも、一年中安定して同じ量の仕事があるわけではなく、業務量は常に変化していると思います。<br>
						Raumでは人材が必要な時のみ依頼をしていただけるため、固定費を抑えることが可能になります。</p>
				</div>
				<div class="my-5 merit_cont">
					<p class="num">2</p>
					<i class="far fa-clipboard m-2"></i>
					<h4>売れるLPを作成できる</h4>
					<p>自社製品を販売していた経験より、売れるLPの作成が得意です。<br>
						アクセス解析・広告運用も行なってきたため、<br>
						Webサイトを公開後も、見るべきポイントを押さえた調査でサイトの改善点をみつけていくことも可能です。</p>
				</div>

				<div class="my-5 merit_cont">
					<p class="num">3</p>
					<i class="fas fa-comments m-2"></i>
					<h4>小さな案件から<br class="add_line">気軽に相談できる</h4>
					<p>サイトの一部修正などの小さな案件や業務でも承っております。お任せ下さい。</p>
				</div>
			</div>
		</div>
	</section>

	<!-- profile -->
	<section id="profile" class="claster">
		<div class="profile fadein">
			<div class="profile_ttl text-center">
				<div>
					<h3 class="text-md-left">profile</h3>
				</div>
			</div>
			<div class="profile_txt">	
				<div class="profile_shin py-2">
					<div class="profile_shin_cot">
						<div class="row my-5">
							<div class="col-md-4 text-center text-md-left">
								<img  src="<?php echo get_template_directory_uri(); ?>/img/pro2.JPG" width="200px" height="210px">					
							</div> <!-- prof_pic -->
							<div class="col-md-4  my-md-auto mt-5">
								<p>
									<i class="fas fa-user"></i>名前：　佐伯　真
								</p>
								<p>
									<i class="fas fa-clock"></i>年齢：　29歳
								</p>
								<p>
									<i class="fas fa-globe-asia"></i>出身：　愛知県
								</p>
							</div>
							<div class="col-md-4 my-auto">
								<p>
									<i class="fas fa-school"></i>出身校：　京都大学
								</p>
								<p>
									<i class="fas fa-tv"></i>趣味：ゲーム実況観賞、筋トレ
								</p>
							</div>
						</div>
						<div class="prof_info text-center my-5">
							<p class="prof-cont text-left">　「webサイトを通じて集客をができるようにし、お店を活気付けたい」
								そんな思いでWeb制作をしております。私がプログラミングをはじめたのが大学時代。統計学を専攻しており、データ分析を効率化する為にプログラミングを学びました。　また在学中にマーケティング会社で働きながらプログラミングでデータ分析を行ったことがきっかけでプログラミングって面白いな」と思うようになりました。
									卒業後は自動車部品メーカーで5年間勤務し管理部門の業務に携わっていましたが、
									プログラミングの面白さが忘れられず本業の傍らアプリ開発・web制作を個人で行うようになりました。そんな時に、知人のwebサイトを制作した際に「サイト見てお客さんが来てくれたよ。ありがとう」と言って貰えすごく嬉しく思い、今はweb 制作の仕事を行っております。
									現在では個人・企業の魅力がより伝わるようなデザイン、使いやすいシステムの研究を日々行っています。
							</p>
						</div>
					</div>
				</div>
				<div class="profile_sachi  py-2">
					<div class="profile_sachi_cot">
						<div class="row my-5">
							<div class="col-md-4 text-center text-md-left">
								<img src="<?php echo get_template_directory_uri(); ?>/img/pro1.JPG" width="200px" height="210px">			
							</div>
							<div class="col-md-4 my-md-auto mt-5">
								<p>
									<i class="fas fa-user"></i>名前：　吉田　幸世
								</p>
								<p>
									<i class="fas fa-clock"></i>年齢：　29歳
								</p>
								<p>
									<i class="fas fa-globe-asia"></i>出身：　岐阜県
								</p>
							</div>
							<div class="col-md-4 my-auto">
								<p>
									<i class="fas fa-school"></i>出身校：　南山大学
								</p>
								<p>
									<i class="fas fa-tv"></i>趣味：国内旅行、漫画、カフェ巡り
								</p>
							</div>
						</div>
						<div class="prof_info text-center my-5">
							<p class="prof-cont text-left">
								　現在はライター、youtubeの企画、制作とWeb制作の３つの仕事をおこなっております。もともとは、大学でプログラミングを学び、卒業後は航空機メーカーで3年勤めプログラマーとして航空機制御システムの開発に携わっていました。本業の傍ら恋愛のブログを書きはじめ、そのブログから恋愛相談の問い合わせが来るようになったことをきっかけにマッチングアプリ のプロフィール添削というサービスをはじめました。自分のブログをこだわっているうちにweb制作も自分で行いたいと考えはじめ、今ではweb制作をメインに仕事をしております。
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- スキル -->
	<section id="skill_all" class="claster">
		<div class="skills_contents fadein">
			<div class="text-md-left">
				<h3>Skill</h3>
			</div>
			<!-- スキル全体 -->
			<div class="skills text-center">
				<!-- html -->
				<div class="skill_card">
					<div class="skill_icon">
					<i class="fab fa-html5"></i>
					</div>
					<div class="skill_name">
					<h2>HTML5</h2>
					</div>
				</div>
				<!-- css -->
				<div class="skill_card">
					<div class="skill_icon">
						<i class="fab fa-css3"></i>
					</div>
					<div class="skill_name">
					<h2>CSS3</h2>
					</div>
				</div>
				<!-- ブートストラップ  -->
				<div class="skill_card">
					<div class="skill_icon">
						<i class="fab fa-bootstrap"></i>
					</div>
					<div class="skill_name">
					<h2>Bootstrap4</h2>
					</div>
				</div> 
				<!-- Javascript -->
				<div class="skill_card">
					<div class="skill_icon">
					<i class="fab fa-js-square"></i>
					</div>
					<div class="skill_name">
					<h2>JavaScript</h2>
					</div>
				</div> 
				<!-- jQuery -->
				<div class="skill_card">
					<div class="skill_icon">
						<i class="fab fa-node-js"></i>
					</div>
					<div class="skill_name">
					<h2>jQuery</h2>
					</div>
				</div> 
				<!-- php -->
				<div class="skill_card">
					<div class="skill_icon">
					<i class="fab fa-php"></i>
					</div>
					<div class="skill_name">
					<h2>PHP</h2>
					</div>
				</div> 
				<!-- Wordpress -->
				<div class="skill_card">
					<div class="skill_icon">
					<i class="fab fa-wordpress"></i>
					</div>
					<div class="skill_name">
					<h2>WordPress</h2>
					</div>
				</div> 
				<div class="skill_card">
					<div class="skill_icon">
					<i class="fab fa-github"></i>
					</div>
					<div class="skill_name">
					<h2>GitHub</h2>
					</div>
				</div> 
			</div>
		</div>
	</section> 

	<!-- 制作実績 -->
	<section id="works" class="claster">
		<div class="fadein">
			<div class="works text-center">
				<div>
					<h3 class="text-md-left">Works</h3>
				</div>
			</div>
			<div class="works_info mx-2">
				<div class="works_img row mt-4 pb-5">
					<div class="col-md-3 m-auto text-center">
						<a href="https://www.raum-official.com/cafe/" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/work1.png" alt="cafeのサイト">
						</a>
						<br>
						<a href="https://www.raum-official.com/cafe/" target="_blank" class="link">>>【自作】カフェのサイト</a>
					</div>
					<div class="col-md-3 m-auto py-５ text-center">
						<a href="https://www.raum-official.com/sample-page/incoron-house/" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/work2.png" alt="建築会社のサイト">
						</a>
						<br>
						<a href="https://www.raum-official.com/sample-page/incoron-house/" target="_blank" class="link">>>【自作】ハウスメーカーのLP</a>
					</div>
					<div class="col-md-3 m-auto text-center">
						<a href="https://www.raum-official.com/organic-cafe/" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/work3.png" alt="cafeのサイト">
						</a>
						<br>
						<a href="https://www.raum-official.com/organic-cafe/" target="_blank" class="link">>>【自作】カフェのサイト</a>
					</div>
					<div class="col-md-3 m-auto text-center">
						<a href="https://www.raum-official.com/school/" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/work4.png" alt="塾のサイト">
						</a>
						<br>
						<a href="https://www.raum-official.com/school/" target="_blank" class="link">>>【自作】塾のサイト</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--お問い合わせ-->
	<section id="contact" class="claster">
		<div class="contact_content">
			<div class="contact text-center">
				<div>
					<h3 class="text-md-left">Contact</h3>
				</div>
			</div>
			<div class="contact_info py-5">
				<form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSe0V8KauHdy95ioQUBa5zQBNK7trooGn6p6vjsNVMYdjw1mFw/formResponse" target="_self" method="POST" id="mG61Hd">
					<div class="text-center">
						<p>お見積もりや案件依頼など<br class="add_line">お気軽にお問い合わせください。</p>
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
							<label>お問い合わせ項目<span>(必須)</span></label>
							<br>
							<select class="contact_inp" name="entry.1003904052" placeholder="お問い合わせ内容を選択する" >
								<option value="LP、Web制作の相談">LP、Web制作の相談</option>
								<option value="外部パートナーの依頼">外部パートナーの依頼</option>
								<option value="その他">その他</option>
							</select>
						</div>
						<div class="contact_item">
							<label>お問い合わせ内容<span>(必須)</span></label>
							<br>
							<textarea class="contact_inp contact_detail" name="entry.958808251" rows="5" placeholder="お問合せ内容を入力"></textarea>
						</div>
						<button class="btn submit_btn" type="submit">送信</button>
					</div>
				</form>
			</div>
		</div>
	</section>

	<!--右下ボタン-->
	<section class="nav_btn">
		<a href="#">
			<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
		</a>
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

<script>
	$(function(){
		$(window).scroll(function (){
			$('.fadein').each(function(){
				var elemPos = $(this).offset().top;
				var scroll = $(window).scrollTop();
				var windowHeight = $(window).height();

				if (elemPos < scroll+ windowHeight - 200){
					$(this).addClass('scrollin');
				}
			});
			$('.claster').each(function(i){
				var elemPosTop = $(this).offset().top;
				var elemPosBtm = $(this).offset().top + $(this).height();
				var scroll = $(window).scrollTop();
				var windowHeight = $(window).height();

				if ((scroll < elemPosBtm - 300) && (elemPosTop + 200 < scroll+ windowHeight)){
					$('.nav-link').eq(i).addClass('menu_line');
				}else{
					$('.nav-link').eq(i).removeClass('menu_line');
				}
			});
		});
	});
</script>
</body>
</html>


