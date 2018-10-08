$( document ).ready(function() {

	// Dropdown menu handler
	$('.dropdown-menu').find('form').on('click', function (e) {
		e.stopPropagation();
	});

	// Mobile Categories
	var select_menu = '<select class="form-control">';
	$(".categories a").each(function() {
		var el = $(this);   
		select_menu += '<option value="'+el.attr("href")+'"';
		if (el.hasClass("active")) select_menu += ' selected';
		select_menu += '>'+el.html().replace(/<span>.*<\/span>/gi,'')+'</option>';
	});                     
	select_menu += '</select>';
	$(select_menu).appendTo(".mobile-categories");
	$(".mobile-categories select").change(function() {
		window.location = $(this).find("option:selected").val();
	});

	// Slider (on Front Page)
	$(".featured").slidesjs({
		width: 900,
		height: 300,
		navigation: false,
		play: {
			active: false,
			effect: "slide",
			interval: 4000,
			auto: true,
			swap: true,
			pauseOnHover: true,
			restartDelay: 2500
		}
	});

	// Carousel Thumnails Opacity Effect (on Classified detail page)
	$('#carousel-detail-classified').on('slid.bs.carousel', function(e) {
		var carouselData = $(this).data('bs.carousel');
		var currentIndex = carouselData.getItemIndex(carouselData.$element.find('.item.active'));
		$('#thumbs-detail-classified ul li').removeClass('active');
		$('#thumbs-detail-classified ul li[data-slide-to="'+currentIndex+'"]').addClass('active');
	});
	
	$('#thumbs-detail-classified ul li').on('click', function() {
		$('#thumbs-detail-classified ul li').removeClass('active');
		$(this).addClass('active');
	});

});