<?php
get_header();

?>

    <header id="header" class="header-fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-color-white">
            <a class="navbar-brand" href="http://c1240192.ferozo.com/mdptoday/"><img class="img-logo"
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
                        <img src="<?php bloginfo('template_url') ?>/img/weather/cloudy-w.png" alt="Nublado"
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
                           target="_blank" title="Sumate a nuestro Instagram"><p class="social-icon top-social-mobile">
                                I</p>
                        </a>
                    </div>
                </div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link closeMenu" href="http://c1240192.ferozo.com/mdptoday/"><img
                                    src="<?php bloginfo('template_url'); ?>/img/icons/home-b.png" class="icon-btn">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link closeMenu" href="http://c1240192.ferozo.com/mdptoday/category/noticias/"><img
                                    src="<?php bloginfo('template_url'); ?>/img/icons/noticias-b.png" class="icon-btn">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link closeMenu" href="http://c1240192.ferozo.com/mdptoday/category/deportes/"><img
                                    src="<?php bloginfo('template_url'); ?>/img/icons/deportes-b.png" class="icon-btn">Deportes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link closeMenu"
                           href="http://c1240192.ferozo.com/mdptoday/category/tecnologia/"><img
                                    src="<?php bloginfo('template_url'); ?>/img/icons/tecnologia-b.png"
                                    class="icon-btn">Tecnología</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link closeMenu"
                           href="http://c1240192.ferozo.com/mdptoday/category/entretenimiento/"><img
                                    src="<?php bloginfo('template_url'); ?>/img/icons/entretenimiento-b.png"
                                    class="icon-btn">Entretenimiento</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header><!-- /header -->


    <div class="row">
<?php while (have_posts()) : the_post() ?>
    <div class="col-md-6 category-content" id="category-content">
        <div class="icon-content">
            <?php
            $the_categories = get_the_category();
            get_cat_icon($the_categories);
            ?>
        </div>
            <h2 class=" category-title" id="category-title"><?php $the_categories = get_the_category();
        $parent = get_cat_name($the_categories[0]->category_parent);
        if (!empty($parent)) {
            echo $parent;
        } else {
            echo $the_categories[0]->cat_name;
        } ?></h2>
    </div>
    <div class="col-md-6 social-block" id="social-block">
        <div class="col-sm-12 social-row right-row">
            <a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank"><h2
                        class="social-icon blue">F</h2></a>
            <a href="whatsapp://send?text=<?php echo get_permalink(); ?>" target="_blank"><h2 class="social-icon blue">
                    W</h2></a>
            <a href="http://twitter.com/home?status=<?php echo get_permalink(); ?>" target="_blank"><h2
                        class="social-icon blue">T</h2></a>
        </div>
    </div>
    </div>
    <div class="row">
        <section class="news-container col-md-10">
            <div class="row entry-title-content">
                <h1 class="col-xs-12 entry-title"><?php the_title(); ?></h1>
            </div>
            <div class="row entry-important-content">
                <h5 class="col-xs-12 entry-important"><?php the_excerpt(); ?>
                </h5>
            </div>
            <div class="row">
                <span class="date" id="dateField"><?php the_date(); ?></span>
                <h4 class="span-content-inner d-none d-block d-sm-none" id="dateFieldSmall"></h4>
            </div>
            <div class="img-content" id="img-content">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('full');
                }; ?>
            </div>
            <div class="row font-content">


                <?php
                if (get_the_author_meta('url')) {
                    // Author has website url
                    $author_url = get_the_author_meta('url');
                } else {
                    // Author doesn't have website url, so get Author Posts Page
                    $author_url = get_author_posts_url(get_the_author_meta('ID'));
                }
                ?>

                <h5 class="font" id="font"><a class="author-link"
                                              href="<?php echo $author_url; ?>"
                                              target="_blank"><?php get_author_icon(get_the_author_meta($field = 'display_name'));
                        the_author(); ?></a></h5>


            </div>

            <div class="text-content" id="text-content">
                <p class="text"><?php the_content(); ?></p>
            </div>

        </section>
        <aside class="side-bar col-md-2">

        </aside>
    </div>
<?php endwhile; ?>
<?php
get_footer();
?>