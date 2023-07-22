<?php

// JS・CSS
function add_files() {
// JS
wp_enqueue_script( 'jquery.inview.min', get_template_directory_uri() . '/js/jquery.inview.min.js', array( 'jquery' ), '1.0.0', true );
wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), filemtime( get_theme_file_path( '/js/main.js' ) ), true );

// CSS

if ( ( is_page_template( array('page-top-jp.php','page-top-en.php','page-top-fr.php')) ) ) {
	  wp_enqueue_style( 'top', get_stylesheet_directory_uri() . '/stylesheets/css/top.css', array(), filemtime( get_theme_file_path( '/stylesheets/css/top.css' ) ) );
    }
    
    elseif ( is_page() ) {
      wp_enqueue_style( 'page', get_stylesheet_directory_uri() . '/stylesheets/css/page.css', array(), filemtime( get_theme_file_path( '/stylesheets/css/page.css' ) ) );
    }
		
    elseif ( is_archive() || is_single() ) {
      wp_enqueue_style( 'single', get_stylesheet_directory_uri() . '/stylesheets/css/single.css', array(), filemtime( get_theme_file_path( '/stylesheets/css/single.css' ) ) );
    }

    else {
        wp_enqueue_style( 'page', get_stylesheet_directory_uri() . '/stylesheets/css/page.css', array(), filemtime( get_theme_file_path( '/stylesheets/css/page.css' ) ) );
	}
}
add_action('wp_enqueue_scripts', 'add_files');


//Google Map API
function add_googlemap_script() {
    wp_enqueue_script( 'googlemap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAjG0JgG8ySDX8FDqUwWNlFLU3Jrh6a2W8', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'add_googlemap_script' );


function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyAjG0JgG8ySDX8FDqUwWNlFLU3Jrh6a2W8';
	return $api;
}
 
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

//概要（抜粋）の省略文字
//function my_excerpt_more($more) {
//	return '......read more';
//}
//add_filter('excerpt_more', 'my_excerpt_more');


//固定ページのカテゴリ
//add_action('init','add_categories_for_pages'); 
//function add_categories_for_pages(){ 
//   register_taxonomy_for_object_type('category', 'page'); 
//} 
//add_action( 'pre_get_posts', 'nobita_merge_page_categories_at_category_archive' ); 
//function nobita_merge_page_categories_at_category_archive( $query ) { 

//if ( $query->is_category== true && $query->is_main_query() ) { 
//$query->set('post_type', array( 'post', 'page', 'nav_menu_item')); 
//} 
//} 

//管理画面のCSS
function my_admin_style(){
    wp_enqueue_style( 'my_admin_style', get_template_directory_uri().'/stylesheets/css/my_admin_style.css', "", '1.0.9' );
}
add_action( 'admin_enqueue_scripts', 'my_admin_style' );


//authorページの非表示
//add_filter( 'author_rewrite_rules', '__return_empty_array' );
//function disable_author_archive() {
//	if( $_GET['author'] || preg_match('#/author/.+#', $_SERVER['REQUEST_URI']) ){
//		wp_redirect( home_url( '' ) );
//		exit;
//	}
//}
//add_action('init', 'disable_author_archive');


// 画像の添付ファイルページのリダイレクト
add_action( 'template_redirect', 'attachment404' );

function attachment404() {
  // attachmentページだった場合
  if ( is_attachment() ) {
    global $wp_query;
    $wp_query->set_404();
    status_header(404);
  }
}


// スラッグ jp,en,fr の子孫カテゴリー(ニュース投稿用)を指定用
if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
    function post_is_in_descendant_category( $cats, $_post = null ) {
        foreach ( (array) $cats as $cat ) {
            $descendants = get_term_children( (int) $cat, 'category' );
            if ( $descendants && in_category( $descendants, $_post ) )
                return true;
        }
        return false;
    }
}


// メモ表示行を投稿一覧に追加する
function memo_columns_head($defaults) {
    $defaults['WP_PostMemo'] = 'メモ';
    return $defaults;
}
function memo_columns_content($column_name, $post_ID) {
    if ($column_name == 'WP_PostMemo') {
        $memocontent = get_post_meta( $post_ID, 'mypostmemo', true );
        echo nl2br($memocontent);
    }
}
add_filter('manage_posts_columns', 'memo_columns_head');
add_action('manage_posts_custom_column', 'memo_columns_content', 10, 2);


// メモ入力欄を投稿編集画面に追加する
function _add_custom_mypostmemo()
{
    add_meta_box( 'mymemomypostmemo', 'メモ', '_add_memometa_box', 'post', 'advanced', 'default', NULL );
}
add_action( 'add_meta_boxes', '_add_custom_mypostmemo' );

function _add_memometa_box( $post )
{
    $value = get_post_meta( $post->ID, 'mypostmemo', TRUE );
    echo '<input type="text" name="mypostmemo" value="'.esc_attr( $value ).'" style="width:100%">';
}

//メモの保存処理
function _save_custom_mypostmemo( $post_id )
{
    update_post_meta( $post_id, 'mypostmemo', $_POST[ 'mypostmemo' ] );
    return $post_id;
}
add_action( 'save_post', '_save_custom_mypostmemo' );


remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles');

function setup_my_theme() {
    add_theme_support( 'title-tag' );
 }
 add_action( 'after_setup_theme', 'setup_my_theme');