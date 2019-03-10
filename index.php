<?php
get_header();

?>
    <body>
<header id="header" class="header-fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-color-white">
        <a class="navbar-brand" href="index.php"><img class="img-logo"
                                                      src="<?php bloginfo('template_url'); ?>/img/logos/logoslogan-08.png"
                                                      alt="MDP Today"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                style="border:none;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="container">
            <?php get_search_form(); ?>
        </div>
        <button class="btnz d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3 weather-btn" id="weather">
            <img id="weather-icon" src="" alt="Sin conexion" class="weather-img"><span id="current-temp"
                                                                                       class="temp-actual"></span><span
                    class="max-min" id="max-Temp"></span>
            <span class="max-min" id="min-temp"></span>
        </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div id="hidden-lg-bar" class="row container-bar">
                <div class="medium-bar">
                    <img src="<?php bloginfo('template_url'); ?>/img/weather/cloudy-w.png" alt="Nublado"
                         class="weather-img-mobile"><span id="current-temp-mobile"
                                                          class="temp-actual-mobile"></span><span class="max-min"
                                                                                                  id="max-Temp">23&#176;</span>
                    <span class="max-min" id="min-temp">11&#176;</span>
                </div>
                <div class="medium-bar">
                    <a href="https://m.facebook.com/mdptoday/?ref=bookmarks" target="_blank"
                       title="Dale Me Gusta a nuestra Fan Page de Facebook"><p
                                class="social-icon top-social-mobile">F</p></a>
                    <a href="https://mobile.twitter.com/Mdptoday" target="_blank" title="Seguinos en Twitter"><p
                                class="social-icon top-social-mobile">T</p></a>
                    <a href="https://instagram.com/mdptoday?utm_source=ig_profile_share&igshid=11reex8ukkm8l"
                       target="_blank" title="Sumate a nuestro Instagram"><p class="social-icon top-social-mobile">I</p>
                    </a>
                </div>
            </div>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link closeMenu" href="#outstanding-news"><img
                                src="<?php bloginfo('template_url'); ?>/img/icons/home-b.png" class="icon-btn">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link closeMenu" href="#news"><img
                                src="<?php bloginfo('template_url'); ?>/img/icons/noticias-b.png" class="icon-btn">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link closeMenu" href="#sports"><img
                                src="<?php bloginfo('template_url'); ?>/img/icons/deportes-b.png" class="icon-btn">Deportes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link closeMenu" href="#tecnology"><img
                                src="<?php bloginfo('template_url'); ?>/img/icons/tecnologia-b.png" class="icon-btn">Tecnología</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link closeMenu" href="#entertainment"><img
                                src="<?php bloginfo('template_url'); ?>/img/icons/entretenimiento-b.png"
                                class="icon-btn">Entretenimiento</a>
                </li>
            </ul>
        </div>
    </nav>
</header><!-- /header -->
<div class="row sponsor-banner d-none d-md-block" style="margin: 90px 0 10px 0;">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-6107707177443194",
            enable_page_level_ads: true
        });
    </script>
