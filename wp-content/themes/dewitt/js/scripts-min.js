var createWaypoint=function(e,t,n,i){i=void 0!==i&&i,t=void 0!==t?t:"50%",e.waypoint({handler:function(t){!0===i?"down"===t?(e.addClass("visible"),"function"==typeof n&&n&&n.call(this)):e.removeClass("visible"):"down"===t&&(e.addClass("visible"),"function"==typeof n&&n&&n.call(this),this.destroy())},offset:t})};jQuery(document).ready(function(){$("#mobile-toggle").click(function(){$(".new_mobile").addClass("new_open")}),$(".mynew_close").click(function(){$(".new_mobile").removeClass("new_open")}),$(".new_mobile li.menu-item-has-children").click(function(){$(this).toggleClass("new_open")}),$("body.page-template-page-home .top_line").each(function(e){var t=$(this).text().split("");$this=$(this),$this.empty(),$.each(t,function(e,t){$this.append("<span class='letter-span'>"+t+"</span")})}),$("body.page-template-page-home .middle_line").each(function(e){var t=$(this).text().split("");$this=$(this),$this.empty(),$.each(t,function(e,t){$this.append("<span class='letter-span'>"+t+"</span")})}),$("body.page-template-page-home .bottom_line").each(function(e){var t=$(this).text().split("");$this=$(this),$this.empty(),$.each(t,function(e,t){$this.append("<span class='letter-span'>"+t+"</span")})}),$("#banner").addClass("visible");var e=window.createWaypoint;e($("#section1"),"400px"),e($("#section2"),"250px"),e($(".section2_bottom"),"350px"),e($("#section3"),"350px"),e($("#section4"),"350px"),e($("#section5"),"350px"),e($("#section6"),"350px"),e($("#colophon"),"350px"),e($("#main"),"250px");var t=$(".page-template-page-about #section2");e(t,"250px");var t=$(".page-template-page-about #section3");e(t,"250px"),$("#section1-selling-points").on("init",function(e,t){var n=0;$("#section1-selling-points .selling-point").each(function(){var e=$(this).find(".selling-point-title").text(),t=n+1;$("#section1-selling-points .slick-dots li:nth-child("+t+")").append('<span class="slick-title hidden-sm hidden-xs">'+e+"</span>"),n++})}),$("#section1-selling-points").slick({dots:!0,arrows:!1,autoplay:!0,autoplaySpeed:5e3,pauseOnHover:!1,infinite:!0,speed:500,fade:!0,cssEase:"linear"}),$("#section3 .case-result").hover(function(){$(this).addClass("active")},function(){$(this).removeClass("active")}),jQuery(".inner_button_wrapper").click(function(){jQuery(this).find("img.new_button_hov").fadeIn(200),jQuery(".inner_button_wrapper").not(this).find("img.new_button_hov").fadeOut(200)}),$("#section3-slider").slick({dots:!1,infinite:!0,speed:500,fade:!0,cssEase:"linear",prevArrow:".new_back_wrapper",nextArrow:".new_next_wrapper",responsive:[{breakpoint:1099,settings:{dots:!1,infinite:!0,speed:500,fade:!0,cssEase:"linear",prevArrow:".new_back_wrapper",nextArrow:".new_next_wrapper",adaptiveHeight:!0}}]}),$("#section5 .practice-area").hover(function(){$(this).addClass("active")},function(){$(this).removeClass("active")}),$("#section6-slider").on("init",function(e,t){$("#section6-slider .entry-content").matchHeight()}),$("#section6-slider").slick({dots:!1,infinite:!0,slidesToShow:3,slidesToScroll:1,rtl:!0,appendArrows:"#section6-arrows",speed:500,fade:!1,cssEase:"linear",responsive:[{breakpoint:1099,settings:{slidesToShow:1,slidesToScroll:1}}]}),jQuery(function(){jQuery('a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=jQuery(this.hash);if(e=e.length?e:jQuery("[name="+this.hash.slice(1)+"]"),e.length)return jQuery("html, body").animate({scrollTop:e.offset().top},600),!1}})}),$("#section1 .selling-point-hover-content").each(function(){$(this).center()}),$("#case-results .case-result").matchHeight()});