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
<link rel="stylesheet" href="/common/css/slide01.css">

<!--スライドショー-->
<!-- <div class="mainimg">

  <div><img src="/common/img/homepage/top-page_01.png" alt="" /></div>
  <div><img src="/common/img/homepage/top-page_02.png" alt="" /></div>
  <div><img src="/common/img/homepage/top-page_03.png" alt="" /></div>
  <div><img src="/common/img/homepage/top-page_04.png" alt="" /></div>
</div> -->

<aside id="mainimg">

<div class="slide slide1">
<div>
<p>
<span>建築・建設業のお悩みを</span><br>
<span>DXで解決します。</span>
</p>
</div>
</div>

<div class="slide slide2">
<div>
<p>
<span>建築・建設業のお悩みを</span><br>
<span>DXで解決します。</span>
</p>
</div>
</div>

<div class="slide slide3">
<div>
<p>
<span>ゼネコン・サブコン様における</span><br>
<span>熟練技術者不足の問題を解決する会社</span>
</p>
</div>
</div>
</aside>
<div class="thumbnail-slide">
<a href="#"><img src="/common/img/homepage/top-page_01.png" alt=""></a>
<a href="#"><img src="/common/img/homepage/top-page_02.png" alt=""></a>
<a href="#"><img src="/common/img/homepage/top-page_03.png" alt=""></a>
<a href="#"><img src="/common/img/homepage/top-page_04.png" alt=""></a>
<a href="#"><img src="/common/img/homepage/top-page_01.png" alt=""></a>
<a href="#"><img src="/common/img/homepage/top-page_02.png" alt=""></a>
<a href="#"><img src="/common/img/homepage/top-page_03.png" alt=""></a>
<a href="#"><img src="/common/img/homepage/top-page_04.png" alt=""></a>
</div>
<div id="container">
<main>
  <section data-aos="fade-down">
    <h2 class="flag" data-aos="fade-down">Service<span>サービス</span></h2>
    <div class="list-container" data-aos="fade-down">
      <div class="list blur">
        <figure>
          <img
            loading="lazy"
            decoding="async"
            src="/common/img/homepage/top-page_BIforAC_01.png" alt="">
        </figure>
        <div class="text">
          <h4>BI for AC<span class="trademark">®</span></h4>
          <p>BIM積算の決定版!建材の自動発生~集計に加え、施工検討や工程シミュレーションが出来るArchicad<span class="trademark">®</span>プラグインソフトです。</p>
        </div>
        <p class="btn"><a href="event.html">詳細はコチラ</a></p>
        <!-- <span class="icon">NEW</span> -->
      </div>
      <div class="list blur">
        <figure>
          <img src="/common/img/homepage/top-page_BIforAC_mokuzo_01.png"
            alt=""
            loading="lazy"
            decoding="async">
        </figure>
        <div class="text">
          <h4>Bl for AC<span class="trademark">®</span> x木造住宅</h4>
          <p>CEDXMデータを読込んで建物モデルを自動作成する機能や、構造金物の自動発生など、木造住宅に特化した機能を集約しました。</p>
        </div>
        <p class="btn"><a href="event.html">詳細はコチラ</a></p>
      </div>

      <div class="list blur">
        <figure><img src="/common/img/homepage/top-page_Info360_01.png"
            alt=""
            loading="lazy"
            decoding="async">
        </figure>
        <div class="text">
          <h4>Info360<span class="trademark">®</span></h4>
          <p>点群データやIFCモデル等の3Dや、図面等の資料をWEBで表示共有が出来るデジタルツインです。BCFも兼ね備え、現場管理に活用出来ます。</p>
        </div>
        <p class="btn"><a href="event.html">詳細はコチラ</a></p>
      </div>

      <div class="list blur">
        <figure><img src="/common/img/homepage/top-page_tengun_01.png"
            alt=""
            loading="lazy"
            decoding="async">
        </figure>
        <div class="text">
          <h4>点群計測サービス</h4>
          <p>高精度3Dレーザー測量機による建築物等の計測～点群合成～BIM作成まで担うー貫サポートです。測量機のレンタルサービスも行います。</p>
        </div>
        <p class="btn"><a href="event.html">詳細はコチラ</a></p>
      </div>
    </div>
    <!--/.list-container-->
  </section>

<!-- 追加 -->
 <section>
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
        <!-- <ul>
          <li><a href="https://events.teams.microsoft.com/event/f9e35d2a-8c2d-4a9f-b55d-936fc344f8e6@9143b3f8-6101-47ea-bf82-d9e923b6a88e" target="_blank">
              <img src="common/img/20240927_third_webinar.png" width="320" height="160" />
            </a>
          </li>
          <li><a href="/company/"><img src="common/img/ftNav01.jpg" width="300" height="120" alt=""></a></li>
          <li><a href="/inquiry/"><img src="common/img/ftNav03.jpg" width="320" height="120" alt=""></a></li>
          <li><a href="/recruit/"><img src="common/img/ftNav04.jpg" width="320" height="120" alt=""></a></li>
          <li><a href="https://us-factory.jp/media/companytank202209/"><img src="common/img/ct-banner.jpg" alt="" width="320" height="190" /></a></li>
          <li><a href="/recruit/interview01/"><img src="/common/img/int/interview01.png" /></a></li>
          <li><a href="/recruit/interview02/"><img src="/common/img/int/interview02.png" /></a></li>
        </ul> -->
        <ul class="submenu">
        <li><a href="index.html">ホーム<span>Home</span></a></li>
        <li><a href="info.html">当院について<span>Information</span></a></li>
        <li><a href="medical.html">診療科目<span>Medical</span></a></li>
        <li><a href="staff.html">スタッフ紹介<span>Staff</span></a></li>
        <li><a href="faq.html">よく頂く質問<span>Faq</span></a></li>
        <li><a href="access.html">アクセス<span>Access</span></a></li>
        <li><a href="contact.html">お問い合わせ<span>Contact</span></a></li>
        </ul>
      </div>
    </aside>
  </article>
</article>
 </section>

</main>
</div>


<?php get_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
      AOS.init({
        once: true,
      });
    </script>
<!--jQueryファイルの読み込み-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--スライドショー（slick）-->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="/common/js/slick01.js"></script>
<!--パララックス（inview）-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src="/common/js/jquery.inview_set.js"></script>
<script src="/common/js/main.js"></script>
