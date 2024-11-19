<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package usfactory
 */

get_header(); ?>

<article id="mainWrap">

<article id="contentsWrap" class="subWrap">
<article id="contents">
<article class="mainContents releaselistWrap">
<h2>リリース</h2>
<h3><span>RELEASE</span></h3>
<?php query_posts('post_type=release'); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="releaselistBox">
<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
<p><a href="<?php the_permalink(); ?>"><?php the_excerpt(__('続きを読む')); ?></a></p>
</div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

<?php if ( function_exists( 'mainpagination' )){
  echo mainpagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
  }
?>
</article>

<?php get_sidebar(); ?>

</article>
</article>

<!-- /#mainWrap --></article>
<?php get_footer(); ?>
