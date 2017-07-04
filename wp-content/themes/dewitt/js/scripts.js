
  
  
  
  // waypoints
  
  
  var createWaypoint = function(selector, offsetVal, customFunc, reverse) {
     reverse = typeof reverse !== 'undefined' ? reverse: false
     offsetVal = typeof offsetVal !== 'undefined' ? offsetVal: "50%"
     selector.waypoint({
         handler: function(direction) {
             if (reverse === true) {
 
                 if ( direction === 'down' ) {
                     selector.addClass('visible')
                     if(typeof customFunc === 'function' && customFunc) {
                         customFunc.call(this);
                     }
                 } else {
                     selector.removeClass('visible')
                 }
 
             } else {
 
                 if ( direction === 'down' ) {
                     selector.addClass('visible')
                     if(typeof customFunc === 'function' && customFunc) {
                         customFunc.call(this);
                     }
                     this.destroy()
                 }
 
             }
         },
         offset: offsetVal
     })
 }
 
 
 
 	 // document ready
 
 
 jQuery(document).ready(function () {
	 
	 
	$('body.page-template-page-home .top_line').each(function (index) {
    var characters = $(this).text().split("");
    
    $this = $(this);
    $this.empty();
    $.each(characters, function (i, el) {
    $this.append("<span class='letter-span'>" + el + "</span");
    });

});



$('body.page-template-page-home .middle_line').each(function (index) {
    var characters = $(this).text().split("");
    
    $this = $(this);
    $this.empty();
    $.each(characters, function (i, el) {
    $this.append("<span class='letter-span'>" + el + "</span");
    });

});


$('body.page-template-page-home .bottom_line').each(function (index) {
    var characters = $(this).text().split("");
    
    $this = $(this);
    $this.empty();
    $.each(characters, function (i, el) {
    $this.append("<span class='letter-span'>" + el + "</span");
    });

});
	 
	 
	 $('#banner').addClass('visible');
	 
	 
	 
	 
	 
// waypoints

 	  var waypoint = window.createWaypoint
 
     var section1 = $('#section1')
 
     waypoint(section1, '350px')
     
     
     
     var section2 = $('#section2')
 
     waypoint(section2, '250px')
     
     
     var section2_bottom = $('.section2_bottom')
 
     waypoint(section2_bottom, '350px')
     
     
     var section3 = $('#section3')
 
     waypoint(section3, '350px')
     
     
     var section4 = $('#section4')
 
     waypoint(section4, '350px')
     
     
     var section5 = $('#section5')
 
     waypoint(section5, '350px')
     
     
     var section6 = $('#section6')
 
     waypoint(section6, '350px')
     
     
     var footer = $('#colophon')
 
     waypoint(footer, '350px')
     
     
     var pagecontent = $('#main')
 
     waypoint(pagecontent, '250px')
     
     
     
    
 	 







/*
ingleLetters($('.cd-headline.letters').find('b'));
 
function singleLetters($words) {
	$words.each(function(){
		var word = $(this),
			letters = word.text().split(''),
			selected = word.hasClass('is-visible');
		for (i in letters) {
			letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>': '<i>' + letters[i] + '</i>';
		}
	    var newLetters = letters.join('');
	    word.html(newLetters);
	});
}
*/
	 


/*

function createWaypoint (triggerElementId, animatedElement, className, offsetVal, functionName) {
        var waypoint = new Waypoint({
            element: document.getElementById(triggerElementId),
            handler: function(direction) {
                if (direction === 'down') {
                    jQuery(animatedElement).addClass(className);

                    if(typeof functionName === 'function') {
                        functionName.call();
                    }

                    this.destroy();
                }
            },
            offset: offsetVal
        });
    }




createWaypoint("section1", ".content-block", "garrett", 500, null);
*/



  





$('#section1-selling-points').on('init', function(event, slick){
			var myNum = 0;
			$('#section1-selling-points .selling-point').each(function() {
			  
			  var myTitle = $( this ).find('.selling-point-title').text();
			  var myNumber = myNum +1;
			  $('#section1-selling-points .slick-dots li:nth-child('+myNumber+')').append('<span class="slick-title hidden-sm hidden-xs">'+myTitle+'</span>');
			  myNum++;
			});
		});
		$('#section1-selling-points').slick({
		  dots: true,
		  arrows: false,
		  autoplay: true,
		  autoplaySpeed: 5000,
		  pauseOnHover: false,
		  infinite: true,
		  speed: 500,
		  fade: true,
		  cssEase: 'linear'
		});
		
		
		
		
		

		
		
		$( "#section3 .case-result" ).hover(function() {
			
			
			$(this).addClass("active");
		 }, function() {
			$(this).removeClass("active");
		  }
		
		
		
		);
		

		
		
		
		
		
		
		
		$('#section3-slider').slick({
		  dots: false,
		  infinite: true,
		  speed: 500,
		  fade: true,
		  cssEase: 'linear'
		});
		
		
		
		
		$( "#section5 .practice-area" ).hover(
		  function() {
			$(this).addClass("active");
		 }, function() {
			$(this).removeClass("active");
		  }
		);
		
		
		
		$('#section6-slider').on('init', function(event, slick){
			$( '#section6-slider .entry-content' ).matchHeight();
		});
		$('#section6-slider').slick({
		  dots: false,
		  infinite: true,
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  rtl: true,
		  appendArrows:'#section6-arrows',
		  speed: 500,
		  fade: false,
		  cssEase: 'linear',
			responsive: [
				{
				  breakpoint: 1099,
				  settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				  }
				}
			  ]
		});




// About Play Button




	 
	 $('.button-video').mouseenter(function(){
	 	
	 	$('img.myplay_reg').fadeOut(100);
	 	
	 	$('img.myplay_hover').fadeIn(100);
	 	
	 	
	 });
	 
	 
	 $('.button-video').mouseleave(function(){
	 	
	 	$('img.myplay_reg').fadeIn(100);
	 	
	 	$('img.myplay_hover').fadeOut(300);
	 	
	 	
	 });
	 
	 
	 
	$("#mobile-nav li.menu-item-has-children > a").append("<span></span>");
	$("#mobile-nav li.menu-item-has-children > a").click(function(e) {
		e.preventDefault();
		if($(this).parent().hasClass("open")) {
			$(this).parent().removeClass("open");
		} else {
			$(this).parent().addClass("open");
		}
	});
	
	
	$('#banner .button').click(function(event) {
		event.preventDefault();
		var targetOffset = $("#footer-form").offset().top;
		$('html,body').animate({
			scrollTop: targetOffset
		}, 700);
	});
	
	
	
	
	
	  
/*
	var el = $('input[type=text], textarea');
    el.focus(function(e) {
        if (e.target.value == e.target.defaultValue)
            e.target.value = '';
    });
    el.blur(function(e) {
        if (e.target.value == '')
            e.target.value = e.target.defaultValue;
    });
*/
	
	
/*
	$( "#section3 .case-result" ).hover(
	function() {
	$(this).toggleClass("open");
	}
	);
*/

	$( '#section1 .selling-point-hover-content' ).each(function() {
	  $( this ).center();
	});
/*
	$( '#section3 .case-result-on p' ).each(function() {
	  $( this ).center();
	});
*/

	$( '#case-results .case-result' ).matchHeight();
	 
// 	var myController = new ScrollMagic.Controller();
	 
/*
	var BannerTextTween = TweenMax.staggerTo("#banner h1 span", 0, {className:"+=active"}, 0.3);
	var BannerDotsTween = TweenMax.to("#banner-subtitle", 0, {className:"+=active"});
	var BannerButtonTween = TweenMax.to("#banner-button", 0, {className:"+=active"});
*/
/*
	var Section1TextTween = TweenMax.to("#section1-text", 0, {className:"+=active"});
	var Section1CaptionTween = TweenMax.to("#section1-image figcaption", 0, {className:"+=active"});
	var Section2TitleTween = TweenMax.staggerTo("#section2 h2 span", 0, {className:"+=active"}, 0.2);
*/
/*
	var Section2VideoTween = TweenMax.to("#section2-video", 0, {className:"+=active"});
	var Section2Text1Tween = TweenMax.to("#section2-text1", 0, {className:"+=active"});
	var Section2Featured1Tween = TweenMax.to("#featured-meet-the-press", 0, {className:"+=active"});
	var Section2Featured2Tween = TweenMax.to("#featured-60-minutes", 0, {className:"+=active"});
	var Section2ImageTween = TweenMax.to("#section2-image", 0, {className:"+=active"});
	var Section2Text2Tween = TweenMax.to("#section2-text2", 0, {className:"+=active"});
*/
/*
	var Section4TitleTween = TweenMax.staggerTo("#section4-title span", 0, {className:"+=active"}, 0.3);
	var Section4Tween = TweenMax.to("#section4", 0, {className:"+=active"});
	var Section5PracticeAreasTween = TweenMax.staggerTo("#section5 .practice-area", 0, {className:"+=on"}, 0);
*/
/*
	var FooterFormTween = TweenMax.to("#colophon", 0, {className:"+=active"});
	var FooterMainTween = TweenMax.to("#footer-main", 0, {className:"+=active"});
*/
/*
	var StickyTween = TweenMax.to("#sticky", 0, {className:"+=active"});
	var AboutTween = TweenMax.to("#main", 0, {className:"+=active"});
*/
	 
/*
	var BannerTextScene = new ScrollMagic.Scene({
	triggerElement: "#banner"
	})
	.setTween(BannerTextTween)
	.reverse(false)
	.addTo(myController);
	 
	var BannerDotsScene = new ScrollMagic.Scene({
	triggerElement: "#banner"
	})
	.setTween(BannerDotsTween)
	.reverse(false)
	.addTo(myController);
	 
	var BannerButtonScene = new ScrollMagic.Scene({
	triggerElement: "#banner"
	})
	.setTween(BannerButtonTween)
	.reverse(false)
	.addTo(myController);
*/
	 
/*
	var Section1TextScene = new ScrollMagic.Scene({
	triggerElement: "#section1", offset: -100
	})
	.setTween(Section1TextTween)
	.reverse(false)
	.addTo(myController);
	 
	var Section1CaptionScene = new ScrollMagic.Scene({
	triggerElement: "#section1", offset: 700
	})
	.setTween(Section1CaptionTween)
	.reverse(false)
	.addTo(myController);
*/
	 
/*
	var Section2TitleScene = new ScrollMagic.Scene({
	triggerElement: "#section2"
	})
	.setTween(Section2TitleTween)
	.reverse(false)
	.addTo(myController);
	 
	var Section2VideoScene = new ScrollMagic.Scene({
	triggerElement: "#section2-video", offset: -400
	})
	.setTween(Section2VideoTween)
	.reverse(false)
	.addTo(myController);
	 
	var Section2Text1Scene = new ScrollMagic.Scene({
	triggerElement: "#section2-video", offset: -200
	})
	.setTween(Section2Text1Tween)
	.reverse(false)
	.addTo(myController);
	 
	var Section2Featured1Scene = new ScrollMagic.Scene({
	triggerElement: "#section2-text2"
	})
	.setTween(Section2Featured1Tween)
	.reverse(false)
	.addTo(myController);
	 
	var Section2Featured2Scene = new ScrollMagic.Scene({
	triggerElement: "#section2-text2"
	})
	.setTween(Section2Featured2Tween)
	.reverse(false)
	.addTo(myController);
	 
	var Section2ImageScene = new ScrollMagic.Scene({
	triggerElement: "#section2-text2"
	})
	.setTween(Section2ImageTween)
	.reverse(false)
	.addTo(myController);
	 
	var Section2Text2Scene = new ScrollMagic.Scene({
	triggerElement: "#section2-text2"
	})
	.setTween(Section2Text2Tween)
	.reverse(false)
	.addTo(myController);
*/
	 
/*
	var Section4TitleScene = new ScrollMagic.Scene({
	triggerElement: "#section4", offset: 200
	})
	.setTween(Section4TitleTween)
	.reverse(false)
	.addTo(myController);
	
	var Section4Scene = new ScrollMagic.Scene({
	triggerElement: "#section4", offset: 200
	})
	.setTween(Section4Tween)
	.reverse(false)
	.addTo(myController);
*/
	 
/*
	var Section5PracticeAreasScene = new ScrollMagic.Scene({
	triggerElement: "#section5", offset: 200
	})
	.setTween(Section5PracticeAreasTween)
	.reverse(false)
	.addTo(myController);
*/
	 
/*
	var FooterFormScene = new ScrollMagic.Scene({
	triggerElement: "#colophon"
	})
	.setTween(FooterFormTween)
	.reverse(false)
	.addTo(myController);
	 
	var FooterMainScene = new ScrollMagic.Scene({
	triggerElement: "#colophon", offset: 400
	})
	.setTween(FooterMainTween)
	.reverse(false)
	.addTo(myController);
*/
	 
/*
	var StickyScene = new ScrollMagic.Scene({
	triggerElement: "#main"
	})
	.setTween(StickyTween)
	.addTo(myController);
*/
	 
/*
	var AboutScene = new ScrollMagic.Scene({
	triggerElement: ".page-template-page-about #main"
	})
	.setTween(AboutTween)
	.addTo(myController);
*/
	 
}); 

/*
$(window).resize(function (){
	$( '#section1 .selling-point-hover-content' ).each(function() {
		  $( this ).center();
	 });
    $( '#section3 .case-result-on p' ).each(function() {
		  $( this ).center();
	 });






}); 
*/







