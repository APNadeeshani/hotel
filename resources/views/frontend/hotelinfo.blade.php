<!DOCTYPE html>
<head>
@include('frontend.head')
</head>
<body itemscope>
@include('frontend.header')

        </div><!-- Header Container -->


        <div class="pagetop">
            <div class="container">
                <h1>Hotel Information</h1>
                <ul>
                    <li><a title="" href="#">Home</a></li>
                    <li>Hotel Information</li>
                </ul>		
            </div>
        </div><!-- Page Top -->


        <section>
            <div class="block gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 column">
                            <div class="title">
                                <h4>Join With Us</h4>
                            </div>
                            <div class="comment-form center">
                                <p>We make your stay a memorable experience at a very reasonable cost. We're looking forward to having you again as our guest. </p>
                                <div id="message"></div>
                                <form class="input-fields" method="post" action="{{url('/contactsave')}}" >
                                {{ csrf_field() }}  
                                    <div class="row">
                                        <div class="col-md-6"><input id="name" name="name" type="text" placeholder="Property Name *" /></div>
                                        <div class="col-md-6"><input id="email" name="email" type="email" placeholder="Property Type *" /></div>
                                        <div class="col-md-6"><input type="text" name="website"  placeholder="Address " /></div>
                                        <div class="col-md-6"><input type="text" name="website"  placeholder="Phone " /></div>
                                        <br>
                                        <div class="col-md-12"><textarea id="comments" name="comments" placeholder="Enter Your Message"></textarea></div>
                                        <div class="col-md-12"><button id="submit" class="book-now submit" type="submit">Submit Now</button><img src="images/ajax-loader.gif" alt="" /></div>
                                    </div>												
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>




 
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
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script src="js/jquery.simpleWeather.min.js"></script>

</body>
</html>