@extends('layouts.jesse.main')

@section('banner')

@endsection

@section('content')
	<header>
	    <div id="top_bar">
	        <div id="title_div">
	            <a style="text-decoration:none; color:#121011;" href="https://jessethewebguy.com/">
	                <img alt="Jesse The Web Guy Logo" src="{{ asset('jesse/img/jesse%20headshot%20cartoon%20logo-min.png') }}" />
	                <p>Jesse The Web Guy</p>
	            </a>
	        </div>
	        <div id="phone_contact_div">    
	            <p><a style="text-decoration:none; color:#147c26;" href="tel:7326081230">732.608.1230</a></p>
	            <a href="tel:7326081230"><img alt="Cell Phone Icon" src="{{ asset('jesse/img/cell_phone_icon-min.png') }}" /></a>
	        </div>
	    </div>

	    <div id="banner">
	        <img alt="Main Banner" id="main_banner_img" src="{{ asset('jesse/img/main%20banner-min.png') }}" />
	        <div id="banner_header">
	            <h1>NEW JERSEY WEBSITE DEVELOPER</h1>
	            <h2>Hi! My name is Jesse and I build awesome websites!</h2>
	            <div>
	                <a href="/#contact">Contact me today!</a>
	            </div>
	        </div>
	    </div>

	</header>
	<div style="padding-top:2%;" id="services_section">
	    <img alt="Triangle Backgrounds" class="right_top_corner_triangle_imgs" src="{{ asset('/jesse/img/triangle%20background.gif') }}" />
	    <div id="services">
	        <div class="one_third">
	            <a href="/web-design.html">
	                <img alt="web design icon" src="{{ asset('jesse/img/web%20design%20icon-min.png') }}" />
	                <h3>Web Design</h3>
	                <p>Offering all types of website design services like WordPress and hard coded sites.</p>
	                <h5 class="link"><a href="/web-design.html">Learn More</a></h5>
	            </a>
	        </div>      
	        <div class="one_third">
	            <a href="/seo-services.html">
	                <img alt="seo icon" src="{{ asset('/jesse/img/seo%20icon-min.png') }}" />
	                <h3>SEO Services</h3>
	                <p>Free consultation and analysis of what I can achieve getting traffic to your site.</p>
	                <h5 class="link"><a href="/seo-services.html">Learn More</a></h5>
	            </a>
	        </div>
	        <div class="one_third">
	            <a href="/ecommerce-solutions.html">
	                <img alt="ecommerce icon" src="{{ asset('/jesse/img/ecommerce%20icon-min.png') }}" />
	                <h3>eCommerce</h3>
	                <p>Sell products professionally on your website with easy to learn shop management.</p>
	                <h5 class="link"><a href="/ecommerce-solutions.html">Learn More</a></h5>
	            </a>
	        </div>
	    </div>
	</div>
	
	<div style="width:100%; clear:both;" ></div>
	
	<div id="about_me_section">
	    <div id="jesse_lange_head_shot">
	        <img alt="Jesse Lange Head Shot" src="{{ asset('/jesse/img/Jesse%20Lange%20Portrait%20Photoshop-min.jpg') }}" />
	    </div>
	    <div id="about_me_summary">
	        <p>Thanks for visiting my site. &nbsp;As you probably know by now my name is Jesse and I love web development. &nbsp;Been designing websites for years and I am fully certified through Rutgers University.</p>
	        <p>Feel free to contact me I will be happy to discuss what I can do to help you reach your goals.</p>
	    </div>
	</div>

	<div style="width:100%; clear:both;" ></div>

	<div id="my_portfolio_section">         
	    
	    <h2 class="page_header">Recent Work</h2>
	    
	    <div id="client_logos">
	        <div class="slide"><img alt="Client Logo" src="{{ asset('/jesse/img/Beama-Life-Logo-min.png') }}"></div>
	        <div class="slide"><img alt="Client Logo" src="{{ asset('/jesse/img/ZEFR-Logo-min.png') }}"></div>
	        <div class="slide"><img alt="Client Logo" src="{{ asset('/jesse/img/Atlantic-Lawsuit-Funding-Logo-min.png') }}"></div>
	        <div class="slide"><img alt="Client Logo" src="{{ asset('/jesse/img/Jersey-Shore-Wave-Logo-min.png') }}"></div>
	        <div class="slide"><img alt="Client Logo" src="{{ asset('/jesse/img/Messano-Logo-min.png') }}"></div>
	        <div class="slide"><img alt="Client Logo" src="{{ asset('/jesse/img/Fanz1-Sports-Logo-min.png') }}"></div>
	        <div class="slide"><img alt="Client Logo" src="{{ asset('/jesse/img/GrFresh-Main-Logo-min.png') }}"></div>
	        <div class="slide"><img alt="Client Logo" src="{{ asset('/jesse/img/NYU-School-of-Medicine-min.png') }}"></div>
	    </div>

	    <div id="portfolio_link_div">
	        <a href="{{ url('/portfolio') }}">See my portfolio</a>
	    </div>

	</div>
@endsection