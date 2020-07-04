<!--
Template Name: raum_member
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

	<!-- Topエリア背景画像 -->
	<section id="topback" class="p-0 m-0">
		<div class="img1">
			<img src="<?php echo get_template_directory_uri(); ?>/img/handle3.png" alt="ラウムにできること">
		</div>
	</section>

	<!-- Topエリア -->
	<section id="topview">
		<div class="topview">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/raum_top_sub.jpg" alt="raum">
			</div>
			<div class="top_ttl_sub text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/Profile.png" class="p-3"alt="岐阜Web制作Raum">
				<div class="top_text">
					<p></p>
					<p>プロフィール</p>
				</div>
			</div>
		</div>
	</section>

	<!-- profile -->
	<section id="profile" class="sec">
		<div class="profile fadein">
			<div class="works_title text-center">
				<div>
					<h3>スタッフを紹介します</h3>
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
								<h4>Raum代表</h4>
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
					</h6>
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

	<section id="profile_oth">
		<div class="profile_oth m-5">
			<div class="profile_ttl text-center">
				<div>
					<h3>その他のスタッフ</h3>
				</div>
			</div>
			<div class="profile_oth_cont">
				<div class="row m-4 text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menber.jpg" class="col-5 text_right"alt="岐阜Web制作Raum">
					<div class="profile_oth_txt col-7">
						<p>カメラマン 1人 </p>
						<p>コーディング 1人</p>
						<p>デザイナー   1人</p>
					</div>
				</div>
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


