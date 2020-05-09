<!DOCTYPE html>
<html lang="ja">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>funny.com</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
</head>

<body>

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
					<a class="nav-link" href="#skill_all">Skill</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#works">Works</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#profile">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!--top画像-->

<div id="home">
	<div class="Top">
		<img src="<?php echo get_template_directory_uri(); ?>/img/back.png" alt="">
		<div class="Top-info">
		<h1><span class="bound1">R</span><span class="bound2">a</span><span class="bound3">u</span><span class="bound4">m</span></h1>
			<h3>Web Creator</h3>
		</div>
		<div class="str1"><i class="fas fa-star"></i></div>
		<div class="str2"><i class="fas fa-star"></i></div>
		<div class="str3"><i class="fas fa-star"></i></div>
		<div class="str4"><i class="fas fa-star"></i></div>
		<div class="str5"><i class="fas fa-star"></i></div>
	</div>
</div>

<!-- info -->

<div class="bg-white m-3 text-center info">
	<div>
		<h2 class="my-3" >成果と見た目にこだわったWebサイト</h2>
		<p>デザインからコーディングまで全てお任せください</p>
	</div>
	<a href="#contact">
		<button type="button" class="btn my-3 btn1">お問い合わせ</button>
	</a>
	</div>
</a>

<!--- できること -->

<div class="row text-center cando my-5">
	<div class="text1 m-auto ">
		<h3 class="mt-2 mb-5 text-center"><span>Reum</span>  ならこんな課題を解決します</h3>
		<div class="px-3 text-left">
			<p><i class="far fa-check-square mx-1"></i>分かりやすいLPの作成を作成したい</p>
			<p><i class="far fa-check-square mx-1"></i>デザインからコーディングまで任せたい</p>
			<p><i class="far fa-check-square mx-1"></i>社内のプログラマーが足りない</p>
		</div>
	</div>
</div>


<!-- About -->

<section id="about">
	<div class="about text-center my-5 mx-0">
		<div>
			<h3 class="text-md-left">About</h3>
		</div>
		<div class="about-con">
				<img src="<?php echo get_template_directory_uri(); ?>/img/PC.png" alt="About" class="img-fluid">
			<div class="about_text m-auto text1 text-lg-left">
				<p>サイト設計からコーディングまで対応しています。</p>
				<p>強みは広告運用の経験よりサイトの訪問者の反応がいいLPの設計、デザインが可能なこと。
				</p>
				<p>お客様がお持ちの大切な価値を利用者にわかりやすく伝えることを第一とし、<br>
					「シンプル・見やすい・分かりやすい・伝わる」Webデザインにて設計します。</p>
			</div>
		</div>
	</div>
</section>


<!-- スキル -->

<section id="skill_all">
	<div class="skills_contents">
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
<section id="works">
	<div class="works text-center">
		<div>
			<h3 class="text-md-left">Works</h3>
		</div>
	</div>
</section>


<!-- profile -->
<section id="profile">
	<div class="profile text-center">
		<div>
			<h3 class="text-md-left">profile</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 text-center">
			<div class="prof_pic">
				<img  src="<?php echo get_template_directory_uri(); ?>/img/pro2.JPG" width="200px" height="210px">
			</div> <!-- prof_pic -->
			<div class="prof_info text-center">
				<p class="prof_name"> 佐伯　真</p>
				<P class="prof_name2"> (Saeki Shin)</p>
				<p class="prof-cont">
					京都大学卒業後、経理の仕事を行うが、webコーディングの魅力・奥深さにひかれ、webエンジニアに転身。
					趣味は筋トレと読書。
				</p>
			</div>
		</div>

		<div class="col-md-6 text-center">
			<div class="prof_pic">
				<img src="<?php echo get_template_directory_uri(); ?>/img/pro1.JPG" width="200px" height="210px">
			</div> <!-- prof_pic -->
			<div class="prof_info">
				<p class="prof_name"> 吉田　幸世</p>
				<P class="prof_name2"> (Yoshida Sachiyo)</p>
				<p class="prof-cont">
					大学院でプログラミングを勉強し、その後エンジニアとしてメーカーに３年勤務。広告運用の経験を生かし、お客様とエンドユーザー様の双方にとってより使いやすくわかりやすいサイト作りを心がけています。
				</p>
			</div>
		</div>
	</div>
</section>

<!--お問い合わせ-->
<section id="contact">
	<div class="contact_content">
		<div class="contact text-center">
			<div>
				<h3 class="text-md-left">Contact</h3>
			</div>
		</div>
		<div class="contact_info py-5">
			<form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSe0V8KauHdy95ioQUBa5zQBNK7trooGn6p6vjsNVMYdjw1mFw/formResponse" target="_self" method="POST" id="mG61Hd">
				<div class="text-center">
					<p>お見積もりや案件依頼などお気軽にお問い合わせください。</p>
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
<section>

<section>
	<a href="#contact">
		<button type="button" class="nav_btn  btn my-3 btn1">お問い合わせ</button>
	</a>
</section>


<!--- Footer -->
<footer>
	<div class="container-fluid p-0">
		<div class="row text-center">
			<div class="col-12">
				<hr class="light">
				<h5>&copy; funny.com</h5>
			</div>
		</div>
	</div>
</footer>


<script>
	'use strict';

	var j$ = jQuery,
    $nav = j$("#navigation"),
    $slideLine = j$("#slide"),
    $currentItem = j$(".current-item");

	j$(function(){  
		// Menu has active item
		if ($currentItem[0]) {
			$slideLine.css({
			"width": $currentItem.width(),
			"left": $currentItem.position().left
		});
	}
	
	// Underline transition
	j$($nav).find("li").hover(
		// Hover on
		function(){
		$slideLine.css({
			"width": j$(this).width(),
			"left": j$(this).position().left
		});
		},
		// Hover out
		function(){
		if ($currentItem[0]) {
			// Go back to current
			$slideLine.css({
			"width": $currentItem.width(),
			"left": $currentItem.position().left
			});
		} else {
			// Disapear
			$slideLine.width(0);
		}
		}
	);
});

</script>
</body>
</html>


