<!--
Template Name: raum_QA
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
				<img src="<?php echo get_template_directory_uri(); ?>/img/Question.png" class="p-3"alt="岐阜Web制作Raum">
				<div class="top_text">
					<p></p>
					<p>よくある質問</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Q&A ホームページの基礎知識 -->
	<section id="QA" class="sec">
		<div class="cate_ttl my-4 text-center">
			<h3>ホームページの基礎知識</h3>
		</div>
		<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="card">
				<div class="card-header" role="tab" id="headingOne">
				<h5 class="mb-0">
					<a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false" aria-controls="collapseOne">
					<span>+</span>Qホームページに関する知識が乏しいのですが大丈夫ですか？
					</a>
				</h5>
				</div><!-- /.card-header -->
				<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
				<div class="card-body">
					問題ありません！詳しく丁寧にお伝えさせて頂きます。
					<br>また、ホームページ制作を行う目的を共有化し目的達成までの道筋をきちんとご説明させていただきます。
					<br>また問題が考えられそうな時は、問題点をしっかりお伝えさせて頂きます。
				</div><!-- /.card-body -->
				</div><!-- /.collapse -->
			</div><!-- /.card -->
			<div class="card">
				<div class="card-header" role="tab" id="headingTwo">
				<h5 class="mb-0">
					<a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
					<span>+</span>Q.自社のホームページを開くとURLの横に「保護されてません」と表示されていますが、<br>  大丈夫でしょうか？
					</a>
				</h5>
				</div><!-- /.card-header -->
				<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
				<div class="card-body">
					URLの横に「保護されてません」と表示されるのはSSl化というものがされていないからです。
					<br>このSSLをしないと、
					<br>
					・ホームページが正しく表示されない<br>
					・検索順位が落ちる<br>
					・ネット上でのなりすましや重要な情報が漏れるなど、セキュリティ面でリスクに晒される<br>
					・ページの表示速度が遅い<br>
					などの事象が起こります。そのため、弊社ではSSL化することをおすすめしております。<br>
				</div><!-- /.card-body -->
				</div><!-- /.collapse -->
			</div><!-- /.card -->
			<div class="card">
				<div class="card-header" role="tab" id="headingThree">
				<h5 class="mb-0">
					<a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
					<span>+</span>Q.今ホームページ持ってますがなかなか集客できません。アドバイスもらえますか？
					</a>
				</h5>
				</div><!-- /.card-header -->
				<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
				<div class="card-body">
					はい、可能です。<br>ホームページを作っただけでは集客できません。
					<br>集客できるホームページにする方法があるんです。
					<br>その方法を無料相談の際にお伝えしているため、お気軽にご相談ください。
					<a class="btn1 com_hover" href="https://www.raum-official.com/raum_mail/">ホームページの無料相談はこちら</a>
				</div><!-- /.card-body -->
				</div><!-- /.collapse -->
			</div><!-- /.card -->
		</div><!-- /#accordion -->
	</section>

	<!-- Q&A ホームページ制作に関して -->
	<section id="QA" class="sec">
		<div class="cate_ttl my-4 text-center">
			<h3>ホームページ制作に関して</h3>
		</div>
		<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="card">
				<div class="card-header" role="tab" id="headingTow_One">
				<h5 class="mb-0">
					<a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseTow_One" role="button" aria-expanded="false" aria-controls="collapseTow_One">
					<span>+</span>Q.見積や提案依頼は無料ですか？
					</a>
				</h5>
				</div><!-- /.card-header -->
				<div id="collapseTow_One" class="collapse" role="tabpanel" aria-labelledby="headingTow_One" data-parent="#accordion">
				<div class="card-body">
					もちろん無料です。ご相談からお見積・ご提案までの料金は発生致しません。
					<br>また、集客できるホームページと集客できないホームページの違いなども無料でご説明しております。
					<br>お気軽にご連絡ください。
					<a class="btn1 com_hover" href="https://www.raum-official.com/raum_mail/">ホームページの無料相談はこちら</a>
				</div><!-- /.card-body -->
				</div><!-- /.collapse -->
			</div><!-- /.card -->
			<div class="card">
				<div class="card-header" role="tab" id="headingTwo_Tow">
				<h5 class="mb-0">
					<a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseTwo_Tow" role="button" aria-expanded="false" aria-controls="collapseTwo_Tow">
					<span>+</span>Q.相談や打ち合わせはどのように行いますか？
					</a>
				</h5>
				</div><!-- /.card-header -->
				<div id="collapseTwo_Tow" class="collapse" role="tabpanel" aria-labelledby="headingTwo_Tow" data-parent="#accordion">
				<div class="card-body">
				基本的にテレビ電話でお打ち合わせをさせて頂きます。
				<br>そうすることによって、隙間時間でも打ち合わせが可能となっております。
				<br>またデザイン案を見ながらの打ち合わせになるため、お客様にはご満足いただいております。
					</div><!-- /.card-body -->
				</div><!-- /.collapse -->
			</div><!-- /.card -->
			<div class="card">
				<div class="card-header" role="tab" id="headingTow_Three">
				<h5 class="mb-0">
					<a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseTow_Three" role="button" aria-expanded="false" aria-controls="collapseTow_Three">
					<span>+</span>Q.何もわからないので、ホームページを作成した後も面倒を見てくれますか？
					</a>
				</h5>
				</div><!-- /.card-header -->
				<div id="collapseTow_Three" class="collapse" role="tabpanel" aria-labelledby="headingTow_Three" data-parent="#accordion">
				<div class="card-body">
					もちろん承っております。
					<br>月々の料金の中に集客を強化できるコンサルティングが入ったサービスもございます。
				</div><!-- /.card-body -->
				</div><!-- /.collapse -->
			</div><!-- /.card -->
			<div class="card">
				<div class="card-header" role="tab" id="headingTow_Four">
				<h5 class="mb-0">
					<a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseTow_Four" role="button" aria-expanded="false" aria-controls="collapseTow_Four">
					<span>+</span>Q.文章制作なども依頼できますか？
					</a>
				</h5>
				</div><!-- /.card-header -->
				<div id="collapseTow_Four" class="collapse" role="tabpanel" aria-labelledby="headingTow_Four" data-parent="#accordion">
				<div class="card-body">
					全てのコースにおいて文章制作もRaumで承っております。
					<br>文章やキャッチコピー一つでお問い合わせ件数が数倍になることもあるため、
					<br>売り上げが上がるよう、文章もプロが考えさせて頂きます。
				</div><!-- /.card-body -->
				</div><!-- /.collapse -->
			</div><!-- /.card -->
			<div class="card">
				<div class="card-header" role="tab" id="headingTow_Five">
				<h5 class="mb-0">
					<a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseTow_Five" role="button" aria-expanded="false" aria-controls="collapseTow_Five">
					<span>+</span>Q.Webサイトの更新を自社で行うことは可能ですか？
					</a>
				</h5>
				</div><!-- /.card-header -->
				<div id="collapseTow_Five" class="collapse" role="tabpanel" aria-labelledby="headingTow_Five" data-parent="#accordion">
				<div class="card-body">
				可能です。 新規制作、または運用中のWebサイトに対して更新頻度の高いページをシステム化することが可能です。 
				<br>お客様のご要望に応じて、使いやすく設計された最適な形のシステムを構築いたします。
				</div><!-- /.card-body -->
				</div><!-- /.collapse -->
			</div><!-- /.card -->
			<div class="card">
				<div class="card-header" role="tab" id="headingTow_six">
				<h5 class="mb-0">
					<a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseTow_six" role="button" aria-expanded="false" aria-controls="collapseTow_six">
					<span>+</span>Q.ホームページに使える写真がないのですが、撮影もしてもらえますか？
					</a>
				</h5>
				</div><!-- /.card-header -->
				<div id="collapseTow_six" class="collapse" role="tabpanel" aria-labelledby="headingTow_six" data-parent="#accordion">
				<div class="card-body">
				はい。可能です。プロが会社やお店に伺いお撮り致します。
				<br>また、よりお店の良さが伝わる写真にするためにお写真の加工も承っております。
				</div><!-- /.card-body -->
				</div><!-- /.collapse -->
			</div><!-- /.card -->
			<div class="card">
				<div class="card-header" role="tab" id="headingTow_sev">
				<h5 class="mb-0">
					<a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseTow_sev" role="button" aria-expanded="false" aria-controls="collapseTow_sev">
					<span>+</span>Q.今のホームページをリニューアルしたいのですが提案はしてもらえますか？
					</a>
				</h5>
				</div><!-- /.card-header -->
				<div id="collapseTow_sev" class="collapse" role="tabpanel" aria-labelledby="headingTow_sev" data-parent="#accordion">
				<div class="card-body">
				もちろんです！
				<br>現在の依頼の8割がリニューアルとなっております。
				<br>現状のホームページの課題を洗い出し、その解決方法をご提案させていただきます。
				</div><!-- /.card-body -->
				</div><!-- /.collapse -->
			</div><!-- /.card -->
		</div><!-- /#accordion -->
	</section>

	<!-- Q&A 料金に関して -->
	<section id="QA" class="sec">
		<div class="cate_ttl my-4 text-center">
			<h3>料金に関して</h3>
		</div>
		<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="card">
				<div class="card-header" role="tab" id="headingThe_One">
				<h5 class="mb-0">
					<a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseThe_One" role="button" aria-expanded="false" aria-controls="collapseThe_One">
					<span>+</span>Q.制作費用はどれくらいかかりますか？
					</a>
				</h5>
				</div><!-- /.card-header -->
				<div id="collapseThe_One" class="collapse" role="tabpanel" aria-labelledby="headingThe_One" data-parent="#accordion">
				<div class="card-body">
				ほとんどのケースが補助金申請を行うため、初期費用は無料となる事が多いです。
				<br>補助金申請が採択されない場合は初期費用は製作費は無料となっていますが、補助金申請代行費はかかります。
			</div><!-- /.card-body -->
				</div><!-- /.collapse -->
			</div><!-- /.card -->
			<div class="card">
				<div class="card-header" role="tab" id="headingThe_Two">
				<h5 class="mb-0">
					<a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseThe_Two" role="button" aria-expanded="false" aria-controls="collapseThe_Two">
					<span>+</span>Q.納品後の修正は費用が発生しますか？
					</a>
				</h5>
				</div><!-- /.card-header -->
				<div id="collapseThe_Two" class="collapse" role="tabpanel" aria-labelledby="headingThe_Two" data-parent="#accordion">
				<div class="card-body">
					明らかにこちらのミスである場合は当然対応いたします。
					<br>また、大抵の場合納品後1週間程度は無償にて修正を承っております。
					<br>ただしそれ以降は基本的には費用が発生いたしますので、納品前に十分に内容のご確認をお願いします。
				</div><!-- /.card-body -->
				</div><!-- /.collapse -->
			</div><!-- /.card -->
			<div class="card">
				<div class="card-header" role="tab" id="headingThe_Three">
				<h5 class="mb-0">
					<a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseThe_Three" role="button" aria-expanded="false" aria-controls="collapseThe_Three">
					<span>+</span>Q.事情により制作途中でキャンセルすることは可能ですか？
					</a>
				</h5>
				</div><!-- /.card-header -->
				<div id="collapseThe_Three" class="collapse" role="tabpanel" aria-labelledby="headingThe_Three" data-parent="#accordion">
					<div class="card-body">
					補助金申請を行う前であれば可能です。
					<br>ただし、当日までの制作やサービス料金をご請求させていただきます。
					</div><!-- /.card-body -->
				</div><!-- /.collapse -->
			</div><!-- /.card -->
			<div class="card">
				<div class="card-header" role="tab" id="headingThe_four">
				<h5 class="mb-0">
					<a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseThe_four" role="button" aria-expanded="false" aria-controls="collapseThe_four">
					<span>+</span>Q.予算があまりないのですがホームページはつくれますか？
					</a>
				</h5>
				</div><!-- /.card-header -->
				<div id="collapseThe_four" class="collapse" role="tabpanel" aria-labelledby="headingThe_four" data-parent="#accordion">
					<div class="card-body">
					予算内で制作する方法をご提案させていただきますので、まずはご相談していただけると幸いです。
					<a class="btn1 com_hover" href="https://www.raum-official.com/raum_mail/">ホームページの無料相談はこちら</a>
					</div><!-- /.card-body -->
				</div><!-- /.collapse -->
			</div><!-- /.card -->
		</div><!-- /#accordion -->
	</section>

	<!-- Q&A LAST -->
	<section id="QA_last" class="sec">
		<div class="text-center">
			<p>その他の質問はこちらから</p>
			<a class="btn1 com_hover" href="https://www.raum-official.com/raum_mail/">ホームページの無料相談はこちら</a>
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


