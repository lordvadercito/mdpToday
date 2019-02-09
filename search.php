<?php 
get_header();
?>
<header id="header" class="header-fixed-top">
	<nav class="navbar navbar-expand-lg navbar-light bg-color-white">
	  	<a class="navbar-brand" href="http://c1240192.ferozo.com/mdptoday/"><img class="img-logo" src="<?php bloginfo('template_url'); ?>/img/logos/logoslogan-08.png" alt="MDP Today"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border:none;">
		    <span class="navbar-toggler-icon"></span>
		</button>
		<div id="container">
			<?php get_search_form(); ?>
		</div>
		<button class="btnz d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3 weather-btn" id="weather">
			<img id="weather-icon" src="" alt="Sin conexion" class="weather-img">
				<span id="current-temp" class="temp-actual"></span>
				<span class="max-min" id="max-Temp"></span>
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
				        	<a class="nav-link closeMenu" href="http://c1240192.ferozo.com/mdptoday/"><img src="<?php bloginfo('template_url'); ?>/img/icons/home-b.png" class="icon-btn">Home</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link closeMenu" href="#news"><img src="<?php bloginfo('template_url'); ?>/img/icons/noticias-b.png" class="icon-btn">Noticias</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link closeMenu" href="http://c1240192.ferozo.com/mdptoday/category/deportes/"><img src="<?php bloginfo('template_url'); ?>/img/icons/deportes-b.png" class="icon-btn">Deportes</a>
				      	</li>
				        <li class="nav-item">
				        	<a class="nav-link closeMenu" href="http://c1240192.ferozo.com/mdptoday/category/tecnologia/"><img src="<?php bloginfo('template_url'); ?>/img/icons/tecnologia-b.png" class="icon-btn">Tecnología</a>
				      	</li>
				        <li class="nav-item">
				        	<a class="nav-link closeMenu" href="http://c1240192.ferozo.com/mdptoday/category/entretenimiento/"><img src="<?php bloginfo('template_url'); ?>/img/icons/entretenimiento-b.png" class="icon-btn">Entretenimiento</a>
				      	</li>
				    </ul>
			  	</div>
			</nav>
		</header><!-- /header -->
		<div class="row sponsor-banner">
			<div class="top-banner">
				
			</div>
		</div>
		<div class="row">
			<span class="offset-sm-1 col-sm-5 date-category" id="datefield">05 de octubre 2018</span>
		</div>	
		<div class="row">
			<div class="section-title-content-center offset-sm-1 col-sm-5">
				<h2 class="section-title"><span class="tiempo-font"></span>Resultados de búsqueda</h2>
			</div>


			<div class="col-sm-6 social-row right-row">
				<a href="#">
					<h2 class="social-icon blue">F</h2>
				</a>
				<a href="#">
					<h2 class="social-icon blue">I</h2>
				</a>
				<a href="#">
					<h2 class="social-icon blue">T</h2>
				</a>
			</div>
			
		</div>
		<div class="row">
			<section class="news-container offset-sm-1 col-md-10">
					<div class="row">

						<?php 
							while(have_posts()) : the_post();
						?>

							<article class="col-lg-4 col-sm-12 article-content news-bottom">
									
								<?php 
									if (has_post_thumbnail()):
										the_post_thumbnail('category-size');
									endif;
								?>
								<h4 class="label-sm"><a class="label-sm" href="<?php echo get_permalink(); ?>">
									<?php the_title(); ?>
								</a></h4>
									<p class="content-sm">
										<?php echo get_the_excerpt(); ?> 
										<a href="<?php echo get_permalink(); ?>" >Leer más</a>
									</p>
							</article>


						 <?php endwhile; ?>

					</div>
			</section>
		</div>
<?php 
	get_footer();
?>