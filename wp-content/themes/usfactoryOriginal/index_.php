<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package usfactory
 */

get_header(); ?>

<article id="mainVI">
<ul>
<li><a href="/robot/"><img src="/common/img/mainImg01.jpg" width="490" height="320" alt=""></a></li>
<li><a href="/bi/"><img src="/common/img/mainImg02.jpg" width="490" height="320" alt=""></a></li>
</ul>
</article>


<article id="mainWrap">

<article id="contentsWrap" class="topWrap">
<article id="contents">

<div class="newsWrap">
<h3><img src="/common/img/newsTitle.png" width="660" height="30" alt=""></h3>
<?php $args = array(
        'post_type' => array('news','media'),
     'posts_per_page' => 10,
); ?>
<?php $loop = new WP_Query( $args ); ?>
<?php if($loop -> have_posts()): ?>
<?php while($loop -> have_posts()): $loop->the_post();?>
<dl>
<dt><?php the_date("Y年n月j日"); ?></dt><dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
</dl>
<?php endwhile; endif; ?>
<?php wp_reset_postdata(); ?>


</div>

<div class="topLinkBox">
<ul>
<li><a href="/company/"><img src="common/img/ftNav01.jpg" width="320" height="120" alt=""></a></li>
<li><a href="/inquiry/"><img src="common/img/ftNav03.jpg" width="320" height="120" alt=""></a></li>
<li><a href="/recruit/"><img src="common/img/ftNav04.jpg" width="320" height="120" alt=""></a></li>
<li><a href="/interview/"><img src="common/img/lp/lpBanner.jpg" alt="次世代経営者のCEOスタイルマガジンSUPERCEOで当社特集掲載中" width="320" height="160" /></a></li>
<!--<li><a href="http://superceo.jp/book/company/i14012/#!3" target="_blank"><img src="http://superceo.jp/book/company/i14012/bnr/i14012.jpg" alt="次世代経営者のCEOスタイルマガジンSUPERCEOで当社特集掲載中" width="320" height="160" /></a></li>-->
</ul>
</div>


</article>
</article>

<!-- /#mainWrap --></article>

<?php get_footer(); ?>
