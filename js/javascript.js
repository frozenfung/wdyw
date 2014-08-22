

var browse_height, browse_width;
var blockUI_css = {
	left:'35%',
	width:'30%',
	border: 'none', 
	padding: '15px', 
	backgroundColor: '#000', 
	'-webkit-border-radius': '10px', 
	'-moz-border-radius': '10px', 
	opacity: .8, 
	color: '#fff' 
}

var blockUI_css_form = {
	top:($(window).height()-500) /2 + 'px',
	left:($(window).width()-430) /2 + 'px',
	border: 'none', 
	padding: '15px', 
	backgroundColor: '#000', 
	'-webkit-border-radius': '10px', 
	'-moz-border-radius': '10px', 
	opacity: .8, 
	color: '#fff',
	cursor: 'default' 
}

var blockUI_css_pic = {
	height: '20%',
	top:  ($(window).height()-525) /2 + 'px',
	left: ($(window).width()-810) /2 + 'px', 
	border: 'none',  
	cursor: 'default' 
}

function unblockUI(){
	$("body").css("overflow", "auto");
	setTimeout($.unblockUI, 1);	
}



$(function(){
	browse_width = $(window).width();
	browse_height = $(window).height();
	$.blockUI({
		css: blockUI_css,
		message: $("#block_UI")
	});
	$(window).load(function(){
		setTimeout($.unblockUI, 1);
	});

	$(".header_title").click(function(){
		self.location.href = "home.php"; 
	});
	
	$(".label span").hover(function(){
		$(this).css('padding-top', 35);
	}, function(){
		$(this).css('padding-top', 20);
	});	
	
	$(".label span").click(function(){
		self.location.href = $(this).attr('id') + ".php";
		
	});	
	
	$(".btp").click(function(){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top
		}, 1000);
		event.preventDefault();
	});
	
	
	//home
	$("#catagory_home span").click(function(){
		$("#block").css("opacity", "0");
		$("#catagory_home .cat_selected").removeClass("cat_selected");
		$(this).addClass('cat_selected');
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top
		}, 1000);
		event.preventDefault();
	});
	
	

	

	//about
	$("#catagory_about span").click(function(){
		$("#catagory_about .cat_selected").removeClass("cat_selected");
		$(this).addClass('cat_selected');
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top
		}, 1000);
		event.preventDefault();
	});
	init();
});