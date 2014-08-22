
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.17.2/build/cssreset/cssreset-min.css">
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" />
<title>WhatDoYouWant</title>
<style type="text/css">
html{
	background-image:url('../css/images/retina_wood.png');
}

body{
	overflow-y: scroll;
	overflow-x: hidden;
}

p{
	font-size:1.5em;
	margin:2em 2em 2em 5em;
}

.subtitle{
	font-weight:bold;
	margin:5em 2em 2em 2em;
	font-size:2em;
}

.notes{
	background:black;
	position:absolute;
	color:white;
	top:-2000px;
	left:-2000px;
	opacity:0.9;
}

.images{
	width:100%;
}

#container{
	background-image:url('../css/images/graphy.png');
}


#web{
	margin:5%;
}
</style>
<script src="../js/jquery.js"></script>
<script src="../js/jquery.lazyload.js"></script>
<script type="text/javascript">

function init(){
	$("img.images").lazyload({
		 threshold : 300
	});
	$("a img").load(function(){
		glue();
	});
	//$("img.images").lazyload();
	$('#webdesign').addClass('sub_selected');
	$(".notes").hover(function(){
		$(this).animate({opacity: 0}, 500);
	}, function(){
		$(this).animate({opacity: 0.9}, 500);
	});
	
	$(".notes").click(function(){
		var src = $(this).next().attr("href");
		window.location.href = src;
	});
	
	$(window).resize(function(){
		glue();
	});
	
}

function glue(){
	$("a img").each(function(){
		var position = $(this).position();
		var width = $(this).css("width");
		var height = $(this).css("height");
		$(this).parent().prev().css("width", width);
		$(this).parent().prev().css("height", height);
		$(this).parent().prev().css("left", position.left+"px");
		$(this).parent().prev().css("top", position.top+"px");			
	});
}

</script>
</head>
<body>
<? include '../ref/header.php';?>
	<div id="container">
		<div id="content" style="padding-top:90px;">
			<div id="web">
				<?php foreach($data as $info): ?>
					<div class="notes">
						<div class="subtitle"><?=$info[1]?></div>
						<p><?=$info[2]?></p>
					</div>
					<a href="<?=$info[3]?>"><img class="images" data-original="<?=$info[0]?>" alt="<?=$info[4]?>"/></a>
					<br/>
					<br/>
					<br/>
				<?php endforeach; ?>
			</div>
		</div>
		<div id="footer">
			Copyright &#169 2013-2014 All rights reserved.
		</div>
	</div>
</body>
<script src="../js/jquery.blockUI.js"></script>
<script src="../js/javascript.js"></script>
</html>  


