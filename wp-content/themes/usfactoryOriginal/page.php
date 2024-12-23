<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package usfactory
 */

get_header(); ?>

<article id="mainWrap">

<article id="contentsWrap" class="subWrap">
<article id="contents">
			<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>

</article>
</article>

<!-- /#mainWrap --></article>


<?php get_footer(); ?>
