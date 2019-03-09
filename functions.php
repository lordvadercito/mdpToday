<?php

// Adding post thumbnail support
add_theme_support('post-thumbnails');

// Removing the [...] in the excerpt
function mqw_trim_excerpt($text)
{
    return rtrim($text, '[...]');
}

add_filter('get_the_excerpt', 'mqw_trim_excerpt');

add_image_size('category-size', '396', '190');

add_image_size('important-size', '1200', '1200');

add_image_size('secondary-size', '300', '300');

//Register widget
add_action('widgets_init', 'authorWidgetInit');

function authorWidgetInit()
{
    register_sidebar(array(
        'name' => __('Author', 'theme-slug'),
        'id' => 'author-sidebar',
        'description' => __('Original author of the news', 'theme-slug'),
        'before_widget' => '<div id="%1$s" class="row font-content %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="font">',
        'after_title' => '</h5>',
    ));
}


//Changes category icons
function get_cat_icon($las_categorias)
{
    foreach ($las_categorias as $category) {

        if ($category->cat_name == 'Tecnologia') {
            echo "<img class='category-icon' src='http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/icons/tecnologia-b.png'/>";
        } elseif ($category->cat_name == 'Deportes') {
            echo "<img class='category-icon' src='http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/icons/deportes-b.png'/>";
        } elseif ($category->cat_name == 'Entretenimiento') {
            echo "<img class='category-icon' src='http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/icons/entretenimiento-b.png'/>";
        }elseif ($category->cat_name == 'Noticias'){
            echo "<img class='category-icon' src='http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/icons/noticias-b.png'/>";
        }

    }
}

//Change author icon
function get_author_icon($author){
    echo "<img class='author-icon' src='http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/author/".$author.".png'>&nbsp;";
}

// Videos responsive autómaticos
if(!function_exists('video_content_filter')) {
    function video_content_filter($content) {

        // busca algún iFrame en la página
        $pattern = '/<iframe.*?src=".*?(vimeo|youtu\.?be).*?".*?<\/iframe>/';
        preg_match_all($pattern, $content, $matches);

        foreach ($matches[0] as $match) {
            // iFrame encontrado, ahora lo envolvemos en un DIV ...
            $wrappedframe = '<div class="flex-video">' . $match . '</div>';

            // Intercambia el original con el video, ahora encerrado
            $content = str_replace($match, $wrappedframe, $content);
        }
        return $content;
    }
    // Aplicar a areas de contenido de la página o entrada
    add_filter( 'the_content', 'video_content_filter' );

    // Aplicar a los widgets si se quiere
    add_filter( 'widget_text', 'video_content_filter' );
}
?>