<!--footer-->

<div class="footer section fp-auto-height" id="section6">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-4 col-xs-6">
				<div class="social">
					<a href="https://www.facebook.com/viethousemoscow"><i class="fa fa-facebook-square"></i></a>
					<a href=""><i class="fa fa-youtube-square"></i></a>
					<a href=""><i class="fa fa-google-plus-square"></i></a>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6">
				<div class="credit">
					<h6><?php bloginfo('description');?></h6>
					<h6>Телефон: 8 (909) 352-10-58 или 8 (964) 628-99-13</h6>
					<h6>ул. Покровка, 14/2, стр 01, Moscow</h6>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- </div> -->
<!-- end fullpage -->
<!--end footer-->





<div class="hidden"></div>
<!-- Mandatory for Responsive Bootstrap Toolkit to operate -->
<div class="device-xs visible-xs"></div>
<div class="device-sm visible-sm"></div>
<div class="device-md visible-md"></div>
<div class="device-lg visible-lg"></div>
<!-- end mandatory -->
<?php wp_footer();?>
<!--[if lt IE 9]>
<script src="/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->
<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
<script type="text/javascript">
	$(document).ready(function(){

		var ulNav= "#nav", openNav = "active";

		$('.toggle-menu').click(function(e){

			if($(ulNav).hasClass(openNav)){
				$(ulNav).removeClass(openNav);
			}else{
				$(ulNav).addClass(openNav);
			}
			e.preventDefault();
		})
	})
</script>
<script>
	$(document).ready(function(){
		(jQuery)(".owl-carousel").owlCarousel({

			items:3,
			loop:true,
			autoHeight:true,
			autoplay:false,
			autoplayTimeout:1000,
			autoplayHoverPause:true,
			navigation: false,
			pagination:true,
			paginationNumbers:true,
			navigationText: ["prev", "next"],
			responsive : {
				0:{items : 1},
				480:{items : 1},
				768:{items: 2},
				992:{items: 2},
				1200:{items: 3}
			}

		});
	});
</script>
<script>
	$(".food-menu li").click(function(e) {
	e.preventDefault();
	$("li").removeClass("selected");
	$(this).addClass("selected");
});
</script>
<script>
	$.scrollify({
		section : ".section",
		interstitialSection : ".footer",
		// easing: "easeOutExpo",
		// scrollSpeed: 1100,
		// offset : 0,
		// scrollbars: false,
		// standardScrollElements: "",
		setHeights: false,
		overflowScroll: true,
		// before:function() {},
		// after:function() {},
		// afterResize:function() {},
		// afterRender:function() {}
	});
</script>
<script>
	$(document).ready(function() {
	    $("#content").find("[id^='tab']").hide(); // Hide all content
	    $("#tabs li:first").attr("id","current"); // Activate the first tab
	    $("#content #tab1").fadeIn(); // Show first tab's content
	    
	    $('#tabs a').click(function(e) {
	        e.preventDefault();
	        if ($(this).closest("li").attr("id") == "current"){ //detection for current tab
	         return;       
	        }
	        else{             
	          $("#content").find("[id^='tab']").hide(); // Hide all content
	          $("#tabs li").attr("id",""); //Reset id's
	          $(this).parent().attr("id","current"); // Activate this
	          $('#' + $(this).attr('class')).fadeIn(); // Show content for the current tab
	        }
	    });
	});
</script>

<!-- smooth scroll down--
<script>
	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
</script>
<!-- end smooth scroll -->
<!--  smooth scroll up --
<script>
$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});
</script>
<!-- end smooth scroll up -->
<!-- <script>
$(document).ready(function() {
    $('#fullpage').fullpage({
    	scrollOverflow:true,
        scrollOverflowOptions: {
    		mouseWheel: false,
    		scrollbars: false,
    		mouseWheelSpeed: 1
		},
        navigation: true,
        // navigationTooltips: ['Главная', 'О Нас', 'Новые Блюды','Вьет Ланч','Резерв Стола','Оставить сообщение']
        // anchors:['main','about-us', 'new-food','food-menu','booking','contact-us'],
        // lockAnchors: true,
        // css3: false
        // autoScrolling: false
    });
});
</script> -->

</body>
</html>