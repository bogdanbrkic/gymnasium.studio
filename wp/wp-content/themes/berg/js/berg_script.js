(function($) {

	"use strict"; // Start of use strict

	if($(".right_sub").length) {
		$('.right_sub').appendTo('.menu');
	}


	/* Anchor Scroll */
	$(window).scroll(function(){
		if ($(window).scrollTop() > 100) {
			$(".logo a").trigger('mouseenter');
			$('body').addClass('open');
			
		}
		else {
			$('body').removeClass('open');
			$(".logo a").trigger('mouseover');
			$('.sub_menu a').removeClass('active')
		}
	});

	/* Titles Color */
	$('.intro_text, .simple_stat').each(function(){
		var color = $(this).attr('data-color');
		if (color){
			$(this).find('strong').css('color', color);	
			$(this).find('b').css('color', color);	
		}
	});

	$( ".date_arrival, .date_departure" ).datepicker();
	
	/* Section Background */
	$('.image_bck').each(function(){
		var image = $(this).attr('data-image');
		var gradient = $(this).attr('data-gradient');
		var color = $(this).attr('data-color');
		var blend = $(this).attr('data-blend');
		var opacity = $(this).attr('data-opacity');
		var position = $(this).attr('data-position');
		if (image){
			$(this).css('background-image', 'url('+image+')');	
		}
		if (gradient){
			$(this).css('background-image', gradient);	
		}
		if (color){
			$(this).css('background-color', color);	
		}
		if (blend){
			$(this).css('background-blend-mode', blend);	
		}
		if (position){
			$(this).css('background-position', position);	
		}
		if (opacity){
			$(this).css('opacity', opacity);	
		}
	});

	/* Bootstrap */
	$('[data-toggle="tooltip"]').tooltip();
	$('[data-toggle="popover"]').popover();
	
	/* Over */
	$('.over, .head_bck').each(function(){
		var color = $(this).attr('data-color');
		var image = $(this).attr('data-image');
		var opacity = $(this).attr('data-opacity');
		var blend = $(this).attr('data-blend');
		if (color){
			$(this).css('background-color', color);	
		}
		if (image){
			$(this).css('background-image', 'url('+image+')');	
		}
		if (opacity){
			$(this).css('opacity', opacity);	
		}
		if (blend){
			$(this).css('mix-blend-mode', blend);	
		}
	});

	/*Increase-Decrease*/
    $('.increase-qty').on("click", function(e){
    	var qtya = $(this).parents('.add-to-cart').find('.qty').val();
    	var qtyb = qtya * 1 + 1;
    	$(this).parents('.add-to-cart').find('#qty').val(qtyb);
		e.preventDefault();
	});
	$('.decrease-qty').on("click", function(e){
    	var qtya = $(this).parents('.add-to-cart').find('#qty').val();
    	var qtyb = qtya * 1 - 1;
    	if (qtyb < 1) {
            qtyb = 1;
        }
    	$(this).parents('.add-to-cart').find('#qty').val(qtyb);
		e.preventDefault();
	});

	

	/*Sub Menu*/
	$('.menu-item-has-children').on({
		mouseenter:function(){
			$(this).find('.mega-menu, .search_menu').stop().fadeIn('fast');
		},
		mouseleave:function(){
			$(this).find('.mega-menu, .search_menu').stop().fadeOut('fast');
		}
	});





	


	/*Wow*/
	new WOW(
		{
	      boxClass:'wow', animateClass: 'animated', offset:0, mobile:true, live:true       
	    }
		).init();
	
	
	
	

	/* Menu */
	$('.main_menu').on("click", function(e){
		$(this).parents('header').toggleClass('tm');	
	});

	

	/* Search Hover */
	$('.search_btn').on({
		mouseenter:function(){
			$(this).find('.se_cont').toggleClass('active');
		},mouseleave:function(){
			$(this).find('.se_cont').toggleClass('active');
		}
	});

	/* Btns Hover */
	$('.basket_btn').on({
		mouseenter:function(){
			$(this).find('.bask_cont').toggleClass('active');
		},mouseleave:function(){
			$(this).find('.bask_cont').toggleClass('active');
		}
	});
	 

	/*Scroll Effect*/
	$('.intro_down, .go').on("click", function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top
		}, 300);
		e.preventDefault();
	});

	/*Ajax Form*/
	if($("form[data-fw-form-id]").length) {
		fwForm.initAjaxSubmit({
			selector: 'form[data-fw-form-id][data-fw-ext-forms-type="contact-forms"]',
		});
	}

	/*Gallery Lightbox*/
	$('.lightbox').magnificPopup({ 
	  type: 'image',
	  gallery:{
	    enabled:true
	  }
	});

	/*OWL Carousel in Intro*/
	if ($('.intro_wrapper .intro_item').length>1) {
		
		if($('#video_background').length==1) {
			$(".intro_wrapper").owlCarousel({
		 		navigation : true, responsive: true, responsiveRefreshRate : 200, responsiveBaseElement:window, slideSpeed : 200, addClassActive:true,
				paginationSpeed : 200, rewindSpeed : 200, singleItem:true, autoPlay : true, transitionStyle:"fade",
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
				afterAction: function(current) {
			        current.find('video').get(0).play();
			    }
			});
		}else {
			$(".intro_wrapper").owlCarousel({
		 		navigation : true, responsive: true, responsiveRefreshRate : 200, responsiveBaseElement:window, slideSpeed : 200, addClassActive:true,
				paginationSpeed : 200, rewindSpeed : 200, singleItem:true, autoPlay : true, transitionStyle:"fade",
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			});
		}
	}

	$(".single_wrapper").owlCarousel({
 		navigation : true, responsive: true, responsiveRefreshRate : 200, responsiveBaseElement:window, slideSpeed : 200, addClassActive:true,
		paginationSpeed : 200, rewindSpeed : 200, singleItem:true, autoPlay : true, autoHeight : true,
		navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
	});
	$(".mac_wrapper").owlCarousel({
 		navigation : true, responsive: true, responsiveRefreshRate : 200, responsiveBaseElement:window, slideSpeed : 200, addClassActive:true,
		paginationSpeed : 200, rewindSpeed : 200, singleItem:true, autoPlay : true, transitionStyle:"fade",
		navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
	});
	$(".review_single_wrapper").owlCarousel({
 		navigation : true, responsive: true, responsiveRefreshRate : 200, responsiveBaseElement:window, slideSpeed : 200, addClassActive:true,
		paginationSpeed : 200, rewindSpeed : 200, singleItem:true, autoPlay : true,
		navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
	});
	$(".mid_wrapper").owlCarousel({
 		navigation : true, responsive: true, responsiveRefreshRate : 200, responsiveBaseElement:window, slideSpeed : 200, addClassActive:true,
		paginationSpeed : 200, rewindSpeed : 200,  autoPlay : true, transitionStyle:"fade", items:3, 
		 itemsMobile : [570,1], itemsTablet: [768,2], itemsDesktopSmall : [1024,2],
		navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
	});

	$(".menu_wrapper").owlCarousel({
 		navigation : true, responsive: true, responsiveRefreshRate : 200, responsiveBaseElement:window, slideSpeed : 200, addClassActive:true,
		paginationSpeed : 200, rewindSpeed : 200,  autoPlay : false, transitionStyle:"fade", items:4, 
		 itemsMobile : [570,1], itemsTablet: [768,2], itemsDesktopSmall : [1024,2],
		navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
	});
	$(".film_wrapper").owlCarousel({
 		navigation : true, responsive: true, responsiveRefreshRate : 200, responsiveBaseElement:window, slideSpeed : 200, addClassActive:true,
		paginationSpeed : 200, rewindSpeed : 200,  autoPlay : true, transitionStyle:"fade", items:6, 
		navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
	});

	$(".mid_wrapper_two").owlCarousel({
 		navigation : true, responsive: true, responsiveRefreshRate : 200, responsiveBaseElement:window, slideSpeed : 200, addClassActive:true,
		paginationSpeed : 200, rewindSpeed : 200, autoPlay : true, transitionStyle:"fade", items:2, 
		 itemsMobile : [479,1], itemsTablet: [768,2], itemsDesktopSmall : [1024,2],
		navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
	});
	/*OWL Carousel in Partners*/
	$(".partners_wrapper").owlCarousel({
 		navigation : true, responsive: true, responsiveRefreshRate : 200, slideSpeed : 200, paginationSpeed : 200, rewindSpeed : 500,
		addClassActive : true, navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	});


	/*Tabs*/
	$('.tabs .tabs-ul a').on("click", function(e){
		var link = $(this).attr('href');
		$(this).parents('.tabs').find('.tabs-ul li').removeClass('active');
		$(this).parents('li').addClass('active');
		$(this).parents('.tabs').find('.tab-pane').removeClass('active in');
		$(this).parents('.tabs').find(link).addClass('active in');
		e.preventDefault();
	});

	/*Progress Bars*/
	$('.progress-bar').each(function(){
		var percent = $(this).attr('aria-valuenow');
		var color= $(this).attr('data-color');
		$(this).css('width',percent+'%');
		$(this).css('background-color',color);
	});

	
	/* Countdown */
	$('.countdown').each(function(){
		var year = $(this).attr('data-year');
		var month = $(this).attr('data-month');
		var day = $(this).attr('data-day');
		$(this).countdown({until: new Date(year,month-1,day)});

	});
	
	/* Twitter Feed */

    $('.tweets-feed').each(function(index) {
       jQuery(this).attr('id', 'tweets-' + index);
    }).each(function(index) {
       
       var TweetConfig = {
           "id": jQuery('#tweets-' + index).attr('data-widget-id'),
           "domId": '',
           "maxTweets": jQuery('#tweets-' + index).attr('data-amount'),
           "enableLinks": false,
           "maxTweets": 2,
           "showUser": false,
           "showTime": false,
           "dateFunction": '',
           "showRetweet": false,
           "customCallback": handleTweets
       };
       function handleTweets(tweets) {
           var x = tweets.length;
           var n = 0;
           var element = document.getElementById('tweets-' + index);
           var html = '<ul class="slides">';
           while (n < x) {
               html += '<li>' + tweets[n] + '</li>';
               n++;
           }
           html += '</ul>';
           element.innerHTML = html;
           return html;
       }
       twitterFetcher.fetch(TweetConfig);
   	});

    if ($(window).width() > 992) {
		$('.fw-row').each(function(){
			setEqualHeight($(this).find('.bordered_block:not(".col-md-12")'));
			setEqualHeight($(this).find('.block'));
		});
	}

	$('.fw-row').each(function(){
		setEqualHeight($(this).find('.bordered_block:not(".col-md-12")'));
		setEqualHeight($(this).find('.block'));
	});

	$('.mid_wrapper').each(function(){
		setEqualHeight($(this).find('.owl-item'));
	});


	$(window).resize(function() {

	    if ($(window).width() > 992) {
			$('.fw-row').each(function(){
				setEqualHeight($(this).find('.bordered_block:not(".col-md-12")'));
				setEqualHeight($(this).find('.block'));

			});

		}
		
		$('.fw-row').each(function(){
			setEqualHeight($(this).find('.bordered_block:not(".col-md-12")'));
			setEqualHeight($(this).find('.block'));
		});
		$('.mid_wrapper').each(function(){
			setEqualHeight($(this).find('.owl-item'));
		});

		if($(".intro_wrapper .intro_item").length > 1) {
			$('.intro_wrapper').data('owlCarousel').reinit();
		}

	});
  	

  	

  	jQuery(window).load(function(){

		/*Masonry*/
		$('.masonry').masonry({
			itemSelector: '.masonry-item',
		});
	
		
	});

	/* Lettering */
	if ($(window).width() > 992) {
		$("header .logo a b").lettering();
		$("header .logo span").each(function(){
		 	var min = 0;
		 	var max = 50;
		 	var randomNumber = Math.floor(Math.random()*(max-min+1)+min);
		 	$(this).css('transition-delay', '0.'+randomNumber+'s');
		 });
	}

	
})(jQuery);



 /*Boxes AutoHeight*/
function setEqualHeight(columns)
{
	var tallestcolumn = 0;
	columns.each(
		function()
		{
			jQuery(this).css('height','auto');
			var currentHeight = jQuery(this).height();
			if(currentHeight > tallestcolumn)
				{
				tallestcolumn = currentHeight;
				}
		}
	);
columns.height(tallestcolumn);
}