</div>
<section class="container" id="outstanding-news">
    <div class="row span-content d-none d-md-block">
        <h4 class="span-content-inner" id="datefield"></h4>
    </div>
    <div class="row initial d-none d-sm-block">
        <div class="section-title-content min-top col-lg-4 col-md-6 col-sm-12" id="outstanding-news-title">
            <img class="section-icon" src="<?php bloginfo('template_url'); ?>/img/icons/noticias-destacadas-w.png"
                 alt="Noticias Destacadas">
            <h2 class="section-title">Noticias Destacadas</h2>
        </div>
        <div class="social-top-content col-md-4 d-md-block d-xs-none d-sm-none">
            <a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank"><h2
                        class="social-icon blue">F</h2></a>
            <a href="" target="_blank"><h2 class="social-icon blue">I</h2></a>
            <a href="http://twitter.com/home?status=<?php echo get_permalink(); ?>" target="_blank"><h2
                        class="social-icon blue">T</h2></a>
        </div>
    </div>
    <div class="row news-content">
        <article class="col-lg-8 col-md-8 col-sm-12 article-content" id="principal-news-lg">

            <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
            <?php query_posts('category_name=outstanding-news-lg&posts_per_page=1');
            {
                while (have_posts()) : the_post(); ?>
                    <a style="color:white" href="<?php echo get_permalink(); ?>">
                        <div class="row entry-important-content">
                            <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                the_author(); ?></p>
                            <div class="entry-important-wrapper">

                                <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>
                                <div class="d-none d-md-block"><?php the_excerpt(); ?></div>
                            </div>
                            <?php
                            if (has_post_thumbnail()):
                                the_post_thumbnail('important-size');

                            endif;
                            ?>
                        </div>
                    </a>
                <?php endwhile;
            } ?>
        </article>
        <div class="col-lg-4 col-md-4 col-sm-12 article-content margin-blank">
            <article class="forced-news">
                <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
                <?php query_posts('category_name=outstanding-news-2&posts_per_page=1');
                {
                    while (have_posts()) : the_post(); ?>
                        <a style="color:white" href="<?php echo get_permalink(); ?>">
                            <div class="row entry-secondary-content">
                                <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                    the_author(); ?></p>
                                <div class="entry-important-wrapper">
                                    <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>

                                </div>
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('important-size');

                                endif;
                                ?>
                            </div>
                        </a>
                    <?php endwhile;
                } ?>
            </article>
            <article class="forced-news">
                <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
                <?php query_posts('category_name=outstanding-news-3&posts_per_page=1');
                {
                    while (have_posts()) : the_post(); ?>
                        <a style="color:white" href="<?php echo get_permalink(); ?>">
                            <div class="row entry-secondary-content">
                                <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                    the_author(); ?></p>
                                <div class="entry-important-wrapper">
                                    <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>

                                </div>
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('important-size');

                                endif;
                                ?>
                            </div>
                        </a>
                    <?php endwhile;
                } ?>
            </article>
            <article class="forced-news">
                <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
                <?php query_posts('category_name=outstanding-news-4&posts_per_page=1');
                {
                    while (have_posts()) : the_post(); ?>
                        <a style="color:white" href="<?php echo get_permalink(); ?>">
                            <div class="row entry-secondary-content">
                                <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                    the_author(); ?></p>
                                <div class="entry-important-wrapper">
                                    <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>

                                </div>
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('important-size');

                                endif;
                                ?>
                            </div>
                        </a>
                    <?php endwhile;
                } ?>
            </article>
        </div>
    </div>

</section>
<div class="row sponsor-banner">
    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/banners/publicidad-desktop.png"
         alt="Publicidad">
</div>

<!--Sociedad, Noticias en general-->
<section class="container" id="news">

    <div class="row initial">
        <div class="section-title-content min-top col-lg-10 col-md-8 col-sm-12">
            <img src="<?php bloginfo('template_url'); ?>/img/icons/noticias-w.png" alt="Noticias" class="section-icon">
            <h2 class="section-title">Noticias</h2>
        </div>
        <a role="button" href="http://c1240192.ferozo.com/mdptoday/category/noticias/"
           class="col-lg-1 col-md-3 col-sm-2 btn-seemore">Ver más</a>
    </div>
    <div class="social-top-content col-lg-2 d-md-none d-xs-none d-sm-none">
        <a href="#" title="Dale Me Gusta a nuestra Fan Page de Facebook"><p class="social-icon top-social">F</p></a>
        <a href="#" title="Seguinos en Twitter"><p class="social-icon top-social">T</p></a>
        <a href="#" title="Sumate a nuestro Instagram"><p class="social-icon top-social">I</p></a>
    </div>

    <div class="row news-content">
        <article class="col-lg-8 col-md-8 col-sm-12 article-content" id="principal-news-lg">
            <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
            <?php query_posts('category_name=news-big-size&posts_per_page=1');
            {
                while (have_posts()) : the_post(); ?>
                    <a style="color:white" href="<?php echo get_permalink(); ?>">
                        <div class="row entry-important-content">
                            <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                the_author(); ?></p>
                            <div class="entry-important-wrapper">
                                <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>
                                <div class="d-none d-md-block"><?php the_excerpt(); ?></div>
                            </div>
                            <?php
                            if (has_post_thumbnail()):
                                the_post_thumbnail('important-size');

                            endif;
                            ?>
                        </div>
                    </a>
                <?php endwhile;
            } ?>
        </article>
        <div class="col-lg-4 col-md-4 col-sm-12 article-content margin-blank">
            <article class="forced-news">
                <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
                <?php query_posts('category_name=news-small-size_1&posts_per_page=1');
                {
                    while (have_posts()) : the_post(); ?>
                        <a style="color:white" href="<?php echo get_permalink(); ?>">
                            <div class="row entry-secondary-content">
                                <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                    the_author(); ?></p>
                                <div class="entry-important-wrapper">
                                    <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>

                                </div>
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('important-size');

                                endif;
                                ?>
                            </div>
                        </a>
                    <?php endwhile;
                } ?>
            </article>
            <article class="forced-news">
                <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
                <?php query_posts('category_name=news-small-size_2&posts_per_page=1');
                {
                    while (have_posts()) : the_post(); ?>
                        <a style="color:white" href="<?php echo get_permalink(); ?>">
                            <div class="row entry-secondary-content">
                                <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                    the_author(); ?></p>
                                <div class="entry-important-wrapper">
                                    <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>

                                </div>
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('important-size');

                                endif;
                                ?>
                            </div>
                        </a>
                    <?php endwhile;
                } ?>
            </article>
            <article class="forced-news">
                <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
                <?php query_posts('category_name=news-small-size_3&posts_per_page=1');
                {
                    while (have_posts()) : the_post(); ?>
                        <a style="color:white" href="<?php echo get_permalink(); ?>">
                            <div class="row entry-secondary-content">
                                <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                    the_author(); ?></p>
                                <div class="entry-important-wrapper">
                                    <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>

                                </div>
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('important-size');

                                endif;
                                ?>
                            </div>
                        </a>
                    <?php endwhile;
                } ?>
            </article>
        </div>
    </div>

