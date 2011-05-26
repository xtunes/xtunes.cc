$(document).ready(function() {
	$(".sub-menu").parent("li").addClass("parent");
	$(".sub-menu li:first-child").addClass("first");
	$(".sub-menu li:last-child").addClass("last");

	$(".topmenu .sub-menu .parent a").click(function() {
		$(this).parent().children("ul").slideToggle(200);
		$(this).parent().toggleClass("open");
	});
			
	$("ul.tabs").tabs("> .tabcontent", {tabs: 'li'});
	$(".row .col:first-child").addClass("alpha");
	$(".row .col:last-child").addClass("omega"); 
	
// toggle content
	$(".toggle_content, .highlighter").hide();
	
	$("h3.toggle").toggle(function(){
		$(this).addClass("active");
		}, function () {
		$(this).removeClass("active");
	});
	
	$("h3.toggle").click(function(){
		$(this).next(".highlighter").slideToggle();
		$(this).next(".toggle_content").slideToggle();
	});

// pagination
	var islast = $(".pagination .inner a:last").hasClass('page_current');
	if(islast) $(".pagination .inner").css('padding-right','35px');

	if ($.browser.msie  && parseInt($.browser.version) == 7) {
	 	var ispageprev = $(".pagination .inner a").hasClass('page_prev');
		if(ispageprev) $(".pagination, .pagination .inner").css('padding-left','0px');
	}


// gallery
	$(".gl_col_2 .gallery-item::nth-child(2n)").addClass("nomargin");
	$(".gl_col_3 .gallery-item::nth-child(3n)").addClass("nomargin");
	$(".gl_col_4 .gallery-item::nth-child(4n)").addClass("nomargin");

	$("a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow', slideshow:3000, autoplay_slideshow: false});

// comments scroll
	$('.link-top').click(function () {
		$('body,html').animate({
			scrollTop: 0
		},
		1500);
	});
	$('.link-bottom, .link-addcomment').click(function () {
		$('body,html').animate({
			scrollTop: $('#comments').offset().top
		},
		1500);
		return false;
	});
		
});


// minigallery
$(document).ready(function() {
	$(".minigallery").jCarouselLite({
		btnNext: ".next",
		btnPrev: ".prev",
		scroll: 2,
		visible: 4,
		speed: 400,
		mouseWheel: true,
		circular:false,
		easing: "easeInOutCubic"
	});

	$(".minigallery a[rel^='prettyPhoto']").prettyPhoto({overlay_gallery: false});
});


// Pricing table
$(document).ready(function() {
	$(".table-pricing td.table-row-title:even").addClass("even");
	$(".table-pricing").columnHover({eachCell:true, hoverClass:'tablecolhover', includeSpans:false, ignoreCols: [1]});
});



$(function () {  
     $(window).scroll(function () {  
         if ($(this).scrollTop() != 0) {  
             $('.link-top').fadeIn();  
         } else {  
             $('.link-top').fadeOut();  
         }  
     });  
     $('.link-top').click(function () {  
         $('body,html').animate({  
             scrollTop: 0  
         },  
         1500);  
     });  
 });


// Testimonials
$(document).ready(
	function(){
		$('#quotes').innerfade({
			animationtype: 'fade',
			speed: 'slow',
			timeout: 5000,
			type: 'sequence',
			containerheight: '115px'
		});
		$('.quote-text').css('margin','0');
});