<?php

// подключение меню
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}
// подключение меню конец
add_theme_support('post-thumbnails');



if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'Боковая колонка интернет магазина',
        'id' => 'shop_sidebar',
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}


//require get_template_directory().'/penguin-theme-settings/penguin-theme-settings.php';

/*function __search_by_title_only( $search, &$wp_query )
{
    global $wpdb;
    if ( empty( $search ) )
        return $search; // skip processing - no search term in query
    $q = $wp_query->query_vars;
    $n = ! empty( $q['exact'] ) ? '' : '%';
    $search =
    $searchand = '';
    foreach ( (array) $q['search_terms'] as $term ) {
        $term = esc_sql( $wpdb->esc_like($term) );
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }
    if ( ! empty( $search ) ) {
        $search = " AND ({$search}) ";
        if ( ! is_user_logged_in() )
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
    return $search;
}
add_filter( 'posts_search', '__search_by_title_only', 500, 2 );
*/
