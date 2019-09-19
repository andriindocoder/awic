<!DOCTYPE html>

<html lang="en">

	@include('layouts.jesse.head')
	
	<body>
		
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
					<a href="tel:7326081230"><img alt="Cell Phone Icon" src="{{ asset('/jesse/img/cell_phone_icon-min.png') }}" /></a>
				</div>
			</div>
		
		</header>
		
		<div class="main_content">
		
			<div id="portfolio_page_div">
				<img alt="Triangle Backgrounds" class="right_top_corner_triangle_imgs" src="{{ asset('/jesse/img/triangle%20background.gif') }}" />
				
				<h1 class="page_header">My Portfolio</h1>
				
				<div>
					<div class="one_third">
						<a href="https://mykitchenintuition.com/" target="_blank" ><img alt="Web Design Project by Jesse Lange" src="{{ asset('/jesse/img/my-kitchen-intuition-min.jpg') }}" /><p>www.mykitchenintuition.com</p></a>
					</div>
					<div class="one_third">
						<a href="https://thebuffbride.com/" target="_blank" ><img alt="Web Design Project by Jesse Lange" src="{{ asset('/jesse/img/the%20buff%20bride-min.jpg') }}" /><p>www.thebuffbride.com</p></a>
					</div>
					<div class="one_third">
						<a href="https://www.messanoassociates.com/" target="_blank" ><img alt="Web Design Project by Jesse Lange" src="{{ asset('/jesse/img/messano-associates-inc-min.jpg') }}" /><p>www.messanoassociates.com</p></a>				
					</div>				
				</div>
				
				<div style="clear:both;"></div>
				
				<div>
					<div class="one_third">
						<a href="https://grfreshmarket.com/" target="_blank" ><img alt="Web Design Project by Jesse Lange" src="{{ asset('/jesse/img/grfresh%20market-min.jpg') }}" /><p>www.grfreshmarket.com</p></a>
					</div>				
					<div class="one_third">
						<a href="https://jerseyshorewave.com/" target="_blank" ><img alt="Web Design Project by Jesse Lange" src="{{ asset('/jesse/img/jersey%20shore%20wave-min.jpg') }}" /><p>www.jerseyshorewave.com</p></a>
					</div>				
					<div class="one_third">
						<a href="http://www.zefrboards.com/" target="_blank" ><img alt="Web Design Project by Jesse Lange" src="{{ asset('/jesse/img/zefr%20redesign-min.jpg') }}" /><p>www.zefrboards.com</p></a>
					</div>
				</div>
			</div>	

			<div style="clear:both;"></div>

			<div id="services_section">
				
				<div id="services">
					<div class="one_third">
						<a href="/web-design.html">
							<img alt="web design icon" src="{{ asset('/jesse/img/web%20design%20icon-min.png') }}" />
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
					
		</div>			
			
		@include('layouts.jesse.footer')
		
	</body>
	
</html>