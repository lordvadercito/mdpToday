function get_cat_icon($las_categorias) {
foreach( $las_categorias as $category) {

if ($category->cat_name == 'Tecnologia') {
echo "<img class='category-icon' src='https://mdptoday.com.ar/wp-content/themes/mdptoday/img/icons/tecnologia-b.png'/>";
} elseif ($category->cat_name == 'Deportes') {
echo "<img class='category-icon' src='https://mdptoday.com.ar/wp-content/themes/mdptoday/img/icons/deportes-b.png'/>";
} elseif ($category->cat_name == 'Entretenimiento'){
echo "<img class='category-icon' src='https://mdptoday.com.ar/wp-content/themes/mdptoday/img/icons/entretenimiento-b.png'/>";
}

}
}






add_action( 'widgets_init', 'authorWidgetInit' );

function authorWidgetInit(){
register_sidebar(array(
'name' => __('Author','theme-slug'),
'id' => 'author-sidebar',
'description' => __('Original author of the news', 'theme-slug'),
'before_widget' => '<div id="%1$s" class="row font-content %2$s">',
    'after_widget' => '</div>',
'before_title' => '<h5 class="font">',
    'after_title' => '</h5>',
));
}

//Remove hightlight category
/**
* @param $las_categorias
* @return string
*/
//function remove_cat($las_categorias)
//{
//    $name_of_cat = $las_categorias[0]->cat_name;
//    if (is_array($las_categorias) || is_object($las_categorias)) {
//        foreach ($las_categorias as $cat){
//            $name_of_cat = $cat->cat_name;
//            if (strpos($cat->cat_name, 'outstanding') ){
//                $name_of_cat = $cat[1];
//            }
//        }
//    }
//
//
//    echo $name_of_cat;
//}


function get_list_categories(){
return get_list_subcategories(0);
}

//function get_list_subcategories($parent){
//    $result = "";
//
//    $args = array(
//        'taxonomy'=&gt; "category",
//		'parent'=&gt; $parent,
//		'hide_empty' =&gt; 0
//	);
//
//	$categories = get_categories($args);
//
//	foreach($categories as $category)
//        $result .= '&lt;option value="'.$category-&gt;cat_ID.'"&gt;' . $category-&gt;cat_name . '&lt;/option&gt;';
//
//	return $result;
//}
