@extends('layouts.jesse.main')

@section('banner')

@endsection

@section('content')
	<header>
	    <div id="top_bar">
	        <div id="title_div">
	            <a style="text-decoration:none; color:#121011;" href="https://andriwicaksono.com/">
	                <img alt="Andri Wicaksono Logo" src="{{ asset('jesse/img/glasses.png') }}" width="20%" />
	                <p>Andri Wicaksono</p>
	            </a>
	        </div>
	        <div id="phone_contact_div">    
	            <p><a style="text-decoration:none; color:#147c26;" href="tel:7326081230">+62 819 336 177 07</a></p>
	            <a href="tel:7326081230"><img alt="Cell Phone Icon" src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" style="background-color: #fff;" /></a>
	        </div>
	    </div>
		<div id="about_me_section">
		    <div id="jesse_lange_head_shot">
		        <img alt="Jesse Lange Head Shot" src="{{ asset('/jesse/img/profile.png') }}" />
		    </div>
		    <div id="about_me_summary">
		        <p>Hey, you've found me! I'm Andri, a Full Stack Developer who love app development. I'm a passionate coder, been developing awesome web applications since 2009 (So it's around 10 years experience, mate!). </p>
		        <p>I would love to share my knowledge to help you fulfill your web application needs. Whether it's a website development, company profile, bug fixing, troubleshooting, and those techie stuff. Feel free to contact me, I will be happy to discuss what I can do to help you!</p>
		    </div>
		</div>

	</header>

	<div id="my_portfolio_section">         
	    
	    <h2 class="page_header">Competencies</h2>
	    
	    <div id="client_logos">
	        <div class="slide"><img height="150px" width="200px" alt="Laravel 6" src="{{ asset('/jesse/img/laravel6.jpg') }}"></div>
	        <div class="slide"><img alt="Yii Framework" src="{{ asset('/jesse/img/yii.jpg') }}"></div>
	        <div class="slide"><img alt="HTML CSS" src="{{ asset('/jesse/img/htmlcss.png') }}"></div>
	        <div class="slide"><img alt="Node JS" src="{{ asset('/jesse/img/nodejs.jpg') }}"></div>
	        <div class="slide"><img alt="jQuery" src="{{ asset('/jesse/img/jquery.png') }}"></div>
	        <div class="slide"><img alt="Angular" src="{{ asset('/jesse/img/angular.jpg') }}"></div>
	        <div class="slide"><img alt="Bootstrap" src="{{ asset('/jesse/img/bootstrap.png') }}"></div>
	        <div class="slide"><img alt="Vue JS" src="{{ asset('/jesse/img/vuejs.jpg') }}"></div>
	    </div>

	</div>

	<div style="padding-top:2%;" id="services_section">
	    <img alt="Triangle Backgrounds" class="right_top_corner_triangle_imgs" src="{{ asset('/jesse/img/triangle%20background.gif') }}" />
	    <div id="services">
	        <div class="one_third">
	            <a href="https://jalanjalan.andriwicaksono.com" target="_blank">
	                <img alt="web design icon" src="{{ asset('jesse/img/web%20design%20icon-min.png') }}" />
	                <h3>Travel Notes</h3>
	                <p>I have a passport full of stamps! Find the inspiration and read my travel story here.</p>
	                <h5 class="link"><a href="https://jalanjalan.andriwicaksono.com" target="_blank">Learn More</a></h5>
	            </a>
	        </div>      
	        <div class="one_third">
	            <a href="https://indocoder.com" target="_blank">
	                <img alt="seo icon" src="{{ asset('/jesse/img/seo%20icon-min.png') }}" />
	                <h3>Programming Tutorials</h3>
	                <p>I just love to code! Want to try to code by yourself? Find my programming tutorials here.</p>
	                <h5 class="link"><a href="https://indocoder.com" target="_blank">Learn More</a></h5>
	            </a>
	        </div>
	        <div class="one_third">
	            <a href="{{ url('/portfolio') }}">
	                <img alt="ecommerce icon" src="{{ asset('/jesse/img/ecommerce%20icon-min.png') }}" />
	                <h3>Portolio</h3>
	                <p>In the last 10 years, I have made some interesting web apps, see my portfolio here.</p>
	                <h5 class="link"><a href="{{ url('/portfolio') }}">Learn More</a></h5>
	            </a>
	        </div>
	    </div>
	</div>


	<div style="width:100%; clear:both;" ></div>

@endsection