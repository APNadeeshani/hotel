<!DOCTYPE html>
<head>
@include('frontend.head')
</head>
<body itemscope>

        @include('frontend.header')

	</div><!-- Header Container -->

	<section>
		<div class="block no-padding">
			<div class="row">
				<div class="col-md-12 column">
					<div class="rooms-list">
						<ul>
							<li>
								<div class="room">
									<img src="images/resource/room1.jpg" alt="" />
									<div class="room-name"><h4><span>HOTELS</span></h4></div>
									<div class="room-detail">
										<div class="room-inner">
											<h3>HOTELS</h3>
											<p></p>
											<!--<strong>$550 <i>- Per Night</i></strong> 
											<div class="room-features">
												<span><i class="fa fa-calendar"></i></span>
												<span><i class="fa fa-wifi"></i></span>
												<span><i class="fa fa-clock-o"></i></span>
												<span><i class="fa fa-laptop"></i></span>
												<span><i class="fa fa-umbrella"></i></span>
											</div>-->
											<div class="view-more">
												<a href="{{ url('hoteltype').'/'.'1' }}" title="">view more detail <i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div><!-- Room Detail -->
								</div><!-- Room -->
							</li>
							<li>
								<div class="room">
									<img src="images/resource/resort.jpg" alt="" />
									<div class="room-name"><h4><span>RESORTS</span></h4></div>
									<div class="room-detail">
										<div class="room-inner">
											<h3>RESORTS</h3>
											<p></p>
											<!--<strong>$550 <i>- Per Night</i></strong>
											<div class="room-features">
												<span><i class="fa fa-calendar"></i></span>
												<span><i class="fa fa-wifi"></i></span>
												<span><i class="fa fa-clock-o"></i></span>
												<span><i class="fa fa-laptop"></i></span>
												<span><i class="fa fa-umbrella"></i></span>
											</div> -->
											<div class="view-more">
												<a href="{{ url('hoteltype').'/'.'2' }}" title="">view more detail <i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div><!-- Room Detail -->
								</div>
							</li>
							<li class="start">
								<div class="room">
									<img src="images/resource/room3.jpg" alt="" />
									<div class="room-name"><h4><span>GUEST HOUSE</span></h4></div>
									<div class="room-detail">
										<div class="room-inner">
											<h3>GUEST HOUSE</h3>
											<p></p>
											<!--<strong>$550 <i>- Per Night</i></strong> 
											<div class="room-features">
												<span><i class="fa fa-calendar"></i></span>
												<span><i class="fa fa-wifi"></i></span>
												<span><i class="fa fa-clock-o"></i></span>
												<span><i class="fa fa-laptop"></i></span>
												<span><i class="fa fa-umbrella"></i></span>
											</div>-->
											<div class="view-more">
												<a href="{{ url('hoteltype').'/'.'3' }}" title="">view more detail <i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div><!-- Room Detail -->
								</div>
							</li>
							<li>
								<div class="room">
									<img src="images/resource/apartment.jpg" alt="" />
									<div class="room-name"><h4><span>APARTMENTS</span></h4></div>
									<div class="room-detail">
										<div class="room-inner">
											<h3>APARTMENTS</h3>
											<p></p>
											<!--<strong>$550 <i>- Per Night</i></strong> 
											<div class="room-features">
												<span><i class="fa fa-calendar"></i></span>
												<span><i class="fa fa-wifi"></i></span>
												<span><i class="fa fa-clock-o"></i></span>
												<span><i class="fa fa-laptop"></i></span>
												<span><i class="fa fa-umbrella"></i></span>
											</div>-->
											<div class="view-more">
												<a href="{{ url('hoteltype').'/'.'4' }}" title="">view more detail <i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div><!-- Room Detail -->
								</div>
							</li>
							<li>
								<div class="room">
									<img src="images/resource/campside.jpg" alt="" />
									<div class="room-name"><h4><span>CAMP SIDE</span></h4></div>
									<div class="room-detail">
										<div class="room-inner">
											<h3>CAMP SIDE</h3>
											<p></p>
											<!--<strong>$550 <i>- Per Night</i></strong>
											<div class="room-features">
												<span><i class="fa fa-calendar"></i></span>
												<span><i class="fa fa-wifi"></i></span>
												<span><i class="fa fa-clock-o"></i></span>
												<span><i class="fa fa-laptop"></i></span>
												<span><i class="fa fa-umbrella"></i></span>
											</div> -->
											<div class="view-more">
												<a href="{{ url('hoteltype').'/'.'5' }}" title="">view more detail <i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div><!-- Room Detail -->
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section><!-- Rooms Section -->


	<section>
		<div class="block remove-gap gray-layer">
			<div class="parallax" data-velocity="-.1" style="background: rgba(0, 0, 0, 0) url(images/parallax1.jpg) no-repeat 50% 0;"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 column">
						<div class="big-tabs">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#about-hotel" data-toggle="tab">
										<div class="tab-name">
											<i class="fa fa-building"></i>
											<span>Who We Are<strong>About Hotel</strong></span>
										</div>
									</a>
								</li>
								<li>
									<a href="#find-hotel" data-toggle="tab">
										<div class="tab-name">
											<i class="fa fa-search"></i>
											<span>Any Where in Sri lanka <strong>Find Your Hotels</strong></span>
										</div>
									</a>
								</li>
							</ul>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="about-hotel">
									<div class="tab-data">
										<strong>Welcome To</strong>
										<h4>Hotelexpress.lk</h4>
										<h5><b>Start Saving with Hotel Express.lk</b></h5>
										<p>Amazing offers starts with HOTELEXPRESS.LK. Browse hundreds of deals and discover local favorites every day. Explore, HOTELEXPRESS.LK and purchase seamlessly in just a few taps!.</p>
										
										<!--
										<br>
										<h4>Sri Lanka Hotel Guide</h4>
										<p>Hotel Express.lk offers a selection of hotels in Sri Lanka. You are sure to find cheap deals and discount rates among them with our Best Price Guarantee. No matter what type of hotel strikes your fancy, we will let you search for your preferred one to accommodate your travel needs.
