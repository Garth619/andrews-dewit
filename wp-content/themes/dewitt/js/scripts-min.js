var createWaypoint=function(e,t,i,s){s=void 0!==s&&s,t=void 0!==t?t:"50%",e.waypoint({handler:function(t){!0===s?"down"===t?(e.addClass("visible"),"function"==typeof i&&i&&i.call(this)):e.removeClass("visible"):"down"===t&&(e.addClass("visible"),"function"==typeof i&&i&&i.call(this),this.destroy())},offset:t})};jQuery(document).ready(function(){$("body.page-template-page-home .top_line").each(function(e){var t=$(this).text().split("");$this=$(this),$this.empty(),$.each(t,function(e,t){$this.append("<span class='letter-span'>"+t+"</span")})}),$("body.page-template-page-home .middle_line").each(function(e){var t=$(this).text().split("");$this=$(this),$this.empty(),$.each(t,function(e,t){$this.append("<span class='letter-span'>"+t+"</span")})}),$("body.page-template-page-home .bottom_line").each(function(e){var t=$(this).text().split("");$this=$(this),$this.empty(),$.each(t,function(e,t){$this.append("<span class='letter-span'>"+t+"</span")})}),$("#banner").addClass("visible");var e=window.createWaypoint;e($("#section1"),"350px"),e($("#section2"),"250px"),e($(".section2_bottom"),"350px"),e($("#section3"),"350px"),e($("#section4"),"350px"),e($("#section5"),"350px"),e($("#section6"),"350px"),e($("#colophon"),"350px"),e($("#main"),"250px"),$("#section1-selling-points").on("init",function(e,t){var i=0;$("#section1-selling-points .selling-point").each(function(){var e=$(this).find(".selling-point-title").text(),t=i+1;$("#section1-selling-points .slick-dots li:nth-child("+t+")").append('<span class="slick-title hidden-sm hidden-xs">'+e+"</span>"),i++})}),$("#section1-selling-points").slick({dots:!0,arrows:!1,autoplay:!0,autoplaySpeed:5e3,pauseOnHover:!1,infinite:!0,speed:500,fade:!0,cssEase:"linear"}),$("#section3 .case-result").hover(function(){$(this).addClass("active")},function(){$(this).removeClass("active")}),$("#section3-slider").slick({dots:!1,infinite:!0,speed:500,fade:!0,cssEase:"linear"}),$("#section5 .practice-area").hover(function(){$(this).addClass("active")},function(){$(this).removeClass("active")}),$("#section6-slider").on("init",function(e,t){$("#section6-slider .entry-content").matchHeight()}),$("#section6-slider").slick({dots:!1,infinite:!0,slidesToShow:3,slidesToScroll:1,rtl:!0,appendArrows:"#section6-arrows",speed:500,fade:!1,cssEase:"linear",responsive:[{breakpoint:1099,settings:{slidesToShow:1,slidesToScroll:1}}]}),$(".button-video").mouseenter(function(){$("img.myplay_reg").fadeOut(100),$("img.myplay_hover").fadeIn(100)}),$(".button-video").mouseleave(function(){$("img.myplay_reg").fadeIn(100),$("img.myplay_hover").fadeOut(300)}),$("#mobile-nav li.menu-item-has-children > a").append("<span></span>"),$("#mobile-nav li.menu-item-has-children > a").click(function(e){e.preventDefault(),$(this).parent().hasClass("open")?$(this).parent().removeClass("open"):$(this).parent().addClass("open")}),$("#banner .button").click(function(e){e.preventDefault();var t=$("#footer-form").offset().top;$("html,body").animate({scrollTop:t},700)}),$("#section1 .selling-point-hover-content").each(function(){$(this).center()}),$("#case-results .case-result").matchHeight()});