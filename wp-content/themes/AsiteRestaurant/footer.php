<!--footer-->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-4 col-xs-6">
				<div class="social">
					<a href="#"><i class="fa fa-facebook-square"></i></a>
					<a href=""><i class="fa fa-youtube-square"></i></a>
					<a href=""><i class="fa fa-google-plus-square"></i></a>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6">
				<div class="credit">
					<h6>Lorem ipsum dolor.</h6>
					<h6>Lorem ipsum</h6>
					<h6>Lorem</h6>
				</div>
			</div>
		</div>
	</div>
</footer>
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
<script src="libs/html5shiv/es5-shim.min.js"></script>
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
			items:5,
			itemsDesktop : [1199, 5], //При разрешении экрана от 901px до 1000px
			itemsDesktopSmall : [979, 4], // При разрешении экрана от 601px до 900px
			itemsTablet: [768, 3], //При разрешении экрана от 0 до 600px
			itemsMobile: [479, 2],
			loop:true,
			margin:10,
			autoHeight:true,
			autoplay:6000,
			autoplayTimeout:1000,
			autoplayHoverPause:true,
			navigation: false,
			pagination:true,
			paginationNumbers:true,
			navigationText: ["prev", "next"],
			responsive : {
				0:{items : 2},
				480:{items : 3},
				768:{items: 4},
				992:{items: 5},
				1200:{items: 6}
			}

		});
	});
</script>
<script>
	$("li").click(function(e) {
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
          $('#' + $(this).attr('name')).fadeIn(); // Show content for the current tab
        }
    });
});
</script>
</body>
</html>