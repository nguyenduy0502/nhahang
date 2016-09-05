<!--footer-->
<?php global $asite_options;?>
<div class="footer" id="section6">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-4 col-xs-6">
				<div class="social">
					<?php // check social in theme option?>
					<?php if(!empty($asite_options['option_fb']) && isset($asite_options['option_fb'])): ?>
						<a href="<?php echo $asite_options['option_fb']?>"><i class="fa fa-facebook-square"></i></a>
					<?php endif; ?>
					<?php if(!empty($asite_options['option_youtube']) && isset($asite_options['option_youtube'])): ?>
					<a href="<?php echo $asite_options['option_youtube']?>"><i class="fa fa-youtube-square"></i></a>
					<?php endif; ?>
					<?php if(!empty($asite_options['option_gg']) && isset($asite_options['option_gg'])): ?>
					<a href="<?php echo $asite_options['option_gg']?>"><i class="fa fa-google-plus-square"></i></a>
					<?php endif; ?>
					<?php if(!empty($asite_options['option_vk']) && isset($asite_options['option_vk'])): ?>
						<a href="<?php echo $asite_options['option_vk']?>"><i class="fa fa-vk"></i></a>
					<?php endif;?>
					<?php if(!empty($asite_options['option_insta']) && isset($asite_options['option_insta'])): ?>
						<a href="<?php echo $asite_options['option_insta']?>"><i class="fa fa-instagram"></i></a>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6">
				<div class="credit">
					<?php if(!empty($asite_options['option_address']) && isset($asite_options['option_address'])): // check option_address in theme option?>
					<h6><?php echo $asite_options['option_address'];?></h6>
					<?php else: ?>
					<h6>Вьетнамская Кухня Вьет Хауз Кафе Телефон: 8 (909) 352-10-58 или 8 (964) 628-99-13 ул. Покровка, 14/2, стр 01, Moscow</h6>
					<?php endif; // end check option_address in theme option ?>
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
<!-- toggle button for menu in small devices -->
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
<!-- end toggle button for menu in small devices -->
<!-- sliderhead, slider new food, slider comment -->
<script>
	$(document).ready(function(){
		(jQuery)(".owl-carousel").owlCarousel({

			items:3,
			loop:true,
			autoHeight:true,
			autoplay:true,
			autoplayTimeout:10000,
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
		(jQuery)(".owl-carousel2").owlCarousel({

			items:1,
			loop:true,
			autoHeight:true,
			autoplay:true,
			autoplayTimeout:4000,
			autoplayHoverPause:true,
			navigation: false,
			pagination:true,
			paginationNumbers:true,
			navigationText: ["prev", "next"]

		});
		(jQuery)(".owl-carousel3").owlCarousel({

			items:1,
			loop:true,
			autoHeight:true,
			autoplay:false,
			autoplayTimeout:4000,
			autoplayHoverPause:false,
			navigation: false,
			pagination:true,
			paginationNumbers:true,
			navigationText: ["prev", "next"]

		});
	});
</script>
<!-- end sliderhead, slider new food, slider comment -->
<!-- tab in menu -->
<script>
	$(".food-menu li").click(function(e) {
	e.preventDefault();
	$("li").removeClass("selected");
	$(this).addClass("selected");
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
<!-- end tab in menu -->
<script>
            window.viewportUnitsBuggyfill.init({
                force: true,
                refreshDebounceWait: 250,
                hacks: window.viewportUnitsBuggyfillHacks
            });
</script>
<!-- nicescroll for smooth mouse wheel scrolling -->
<script>
$(document).ready(function() {  
    $("html").niceScroll({
    	scrollspeed: 60,
    	cursorwidth: "17px", // cursor width in pixel (you can also write "5px"),
        cursorcolor: "#ccc",
        cursoropacitymin: 0.3,
        background: "#fff",
        cursorborder: "0",
        autohidemode: false,
        cursorminheight: 30
    });
});
</script>
<!-- end nicescroll -->
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
</body>
</html>