Hotel Express.lk will not only save you time, but also money when booking your stay at a hotel in Sri Lanka. Making reservations so you can stay within your budget is easy with us.</p>

<p>Hotel Express.lk even provides you with a map so you may find cheap hotels in the Sri Lanka neighborhood you prefer.</p>

<p>Go ahead. Enter your travel dates to view the best offers on hotel rooms in Sri Lanka now, including last minute deals! </p>
</p>	-->

									<!--	<ul>
											<li>
												<p>World Best Resort No</p>
												<span>06</span>
											</li>
											<li>
												<p>We Are Awarded In</p>
												<span>2014</span>
											</li>
											<li>
												<p>Brunches In Countries</p>
												<span>24</span>
											</li>
										</ul> --><!-- ul -->
									</div><!-- tabs-data -->
								</div>
								<div role="tabpanel" class="tab-pane fade" id="find-hotel">
									<div class="tab-form">
										<div class="tab-from-title">
											<span>Any Time Worldwide</span>
											<h4>Find Your Ideal Hotel</h4>
										</div>
										<form action="{{ url('/search_hotels') }}" method="post">
										{{ csrf_field() }}  
											<div class="row">
												<div class="col-md-3">
													<div class="form-group">
													<label>Check In</label>
														<input class="form-control popupDatepicker" type="text" placeholder="Select Date">
														<img class="field-icon" src="images/calendar.png" alt="" />
													</div>
												</div>
												<div class="col-md-3">
												<div class="form-group">
													<label>Check Out</label>
														<input class="form-control popupDatepicker" type="text" placeholder="Select Date">
														<img class="field-icon" src="images/calendar.png" alt="" />
													</div>
												</div>
												<div class="col-md-4">
												<div class="form-group">
													<label>Destination</label>
													
														<select class="form-control" name="destn" id="destn">
															<option  value="">select Destination</option>
															@foreach($destinationdata AS $desData)
															<option  value="{{$desData->id}}">{{$desData->name}}</option>
															@endforeach
														</select>
														</div>
												</div>
	
												<div class="col-md-2">
													<div class="form-group">
														<label>Rooms</label>
														<input class="form-control" value="00" type="text" placeholder="">
													</div>
												</div>
												<div class="col-md-12">
													<button class="book-now" type="submit">Search Now</button>
												</div>
											</div>
										</form><!-- Tab Form -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- container -->
		</div><!-- block -->
	</section><!-- Tabs Section -->


	<section>
		<div class="block gray darkblue-layer half-parallax">
			<div class="parallax" data-velocity="-.1" style="background: rgba(0, 0, 0, 0) url(images/bgdestinasion.jpg) no-repeat 50% 0;"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 column">
						<div class="service-area">
							<div class="row">
								<div class="col-md-2">
									<div class="service-title">
										<p>Who are</p>
										<h3>Our</h3>
										<span>Best Hotels</span>
									</div><!-- Service Title -->
								</div>

								<div class="col-md-10">
								<div class="col-md-12">
									<div class="service-carousel" >
										@foreach($hoteldata as $key => $value)
										<div class="service-box">
											<img src="{{ asset('images/hotels/'.$value->img) }}" alt="" />
											<div class="service-name">
												<span><img src="{{ asset('images/service-icon3.png') }}" alt="" /></span>
												<h5><a href="{{ url('hotel/facilities').'/'.$value->id }}" title="">{{ $value->name}}</a></h5>
											</div>
										</div><!-- Service Box -->
										@endforeach
									</div><!-- Service Carousel -->
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- Services Section -->


	<section>
		<div class="block remove-gap gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<span>Let Go around the Country</span>
							<h4>Destinations</h4>
						</div><!-- Title -->
						<div class="row narrow">
							<div class="gallery masonary">

								<!--<div class="col-md-3">
									<div class="gallery-box bottom">
										<img src="images/resource/gallery2.jpg" alt="" />
										<div class="gallery-hover">
											<div class="gallery-inner">
												<span><strong class="amount">$93.00 </strong>/ Extra</span>
												<h5><a title="" href="packages-detail.html">WATER RAFTING</a></h5>
												<ul>
													<li><a href="#" title="">Bus Transportation</a></li>
													<li><a href="#" title="">Experienced Guides </a></li>
												</ul>
												<a class="book-now" href="tour-detail.html" title="">View Detail</a>
											</div>
										</div>
									</div> 
								</div> -->
								@foreach($destinationdata as $key => $value)

								<div class="col-md-3">
									<div class="gallery-box left">
										<img src="{{ asset('images/destination/'.$value->img) }}" alt="" />
										<div class="gallery-hover">
											<div class="gallery-inner">
												<span><strong class="amount"></strong></span>
												<h5><a title="" href="packages-detail.html">{{ $value->name }}</a></h5>
												<!--<ul>
													<li><a href="#" title="">Entrance To The Waterfall</a></li>
													<li><a href="#" title="">Local Guide </a></li>
												</ul> -->
												<a class="book-now" href="{{ url('hotelsdestinations').'/'.$value->id }}" title="">View Detail</a>
											</div>
										</div>
									</div><!-- Gallery Box -->
								</div>
								@endforeach

							</div>
						</div><!-- Gallery -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block less-spacing">
			<div class="container">
				<div class="row">
					<div class="col-md-12 column">
						<div class="clients-carousel">
						@foreach($clientdata as $key => $value)
							<div class="client">
								<a title="" href="#"><img src="{{ asset('images/client/'.$value->img) }}" alt="" /></a>
							</div><!-- Client -->
						@endforeach
						</div><!-- Clients Carousel -->
					</div>
				</div>
			</div>
		</div>
	</section>



    @include('frontend.footer')



	<script type="text/javascript">
		



	$(window).load(function(){

		/*================== SERVICES CAROUSEL ======================*/
		$('.service-carousel').owlCarousel({
			autoplay:true,
			autoplayTimeout:30000,
			smartSpeed:2000,
			loop:true,
			dots:false,
			nav:true,
			margin:10,
			items:3,
			autoHeight:true,
			responsive:{
				0:{items:1},
				480:{items:2},
				767:{items:3},
				980:{items:3}
			}
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
				480:{items:3},
				767:{items:4},
				980:{items:5}
			}
		});			
	});

/*
$("#Next").click(function(){
	$("#Slider").append($("#subsld:first-of-type"));
});

$("#Prev").click(function(){
	$("#subsld").prepend($("#subsld:last-of-type"));
});
 */

	</script>


		
</body>
</html>