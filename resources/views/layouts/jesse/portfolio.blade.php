<!DOCTYPE html>

<html lang="en">

	@include('layouts.jesse.head')
	
	<body>
		
		<header>
		    <div id="top_bar">
		        <div id="title_div">
		            <a style="text-decoration:none; color:#121011;" href="{{ url('/') }}">
		                <img alt="Andri Wicaksono Logo" src="{{ asset('jesse/img/glasses.png') }}" width="20%" />
		                <p>Andri Wicaksono</p>
		            </a>
		        </div>
		        <div id="phone_contact_div">    
		            <p><a style="text-decoration:none; color:#147c26;" href="tel:7326081230">+62 819 336 177 07</a></p>
		            <a href="tel:7326081230"><img alt="Cell Phone Icon" src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" style="background-color: #fff;" /></a>
		        </div>
		    </div>

		</header>
		
		<div class="main_content">
		
			<div id="portfolio_page_div">
				<img alt="Triangle Backgrounds" class="right_top_corner_triangle_imgs" src="{{ asset('/jesse/img/triangle%20background.gif') }}" />
				
				<h1 class="page_header">My Portfolio</h1>
				
				<div>
					<div class="one_third">
						<a href="https://vta.dephub.go.id/ds/developer" target="_blank" ><img alt="Web Development Projects by Andri Wicaksono" src="{{ asset('/jesse/img/vta.png') }}" /><p>vta.dephub.go.id</p></a>
						<div align="center">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/htmlcss.png') }}" alt="">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/yii.jpg') }}" alt="">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/bootstrap.png') }}" alt="">
						</div>
					</div>
					<div class="one_third">
						<a href="http://oppriok.dephub.go.id/" target="_blank" ><img alt="Web Development Projects by Andri Wicaksono" src="{{ asset('/jesse/img/priok.png') }}" /><p>oppriok.dephub.go.id</p></a>
						<div align="center">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/htmlcss.png') }}" alt="">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/logolaravel.png') }}" alt="">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/bootstrap.png') }}" alt="">
						</div>
					</div>
					<div class="one_third">
						<a href="https://todo.indocoder.com/" target="_blank" ><img alt="Web Development Projects by Andri Wicaksono" src="{{ asset('/jesse/img/todo.png') }}" /><p>todo.indocoder.com</p></a>
						<div align="center">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/htmlcss.png') }}" alt="">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/angular.jpg') }}" alt="">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/bootstrap.png') }}" alt="">
						</div>		
					</div>				
				</div>
				
				<div style="clear:both;"></div>
				
				<div>
					<div class="one_third">
						<a href="http://bp3ksdmt.dephub.go.id/" target="_blank" ><img alt="Web Development Projects by Andri Wicaksono" src="{{ asset('/jesse/img/bp3ksdmt.png') }}" /><p>bp3ksdmt.dephub.go.id</p></a>
						<div align="center">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/htmlcss.png') }}" alt="">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/yii.jpg') }}" alt="">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/bootstrap.png') }}" alt="">
						</div>
					</div>				
					<div class="one_third">
						<a href="https://inaportnet.dephub.go.id/" target="_blank" ><img alt="Web Development Projects by Andri Wicaksono" src="{{ asset('/jesse/img/inaportnet.png') }}" /><p>inaportnet.dephub.go.id</p></a>
						<div align="center">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/htmlcss.png') }}" alt="">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/yii.jpg') }}" alt="">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/bootstrap.png') }}" alt="">
						</div>
					</div>				
					<div class="one_third">
						<a href="http://indocoder.com/" target="_blank" ><img alt="Web Development Projects by Andri Wicaksono" src="{{ asset('/jesse/img/indocoder.png') }}" /><p>indocoder.com</p></a>
						<div align="center">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/htmlcss.png') }}" alt="">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/wordpress.png') }}" alt="">
							<img style="height: 30px; width: 30px; border: none;" src="{{ asset('/jesse/img/bootstrap.png') }}" alt="">
						</div>
					</div>
				</div>

				<div style="clear:both;"></div>
				
				<div>
					<div class="one_third">
						<a href="https://github.com/andriindocoder/" target="_blank" ><img alt="Web Development Projects by Andri Wicaksono" src="{{ asset('/jesse/img/github.png') }}" /><p>github.com/andriindocoder</p></a>
					</div>				
					<div class="one_third">
						<a href="https://gitlab.com/sniperandri" target="_blank" ><img alt="Web Development Projects by Andri Wicaksono" src="{{ asset('/jesse/img/gitlab.png') }}" /><p>gitlab.com/sniperandri</p></a>
					</div>				
					<div class="one_third">
						<a href="http://bitbucket.org/andriwicaksono" target="_blank" ><img alt="Web Development Projects by Andri Wicaksono" src="{{ asset('/jesse/img/bitbucket.png') }}" /><p>bitbucket.org/andriwicaksono</p></a>
					</div>
				</div>
			</div>	
					
		</div>			
			
		@include('layouts.jesse.footer')
		
	</body>
	
</html>