$(function() {
	// home carousel
	$('.home .carousel-home').jcarousel({
		initCallback: carouselInit,
		buttonPrevHTML: null,
		buttonNextHTML: null,
		scroll: 5
	});
	
	// resource carousel
	$('.resources').jcarousel({
		initCallback: carouselInit,
		buttonPrevHTML: null,
		buttonNextHTML: null,
		scroll: 1
	});
	
	// newsletter
	$(".home-newsletter > a").click(function(e) {
		e.preventDefault();
		$(this).parent().find("form").slideToggle("fast");
	});
	
	// team roundabout
	$(".team-images").roundabout({
		minScale: 0.1, 
		clickToFocusCallback: function(e) { 
			var items = $(".team-images li");
			var index = items.index(items.siblings(".roundabout-in-focus"));
			$(".team-texts li").hide().eq(index).show();
		}
	});
	$(".team-texts li").eq(0).show();
	$(".carousel-arrow.people.left").click(function(e) {
		$(".team-images").roundabout("animateToPreviousChild");
	});
	$(".carousel-arrow.people.right").click(function(e) {
		$(".team-images").roundabout("animateToNextChild");
	});
});


function carouselInit(carousel) {
	var list = carousel.list;
	var page = 0;
	var total = Math.ceil(carousel.size() / carousel.options.scroll);
	if (total > 1) {
		var html = '<ul class="cpager">';
		for (var i = 0; i < total; i++) {
			html += '<li><a href="#" rel="'+(i+1)+'" title=""></a></li>';
		}
		html += "</ul>";
		list.closest(".iwrapper").append(html);
		$('.cpager li').eq(0).addClass("current");
	}
	$('.carousel-arrow.right').bind('click', function(e) {
		e.preventDefault();
		if (page < total - 1) {
			page++;
			setActivePage(page);
			carousel.scroll(page * carousel.options.scroll + 1);
		}
	});

	$('.carousel-arrow.left').bind('click', function(e) {
		e.preventDefault();
		if (page > 0) {
			page--;
			setActivePage(page);
			carousel.scroll(page * carousel.options.scroll + 1);
		}
	});
	$('.cpager a').bind('click', function(e) {
		e.preventDefault();
		page = $.jcarousel.intval($(this).attr("rel")) - 1;
		setActivePage(page);
		carousel.scroll(page * carousel.options.scroll + 1);
	});
	function setActivePage(index) {
		$('.cpager a').parent().removeClass("current").eq(index).addClass("current");
	}
};

