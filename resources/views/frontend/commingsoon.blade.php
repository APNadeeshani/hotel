<!DOCTYPE html>
<head>
    @include('frontend.head')
</head>
<body itemscope>
        @include('frontend.header')
	</div><!-- Header Container -->


	<div class="pagetop">
		<div class="container" >
			<h1>Comming soon</h1>
			<ul>

			</ul>		
		</div>
	</div><!-- Page Top -->


	<section style="text-align:center; padding:50px">
<h1> COMMING SOON </h1>
	</section><!-- Tabs Section -->



	@include('frontend.footer')

</div>

	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="js/jquery.poptrox.min.js" type="text/javascript"></script>
	<script src="js/enscroll-0.5.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.scrolly.js" type="text/javascript"></script>
	<script src="js/bootstrap-datepicker.min.js" type="text/javascript"></script>
	<script src="js/userincr.js" type="text/javascript"></script>	
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/jquery.simpleWeather.min.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
			/*================== TESTIMONIAL CAROUSEL ======================*/
			$('.testimonial-carousel').owlCarousel({
				autoplay:true,
				autoplayTimeout:3000,
				smartSpeed:2000,
				loop:true,
				dots:false,
				nav:false,
				margin:10,
				singleItem:true,
				items:1,
				animateIn:"fadeIn",
				animateOut:"fadeOut"
			});



			/*================== CLIENTS CAROUSEL ======================*/
			$('.clients-carousel').owlCarousel({
				autoplay:true,
				autoplayTimeout:30000,
				smartSpeed:2000,
				loop:true,
				dots:false,
				nav:true,
				margin:10,
				items:5,
				autoHeight:true,
				responsive:{
					0:{items:1},
					600:{items:2},
					1000:{items:3},
					1200:{items:5}
				}
			});				

		});
	</script>
		
</body>
</html>