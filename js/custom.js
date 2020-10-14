$(document).ready(function () { 
    //banner
	$('.nowjss').slick({
	  dots: true,
	  infinite: true,
	  speed: 500,
	  slidesToShow: 3,
	  slidesToScroll:1,
	  vertical: false,
	  pauseOnHover: false,
	  autoplay:true,
    nextArrow:false,
    prevArrow:false,
    fade:false,
     responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1
      }
    }
  ]
	  //nextArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--right"><img src="images/Arrow.svg" /></span>',
  	 // prevArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--left"><img src="images/Arrow.svg" /></span>'     
	});
	
    $('.Navigation-list li a').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {
          var $target = $(this.hash);
          $target = $target.length && $target
          || $('[name=' + this.hash.slice(1) +']');
          if ($target.length) {
            var targetOffset = $target.offset().top - 55;
            $('html,body')
            .animate({scrollTop: targetOffset}, 1000);
           return false;
          }
        }
      });
      
    
    wow = new WOW(
      {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       true,       // default
      live:         true        // default
    }
    )
    wow.init();
                    
                    
                    
	//banner
	$('.SliderJs').slick({
	  dots: true,
	  infinite: true,
	  speed: 500,
	  slidesToShow: 1,
	  slidesToScroll:1,
	  vertical: false,
	  pauseOnHover: false,
	  autoplay:true,
    nextArrow:false,
    prevArrow:false,
    fade:true
   
	  //nextArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--right"><img src="images/Arrow.svg" /></span>',
  	 // prevArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--left"><img src="images/Arrow.svg" /></span>'     
	});


	

$('.Navigation--collapsed').click(function() {
  $('.Overlay').toggleClass('Overlay--on');
  $('.BurgerMenu').toggleClass('BurgerMenu--on');
});


  $(window).scroll(function(){
      var sticky = $('nav'),
      scroll = $(window).scrollTop();
    if (scroll >= 100) sticky.addClass('fixed');
      else sticky.removeClass('fixed');
  });

});
  
  
  
  
  