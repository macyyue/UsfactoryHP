<?php
/**
 * The template for displaying PDF archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package usfactory
 */

get_header(); ?>

<article id="mainWrap">

<article id="contentsWrap" class="pdfWrap">
<article id="contents">
<article class="mainContents pdflistWrap">
<h2>パンフレット</h2>
<?php
$args = array(
    'post_type' => 'pdf',
    'posts_per_page' => 10,
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
);
$query = new WP_Query($args);
?>
<div class="pdfListBoxCon">
<h3><span>統合レポート</span></h3>
<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
    $content = get_the_content();
    $pdf_url = '';
    if (preg_match('/<a href=["\']([^"\']+.pdf)["\']/', $content, $matches)) {
        $pdf_url = $matches[1];
    }
    ?>
<div class="pdfListBox">
    <?php if ($pdf_url) : ?>
            <p>
                <a href="<?php echo esc_url($pdf_url); ?>" target="_blank"><?php the_title(); ?><i class="fas fa-file-pdf"></i></a>
        </p>
    <?php else : ?>
            <h4><?php the_title(); ?></h4>
            <p><?php the_excerpt(); ?></p>
            </div>
    <?php endif; ?>
</div>
<?php endwhile; endif; ?>
<?php wp_reset_postdata(); ?>

<?php
if (function_exists('mainpagination')) {
    echo mainpagination($query->max_num_pages, get_query_var('paged'));
} else {
    the_posts_pagination();
}
?>
</article>

<?php get_sidebar(); ?>

</article>
</article>

<!-- /#mainWrap --></article>
<?php get_footer(); ?>
