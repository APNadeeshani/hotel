<!DOCTYPE html>
<head>
@include('frontend.head')
</head>
<body itemscope>
@include('frontend.header')

        </div><!-- Header Container -->
        <div class="pagetop">
            <div class="container">
                <h1>Hotel Registration</h1>
                <ul>
                    <li><a title="" href="#">Home</a></li>
                    <li>Hotel Registration</li>
                </ul>		
            </div>
        </div><!-- Page Top -->
        <section>
            <div class="block gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 column">
                            <div class="title">
                                <span>Welcome again to hotel express</span>
                            </div>
                            <div class="comment-form center">
                                <p>We do Online marketing for Hotels and Restorers which promote Discounts, Offers, Deals, Events, Restaurants Menu, and Book Hotel 
Rooms and Reserve Restaurant tables for the Guest. We will be arranging transport services for our clients if requested.
 </p>
                                <div id="message"></div>
                                <form class="input-fields" method="post" action="{{url('/contactsave')}}" >
                                {{ csrf_field() }}  
                                    <div class="row">
                                        <div class="col-md-4"><input id="name" name="name" type="text" placeholder="Your Name *" /></div>
                                        <div class="col-md-4"><input id="email" name="email" type="email" placeholder="Email Address *" /></div>
                                        <div class="col-md-4"><input type="text" name="website"  placeholder="Website" /></div>
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