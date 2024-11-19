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
  <ul class="service__list">
    <li><a href="/bi/"><img src="/common/img/banner01.png" width="490" alt=""></a></li>
    <li><a href="/mokuzou/"><img src="/common/img/banner02.png" width="490" alt=""></a></li>
    <li><a href="/robot/"><img src="/common/img/banner03.png" width="490" alt=""></a></li>
    <li><a href="/robot/"><img src="/common/img/banner04.png" width="490" alt=""></a></li>
  </ul>
</article>
<!-- 追加 -->
<article id="mainWrap">
  <article id="contentsWrap" class="topWrap">
    <article id="contents">

      <div class="releaseWrap">
        <div class="sectionHeader">
          <span>リリース</span>
        </div>
        <?php $args = array(
          'post_type' => 'release',
          'posts_per_page' => 10,
        ); ?>
        <?php $loop = new WP_Query($args); ?>
        <?php if ($loop->have_posts()) : ?>
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <dl>
              <dt><?php the_date("Y年n月j日"); ?></dt>
              <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
            </dl>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="newsWrap">
        <div class="sectionHeader">
          <span>イベント</span>
        </div>
        <?php $args = array(
          'post_type' => 'news',
          'posts_per_page' => 5,
        ); ?>
        <?php $loop = new WP_Query($args); ?>
        <?php if ($loop->have_posts()) : ?>
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <dl>
              <dt><?php the_date("Y年n月j日"); ?></dt>
              <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
            </dl>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <div class="viewMore">
          <a href="<?php echo esc_url(home_url('news')); ?>">過去のイベントを見る</a>
        </div>
      </div>

      <div class="mediaWrap">
        <div class="sectionHeader">
          <span>メディア</span>
        </div>
        <?php $args = array(
          'post_type' => 'media',
          'posts_per_page' => 4,
        ); ?>
        <?php $loop = new WP_Query($args); ?>
        <?php if ($loop->have_posts()) : ?>
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <dl>
              <dt><?php the_date("Y年n月j日"); ?></dt>
              <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
            </dl>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <div class="viewMore">
          <a href="<?php echo esc_url(home_url('media')); ?>">過去のメディアを見る</a>
        </div>
      </div>
    </article>
    <aside id="sidebar">
      <div class="topLinkBox">
        <ul>
        <li><a href="https://events.teams.microsoft.com/event/f3bbdb24-61cb-4d07-9978-bf6c313e5eda@9143b3f8-6101-47ea-bf82-d9e923b6a88e" target="_blank">
          <img src="common/img/20241101_04_webinar.png" width="320" height="160" />
        </a>
      </li>
        <li><a href="/inquiry/" target="_blank">
          <img src="common/img/banner_campaign_AI-Structure_20241010.png" width="320" height="160" />
        </a>
      </li>
          <li><a href="/company/"><img src="common/img/ftNav01.jpg" width="320" height="120" alt=""></a></li>
          <li><a href="/inquiry/"><img src="common/img/ftNav03.jpg" width="320" height="120" alt=""></a></li>
          <li><a href="/recruit/"><img src="common/img/ftNav04.jpg" width="320" height="120" alt=""></a></li>
          <li><a href="https://us-factory.jp/media/companytank202209/"><img src="common/img/ct-banner.jpg" alt="" width="320" height="190" /></a></li>
          <!-- <li><a href="/interview/"><img src="common/img/lp/lpBanner.jpg" alt="次世代経営者のCEOスタイルマガジンSUPERCEOで当社特集掲載中" width="320" height="160" /></a></li> -->
          <li><a href="/recruit/interview01/"><img src="/common/img/int/interview01.png" /></a></li>
          <li><a href="/recruit/interview02/"><img src="/common/img/int/interview02.png" /></a></li>
          <!--<li><a href="http://superceo.jp/book/company/i14012/#!3" target="_blank"><img src="http://superceo.jp/book/company/i14012/bnr/i14012.jpg" alt="次世代経営者のCEOスタイルマガジンSUPERCEOで当社特集掲載中" width="320" height="160" /></a></li>-->
        </ul>
      </div>
    </aside>
  </article>
</article>

<?php get_footer(); ?>