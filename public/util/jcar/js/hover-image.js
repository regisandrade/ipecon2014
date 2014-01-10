$(document).ready(function() { 
	$(".lightbox-image").append("<span></span>");

	$('.lightbox-image')
		.live('mouseenter',function(){
			$(this).find("img").stop()
			.animate({opacity:0.3},'normal');
		})
		.live('mouseleave',function(){
			$(this).find("img").stop()
			.animate({opacity:1},'normal');
	});
});