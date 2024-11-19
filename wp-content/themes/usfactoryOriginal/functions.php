<?php

/**
 * usfactory functions and definitions
 *
 * @package usfactory
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if (!isset($content_width)) {
  $content_width = 640; /* pixels */
}

if (!function_exists('usfactory_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function usfactory_setup()
  {

    /*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on usfactory, use a find and replace
	 * to change 'usfactory' to the name of your theme in all the template files
	 */
    load_theme_textdomain('usfactory', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
    add_theme_support('title-tag');

    /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
    //add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
      'primary' => esc_html__('Primary Menu', 'usfactory'),
    ));

    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
    add_theme_support('html5', array(
      'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ));

    /*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
    add_theme_support('post-formats', array(
      'aside', 'image', 'video', 'quote', 'link',
    ));

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('usfactory_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    )));
  }
endif; // usfactory_setup
add_action('after_setup_theme', 'usfactory_setup');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function usfactory_widgets_init()
{
  register_sidebar(array(
    'name'          => esc_html__('Sidebar', 'usfactory'),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h1 class="widget-title">',
    'after_title'   => '</h1>',
  ));
}
add_action('widgets_init', 'usfactory_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function usfactory_scripts()
{
  wp_enqueue_style('usfactory-style', get_stylesheet_uri());

  wp_enqueue_script('usfactory-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true);

  wp_enqueue_script('usfactory-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'usfactory_scripts');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


wp_enqueue_style('pager-css', get_template_directory_uri() . '/layouts/pager.css');
function mainpagination($pages, $paged, $range = 2, $show_only = false)
{
  ob_start();
  $pages = (int) $pages;    //float型で渡ってくるので明示的に int型 へ
  $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

  //表示テキスト
  $text_first   = "« 最初へ";
  $text_before  = "PREV";
  $text_next    = "NEXT";
  $text_last    = "最後へ »";

  if ($show_only && $pages === 1) {
    // １ページのみで表示設定が true の時
    //echo '<!--<div class="pagination"><span class="current pager">1</span></div>-->';
    return;
  }

  if ($pages === 1) return;    // １ページのみで表示設定もない場合

  if (1 !== $pages) {
    //２ページ以上の時
    echo '<div class="pagerWrap"><ul class="pagerList">';


    if ($paged == 1) {
      //echo '<li class="pagerBtn"><a class="pagerBtnStart none">最初へ</a></li>';
      echo '<li class="pagerBtn"><a class="pagerBtnLink prev none">PREV</a></li>';
    } else {
      //  echo '<li class="pagerBtn"><a class="pagerBtnStart" href="', get_pagenum_link(1) ,'">最初へ</a></li>';
      echo '<li class="pagerBtn"><a class="pagerBtnLink prev" href="', get_pagenum_link($paged - 1), '">PREV</a></li>';
    }

    //リンク表示
    echo '<li class="pagerNumWrap">';
    $omitFlgBefore = false;
    $omitFlgAfter = false;
    for ($i = 1; $i <= $pages; $i++) {


      //最初と最後は必ず表示する
      if ($i == 1 || $i == $pages) {
        if ($paged === $i) {
          echo '<span class="pagerNum"><a class="pagerNumLink current">' . $i . '</a></span>';
        } else {
          echo '<span class="pagerNum"><a href="', get_pagenum_link($i), '" class="pagerNumLink">' . $i . '</a></span>';
        }
      } else {
        //現在のページと、その前後は表示する
        if (($i == ($paged - 1) || $i == $paged || $i == ($paged + 1)) || $paged - 2 == 2 || $paged + 2 == $pages) {
          if ($paged === $i) {
            echo '<span class="pagerNum"><a class="pagerNumLink current">' . $i . '</a></span>';
          } else {
            echo '<span class="pagerNum"><a href="', get_pagenum_link($i), '" class="pagerNumLink">' . $i . '</a></span>';
          }
        } else {
          //省略記号：前
          if ($omitFlgBefore == false && ($paged - 2 > 2)) {
            $omitFlgBefore = true;
            echo '<span class="pagerNum"><div class="pagerNumLink">…</div></span>';
          } elseif ($omitFlgAfter == false && ($paged + 2 < $pages)) {
            $omitFlgAfter = true;
            echo '<span class="pagerNum"><div class="pagerNumLink">…</div></span>';
          }
        }
      }

      //リンク表示ここまで
    }
    echo '</li>';
    //echo '</select></label></li>';

    if ($paged == $pages) {
      echo '<li class="pagerBtn"><span class="pagerBtnLink next none">NEXT</span></li>';
      //echo '<li class="pagerBtn"><span class="pagerBtnEnd none">最後へ</span></li>';
    } else {
      echo '<li class="pagerBtn"><a href="', get_pagenum_link($paged + 1), '" class="pagerBtnLink next">NEXT</a></li>';
      //echo '<li class="pagerBtn"><a href="', get_pagenum_link( $pages ) ,'" class="pagerBtnEnd">最後へ</a></li>';
    }
    echo '</ul></div>';
  }

  return ob_get_clean();
}
// function enqueue_theme_styles() {
//   wp_enqueue_style('theme-style', get_stylesheet_uri());
// }
// add_action('wp_enqueue_scripts', 'enqueue_theme_styles');
function create_custom_post_types()
{
  register_post_type(
    'release',
    array(
      'labels' => array(
        'name' => __('リリース'),
        'singular_name' => __('Release'),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'release'),
      'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
      'menu_position' => 4,
    )
  );
  register_post_type(
    'news',
    array(
      'labels' => array(
        'name' => __('イベント'),
        'singular_name' => __('News'),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'news'),
      'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
      'menu_position' => 5,
      
    )
  );
  register_post_type(
    'media',
    array(
      'labels' => array(
        'name' => __('実績・メディア'),
        'singular_name' => __('Media'),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'media'),
      'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
      'menu_position' => 8,

    )
  );
}

add_action('init', 'create_custom_post_types');
