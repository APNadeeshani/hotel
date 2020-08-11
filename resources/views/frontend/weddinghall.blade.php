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
			<h1>Wedding Halls</h1>
			<ul>
				<li><a title="" href="index.html">Home</a></li>
				<li>Wedding Halls</li>
			</ul>		
		</div>
	</div><!-- Page Top -->

	<section>
	<div class="container">
	<div class="row">

			<div class="col-md-12 column">
				<div class="block gray">
					<div class="col-md-7">
                    
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control popupDatepicker" type="text" name="dates" id="dates" placeholder="Select Date">
                                    <img class="field-icon" src="images/calendar.png" alt="" />
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group">
                                        <select class="form-control" name="destn" id="destn">
										<option  value="">select Destination</option>
										@foreach($destinationdata AS $desData)
										<option  value="{{$desData->id}}">{{$desData->name}}</option>
										@endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                
                                <button class="btn btn-success" id="bookid" type="button">Search Now</button>
                                </div>
                            </div>
                        </div>
                   
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

									@foreach($wedding as $key => $value)
									<div class="col-md-4 specials">
										<div class="gallery-img">
											<img src="{{ asset('images/hotels/'.$value->image) }}" alt="" />
											<div class="gallery-overlay">
												<span>katharagama</span>
												<h5>{{ $value->name}}</h5>
												
												<a title="" href="{{ url('/hotel/weddingfacilities').'/'.$value->id }}">book</a>
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
	$('#bookid').click(function(e){	
		$(".lod").addClass("loader");
	    var csrf_token= $('meta[name="csrf-token"]').attr('content');
		var dates=$('#dates').val(); 
		var destn=$('#destn').val(); 

		$.ajax({
		 // url: base_url + "/hotelssearchfrom",
		
          url: "{{url('search/wedding')}}",
          type:'post',
		  data: {"_token":csrf_token, "dates":dates, "destn":destn},
          async: false,
          success: function (data_out){ 
			
			var loard=$('#loard').html('');
			obj=JSON.parse(data_out);
			if(obj.details==''){$(".lod").removeClass("loader");$("#loard").append("<h4 style='margin-left:10px'> No avilable data</h4>");}
			console.log(data_out);
					$.each(obj.details, function (key, value){
						
						var image= base_url+'/images/hotels/'+value.image;
						var link =base_url+'/hotel/weddingfacilities/'+value.id;
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
