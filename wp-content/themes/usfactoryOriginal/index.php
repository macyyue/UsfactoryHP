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
<link rel="stylesheet" href="/common/css/slide.css">
<div class="topTitle">
  <h1>建築・建設業のお悩みをDXで解決します!!</h1>
</div>
<!--スライドショー-->
<div class="mainimg">
  <div><img src="/common/img/homepage/top-page_01.png" alt="" /></div>
  <div><img src="/common/img/homepage/top-page_02.png" alt="" /></div>
  <div><img src="/common/img/homepage/top-page_03.png" alt="" /></div>
  <div><img src="/common/img/homepage/top-page_04.png" alt="" /></div>
</div>
<!-- <div class="eng" role="presentation" data-astro-cid-utstonhj>
          <span data-astro-cid-utstonhj>建築・建設業のお悩みをDXで解決します！</span>
          <span data-astro-cid-utstonhj>建築・建設業のお悩みをDXで解決します！</span>
        </div> -->
<div id="container">
  <main>
    <!-- service -->
    <section>
      <h2>Service<span>サービス</span></h2>
      <div class="list-container">
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
          <p class="btn"><a href="/biforac/">詳細はコチラ</a></p>
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
          <p class="btn"><a href="/mokuzou/">詳細はコチラ</a></p>
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
          <p class="btn"><a href="/info360/">詳細はコチラ</a></p>
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
    </section>
    <section>
      <article id="mainWrap">
        <article id="contents">
          <div class="releaseWrap">
            <h2>Release<span>リリース情報</span></h2>
            <?php $args = array(
              'post_type' => 'release',
              'posts_per_page' => 3,
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
              <a href="<?php echo esc_url(home_url('release')); ?>">過去のリリースを見る</a>
            </div>
          </div>
          <div class="newsWrap">
            <h2>Event<span>イベント情報</span></h2>
            <?php $args = array(
              'post_type' => 'news',
              'posts_per_page' => 3,
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
          <div class="medialistWrap">
            <h2>Media<span>メディア情報</span></h2>
            <?php $args = array(
              'post_type' => 'media',
              'posts_per_page' => 3,
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
        <!-- sidebar -->
        <aside id="sidebar">
        <h2>Information<span>会社情報</span></h2>
          <div id="sub">
          <address class="box">
              <!-- <h2>BIM建設講座</h2> -->
              <a href="https://events.teams.microsoft.com/event/d2f041f0-2124-4e4d-ad6f-16f1ae81e6f8@9143b3f8-6101-47ea-bf82-d9e923b6a88e" target="_blank">
                <img src="common/img/20241128_05_webinar.png" />
              </a>
              <a href="/inquiry/" target="_blank">
                <img src="common/img/banner_campaign_AI-Structure_20241010.png" />
              </a>
              <!-- <p class="check">AIで建物モデルを自動作成する業務革命。
                <br>AI-Structureでつくる超簡単な3Dモデル作成方法とは?
              </p>
              <p>
                講師：上嶋　泰史
                <br>※参加無料
              </p> -->
            </address>
            <ul class="submenu">
              <li><a href="/interview01/">トップメッセージ<span>Top message</span></a></li>
              <li><a href="/company/">会社概要<span>Information</span></a></li>
              <li><a href="/recruit/">採用情報<span>Recruit</span></a></li>
              <li><a href="/inquiry/">お問い合わせ<span>Contact</span></a></li>
            </ul>
          </div>
        </aside>
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
<script src="/common/js/slick.js"></script>
<!--パララックス（inview）-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src="/common/js/jquery.inview_set.js"></script>