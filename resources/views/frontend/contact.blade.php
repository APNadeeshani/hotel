<!DOCTYPE html>
<head>
@include('frontend.head')
</head>
<body itemscope>
@include('frontend.header')

        </div><!-- Header Container -->


        <div class="pagetop">
            <div class="container">
                <h1>Contact Us</h1>
                <ul>
                    <li><a title="" href="#">Home</a></li>
                    <li>Contact Us</li>
                </ul>		
            </div>
        </div><!-- Page Top -->


        <section>
            <div class="block gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 column">

                            <div class="block-gap"></div>
                            <div class="contact-content" >
                                <div class="row">
                                    <div class="col-md-5" >
                                        <div class="address-sec">
                                            <span>Resort World Best Place</span>
                                            <h4>Get In Touch</h4>
                                            <p>We make your stay a memorable experience at a very reasonable cost. We're looking forward to having you again as our guest.</p>
                                            <ul>
                                                <li><span><i class="fa fa-home"></i></span> <strong>Address:</strong>118/B Rajamaha Vihara Road, Mirihana Kotte.</li>
                                                <li><span><i class="fa fa-phone"></i></span> <strong>Phone:</strong>+94112816141 | +9471 5400137</li>
                                                <li><span><i class="fa fa-envelope"></i></span> <strong>Email:</strong>info@hotelexpress.lk</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                    <div class="map">
                               <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d617841.1234395928!2d19.098163777520817!3d-33.78760119441866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1437982891919"></iframe> -->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.426503303553!2d81.3020671142733!3d6.338764995412841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae427868c8301c5%3A0xfa8540d370818fb3!2sYoho%20Kodigahawewa%20Forest%20Resort!5e0!3m2!1sen!2slk!4v1595650351320!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div></div>
                                    <div class="col-md-6">
                                        <div class="contact-img">
                                            <img src="images/resource/contact-img.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>			
                            <div class="block-gap"></div>

                            <div class="title">
                                <span>Resort World Best Places</span>
                                <h4>Send Us Message</h4>
                            </div>
                            <div class="comment-form center">
                                <p>We make your stay a memorable experience at a very reasonable cost. We're looking forward to having you again as our guest. </p>
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