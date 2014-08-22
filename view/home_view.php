
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


#container{
	background:white;
}

#block{
	background:black;
	width:230px;
	height:135px;
	color:white;
	padding:20px;
	position:absolute;
	top:-280px;
	left:-280px;
	opacity:0;
	cursor:default;
}

#original_pic{
	display:none;
}

#original_text{
	padding:20px;
	z-index:1000000;
	position:absolute;
	color:white;
	background:black;
	opacity:0.7;
	width:770px;
	height:120px;
	display:none;
	overflow:auto;
}

.images{
	width:270px;
	height:175px;
}

</style>
<script src="../js/jquery.js"></script>
<script src="../js/jquery.lazyload.js"></script>
<script type="text/javascript">
//original 
var src;
var text;


function init(){
	$("img.images").lazyload({
		 threshold : 300
	});
	$('#home').addClass('sub_selected');
	$("#grid").mixitup({
		animation: {
			duration: 10000
		}
	});
	
	$(".images").hover(function(){
		var l = $(this).offset().left;
		var t = $(this).offset().top;
		var title = $(this).attr("alt");
		src = $(this).attr("src");
		text = $(this).attr("value");
		$("#block").css("opacity", "0.3");
		$("#block").css("left", l);
		$("#block").css("top", t);
		$("#block").html(title);
		$("#block").animate({
			opacity: 0.8	
		}, 100);
		$("#original_text").html(text);
	}, function(){
	});	
	
	$("#block").click(function(){
		$('#original_pic').attr("src", src);
	    $.blockUI({		
			css: blockUI_css_pic,
			overlayCSS:  { cursor:'default' }, 
            message: $('#original_pic'), 
        });
		$("body").css("overflow", "hidden");
	});
	
	$('#original_pic').click(function(){
		$("#original_text").css("display", "none");
		unblockUI();	
	});
	
	$('#original_pic').hover(function(){
		var l = $("#original_pic").offset().left;
		var t = $("#original_pic").offset().top + 365;
		$("#original_text").css("left", l);
		$("#original_text").css("top", t);
		$("#original_text").css("display", "block");
	},function(){
		$("#original_text").css("display", "none");
	});

	
	$('#original_text').hover(function(){
		$("#original_text").css("display", "block");
	},function(){
		$("#original_text").css("display", "none");
	});
	
	$("#entrance").dblclick(function(){
		alert("got you");
	});
	
	$("#new_story").click(function(){
		$.blockUI({
			css: blockUI_css_form,
			overlayCSS:  { cursor:'default' }, 
			message: $("#new_story_form")
		});
		$("body").css("overflow", "hidden");
		$("#nsf_submit").css("display", "none");
	});

	$("#nsf_submit").click(function(){
		$("#image_upload").submit();
	});
	
	$("#nsf_cancel").click(function(){
		unblockUI();	
	});
	
	$("#key").dblclick(function(){
		$("#nsf_submit").css("display", "inline");
	});
	
	$("#image_upload").submit(function(){
		event.preventDefault();		
		$("#image_uploader").load(function(){
			$("#pic").val($("#file").val().substring(12));
			$.post("../ref/info_upload.php", $("#info_upload").serialize(), function(data){
				unblockUI();
				location.reload();
			});			
		});	
	});
}

</script>
</head>
<body>
<? include '../ref/header.php';?>
	<div id="container">
		<div id="content">
			<span id="catagory_home">
				<span href="#header" class="filter cat_selected" data-filter="all"><a href="#">(___All___)</a></span>
				<span href="#header" class="filter" data-filter="0"><a href="#">MooD__@@</a></span>
				<span href="#header" class="filter" data-filter="1"><a href="#">TraveL--></a></span>
				
			</span>
			<span id="new_story">New StorY+++++</span>
			<span href="#header" class="btp"><--Back to toP</span>
			<div id="block">Text</div>
			<img id="original_pic" />
			<div id="original_text"></div>
			<ul id="grid"> 
				<?php foreach($data as $info): ?>
					<li class="mix <?=$info[2]?>">
						<img class="images" value="&lt;h3&gt;<?=$info[4]?>&lt;/h3&gt;<?=nl2br($info[0])?>" alt="<?=$info[3]?>&lt;h3&gt;<?=$info[4]?>&lt;/h3&gt;" data-original="../img/<?=$info[1]?>">
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div id="footer">
			Copyright &#169 2014 All rights reserved.
		</div>
		<div id="new_story_form">
			<br/><br/><br/>
			<form action="../ref/info_upload.php" method="post" id="info_upload">
				<span>Password</span>
				<input style="width:100px;" type="text"><span style="color:yellow;margin-right:53px;" >Uncorrect</span><br/><br/>
				<span>Title</span>
				<input name="title" style="width:100px;margin-right:150px;" type="text"><br/><br/>
				<span>Context</span>
				<textarea name="text" id="text" wrap="hard" style="height:80px;width:195px;margin-right:60px;"></textarea><br/><br/>
				<input name="pic" id="pic" type="hidden" value="pic">
				<span id="key">Catagory</span>
				<select name="cata" style="width:60px;margin-right:187px;" >
					<option value="0">心情</option>
					<option value="1">旅遊</option>
					<option value="2">其他</option>
				</select>
				<br/>
				<br/>
				
			</form>
			<form action="../ref/image_upload.php" target="image_uploader" method="post" id="image_upload" enctype="multipart/form-data">
				<span>Image</span>
				<input type="file" name="file" id="file" style="display:inline;width:200px;margin-right:50px">
				<br/>
				<br/>
				<br/>
				<br/>
				<input type="button" value="Submit" id="nsf_submit">
				<input type="button" value="Cancel" id="nsf_cancel">				
			</form>
		</div>
		<iframe src="../ref/image_upload.php" style="display:none;" id="image_uploader" name="image_uploader"></iframe>
	</div>
</body>

<script src="../js/jquery.mixitup.js"></script>
<script src="../js/jquery.blockUI.js"></script>
<script src="../js/javascript.js"></script>
</html>  

