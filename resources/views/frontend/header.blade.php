<div class="theme-layout">
	<div class="header-container">
		<div class="registration">
			<div class="container">
				<span class="close-btn"><img src="images/cross.png" alt="" /></span>
				<div class="registration-form">
					<h3>Join For <span>Hotelexpress.lk</span></h3>
					<p>Quis autem velum lure reprehe nderit. Lorem ipsum dolor sitnulla or narjusto.</p>
					<form action="{{ url('/request') }}" method="post">
					{{ csrf_field() }}  
						<div class="row">
							<div class="col-md-8 column">
								<div class="input-fields">
									<div class="row">
										<div class="col-md-6"><input type="text" name="name" placeholder="Your Name *" required/></div>
										<div class="col-md-6"><input type="email" name="email" placeholder="your@email.com *" required /></div>
										<div class="col-md-6"><input type="text" name="hotel" placeholder="Hotel Name *" required/></div>
										<div class="col-md-6"><input type="text" name="phone" placeholder="Phone *" required/></div>
									</div>
								</div>
							</div>
							<div class="col-md-4 column">						
								<p>By creating an account, you agree to our <a href="#" title="">Terms & Conditions.</a></p>
								<button class="book-now" type="submit">Send Request</button>
							</div>
						</div>
					</form><!-- form -->
				</div>
				<div class="login-form">
					<h3>Sign In <span>Now</span></h3>
					<p>Quis autem velum lure reprehe nderit. Lorem ipsum dolor sitnulla or narjusto.</p>
					<form>
						<div class="row">
							<div class="col-md-8 column">
								<div class="input-fields">
									<div class="row">
										<div class="col-md-6"><input type="email" name="email" placeholder="your@email.com *" /></div>
										<div class="col-md-6"><input type="password" name="psw" placeholder="Password *" /></div>
									</div>
								</div>
							</div>
							<div class="col-md-4 column">						
								<button class="book-now">Sign In</button>
							</div>
						</div>
					</form><!-- form -->
				</div>			
			</div>
		</div><!-- Registration -->

<div class="topbar">
    <div class="weather-wrapper">
        <div id="weather"></div>
    </div>
    <span class="address"><i class="fa fa-envelope"></i> info@hotelexpress.lk</span>
	<span class="address"><i class="fa fa-sign-in"></i><a id="" href="{{url('/login')}}"  style="color:white;">Login</a></span>
    <div class="registration-buttons">
        <a id="register-btn" href="#" title="">Hotels Register</a>
       
    </div> 
</div><!-- Topbar -->

<header>
    <div class="container">
        <div class="logo-sec">
            <a href="#"><img src="images/logo.png" alt="" /></a>
        </div><!-- logo -->
        <nav>	
            <ul>
			<li class="menu-item-has-children"><a href="{{url('/')}}" title="">HOME</a>
			</li>
			<li class="menu-item-has-children"><a href="{{url('/aboutus')}}" title="">ABOUT</a> </li>
			<li class="menu-item-has-children"><a href="{{url('/hotel')}}" title="">HOTELS</a> 
			</li>
			<li class="menu-item-has-children"><a href="{{url('/dayouting')}}" title="">DAY OUTING</a> 
			</li>
			<li class="menu-item-has-children"><a href="{{url('/weddinghall')}}" title="">WEDDINGS</a> 
			</li>
			<li class="menu-item-has-children"><a href="{{url('/contactus')}}" title="">CONTACT US</a> 
			</li>
						
            </ul>
        </nav><!-- nav -->

        <span class="responsive-btn"><a href="#" title=""><i class="fa fa-align-center"></i></a></span>
    </div>
</header><!-- Header -->
        
<div class="responsive-menu">
    <ul>
	<li class="menu-item-has-children"><a href="{{url('/')}}" title="">HOME</a>
	</li>
	<li class="menu-item-has-children"><a href="{{url('/aboutus')}}" title="">ABOUT</a> </li>
	<li class="menu-item-has-children"><a href="{{url('/hotel')}}" title="">HOTELS</a> 
	</li>
	<li class="menu-item-has-children"><a href="{{url('/dayouting')}}" title="">DAY OUTING</a> 
	</li>
	<li class="menu-item-has-children"><a href="{{url('/weddinghall')}}" title="">WEDDINGS</a> 
	</li>
	<li class="menu-item-has-children"><a href="{{url('/contactus')}}" title="">CONTACT US</a> 
	</li>
	
    </ul>
</div><!-- Responsive Menu -->