<!DOCTYPE html>
<head>


@include('frontend.head')
<style>
.advansch {
padding: 0 8px 8px;
margin-bottom: 8px;
border: 1px solid #bdbdbd;
margin-top: 5px;
}

.loader {
  border: 14px solid #f3f3f3;
  border-radius: 50%;
  border-top: 10px solid #f9a43d;
  width: 60px;
  height: 60px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

</style>
</head>
<body itemscope>

@include('frontend.header')

	</div><!-- Header Container -->
	<div class="pagetop">
		<div class="container">
			<h1>Property</h1>
			<ul>
				<li><a title="" href="index.html">Home</a></li>
				<li>Day Outing Hotels</li>
			</ul>		
		</div>
	</div><!-- Page Top -->

	<section>
	<div class="container">
	<div class="row">
	<div class="col-md-3 column">
		<div class="advansch">
			<h6>Popular filters </h6>
			<div><input  type="checkbox"class="advflt" id="swimming" name="swimming" value="swimming"> Swimming pool</div>
			<div><input type="checkbox" class="advflt" id="breakfast" name="breakfast" value="breakfast"> Breakfast included</div>
			<div><input type="checkbox" class="advflt" id="privatebathroom" name="privatebathroom" value="privatebathroom"> Private bathroom</div>
			<div><input type="checkbox" class="advflt" id="beachfront" name="beachfront" value="beachfront"> Beachfront</div>
			<div><input type="checkbox" class="advflt" id="airconditioning" name="airconditioning" value="airconditioning"> Air conditioning</div>
			<div><input type="checkbox" class="advflt" id="apartments" name="apartments" value="apartments"> Apartments</div>
			<div><input type="checkbox" class="advflt" id="breakfastdinner" name="breakfastdinner" value="breakfastdinner"> Breakfast & dinner included</div>
			<div><input type="checkbox" class="advflt" id="seaview" name="seaview" value="seaview"> Sea view</div>
			<div><input type="checkbox" class="advflt" id="bath" name="bath" value="bath"> Bath</div>
			<div><input type="checkbox" class="advflt" id="balcony" name="balcony" value="balcony"> Balcony</div> 
			<div><input type="checkbox" class="advflt" id="spabath" name="spabath" value="spabath"> Spa Bath</div> 
			<div><input type="checkbox" class="advflt" id="twinbeds" name="twinbeds" value="twinbeds"> Twin beds</div> 
			<div><input type="checkbox" class="advflt" id="kitchen" name="kitchen" value="kitchen"> Kitchen/kitchenette</div> 
			<div><input type="checkbox" class="advflt" id="freewifi" name="freewifi" value="freewifi"> Free WiFi</div> 
		</div>
		<div class="advansch">
			<h6>Star rating</h6>
			<div><input type="checkbox" class="advflt" id="onestar" name="vehicle1" value="Bike"> 1 star</div>
			<div><input type="checkbox" class="advflt" id="twostar" name="vehicle1" value="Bike"> 3 star</div>
			<div><input type="checkbox" class="advflt" id="threestar" name="vehicle1" value="Bike"> 4 star</div>
			<div><input type="checkbox" class="advflt" id="fourstar" name="vehicle1" value="Bike"> 5 star</div>
			<div><input type="checkbox" class="advflt" id="unrated" name="vehicle1" value="Bike"> Unrated</div>
		</div>
		<div class="advansch">
			<h6>Distance from centre of PPPPokl</h6>
			<div><input type="checkbox" class="advflt" id="onekm" name="vehicle1" value="Bike"> Less than 1 km</div>
			<div><input type="checkbox" class="advflt" id="twokm" name="vehicle1" value="Bike"> Less than 3 km</div>
			<div><input type="checkbox" class="advflt" id="threekm" name="vehicle1" value="Bike"> Less than 5 km</div>
		</div>
		<div class="advansch">
			<h6>Fun things to do </h6>
			<div><input type="checkbox" class="advflt" id="hiking" name="vehicle1" value="Bike"> Hiking</div>
			<div><input type="checkbox" class="advflt" id="walking" name="vehicle1" value="Bike"> Walking tours</div>
			<div><input type="checkbox" class="advflt" id="bicycle" name="vehicle1" value="Bike"> Bicycle rental (additional charge)</div>
			<div><input type="checkbox" class="advflt" id="localculture" name="vehicle1" value="Bike"> Tour or class about local culture</div>
			<div><input type="checkbox" class="advflt" id="Cooking" name="vehicle1" value="Bike"> Cooking class</div>
		</div>
		<div class="advansch">
			<h6>24-hour reception</h6><!-- not add -->
			<div><input type="checkbox" class="advflt" id="cancellation" name="vehicle1" value="Bike"> Free cancellation</div>
		</div>
		<div class="advansch">
			<h6>Reservation policy</h6>
			<div><input type="checkbox" class="advflt" id="creditcard" name="vehicle1" value="Bike"> Book without credit card</div>
			<div><input type="checkbox" class="advflt" id="noprepayment" name="vehicle1" value="Bike"> No prepayment</div>
		</div>
		<div class="advansch">
			<h6>Meals</h6>
			<div><input type="checkbox" class="advflt" id="allmeals" name="vehicle1" value="Bike"> All meals included</div>
			<div><input type="checkbox" class="advflt" id="allinclusive" name="vehicle1" value="Bike"> All-inclusive</div>
			<div><input type="checkbox" class="advflt" id="breakfastlunch" name="vehicle1" value="Bike"> Breakfast & lunch included</div>
			<div><input type="checkbox" class="advflt" id="breakfastdinner" name="vehicle1" value="Bike"> Breakfast & dinner included</div>
			<div><input type="checkbox" class="advflt" id="selfcatering" name="vehicle1" value="Bike"> Self catering</div>
		</div>
		<div class="advansch">
			<h6>Facilities </h6>
			<div><input type="checkbox" class="advflt" id="airportshuttle" name="vehicle1" value="Bike"> Airport shuttle</div>
			<div><input type="checkbox" class="advflt" id="parking" name="vehicle1" value="Bike"> Parking</div>
			<div><input type="checkbox" class="advflt" id="nonsmoking" name="vehicle1" value="Bike"> Non-smoking rooms</div>
			<div><input type="checkbox" class="advflt" id="swimmingpool" name="vehicle1" value="Bike"> Swimming pool</div>
			<div><input type="checkbox" class="advflt" id="familyrooms" name="vehicle1" value="Bike"> Family rooms</div>
			<div><input type="checkbox" class="advflt" id="fitnesscenter" name="vehicle1" value="Bike"> Fitness centre</div>
			<div><input type="checkbox" class="advflt" id="wellnesscenter" name="vehicle1" value="Bike"> Spa and wellness centre</div>
			<div><input type="checkbox" class="advflt" id="pets" name="vehicle1" value="Bike"> Pets allowed</div>
			<div><input type="checkbox" class="advflt" id="electricvehicle" name="vehicle1" value="Bike"> Electric vehicle charging station</div>
		</div>
		<div class="advansch">
			<h6>Private facilities  </h6>
			<div><input type="checkbox" class="advflt" id="kitchen" name="vehicle1" value="Bike"> Kitchen/kitchenette</div>
			<div><input type="checkbox" class="advflt" id="privatebathroom" name="vehicle1" value="Bike"> Private bathroom</div>
			<div><input type="checkbox" class="advflt" id="conditioning" name="vehicle1" value="Bike"> Air conditioning</div>
			<div><input type="checkbox" class="advflt" id="bath" name="vehicle1" value="Bike"> Bath</div>
			<div><input type="checkbox" class="advflt" id="terrace" name="vehicle1" value="Bike"> Terrace</div>
			<div><input type="checkbox" class="advflt" id="balcony" name="vehicle1" value="Bike"> Balcony</div>
			<div><input type="checkbox" class="advflt" id="flatscreentv " name="vehicle1" value="Bike"> Flat-screen TV</div>
			<div><input type="checkbox" class="advflt" id="washing" name="vehicle1" value="Bike"> Washing Machine</div>
			<div><input type="checkbox" class="advflt" id="seaview" name="vehicle1" value="Bike"> Sea view</div>
			<div><input type="checkbox" class="advflt" id="kettle" name="vehicle1" value="Bike"> Electric kettle</div>
			<div><input type="checkbox" class="advflt" id="teamaker" name="vehicle1" value="Bike"> Coffee/tea maker</div>
		</div>
		<div class="advansch">
			<h6>Property type </h6>
			<div><input type="checkbox" class="advflt" id="standalone" name="vehicle1" value="Bike"> Stand-alone homes +8</div>
			<div><input type="checkbox" class="advflt" id="villas" name="vehicle1" value="Bike"> Villas +7</div>
			<div><input type="checkbox" class="advflt" id="guest" name="vehicle1" value="Bike"> Guest houses +4</div>
			<div><input type="checkbox" class="advflt" id="hotels" name="vehicle1" value="Bike"> Hotels +3</div>
			<div><input type="checkbox" class="advflt" id="bedandbreakfasts" name="vehicle1" value="Bike"> Bed and breakfasts</div>
			<div><input type="checkbox" class="advflt" id="holiday" name="vehicle1" value="Bike"> Holiday homes +1</div>
			<div><input type="checkbox" class="advflt" id="Countryhouses" name="vehicle1" value="Bike"> Country houses</div>
		</div>
		<div class="advansch">
			<h6>Review score </h6>
			<div><input type="checkbox" class="advflt" id="superb" name="vehicle1" value="Bike"> Superb: 9+9</div>
			<div><input type="checkbox" class="advflt" id="verygood" name="vehicle1" value="Bike"> Very good: 8+9</div>
			<div><input type="checkbox" class="advflt" id="good" name="vehicle1" value="Bike"> Good: 7+11</div>
			<div><input type="checkbox" class="advflt" id="pleasant" name="vehicle1" value="Bike"> Pleasant: 6+11</div>
			<div><input type="checkbox" class="advflt" id="rating3" name="vehicle1" value="Bike"> No rating3</div>
		</div>
		<div class="advansch">
			<h6>Popular filters</h6>
			<div><input type="checkbox" class="advflt" id="beachfront3" name="vehicle1" value="Bike"> Beachfront3</div>
			<div><input type="checkbox" class="advflt" id="swimmingpool2" name="vehicle1" value="Bike"> Swimming pool2</div>
			<div><input type="checkbox" class="advflt" id="villas1" name="vehicle1" value="Bike"> Villas1</div>
			<div><input type="checkbox" class="advflt" id="beach" name="vehicle1" value="Bike"> Beach</div>
			<div><input type="checkbox" class="advflt" id="airconditioning4" name="vehicle1" value="Bike"> Air conditioning4</div>
			<div><input type="checkbox" class="advflt" id="superb" name="vehicle1" value="Bike"> Superb: 9+</div>
			<div><input type="checkbox" class="advflt" id="holiday" name="vehicle1" value="Bike"> Holiday homes1</div>
			<div><input type="checkbox" class="advflt" id="guest" name="vehicle1" value="Bike"> Guest houses2</div>
			<div><input type="checkbox" class="advflt" id="Seaview3" name="vehicle1" value="Bike"> Sea view3</div>
			<div><input type="checkbox" class="advflt" id="privatepool" name="vehicle1" value="Bike"> Private pool2</div>
			<div><input type="checkbox" class="advflt" id="standalone" name="vehicle1" value="Bike"> Stand-alone homes2</div>
			<div><input type="checkbox" class="advflt" id="balcony3" name="vehicle1" value="Bike"> Balcony3</div>
			<div><input type="checkbox" class="advflt" id="private" name="vehicle1" value="Bike"> Private beach area3</div>
			<div><input type="checkbox" class="advflt" id="bath2" name="vehicle1" value="Bike"> Bath2</div>
			<div><input type="checkbox" class="advflt" id="view4" name="vehicle1" value="Bike"> View4</div>
			<div><input type="checkbox" class="advflt" id="hottub" name="vehicle1" value="Bike"> Hot Tub</div>
		</div>
		<div class="advansch">
			<h6>Private facilities </h6>
			<div><input type="checkbox" class="advflt" id="kitchenette3" name="vehicle1" value="Bike"> Kitchen/kitchenette3</div>
			<div><input type="checkbox" class="advflt" id="bathroom4" name="vehicle1" value="Bike"> Private bathroom4</div>
			<div><input type="checkbox" class="advflt" id="conditioning4" name="vehicle1" value="Bike"> Air conditioning4</div>
			<div><input type="checkbox" class="advflt" id="spabath1" name="vehicle1" value="Bike"> Spa Bath1</div>
			<div><input type="checkbox" class="advflt" id="bath2" name="vehicle1" value="Bike"> Bath2</div>
			<div><input type="checkbox" class="advflt" id="privatepool" name="vehicle1" value="Bike"> Private pool</div>
			<div><input type="checkbox" class="advflt" id="terrace4" name="vehicle1" value="Bike"> Terrace4</div>
			<div><input type="checkbox" class="advflt" id="balcony3" name="vehicle1" value="Bike"> Balcony3</div>
			<div><input type="checkbox" class="advflt" id="flatscreen" name="vehicle1" value="Bike"> Flat-screen TV2</div>
			<div><input type="checkbox" class="advflt" id="Washing" name="vehicle1" value="Bike"> Washing Machine2</div>
			<div><input type="checkbox" class="advflt" id="patio3" name="vehicle1" value="Bike"> Patio3</div>
			<div><input type="checkbox" class="advflt" id="Soundproofing3" name="vehicle1" value="Bike"> Soundproofing3</div>
			<div><input type="checkbox" class="advflt" id="view4" name="vehicle1" value="Bike"> View4</div>
			<div><input type="checkbox" class="advflt" id="seaview3" name="vehicle1" value="Bike"> Sea view3</div>
			<div><input type="checkbox" class="advflt" id="electric" name="vehicle1" value="Bike"> Electric kettle4</div>
			<div><input type="checkbox" class="advflt" id="coffee" name="vehicle1" value="Bike"> Coffee/tea maker4</div>
			<div><input type="checkbox" class="advflt" id="coffeemachine" name="vehicle1" value="Bike"> Coffee machine</div>
		</div>
		
</div>
			<div class="col-md-9 column">
				<div class="block gray">
					<div class="col-md-5">
					</div>
					<div class="col-md-2 lod">
					</div>
					<div class="col-md-5">
					</div>
					<div class="col-md-12 column">
						<div class="gallery-data">
							<!-- <section id="options">
								<span>Select Category:</span>
								<div class="option-isotop">
									<ul id="filter" class="option-set filters-nav" data-option-key="filter">
										<li><a href="" class="selected" data-option-value="*">All</a></li>
										<li><a href="" data-option-value=".adventure">HOTELS</a></li>
										<li><a href="" data-option-value=".horseriding">RESORTS</a></li>
										<li><a href="" data-option-value=".tours">CAMPSITES</a></li>
										<li><a href="" data-option-value=".specials">GUEST HOUSE</a></li>
										<li><a href="" data-option-value=".specials">RESTURANT</a></li>
									</ul>
								</div>
							</section>FILTER BUTTONS -->
							<div class="row " >

								<div class="gallery gaps masonary " id="loard">

									@foreach($hoteldata as $key => $value)
									<div class="col-md-4 specials">
										<div class="gallery-img">
											<img src="{{ asset('images/hotels/'.$value->img) }}" alt="" />
											<div class="gallery-overlay">
												<span>katharagama</span>
												<h5>{{ $value->name}}</h5>
												
												<a title="" href="{{ url('/hotel/facilities').'/'.$value->id }}">book</a>
											</div>
											<div class="gallery-name">
												<span>November 10, 2013</span>
												<h3>{{ $value->name}}</h3>
											</div>
										</div><!-- Gallery Image -->
										
									</div>
									
									@endforeach

								</div>
							</div>
						</div><!-- gallery-data -->	
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>


    @include('frontend.footer')


		
</body>
</html>


<script>
//Pay Account Change Event
$(document).ready(function(){
	$('.advflt').change(function(e){	
		$(".lod").addClass("loader");
	    var csrf_token= $('meta[name="csrf-token"]').attr('content');
		if ($('#swimming').is(":checked")){var swimming='1'; }else{var swimming='2';}
		if ($('#breakfast').is(":checked")){var breakfast='1'; }else{var breakfast='2';}
		if ($('#privatebathroom').is(":checked")){var privatebathroom='1'; }else{var privatebathroom='2';}
		if ($('#beachfront').is(":checked")){var beachfront='1'; }else{var beachfront='2';}
		if ($('#airconditioning').is(":checked")){var airconditioning='1'; }else{var airconditioning='2';}
		if ($('#apartments').is(":checked")){var apartments='1'; }else{var apartments='2';}
		if ($('#breakfastdinner').is(":checked")){var breakfastdinner='1'; }else{var breakfastdinner='2';}
		if ($('#seaview').is(":checked")){var seaview='1'; }else{var seaview='2';}
		if ($('#bath').is(":checked")){var bath='1'; }else{var bath='2';}
		if ($('#balcony').is(":checked")){var balcony='1'; }else{var balcony='2';}
		if ($('#spabath').is(":checked")){var spabath='1'; }else{var spabath='2';}
		if ($('#twinbeds').is(":checked")){var twinbeds='1'; }else{var twinbeds='2';}
		if ($('#kitchen').is(":checked")){var kitchen='1'; }else{var kitchen='2';}
		if ($('#freewifi').is(":checked")){var freewifi='1'; }else{var freewifi='2';}
		if ($('#onestar').is(":checked")){var onestar='1'; }else{var onestar='2';}
		if ($('#twostar').is(":checked")){var twostar='1'; }else{var twostar='2';}
		if ($('#threestar').is(":checked")){var threestar='1'; }else{var threestar='2';}
		if ($('#fourstar').is(":checked")){var fourstar='1'; }else{var fourstar='2';}
		if ($('#unrated').is(":checked")){var unrated='1'; }else{var unrated='2';}
		if ($('#onekm').is(":checked")){var onekm='1'; }else{var onekm='2';}
		if ($('#twokm').is(":checked")){var twokm='1'; }else{var twokm='2';}
		if ($('#threekm').is(":checked")){var threekm='1'; }else{var threekm='2';}
		if ($('#hiking').is(":checked")){var hiking='1'; }else{var hiking='2';}
		if ($('#walking').is(":checked")){var walking='1'; }else{var walking='2';}
		if ($('#bicycle').is(":checked")){var bicycle='1'; }else{var bicycle='2';}
		if ($('#localculture').is(":checked")){var localculture='1'; }else{var localculture='2';}
		if ($('#Cooking').is(":checked")){var Cooking='1'; }else{var Cooking='2';}
		if ($('#cancellation').is(":checked")){var cancellation='1'; }else{var cancellation='2';}
		if ($('#creditcard').is(":checked")){var creditcard='1'; }else{var creditcard='2';}
		if ($('#noprepayment').is(":checked")){var noprepayment='1'; }else{var noprepayment='2';}
		if ($('#breakfast').is(":checked")){var breakfast='1'; }else{var breakfast='2';}
		if ($('#allmeals').is(":checked")){var allmeals='1'; }else{var allmeals='2';}
		if ($('#allinclusive').is(":checked")){var allinclusive='1'; }else{var allinclusive='2';}
		if ($('#breakfastlunch').is(":checked")){var breakfastlunch='1'; }else{var breakfastlunch='2';}
		if ($('#breakfastdinner').is(":checked")){var breakfastdinner='1'; }else{var breakfastdinner='2';}
		if ($('#selfcatering').is(":checked")){var selfcatering='1'; }else{var selfcatering='2';}
		if ($('#airportshuttle').is(":checked")){var airportshuttle='1'; }else{var airportshuttle='2';}
		if ($('#freewifi').is(":checked")){var freewifi='1'; }else{var freewifi='2';}
		if ($('#parking').is(":checked")){var parking='1'; }else{var parking='2';}
		if ($('#nonsmoking').is(":checked")){var nonsmoking='1'; }else{var nonsmoking='2';}
		if ($('#swimmingpool').is(":checked")){var swimmingpool='1'; }else{var swimmingpool='2';}
		if ($('#familyrooms').is(":checked")){var familyrooms='1'; }else{var familyrooms='2';}
		if ($('#fitnesscenter').is(":checked")){var fitnesscenter='1'; }else{var fitnesscenter='2';}
		if ($('#wellnesscenter').is(":checked")){var wellnesscenter='1'; }else{var wellnesscenter='2';}
		if ($('#pets').is(":checked")){var pets='1'; }else{var pets='2';}
		if ($('#electricvehicle').is(":checked")){var electricvehicle='1'; }else{var electricvehicle='2';}
		if ($('#kitchen').is(":checked")){var kitchen='1'; }else{var kitchen='2';}
		if ($('#privatebathroom').is(":checked")){var privatebathroom='1'; }else{var privatebathroom='2';}
		if ($('#conditioning').is(":checked")){var conditioning='1'; }else{var conditioning='2';}
		if ($('#bath').is(":checked")){var bath='1'; }else{var bath='2';}
		if ($('#terrace').is(":checked")){var terrace='1'; }else{var terrace='2';}
		if ($('#balcony').is(":checked")){var balcony='1'; }else{var balcony='2';}
		if ($('#flatscreentv').is(":checked")){var flatscreentv='1'; }else{var flatscreentv='2';}
		if ($('#washing').is(":checked")){var washing='1'; }else{var washing='2';}
		if ($('#seaview').is(":checked")){var seaview='1'; }else{var seaview='2';}
		if ($('#kettle').is(":checked")){var kettle='1'; }else{var kettle='2';}
		if ($('#teamaker').is(":checked")){var teamaker='1'; }else{var teamaker='2';}
		if ($('#standalone').is(":checked")){var standalone='1'; }else{var standalone='2';}
		if ($('#villas').is(":checked")){var villas='1'; }else{var villas='2';}
		if ($('#guest').is(":checked")){var guest='1'; }else{var guest='2';}
		if ($('#hotels').is(":checked")){var hotels='1'; }else{var hotels='2';}
		if ($('#bedandbreakfasts').is(":checked")){var bedandbreakfasts='1'; }else{var bedandbreakfasts='2';}
		if ($('#holiday').is(":checked")){var holiday='1'; }else{var holiday='2';}
		if ($('#Countryhouses').is(":checked")){var Countryhouses='1'; }else{var Countryhouses='2';}
		if ($('#superb').is(":checked")){var superb='1'; }else{var superb='2';}
		if ($('#verygood').is(":checked")){var verygood='1'; }else{var verygood='2';}
		if ($('#good').is(":checked")){var good='1'; }else{var good='2';}
		if ($('#pleasant').is(":checked")){var pleasant='1'; }else{var pleasant='2';}
		if ($('#rating3').is(":checked")){var rating3='1'; }else{var rating3='2';}
		if ($('#beachfront3').is(":checked")){var beachfront3='1'; }else{var beachfront3='2';}
		if ($('#swimmingpool2').is(":checked")){var swimmingpool2='1'; }else{var swimmingpool2='2';}
		if ($('#villas1').is(":checked")){var villas1='1'; }else{var villas1='2';}
		if ($('#beach').is(":checked")){var beach='1'; }else{var beach='2';}
		if ($('#airconditioning4').is(":checked")){var airconditioning4='1'; }else{var airconditioning4='2';}
		if ($('#superb').is(":checked")){var superb='1'; }else{var superb='2';}
		if ($('#holiday').is(":checked")){var holiday='1'; }else{var holiday='2';}
		if ($('#guest').is(":checked")){var guest='1'; }else{var guest='2';}
		if ($('#Seaview3').is(":checked")){var Seaview3='1'; }else{var Seaview3='2';}
		if ($('#privatepool').is(":checked")){var privatepool='1'; }else{var privatepool='2';}
		if ($('#standalone').is(":checked")){var standalone='1'; }else{var standalone='2';}
		if ($('#balcony3').is(":checked")){var balcony3='1'; }else{var balcony3='2';}
		if ($('#private').is(":checked")){var private='1'; }else{var private='2';}
		if ($('#bath2').is(":checked")){var bath2='1'; }else{var bath2='2';}
		if ($('#view4').is(":checked")){var view4='1'; }else{var view4='2';}
		if ($('#hottub').is(":checked")){var hottub='1'; }else{var hottub='2';}
		if ($('#kitchenette3').is(":checked")){var kitchenette3='1'; }else{var kitchenette3='2';}
		if ($('#bathroom4').is(":checked")){var bathroom4='1'; }else{var bathroom4='2';}
		if ($('#conditioning4').is(":checked")){var conditioning4='1'; }else{var conditioning4='2';}
		if ($('#spabath1').is(":checked")){var spabath1='1'; }else{var spabath1='2';}
		if ($('#bath2').is(":checked")){var bath2='1'; }else{var bath2='2';}
		if ($('#privatepool').is(":checked")){var privatepool='1'; }else{var privatepool='2';}
		if ($('#terrace4').is(":checked")){var terrace4='1'; }else{var terrace4='2';}
		if ($('#balcony3').is(":checked")){var balcony3='1'; }else{var balcony3='2';}
		if ($('#flatscreen').is(":checked")){var flatscreen='1'; }else{var flatscreen='2';}
		if ($('#Washing').is(":checked")){var Washing='1'; }else{var Washing='2';}
		if ($('#hottub').is(":checked")){var hottub='1'; }else{var hottub='2';}
		if ($('#Soundproofing3').is(":checked")){var Soundproofing3='1'; }else{var Soundproofing3='2';}
		if ($('#view4').is(":checked")){var view4='1'; }else{var view4='2';}
		if ($('#seaview3').is(":checked")){var seaview3='1'; }else{var seaview3='2';}
		if ($('#electric').is(":checked")){var electric='1'; }else{var electric='2';}
		if ($('#coffee').is(":checked")){var coffee='1'; }else{var coffee='2';}
		if ($('#coffeemachine').is(":checked")){var coffeemachine='1'; }else{var coffeemachine='2';}
		
		$.ajax({
		 // url: base_url + "/hotelssearchfrom",
		
          url: "{{url('hotelssearchdayouting')}}",
          type:'post',
		  data: {"_token":csrf_token, "swimming":swimming, "breakfast":breakfast, "privatebathroom":privatebathroom, "beachfront":beachfront,"airconditioning":airconditioning,
			"apartments":apartments,"breakfastdinner":breakfastdinner,"seaview":seaview,"bath":bath,"balcony":balcony,"spabath":spabath,"twinbeds":twinbeds,"kitchen":kitchen,
			"freewifi":freewifi,"onestar":onestar,"twostar":twostar,"threestar":threestar,"fourstar":fourstar,"unrated":unrated,"onekm":onekm,"twokm":twokm,"threekm":threekm,
			"hiking":hiking,"walking":walking,"bicycle":bicycle,"breakfast":breakfast,"allmeals":allmeals,"allinclusive":allinclusive,"breakfastlunch":breakfastlunch,"breakfastdinner":breakfastdinner,"selfcatering":selfcatering,
			"localculture":localculture,"Cooking":Cooking,"cancellation":cancellation,"creditcard":creditcard,"noprepayment":noprepayment,"airportshuttle":airportshuttle,"freewifi":freewifi,
			"parking":parking,"nonsmoking":nonsmoking,"swimmingpool":swimmingpool,"familyrooms":familyrooms,"pets":pets,"electricvehicle":electricvehicle,"kitchen":kitchen,"privatebathroom":privatebathroom,
			"fitnesscenter":fitnesscenter,"wellnesscenter":wellnesscenter,"bath":bath,"terrace":terrace,"balcony":balcony,"flatscreentv":flatscreentv,"washing":washing,"seaview":seaview,"kettle":kettle,
			"villas":villas,"guest":guest,"hotels":hotels,"bedandbreakfasts":bedandbreakfasts,"holiday":holiday,"Countryhouses":Countryhouses,"superb":superb,"verygood":verygood,
			"good":good, "pleasant":pleasant, "rating3":rating3, "beachfront3":beachfront3,"swimmingpool2":swimmingpool2, "villas1":villas1,"beach":beach,"airconditioning4":airconditioning4,"holiday":holiday,
			"guest":guest,"Seaview3":Seaview3,"privatepool":privatepool,"standalone":standalone,"teamaker":teamaker,"standalone":standalone,"balcony3":balcony3, "private":private ,"bath2":bath2,
			"view4":view4,"hottub":hottub ,"kitchenette3":kitchenette3,"bathroom4":bathroom4,"conditioning4":conditioning4,"spabath1":spabath1,"privatepool":privatepool,"terrace4":terrace4,"balcony3":balcony3,"flatscreen":flatscreen,
			"Washing":Washing,"hottub":hottub,"Soundproofing3":Soundproofing3,"electric":electric ,"coffeemachine":coffeemachine},
          async: false,
          success: function (data_out){ 
			
			var loard=$('#loard').html('');
			obj=JSON.parse(data_out);
			if(obj.details==''){$(".lod").removeClass("loader");$("#loard").append("<h4 style='margin-left:10px'> No avilable data</h4>");}
			console.log(data_out);
					$.each(obj.details, function (key, value){
						
						var image= base_url+'/images/hotels/'+value.img;
						var link =base_url+'/hotel/facilities/'+value.id;
						$("#loard").append(
						"<div class='col-md-4 specials'>"+
							"<div class='gallery-img'>"+
							"<img src='"+image+"' }}'/>"+
								"<div class='gallery-overlay'>"+
									"<span>katharagama</span>"+
									"<h5>"+value.name+"</h5>"+
									"<a href='"+link+"'> BOOK </a>"+
								"</div>"+
								"<div class='gallery-name'>"+
									"<span>November 10, 2013</span>"+
									"<h3>"+value.name+"</h3>"+
								"</div>"+
							"</div>"+
						"</div>");
					$(".lod").removeClass("loader");
				});
			}
		});
	
	});
});
</script>
