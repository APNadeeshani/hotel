<!DOCTYPE html>
<head>
    @include('frontend.head')
</head>
<body itemscope>
    @include('frontend.header')
        </div><!-- Header Container -->
        <div class="pagetop">
            <div class="container">
                <h1>WELCOME TO {{$hoteldata[0]->name}}</h1>
                <ul>
                    <li><a title="" href="#">Home</a></li>
                    <li>Hotel Details</li>
                </ul>		
            </div>
        </div><!-- Page Top -->
        <section>
            <div class="block gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 column">
                            <div class="contact-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('images/hotels/'.$hoteldata[0]->img) }}" alt="" />
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$hoteldata[0]->description}}</p>
                                    <div class="address-sec">

                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-img">
                                            <img src="images/resource/contact-img.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>			
                            <div class="title">
                                <br>
                                <span>Resort World Best Places</span>
                                <h4>BOOK YOUR ROOM NOW</h4>
                            </div>
                            <div class="comment-form center">
                                <p></p>
                                <div id="message"></div>
                                    <table class="table table-sm">
                                    @foreach($roomdata as $key => $value)
                                        <tr>
                                            <td>{{ $value->type }}</td>
                                            <td>{{ $value->description}}</td>
                                            <td><a href="#" class="btn btn-success">Book Now</a></td>

                                        </tr>
                                    @endforeach
                                    </table>
                            </div>
                        </div>
                        <aside class="col-md-4 column">
                            <div class="sidebar">
                            <div class="widget">
                                    <form action="{{ url('/search_hotels') }}" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Check In</label>
                                                    <input class="form-control popupDatepicker" type="text" placeholder="Select Date">
                                                    <img class="field-icon" src="images/calendar.png" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Check Out</label>
                                                    <input class="form-control popupDatepicker" type="text" placeholder="Select Date">
                                                    <img class="field-icon" src="images/calendar.png" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </form><!-- Tab Form -->
                                </div>
                                <div class="widget">
                                    <div class="widget-title">
                                        <h4>Hotel Location</h4>
                                        <span>Local Guide</span>
                                    </div>
                                <div class="map">
                                    <iframe src="{{$hoteldata[0]->map}}"></iframe>
                                </div>
                                </div><!-- Widget -->							
                                <div class="widget">
                                    <div class="widget-title">
                                        <h4>Gallery Widget</h4>
                                        <span>Local Guide</span>
                                    </div>
                                    <div class="gallery-widget lightbox">
                                        <div class="row">
                                            <div class="col-md-4" ><a href="{{ asset('images/hotels/'.$hoteldata[0]->imge1) }}" title=""><img src="{{ asset('images/hotels/'.$hoteldata[0]->imge1) }}" alt="" /></a></div>
                                            <div class="col-md-4" ><a href="{{ asset('images/hotels/'.$hoteldata[0]->imge2) }}" title=""><img src="{{ asset('images/hotels/'.$hoteldata[0]->imge2) }}" alt="" /></a></div>
                                            <div class="col-md-4" ><a href="{{ asset('images/hotels/'.$hoteldata[0]->imge3) }}" title=""><img src="{{ asset('images/hotels/'.$hoteldata[0]->imge3) }}" alt="" /></a></div>
                                            <div class="col-md-4" ><a href="{{ asset('images/hotels/'.$hoteldata[0]->imge4) }}" title=""><img src="{{ asset('images/hotels/'.$hoteldata[0]->imge4) }}" alt="" /></a></div>
                                            <div class="col-md-4" ><a href="{{ asset('images/hotels/'.$hoteldata[0]->imge5) }}" title=""><img src="{{ asset('images/hotels/'.$hoteldata[0]->imge5) }}" alt="" /></a></div>
                                            <div class="col-md-4" ><a href="{{ asset('images/hotels/'.$hoteldata[0]->imge6) }}" title=""><img src="{{ asset('images/hotels/'.$hoteldata[0]->imge6) }}" alt="" /></a></div>
                                        </div>
                                    </div>
                                </div><!-- Widget -->				
                                <div class="widget">
                                    <div class="widget-title">
                                        <h4>Facilities</h4>
                                        
                                    </div>
                                    <ul>
                                    @if($advances[0]->pool=='1') <li>Swimming pool</li> @endif
                                    @if($advances[0]->beachfront=='1') <li>Beach front</li>@endif
                                    @if($advances[0]->freewiFi=='1') <li>WIFI Free</li>@endif
                                    @if($advances[0]->bicyclerental=='1') <li>Bicycle Rental</li>@endif
                                    @if($advances[0]->hiking=='1') <li>Hiking</li>@endif
                                    @if($advances[0]->petsallowed=='1') <li>Pets allowed</li>@endif
                                    @if($advances[0]->breakfast=='1') <li>Breakfast included</li>@endif
                                    @if($advances[0]->bathroom=='1') <li>Private bathroom</li>@endif
                                    @if($advances[0]->airconditioning=='1') <li>Air conditioning</li>@endif
                                    @if($advances[0]->apartments=='1') <li>Apartments</li>@endif
                                    @if($advances[0]->breakfastdinner=='1') <li>Breakfast & dinner included</li>@endif
                                    @if($advances[0]->seaview=='1') <li>Sea view</li>@endif
                                    @if($advances[0]->bath=='1') <li>Bath</li>@endif
                                    @if($advances[0]->balcony=='1') <li>Balcony</li>@endif
                                    @if($advances[0]->spabath=='1') <li>Spa Bath</li>@endif
                                    @if($advances[0]->twinbeds=='1') <li>Twin beds</li>@endif
                                    @if($advances[0]->kitchen=='1') <li>Kitchen/kitchenette</li>@endif

                                    </ul>
                                </div><!-- Widget -->
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.footer')
     
</body>
</html>