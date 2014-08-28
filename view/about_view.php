
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
xmlns:og="http://ogp.me/ns#" 
xmlns:fb="http://www.facebook.com/2008/fbml">
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--fb OpenGraph-->
<meta property="og:description" content="Travel, mood, anything? PicturE tell whatever you want..." />
<meta property="og:title" content="what do you want? | Travel, Mood, Anything"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="http://frozenfung.com"/>
<meta property="og:image" content="http://frozenfung.com/wdyw/img/IMG_3508.png"/>
<meta property="og:image" content="http://frozenfung.com/wdyw/img/IMG_3554.png"/>
<meta property="og:image" content="http://frozenfung.com/wdyw/img/IMG_3647.png"/>
<meta property="og:site_name" content="what do you want?" />
<meta property="fb:app_id" content="707505445985105"/>
<meta property="fb:admins" content="100000112760324"/>

<link href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.17.2/build/cssreset/cssreset-min.css">
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" />
<title>WhatDoYouWant</title>
<style type="text/css">
html{
	background-image:url('../css/images/retina_wood.png');
}

#container{
	background-image:url('../css/images/lined_paper.png');
}



.title_about{
	font-family: 'Love Ya Like A Sister', cursive;
	font-size:2em;
	padding:25px 0px 25px 5px;	
}

.subtitle_about{
	font-weight:bold;
	font-size:1.5em;
	padding:20px 0px 20px 35px;
}

.context_about{
	font-weight:bold;
	width:60%;
	font-family:  'Love Ya Like A Sister', cursive;
	font-size:1.2em;
	padding:15px 0px 35px 35px;
}

</style>
<script src="../js/jquery.js"></script>
<script type="text/javascript">
function init(){
	$('#about').addClass('sub_selected');
}
</script>
</head>
<body>
<script>
	//FB SDK load
	window.fbAsyncInit = function() {
		FB.init({
		status     : true,
		appId      : '707505445985105',
		xfbml      : true,
		version    : 'v2.0'
		});
	};

	(function(d, s, id){
	 var js, fjs = d.getElementsByTagName(s)[0];
	 if (d.getElementById(id)) {return;}
	 js = d.createElement(s); js.id = id;
	 js.src = "//connect.facebook.net/en_US/sdk.js";
	 fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<? include '../ref/header.php';?>
	<div id="container">
		<div id="content" style="padding-top:70px;">
			<span id="catagory_about">
				<span href="#here" class="cat_selected"><a href="#">AbouT HerE</a></span>
				<span href="#me" class=""><a href="#">AbouT Me</a></span>
				<span href="#contact" class=""><a href="#">AbouT ContacT</a></span>
			</span>
			<span href="#header" class="btp"><a href="#">Back to toP</a></span>
			<div id="here" class="title_about">AbouT HerE&nbsp;________\</div>
				<div class="subtitle_about">創作理念</div>
				<div class="context_about">
					每天都有好多故事發生在我身邊, 我想要把那些值得記錄的故事記錄下來. <br/>記錄的方式千百種, 比起密密麻麻的文字, 圖片有時候更有直覺性及說服力. <br/>停止在字裡行間尋尋覓覓, 讓我們用更抽象更原始的方式交流. 
				</div>
				<div class="subtitle_about">素材取用</div>
				<div class="context_about">
					忘了從甚麼時候開始, 身上總是會帶著一本小本子, 它是塗鴉本也是筆記本. 它不會說話, 卻懂得傾聽; 它不曾旅行, 卻了解我所有的白日夢. 上面有些甚麼呢?<br/><br/>
					上課筆記<br/>
					心血來潮的塗鴉<br/>
					閒暇時的創作<br/>
					各種白日夢<br/>
					抄寫過氣歌曲的歌詞<br/><br/>
					不過讓我覺得最重要的還是當下的心情, 對於像我這樣不夠敏感的人來說, 先紀錄, 之後再慢慢回放, 這樣的方式對我來說是比較明快的.
					
				</div>
				<div id="me" class="title_about">AbouT Me&nbsp;__\</div>
				<div class="context_about">	
					白天學的是經濟<br/>
					晚上寫的是程式<br/>
					批判型思考<br/>
					熱愛交朋友<br/>
					覺得自己的居住的城市裏頭永遠藏著數不完的秘密<br/>
					總能發現隱藏在巷弄間<br/>
					那些早就被沒人知道名字的小確幸咖啡廳<br/>
					因為跟隨咖啡的香氣前進<br/>
					所以也常常迷路在街頭和巷尾的中間<br/>
				</div>
				
			<div id="contact" class="title_about">AbouT ContacT&nbsp;____________\</div>
			<div class="context_about">
				Facebook : 李俊鋒<br/>
				E-mail   : frozenfung@gmail.com
			</div>	
		</div>
		<div id="footer">
			Copyright &#169 2014 All rights reserved.
		</div>
	</div>
</body>
<script src="../js/jquery.blockUI.js"></script>
<script src="../js/javascript.js"></script>
</html>  