</section>

<div class="row sponsor-banner">
    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/banners/publicidad-desktop.png"
         alt="Publicidad">
</div>

<!-- Deportes -->
<section class="container" id="sports">
    <div class="row span-content d-none d-md-block">
        <h4 class="span-content-inner" id="dateField"></h4>
    </div>

    <div class="row initial">
        <div class="section-title-content min-top col-lg-10 col-md-8 col-sm-12">
            <img src="<?php bloginfo('template_url'); ?>/img/icons/deportes-w.png" alt="Deportes" class="section-icon">
            <h2 class="section-title">Deportes</h2>
        </div>
        <a role="button" href="http://c1240192.ferozo.com/mdptoday/category/deportes/"
           class="col-lg-1 col-md-3 col-sm-2 btn-seemore">Ver más</a>
    </div>
    <div class="social-top-content col-lg-2 d-md-none d-xs-none d-sm-none">
        <a href="https://m.facebook.com/mdptoday/?ref=bookmarks" target="_blank"
           title="Dale Me Gusta a nuestra Fan Page de Facebook"><p
                    class="social-icon top-social-mobile">F</p></a>
        <a href="https://mobile.twitter.com/Mdptoday" target="_blank" title="Seguinos en Twitter"><p
                    class="social-icon top-social-mobile">T</p></a>
        <a href="https://instagram.com/mdptoday?utm_source=ig_profile_share&igshid=11reex8ukkm8l" target="_blank"
           title="Sumate a nuestro Instagram"><p class="social-icon top-social-mobile">I</p>
        </a>
    </div>

    <div class="row news-content">
        <article class="col-lg-8 col-md-8 col-sm-12 article-content" id="principal-news-lg">
            <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
            <?php query_posts('category_name=sports-big-size&posts_per_page=1');
            {
                while (have_posts()) : the_post(); ?>
                    <a style="color:white" href="<?php echo get_permalink(); ?>">
                        <div class="row entry-important-content">
                            <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                the_author(); ?></p>
                            <div class="entry-important-wrapper">
                                <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>
                                <div class="d-none d-md-block"><?php the_excerpt(); ?></div>
                            </div>
                            <?php
                            if (has_post_thumbnail()):
                                the_post_thumbnail('important-size');

                            endif;
                            ?>
                        </div>
                    </a>
                <?php endwhile;
            } ?>
        </article>
        <div class="col-lg-4 col-md-4 col-sm-12 article-content margin-blank">
            <article class="forced-news">
                <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
                <?php query_posts('category_name=sports-small-size_1&posts_per_page=1');
                {
                    while (have_posts()) : the_post(); ?>
                        <a style="color:white" href="<?php echo get_permalink(); ?>">
                            <div class="row entry-secondary-content">
                                <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                    the_author(); ?></p>
                                <div class="entry-important-wrapper">
                                    <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>

                                </div>
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('important-size');

                                endif;
                                ?>
                            </div>
                        </a>
                    <?php endwhile;
                } ?>
            </article>
            <article class="forced-news">
                <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
                <?php query_posts('category_name=sports-small-size_2&posts_per_page=1');
                {
                    while (have_posts()) : the_post(); ?>
                        <a style="color:white" href="<?php echo get_permalink(); ?>">
                            <div class="row entry-secondary-content">
                                <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                    the_author(); ?></p>
                                <div class="entry-important-wrapper">
                                    <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>

                                </div>
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('important-size');

                                endif;
                                ?>
                            </div>
                        </a>
                    <?php endwhile;
                } ?>
            </article>
            <article class="forced-news">
                <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
                <?php query_posts('category_name=sports-small-size_3&posts_per_page=1');
                {
                    while (have_posts()) : the_post(); ?>
                        <a style="color:white" href="<?php echo get_permalink(); ?>">
                            <div class="row entry-secondary-content">
                                <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                    the_author(); ?></p>
                                <div class="entry-important-wrapper">
                                    <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>

                                </div>
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('important-size');

                                endif;
                                ?>
                            </div>
                        </a>
                    <?php endwhile;
                } ?>
            </article>
        </div>
    </div>

