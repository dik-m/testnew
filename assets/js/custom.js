$( document ).ready(function() {
	
if($('.navbar #menu-main-menu li').hasClass('menu-item-has-children')){
    $('li.menu-item-has-children').addClass('dropdown-toggle');
    $('ul.sub-menu').addClass('dropdown-menu');
    $('ul.sub-menu li').addClass('dropdown-item ');
  }
//$(".carousel-inner .carousel-item:first").addClass("active");

//$(".image-text").addClass("flex-column-reverse flex-lg-row");

// $(window).scroll(function () {
// 		if ($(this).scrollTop() > 50) {
// 			$('#back-button').fadeIn();
// 		} else {
// 			$('#back-button').fadeOut();
// 		}
// 	});
// 	// scroll body to 0px on click
// 	$('#back-button').click(function () {
// 		$('body,html').animate({
// 			scrollTop: 0
// 		}, 400);
// 		return false;
// 	});
$(".bottom-section").show();
$(".toggle-true-section").hide();
$(function () {
	$("#switch-id").change(function () {
		if ($(this).is(":checked")) {
			$(".bottom-section").hide();
			$(".toggle-true-section").show();
		} else {
			$(".bottom-section").show();
			$(".toggle-true-section").hide();
		}
	});
});


	
$(function(){
			$('.slider-thumb').slick({
					autoplay: true,
					vertical: true,
					infinite: true,
					verticalSwiping: true,
					slidesPerRow: 5,
					slidesToShow: 5,
					asNavFor: '.slider-preview',
					focusOnSelect: true,
					prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-up"></i></button>',
					nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-down"></i></button>',
					responsive: [
						{
							breakpoint: 800,
							settings: {
								vertical: false,
							}
						},
						{
							breakpoint: 800,
							settings: {
								vertical: false,
								slidesPerRow: 2,
								slidesToShow: 2,
							}
						},
					]
				});
				$('.slider-preview').slick({
					autoplay: true,
					vertical: true,
					infinite: true,
					slidesPerRow: 1,
					slidesToShow: 1,
					asNavFor: '.slider-thumb',
					arrows: false,
					draggable: false,
					responsive: [
						{
							breakpoint: 800,
							settings: {
								vertical: false,
								fade: true,
							}
						},
					]
				});
				
				
		});	
	



	
	
	
	            $('.tb-image-slide').slick({
				infinite: true,
				slidesToShow: 1, // Shows a three slides at a time
				slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
				arrows: true, // Adds arrows to sides of slider
				dots: false, // Adds the dots on the bottom
				responsive: [
					{
					  breakpoint: 1024,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						
					  }
					},
					{
					  breakpoint: 768,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					},
					
				
				  ]
			  });
	
	
	      
	            $('.tb-image-slide-2').slick({
				infinite: true,
				slidesToShow: 1, // Shows a three slides at a time
				slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
				arrows: true, // Adds arrows to sides of slider
				dots: false, // Adds the dots on the bottom
				responsive: [
					{
					  breakpoint: 1024,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						
					  }
					},
					{
					  breakpoint: 768,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					},
					
				
				  ]
			  });
	
	
	$('.tb-image-slide-3').slick({
				infinite: true,
				slidesToShow: 1, // Shows a three slides at a time
				slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
				arrows: true, // Adds arrows to sides of slider
				dots: false, // Adds the dots on the bottom
				responsive: [
					{
					  breakpoint: 1024,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						
					  }
					},
					{
					  breakpoint: 768,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					},
					
				
				  ]
			  });
	
	$('.tb-image-slide-4').slick({
				infinite: true,
				slidesToShow: 1, // Shows a three slides at a time
				slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
				arrows: true, // Adds arrows to sides of slider
				dots: false, // Adds the dots on the bottom
				responsive: [
					{
					  breakpoint: 1024,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						
					  }
					},
					{
					  breakpoint: 768,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					},
					
				
				  ]
			  });
	
	
	$('.tb-image-slide-5').slick({
				infinite: true,
				slidesToShow: 1, // Shows a three slides at a time
				slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
				arrows: true, // Adds arrows to sides of slider
				dots: false, // Adds the dots on the bottom
				responsive: [
					{
					  breakpoint: 1024,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						
					  }
					},
					{
					  breakpoint: 768,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					},
					
				
				  ]
			  });
	
	
	
	
	       $('.leads-projects').slick({
				infinite: false,
				slidesToShow: 2.5, // Shows a three slides at a time
				slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
				arrows: true, // Adds arrows to sides of slider
				dots: false, // Adds the dots on the bottom
				responsive: [
					{
					  breakpoint: 1024,
					  settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						
					  }
					},
					{
					  breakpoint: 700,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					},
					
				
				  ]
			  });
	
	
	
	     $('.we-are').slick({
				infinite: true,
				slidesToShow:1, // Shows a three slides at a time
				slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
				arrows: true, // Adds arrows to sides of slider
				dots: false, // Adds the dots on the bottom
				responsive: [
					{
					  breakpoint: 1024,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						
					  }
					},
					{
					  breakpoint: 768,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					},
					
				
				  ]
			  });
	
	
	       $('.offrs-holder').slick({
  centerMode: false,
  centerPadding: '60px',
  slidesToShow: 3,
 dots: true,
	arrows: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
		centerMode: false,
        arrows: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 767,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

	
	
          $('.right-image-slider').slick({
				infinite: true,
				slidesToShow: 1, // Shows a three slides at a time
				slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
				arrows: true, // Adds arrows to sides of slider
				dots: false, // Adds the dots on the bottom
				responsive: [
					{
					  breakpoint: 1024,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						
					  }
					},
					{
					  breakpoint: 768,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					},
					
				
				  ]
			  });
	
	
	 $('.three-image-slider').slick({
  centerMode: false,
  centerPadding: '60px',
  slidesToShow: 3,
 dots: false,
	arrows: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
		centerMode: false,
        arrows: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 767,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
	
	

	
//jQuery('.services-tab-section-smm .tab-holder ul.tab li').on('click', function($){
   //$('.services-tab-section-smm .tab-holder ul.tab li').removeClass('active');
  // $(this).addClass('active');
//});	

	
	
	
$('.top-link-bar li ').click(function(){
    $('.top-link-bar li ').removeClass("active");
    $(this).addClass("active");
});	
	
	
$('.menu-button').on('click', function () {

    $('.animated-menu').toggleClass('open');
  });
	
	
$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') ) {
        $(this).collapse('hide');
    }
});	
	
	


	
	
	
});


  





