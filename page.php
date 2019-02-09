<?php 
get_headers();

 ?>
		<header id="header" class="header-fixed-top">
			<nav class="navbar navbar-expand-lg navbar-light bg-color-white">
			  	<a class="navbar-brand" href="http://localhost/mdptoday/"><img class="img-logo" src="img/logos/logoslogan-08.png" alt="MDP Today"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border:none;">
				    <span class="navbar-toggler-icon"></span>
				</button>
				<div id="container">
					<form role="search" method="get" id="searchform" action="">
						<label for="s">
					  		<i class="material-icons">&#xE8B6;</i>
						 </label>
						 <input type="text" value="" placeholder="buscar" class="" id="s" />
					</form>
				</div>
			    	<button class="btnz d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3 weather-btn" id="weather">
			    		<img id="weather-icon" src="" alt="Sin conexion" class="weather-img"><span id="current-temp" class="temp-actual"></span><span class="max-min" id="max-Temp"></span>
			    		<span class="max-min" id="min-temp"></span>
			    	</button>
			    </div>
			  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
				  	<div id="hidden-lg-bar" class="row container-bar">
				  		<div class="medium-bar">
				  			<img src="img/weather/cloudy-w.png" alt="Nublado" class="weather-img-mobile"><span id="current-temp-mobile" class="temp-actual-mobile"></span><span class="max-min" id="max-Temp">23&#176;</span>
				    		<span class="max-min" id="min-temp">11&#176;</span>
				  		</div>
				  		<div class="medium-bar">
				  			<a href="#" title="Dale Me Gusta a nuestra Fan Page de Facebook"><p class="social-icon top-social-mobile">F</p></a>
							<a href="#" title="Seguinos en Twitter"><p class="social-icon top-social-mobile">T</p></a>
							<a href="#" title="Sumate a nuestro Instagram"><p class="social-icon top-social-mobile">I</p></a>
				  		</div>
				  	</div>
				    <ul class="navbar-nav mr-auto">
				     	<li class="nav-item active">
				        	<a class="nav-link closeMenu" href="http://localhost/mdptoday/"><img alt="" src="img/icons/home-b.png" class="icon-btn">Home</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link closeMenu" href="http://localhost/mdptoday/"><img src="img/icons/noticias-b.png" class="icon-btn">Noticias</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link closeMenu" href="http://localhost/mdptoday/category/deportes/"><img src="img/icons/deportes-b.png" class="icon-btn">Deportes</a>
				      	</li>
				        <li class="nav-item">
				        	<a class="nav-link closeMenu" href="http://localhost/mdptoday/category/tecnologia/"><img src="img/icons/tecnologia-b.png" class="icon-btn">Tecnología</a>
				      	</li>
				        <li class="nav-item">
				        	<a class="nav-link closeMenu" href="http://localhost/mdptoday/category/entretenimiento/"><img src="img/icons/entretenimiento-b.png" class="icon-btn">Entretenimiento</a>
				      	</li>
				    </ul>
			  	</div>
			</nav>
		</header><!-- /header -->


		<div class="row">
			<div class="col-md-6 category-content" id="category-content">
				<div class="icon-content">
					
				</div>
				<h2 class="category-title" id="category-title">Categoria</h2>
			</div>
			<div class="col-md-6 social-block" id="social-block">
				<div class="col-sm-12 social-row right-row">
						<a href="#"><h2 class="social-icon blue">F</h2></a>
						<a href="#"><h2 class="social-icon blue">I</h2></a>
						<a href="#"><h2 class="social-icon blue">T</h2></a>
					</div>
			</div>
		</div>
			<div class="row">
				<section class="news-container col-md-10">
					<div class="row entry-title-content">
						<h1 class="col-xs-12 entry-title">Titulo de la noticia</h1>
					</div>
					<div class="row entry-important-content">
						<h5 class="col-xs-12 entry-important">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
						</h5>
					</div>
		<div class="row">
			<span class="date" id="dateField">20 de julio de 2018</span>
			<h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
		</div>
					<div class="img-content" id="img-content">
						
					</div>
					<div class="row font-content">
						<h5 class="font" id="font">Fuente: Diario</h5>
					</div>
					<div class="text-content" id="text-content">
						<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					
				</section>
				<aside class="side-bar col-md-2">
					
				</aside>
			</div>
			<footer>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 social-row">
						<a href="#"><p class="social-icon">F</p></a>
						<a href="#"><p class="social-icon">I</p></a>
						<a href="#"><p class="social-icon">T</p></a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<h4 class="copyright">&copy;2018 Mar Del Plata Today</h4>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<h4 class="copyright forced-right">by <a href="http://maingroup.co" title="Diseño y Desarrollo web" class="atribution">Main Group</a></h4>
					</div>
				</div>
		</footer>
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>