</section>

<div class="row sponsor-banner">
    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/banners/publicidad-desktop.png"
         alt="Publicidad">
</div>

<!-- Tecnologia -->
<section class="container" id="tecnology">
    <div class="row initial">
        <div class="section-title-content min-top col-lg-10 col-md-8 col-sm-12">
            <img src="<?php bloginfo('template_url'); ?>/img/icons/tecnologia-w.png" alt="Tecnologia"
                 class="section-icon">
            <h2 class="section-title">Tecnología</h2>
        </div>
        <a role="button" href="http://c1240192.ferozo.com/mdptoday/category/tecnologia/"
           class="col-lg-1 col-md-3 col-sm-2 btn-seemore">Ver más</a>
    </div>
    <div class="row news-content">
        <article class="col-lg-8 col-md-8 col-sm-12 article-content">
            <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
            <?php query_posts('category_name=tecnology-big-size&posts_per_page=1');
            {
                while (have_posts()) : the_post(); ?>
                    <a style="color:white" href="<?php echo get_permalink(); ?>">
                        <div class="row entry-important-content">
                            <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                the_author(); ?></p>
                            <div class="entry-important-wrapper">
                                <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>
                                <div class="d-none d-md-block"><?php the_excerpt(); ?></div>
                            </div>
                            <?php
                            if (has_post_thumbnail()):
                                the_post_thumbnail('important-size');

                            endif;
                            ?>
                        </div>
                    </a>
                <?php endwhile;
            } ?>
        </article>
        <div class="col-lg-4 col-md-4 col-sm-12 article-content margin-blank">
            <article class="forced-news">
                <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
                <?php query_posts('category_name=tecnology-small-size_1&posts_per_page=1');
                {
                    while (have_posts()) : the_post(); ?>
                        <a style="color:white" href="<?php echo get_permalink(); ?>">
                            <div class="row entry-secondary-content">
                                <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                    the_author(); ?></p>
                                <div class="entry-important-wrapper">
                                    <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>
                                </div>
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('important-size');

                                endif;
                                ?>
                            </div>
                        </a>
                    <?php endwhile;
                } ?>
            </article>
            <article class="forced-news">

                <?php query_posts('category_name=tecnology-small-size_2&posts_per_page=1');
                {
                    while (have_posts()) : the_post(); ?>
                        <a style="color:white" href="<?php echo get_permalink(); ?>">
                            <div class="row entry-secondary-content">
                                <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                    the_author(); ?></p>
                                <div class="entry-important-wrapper">
                                    <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>
                                </div>
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('important-size');

                                endif;
                                ?>
                            </div>
                        </a>
                    <?php endwhile;
                } ?>
            </article>
            <article class="forced-news">

                <?php query_posts('category_name=tecnology-small-size_3&posts_per_page=1');
                {
                    while (have_posts()) : the_post(); ?>
                        <a style="color:white" href="<?php echo get_permalink(); ?>">
                            <div class="row entry-secondary-content">
                                <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                    the_author(); ?></p>
                                <div class="entry-important-wrapper">
                                    <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>
                                </div>
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('important-size');

                                endif;
                                ?>
                            </div>
                        </a>
                    <?php endwhile;
                } ?>
            </article>
        </div>
    </div>

</section>
<div class="row sponsor-banner">
    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/banners/publicidad-desktop.png"
         alt="Publicidad">
</div>
<section class="container" id="entertainment">
    <div class="row initial">
        <div class="section-title-content min-top col-lg-10 col-md-8 col-sm-12">
            <img src="<?php bloginfo('template_url'); ?>/img/icons/entretenimiento-w.png" alt="Entretenimiento"
                 class="section-icon">
            <h2 class="section-title">Entretenimiento</h2>
        </div>
        <a role="button" href="http://c1240192.ferozo.com/mdptoday/category/entretenimiento/"
           class="col-lg-1 col-md-3 col-sm-2 btn-seemore">Ver más</a>
    </div>
    <div class="row news-content">
        <article class="col-lg-8 col-md-8 col-sm-12 article-content">
            <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
            <?php query_posts('category_name=entretainment-big-size&posts_per_page=1');
            {
                while (have_posts()) : the_post(); ?>
                    <a style="color:white" href="<?php echo get_permalink(); ?>">
                        <div class="row entry-important-content">
                            <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                the_author(); ?></p>
                            <div class="entry-important-wrapper">
                                <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>
                                <div class="d-none d-md-block"><?php the_excerpt(); ?></div>
                            </div>
                            <?php
                            if (has_post_thumbnail()):
                                the_post_thumbnail('important-size');

                            endif;
                            ?>
                        </div>
                    </a>
                <?php endwhile;
            } ?>
        </article>
        <div class="col-lg-4 col-md-4 col-sm-12 article-content margin-blank">
            <article class="forced-news">
                <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
                <?php query_posts('category_name=entretainment-small-size_1&posts_per_page=1');
                {
                    while (have_posts()) : the_post(); ?>
                        <a style="color:white" href="<?php echo get_permalink(); ?>">
                            <div class="row entry-secondary-content">
                                <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                    the_author(); ?></p>
                                <div class="entry-important-wrapper">
                                    <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>
                                </div>
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('important-size');

                                endif;
                                ?>
                            </div>
                        </a>
                    <?php endwhile;
                } ?>
            </article>
            <article class="forced-news">

                <?php query_posts('category_name=entretainment-small-size_2&posts_per_page=1');
                {
                    while (have_posts()) : the_post(); ?>
                        <a style="color:white" href="<?php echo get_permalink(); ?>">
                            <div class="row entry-secondary-content">
                                <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                    the_author(); ?></p>
                                <div class="entry-important-wrapper">
                                    <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>
                                </div>
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('important-size');

                                endif;
                                ?>
                            </div>
                        </a>
                    <?php endwhile;
                } ?>
            </article>
            <article class="forced-news">

                <?php query_posts('category_name=entretainment-small-size_3&posts_per_page=1');
                {
                    while (have_posts()) : the_post(); ?>
                        <a style="color:white" href="<?php echo get_permalink(); ?>">
                            <div class="row entry-secondary-content">
                                <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                    the_author(); ?></p>
                                <div class="entry-important-wrapper">
                                    <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>
                                </div>
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('important-size');

                                endif;
                                ?>
                            </div>
                        </a>
                    <?php endwhile;
                } ?>
            </article>
        </div>
</section>

<section class="container" id="other-news">
    <div class="row news-content">
        <div class="section-title-content min-top col-lg-12 col-md-12 col-sm-12 borderless">
            <img src="<?php bloginfo('template_url'); ?>/img/icons/noticias-w.png" alt="Noticias" class="section-icon">
            <h2 class="section-title">Más noticias</h2>
        </div>
        <!-- <a role="button" type="button" href="" class="col-lg-1 col-md-3 col-sm-2 btn btn-seemore">Ver más</a>	 -->
    </div>
    <div class="row news-content">


        <?php query_posts('posts_per_page=100');
        {
            while (have_posts()) : the_post(); ?>
                <article class="other-news col-md-4 col-xs-12">
                    <a style="color:white" href="<?php echo get_permalink(); ?>">
                        <div class="row entry-secondary-content">
                            <p class="font-style-icon"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                                the_author(); ?></p>
                            <div class="entry-important-wrapper">
                                <h5 class="col-xs-12 entry-important-title"><?php the_title(); ?></h5>
                            </div>
                            <?php
                            if (has_post_thumbnail()):
                                the_post_thumbnail('important-size');

                            endif;
                            ?>
                        </div>
                    </a>
                </article>
            <?php endwhile;
        } ?>


    </div>
</section>
<?php get_footer(); ?>